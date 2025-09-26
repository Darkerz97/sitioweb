
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    protected $table = 'tournament';

    protected $fillable = [
        'store_id', 'game', 'format', 'name', 'start_at', 'rounds', 'entry_fee'
    ];

    public function players()
    {
        return $this->hasMany(TournamentPlayer::class);
    }
}
