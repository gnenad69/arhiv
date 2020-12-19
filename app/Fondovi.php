<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fondovi extends Model
{
    protected $fillable = ['broj_fonda', 'naziv_fonda', 'godina_nastanka', 'godina_zavrsetka', 'opis_fonda'];
}
