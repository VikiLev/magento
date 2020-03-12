<?php


namespace Vika\QuickOrder\Model\ResourceModel;


use Magento\Framework\Model\ResourceModel\Db\AbstractDb;


class QuickOrder extends AbstractDb
{

    protected function _construct()
    {
        $this->_init('quickorder', 'order_id');
    }

}