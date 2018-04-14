<?php
namespace Magpieinfotech\Volunteers\Model;

class Volunteers extends \Magento\Framework\Model\AbstractModel
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Magpieinfotech\Volunteers\Model\ResourceModel\Volunteers');
    }
}
?>