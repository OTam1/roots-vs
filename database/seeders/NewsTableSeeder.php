<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            'title' => 'Sample News Title',
            'title_ar' => 'عنوان أخبار عينة',
            'excerpt' => 'This is a sample excerpt for the news.',
            'excerpt_ar' => 'هذه مقتطفات من الأخبار.',
            'description' => 'This is a detailed description of the news content.',
            'description_ar' => 'هذه وصف تفصيلي لمحتوى الأخبار.',
            'date' => now()->toDateString(),
            'image' => 'sample-image.jpg',
            'writer' => 'John Doe',
            'writer_ar' => 'جون دو', 
            'link' => 'https://example.com/news/sample-news',
            'visibility' => true, 
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
