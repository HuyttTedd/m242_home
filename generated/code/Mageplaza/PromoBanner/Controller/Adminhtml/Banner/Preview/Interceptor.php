<?php
namespace Mageplaza\PromoBanner\Controller\Adminhtml\Banner\Preview;

/**
 * Interceptor class for @see \Mageplaza\PromoBanner\Controller\Adminhtml\Banner\Preview
 */
class Interceptor extends \Mageplaza\PromoBanner\Controller\Adminhtml\Banner\Preview implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Backend\Model\View\Result\ForwardFactory $resultForwardFactory, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Framework\Registry $coreRegistry, \Mageplaza\PromoBanner\Model\BannerFactory $bannerFactory, \Mageplaza\PromoBanner\Model\ResourceModel\Banner $resourceModel, \Magento\Framework\Stdlib\DateTime\Filter\Date $dateFilter, \Mageplaza\PromoBanner\Helper\Data $helperData, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($context, $resultForwardFactory, $resultPageFactory, $coreRegistry, $bannerFactory, $resourceModel, $dateFilter, $helperData, $logger);
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
