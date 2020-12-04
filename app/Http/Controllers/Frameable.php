<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Frameable extends Controller
{
    public function frame($token, $instance){
        $data = 'ok';
        $host = 'proponto';
        $port = rand(4000, 5000);
        $cmd = 'tail -f /var/log/nginx/access.log';
        $shell = "websocketd --port $port $cmd";
        return view('main.frames.main', ['data' => $data, 'host' => $token, 'port' => $port]);
    }
}
