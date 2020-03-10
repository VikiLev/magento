<?php


namespace Vika\QuickOrder\Model;


use Magento\Framework\Model\AbstractModel;
use Vika\QuickOrder\Model\ResourceModel\QuickOrder as ResourceModel;

class QuickOrder extends AbstractModel
{
    public function _construct()
    {
        $this->_init(ResourceModel::class);
    }
}