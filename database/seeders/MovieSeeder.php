<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;
use Illuminate\Support\Facades\Storage;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $json = Storage::disk('local')->get('/json/movies.json');
        $movies = json_decode($json,true);

        foreach($movies as $movie)
        {
            Movie :: query()->updateOrCreate([
                'vote_count' => $movie['vote_count'],
                'id' => $movie['id'],
                'video' => $movie['video'],
                'vote_average' => $movie['vote_average'],
                'title' => $movie['title'],
                'popularity' => $movie['popularity'],
                'poster_path' => $movie['poster_path'],
                'original_language' => $movie['original_language'],
                'original_title' => $movie['original_title'],
                'genre_ids' => $movie['genre_ids'],
                'adult' => $movie['adult'],
                'overview' => $movie['overview'],
                'release_date' => $movie['release_date'],
            ]);
        }
        
    }
}
