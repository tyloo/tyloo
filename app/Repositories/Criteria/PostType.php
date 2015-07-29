<?php

namespace App\Repositories\Criteria;

use Illuminate\Database\Eloquent\Builder;
use SebastianBerc\Repositories\Criteria;

class PostType extends Criteria
{
    /**
     * @var string
     */
    private $type;

    public function __construct($type = 'blog')
    {
        $this->type = $type;
    }

    /**
     * Execute criteria on given query builder.
     *
     * @param Builder $query
     *
     * @return Builder
     */
    public function execute(Builder $query)
    {
        return $query->where(['type' => $this->type]);
    }
}
