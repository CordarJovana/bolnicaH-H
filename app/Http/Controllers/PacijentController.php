<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pacijent;

class PacijentController extends Controller
{
    public  static function vratiPacijente()
    {
        $pacijenti = Pacijent::all();

       return $pacijenti;
    }


    public function add(){
        return view('addp');
    }

    public function create(Request $request){
       
        $pacijent = new Pacijent();
        $pacijent->ime_prezime = $request->ime_prezime;
        $pacijent->jmbg = $request->jmbg;
        $pacijent->save();
        return redirect('/pocetna');
    }

    public function edit(Pacijent $pacijent){
        
            return view('editp',compact('pacijent'));     
        
    }

    public function update(Request $request, Pacijent $pacijent){
        
        
        $pacijent->ime_prezime = $request->ime_prezime;
        $pacijent->jmbg = $request->jmbg;
        $pacijent->save();
        return redirect('/pocetna');
           
        
    }

public function delete(Pacijent $pacijent){
    return view('deletep',compact('pacijent'));  
}
    public function obrisiPacijenta(Pacijent $pacijent)
    {
        $pacijent->delete();
        return redirect('/pocetna');
    }
}
