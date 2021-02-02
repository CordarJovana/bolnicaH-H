<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doktor;

class DoktorController extends Controller
{
    public function vratiDoktore()
    {
        $doktori = Doktor::all();

        return response()->json([
            'doktori' => $doktori
        ]);
    }

    public function kreirajDoktora(Request $request)
    {
        $this->validate($request,['ime_prezime'=>'required', 'jmbg'=>'required', 'kategorija'=>'required']);
       
        $ime_prezime = $request->input('ime_prezime');
        $jmbg = $request->input('jmbg');
        $kategorija = $request->input('kategorija');


        Pacijent::insert([
            'ime_prezime' => $ime_prezime,
            'jmbg' => $jmbg,
            'kategorija' => $kategorija
        ]);

        return response()->json([
            'poruka' => "Uspešno ste dodali novog doktora: ".$ime_prezime." !"
        ]);
    }

    public function izmeniDoktora(Request $request){
        $id = $request->input('id');

        $doktor = Doktor::find($id);
        if (!$doktor) {
            return $this->respondNotFound('Doktor nije pronađen');
        }
        else{
            $this->validate($request,['ime_prezime'=>'required', 'jmbg'=>'required', 'kategorija'=>'required']);

            $doktor->ime_prezime=$request->ime_prezime;
            $doktor->jmbg=$request->jmbg;
            $doktor->kategorija=$request->kategorija;
            $doktor->save();

            return response()->json([
                'poruka' => "Uspešno ste izmenili doktora: ".$doktor->ime_prezime." !"
            ]);
        }
    }


    public function obrisiDoktora(Request $request)
    {
        $id = $request->input('id');
        Doktor::find($id)->delete();
    }
}
