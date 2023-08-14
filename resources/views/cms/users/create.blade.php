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
                  <h3 class="card-title">Create Admin</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->

                <form method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data" >
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
                        <label for="name">name</label>
                        <input type="text" name="name"  id="name" placeholder="Enter name ">
                      </div>

                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email"  placeholder="Enter email ">
                      </div>
                      <div>
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password">
                    </div>

                    <select name="type">
                        <!-- Options go here -->
                        <option value="user">user</option>
                        <option value="admin">admin</option>

                        <!-- Add more options as needed -->
                      </select>


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
