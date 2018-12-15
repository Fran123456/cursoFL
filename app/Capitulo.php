<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Capitulo extends Model
{
  //
 protected $fillable = [
      'name', 'slug',  'body', 'nivel_id' , 'url', 'descarga_video', 'descarga_material'
 ];

 public function nivel()
  {
      return $this->belongsTo(Nivel::class);
  }
}
