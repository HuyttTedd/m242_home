<?php
namespace Mageplaza\PromoBanner\Controller\Adminhtml\Banner\InlineEdit;

/**
 * Interceptor class for @see \Mageplaza\PromoBanner\Controller\Adminhtml\Banner\InlineEdit
 */
class Interceptor extends \Mageplaza\PromoBanner\Controller\Adminhtml\Banner\InlineEdit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Controller\Result\JsonFactory $jsonFactory, \Mageplaza\PromoBanner\Model\BannerFactory $bannerFactory, \Mageplaza\PromoBanner\Model\ResourceModel\Banner $resourceModel, \Magento\Backend\App\Action\Context $context)
    {
        $this->___init();
        parent::__construct($jsonFactory, $bannerFactory, $resourceModel, $context);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
