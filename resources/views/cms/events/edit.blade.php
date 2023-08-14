@extends('cms.layouts.parant')

@section('title', 'Create')

@section('page-title', 'Create')

@section('small-title', 'News Edit')

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
                  <h3 class="card-title">Quick Example</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->

                <form method="POST" action="{{ route('events.update', $new->id) }}" >
                    @csrf
                    @method('PUT')
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
                      <input type="text" name="title" value="{{$new->title}}" id="title" placeholder="Enter Title ">
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" name="description" value="{{$new->description}}" id="description" placeholder="Enter description ">
                      </div>

                      <div class="form-group">
                        <label for="image">Image</label>
                            @if ($new->image)
                            <img src="{{ asset('storage/' . $new->image)}}" alt="" srcset="" height="50px" width="50px">
                            @endif
                        <input type="file" name="image" id="image" class="form-control-file">
                      </div>

                      {{-- <div class="form-group">
                        <label for="tag">Tag: </label>
                        <input type="text" name="tag"  id="tag" placeholder="Enter tag ">
                      </div> --}}
                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Edit</button>
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
