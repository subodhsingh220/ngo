<?php
namespace Magpieinfotech\Banner\Model;

class Banner extends \Magento\Framework\Model\AbstractModel
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Magpieinfotech\Banner\Model\ResourceModel\Banner');
    }
}
?>