<?php

use Illuminate\Database\Seeder;
use App\Spring;

class SpringTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $client = new \GuzzleHttp\Client(['base_uri' => 'https://loydalahde.com/']);

        $response = $client->get('api/springs');

        //echo $response->getStatusCode();

        $bod = json_decode($response->getBody());

        foreach ($bod as $spr) {

            $spring = new Spring();
            $spring->title = $spr->title;
            $spring->latitude = $spr->latitude;
            $spring->longitude = $spr->longitude;
            $spring->tested_at = $spr->tested_at;


            //$spring->alias = 'Veljespirtin lähde';

            $spring->short_description =  "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
            $spring->description = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
            //$spring->image = 'Veljespirtti_Ohjeet.png';
            $spring->visibility = true;

            $spring->save();
        }

    }
}
