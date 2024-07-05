<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriePlaces extends Model
{
    use HasFactory;
    protected $fillable = ["idCategoriePlaces","nomCategoriePlaces","nbCategoriePlaces","tokenCategoriePlaces"];
    protected $hidden = [];

    public function Evenements()
    {
      return  $this->hasMany(Evenements::class);
    }

    public function Places()
    {
      return  $this->hasMany(Places::class);
    }
}
