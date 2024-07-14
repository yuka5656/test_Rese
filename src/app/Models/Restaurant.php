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

    public function getRestaurant($request){

        $query = DB::table('restaurants');
        $query->join('prefectures', 'restaurants.prefecture_id', '=', 'prefectures.id');
        $query->join('genres', 'restaurants.genre_id', '=', 'genres.id');
        $query->select('restaurants.*', 'genres.genre_name', 'prefectures.prefecture_name');

        $keyword = $request->input('keyword');
        if ($keyword !== null) {
            $query->where('restaurant_name', 'like', '%' . $keyword . '%');
        }

        $search_genre = $request->input('genre_id');
        if ($search_genre !== null) {
            $query->where('genre_id', '=', $search_genre);
        }

        $search_erea =$request->input('prefecture_id');
        if ($search_erea !== null) {
            $query->where('prefecture_id', '=', $search_erea);
        }

        $query->orderBy('restaurants.id', 'asc');

        $restaurant = $query->get();

        return $restaurant;
    }

    public function getContent($restaurant_id){

        $query = DB::table('restaurants');
        $query->join('genres', 'genres.id', '=', 'restaurants.genre_id');
        $query->join('prefectures', 'prefectures.id', '=', 'restaurants.prefecture_id');
        $query->select('restaurants.*', 'genres.genre_name', 'prefectures.prefecture_name');
        $query->where('restaurants.id', $restaurant_id);

        $item = $query->first();

        return $item;
    }
}
