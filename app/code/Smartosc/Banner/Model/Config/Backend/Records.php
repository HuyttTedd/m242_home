<?php

namespace Smartosc\Banner\Model\Config\Backend;

use Magento\Framework\App\Cache\TypeListInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\App\Config\Value;
use Magento\Framework\Data\Collection\AbstractDb;
use Magento\Framework\Model\Context;
use Magento\Framework\Model\ResourceModel\AbstractResource;
use Magento\Framework\Registry;
use Smartosc\Banner\Model\Config\Website as WebsiteConfig;

/**
 * Config model for Tax Override
 */
class Records extends Value
{
    /** @var WebsiteConfig */
    private $websiteConfig;

    /**
     * @param Context $context
     * @param Registry $registry
     * @param ScopeConfigInterface $config
     * @param TypeListInterface $cacheTypeList
     * @param WebsiteConfig $websiteConfig
     * @param AbstractResource|null $resource
     * @param AbstractDb|null $resourceCollection
     * @param array $data
     */
    public function __construct(
        Context $context,
        Registry $registry,
        ScopeConfigInterface $config,
        TypeListInterface $cacheTypeList,
        WebsiteConfig $websiteConfig,
        AbstractResource $resource = null,
        AbstractDb $resourceCollection = null,
        array $data = []
    ) {
        parent::__construct($context, $registry, $config, $cacheTypeList, $resource, $resourceCollection, $data);
        $this->websiteConfig = $websiteConfig;
    }

    /**
     * Unserialize the value loaded from the database
     *
     * @return $this
     */
    protected function _afterLoad()
    {
        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/test.log');
                $logger = new \Zend\Log\Logger();
                $logger->addWriter($writer);
        $value = $this->websiteConfig->makeArrayFieldValue($this->getValue());
                $logger->info($value);
        $this->setValue($value);
        return $this;
    }

    /**
     * Serialize the value before it is saved to the database
     *
     * @return $this
     */
    public function beforeSave()
    {
        $value = $this->websiteConfig->makeStorableArrayFieldValue($this->getValue());
        $this->setValue($value);
        return $this;
    }
}
