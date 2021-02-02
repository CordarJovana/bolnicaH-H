<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pacijent;
use App\Models\Doktor;
use App\Models\Pregled;

class PregledController extends Controller
{
    public function vratiPregledePoDoktorima(Request $request)
    {
        $iddoktora = $request->input('iddoktora');
        $pregedi  = Doktor::find($iddoktora)->preglediDoktora()->get();

        return response()->json([
            'pregledi' => $pregledi
        ]);
    }

    public function vratiPregledePoPacijentima(Request $request)
    {
        $idpacijenta = $request->input('idpacijenta');
        $pregedi  = Pacijent::find($idpacijenta)->preglediPacijenta()->get();

        return response()->json([
            'pregledi' => $pregledi
        ]);
    }

    public function kreirajPregled(Request $request)
    {
        $this->validate($request,['simptomi'=>'required', 'termin'=>'required','idpacijenta'=>'required','iddoktora'=>'required']);
       
        $simptomi = $request->input('simptomi');
        $termin = $request->input('termin');
        $idpacijenta = $request->input('idpacijenta');
        $iddoktora = $request->input('iddoktora');


        Pregled::insert([
            'simptomi' => $simptomi,
            'termin' => $termin,
            'idpacijenta' => $idpacijenta,
            'iddoktora' => $iddoktora
        ]);

        $imePrezimePacijenta=Pacijent::find($idpacijenta)->vratiImePrezimePacijenta()->get();
        $imePrezimeDoktora=Doktor::find($iddoktora)->vratiImePrezimeDoktora()->get();

        return response()->json([
            'poruka' => "Uspešno ste dodali novi pregled za pacijenta: ".$imePrezimePacijenta." i za doktora: ".$imePrezimeDoktora." !"
        ]);
    }

    


}
