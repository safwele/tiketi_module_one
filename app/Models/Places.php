<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Places extends Model
{
    use HasFactory;
    protected $fillable = ["idPlace",'identifiantPlace','typePlace','coordonnee','is_freePlace',"place_categ"];
    protected $hidden = [];


    public function CategoriePlaces()
    {
        return $this->belongsTo(CategoriePlaces::class);
    }
    
}
