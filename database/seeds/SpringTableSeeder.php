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

        //$faker = Faker\Factory::create();

        $spring = new Spring();
        $spring->title = 'Lempäälän lähde';
        $spring->alias = 'Veljespirtin lähde';
        $spring->status = 'juomakelpoista';

        $spring->short_description = 'Lempäälän kunnan ympäristötarkastaja Sippo Saarisen mukaan lähde on rengastettu 1987, jonka jälkeen käyttö on ollut aktiivista. Tätä aiemmasta lähteen käyttöhistoriasta ei tarkempaa tietoa. Lähialueen ihmiset juovat vettä ympäri vuoden. Lähde on todennäköisesti yksi Suomen eniten hyödynnetyistä lähteistä ja paikanpäällä saattaa ajoittain joutua odottamaan hetken vuoroaan.';
        $spring->description = 'Lähialueen ihmiset juovat vettä ympäri vuoden. Lähde on todennäköisesti yksi Suomen eniten hyödynnetyistä lähteistä ja paikanpäällä saattaa ajoittain joutua odottamaan hetken vuoroaan.';
        $spring->location = new \Phaza\LaravelPostgis\Geometries\Point(61.30337, 23.797609);
        $spring->image = 'Veljespirtti_Ohjeet.png';
        $spring->visibility = true;

        $spring->save();

        $spring = new Spring();
        $spring->title = 'Broandan lähde, Helsinki';
        $spring->alias = 'Viikinlähde';
        $spring->status = 'ei tietoa';
        $spring->description = "<p>Aja Tankovainiontien päässä olevalle parkkipaikalle. Vasemmalla puolella näkyy iso siirtolohkare, jonka vierellä lähdekaivo sijaitsee.</p>";
        $spring->short_description = 'Jukolan talo, eteläisessä Hämeessä,
        seisoo erään mäen pohjoisella rinteellä, liki Toukolan kylää.
        Sen läheisin ym­päristö on kivinen tanner,
        mutta alempana alkaa pellot,
        joissa, ennenkuin talo oli häviöön mennyt, aaltoili teräinen vilja.';
        $spring->location = new \Phaza\LaravelPostgis\Geometries\Point(60.226560, 25.123636);
        $spring->image = 'broandan-lahde.jpg';
        $spring->visibility = true;
        $spring->save();


        /*
        DB::table('springs')->insert([
            'title' => 'Lempäälän lähde',
            'tags' => 'juomakelpoinen testattu',
            'alias' => 'Veljespirtin lähde',
            'description' => '',
            'location' => ,
            'image' => $faker->imageUrl()
        ]);*/
    }
}
