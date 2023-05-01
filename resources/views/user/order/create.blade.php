@extends('user.layout.master')

@section('content')
<main class="form-signin">
    <div class="card">
        <form method="POST" action="{{ route('admin.product.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <h4 class="card-title">{{ __('Order') }}</h4>

                <div class="form-group column" style="float:right">
                    <a href="{{ route('user.cart.index') }}" class="btn btn-dark"><b>Back</b></a>
                </div>

                <div class="form-group row">
                    <label for="first_name"
                        class="col-sm-3 text-end control-label col-form-label"><b>{{ __('First Name') }}</b></label>
                    <div class="col-sm-9">
                        <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror"
                            name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
                    </div>
                    @error('first_name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="last_name"
                        class="col-sm-3 text-end control-label col-form-label"><b>{{ __('Last Name') }}</b></label>
                    <div class="col-sm-9">
                        <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror"
                            name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>
                    </div>
                    @error('last_name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                <div class="form-group row">
                    <label for="phone"
                        class="col-sm-3 text-end control-label col-form-label"><b>{{ __('Phone') }}</b></label>

                    <div class="col-sm-9">
                        <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror"
                            name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                    </div>
                    @error('phone')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                <div class="form-group row">
                    <label for="email"
                        class="col-sm-3 text-end control-label col-form-label"><b>{{ __('Email') }}</b></label>

                    <div class="col-sm-9">
                        <input type="email" id="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email">

                    </div>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="shipping_address"
                        class="col-sm-3 text-end control-label col-form-label"><b>{{ __('Shipping Address') }}</b></label>

                    <div class="col-sm-9">
                        <input id="shipping_address" type="text" class="form-control @error('shipping_address') is-invalid @enderror"
                            name="shipping_address" value="{{ old('shipping_address') }}" required autocomplete="shipping_address">

                    </div>
                    @error('shipping_address')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="order_date"
                        class="col-sm-3 text-end control-label col-form-label"><b>{{ __('Order Date') }}</b></label>

                    <div class="col-sm-9">
                        <textarea id="order_date" class="form-control @error('order_date') is-invalid @enderror summernote"
                            name="order_date" value="{{ old('order_date') }}" required autocomplete="order_date"></textarea>

                    </div>
                    @error('order_date')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="order_status"
                        class="col-sm-3 text-end control-label col-form-label"><b>{{ __('Order Status') }}</b></label>

                    <div class="col-sm-9">
                        <input id="order_status" type="text" class="form-control @error('order_status') is-invalid @enderror"
                            name="order_status" value="{{ old('order_status') }}" required autocomplete="order_status">

                    </div>
                    @error('order_status')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="border-top">
                    <div class="card-body" style="float:center">
                        <button type="submit" class="btn btn-primary">
                            {{ __('submit') }}
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</main>
@endsection
@push('scripts')
<script>

     $(document).ready(function() {
          $('.summernote').summernote();
        });



function addrow()
    {
        var html =
        '<div class="prod_feature">'+
            '<div class="form-group row">' +
                '<label for="title"  class="col-sm-3 text-end control-label col-form-label">{{ __('Title') }}' +
                '</label>' +

                '<div class="col-sm-8">'+
                    '<input type="text" name="title[]" class="form-control title"  id="title" required>' +
                '</div>' +
                '<div class="col-sm-1">'+
                    '<button type="button" class="btn btn-danger deleteRow">Delete</button>'+
                '</div>' +
            '</div>' +

            '<div class="form-group row">'+
                '<label for="add_description" class="col-sm-3 text-end control-label col-form-label">{{ __('Description') }}'+
                '</label>' +

                '<div class="col-sm-8">' +
                    '<textarea class="form-control summernote" name="add_description[]" id="add_description">{{ old('add_description') }}</textarea>' +
                '</div>' +
            '</div>'+
        '</div>';

        $('.features').append(html);

        $('.summernote').summernote();
    }

    $(document).on('click','.deleteRow',function (e) {
        e.preventDefault();
        $(this).closest('.prod_feature').remove();
    })

</script>
@endpush

