<?php
namespace Magento\Catalog\Api\Data;

/**
 * ExtensionInterface class for @see \Magento\Catalog\Api\Data\CategoryInterface
 */
interface CategoryExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
    /**
     * @return \Mageplaza\PromoBanner\Api\Data\PromoBannerSearchResultsInterface|null
     */
    public function getMpPromoBanners();

    /**
     * @param \Mageplaza\PromoBanner\Api\Data\PromoBannerSearchResultsInterface $mpPromoBanners
     * @return $this
     */
    public function setMpPromoBanners(\Mageplaza\PromoBanner\Api\Data\PromoBannerSearchResultsInterface $mpPromoBanners);
}
