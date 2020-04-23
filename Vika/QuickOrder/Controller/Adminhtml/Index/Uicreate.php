<?php


namespace Vika\QuickOrder\Controller\Adminhtml\Index;


use Vika\QuickOrder\Controller\Adminhtml\Order;

class Uicreate extends Order
{
    const ACL_RESOURCE      = 'Sysint_MagentoAcademy::create';
    const MENU_ITEM         = 'Sysint_MagentoAcademy::ui_create';
    const PAGE_TITLE        = 'Add Order';
    const BREADCRUMB_TITLE  = 'Add Order';
}
