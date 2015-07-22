<?php

namespace App\Repositories;

use App\Tag;
use SebastianBerc\Repositories\Contracts\ShouldCache;

class TagsRepository extends AbstractRepository implements ShouldCache
{
    /**
     * Return fully qualified model class name.
     *
     * @return string
     */
    public function takeModel()
    {
        return Tag::class;
    }
}
