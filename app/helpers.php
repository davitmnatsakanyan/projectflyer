<?php

function flash($title, $message) {

    $flash = app('App\Http\Flash');

    return $flash->message($title, $message);
}

function flyer_path(App\Models\Flyer $flyer){

    return $flyer->zip.'/'. $flyer->street;
}