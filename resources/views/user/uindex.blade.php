@extends('admin.layout.master')
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
            <div class="table-responsive">
                <table id="zero_config" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>User Name</th>
                        <th>User Email</th>
                        <th>Account</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                      <tr>
                        <td><strong>{{ $user->id }}</strong></td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @if ($user->verify_acc != 1)
                                <div class="row">
                                    <div class="col-md-2">
                                        <a href="{{ route('verify', $user->id) }}"
                                            class="btn btn-warning"><b>verify</b></a>
                                    </div>
                                </div>
                            @else
                                {{ 'verified' }}
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning"><b>Edit</b></a>
                           
                            <form action="{{ route('user.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure Delete User?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><b>Delete</b></button>
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




    <!--<div class="mb-2 d-flex justify-content-between align-items-center">
         <div class="px-2">
         <a href="{{ url('user') }}" class="btn btn-primary">Add+</a>
         </div>
            </div> -->