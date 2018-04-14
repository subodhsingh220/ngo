<?php

namespace Magpieinfotech\Campaign\Model\ResourceModel\Campaign;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Magpieinfotech\Campaign\Model\Campaign', 'Magpieinfotech\Campaign\Model\ResourceModel\Campaign');
        $this->_map['fields']['page_id'] = 'main_table.page_id';
    }

}
?>