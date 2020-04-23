<?php

namespace Vika\QuickOrder\Controller\Adminhtml\Index;

use Vika\QuickOrder\Controller\Adminhtml\Status;

class StatusListing extends Status
{
    const ACL_RESOURCE      = 'Vika_QuickOrder::status';
    const MENU_ITEM         = 'Vika_QuickOrder::status';
    const PAGE_TITLE        = 'Status Grid';
    const BREADCRUMB_TITLE  = 'Status Grid';
}
