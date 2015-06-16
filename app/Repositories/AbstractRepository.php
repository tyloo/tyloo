<?php

namespace App\Repositories;

use Illuminate\Container\Container;

abstract class AbstractRepository implements RepositoryInterface
{
    /**
     * The model linked to our resources.
     *
     * @var
     */
    protected $model = '';

    public function __construct(Container $app)
    {
        $this->model = $app->make($this->model);
    }

    /**
     * Retrieve all resources.
     *
     * @return mixed
     */
    public function all()
    {
        return $this->model->orderBy('updated_at', 'desc')->all();
    }

    /**
     * Retrieve all resources paginated.
     *
     * @param     $itemsPerPage
     * @param int $page
     *
     * @return mixed
     */
    public function allPaginated($itemsPerPage = 10, $page = 1)
    {
        return $this->model->orderBy('updated_at', 'desc')->paginate($itemsPerPage);
    }

    /**
     * Retrieve all latest resources.
     *
     * @param $num
     *
     * @return mixed
     */
    public function latest($num = 10) {
        return $this->model->orderBy('updated_at', 'desc')->take($num)->get();
    }

    /**
     * Retrieve a resource by its ID.
     *
     * @param $id
     *
     * @return mixed
     */
    public function byId($id)
    {
        return $this->model->findOrFail($id);
    }

    /**
     * Retrieve a resource by its slug.
     *
     * @param $slug
     *
     * @return mixed
     */
    public function bySlug($slug)
    {
        return $this->model->where('slug', $slug)->firstOrFail();
    }

    /**
     * Create a resource.
     *
     * @param $resource
     *
     * @return mixed
     */
    public function create($resource)
    {
        // TODO: Implement create() method.
    }

    /**
     * Remove a resource (requires an ID).
     *
     * @param $id
     *
     * @return mixed
     */
    public function remove($id)
    {
        // TODO: Implement remove() method.
    }

    /**
     * Update a resource (requires an ID).
     *
     * @param $id
     *
     * @return mixed
     */
    public function update($id, $resource)
    {
        // TODO: Implement update() method.
    }
}
