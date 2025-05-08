<?php

namespace Whittaker\Freshworks\Api;

use Whittaker\Freshworks\Client;
use Whittaker\Freshworks\Traits\CanBeForgotten;
use Whittaker\Freshworks\Traits\CanBulkDestroy;
use Whittaker\Freshworks\Traits\CanCloneItself;
use Whittaker\Freshworks\Traits\CanPaginate;
use Whittaker\Freshworks\Traits\HasFilters;
use Whittaker\Freshworks\Traits\HasFields;
use Whittaker\Freshworks\Traits\PerformsCrudOperations;

class Accounts extends Client
{
    use PerformsCrudOperations;
    use CanCloneItself;
    use CanBulkDestroy;
    use CanPaginate;
    use HasFilters;
    use HasFields;
    use CanBeForgotten;

    private $resource = 'sales_accounts';
}
