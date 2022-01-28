<?php

namespace App\Http\Controllers\Api;

use App\Models\Rate;
use App\Models\User;
use App\Models\Movie;
use App\Models\Performer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\RatingRequest;

class MovieController extends Controller
{
    public function getGenre(Request $request)
    {
        $movies = Movie::with('genre')->get();

        $genre = $request->genre;

        if($genre)
        {
            $movies = Movie::with('genre', 'theater', 'language')->whereHas('genre', function($query) use($genre) {
                $query->where('name', $genre);
                return $query;
            })->get();
        }

        return response()->json([
            'name' => 'Genre',
            'status' => true,
            'message' => 'Sucessfully fetch movies with genre '.$request->genre,
            'data' => $movies,
        ], 200);
    }

    public function getTimeSlot(Request $request)
    {
        $movies = Movie::with('genre', 'theater', 'language');

        $theater_name = $request->theater_name;
        $time_start = $request->time_start;
        $time_end = $request->time_end;

        if($theater_name)
        {
            $movies->whereHas('theater', function($query) use($theater_name) {
                $query->where('name', $theater_name);
                return $query;
            });
        }

        if($time_start)
        {
            $movies->where('time_start', $time_start);
        }

        if($time_end)
        {
            $movies->where('time_end', $time_end);
        }

        return response()->json([
            'name' => 'TimeSlot',
            'status' => true,
            'message' => 'Sucessfully fetch movies',
            'data' => $movies->get(),
        ], 200);
    }

    public function getSpecificMovieTheater(Request $request)
    {
        $movies = Movie::with('genre', 'theater', 'language');

        $theater_name = $request->theater_name;
        $d_date = $request->d_date;

        if($theater_name)
        {
            $movies->whereHas('theater', function($query) use($theater_name) {
                $query->where('name', $theater_name);
                return $query;
            });
        }

        if($d_date)
        {
            $movies->where('d_date', $d_date);
        }

        return response()->json([
            'name' => 'Specif Movie Theater',
            'status' => true,
            'message' => 'Sucessfully fetch movies',
            'data' => $movies->get(),
        ], 200);
    }

    public function getSearchPerformer(Request $request)
    {
        $performer = Performer::with('movies');

        $performer_name = $request->performer_name;

        if($performer_name)
        {
            $performer->where('name','LIKE','%'.$performer_name.'%');
        }

        return response()->json([
            'name' => 'Search Performer',
            'status' => true,
            'message' => 'Sucessfully fetch movies',
            'data' => $performer->get(),
        ], 200);
    }

    public function postRating(RatingRequest $request)
    {
        $movie = $request->movie_title;
        $user = $request->username;

        if($movie)
        {
            $movie_id = Movie::where('title','LIKE','%'.$movie.'%')->first()->id;
        }

        if($user)
        {
            $user_id = User::where('name','LIKE','%'.$user.'%')->first()->id;
        }

        $rate = Rate::create([
            'value' => $request->rating,
            'description' => $request->r_description,
            'movie_id' => $movie_id,
            'user_id' => $user_id,
        ]);

        return response()->json([
            'name' => 'Give Rating',
            'status' => true,
            'message' => 'Sucessfully submit rating',
            'data' => $rate,
        ], 200);
    }

    public function getNewMovies()
    {
        
        return response()->json([
            'name' => 'New Movies',
            'status' => true,
            'message' => 'Sucessfully fetch new movies',
            'data' => $performer->get(),
        ], 200);
    }

    public function postMovie()
    {
        return response()->json([
            'name' => 'Add movie',
            'status' => true,
            'message' => 'Sucessfully add new movie',
            'data' => $performer->get(),
        ], 200);
    }
}
