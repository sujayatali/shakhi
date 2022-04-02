@extends('webApps.superAdmin.super-admin-dashboard')
@section('super-admin-dashboard-title','Slider View | Dashboard')
@section('super-admin-dashboard-content')
  <!-- Content Wrapper. Contains page content -->
 
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Slider View</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Slider View</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Slider Deatils..</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr align="center">
                    <th>Sr No.</th>
                    <th> Title</th>
                    <th> Image</th>
                    <th> Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @php  $i = 1; @endphp
                     @foreach ($posts as $post)
                     <tr align="center">
                       <td>{{ $i }}</td>
                       <td>{{ $post['title'] }}</td>
                       <td> @php $default_img = '/webApps/images/no-image-icon.jpg'; $gallery_img = (get_post_meta($post['id'],'slider_url'))?get_post_meta($post['id'],'slider_url'):$default_img;   @endphp
                         <img src="{{$gallery_img}}" class="img-fluid img-thumbnail w-25">
                        </td>
                        <td> <a href="{{ url('/slider-manage/'.$post['id'].'/edit') }}"><i class="fa fa-edit text-danger"></i> </a> </td>
                     </tr>
                     @php  $i++; @endphp 
                     @endforeach
                    </tbody> 
                  <tfoot>
                 <tr align="center">
                    <th>Sr No.</th>
                    <th> Title</th>
                    <th> Image</th>
                    <th> Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection