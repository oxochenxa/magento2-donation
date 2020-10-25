<?php

namespace SoftwareEngineer\Donation\Block\Adminhtml\Sales\Order\Creditmemo;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Magento\Framework\DataObject;

class Totals extends Template
{
    /**
     * Order invoice
     *
     * @var \Magento\Sales\Model\Order\Creditmemo|null
     */
    protected $_creditmemo = null;

    /**
     * @var \Magento\Framework\DataObject
     */
    protected $_source;

    /**
     * OrderFee constructor.
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */
    public function __construct(
        Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }

    /**
     * Get data (totals) source model
     *
     * @return \Magento\Framework\DataObject
     */
    public function getSource()
    {
        return $this->getParentBlock()->getSource();
    }

    public function getCreditmemo()
    {
        return $this->getParentBlock()->getCreditmemo();
    }
    /**
     * Initialize payment donation totals
     *
     * @return $this
     */
    public function initTotals()
    {
        $this->getParentBlock();
        $this->getCreditmemo();
        $this->getSource();

        if(!$this->getSource()->getDonation()) {
            return $this;
        }
        $donation = new DataObject(
            [
                'code' => 'donation',
                'strong' => false,
                'value' => $this->getSource()->getDonation(),
                'label' => 'Donate to the store'
            ]
        );

        $this->getParentBlock()->addTotalBefore($donation, 'grand_total');

        return $this;
    }
}
