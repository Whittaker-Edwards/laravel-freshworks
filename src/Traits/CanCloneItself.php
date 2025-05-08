<?php

namespace Whittaker\Freshworks\Traits;

trait CanCloneItself
{
    public function clone(int $id): Object
    {
        return $this->go('POST', "{$this->resource}/{$id}/clone");
    }
}
