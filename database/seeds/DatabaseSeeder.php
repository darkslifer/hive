<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTables([
            'champions'
        ]);
        // $this->call(UsersTableSeeder::class);
        $this->call(ChampionsSeeder::class);
        $this->call(ItemsSeeder::class);
        $this->call(RecommendedSeeder::class);
        $this->call(TypeSeeder::class);
    }

    /**
     * @param array $tables
     * Execute tables truncate
     */
    public function truncateTables(array $tables): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach ($tables as $table){
            DB::table($table)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
