<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Reservation;
use App\Models\Restaurant;
use App\Models\Genre;
use App\Models\Prefecture;
use App\Models\Preservation;
use App\Models\Favorite;
use Illuminate\Support\Facades\DB;

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
        // dd($restaurants);

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

    public function detail($restaurant_id){

        $item = Restaurant::find($restaurant_id);

        // $genre = Genre::find('genre_name');

        // $content = $this->restaurant->getContent();

        // $item = getContent()->find($restaurant_id);
        dd($item);


        return view('detail', compact('item'));
    }

    public function done(){

        return view('done');
    }
}
