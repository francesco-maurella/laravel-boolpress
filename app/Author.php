<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
  public function author_infos()
  {
    return $this->hasOne('App\AuthorInfo');
  }

  public function posts()
  {
    return $this->hasMany('App\Post');
  }
}
