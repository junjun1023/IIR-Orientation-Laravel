<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Redirect;

class RequestController extends Controller {
    public function forwardRequest(Request $request) {
        switch ($request->input('submit')) {
            case 'Insert/Delete':
                Redirect::route('/rating/insert');
                break;
            case 'Search':
                Redirect::route('/');
                break;
            case 'Delete':
                Redirect::route('/rating/delete');
                break;
        }
    }
}
