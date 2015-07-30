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
        $spring->tags = 'testattu';
        $spring->alias = 'Veljespirtin lähde';
        $spring->description = 'Jukolan talo, eteläisessä Hämeessä, seisoo erään mäen pohjoisella rinteellä, liki Toukolan kylää. Sen läheisin ym­päristö on kivinen tanner, mutta alempana alkaa pellot, joissa, ennenkuin talo oli häviöön mennyt, aaltoili teräinen vilja. Peltojen alla on niittu, apilaäyräinen, halkileikkaama monipolvisen ojan; ja runsaasti antoi se heiniä, ennenkuin joutui laitumeksi kylän karjalle. Muutoin on talolla avaria metsiä, soita ja erämaita, jotka, tämän tilustan ensimmäisen perustajan oivallisen toiminnan kautta, olivat langenneet sille osaksi jo ison jaon käydessä entisinä aikoina. Silloinpa Jukolan isäntä, pitäen enemmän huolta jälkeentulevainsa edusta kuin omasta parhaastansa, otti vastaan osaksensa kulon polttaman metsän ja sai sillä keinolla seitsemän vertaa enemmän kuin toiset naapurinsa. Mutta kaikki kulovalkean jäljet olivat jo kadonneet hänen piiristänsä ja tuuhea metsä kasvanut sijaan. - Ja tämä on niiden seitsemän veljen koto, joiden elämänvaiheita tässä nyt käyn kertoilemaan.';
        $spring->short_description = 'Jukolan talo, eteläisessä Hämeessä, seisoo erään mäen pohjoisella rinteellä, liki Toukolan kylää. Sen läheisin ym­päristö on kivinen tanner, mutta alempana alkaa pellot, joissa, ennenkuin talo oli häviöön mennyt, aaltoili teräinen vilja.';
        $spring->location = new \Phaza\LaravelPostgis\Geometries\Point(61.30337, 23.797609);
        $spring->image = 'http://lorempixel.com/640/480/';

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
