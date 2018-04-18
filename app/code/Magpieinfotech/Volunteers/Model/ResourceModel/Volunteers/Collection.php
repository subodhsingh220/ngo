<?php

namespace Magpieinfotech\Volunteers\Model\ResourceModel\Volunteers;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Magpieinfotech\Volunteers\Model\Volunteers', 'Magpieinfotech\Volunteers\Model\ResourceModel\Volunteers');
        $this->_map['fields']['page_id'] = 'main_table.page_id';
    }

}
?>