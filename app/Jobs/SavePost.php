<?php

namespace App\Jobs;

use App\Repositories\PostsRepository;
use DOMDocument;
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
     * @var integer|null
     */
    protected $id;

    /**
     * Create a new job instance.
     *
     * @param \App\Repositories\PostsRepository $repository
     * @param array                             $data
     * @param integer|null                      $id
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

        // Post Images Handling
        $this->data['excerpt'] = !empty($this->data['excerpt']) ? $this->buildPostImages($this->data['excerpt']) : null;
        $this->data['content'] = !empty($this->data['content']) ? $this->buildPostImages($this->data['content']) : null;

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
        $filePath = '/uploads/' . $this->data['slug'] . '.' . $this->data['image']->getClientOriginalExtension();
        Image::make($this->data['image'])->save(public_path($filePath));

        return $filePath;
    }

    /**
     * Build the Post images.
     *
     * @param $data
     *
     * @return string
     */
    public function buildPostImages($data)
    {

        $dom = new DomDocument();
        $dom->loadHtml($data, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');

        // foreach <img> in the submited message
        foreach ($images as $img) {
            $src = $img->getAttribute('src');

            // if the img source is 'data-url'
            if (preg_match('/data:image/', $src)) {
                // get the mimetype
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];

                // Generating a random filename
                $filename = uniqid();
                $filepath = "/uploads/$filename.$mimetype";

                Image::make($src)
                    ->encode($mimetype, 100)
                    ->save(public_path($filepath));

                $new_src = asset($filepath);
                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
            }
        }

        return $dom->saveHTML();
    }
}
