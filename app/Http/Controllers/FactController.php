<?php

namespace App\Http\Controllers;

use App\Models\Fact;
use Illuminate\Http\Request;

class FactController extends Controller
{
    public function index () {
        $factd = Fact::all();
        return view('partials-back/facts-back', compact('factd'));
    }
    public function edit ($id){
        $factd= Fact::find($id);
        return view ('partials-back/facts-back', compact('factd'));
    }

    public function update(fact $id, Request $request){
        
        $factd= $id;
        $factd->titre2 = $request->titre;
        $factd->description2 = $request->description;
        $factd->nombre1 = $request->nombre;
        $factd->descriptiona = $request->website;
        $factd->nombre2 = $request->phone;
        $factd->descriptionb = $request->city;
        $factd->nombre3 = $request->age;
        $factd->descriptionc = $request->degree;
        $factd->nombre4 = $request->email;
        $factd->descriptiond = $request->freelance;
        $factd->save();
        return redirect()->back();
}
}
