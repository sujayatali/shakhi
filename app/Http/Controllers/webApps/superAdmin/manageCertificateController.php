<?php

namespace App\Http\Controllers\webApps\superAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\post;
use App\Models\post_meta;

class manageCertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = post::get()->where('post_type','certificate');
        return view('webApps.superAdmin.cmsManagement.certificateManagement.certficateView')
        ->with(compact('posts'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('webApps.superAdmin.cmsManagement.certificateyManagement.certificateyUpload');
        return view('webApps.superAdmin.cmsManagement.certificateManagement.certificateUpload');
        //echo "hello";
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
        $post->content  = 'certificate Loremipsum';
        $post->post_type = 'certificate';
        $post->status = 'publish';
        $post->save();
        
        $last_post_id = $post->id; 
        $url = upload_attachment($request->file('certificate'), '/webApps/images/certificate');
        update_post_meta($last_post_id, 'certificate', $url); 

        if($last_post_id){
            $request->session()->flash('message-register', 'Successfull certificate Image Uploaded');
        }
        return redirect('/certificate-manage/create');
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
        $fileDelete = get_post_meta($id,'certificate');
        $unlink = explode("http://shakhi.org/",$fileDelete)[1];
        if ( is_dir($unlink) ){
        unlink($unlink);
        }
        $hold =  delete_post_meta($id,'certificate');
        return redirect('/certificate-manage');
       
        
    }
}
