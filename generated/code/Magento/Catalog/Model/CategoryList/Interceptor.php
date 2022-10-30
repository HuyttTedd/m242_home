<?php
namespace Magento\Catalog\Model\CategoryList;

/**
 * Interceptor class for @see \Magento\Catalog\Model\CategoryList
 */
class Interceptor extends \Magento\Catalog\Model\CategoryList implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Model\ResourceModel\Category\CollectionFactory $categoryCollectionFactory, \Magento\Framework\Api\ExtensionAttribute\JoinProcessorInterface $extensionAttributesJoinProcessor, \Magento\Catalog\Api\Data\CategorySearchResultsInterfaceFactory $categorySearchResultsFactory, \Magento\Catalog\Api\CategoryRepositoryInterface $categoryRepository, ?\Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface $collectionProcessor = null)
    {
        $this->___init();
        parent::__construct($categoryCollectionFactory, $extensionAttributesJoinProcessor, $categorySearchResultsFactory, $categoryRepository, $collectionProcessor);
    }

    /**
     * {@inheritdoc}
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getList');
        return $pluginInfo ? $this->___callPlugins('getList', func_get_args(), $pluginInfo) : parent::getList($searchCriteria);
    }
}
