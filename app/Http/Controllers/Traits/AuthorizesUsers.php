<?php

namespace App\Http\Controllers\Traits;
use App\Models\Flyer;
use Illuminate\Http\Request;


trait AuthorizesUsers {

    public  function userCreatedFlyer(Request $request){
        return Flyer::where([
            'street' => $request->street,
            'zip' => $request->zip,
            'user_id' => $this->user->id
        ])->exists();
    }

    public  function unauthorized(Request $request){
        if($request->ajax()){
            return response(['message' => 'No way.'], 403);
        }

        flash('No way.');

        return redirect('/');
    }
}