<?php

namespace App;

class Work extends AbstractModel
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'works';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'slug', 'excerpt', 'content', 'user_id', 'published'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * Get the user record associated with the Post.
     */
    public function author()
    {
        return $this->belongsTo('App\User');
    }

    public function isPublished()
    {
        return $this->published ? 'Yes'  : 'No';
    }
}
