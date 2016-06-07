<?php

namespace App\Http\Controllers;

use App\Publish;
use App\Publisher;
use Illuminate\Http\Request;

use App\Http\Requests;

class PublisherController extends Controller
{
    public function index() {
        $publishers = Publisher::all();
        return view('publisher.index', ['publishers'=>$publishers]);
    }
}
