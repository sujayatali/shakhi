<?php

namespace App\Http\Controllers\webApps\superAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\post;
use App\Models\post_meta;

class sliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = post::get()->where('post_type','slider');
        return view('webApps.superAdmin.cmsManagement.sliderManagement.sliderView')
        ->with(compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            //echo"hello"; die();
        return view('webApps.superAdmin.cmsManagement.sliderManagement.sliderUpload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $validated = $request->validate([
            'title'      =>     'required',
            'slider_img' =>     'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $post = new post();
        $post->title    = $request->title;
        $post->content  = 'Slider Loremipsum';
        $post->post_type = 'slider';
        $post->status = 'publish';
        $post->save();
        
        $last_post_id = $post->id; 
        $url = upload_attachment($request->file('slider_img'), '/webApps/images/slider');
        update_post_meta($last_post_id, 'slider_url', $url); 

        if($last_post_id){
            $request->session()->flash('message-register', 'Successfull Slider Image Uploaded');
        }
        return redirect('/slider-manage/create');
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
        $posts = post::find($id);
        return view('webApps.superAdmin.cmsManagement.sliderManagement.sliderUpload')->with(compact('posts'));
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
        $post = post::find($id);
        $post->title = $request->input('title');
        $post->save();

        $last_post_id = $post->id;
        if($last_post_id){
            $request->session()->flash('message-register', 'Update Successfull Slider');
        }
         return redirect('/slider-manage');
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
