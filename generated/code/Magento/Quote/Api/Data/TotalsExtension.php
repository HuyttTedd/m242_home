<?php
namespace Magento\Quote\Api\Data;

/**
 * Extension class for @see \Magento\Quote\Api\Data\TotalsInterface
 */
class TotalsExtension extends \Magento\Framework\Api\AbstractSimpleObject implements TotalsExtensionInterface
{
    /**
     * @return string|null
     */
    public function getCouponLabel()
    {
        return $this->_get('coupon_label');
    }

    /**
     * @param string $couponLabel
     * @return $this
     */
    public function setCouponLabel($couponLabel)
    {
        $this->setData('coupon_label', $couponLabel);
        return $this;
    }

    /**
     * @return array|null
     */
    public function getMpPromoBanner()
    {
        return $this->_get('mp_promo_banner');
    }

    /**
     * @param array $mpPromoBanner
     * @return $this
     */
    public function setMpPromoBanner(array $mpPromoBanner)
    {
        $this->setData('mp_promo_banner', $mpPromoBanner);
        return $this;
    }
}
