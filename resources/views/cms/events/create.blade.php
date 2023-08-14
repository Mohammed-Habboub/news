@extends('cms.layouts.parant')

@section('title', 'Create')

@section('page-title', 'Create')

@section('small-title', 'Category News')

@section('style')
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Create New</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->

                <form method="POST" action="{{ route('events.store') }}" enctype="multipart/form-data" >
                    @csrf
                  <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                            <ul>
                                @foreach ($errors->all() as $error )
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (session()->has('message'))
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h5><i class="icon fas fa-check"></i> Success!</h5>
                            {{session('message')}}
                        </div>
                    @endif

                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" name="title" id="title" placeholder="Enter Title ">
                    </div>

                    <div class="form-group">
                      <label for="description">Description</label>
                      <textarea name="description" id="description"  placeholder="Enter description " class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="image" >Image</label>
                        <input type="file" name="image" id="image" class="form-control-file">
                    </div>

                    {{-- <div class="form-group">
                        <label for="tag">Tag: </label>
                        <input type="text" name="tag" id="tag" placeholder="Enter tags ">
                    </div> --}}
                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Store</button>
                  </div>
                </form>
              </div>
              <!-- /.card -->





        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
 @endsection

 @section('scripts')
 @endsection
