<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Genre;
use App\Models\Prefecture;

class Restaurant extends Model
{
    use HasFactory;

     protected $fillable = [
        'prefecture_id', 'genre_id', 'restaurant_name', 'image_url', 'summary'
    ];

    public function prefecture(){

        return $this->hasMany(Prefecture::class);
    }

    public function genre(){

        return $this->hasMany(Genre::class);
    }

    public function getRestaurant(){

        $restaurant = DB::table('restaurants')
                    ->join('prefectures', 'prefectures.id', '=', 'restaurants.prefecture_id')
                    ->join('genres', 'genres.id', '=', 'restaurants.genre_id')
                    ->get();

        return $restaurant;
    }

    // public function scopePrefectureSearch($query, $prefecture){
    //     if (!empty($prefecture_id)) {
    //         $query->where('prefecture_id', $prefecture_id);
    //     }
    // }

    // public function scopeKeywordSearch($query, $keyword) {
    //     if (!empty($keyword)) {
    //         $restaurants->where('restaurant_name', 'link', '%' . $keyword . '%');
    //     }

    // }
}
