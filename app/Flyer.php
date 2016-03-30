<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flyer extends Model
{
    protected $fillable = [
        'street',
        'city',
        'zip',
        'country',
        'state',
        'price',
        'description'
    ];
    public  function photos(){
        return $this->hasMany('App\FlyerPhoto');
    }

    public static  function locatedAt($street, $zip){

        return static::where(['street' => $street, 'zip' => $zip ])->firstOrFail();
    }

    public  function addPhoto(FlyerPhoto $photo){
        return $this->photos()->save($photo);
    }
}
