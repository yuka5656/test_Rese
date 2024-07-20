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
use Illuminate\Support\Facades\Auth;

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

    public function favorite (Request $request, Favorite $favorite){

        $user = Auth::user();

        if ($user) {
            $user_id = Auth::id();

        $existingFavorite = Favorite::where('favorite_id', $favorite->id)
            ->where('user_id', $user_id)
            ->first();
        }

        dd($existingFavorite);

        if (!$existingFavorite) {
                $favorite = new Favorite();
                $favorite->favorite_id = $article->id;
                $favorite->user_id = $user_id;
                $favorite->save();
            }

        

        // $favorite = $request->only(['user_id', 'restaurant_id']);
        // Favorite::create($favorite);

        return redirect('/');

    }

    public function login(){

        return view('auth.login');
    }

    public function thank(){

        return view('auth.thanks');
    }

    public function my_page(){

        $reservations = Reservation::all();

        return view('mypage', compact('reservations'));
    }

    public function delete(Request $request){

        Reservation::find($request->id)->delete();
        return redirect('my_page');
    }

    public function detail(Request $request, $restaurant_id){

        $item = $this->restaurant->getContent($restaurant_id);

        return view('detail', compact('item'));
    }

    public function store(Request $request){

        $contact = $request->only(['date','time', 'number_of_people', 'restaurant_id', 'user_id']);

        Reservation::create($contact);

        return view('done');
    }

}
