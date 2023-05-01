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

            </div>
            <div class="table-responsive">
                <table id="zero_config" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th><b>ID</b></th>
                            <th><b>product id</b></th>
                            <th><b>qty</b></th>
                            <th><b>Price</b></th>

                            <th><b>Action</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $total = 0; @endphp
                        @foreach ($carts as $cart)
                            @php $total = $total+$cart->product->price; @endphp
                            <tr>
                                <td><strong>{{ $cart->id }}</strong></td>
                                <td>{{ $cart->product->name }}</td>
                                <td><input type="number" value="{{ $cart->qty }}" class="form-control" onclick="calculate()"></td>
                                <td>{{ $cart->product->price }}</td>

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
                        <tr>
                            <td>Total</td>
                            <td colspan="4" class="text-right">{{ $total }}</td>
                        </tr>
                    </tbody>
                </table>
                <div class="text-end">
                    <a href="{{ route('user.order.create') }}" class="btn btn-dark"><b> {{ __('Process to Checkout') }}</b></a>
                </div>
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
