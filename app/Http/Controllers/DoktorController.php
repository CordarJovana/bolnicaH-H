<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doktor;

class DoktorController extends Controller
{
    public static function vratiDoktore()
    {
        $doktori = Doktor::all();

        return $doktori;
    }

    public function add(){
        return view('addd');
    }

    public function create(Request $request){
       
        $doktor = new Doktor();
        $doktor->ime_prezime = $request->ime_prezime;
        $doktor->jmbg = $request->jmbg;
        $doktor->kategorija = $request->input('kategorija');
        $doktor->save();
        return redirect('/pocetna');
    }

    public function edit(Doktor $doktor){
        
        return view('editd',compact('doktor'));     
    
}

public function update(Request $request, Doktor $doktor){
    
    
    $doktor->ime_prezime = $request->ime_prezime;
    $doktor->jmbg = $request->jmbg;
    $doktor->kategorija = $request->input('kategorija');
    $doktor->save();
    return redirect('/pocetna');
       
    
}

    

    public function delete(Doktor $doktor){
        return view('deleted',compact('doktor'));  
    }
       
    
    public function obrisiDoktora(Doktor $doktor)
    {
        $doktor->delete();
            return redirect('/pocetna');
    }
}
