@extends('cms.layouts.parant')
@section('title', 'Tags')
@section('page-title', 'Index')
@section('small-title', 'Tags Index')
@section('style')
@endsection @section('content')
 <section class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tags Table</h3>
                        {{-- <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right"
                                    placeholder="Search">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover table-bordered table-striped text-nowrap" id="table_id">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>name</th>
                                    <th>Slug</th>
                                    <th>Create AT</th>
                                    <th>Update AT</th>
                                    <th>Settings</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tags as $tag)
                                <tr>
                                    {{-- <span class="tag tag-success">Approved</span> --}}
                                    <td>{{ $tag->id }}</td>
                                    <td>{{ $tag->name }}</td>
                                    <td>{{ $tag->slug }}</td>
                                    <td>{{ $tag->created_at }}</td>
                                    <td>{{ $tag->updated_at }}</td>
                                    <td>
                                        <div class="btn-group">

                                            <a href="{{route('tags.edit', $tag->id)}}" class="btn btn-info">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            {{-- <form method="POST" action="{{route('categories.destroy', $category->id)}}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form> --}}
                                            <a href="#" onclick="confirmDestroy({{$tag->id}}, this)" class="btn btn-danger">
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
    axios.delete('/cms/admin/tags/' + id)
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
