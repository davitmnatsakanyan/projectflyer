<?php

namespace App\Http\Controllers;


use App\AddPhotoToFlyer;
use App\Models\Flyer;
use App\Http\Requests;
use App\Http\Requests\AddPhotoRequest;

class PhotosController extends Controller
{
    /*
   * add photo
   */
    public  function store($zip, $street, AddPhotoRequest $request){

        $flyer = Flyer::locatedAt($street, $zip);
        $photo = $request->file('photo');

        ( new AddPhotoToFlyer($flyer, $photo))->save();


    }
}
