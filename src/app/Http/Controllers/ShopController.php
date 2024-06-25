<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Reservation;
use App\Models\Restaurant;
use App\Models\Genre;
use App\Models\Prefecture;
use App\Models\Preservation;
use App\Models\Favorite;

class ShopController extends Controller
{
    protected $restaurant;
    public function __construct(Restaurant $restaurant){
        $this->restaurant = $restaurant;

    }

    public function index(Request $request){

        $prefectures = Prefecture::all();

        $genres = Genre::all();

        $restaurants = $this->restaurant->getRestaurant($request);

        $search_genre = $request->genre_id;

        $search_erae = $request->prefecture_id;

        $keyword = $request->keyword;

        return view('index', compact('restaurants', 'prefectures', 'genres', 'search_genre', 'search_genre', 'keyword'));
    }
    public function login(){

        return view('auth.login');
    }

    public function thank(){

        return view('auth.thanks');
    }

    public function my_page(){
        
        return view('mypage');
    }

    public function done(){
        
        return view('done');
    }
}
