<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
  //
  protected $fillable = [
       'name', 'slug',  'body' , 'file'
  ];

  public function capitulos()
       {
           return $this->belongsToMany(Capitulo::class);
       }
}
