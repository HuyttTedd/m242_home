<?php
namespace Mageplaza\PromoBanner\Controller\Adminhtml\Banner\Save;

/**
 * Interceptor class for @see \Mageplaza\PromoBanner\Controller\Adminhtml\Banner\Save
 */
class Interceptor extends \Mageplaza\PromoBanner\Controller\Adminhtml\Banner\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Backend\Model\View\Result\ForwardFactory $resultForwardFactory, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Framework\Registry $coreRegistry, \Mageplaza\PromoBanner\Model\BannerFactory $bannerFactory, \Mageplaza\PromoBanner\Model\ResourceModel\Banner $resourceModel, \Magento\Framework\Stdlib\DateTime\Filter\Date $dateFilter, \Mageplaza\PromoBanner\Helper\Data $helperData, \Psr\Log\LoggerInterface $logger, \Mageplaza\PromoBanner\Helper\Image $helperImage, \Mageplaza\PromoBanner\Model\Config\Source\Type $bannerType, \Magento\Framework\App\Request\DataPersistorInterface $dataPersistor)
    {
        $this->___init();
        parent::__construct($context, $resultForwardFactory, $resultPageFactory, $coreRegistry, $bannerFactory, $resourceModel, $dateFilter, $helperData, $logger, $helperImage, $bannerType, $dataPersistor);
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
