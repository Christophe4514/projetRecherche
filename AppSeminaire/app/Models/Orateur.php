<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orateur extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'email',
        'password',
    ];

    public function themes()
    {
        return $this->hasMany(Theme::class, 'orateur_id', 'id');
    }
}
