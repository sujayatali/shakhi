<?php
use App\Models\User;
use App\Models\user_meta;
use App\Models\post;
use App\Models\post_meta;
//use DB;
//-----| users & user_metas |-----
function get_user_meta($user_id, $meta_key){
    $results = user_meta::get()->where('user_id',$user_id)->where('meta_key',$meta_key);
    foreach($results as $result){
        return  $result['meta_value'];
    }
}

function update_user_meta($user_id, $meta_key, $meta_value){
    $result_ = '';
    $results = user_meta::get()->where('user_id',$user_id)->where('meta_key',$meta_key);
    foreach($results->toArray() as $result){
        $result_ = $result['id'];
    }
    if($result_){
        $user = user_meta::find($result_);
        $user->meta_value = $meta_value;
        $user->save();
    }else{
        $user = new user_meta();
        $user->user_id = $user_id;
        $user->meta_key = $meta_key;
        $user->meta_value = $meta_value;
        $user->save();
    }
}

//-----| posts & post_metas |-----
function get_post_meta($post_id, $meta_key){
    $results = post_meta::get()->where('post_id',$post_id)->where('meta_key',$meta_key);
    foreach($results as $result){
        return  $result['meta_value'];
    }
}

function update_post_meta($post_id, $meta_key, $meta_value){
    $result_ = '';
    $results = post_meta::get()->where('post_id',$post_id)->where('meta_key',$meta_key);
    foreach($results->toArray() as $result){
        $result_ = $result['id'];
    }
    if($result_){
        $post = post_meta::find($result_);
        $post->meta_value = $meta_value;
        $post->save();
    }else{
        $post = new post_meta();
        $post->post_id = $post_id;
        $post->meta_key = $meta_key;
        $post->meta_value = $meta_value;
        $post->save();
    }
}

function delete_post_meta($post_id, $meta_key){
    $result_ = '';
    $results = post_meta::get()->where('post_id',$post_id)->where('meta_key',$meta_key);
    foreach($results->toArray() as $result){
        $result_ = $result['id'];
    }
    $post = post_meta::find($result_);
    $post->delete();
}





//$toasterColor = success, info, warning
function sweetToaster($toasterColor, $message){ ?>
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?php echo url('webApps/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css'); ?>">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?php echo url('webApps/plugins/toastr/toastr.min.css'); ?>">
    <!-- jQuery -->
    <script src="<?php echo url('webApps/plugins/jquery/jquery.min.js');?>"></script>
    <!-- SweetAlert2 -->
    <script src="<?php echo url('webApps/plugins/sweetalert2/sweetalert2.min.js');?>"></script>
    <!-- Toastr -->
    <script src="<?php echo url('webApps/plugins/toastr/toastr.min.js');?>"></script>

    <!-- Page specific script -->
    <script>
    $(function() {
        toastr.<?php echo $toasterColor; ?>('<?php echo $message; ?>')
    });
    </script>
<?php
}

//-----| upload attchment |-----
function upload_attachment($filename, $foldername){
        $file= $filename;
        $dir = date('YmdHi').$file->getClientOriginalName();
        $file-> move(public_path('/'.$foldername), $dir);
        return Config::get('app.url').$foldername.'/'.$dir;
}

function pre($array){
    echo '<pre>';print_r($array);echo '</pre>';
}
?>
