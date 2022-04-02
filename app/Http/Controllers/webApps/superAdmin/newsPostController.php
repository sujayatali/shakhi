<?php

namespace App\Http\Controllers\webApps\superAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\post;
use App\Models\post_meta;

class newsPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = post::get()->where('post_type','newsPost');
        return view('webApps.superAdmin.cmsManagement.newsManagement.newsView')
        ->with(compact('posts'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('webApps.superAdmin.cmsManagement.newsManagement.newsUpload');
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        
        $post = new post();
        $post->title    = $request->title;
        $post->content  = $request->news_desc;
        $post->post_type = 'newsPost';
        $post->status = 'publish';
        $post->save();
        
        $last_post_id = $post->id; 
        $url = upload_attachment($request->file('news_image'), '/webApps/images/news_img');
        update_post_meta($last_post_id, 'news_image', $url); 

        if($last_post_id){
            $request->session()->flash('message-register', 'News Successfull Uploaded');
        }
        return redirect('/news-manage/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $post = post::find($id);
        $post->delete();
        $fileDelete = get_post_meta($id,'news_image');
        $unlink = explode("http://shakhi.org/",$fileDelete)[1];
        if ( is_dir($unlink) ){
        unlink($unlink);
        }
        $hold =  delete_post_meta($id,'news_image');
        return redirect('/news-manage');
       
        
    }
}
