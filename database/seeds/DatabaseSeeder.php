<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

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

        //Spring::truncate();

        //factory(App\Spring::class,10)->create();

        //$this->call(SpringTableSeeder::class);
        $this->call(CityTableSeeder::class);
        //$this->call(RolesTableSeeder::class);
       // $this->call(UsersTableSeeder::class);
        Model::reguard();
    }
}
