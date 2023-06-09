<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seminaire extends Model
{
    use HasFactory;

    public function moderateur()
    {
        return $this->belongsTo(Moderateur::class, 'moderateur_id', 'id');
    }
    public function interventions()
    {
        return $this->hasMany(Intervation::class, 'seminaire_id', 'id');
    }
}
