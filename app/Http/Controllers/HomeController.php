<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index () {
        $aboutd = About::all();
        return view('pages/home', compact('aboutd'));

    }
}
