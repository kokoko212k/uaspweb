<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\model\Category;
use App\model\Post;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        $all_categories = Category ::where('status', '0')->get();
        $latest_posts = Post::where('status', '0')->orderBy('created_at','DESC')->get()->take(15);
        return view('komentar.index', compact('all_categories', 'latest_posts'));
    }


    public function viewCategoryPost(string $category_slug)
    {
        $category = Category ::where('slug', $category_slug)->where('status','0')->first();
        if($category)
        {
            $post=Post::where ('category_id',$category_id)->where('status','0')->paginate(10);
            return view('komentar.post.index', compact('post', 'category'));
        }
        else
        {
        return redirect('/');
        }
    } 

    public function viewPost(string $category_slug, string $post_slug)
    {
        $category = Category ::where('slug', $category_slug)->where('status','0')->first();
        if($category)
        {
            $post = Post ::where('category_id', $category_slug)->where('slug',$post_slug)->where('status','0')->first();
            $latest_post = Post::where ('category_id',$category_id->where('status','0')->orderBy('create_at','DESC')->get->take(10));
            return view('komentar.post.view', compact('post', 'latest_posts'));
        }
        else
        {
        return redirect('/');
        }
    }
}