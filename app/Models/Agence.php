<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Agence extends Authenticatable
{
    use HasFactory;
    protected $fillable = ['codeagence', 'logo', 'image', 'nom', 'ville', 'quartier', 'status', 'password'];
    public $timestamps = false;
}
