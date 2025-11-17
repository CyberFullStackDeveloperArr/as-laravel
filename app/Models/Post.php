<?php
namespace App\Models;
use Illuminate\Support\Arr;
class Post {
    public static function all() {
        return [
            [
                'id' => 1,
                'slug' => 'judul-1',
                'titlew' => 'Buku Kisah Si Kancil',
                'author' => 'Rizki',
                'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing
                elit. Odio, et. Accusamus non possimus saepe culpa Lorem ipsum, dolor sit amet consectetur adipisicing
                elit. Odio, et. Accusamus non possimus saepe culpa
                Lorem ipsum, dolor sit amet consectetur adipisicing'
            ],
            [
                'id' => 2,
                'slug' => 'judul-2',
                'titlew' => 'Artikel Tentang Python',
                'author' => 'Budi',
                'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing
                elit. Odio, et. Accusamus non possimus saepe culpa Lorem ipsum, dolor sit amet consectetur adipisicing
                elit. Odio, et. Accusamus non possimus saepe culpa
                Lorem ipsum, dolor sit amet consectetur adipisicing'
            ]
        ];
    }
    public static function find($slug): array {
     $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);
        if (!$post) {
         abort(404);
        }
        return $post;
    }
}
?>
