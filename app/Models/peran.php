<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Film;
use App\Models\Cast;

class peran extends Model
{
    use HasFactory;

    protected $table = 'perans';
    protected $fillable = [
        'film_id', 'cast_id', 'nama'
    ];

    public function film()
    {
        return $this->hasMany(Film::class, 'id', 'film_id');
    }

    public function cast()
    {
        return $this->hasMany(cast::class, 'id', 'cast_id');
    }
}
