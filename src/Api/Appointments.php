<?php

namespace Whittaker\Freshworks\Api;

use Whittaker\Freshworks\Client;
use Whittaker\Freshworks\Traits\CanPaginate;
use Whittaker\Freshworks\Traits\PerformsCrudOperations;

class Appointments extends Client
{
    use PerformsCrudOperations;
    use CanPaginate;

    private $resource = 'appointments';
}
