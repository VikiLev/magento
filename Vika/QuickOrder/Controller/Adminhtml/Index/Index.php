<?php

namespace Vika\QuickOrder\Controller\Adminhtml\Index;

use Vika\QuickOrder\Controller\Adminhtml\Order as BaseAction;

class Index extends BaseAction
{
    const ACL_RESOURCE      = 'Vika_QuickOrder::all';
    const MENU_ITEM         = 'Vika_QuickOrder::all';
    const PAGE_TITLE        = 'Order Grid';
    const BREADCRUMB_TITLE  = 'Order Grid';
}
