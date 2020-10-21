<?php

namespace Database\Seeders;

use App\Models\Board;
use Illuminate\Database\Seeder;

class BoardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Board::create([
            'name' => 'Drawing/Art',
            'slug' => 'art',
        ]);
        Board::create([
            'name' => 'Cave Story/Pixel Games',
            'slug' => 'cs',
        ]);
        Board::create([
            'name' => 'NSFW General',
            'slug' => 'hell',
        ]);
        Board::create([
            'name' => 'Shitposting',
            'slug' => 'sue',
        ]);
    }
}
