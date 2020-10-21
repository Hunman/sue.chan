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
            'description' => 'General SFW artworks go in here',
            'slug' => 'art',
        ]);
        Board::create([
            'name' => 'Cave Story/Pixel Games',
            'description' => 'Conversations about Cave Story and other Pixel games go in here',
            'slug' => 'cs',
        ]);
        Board::create([
            'name' => 'NSFW General',
            'description' => 'The NSFW board, welcome to hell fuckboys',
            'slug' => 'hell',
        ]);
        Board::create([
            'name' => 'Shitposting',
            'description' => 'Anything goes, just don\'t get the alphabet boys on my ass with cheese pizza',
            'slug' => 'sue',
        ]);
    }
}
