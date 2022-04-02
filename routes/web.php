<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\loginController;
use App\Http\Controllers\webApps\superAdmin\manageGalleryController;
use App\Http\Controllers\webApps\superAdmin\manageCertificateController;
use App\Http\Controllers\webApps\superAdmin\subAdminController;
use App\Http\Controllers\webApps\superAdmin\superDcAdminController;
use App\Http\Controllers\webApps\superAdmin\superBcAdminController;
use App\Http\Controllers\webApps\superAdmin\superSsAdminController;
use App\Http\Controllers\webApps\superAdmin\superUserMemberController;
use App\Http\Controllers\webApps\superAdmin\superShopUserController;
use App\Http\Controllers\web\webManageController;
use App\Http\Controllers\webApps\superAdmin\sliderController;
use App\Http\Controllers\webApps\superAdmin\newsPostController;

use App\Http\Controllers\webApps\subAdmin\subDcAdminController;
use App\Http\Controllers\webApps\subAdmin\subBcAdminController;
use App\Http\Controllers\webApps\subAdmin\subSsAdminController;
use App\Http\Controllers\webApps\subAdmin\subUserMemberController;
use App\Http\Controllers\webApps\subAdmin\subShopUserController;

use App\Http\Controllers\webApps\dcAdmin\dcBcAdminController;
use App\Http\Controllers\webApps\dcAdmin\dcSsAdminController;
use App\Http\Controllers\webApps\dcAdmin\dcUserMemberController;
use App\Http\Controllers\webApps\dcAdmin\dcShopUserController;

use App\Http\Controllers\webApps\bcAdmin\bcSsAdminController;
use App\Http\Controllers\webApps\bcAdmin\bcUserMemberController;
use App\Http\Controllers\webApps\bcAdmin\bcShopUserController;

use App\Http\Controllers\webApps\ssAdmin\ssUserMemberController;

use App\Models\user_meta;
use App\Models\users;
use App\Http\Middleware\verifyUser;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
|------------| Without Session |-------------
*/
Route::get('/',[webManageController::class,'slider']);

Route::get('/about', function () {
    return view('web.about');
});
Route::get('/contact', function () {
    return view('web.contact');
});


   
Route::get('/gallery',[webManageController::class,'gallery']);
Route::get('/certificate',[webManageController::class,'certificate']);
Route::get('/news',[webManageController::class,'newsPost']);
// Route::get('/slider',[sliderController::class,'slider']);

Route::get('/login-panel', [loginController::class,'userIndex']);
Route::post('/login-panel', [loginController::class,'loginUser']);

Route::get('/forgot-password', [loginController::class,'forgotPassword']);
Route::get('/logout-user', [loginController::class,'userLogout']);

Route::group(['middleware' => 'user_validation'], function(){
    //-----| Super Admin |-----
    Route::get('/super-admin-dashboard', function () {
        return view('webApps.superAdmin.super-admin-home');
    });
    Route::resource('/super-sub-admin-register', subAdminController::class);
    Route::resource('/super-dc-admin', superDcAdminController::class);
    Route::resource('/super-bc-admin', superBcAdminController::class);
    Route::resource('/super-ss-admin', superSsAdminController::class);
    Route::resource('/super-user-member', superUserMemberController::class);
    Route::resource('/super-shop-keeper', superShopUserController::class);
    Route::resource('/gallery-manage', manageGalleryController::class);
    Route::resource('/certificate-manage', manageCertificateController::class);
    Route::resource('/news-manage', newsPostController::class);
    Route::resource('/slider-manage', sliderController::class);

    //-----| Sub Admin |-----
    Route::resource('/sub-admin/sub-dc-admin', subDcAdminController::class);
    Route::resource('/sub-admin/sub-bc-admin', subBcAdminController::class);
    Route::resource('/sub-admin/sub-ss-admin', subSsAdminController::class);
    Route::resource('/sub-admin/sub-user-member', subUserMemberController::class);
    Route::resource('/sub-admin/sub-shop-keeper', subShopUserController::class);

    //-----| DC Admin |-----
    Route::resource('/dc-admin/dc-bc-admin', dcBcAdminController::class);
    Route::resource('/dc-admin/dc-ss-admin', dcSsAdminController::class);
    Route::resource('/dc-admin/dc-user-member', dcUserMemberController::class);
    Route::resource('/dc-admin/dc-shop-keeper', dcShopUserController::class);

    //-----| BC Admin |-----
    Route::resource('/bc-admin/bc-ss-admin', bcSsAdminController::class);
    Route::resource('/bc-admin/bc-user-member', bcUserMemberController::class);
    Route::resource('/bc-admin/bc-shop-keeper', bcShopUserController::class);

    //-----| SS Admin |-----
    Route::resource('/ss-admin/ss-user-member', ssUserMemberController::class);
});

Route::get('/sub-admin-dashboard', function () {
    return view('webApps.subAdmin.sub-admin-home');

});

Route::get('/dc-admin-dashboard', function () {
    return view('webApps.dcAdmin.dc-admin-home');
});
Route::get('/bc-admin-dashboard', function () {
    return view('webApps.bcAdmin.bc-admin-home');
});
Route::get('/ss-admin-dashboard', function () {
    return view('webApps.ssAdmin.ss-admin-home');
});
Route::get('/user-member-dashboard', function () {
    return view('webApps.userMember.user-member-home');
});
Route::get('/shop-keeper-dashboard', function () {
    return view('webApps.shopKeeper.shop-keeper-home');
});
