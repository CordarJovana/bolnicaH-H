<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pacijent;

class PacijentController extends Controller
{
    public function vratiPacijente()
    {
        $pacijenti = Pacijent::all();

        return response()->json([
            'pacijenti' => $pacijenti
        ]);
    }

    public function kreirajPacijenta(Request $request)
    {
        $this->validate($request,['ime_prezime'=>'required', 'jmbg'=>'required']);
       
        $ime_prezime = $request->input('ime_prezime');
        $jmbg = $request->input('jmbg');
       


        Pacijent::insert([
            'ime_prezime' => $ime_prezime,
            'jmbg' => $jmbg
        ]);

        return response()->json([
            'poruka' => "Uspešno ste dodali novi karton pacijenta: ".$ime_prezime." !"
        ]);
    }

    public function izmeniPacijenta(Request $request){
        $id = $request->input('id');

        $pacijent = Pacijent::find($id);
        if (!$pacijent) {
            return $this->respondNotFound('Pacijent nije pronađen');
        }
        else{
            $this->validate($request,['ime_prezime'=>'required', 'jmbg'=>'required']);

            $pacijent->ime_prezime=$request->ime_prezime;
            $pacijent->jmbg=$request->jmbg;
            $pacijent->save();

            return response()->json([
                'poruka' => "Uspešno ste izmenili pacijenta: ".$pacijent->ime_prezime." !"
            ]);
        }
    }


    public function obrisiPacijenta(Request $request)
    {
        $id = $request->input('id');
        Pacijent::find($id)->delete();

    }
}
