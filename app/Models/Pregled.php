<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Pacijent;
use App\Http\Models\Doktor;

class Pregled extends Model
{
    protected $table = "pregled";
    public $timestamps = false;

    public function doktor()
    {
        return $this->belongsTo('App\Models\Doktor', 'iddoktora', 'id');
    }

    public function pacijent()
    {
        return $this->belongsTo('App\Models\Pacijent', 'idpacijenta', 'id');
    }
}
