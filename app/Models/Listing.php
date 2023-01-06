<?php
namespace App\Models;

class Listing {

    public static function all() {
        return [
            [
                'id' => 1,
                'catagory' => 'Home/Furniture',
                'name' => 'Bohemian ud chair',
                'title' => 'chair',
                'amount' => '59.99',
                'quantity' => 2,
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                Corporis deleniti illo nihil ipsa eaque. Doloribus ratione temporibus quos id 
                doloremque officiis. Repellendus, laborum voluptates ratione voluptatem accusam
                us tempora est quo!'
            ],
            [
                'id' => 2,
                'catagory' => 'Home/Furniture',
                'name' => 'Bed',
                'title' => 'bed',
                'amount' => 50,
                'quantity' => 2,
                'description' => 'rytyliu;o egfwhejhughfugiw gygcwy
                ctvybunuyctuoib vbuoivguhb ifyutyfcxfyufcy
                wcfycwtcfvax;u qxqutftdugof ytultfytuylidtu uidtkufydtkfyicgl
                fylukcjflcgyi cghjhflcghjf cghfcglcxfhkccg hfyucg
                fyfycgjifylc gjgu;ifyl;ui fycgjlhfydcglgu hvg
                ltdcglfcghl ;iclgjvh;guc jhlvguvhkcgjvhgucjhflcg'
            ],
            [
                'id' => 3,
                'catagory' => 'Home/Furniture',
                'name' => 'Sofa Set',
                'title' => 'seat',
                'amount' => 24.99,
                'quantity' => 5,
                'description' => 'rytyliu;o egfwhejhughfugiw gygcwy
                ctvybunuyctuoib vbuoivguhb ifyutyfcxfyufcy
                wcfycwtcfvax;u qxqutftdugof ytultfytuylidtu uidtkufydtkfyicgl
                fylukcjflcgyi cghjhflcghjf cghfcglcxfhkccg hfyucg
                fyfycgjifylc gjgu;ifyl;ui fycgjlhfydcglgu hvg
                ltdcglfcghl ;iclgjvh;guc jhlvguvhkcgjvhgucjhflcg'
            ]
        ];
    }


    public static function find($id) {
        $listings = self::all();

        foreach($listings as $listing) {
            if($listing['id'] == $id ) {
                return $listing;
            }
        }
    }








    // public static function all() {
    //     return [
    //         [
    //             'id' => 1,
    //             'title' => 'Listing One',
    //             'description' => 'rytyliu;o egfwhejhughfugiw gygcwy
    //             ctvybunuyctuoib vbuoivguhb ifyutyfcxfyufcy
    //             wcfycwtcfvax;u qxqutftdugof ytultfytuylidtu uidtkufydtkfyicgl
    //             fylukcjflcgyi cghjhflcghjf cghfcglcxfhkccg hfyucg
    //             fyfycgjifylc gjgu;ifyl;ui fycgjlhfydcglgu hvg
    //             ltdcglfcghl ;iclgjvh;guc jhlvguvhkcgjvhgucjhflcg'
    //         ],
    //         [
    //             'id' => 2,
    //             'title' => 'Listing Two',
    //             'description' => 'rytyliu;o egfwhejhughfugiw gygcwy
    //             ctvybunuyctuoib vbuoivguhb ifyutyfcxfyufcy
    //             wcfycwtcfvax;u qxqutftdugof ytultfytuylidtu uidtkufydtkfyicgl
    //             fylukcjflcgyi cghjhflcghjf cghfcglcxfhkccg hfyucg
    //             fyfycgjifylc gjgu;ifyl;ui fycgjlhfydcglgu hvg
    //             ltdcglfcghl ;iclgjvh;guc jhlvguvhkcgjvhgucjhflcg'
    //         ],
    //         [
    //             'id' => 3,
    //             'title' => 'Listing Three',
    //             'description' => 'rytyliu;o egfwhejhughfugiw gygcwy
    //             ctvybunuyctuoib vbuoivguhb ifyutyfcxfyufcy
    //             wcfycwtcfvax;u qxqutftdugof ytultfytuylidtu uidtkufydtkfyicgl
    //             fylukcjflcgyi cghjhflcghjf cghfcglcxfhkccg hfyucg
    //             fyfycgjifylc gjgu;ifyl;ui fycgjlhfydcglgu hvg
    //             ltdcglfcghl ;iclgjvh;guc jhlvguvhkcgjvhgucjhflcg'
    //         ]
    //     ];
    // }


    // public static function find($id) {
    //     $listings = self::all();

    //     foreach($listings as $listing) {
    //         if($listing['id'] == $id ) {
    //             return $listing;
    //         }
    //     }
    // }
}