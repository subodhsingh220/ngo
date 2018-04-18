<?php
namespace Magpieinfotech\Gallery\Model;

class Gallery extends \Magento\Framework\Model\AbstractModel
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Magpieinfotech\Gallery\Model\ResourceModel\Gallery');
    }
}
?>