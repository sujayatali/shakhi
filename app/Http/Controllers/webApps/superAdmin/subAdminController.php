<?php

namespace App\Http\Controllers\webApps\superAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use DB;

class subAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')
                ->join('user_metas', 'users.id', '=', 'user_metas.user_id')
                ->get()->where('meta_key','role')->where('meta_value','sub_admin');
        return view('webApps.superAdmin.subAdmin.super-admin-subadmin-registration-view')->with(compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('webApps.superAdmin.subAdmin.super-admin-subadmin-registration');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'          => 'required',
            'email'         => 'required|email|unique:users',
            'father_name'   => 'required',
            'dob'           => 'required',
            'contact'       => 'required',
            'qualification' => 'required',
            'address'       => 'required',
            'district'      => 'required',
            'state'         => 'required',
            'amount'        => 'required',
            'password'      => 'required|min:5'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->email_verified_at = date('Y-m-d H:m:s');
        $user->remember_token = $request->_token;
        $user->password = $request->password;
        $user->save();
        $last_user_id = $user->id;

        $url = upload_attachment($request->file('files'), '/webApps/images/profile');
        update_user_meta($last_user_id, 'profile_url', $url);
        update_user_meta($last_user_id, 'role', 'sub_admin');
        update_user_meta($last_user_id, 'father_name', $request->father_name);
        update_user_meta($last_user_id, 'dob', $request->dob);
        update_user_meta($last_user_id, 'contact', $request->contact);
        update_user_meta($last_user_id, 'qualification', $request->qualification);
        update_user_meta($last_user_id, 'address', $request->address);
        update_user_meta($last_user_id, 'district', $request->district);
        update_user_meta($last_user_id, 'state', $request->state);
        update_user_meta($last_user_id, 'amount', $request->amount);

        if($last_user_id){
            $request->session()->flash('message-register', 'Successfull registration');
        }
        return redirect('/super-sub-admin-register/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::find($id);
        return view('webApps.superAdmin.subAdmin.super-admin-subadmin-view-single')->with(compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::find($id);
        return view('webApps.superAdmin.subAdmin.uper-admin-subadmin-edit')->with(compact('users'));
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
        $validatedData = $request->validate([
            'name'          => 'required',
            'email'         => 'required|email|unique:users',
            'father_name'   => 'required',
            'dob'           => 'required',
            'contact'       => 'required',
            'qualification' => 'required',
            'address'       => 'required',
            'district'      => 'required',
            'state'         => 'required',
            'amount'        => 'required',
            'password'      => 'required|min:5'
        ]);

        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->email_verified_at = date('Y-m-d H:m:s');
        $user->remember_token = $request->input('_token');
        $user->password = $request->input('password');
        $user->save();

        $last_user_id = $user->id;
        $url = upload_attachment($request->file('files'), '/webApps/images/profile');
        update_user_meta($last_user_id, 'profile_url', $url);
        update_user_meta($last_user_id, 'role', 'sub_admin');
        update_user_meta($last_user_id, 'father_name', $request->father_name);
        update_user_meta($last_user_id, 'dob', $request->dob);
        update_user_meta($last_user_id, 'contact', $request->contact);
        update_user_meta($last_user_id, 'qualification', $request->qualification);
        update_user_meta($last_user_id, 'address', $request->address);
        update_user_meta($last_user_id, 'district', $request->district);
        update_user_meta($last_user_id, 'state', $request->state);
        update_user_meta($last_user_id, 'amount', $request->amount);

        if($last_user_id){
            $request->session()->flash('message-register', 'Successfull registration');
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        $last_user_id = $user->id;
        if($last_user_id){
            session()->flash('message-register', 'Successfull delete');
        }
        return redirect()->back();
    }
}
