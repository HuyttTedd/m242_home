<?php

namespace Smartosc\Banner\Block\Adminhtml\Config\Form\Field;

use Magento\Framework\View\Element\Context;
use Magento\Framework\View\Element\Html\Select;
use Smartosc\Banner\Model\Source\Website;

/**
 * HTML select for countries
 */
class Websites extends Select
{
    /** @var Website */
    private $website;

    /**
     * @param Context $context
     * @param Website $website
     * @param array $data
     */
    public function __construct(Context $context, Website $website, array $data = [])
    {
        parent::__construct($context, $data);
        $this->website = $website;
    }

    /**
     * Get country options
     *
     * @return array
     */
    public function getOptions()
    {
        return $this->website->toOptionArray();
    }

    /**
     * Sets name for input element
     *
     * @param string $value
     * @return $this
     */
    public function setInputName($value)
    {
        return $this->setData('name', $value);
    }
}
