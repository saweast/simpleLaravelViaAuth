<?php

namespace App\Http\Controllers;

use App\Publish;
use Illuminate\Http\Request;

use App\Http\Requests;

class PublishController extends Controller
{
    public function index() {
        $publishes =  Publish::all();
        return view('publish.index', ['publishes'=>$publishes]);
    }
}
