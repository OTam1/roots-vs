<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Blog;

class FrontController extends Controller
{
        // Display the list of news items
        public function newsIndex()
        {
            $news = News::all(); // Fetch all news items
            return view('news', ['news' => $news]);
        }
    
        // Display the detailed view of a specific news item
        public function newsShow($id)
        {
            $newsItem = News::findOrFail($id); // Fetch a specific news item by ID
            $randomNews = News::where('id', '!=', $id)->inRandomOrder()->take(2)->get();

            return view('detailed-news', [
            'newsItem' => $newsItem,
            'randomNews1' => $randomNews->get(0), 
            'randomNews2' => $randomNews->get(1)
            ]);
        }



        // Display the list of blog items
        public function blogIndex()
        {
            $blog = Blog::all(); // Fetch all blog items
            return view('blog', ['blog' => $blog]);
        }
    
        // Display the detailed view of a specific blog item
        public function blogShow($id)
        {
            $blogItem = Blog::findOrFail($id); // Fetch a specific blog item by ID
            $randomBlog = Blog::where('id', '!=', $id)->inRandomOrder()->take(2)->get();

            return view('detailed-blog', [
            'blogItem' => $blogItem,
            'randomBlog1' => $randomBlog->get(0), 
            'randomBlog2' => $randomBlog->get(1)
            ]);
        }
    

}
