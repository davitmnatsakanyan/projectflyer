<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Image;

class Photo extends Model
{
    protected  $fillable = ['path', 'name', 'thumbnail_path'];
    protected  $table = 'flyer_photos';


    public  function flyer(){
        return $this->belongsTo(Flyer::class);
    }

    public  function  upload(){

        $this->makeThumbnail();

        return $this;
    }

      public  function setNameAttribute($name){
          $this->attributes['name'] = $name;

          $this->path = $this->baseDir().'/'.$name;
          $this->thumbnail_path = $this->baseDir().'/tn-'.$name;
      }


    public  function baseDir(){
        return 'flyers/photos';
    }
}
