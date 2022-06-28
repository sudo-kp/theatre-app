<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 *
 * @mixin Builder
 */

class Perfomance extends Model
{
    use HasFactory;

    public function play() {
        return $this->belongsTo(Play::class);
    }

    public function tickets() {
        return $this->hasMany(Ticket::class);
    }
}
