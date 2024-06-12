<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Ticket extends Model
{
    use HasFactory;

    protected $fillable=[
        'libelle',
        'prix',
        'nbre_place',
        'type',
        'event_id',
        'template_id',
       
    ];

    public function event() : BelongsTo {

        return $this->belongsTo(Evenement::class);
        
    }


    public function template() : BelongsTo {

        return $this->belongsTo(Template::class);
        
    }

}
