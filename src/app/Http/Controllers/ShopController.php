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

        $restaurants = $this->restaurant->getRestaurant();
        // dd($restaurants);

        return view('index', compact('restaurants', 'prefectures', 'genres'));
    }

    public function search(Request $request){

        $search = Genre::with('genre_name')->CategorySearch();

        return view('index')->compact('');
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
