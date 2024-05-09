<?php

namespace App\Http\Controllers;

use App\Events\MyEvent;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('post');
    }

    public function store(Request $request){
        event(new MyEvent('This is testing data'));
        return back();
    }
}
