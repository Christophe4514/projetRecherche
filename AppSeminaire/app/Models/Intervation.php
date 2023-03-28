<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intervation extends Model
{
    use HasFactory;

    public function seminaire()
    {
        return $this->belongsTo(Seminaire::class, 'seminaire_id', 'id');
    }
    public function theme()
    {
        return $this->belongsTo(Theme::class, 'theme_id', 'id');

    }
}
