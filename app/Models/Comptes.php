<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comptes extends Model
{
    use HasFactory;
    protected $fillable = ['idCompte',
    'login',
    'descCategEvenements',
    'password',
    'role'];
    protected $hidden = [];


    public function Utilisateurs()
    {
        return $this->hasMany(Utilisateurs::class);
    }
    public function Evenements()
    {
        return $this->hasMany(Evenements::class);
    }
}
