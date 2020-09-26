<?php
/**
 * @author: Van Minh - nguyenvanminh.dev@gmail.com
 * @created: 9/24/20 14:45 PM
 */

namespace SoftwareEngineer\Donation\Block\Adminhtml\System\Config;

use Magento\Backend\Block\Template\Context;
use Magento\Cms\Model\Wysiwyg\Config as WysiwygConfig;

/**
 * Class Editor
 *
 * @description Block class to define new RTE field.
 * @package     SoftwareEngineer\Theme\Block\Adminhtml\System\Config
 */
class Editor extends \Magento\Config\Block\System\Config\Form\Field
{
    /**
     * @param Context       $context
     * @param WysiwygConfig $wysiwygConfig
     * @param array         $data
     */
    public function __construct(
        Context $context,
        WysiwygConfig $wysiwygConfig,
        array $data = []
    ) {
        $this->_wysiwygConfig = $wysiwygConfig;
        parent::__construct($context, $data);
    }

    protected function _getElementHtml(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        $element->setWysiwyg(true);
        $element->setConfig($this->_wysiwygConfig->getConfig($element));
        return parent::_getElementHtml($element);
    }
}
