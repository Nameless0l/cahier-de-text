<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = ['agence', 'codebus', 'categorie', 'depart', 'destination', 'prix', 'jour', 'heure', 'voyageur', 'cni', 'telephone', 'username', 'date_reservation', 'heure_reservation'];
    public $timestamps = false;
}
