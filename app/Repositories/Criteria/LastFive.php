<?php

namespace App\Repositories\Criteria;

use App\Repositories\Contracts\RepositoryInterface;
use App\Repositories\Criteria\Criteria;

class LastFive extends Criteria
{
    /**
     * @param                     $model
     * @param RepositoryInterface $repository
     *
     * @return mixed
     */
    public function apply($model, RepositoryInterface $repository)
    {
        return $model->take(5);
    }
}
