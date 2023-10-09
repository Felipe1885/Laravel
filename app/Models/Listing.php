<?php
 namespace App\Models;

 class Listing {
    public static function all() {
        return [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'OI GENTE TUDO BEM COM VOCES'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'EU TO BEM E VOCES'
            ]
            ];
    }

    public static function find($id) {
        $listings = self::all();

        foreach($listings as $listing) {
            if($listing['id'] == $id) {
                return $listing;
            }
        }
    }
 }