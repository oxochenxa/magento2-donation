<?php
namespace SoftwareEngineer\Donation\Block;

class Donation extends \Magento\Framework\View\Element\Template
{
    const TITLE = 'donation/general/title';
    const DES = 'donation/general/description';
    const LIST_MONEY_DONATION = 'donation/general/amount_option';
    const IMAGE = 'donation/general/image';
    const ENABLE = 'donation/general/enable';

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    )
    {
        $this->scopeConfig = $scopeConfig;
        parent::__construct($context);
    }

    public function getTitle(){
        $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
        return $this->scopeConfig->getValue(self::TITLE, $storeScope);
    }

    public function getDescription(){
        $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
        return $this->scopeConfig->getValue(self::DES, $storeScope);
    }

    public function getListMoney(){
        $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
        return $this->scopeConfig->getValue(self::LIST_MONEY_DONATION, $storeScope);
    }

    public function getImage(){
        $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
        return $this->scopeConfig->getValue(self::IMAGE, $storeScope);
    }

    public function checkEnable(){
        $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
        return $this->scopeConfig->getValue(self::ENABLE, $storeScope);
    }
}
