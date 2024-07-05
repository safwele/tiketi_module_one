<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateurs extends Model
{
    use HasFactory;

    protected $fillable = ['idUtilisateur','nomUtilisateur','postnomUtilisateur','prenomUtilisateur',"genreUtilisateur",
    "emailUtilisateur","telUtilisateur",'comptes_user'];
    
    protected $hidden = [];

    public function Comptes()
    {
        return $this->belongsTo(Comptes::class);
    }


}
