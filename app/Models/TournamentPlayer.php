
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TournamentPlayer extends Model
{
    protected $table = 'tournament_player';

    protected $fillable = [
        'tournament_id', 'customer_id', 'points', 'standing', 'note'
    ];

    public function tournament()
    {
        return $this->belongsTo(Tournament::class);
    }
}
