@extends('admin.layout.master')
<link
rel="stylesheet"
type="text/css"
href="{{ asset('public/admin/assets/extra-libs/multicheck/multicheck.css')}}"
/>

<link
href="{{ asset('public/admin/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}"
rel="stylesheet"
/>
@section('content')
    <!-- <body>
        -->
<!-- <div class="container mt-5 px-2"> -->
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

    <div class="card">
        <div class="card-body">
        <h5 class="card-title">Users</h5>

            <div class="card-body">
                <div class="form-group column" style="float:right">
                  <a href="{{ route('user.adduser') }}" class="btn btn-dark"><b>Add+</b></a>
                </div>
            </div>
            <div class="table-responsive">
                <table id="zero_config" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th><b>ID</b></th>
                        <th><b>First Name</b></th>
                        <th><b>Last Name</b></th>
                        <th><b>User Email</b></th>
                        <th><b>Account</b></th>
                        <!-- <th>Is Admin</th> -->
                        <th><b>Action</b></th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                      <tr>
                        <td><strong>{{ $user->id }}</strong></td>
                        
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->last_name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @if ($user->verify_acc != 1)
                                <div class="row">
                                    <div class="col-md-2">
                                        <a href="{{ route('verify', $user->id) }}"
                                            class="btn btn-success text-white"><b>verify</b></a>
                                    </div>
                                </div>
                            @else
                                {{ 'verified' }}
                            @endif
                        </td>
                        <!-- <td>
                            @if($user->verify_acc == 1) {{ 'Yes' }} @endif
                            @if($user->verify_acc == 2) {{ 'No' }} @endif
                        </td> -->
                        <td>
                            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-info"><b>Edit</b></a>
                           
                            <form action="{{ route('user.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure Delete User?');">
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
<!-- </div> -->
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