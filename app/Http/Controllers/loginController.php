<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserLoginVerifyRequest;
use App\Models\User;
use App\Models\user_meta;
use Illuminate\Support\Facades\DB;

class loginController extends Controller
{
    public function userIndex(){
        return view('webApps.loginPage.login');
    }

    public function loginUser(Request $request){
        $user = DB::table('users')
                ->where('email', $request->username)
                ->where('password', $request->password)
                ->get();
                // echo"<pre>";
                // print_r($user); die;


        if(empty($user[0])){
            $request->session()->flash('message', 'Invalid Username or password');
            return view('webApps.loginPage.login');
        }else{
            $request->session()->put('user', $user);
            switch($user[0]->role):
                case 'super_admin':
                    return redirect('/super-admin-dashboard');
                break;

                case 'sub_admin':
                    return redirect('/sub-admin-dashboard');
                break;

                case 'dc_admin':
                    return redirect('/dc-admin-dashboard');
                break;

                case 'bc_admin':
                    return redirect('/bc-admin-dashboard');
                break;

                case 'ss_admin':
                    return redirect('/ss-admin-dashboard');
                break;

                case 'user_member':
                    return redirect('/user-member-dashboard');
                break;

                case 'shop_keeper':
                    return redirect('/shop-keeper-dashboard');
                break;

            endswitch;
        }
    }

    public function forgotPassword(){
        return view('webApps.loginPage.forgotPassword');
    }

    public function userLogout(){
        session()->flush();
    	return redirect('/login-panel');
    }
}
