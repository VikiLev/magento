<?php


namespace Vika\QuickOrder\Controller\Adminhtml\Index;

use Vika\QuickOrder\Controller\Adminhtml\Order;

class Listing extends Order
{
    const ACL_RESOURCE      = 'Vika_QuickOrder::grid';
    const MENU_ITEM         = 'Vika_QuickOrder::grid';
    const PAGE_TITLE        = 'Order Grid';
    const BREADCRUMB_TITLE  = 'Order Grid';
}
