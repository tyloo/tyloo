<?php

namespace App\Repositories;

interface RepositoryInterface
{
    /**
     * Retrieve all resources.
     *
     * @return mixed
     */
    public function all();

    /**
     * Retrieve all resources paginated.
     *
     * @param     $itemsPerPage
     * @param int $page
     *
     * @return mixed
     */
    public function allPaginated($itemsPerPage = 10, $page = 1);

    /**
     * Retrieve all latest resources.
     *
     * @param $num
     *
     * @return mixed
     */
    public function latest($num);

    /**
     * Retrieve a resource by its ID.
     *
     * @param $id
     *
     * @return mixed
     */
    public function byId($id);

    /**
     * Retrieve a resource by its slug.
     *
     * @param $slug
     *
     * @return mixed
     */
    public function bySlug($slug);

    /**
     * Create a resource.
     *
     * @param $resource
     *
     * @return mixed
     */
    public function create($resource);

    /**
     * Remove a resource (requires an ID).
     * @param $id
     *
     * @return mixed
     */
    public function remove($id);

    /**
     * Update a resource (requires an ID).
     * @param $id
     *
     * @return mixed
     */
    public function update($id, $resource);
}
