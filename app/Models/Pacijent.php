<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Pregled;

class Pacijent extends Model
{
    protected $table = "pacijent";
    public $timestamps = false;

    public static function preglediPacijenta()
    {
        return $this->hasMany('App\Http\Models\Pregled', 'idpacijenta', 'id');
    }

    public function vratiImePrezimePacijenta()
    {
        return $this->ime_prezime;
    }
}
