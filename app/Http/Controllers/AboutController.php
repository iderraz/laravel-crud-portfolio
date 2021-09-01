<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    public function index () {
        $aboutd = About::all();
        return view('partials-back/about-back', compact('aboutd'));
    }
    public function edit ($id){
        $aboutd= About::find($id);
        return view ('partials-back/about-back', compact('aboutd'));
    }

    public function update(about $id, Request $request){
        
        $aboutd= $id;
        $aboutd->titre1 = $request->titre1;
        $aboutd->description1 = $request->description;
        $aboutd->birthday = $request->birthday;
        $aboutd->website = $request->website;
        $aboutd->phone = $request->phone;
        $aboutd->city = $request->city;
        $aboutd->age = $request->age;
        $aboutd->degree = $request->degree;
        $aboutd->email = $request->email;
        $aboutd->freelance = $request->freelance;
        $aboutd->save();
        return redirect()->back();
}
}
