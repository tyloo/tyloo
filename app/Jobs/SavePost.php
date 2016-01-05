<?php

namespace App\Jobs;

use App\Repositories\PostsRepository;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class SavePost extends Job implements SelfHandling
{
    /**
     * @var \App\Repositories\PostsRepository
     */
    protected $repository;

    /**
     * @var array
     */
    protected $data;

    /**
     * @var int|null
     */
    protected $id;

    /**
     * Create a new job instance.
     *
     * @param \App\Repositories\PostsRepository $repository
     * @param array                             $data
     * @param int|null                          $id
     */
    public function __construct(PostsRepository $repository, array $data = [], $id = null)
    {
        $this->repository = $repository;
        $this->data = $data;
        $this->id = $id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // Image Handling
        if (isset($this->data['image'])) {
            $this->data['image'] = $this->buildImage();
        }

        // We create the Post
        if ($this->id === null) {
            $this->data['author_id'] = Auth::id();
            $this->repository->create($this->data);
        } else {
            $this->repository->update($this->id, $this->data);
        }
    }

    /**
     * Build the image.
     *
     * @return string
     */
    public function buildImage()
    {
        $filePath = '/uploads/'.$this->data['slug'].'.'.$this->data['image']->getClientOriginalExtension();
        Image::make($this->data['image'])->save(public_path($filePath));

        return $filePath;
    }
}
