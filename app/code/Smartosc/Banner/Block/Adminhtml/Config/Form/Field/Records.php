<?php

namespace Smartosc\Banner\Block\Adminhtml\Config\Form\Field;

use Magento\Config\Block\System\Config\Form\Field\FieldArray\AbstractFieldArray;
use Magento\Framework\Exception\LocalizedException;

/**
 * Backend Records system config field renderer
 */
class Records extends AbstractFieldArray
{
    /** @var Websites */
    private $websitesRenderer;

    /**
     * @inheritdoc
     */
    protected function _prepareToRender()
    {
        $this->addColumn(
            'website_id',
            [
                'label' => __('Websites'),
                'renderer' => $this->getWebsitesRenderer(),
            ]
        );
        $this->addColumn('url', ['label' => __('Path'), 'renderer' => false, 'class' => 'required-entry']);
        $this->_addAfter = false;
        $this->_addButtonLabel = __('Add');
    }

    /**
     * @inheritdoc
     */
    protected function _prepareArrayRow(\Magento\Framework\DataObject $row)
    {
        $websiteId = $row->getData('website_id');
        $options = [];
        if ($websiteId) {
            $name = 'option_'.$this->getWebsitesRenderer()->calcOptionHash($websiteId);
            $options[$name] = 'selected="selected"';
        }
        $row->setData('option_extra_attrs', $options);
    }

    /**
     * Retrieve countries renderer
     *
     * @return Websites
     * @throws LocalizedException
     */
    private function getWebsitesRenderer()
    {
        if (!$this->websitesRenderer) {
            $this->websitesRenderer = $this->getLayout()->createBlock(
                Websites::class,
                '',
                [
                    'data' => [
                        'is_render_to_js_template' => true
                    ],
                ]
            );
        }

        return $this->websitesRenderer;
    }
}
