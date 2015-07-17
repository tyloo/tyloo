<?php

namespace App\Repositories;

use App\Tag;

class TagsRepository extends AbstractRepository
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
