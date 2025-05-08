<?php

namespace Whittaker\Freshworks\Api;

use Whittaker\Freshworks\Client;
use Whittaker\Freshworks\Traits\PerformsCrudOperations;

class Notes extends Client
{
    use PerformsCrudOperations;

    private $resource = 'notes';
}
