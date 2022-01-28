<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MovieController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function()
{
    Route::get('/genre', [MovieController::class, 'getGenre']);
    Route::get('/timeslot', [MovieController::class, 'getTimeSlot']);
    Route::get('/specific_movie_theater', [MovieController::class, 'getSpecificMovieTheater']);
    Route::get('/search_performer', [MovieController::class, 'getSearchPerformer']);
    Route::post('/give_rating', [MovieController::class, 'postRating']);
    Route::get('/new_movies', [MovieController::class, 'getNewMovies']);
    Route::post('/add_movie', [MovieController::class, 'postMovie']);
});

