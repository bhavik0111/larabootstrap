@extends('admin.layout.master')
<link rel="stylesheet" type="text/css"
href="{{ asset('public/admin/assets/extra-libs/multicheck/multicheck.css')}}"/>

<link rel="stylesheet"
href="{{ asset('public/admin/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}"
/>
@section('content')

<!-- (FOR MSG) -->
    @if (session()->has('msg'))
        <div class="alert alert-success">
            {{ session()->get('msg') }}
        </div>
    @endif
    @if (session()->has('error_msg'))
        <div class="alert alert-danger">
            {{ session()->get('error_msg') }}
        </div>
    @endif
<!-- (END MSG) -->
<div class="card mb-3">
    <div class="card-body">
        <div class="card-header row">
            <h4 class="card-title mb-3"><b>All Categories</b></h4>
            <div class="text-end">
              <a href="{{ route('admin.category.create') }}" class="btn btn-dark"><b>Add+</b></a>
            </div>
        </div>
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th><b>ID</b></th>
                    <th><b>Name</b></th>
                    <th><b>Image</b></th>
                    <!-- <th><b>Price</b></th> -->
                    <th><b>Description</b></th>
                    <th><b>Status</b></th>
                    <th><b>Action</b></th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($category as $category)
                  <tr>
                    <td><strong>{{ $category->id }}</strong></td>

                    <td>{{ $category->name }}</td>
                    <td>
                        <img src="{{ asset('public/'.$category->image) }}" height="100" width="100">
                    </td>
                    <!-- <td>{{ $category->price }}</td> -->
                    <td>{{ $category->description }}</td>
                    <td>
                        @if ($category->status==1){{ 'Active' }} @endif
                        @if ($category->status==0){{ 'Deactive' }} @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.category.edit', $category->id) }}" class="btn btn-info"><b>Edit</b></a>

                        <form action="{{ route('admin.category.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Are you sure Delete User?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger text-white"><b>Delete</b></button>
                        </form>
                    </td>
                  </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@push('scripts')  <!-- for all pagination,asc-desc,search,shorting  -->
<script src="{{ asset('public/admin/assets/extra-libs/multicheck/datatable-checkbox-init.js') }}"></script>
<script src="{{ asset('public/admin/assets/extra-libs/multicheck/jquery.multicheck.js') }}"></script>
<script src="{{ asset('public/admin/assets/extra-libs/DataTables/datatables.min.js') }}"></script>
<script>
  /****************************************
   *       Basic Table                   *
   ****************************************/
  $("#zero_config").DataTable();
</script>
@endpush
