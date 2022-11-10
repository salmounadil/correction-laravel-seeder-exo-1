<?php

namespace App\Http\Controllers;

use App\Models\Personne;
use Illuminate\Http\Request;

class PersonneController extends Controller
{
    public function personnes (){
        $personnes = Personne::all();
        return view('pages.personnes',compact('personnes'));
    }

    public function show ($id){
        $show = Personne::find($id);
        return view('pages.show',compact('show'));
    }

    public function delete ($id){
        Personne::find($id)->delete();
        return redirect()->back();
    }

    public function edit ($id){
        $edit = Personne::find($id);
        return view('pages.edit',compact('edit'));
    }

    public function update (Request $request , $id){
        $update = Personne::find($id);
        $update->nom = $request->nom;
        $update->age = $request->age;
        $update->email = $request->email;
        $update->telephone = $request->telephone;
        $update->save();
        return redirect()->route('personnes');
    }

    public function deleteAll (){
        $personnes = Personne::all();
        foreach ($personnes as $personne ) {
           $personne->delete();
        }
        return redirect()->route('personnes');
    }
}
