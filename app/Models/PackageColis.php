<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageColis extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_exp',
        'societe_exp',
        'adresse_exp',
        'ville_exp',
        'pays_exp',
        'email_exp',
        'phone_exp',
        'name_dest',
        'societe_dest',
        'ville_dest',
        'pays_dest',
        'email_dest',
        'phone_dest',
        'nom_colis',
        'qte_colis',
        'date_groupage',
        'code_bare',
        'index_suivie',
        'reference',
        'date_arrive_prevu',
        'date_depart_prevu',
        'nom_conteneur',
        'etat',
    ];
}

