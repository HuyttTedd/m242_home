<?php
namespace Mageplaza\PromoBanner\Block\Adminhtml\Config\Field\SliderImage;

/**
 * Interceptor class for @see \Mageplaza\PromoBanner\Block\Adminhtml\Config\Field\SliderImage
 */
class Interceptor extends \Mageplaza\PromoBanner\Block\Adminhtml\Config\Field\SliderImage implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Mageplaza\PromoBanner\Helper\Image $helperImage, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $helperImage, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function render(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'render');
        return $pluginInfo ? $this->___callPlugins('render', func_get_args(), $pluginInfo) : parent::render($element);
    }
}
