<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class imagenes extends Model
{
    public function artist()
    {
        return $this->belongsTo(artists::class);
    }
}
