<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moderateur extends Model
{
    use HasFactory;

    public function seminaires()
    {
        return $this->hasMany(Seminaire::class, 'moderateur_id', 'id');
    }
}
