<?php
namespace App\Models;

class Listing {
    public static function all() {
        return [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'rytyliu;o egfwhejhughfugiw gygcwy
                ctvybunuyctuoib vbuoivguhb ifyutyfcxfyufcy
                wcfycwtcfvax;u qxqutftdugof ytultfytuylidtu uidtkufydtkfyicgl
                fylukcjflcgyi cghjhflcghjf cghfcglcxfhkccg hfyucg
                fyfycgjifylc gjgu;ifyl;ui fycgjlhfydcglgu hvg
                ltdcglfcghl ;iclgjvh;guc jhlvguvhkcgjvhgucjhflcg'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
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
}