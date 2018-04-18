<?php

namespace Magpieinfotech\Banner\Model\ResourceModel\Banner;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Magpieinfotech\Banner\Model\Banner', 'Magpieinfotech\Banner\Model\ResourceModel\Banner');
        $this->_map['fields']['page_id'] = 'main_table.page_id';
    }

}
?>