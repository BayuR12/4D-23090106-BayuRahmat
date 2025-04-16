<?php

namespace App\Models;

class Categories 
{
    private static $product_categories = [
        [
            'id'=> 1,
            'name' => 'pria',
            'slug' => 'Pakaian Pria',
            'description' => 'Ini adalah produk pakaian pria',
            'image' => 'https://placehold.co/300x300?text=Pakaian+Pria',
        ],
        [
            'id'=> 2,
            'name' => 'wanita',
            'slug' => 'Pakaian Wanita',
            'description' => 'Ini adalah produk pakaian wanita',
            'image' => 'https://placehold.co/300x300?text=Pakaian+Wanita',
        ],
        [
            'id'=> 3,
            'name' => 'anak',
            'slug' => 'Pakaian Anak',
            'description' => 'Ini adalah produk pakaian anak',
            'image' => 'https://placehold.co/300x300?text=Pakaian+Anak',
        ],
        [
            'id'=> 4,
            'name' => 'aksesori',
            'slug' => 'Aksesori',
            'description' => 'Ini adalah produk aksesori',
            'image' => 'https://placehold.co/300x300?text=Aksesori',
        ],
        [
            'id'=> 5,
            'name' => 'sepatu',
            'slug' => 'Sepatu',
            'description' => 'Ini adalah produk sepatu',
            'image' => 'https://placehold.co/300x300?text=Sepatu',
        ]
    ];

    public static function all()
    {
        return self::$product_categories;
    }

    public static function find($slug)
    {
        $categories = self::all();
        foreach ($categories as $category) {
            if ($category['slug'] === $slug) {
                return $category;
            }
        }
        return null;
    }
}
