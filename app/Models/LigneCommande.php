<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class LigneCommande extends Model
{
    use HasFactory;

    protected $fillable=[
        'quantite',
        'cmd_id',
        'ticket_id',
       
    ];

    public function ticket() : BelongsTo {

        return $this->belongsTo(Ticket::class);
        
    }


    public function commande() : BelongsTo {

        return $this->belongsTo(Commande::class);
        
    }

}
