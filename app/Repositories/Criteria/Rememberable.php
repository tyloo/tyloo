<?php namespace App\Repositories\Criteria;

use Bosnadev\Repositories\Contracts\RepositoryInterface;
use Bosnadev\Repositories\Criteria\Criteria;

class Rememberable extends Criteria
{
    /**
     * @var int
     */
    protected $time;

    public function __construct($time = 60)
    {

        $this->time = $time;
    }
    /**
     * @param                     $model
     * @param RepositoryInterface $repository
     *
     * @return mixed
     */
    public function apply($model, RepositoryInterface $repository)
    {
        return $model->remember($this->time);
    }
}
