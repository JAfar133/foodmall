<?php

namespace App\Http\Controllers;

use App\Models\Videos;

class MainController extends Controller
{
    public function index(){
        $videos = Videos::query()->get();

        return view('welcome', ['videos' => $videos]);
    }
}
