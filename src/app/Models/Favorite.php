<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;

     protected $fillable = [
        'user_id', 'restaurant_id'];

    public function user(){

        return $this->belongsTo(User::class);
    }

    public function restaurant(){

        return $this->belongsTo(Restaurant::class);
    }

    public function getFavorite($favorite_id){

        // $query = DB::table('favorites');
        // $query->join('restaurants', 'restaurants.id', '=', 'favorites.restaurant_id');
        // $query->join('prefectures', 'prefectures.id', '=', 'restaurants.prefecture_id');
        // $query->select('restaurants.*', 'genres.genre_name', 'prefectures.prefecture_name');
        // $query->where('favorites.id', $favorite_id);
        // $query->get();

        // $favorite = $query;

        // return $favorite;
    }
}
