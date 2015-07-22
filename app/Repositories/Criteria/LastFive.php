<?php

namespace App\Repositories\Criteria;

use Illuminate\Database\Eloquent\Builder;
use SebastianBerc\Repositories\Criteria;

class LastFive extends Criteria
{
    /**
     * Execute criteria on given query builder.
     *
     * @param Builder $query
     *
     * @return mixed
     */
    public function execute(Builder $query)
    {
        return $query->latest()->take(5);
    }
}
