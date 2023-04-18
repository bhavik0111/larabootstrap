@extends('admin.layout.master')
@section('content')
    <!-- <body>
        -->
<div class="container mt-5 px-2">
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
        <h5 class="card-header">Users</h5>
        <div class="table-responsive text-nowrap">
            <table class="table table-striped">
                <thead>
                    <tr class="bg-light">
                        <th>ID</th>
                        <th>User Name</th>
                        <th>User Email</th>
                        <th>Account</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($users as $user)
                    <tr>
                        <td><strong>{{ $user->id }}</strong></td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td><span class="badge bg-label-success me-1">
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
                            </span>
                        </td>
                        <td>
                        <div class="row">
                            <div class="col-md-2">
                                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning"><b>Edit</b></a>
                            </div>
                            <div class="col-md-2">
                                <form action="{{ route('user.destroy', $user->id) }}" method="POST"
                                    onsubmit="return confirm('Are you sure Delete User?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><b>Delete</b></button>
                                </form>
                            </div>
                        </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!--<div class="mb-2 d-flex justify-content-between align-items-center">
         <div class="px-2">
         <a href="{{ url('user') }}" class="btn btn-primary">Add+</a>
         </div>
            </div> -->
    {{-- <div class="">
        <table class="table table-responsive table-striped">
            <thead>
                <tr>
                    <th colspan="5">
                        <h3>All users</h3>
                    </th>
                </tr>
                <tr class="bg-light">
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
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>

                        <td>
                            <div class="row">
                                <div class="col-md-2">
                                    <a href="{{ route('user.edit', $user->id) }}"
                                        class="btn btn-warning"><b>Edit</b></a>
                                </div>
                                <div class="col-md-2">

                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div> --}}
</div>
@endsection
