<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class film extends Model
{
    use HasFactory;

    protected $table = "film";

    public function genres()
    {
        return $this->belongsToMany(genres::class);
    }

    public function actor()
    {
        return $this->belongsToMany(actor::class, 'film_actor');
    }
}
