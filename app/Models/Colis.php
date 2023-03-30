<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colis extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'expediteur', 'destinataire', 'ville1', 'ville2', 'telephone1', 'telephone2', 'nom', 'frais_commission'];
    public $timestamps = false;
}
