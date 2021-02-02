<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Pregled;

class Doktor extends Model
{
    protected $table = "doktor";
    public $timestamps = false;

    public function preglediDoktora()
    {
        return $this->hasMany('App\Http\Models\Pregled', 'iddoktora', 'id');
    }

    public function vratiImePrezimeDoktora()
    {
        return $this->ime_prezime;
    }
}
