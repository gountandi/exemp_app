<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;



class Evenement extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'country',
        'town',
        'adresses',
        'gps',
        'description',
        'date',
        'heure_debut',
        'heure_fin',
        'entreprise_id'
    ];

    public function entreprise() : BelongsTo {

        return $this->belongsTo(Entreprise::class);
        
    }

    public function tickets(): HasMany {

        return $this->hasMany(Ticket::class);

    }



}
