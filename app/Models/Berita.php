<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Berita
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'berita-pertama',
                'judul' => 'Berita Pertama',
                'tanggal' => '28 Desember 2024',
                'gambar' => '/images/dummy-gambar-berita-1.jpg',
                'isi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex excepturi repudiandae beatae error dolorum ratione ipsum necessitatibus veniam debitis? Consequuntur, excepturi nobis fuga dolorem provident laborum vitae numquam ullam tenetur nemo perferendis? Assumenda praesentium hic repellendus fuga, vero voluptates tempore odio saepe tenetur quaerat perspiciatis ab eum alias ea maiores odit eligendi optio officia aspernatur veniam exercitationem. Reprehenderit, suscipit dolorum corrupti et incidunt iste officiis consequatur atque repellendus impedit soluta placeat voluptate error accusamus! Distinctio adipisci magni explicabo cum provident odit, accusantium vero quisquam dolorum asperiores a cumque eius sapiente delectus quod possimus, commodi doloremque quaerat autem doloribus dolores? Asperiores.'
            ],
            [
                'id' => 2,
                'slug' => 'berita-kedua',
                'judul' => 'Berita Kedua',
                'tanggal' => '28 Januari 2025',
                'gambar' => '/images/dummy-gambar-berita-2.jpg',
                'isi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex excepturi repudiandae beatae error dolorum ratione ipsum necessitatibus veniam debitis? Consequuntur, excepturi nobis fuga dolorem provident laborum vitae numquam ullam tenetur nemo perferendis? Assumenda praesentium hic repellendus fuga, vero voluptates tempore odio saepe tenetur quaerat perspiciatis ab eum alias ea maiores odit eligendi optio officia aspernatur veniam exercitationem. Reprehenderit, suscipit dolorum corrupti et incidunt iste officiis consequatur atque repellendus impedit soluta placeat voluptate error accusamus! Distinctio adipisci magni explicabo cum provident odit, accusantium vero quisquam dolorum asperiores a cumque eius sapiente delectus quod possimus, commodi doloremque quaerat autem doloribus dolores? Asperiores.'
            ],
            [
                'id' => 3,
                'slug' => 'berita-ketiga',
                'judul' => 'Berita Ketiga',
                'tanggal' => '28 Februari 2025',
                'gambar' => '/images/dummy-gambar-berita-3.jpg',
                'isi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex excepturi repudiandae beatae error dolorum ratione ipsum necessitatibus veniam debitis? Consequuntur, excepturi nobis fuga dolorem provident laborum vitae numquam ullam tenetur nemo perferendis? Assumenda praesentium hic repellendus fuga, vero voluptates tempore odio saepe tenetur quaerat perspiciatis ab eum alias ea maiores odit eligendi optio officia aspernatur veniam exercitationem. Reprehenderit, suscipit dolorum corrupti et incidunt iste officiis consequatur atque repellendus impedit soluta placeat voluptate error accusamus! Distinctio adipisci magni explicabo cum provident odit, accusantium vero quisquam dolorum asperiores a cumque eius sapiente delectus quod possimus, commodi doloremque quaerat autem doloribus dolores? Asperiores.'
            ],
        ];
    }

    public static function find($slug): array
    {
        $berita = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if (!$berita) {
            abort(404);
        }

        return $berita;
    }
}
