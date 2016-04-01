<?php

namespace App\Models;

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
        return $this->hasMany(Photo::class);
    }

    public static  function locatedAt($street, $zip){

        return static::where(['street' => $street, 'zip' => $zip ])->firstOrFail();
    }

    public  function addPhoto(Photo $photo){
        return $this->photos()->save($photo);
    }

    /*
     * A flyer is owned by user
     */
    public  function owner(){
        return $this->belongsTo('App\User', 'user_id');
    }

    /*
     * Determin if the given user created the flyer
     *
     * @param User $user
     * #return boolean
     */
    public  function ownedBy(User $user){

        return $this->user_id == $user->id;
    }
}
