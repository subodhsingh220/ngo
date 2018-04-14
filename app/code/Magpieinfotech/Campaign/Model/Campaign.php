<?php
namespace Magpieinfotech\Campaign\Model;

class Campaign extends \Magento\Framework\Model\AbstractModel
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Magpieinfotech\Campaign\Model\ResourceModel\Campaign');
    }
}
?>