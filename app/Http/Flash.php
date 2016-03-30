<?php
/**
 * Created by PhpStorm.
 * User: davo
 * Date: 3/28/2016
 * Time: 10:52
 */

namespace App\Http;


class Flash
{
    public  function message($title, $message){
        session()->flash('flash_message', [
            'title' => $title,
            'message' => $message
        ]);
    }
}