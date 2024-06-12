<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Entreprise extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'country',
        'town',
        'neighborhood',
        'adresses',
        'user_id'
    ];


    public function user() : BelongsTo {

        return $this->belongsTo(User::class);

    }

    public function events(): HasMany {

        return $this->hasMany(Evenement::class);

    }



}
