<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Blog;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        // Fetch the counts
        $newsCount = News::count();
        $blogsCount = Blog::count();

        // Pass the counts to the view
        return view('dashboard.dashboard', [
            'newsCount' => $newsCount,
            'blogsCount' => $blogsCount,
        ]);
    }



    // News Methods
    public function indexNews()
    {
        $news = News::all();
        return view('dashboard.news', compact('news'));
    }

    public function createNews()
    {
        return view('dashboard.news.create');
    }

    public function storeNews(Request $request)
    {

        
        // $validatedData = $request->validate([
        //     'title' => 'required|string|max:255',
        //     'title_ar' => 'required|string|max:255',
        //     'excerpt' => 'nullable|string',
        //     'excerpt_ar' => 'nullable|string',
        //     'description' => 'nullable|string',
        //     'description_ar' => 'nullable|string',
        //     'date' => 'required|date',
        //     'image' => 'nullable|string',
        //     'writer' => 'nullable|string|max:255',
        //     'writer_ar' => 'nullable|string|max:255',
        //     'link' => 'nullable|string|max:255',
        //     'visibility' => 'required|boolean',

        // ]);
        // dd($validatedData);

        // Create a new News object
        $news = new News();
        $news->title = $request->input('title');
        $news->title_ar = $request->input('title_ar');
        $news->excerpt = $request->input('excerpt');
        $news->excerpt_ar = $request->input('excerpt_ar');
        $news->description = $request->input('description');
        $news->description_ar = $request->input('description_ar');
        $news->date = $request->input('date');
        $news->date_ar = $request->input('date_ar');
        $news->writer = $request->input('writer');
        $news->writer_ar = $request->input('writer_ar');
        $news->link = $request->input('link');
        $news->link_ar = $request->input('link_ar');
        $news->visibility = $request->input('visibility'); 
        $news->visibility_ar = $request->input('visibility_ar'); 

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('images'), $imageName);
            $news->image = $imageName;
        }

        // Handle image upload
        if ($request->hasFile('image_ar')) {
            $image_ar = $request->file('image_ar');
            $imageName_ar = time() . '.' . $image_ar->extension();
            $image_ar->move(public_path('image_ar'), $imageName_ar);
            $news->image_ar = $imageName_ar;
        }        

    // Save the News object
    $news->save();


        return redirect()->route('dashboard.news.index')->with('success', 'News added successfully.');
    }

    public function editNews($id)
    {
        $news = News::findOrFail($id);
        return view('dashboard.news.edit', compact('news'));
    }

    public function updateNews(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'title_ar' => 'required|string|max:255',
            'excerpt' => 'nullable|string',
            'excerpt_ar' => 'nullable|string',
            'description' => 'nullable|string',
            'description_ar' => 'nullable|string',
            'date' => 'required|date',
            'date_ar' => 'required|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'image_ar' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'writer' => 'nullable|string|max:255',
            'writer_ar' => 'nullable|string|max:255',
            'link' => 'nullable|string|max:255',
            'link_ar' => 'nullable|string|max:255',
        ]);

        $news = News::findOrFail($id);

        $news->title = $request->input('title');
        $news->title_ar = $request->input('title_ar');
        $news->excerpt = $request->input('excerpt');
        $news->excerpt_ar = $request->input('excerpt_ar');
        $news->description = $request->input('description');
        $news->description_ar = $request->input('description_ar');
        $news->date = $request->input('date');
        $news->date_ar = $request->input('date_ar');
        $news->writer = $request->input('writer');
        $news->writer_ar = $request->input('writer_ar');
        $news->link = $request->input('link');
        $news->link_ar = $request->input('link_ar');

        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->extension();
            $image->move(public_path('images'), $imageName);
            $news->image = $imageName;
        }

        // Handle image upload
        if ($request->hasFile('image_ar')) {
            $image_ar = $request->file('image_ar');
            $imageName_ar = time() . '.' . $image_ar->extension();
            $image_ar->move(public_path('image_ar'), $imageName_ar);
            $news->image_ar = $imageName_ar;
        }        
        
        
        $news->save();
        
        return redirect()->route('dashboard.news.index')->with('success', 'News updated successfully.');
    }

    public function destroyNews($id)
    {
        $news = News::findOrFail($id);
        $news->delete();

        return redirect()->route('dashboard.news.index')->with('success', 'News deleted successfully.');
    }

    public function toggleVisibilityNews($id)
    {
        $news = News::findOrFail($id);
        $news->visibility = !$news->visibility; // Toggle the visibility
        $news->save();

        return redirect()->route('dashboard.news.index')->with('status', 'Visibility updated successfully.');
    }


    // Blog Methods
    public function indexBlog()
    {
        $blog = Blog::all();
        return view('dashboard.blog', compact('blog'));
    }

    public function createBlog()
    {
        return view('dashboard.blog.create');
    }

    public function storeBlog(Request $request)
    {
        // $request->validate([
        //     'title' => 'required|string|max:255',
        //     'title_ar' => 'required|string|max:255',
        //     'excerpt' => 'nullable|string',
        //     'excerpt_ar' => 'nullable|string',
        //     'description' => 'nullable|string',
        //     'description_ar' => 'nullable|string',
        //     'date' => 'required|date',
        //     'image' => 'nullable|string',
        //     'writer' => 'nullable|string|max:255',
        //     'writer_ar' => 'nullable|string|max:255',
        //     'visibility' => 'required|boolean',

        // ]);

        $blog = new Blog();
        $blog->title = $request->input('title');
        $blog->title_ar = $request->input('title_ar');
        $blog->excerpt = $request->input('excerpt');
        $blog->excerpt_ar = $request->input('excerpt_ar');
        $blog->description = $request->input('description');
        $blog->description_ar = $request->input('description_ar');
        $blog->date = $request->input('date');
        $blog->writer = $request->input('writer');
        $blog->writer_ar = $request->input('writer_ar');
        $blog->visibility = $request->input('visibility'); 

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('images'), $imageName);
            $blog->image = $imageName;
        }
        // Handle image upload
        if ($request->hasFile('image_ar')) {
            $image_ar = $request->file('image_ar');
            $imageName_ar = time() . '.' . $image_ar->extension();
            $image_ar->move(public_path('image_ar'), $imageName_ar);
            $blog->image_ar = $imageName_ar;
        }        

        // Save the News object
        $blog->save();


        return redirect()->route('dashboard.blog.index')->with('success', 'Blog added successfully.');
    }

    public function editBlog($id)
    {
        $blog = Blog::findOrFail($id);
        return view('dashboard.blog.edit', compact('blog'));
    }

    public function updateBlog(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'title_ar' => 'required|string|max:255',
            'excerpt' => 'nullable|string',
            'excerpt_ar' => 'nullable|string',
            'description' => 'nullable|string',
            'description_ar' => 'nullable|string',
            'date' => 'required|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'image_ar' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'writer' => 'nullable|string|max:255',
            'writer_ar' => 'nullable|string|max:255',
        ]);

        $blog = Blog::findOrFail($id);

        $blog->title = $request->input('title');
        $blog->title_ar = $request->input('title_ar');
        $blog->excerpt = $request->input('excerpt');
        $blog->excerpt_ar = $request->input('excerpt_ar');
        $blog->description = $request->input('description');
        $blog->description_ar = $request->input('description_ar');
        $blog->date = $request->input('date');
        $blog->writer = $request->input('writer');
        $blog->writer_ar = $request->input('writer_ar');

        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->extension();
            $image->move(public_path('images'), $imageName);
            $blog->image = $imageName;
        }

        // Handle image upload
        if ($request->hasFile('image_ar')) {
            $image_ar = $request->file('image_ar');
            $imageName_ar = time() . '.' . $image_ar->extension();
            $image_ar->move(public_path('image_ar'), $imageName_ar);
            $blog->image_ar = $imageName_ar;
        }        
        

        $blog->save();


        return redirect()->route('dashboard.blog.index')->with('success', 'Blog updated successfully.');
    }

    public function destroyBlog($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect()->route('dashboard.blog.index')->with('success', 'Blog deleted successfully.');
    }

    public function toggleVisibilityBlog($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->visibility = !$blog->visibility; // Toggle the visibility
        $blog->save();

        return redirect()->route('dashboard.blog.index')->with('status', 'Visibility updated successfully.');
    }

}
