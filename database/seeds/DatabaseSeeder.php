<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class, 10)->create();
        Db::table('tags')->insert([
            ['name' => 'Education', 'user_id' => rand(1, 5)],
            ['name' => 'Football', 'user_id' => rand(1, 5)],
            ['name' => 'Entertainment', 'user_id' => rand(1, 5)],
            ['name' => 'Math', 'user_id' => rand(1, 5)],
            ['name' => 'Coding', 'user_id' => rand(1, 5)],
            ['name' => 'Laravel', 'user_id' => rand(1, 5)],
            ['name' => 'Bongo Movie', 'user_id' => rand(1, 5)],
            ['name' => 'Mapishi', 'user_id' => rand(1, 5)],
            ['name' => 'Wasanii', 'user_id' => rand(1, 5)],
            ['name' => 'Mziki', 'user_id' => rand(1, 5)],
            ['name' => 'Bongo Flava', 'user_id' => rand(1, 5)],
        ]);
    }
}
