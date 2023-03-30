<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Utilisateursagence extends Authenticatable
{
    use HasFactory;
    protected $fillable = ['nom', 'codeagence', 'ville', 'password', 'telephone', 'role'];
    public $timestamps = false;
}
