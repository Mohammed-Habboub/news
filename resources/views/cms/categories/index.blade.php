@extends('cms.layouts.parant')
@section('title', 'Categories')
@section('page-title', 'Index')
@section('small-title', 'Categories Index')
@section('style')
@endsection @section('content')
 <section class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Categories Table</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover table-bordered table-striped text-nowrap" id="table_id">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Slug</th>
                                    <th>Status</th>
                                    <th>Create AT</th>
                                    <th>Update AT</th>
                                    <th>Settings</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                <tr>
                                    {{-- <span class="tag tag-success">Approved</span> --}}
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->title }}</td>
                                    <td>{{ $category->slug }}</td>
                                    <td>
                                        @if ($category->active)
                                        <span class="badge bg-success">{{$category->activity_status}}</span>
                                        @else
                                        <span class="badge bg-danger">{{$category->activity_status}}</span>
                                        @endif
                                    </td>
                                    <td>{{ $category->created_at }}</td>
                                    <td>{{ $category->updated_at }}</td>
                                    <td>
                                        <div class="btn-group">
                                            {{-- href="{{route('categories.edit', $category->id)}}" --}}
                                            <a data-bs-target="#editModel" data-bs-toggle="modal" class="btn btn-info">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                            <div class="modal fade" id="editModel" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
                                                <div class=" modal-dialog-centered modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="editLabel">Edit </h5>
                                                            <button type="button" class="btn-close btn-danger px-2" data-bs-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                            </div>

                                            <form method="POST" action="{{ route('categories.update', $category->id) }}" >
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
                                                    <input type="text" name="title" value="{{$category->title}}" id="title" placeholder="Enter Title ">
                                                </div>

                                                <div class="form-group">
                                                    <label for="slug">Slug</label>
                                                    <input type="text" name="slug"  value="{{$category->slug}}" placeholder="Enter slug ">
                                                </div>

                                                <div class="form-check">
                                                    <input type="checkbox" name="active" class="form-check-input" id="exampleCheck1"
                                                        @if ($category->active)
                                                            checked
                                                        @endif>
                                                    <label class="form-check-label" for="exampleCheck1">Active</label>
                                                </div>
                                                </div>
                                                <!-- /.card-body -->

                                                <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Edit</button>
                                                </div>
                                            </form>
                                                </div>
                                            </div>
                                        </div>
                                            {{-- <form method="POST" action="{{route('categories.destroy', $category->id)}}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form> --}}
                                            <a href="#" onclick="confirmDestroy({{$category->id}}, this)" class="btn btn-danger">
                                                <i class="fas fa-trash"></i>
                                            </a>

                                        </div>
                                    </td>

                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>

</section>



 @endsection
 @section('scripts')

 <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
function confirmDestroy(id, ref) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
                destroy(id, ref);
                showMessage();
            }
    })
}

function destroy(id, ref) {
    axios.delete('/cms/admin/categories/' + id)
    .then(function (response) {
        // handle success
        console.log(response);
        ref.closest('tr').remove();
        showMessage(response.data);
    })
    .catch(function (error) {
        // handle error
        console.log(error);
        showMessage(error.response.data);
    })
    .then(function () {
        // always executed
    });

}

function showMessage(data) {
       Swal.fire({
        icon: data.icon,
        title: data.title,
        showConfirmButton: false,
        timer: 1500
})
}
 </script>
 @endsection




