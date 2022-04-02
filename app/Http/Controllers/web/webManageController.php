<?php
namespace App\Http\Controllers\web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\post;
use App\Models\post_meta;

class webManageController extends Controller
{
    public function gallery(){
        $posts = post::get()->where('post_type','gallery');
        return view('web.gallery')
        ->with(compact('posts'));
    }

    public function certificate(){
        $posts = post::get()->where('post_type','certificate');
        return view('web.certificate')
        ->with(compact('posts'));
    }

    public function newsPost(){
        $posts = post::get()->where('post_type','newsPost');
        return view('web.news')
        ->with(compact('posts'));
    }

    public function showSingleNews($id)
    {
        $post_id = post::find($id);
        return view('news-view-single')->with(compact('post_id'));
    }


    public function slider(){
         $posts = post::get()->where('post_type','slider')->take(2)->sortByDesc('created_at');
        return view('web.home')
        ->with(compact('posts'));
    }
}


