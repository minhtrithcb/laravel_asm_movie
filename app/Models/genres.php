<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class genres extends Model
{
    use HasFactory;

    protected $table = "genres";
    public $timestamps = false;

    public function film()
    {
        return $this->belongsToMany(film::class);
    }
}
