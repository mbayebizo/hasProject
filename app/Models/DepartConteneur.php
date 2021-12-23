<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepartConteneur extends Model
{
    use HasFactory;

    protected $fillable = [
        'pays',
        'nom_conteneur',
        'date_depart',
        'date_arrive'
    ];
}
