<?php

namespace App\Http\Controllers\webApps\superAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\post;
use App\Models\post_meta;

class manageGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = post::get()->where('post_type','gallery');
        return view('webApps.superAdmin.cmsManagement.galleryManagement.galleryView')
        ->with(compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('webApps.superAdmin.cmsManagement.galleryManagement.galleryUpload');
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
        $post->content  = 'Gallery Loremipsum';
        $post->post_type = 'gallery';
        $post->status = 'publish';
        $post->save();
        
        $last_post_id = $post->id; 
        $url = upload_attachment($request->file('gallery_img'), '/webApps/images/gallery');
        update_post_meta($last_post_id, 'gallery_url', $url); 

        if($last_post_id){
            $request->session()->flash('message-register', 'Successfull Gallery Image Uploaded');
        }
        return redirect('/gallery-manage/create');
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
        //
    }
}
