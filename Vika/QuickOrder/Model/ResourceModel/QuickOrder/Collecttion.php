<?php


namespace Vika\QuickOrder\Model\ResourceModel\QuickOrder;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Vika\QuickOrder\Model\QuickOrder as Model;
use Vika\QuickOrder\Model\ResourceModel as ResourceModel;

class Collection extends AbstractCollection
{
    public function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}