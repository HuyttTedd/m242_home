<?php
namespace Magento\Quote\Api\Data;

/**
 * ExtensionInterface class for @see \Magento\Quote\Api\Data\TotalsInterface
 */
interface TotalsExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
    /**
     * @return string|null
     */
    public function getCouponLabel();

    /**
     * @param string $couponLabel
     * @return $this
     */
    public function setCouponLabel($couponLabel);

    /**
     * @return array|null
     */
    public function getMpPromoBanner();

    /**
     * @param array $mpPromoBanner
     * @return $this
     */
    public function setMpPromoBanner(array $mpPromoBanner);
}
