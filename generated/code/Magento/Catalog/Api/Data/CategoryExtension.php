<?php
namespace Magento\Catalog\Api\Data;

/**
 * Extension class for @see \Magento\Catalog\Api\Data\CategoryInterface
 */
class CategoryExtension extends \Magento\Framework\Api\AbstractSimpleObject implements CategoryExtensionInterface
{
    /**
     * @return \Mageplaza\PromoBanner\Api\Data\PromoBannerSearchResultsInterface|null
     */
    public function getMpPromoBanners()
    {
        return $this->_get('mp_promo_banners');
    }

    /**
     * @param \Mageplaza\PromoBanner\Api\Data\PromoBannerSearchResultsInterface $mpPromoBanners
     * @return $this
     */
    public function setMpPromoBanners(\Mageplaza\PromoBanner\Api\Data\PromoBannerSearchResultsInterface $mpPromoBanners)
    {
        $this->setData('mp_promo_banners', $mpPromoBanners);
        return $this;
    }
}
