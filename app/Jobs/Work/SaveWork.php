<?php

namespace App\Jobs\Work;

use App\Http\Requests\WorkRequest;
use App\Jobs\Job;
use App\Repositories\WorkRepository;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class SaveWork extends Job implements SelfHandling
{
    /**
     * @var \App\Http\Requests\WorkRequest
     */
    protected $request;

    /**
     * @var \App\Repositories\WorkRepository
     */
    protected $work;

    /**
     * @var array
     */
    protected $data;

    /**
     * @var null|string
     */
    protected $id;

    /**
     * Create a new job instance.
     *
     * @param \App\Http\Requests\WorkRequest   $request
     * @param \App\Repositories\WorkRepository $work
     * @param string                           $id
     */
    public function __construct(WorkRequest $request, WorkRepository $work, $id = null)
    {
        $this->request = $request;
        $this->data = $request->except(['_token', '_method']);
        $this->work = $work;
        $this->id = $id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // We build the image
        $this->data['image'] = $this->buildImage($this->request->file('image'));

        // New Work
        if ($this->id === null) {
            // We assign the author of the work
            $this->assignAuthor();

            return $this->work->create($this->data);
        }
        // Update Work
        return $this->work->update($this->data, $this->id);
    }

    /**
     * Assign the Author of the Work.
     */
    private function assignAuthor()
    {
        $this->data['author_id'] = Auth::user()->id;
    }

    /**
     * Build the Work Image.
     *
     * @param $file
     *
     * @return null|string
     */
    public function buildImage($file)
    {
        if ($file != null) {
            $filePath = '/uploads/works/' . $this->data['slug'] . '.' . $file->getClientOriginalExtension();
            if (Image::make($file)->save(public_path($filePath))) {
                return $filePath;
            }
        }
        else {
            return null;
        }
    }
}
