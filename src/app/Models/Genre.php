<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = ['genre_name'];

    public function restaurant(){

        return $this->belongsTo(Restaurant::class);
    }

    public function scopePrefectureSearch($query, $genre_id){
        if (!empty($genre_id)) {
            $query->where('genre_id', $genre_id);
        }
    }

}
