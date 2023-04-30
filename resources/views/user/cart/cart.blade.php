@extends('user.layout.master')
<link rel="stylesheet" type="text/css" href="{{ asset('public/admin/assets/extra-libs/multicheck/multicheck.css') }}" />

<link rel="stylesheet" href="{{ asset('public/admin/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" />
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
                <h4 class="card-title mb-3"><b>cart</b></h4>
                <div class="text-end">
                    <a href="{{ route('admin.product.create') }}" class="btn btn-dark"><b> {{ __('Add+') }}</b></a>
                </div>
            </div>
            <div class="table-responsive">
                <table id="zero_config" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th><b>ID</b></th>
                            <th><b>user id</b></th>
                            <th><b>product id</b></th>
                            <th><b>qty</b></th>
                            <th><b>Price</b></th>

                            <th><b>Action</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($carts as $cart)
                            <tr>
                                <td><strong>{{ $cart->id }}</strong></td>
                                <td>{{ $cart->user_id }}</td>
                                <td>{{ $cart->product_id }}</td>
                                <td>{{ $cart->qty }}</td>
                                <td>{{ $cart->price }}</td>

                                <td>
                                    <a href="#"
                                        class="btn btn-info"><b>{{ __('Edit') }}</b></a>

                                    <form action="#" method="POST"
                                        onsubmit="return confirm('Are you sure Delete User?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger text-white"><b>{{ __('Delete') }}</b></button>
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
@push('scripts')
    <!--(for all pagination,asc-desc,search,shorting)-->
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
