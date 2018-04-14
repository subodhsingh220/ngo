<?php

namespace Magpieinfotech\Gallery\Model\ResourceModel\Gallery;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Magpieinfotech\Gallery\Model\Gallery', 'Magpieinfotech\Gallery\Model\ResourceModel\Gallery');
        $this->_map['fields']['page_id'] = 'main_table.page_id';
    }

}
?>