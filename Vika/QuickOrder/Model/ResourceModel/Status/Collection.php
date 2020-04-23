<?php

namespace Vika\QuickOrder\Model\ResourceModel\Status;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Vika\QuickOrder\Model\ResourceModel\Status as ResourceModel;
use Vika\QuickOrder\Model\Status as Model;

class Collection extends AbstractCollection
{
    public function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}
