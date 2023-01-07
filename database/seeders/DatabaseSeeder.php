<?php

namespace Database\Seeders;

use App\Models\Listing;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        \App\Models\User::factory(5)->create();

        Listing::factory(6)->create();

        // Listing::create([
        //     'id' => 1,
        //     'name' => 'Bohemian ud chair',
        //     'title' => 'chair',
        //     'amount' => '59.99',
        //     'quantity' => 2,
        //     'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
        //     Corporis deleniti illo nihil ipsa eaque. Doloribus ratione temporibus quos id 
        //     doloremque officiis. Repellendus, laborum voluptates ratione voluptatem accusam
        //     us tempora est quo!'
        // ]);

        // Listing::create([
        //     'id' => 2,
        //     'name' => 'Bed',
        //     'title' => 'bed',
        //     'amount' => 50,
        //     'quantity' => 2,
        //     'description' => 'rytyliu;o egfwhejhughfugiw gygcwy
        //     ctvybunuyctuoib vbuoivguhb ifyutyfcxfyufcy
        //     wcfycwtcfvax;u qxqutftdugof ytultfytuylidtu uidtkufydtkfyicgl
        //     fylukcjflcgyi cghjhflcghjf cghfcglcxfhkccg hfyucg
        //     fyfycgjifylc gjgu;ifyl;ui fycgjlhfydcglgu hvg
        //     ltdcglfcghl ;iclgjvh;guc jhlvguvhkcgjvhgucjhflcg'
        // ]);
    }
}
