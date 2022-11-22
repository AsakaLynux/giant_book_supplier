<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                'publisher_id' => 1,
                'title' => 'Naruto',
                'author' => 'Masashi Kishimoto',
                'year' => 1999,
                'synopsis' => 'Naruto Uzumaki wants to be the best ninja in the land.',
                'image' => 'https://www.crunchyroll.com/imgsrv/display/thumbnail/1200x675/catalog/crunchyroll/7add01c632a7aaf883a90d75b0154ab8.jpeg'
            ],
            [
                'publisher_id' => 1,
                'title' => 'One Piece',
                'author' => 'Eiichiro Oda',
                'year' => 1997,
                'synopsis' => 'The series focuses on Monkey D. Luffy, a young man made of rubber, who inspired by his childhood idol, the powerful pirate Red-Haired Shanks, sets off on a journey from the East Blue Sea to find the mythical treasure, the One Piece, and proclaim himself the King of the Pirates.',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcResTtlkogHi9PU9EZZCWfu8Rx3on-ZOI0Vfw&usqp=CAU'
            ],
            [
                'publisher_id' => 2,
                'title' => 'Bleach',
                'author' => 'Masashi Kishimoto',
                'year' => 2004,
                'synopsis' => 'Ichigo Kurosaki never asked for the ability to see ghosts -- he was born with the gift.',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR--N1zKlK9nFfGGzOSmltAR0znXrwOwnGd8Q&usqp=CAU'
            ],
            [
                'publisher_id' => 2,
                'title' => 'HUNTER X HUNTER',
                'author' => 'Yoshihiro Togashi',
                'year' => 2011,
                'synopsis' => 'Gon Freecss is on a mission to train himself as a hunter just like his father.',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcje9_L7Zld4Awel-BVVq2P_J57rWF7s-osw&usqp=CAU'
            ],
            [
                'publisher_id' => 3,
                'title' => 'Inazuma Elevan',
                'author' => 'Tenya Yabuno',
                'year' => 2008,
                'synopsis' => 'While other schools in Japan compete for the title of being the best soccer team in the country, Raimon Middle Schools soccer club, Inazuma Eleven, struggles to rise from the verge of being disbanded.',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTg4ETBDrOVR3xpiD5WxWKGqChNNINMkvxJrA&usqp=CAU',
            ],
            [
                'publisher_id' => 3,
                'title' => 'Dragon Ball',
                'author' => 'Akira Toriyama',
                'year' => 1984,
                'synopsis' => 'Dragon Ball tells the tale of a young warrior by the name of Son Goku, a young peculiar boy with a tail who embarks on a quest to become stronger and learns of the Dragon Balls, when, once all 7 are gathered, grant any wish of choice.',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQjneeTFQDwdiqm55ihiShw7E5K28HqAAruyA&usqp=CAU',
            ],

        ]);
    }
}
