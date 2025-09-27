<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $table = 'store';

    protected $fillable = ['code', 'name', 'address', 'phone'];
}
