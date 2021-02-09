<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pacijent;
use App\Models\Doktor;
use App\Models\Pregled;

class PregledController extends Controller
{
    public static function vratiPregledePoDoktorima(Request $request)
    {
        $iddoktora = $request->input('iddoktora');
        $pregledi  = Doktor::find($iddoktora)->preglediDoktora()->get();

        return $pregledi;
    }
    

    public static function vratiPregledePoPacijentima(Request $request)
    {
        $idpacijenta = $request->id;
        $pregledi  = Pacijent::find($idpacijenta)->preglediPacijenta()->get();

        return $pregledi;
    }

    public static function vratiPreglede(){
        $pregledi = Pregled::all();

        return $pregledi;
    }

    public function add(){
        return view('addpr');
    }
    public function create(Request $request){
       
        $pregled = new Pregled();
        $pregled->simptomi = $request->simptomi;
        $pregled->termin = $request->termin;
        $pregled->iddoktora = $request->input('iddoktora');
        $pregled->idpacijenta = $request->input('idpacijenta');
        $pregled->save();
        return redirect('/pocetna');
    }

    


}
