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
            $news = News::where('visibility', true)->get();
            return view('news', ['news' => $news]);
        }
    
        // Display the detailed view of a specific news item
        public function newsShow($id)
        {
            $newsItem = News::findOrFail($id); // Fetch a specific news item by ID
            $randomNews = News::where('id', '!=', $id)
                               ->where('visibility', true)
                               ->inRandomOrder()
                               ->take(2)
                               ->get();
        
            // Ensure randomNews has items
            $randomNews1 = $randomNews->count() > 0 ? $randomNews->first() : null;
            $randomNews2 = $randomNews->count() > 1 ? $randomNews->skip(1)->first() : null;
        
            return view('detailed-news', [
            'newsItem' => $newsItem,
            'randomNews1' => $randomNews->get(0), 
            'randomNews2' => $randomNews->get(1)
            ]);
        }



        // Display the list of blog items
        public function blogIndex()
        {
            // Display the list of news items
            $blog = Blog::where('visibility', true)->get();

            return view('blog', ['blog' => $blog]);
        }
    
        // Display the detailed view of a specific blog item
        public function blogShow($id)
        {
            $blogItem = Blog::findOrFail($id); // Fetch a specific blog item by ID
            $randomBlog = Blog::where('id', '!=', $id) // Exclude the blog with the specified ID
            ->where('visibility', true) // Only include visible blogs
            ->inRandomOrder() // Order the results randomly
            ->take(2) // Take 2 random blogs
            ->get(); // Execute the query and get the results

            return view('detailed-blog', [
            'blogItem' => $blogItem,
            'randomBlog1' => $randomBlog->get(0), 
            'randomBlog2' => $randomBlog->get(1)
            ]);
        }
    

}
