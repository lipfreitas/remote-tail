<?php

namespace App\Http\Controllers;

use App\Models\Frame;
use Illuminate\Http\Request;

class Frameable extends Controller
{
    public function frame($host, $port){
        $valid = Frame::valid(['host' => $host, 'port' => $port]);
        if($valid->fails()){
            response()->json($valid->getMessageBag(), 500)->send();
            die();
        }
        return view('main.frames.main', ['data' => '', 'host' => $host, 'port' => $port]);
    }
}
