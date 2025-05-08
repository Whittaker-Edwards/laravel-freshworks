<?php

namespace Whittaker\Freshworks\Api;

use Whittaker\Freshworks\Client;
use Whittaker\Freshworks\Traits\CanPaginate;
use Whittaker\Freshworks\Traits\PerformsCrudOperations;

class SalesActivities extends Client
{
    use PerformsCrudOperations;
    use CanPaginate;

    private $resource = 'sales_activities';
}
