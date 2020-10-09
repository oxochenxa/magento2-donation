<?php
namespace SoftwareEngineer\Donation\Model\Total\Quote;
/**
 * Class Donation
 * @package SoftwareEngineer\Donation\Model\Total\Quote
 */
class Donation extends \Magento\Quote\Model\Quote\Address\Total\AbstractTotal
{
    /**
     * @var \Magento\Framework\Pricing\PriceCurrencyInterface
     */
    protected $_priceCurrency;
    /**
     * Custom constructor.
     * @param \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency
     */
    public function __construct(
        \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency
    ){
        $this->_priceCurrency = $priceCurrency;
    }
    /**
     * @param \Magento\Quote\Model\Quote $quote
     * @param \Magento\Quote\Api\Data\ShippingAssignmentInterface $shippingAssignment
     * @param \Magento\Quote\Model\Quote\Address\Total $total
     * @return $this|bool
     */
    public function collect(
        \Magento\Quote\Model\Quote $quote,
        \Magento\Quote\Api\Data\ShippingAssignmentInterface $shippingAssignment,
        \Magento\Quote\Model\Quote\Address\Total $total
    )
    {
        parent::collect($quote, $shippingAssignment, $total);
        $baseDonation = 0;
        foreach ($quote->getAllItems() as $item) {
            $baseDonation += $item->getDonation();
        }

        $donation =  $this->_priceCurrency->convert($baseDonation);
        $total->addTotalAmount('donation', $donation);
        $total->addBaseTotalAmount('donation', $baseDonation);
        $total->setBaseGrandTotal($total->getBaseGrandTotal() + $baseDonation);
        $quote->setDonation($donation);
        $quote->save();
        return $this;
    }
}
