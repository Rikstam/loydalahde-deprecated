<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Spring;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);

        Spring::truncate();

        factory(App\Spring::class,10)->create();

        Model::reguard();
    }
}
