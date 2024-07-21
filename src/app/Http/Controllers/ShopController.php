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


    public function favorite (Request $request, $restaurant_id){

        $user = Auth::user();

        $item = $this->restaurant->getContent($restaurant_id);

        if ($user) {
            $user_id = Auth::id();

        $existingFavorite = Favorite::where('restaurant_id', $request->id)
            ->where('user_id', $user_id)
            ->first();
        }

        if (!$existingFavorite) {
                $article = new Favorite();
                $article->restaurant_id = $request->restaurant_id;
                $article->user_id = $request->user_id;
                Favorite::create($article);
            }

            dd($article);

        // $favorite = $request->only(['user_id', 'restaurant_id']);
        // Favorite::create($favorite);

        return redirect('/', compact('item'));

    }


    public function my_page(){

        $reservations = Reservation::all();

        // $item = $this->favorite->getFavorite($favorite_id);
        $favorites = Favorite::all();

        return view('mypage', compact('reservations', 'favorites'));
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
