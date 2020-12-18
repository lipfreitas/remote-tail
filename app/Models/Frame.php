<?php


namespace App\Models;


use Illuminate\Support\Facades\Validator;

class Frame
{
    public static function valid($request){
        return Validator::make($request, [
            'host' => 'required|ip',
            'port' => 'required|numeric|max:65553',
        ]);
    }
}
