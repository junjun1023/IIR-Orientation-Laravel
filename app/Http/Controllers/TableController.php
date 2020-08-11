<?php

namespace App\Http\Controllers;

use Illuminate\Database\Console\Migrations\ResetCommand;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Movie;
use App\Rating;
use App\Http\Resources\MovieResource;
use App\Http\Resources\RatingResource;
use App\Http\Resources\RatWithMovieResource;
use Illuminate\View\View;
use Log;


class TableController extends Controller {

    public function selectMovieByIdWithResource(Request $request) {
        $user_id = $request->input('user_id');
        $models = Rating::where('user_id', $user_id)->get();
        return view('welcome', ['ratings'=>$models]);
    }

    public function insertRatingWithModel(Request $request) {
        $user_id = $request->input('user_id');
        $movie_id = $request->input('movie_id');
        $rating = $request->input('rating');
        Log::debug($user_id);
        Log::debug($movie_id);
        Log::debug($rating);
        if (Rating::where('user_id', $user_id)
            ->where('movie_id', $movie_id)
            ->exists()) {
            Log::debug("exists");
            Rating::where('user_id', $user_id)
                -> where('movie_id', $movie_id)
                -> update(['rating'=>$rating]);
//            $model = new Rating();
//            $model->user_id = $user_id;
//            $model->movie_id = $movie_id;
//            $model->rating = $rating;
//            $model->save();
        } else {
            Log::debug("not exists");
            $model = new Rating();
            $model->user_id = $user_id;
            $model->movie_id = $movie_id;
            $model->rating = $rating;
            $model->save();
        }


        #dd($model);
        #$user_id = $request->input('user_id');
        #$models = Rating::where('user_id', $user_id)->get();
        #return RatingResource::collection($models);
        # 'Make' instead of 'collection', why?
        $models = Rating::where('user_id', $user_id)->get();
        #dd($models);
        #return view('welcome', ['ratings'=>$models]);
        return Response(['ratings'=>$models]);
    }

    public function deleteRatingWithModel(Request $request) {
        $user_id = $request->input('user_id');
        $movie_id = $request->input('movie_id');
        $model = Rating::where('user_id', $user_id)
            -> where('movie_id', $movie_id)
            -> delete();
        $models = Rating::where('user_id', $user_id)->get();
        #return view('welcome', ['ratings'=>$models]);
        return Response(['ratings'=>$models]);
    }

    public function updateRatingWithModel(Request $request) {
        $user_id = $request->input('user_id');
        $movie_id = $request->input('movie_id');
        $rating = $request->input('rating');
        $model = Rating::where('user_id', $user_id)
            -> where('movie_id', $movie_id)
            -> update(['rating'=>$rating]);
        #return RatingResource::collection($model);
    }


}
