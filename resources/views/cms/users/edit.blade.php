@extends('cms.layouts.parant')

@section('title', 'Create')

@section('page-title', 'Create')

@section('small-title', 'User Create')

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
                  <h3 class="card-title">Edit Admin</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
            <div class="modal-body">
                <form method="POST" action="{{ route('users.update', $user->id) }}" >
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
                        <label for="name">name</label>
                        <input type="text" name="name" value="{{$user->name}}" id="name" placeholder="Enter name ">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email"  value="{{$user->email}}" placeholder="Enter email ">
                    </div>

                    <select name="type">
                        <!-- Options go here -->
                        <option vaule="user" >user</option>
                        <option value = "admin" >admin</option>
                     </select>


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
