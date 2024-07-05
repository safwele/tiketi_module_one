<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenements extends Model
{
    use HasFactory;
    protected $fillable = ['idEvenement','nomEvenement','nbrplaceidEvenement','tokenidEvenement',
    "heureDebutEvenement","isValidateEvenement",'comptes_ev','categ_idcateg_ev'];
    
    protected $hidden = [];

    public function Comptes()
    {
       return  $this->belongsTo(Comptes::class);
    }

    public function CategoriePlaces()
    {
       return $this->belongsTo(CategoriePlaces::class);
    }


   
   
}
