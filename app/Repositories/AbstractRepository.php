<?php namespace App\Repositories;

use SebastianBerc\Repositories\Contracts\ShouldCache;
use SebastianBerc\Repositories\Repository;

abstract class AbstractRepository extends Repository implements ShouldCache
{
}
