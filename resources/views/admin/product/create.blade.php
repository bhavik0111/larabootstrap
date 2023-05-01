@extends('admin.layout.master')

@section('content')
<main class="form-signin">
    <div class="card">
        <form method="POST" action="{{ route('user.order.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <h4 class="card-title">{{ __('Create Order') }}</h4>

                <div class="form-group column" style="float:right">
                    <a href="{{ route('admin.product.index') }}" class="btn btn-dark"><b>Back</b></a>
                </div>
                <div class="form-group row">
                    <label for="name"
                        class="col-sm-3 text-end control-label col-form-label"><b>{{ __('Category') }}</b></label>
                    <div class="col-sm-9">
                        <select name="category_id" class="form-control">
                            <option value="" selected>Select Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('category_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group row">
                    <label for="name"
                        class="col-sm-3 text-end control-label col-form-label"><b>{{ __('Name') }}</b></label>
                    <div class="col-sm-9">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    </div>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="cat_image"
                        class="col-sm-3 text-end control-label col-form-label"><b>{{ __('Image') }}</b></label>

                    <div class="col-sm-9">
                        <input id="prod_image" type="file"
                            class="form-control @error('prod_image') is-invalid @enderror" name="prod_image">
                        @error('prod_image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="price"
                        class="col-sm-3 text-end control-label col-form-label"><b>{{ __('Price') }}</b></label>

                    <div class="col-sm-9">
                        <input id="price" type="number" class="form-control @error('price') is-invalid @enderror"
                            name="price" value="{{ old('price') }}" required autocomplete="price">

                    </div>
                    @error('price')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="colour"
                        class="col-sm-3 text-end control-label col-form-label"><b>{{ __('Colour') }}</b></label>

                    <div class="col-sm-9">
                        <input type="color" id="colour" class="form-control @error('colour') is-invalid @enderror"
                            name="colour" value="{{ old('colour') }}" required autocomplete="colour">

                    </div>
                    @error('colour')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="data"
                        class="col-sm-3 text-end control-label col-form-label"><b>{{ __('Data') }}</b></label>

                    <div class="col-sm-9">
                        <input id="data" type="text" class="form-control @error('data') is-invalid @enderror"
                            name="data" value="{{ old('data') }}" required autocomplete="data">

                    </div>
                    @error('data')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="data_detail"
                        class="col-sm-3 text-end control-label col-form-label"><b>{{ __('Data detail') }}</b></label>

                    <div class="col-sm-9">
                        <textarea id="data_detail" class="form-control @error('data_detail') is-invalid @enderror summernote"
                            name="data_detail" value="{{ old('data_detail') }}" required autocomplete="data_detail"></textarea>

                    </div>
                    @error('data_detail')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="calls"
                        class="col-sm-3 text-end control-label col-form-label"><b>{{ __('Calls') }}</b></label>

                    <div class="col-sm-9">
                        <input id="calls" type="text" class="form-control @error('calls') is-invalid @enderror"
                            name="calls" value="{{ old('calls') }}" required autocomplete="calls">

                    </div>
                    @error('calls')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group row">
                    <label for="calls_detail"
                        class="col-sm-3 text-end control-label col-form-label"><b>{{ __('Calls detail') }}</b></label>

                    <div class="col-sm-9">
                        <textarea id="calls_detail"  class="form-control @error('calls_detail') is-invalid @enderror summernote"
                            name="calls_detail" value="{{ old('calls_detail') }}" required autocomplete="calls_detail"></textarea>

                    </div>
                    @error('calls_detail')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="sms"
                        class="col-sm-3 text-end control-label col-form-label"><b>{{ __('SMS') }}</b></label>

                    <div class="col-sm-9">
                        <input id="sms" type="text" class="form-control @error('sms') is-invalid @enderror"
                            name="sms" value="{{ old('sms') }}" required autocomplete="sms">

                    </div>
                    @error('sms')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group row">
                    <label for="sms_detail"
                        class="col-sm-3 text-end control-label col-form-label"><b>{{ __('SMS detail') }}</b></label>

                    <div class="col-sm-9">
                        <textarea id="sms_detail" class="form-control @error('sms_detail') is-invalid @enderror summernote"
                            name="sms_detail" value="{{ old('sms_detail') }}" required autocomplete="sms_detail"></textarea>

                    </div>
                    @error('sms_detail')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="credit_validity"
                        class="col-sm-3 text-end control-label col-form-label"><b>{{ __('Credit validity') }}</b></label>

                    <div class="col-sm-9">
                        <input id="credit_validity" type="text"
                            class="form-control @error('credit_validity') is-invalid @enderror" name="credit_validity"
                            value="{{ old('credit_validity') }}" required autocomplete="credit_validity">

                    </div>
                    @error('credit_validity')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group row">
                    <label for="credit_validity_detail"
                        class="col-sm-3 text-end control-label col-form-label"><b>{{ __('Credit validity detail') }}</b></label>

                    <div class="col-sm-9">
                        <textarea id="credit_validity_detail" class="form-control @error('credit_validity_detail') is-invalid @enderror summernote"
                            name="credit_validity_detail" value="{{ old('credit_validity_detail') }}" required autocomplete="credit_validity_detail"></textarea>

                    </div>
                    @error('credit_validity_detail')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="description"
                        class="col-sm-3 text-end control-label col-form-label"><b>{{ __('Description') }}</b></label>

                    <div class="col-sm-9">
                        <textarea id="description"
                            class="form-control @error('description') is-invalid @enderror summernote" name="description"
                            value="" required autocomplete="description"></textarea>

                    </div>
                    @error('Description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="description"
                        class="col-sm-3 text-end control-label col-form-label"><b>{{ __('Additional Features') }}</b></label>

                    <div class="col-sm-9">
                        <button type="button" class="btn btn-primary" onclick="addrow()">
                            {{ __('AddNewFeature') }}
                        </button>
                    </div>
                </div>

                <div class="features">
                    <!-- (click AddNew all title and description field are placed heare....) -->
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 text-end control-label col-form-label"><b>{{ __('Status') }}</b></label>
                    <div class="col-md-9">
                        <div class="form-check">

                            <input type="radio" class="form-check-input" id="customControlValidation1" name="status"value="1" required />

                            <label class="form-check-label mb-0"
                                for="customControlValidation1">{{ __('Active') }}</label>

                        </div>
                        <div class="form-check">

                            <input type="radio" class="form-check-input" id="customControlValidation2" name="status"
                                value="0" required />
                            <label class="form-check-label mb-0"
                                for="customControlValidation2">{{ __('Deactive') }}</label>
                        </div>
                    </div>
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

