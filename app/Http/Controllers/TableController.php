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



class TableController extends Controller {

    public function selectMovieByIdWithResource(Request $request) {
        $user_id = $request->input('user_id');
        $models = Rating::where('user_id', $user_id)->get();
        return RatingResource::collection($models);
    }

    public function insertRatingWithModel(Request $request) {
        $model = new Rating();
        $model->user_id = $request->input('user_id');
        $model->movie_id = $request->input('movie_id');
        $model->rating = $request->input('rating');
        $model->save();
        # 'Make' instead of 'collection', why?
        return RatingResource::make($model);
    }

    public function deleteRatingWithModel(Request $request) {
        $user_id = $request->input('user_id');
        $movie_id = $request->input('model_id');
        $rating = $request->input('rating');
        $model = Rating::find()
    }
}
