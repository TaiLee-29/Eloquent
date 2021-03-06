<?php


namespace Hillel\model;


use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function posts()
    {
        return $this->belongsToMany(post::class)->withTimestamps();
    }

    public function delete()
    {
        $this->posts()->detach();

        return parent::delete(); // TODO: Change the autogenerated stub
    }

}