<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    use HasFactory;

    public function orateur()
    {
        return $this->belongsTo(Orateur::class, 'orateur_id', 'id');
    }
}
