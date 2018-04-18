<?php
namespace Magpieinfotech\Volunteers\Block\Adminhtml\Volunteers\Edit;

/**
 * Admin page left menu
 */
class Tabs extends \Magento\Backend\Block\Widget\Tabs
{
    /**
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setId('volunteers_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(__('Volunteers Information'));
    }
}