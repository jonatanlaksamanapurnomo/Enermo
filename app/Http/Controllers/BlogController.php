<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $req_page = $request->page ? $request->page : 1;
        $blog = Post::where('featured', 1)->orderBy('updated_at', 'desc')->paginate(4);
        if ($blog->lastPage() >= $req_page) {
            return view('blog', [
                "blogs" => $blog
            ]);
        } else {
            return redirect("/blog");
        }
    }

    public function detail($slug)
    {
        $blog = Post::where('featured', 1)->where('slug', $slug)->orderBy('updated_at', 'desc')->get();
        $recent_blogs = Post::where('featured', 1)->where('slug', '!=', $slug)->orderBy('updated_at', 'desc')->paginate(3);
        if (sizeof($blog) == 1) {
            return view('blog-detail', [
                "blog" => $blog[0],
                "recent_blogs" => $recent_blogs
            ]);
        } else {
            return abort(404);
        }
    }
}
