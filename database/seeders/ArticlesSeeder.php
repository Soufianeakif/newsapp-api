<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articles = [
            [
                'category_id' => 1,
                'title' => 'Diaz on La Liga triumph: Real Madrid are a titles team, we fought for it this season',
                'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'image' => 'https://e1.hespress.com/wp-content/uploads/2024/05/diaz.jpg',
                'source' => 'Lorem Ipsum',
                'writer' => 'AKIF Soufiane',
                'created_at' => Carbon::now(),
            ],
        ];

        foreach ($articles as $articleData) {
            DB::table('articles')->insert($articleData);
        }
    }
}
