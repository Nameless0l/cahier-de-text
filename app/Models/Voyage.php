<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voyage extends Model
{
    use HasFactory;
    protected $fillable = ['codeagence', 'depart', 'codebus', 'chauffeur', 'categorie', 'destination', 'prix', 'places', 'jour', 'heure'];
    public $timestamps = false;
}
