<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Commande extends Model
{
    use HasFactory;

    protected $fillable=[
        'date_cmd',
        'user_id',
        
    ];

    public function user1() : BelongsTo {

        return $this->belongsTo(User::class);

    }

    public function lignecomandes(): HasMany {

        return $this->hasMany(LigneCommande::class);

    }
}
