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

        $restaurants = $this->restaurant->getRestaurant();

        $query = DB::table('restaurants');
        $query->join('prefectures', 'prefectures.id', '=', 'restaurants.prefecture_id');
        $query->join('genres', 'genres.id', '=', 'restaurants.genre_id');
        $query->select('restaurant_name');

        $keyword = $request->input('keyword');
        if ($keyword !== null) {
            $query->where('restaurant_name', 'link', '%' . $keyword . '%');
        }
        // dd($keyword);


        $content = $query->get();

        // dd($keyword);

        return view('index', compact('restaurants', 'prefectures', 'genres','keyword', 'content'));
    }

    public function search(Request $request){

        $genres = Genre::all();

        $g = $request->input('genre_id');

        $query = $this->restaurant->getRestaurant();


        // dd($keyword);
        return view('index', compact('search', 'keyword'));
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

    public function detail(){
        return view('detail');
    }

    public function done(){
        
        return view('done');
    }
}
