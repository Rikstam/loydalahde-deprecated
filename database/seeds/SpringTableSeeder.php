<?php

use Illuminate\Database\Seeder;
use App\Spring;
//use Faker;


class SpringTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $client = new \GuzzleHttp\Client(['base_uri' => 'http://loydalahde.com/wp-json/']);

        $response = $client->get('posts?filter[posts_per_page]=-1');

        //echo $response->getStatusCode();

        $bod = json_decode($response->getBody());

        foreach($bod as $spr){
            $spring = new Spring();
            $spring->title = $spr->title;
            //$spring->alias = 'Veljespirtin lähde';
            $spring->status = 'ei tietoa';


            $spring->short_description = $spr->excerpt;
            //$spring->location = new \Phaza\LaravelPostgis\Geometries\Point(61.30337, 23.797609);
            $spring->description = $spr->content;
            //$spring->image = 'Veljespirtti_Ohjeet.png';
            $spring->visibility = true;

            $spring->save();
        }

    }
}
