<?php

namespace PlatziPHP\Entidades;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * creo la relacion con los user
     */
    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
