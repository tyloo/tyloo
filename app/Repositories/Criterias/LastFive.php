<?php

namespace App\Repositories\Criterias;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

class LastFive implements CriteriaInterface
{
    public function apply($model, RepositoryInterface $repository)
    {
        $model = $model->latest()->take(5);

        return $model;
    }
}
