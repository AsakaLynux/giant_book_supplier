<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('publishers')->insert([
            [
                'name' => 'KyoAni',
                'address' => 'Japan, 〒611-0002 Kyoto, Uji, Kohata',
                'phone' => '+81 774-33-1130',
                'email' => 'kyotoAni@ani.com',
                'image' => 'https://www.kyotoanimation.co.jp/en/img/globalHeader/logo.png',
            ],
            [
                'name' => 'Ufotable',
                'address' => 'Suginami, Tokyo',
                'phone' => '+81 333880335',
                'email' => 'ufotable@ufo.com',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/Ufotable_logo.svg/330px-Ufotable_logo.svg.png',
            ],
            [
                'name' => 'Madhouse',
                'address' => 'Shinnakano AM1 Building 3F, 3-23-3 Honcho, Nakano-ku, Tokyo, 164-0012, JAPAN',
                'phone' => '+81 353083960',
                'email' => 'madhouse@mad.com',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/44/Madhouse_studio_logo.svg/1200px-Madhouse_studio_logo.svg.png',
            ],
        ]);
    }
}
