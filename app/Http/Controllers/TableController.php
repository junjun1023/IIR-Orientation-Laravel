<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Movie;
use App\Rating;
use App\Http\Resources\MovieResource;
use App\Http\Resources\RatingResource;
use App\Http\Resources\RatWithMovieResource;



class TableController extends Controller {

    public function selectMovieByIdWithResource(Request $request) {
        $user_id = $request->input('user_id');
        $movies = Rating::where('user_id', $user_id)->get();
        return RatingResource::collection($movies);
    }



}
