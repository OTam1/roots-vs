<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog')->insert([
            'title' => 'Sample Blog Title',
            'title_ar' => 'عنوان مدونة عينة',
            'excerpt' => 'This is a sample excerpt for the blog post.',
            'excerpt_ar' => 'هذه مقتطفات من مدونة.',
            'description' => 'This is a detailed description of the blog content.',
            'description_ar' => 'هذه وصف تفصيلي لمحتوى المدونة.',
            'date' => now()->toDateString(),
            'image' => 'sample-blog-image.jpg',
            'writer' => 'Jane Doe',
            'writer_ar' => 'جون دو',
            'visibility' => true, 
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
