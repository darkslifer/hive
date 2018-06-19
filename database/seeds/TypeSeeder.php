<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('INSERT INTO `types` (`type_id`, `type_name`) VALUES
                    (1, \'starting\'),
                    (2, \'startingjungle\'),
                    (3, \'early\'),
                    (4, \'earlyjungle\'),
                    (5, \'essential\'),
                    (6, \'essentialjungle\'),
                    (7, \'offensive\'),
                    (8, \'defensive\'),
                    (9, \'consumables\'),
                    (10, \'ability_scaling\'),
                    (11, \'situational\'),
                    (12, \'aggressive\'),
                    (13, \'standard\'),
                    (14, \'protective\'),
                    (15, \'selective\'),
                    (16, \'support\');');
    }
}
