<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MovieSeeder extends Seeder
{
    public function run(): void
    {
        Movie::create([
            'name' => 'Fast & Furious 9',
            'description' => 'Dom and the crew face their toughest enemy yet.',
            'duration' => 2.25, // in hours
            'release_date' => Carbon::create(2021, 6, 25),
            'rating' => 7.1,
            'genre_id' => 1, // Action
            'language' => 'English',
            'cast' => 'Vin Diesel, Michelle Rodriguez, John Cena',
        ]);

        Movie::create([
            'name' => 'The Hangover',
            'description' => 'A bachelor party goes hilariously wrong.',
            'duration' => 1.8,
            'release_date' => Carbon::create(2009, 6, 5),
            'rating' => 7.7,
            'genre_id' => 2, // Comedy
            'language' => 'English',
            'cast' => 'Bradley Cooper, Zach Galifianakis, Ed Helms',
        ]);

        Movie::create([
            'name' => 'Rush Hour',
            'description' => 'A Hong Kong detective teams up with an L.A. cop.',
            'duration' => 1.6,
            'release_date' => Carbon::create(1998, 9, 18),
            'rating' => 7.0,
            'genre_id' => 2, // Comedy
            'language' => 'English',
            'cast' => 'Jackie Chan, Chris Tucker',
        ]);
    }
}
