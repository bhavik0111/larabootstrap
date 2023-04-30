@extends('admin.layout.master')
@section('content')
    <main class="form-signin">

        <div class="card">
            <form action="{{ route('admin.product.update', ['id' => $product->id]) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <h4 class="card-title">{{ __('Update Product') }}</h4>

                    <div class="card-body">
                        <div class="form-group column" style="float:right">
                            <a href="{{ route('admin.product.index') }}" class="btn btn-dark"><b>{{ __('Back') }}</b></a>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name"
                            class="col-sm-3 text-end control-label col-form-label"><b>{{ __('Category') }}</b></label>
                        <div class="col-sm-9">
                            <select name="category_id" class="form-control  @error('category_id') is-invalid @enderror ">
                                <option value="" selected>Select Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ $category->id == $product->category_id ? 'selected' : '' }}>{{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name"
                            class="col-sm-3 text-end control-label col-form-label"><b>{{ __('Name') }}</b></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                value="{{ old('name', $product->name) }}" id="name" name="name" placeholder=" name">

                            <input type="hidden" name="id" value="{{ $product->id }}">

                        </div>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="prod_image"
                            class="col-sm-3 text-end control-label col-form-label"><b>{{ __('Image') }}</b></label>

                        <div class="col-sm-9">
                            <input id="prod_image" type="file" class="form-control" name="prod_image">

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="price"
                            class="col-sm-3 text-end control-label col-form-label"><b>{{ __('price') }}</b></label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control @error('price') is-invalid @enderror"
                                value="{{ old('price', $product->price) }}" id="price" name="price"
                                placeholder="your price">

                        </div>
                        @error('price')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="colour"
                            class="col-sm-3 text-end control-label col-form-label"><b>{{ __('colour') }}</b></label>
                        <div class="col-sm-9">
                            <input type="color" class="form-control @error('colour') is-invalid @enderror"
                                value="{{ old('colour', $product->colour) }}" id="colour" name="colour"
                                placeholder="your colour">

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
                            <input type="text" class="form-control @error('data') is-invalid @enderror"
                                value="{{ old('data', $product->data) }}" id="data" name="data"
                                placeholder="your data">

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
                            <textarea class="form-control @error('data_detail') is-invalid @enderror summernote " value="" id="data_detail"
                                name="data_detail">{{ old('data_detail', $product->data_detail) }}</textarea>

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
                            <input type="text" class="form-control @error('calls') is-invalid @enderror"
                                value="{{ old('calls', $product->calls) }}" id="calls" name="calls">

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
                            <textarea class="form-control @error('calls_detail') is-invalid @enderror summernote" value="" id="calls_detail"
                                name="calls_detail">{{ old('calls_detail', $product->calls_detail) }}</textarea>

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
                            <input type="text" class="form-control @error('sms') is-invalid @enderror"
                                value="{{ old('sms', $product->sms) }}" id="sms" name="sms"
                                placeholder="your sms">

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
                            <textarea class="form-control @error('sms_detail') is-invalid @enderror summernote" value="" id="sms_detail"
                                name="sms_detail">{{ old('sms_detail', $product->sms_detail) }}</textarea>

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
                            <input type="text" class="form-control @error('credit_validity') is-invalid @enderror"
                                value="{{ old('credit_validity', $product->credit_validity) }}" id="credit_validity"
                                name="credit_validity">

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
                            <textarea class="form-control @error('credit_validity_detail') is-invalid @enderror summernote" value=""
                                id="credit_validity_detail" name="credit_validity_detail">{{ old('credit_validity_detail', $product->credit_validity_detail) }}</textarea>

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
                            <textarea class="form-control @error('description')is-invalid @enderror summernote" value="" id="description"
                                name="description" placeholder="name@example.com">{{ old('description', $product->description) }}</textarea>


                        </div>
                        @error('description')
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
                        <!-- (click AddNew all title and description field are placed hear....) -->
                    </div>

                    <!-- title and description -->
                    @foreach ($features as $feature)
                        <div class="prod_feature">
                            <div class="form-group row">
                                <label for="title" class="col-sm-3 text-end control-label col-form-label">
                                    {{ __('Title') }}
                                </label>

                                <div class="col-sm-8">
                                    <input type="text" name="title[]" class="form-control title" id="title"
                                        value="{{ old('title', $feature->title) }}" required>
                                </div>
                                <div class="col-sm-1">
                                    <button type="button" class="btn btn-danger deleteRow">Delete</button>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="add_description" class="col-sm-3 text-end control-label col-form-label">
                                    {{ __('Description') }}
                                </label>

                                <div class="col-sm-8">
                                    <textarea class="form-control summernote" name="add_description[]" id="add_description">{{ old('add_description', $feature->description) }}</textarea>
                                </div>
                            </div>
                        </div>
                    @endforeach



                    <div class="form-group row">
                        <label class="col-sm-3 text-end control-label col-form-label">
                            <b>{{ __('Status') }}</b>
                        </label>
                        <div class="col-md-9">
                            <div class="form-check">

                                <input type="radio" class="form-check-input" id="customControlValidation1"
                                    name="status" value="1"
                                    @if ($product->status == 1) {{ 'checked=checked' }} @endif required />
                                <label class="form-check-label mb-0"
                                    for="customControlValidation1">{{ __('Active') }}</label>

                            </div>
                            <div class="form-check">

                                <input type="radio" class="form-check-input" id="customControlValidation2"
                                    name="status" value="0"
                                    @if ($product->status == 0) {{ 'checked=checked' }} @endif required />
                                <label class="form-check-label mb-0"
                                    for="customControlValidation2">{{ __('Deactive') }}</label>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="border-top">
                    <div class="card-body">
                        <button type="submit" name="uedit" class="btn btn-primary">
                            Edit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </main>
@endsection
@push('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('.summernote').summernote({
                tabsize: 2,
                height: 120
            });
        });

        function addrow() {
            var html =
                '<div class="prod_feature">' +
                '<div class="form-group row">' +
                '<label for="title"  class="col-sm-3 text-end control-label col-form-label">{{ __('Title') }}' +
                '</label>' +

                '<div class="col-sm-8">' +
                '<input type="text" name="title[]" class="form-control title"  id="title" required>' +
                '</div>' +
                '<div class="col-sm-1">' +
                '<button type="button" class="btn btn-danger deleteRow">Delete</button>' +
                '</div>' +
                '</div>' +

                '<div class="form-group row">' +
                '<label for="add_description" class="col-sm-3 text-end control-label col-form-label">{{ __('Description') }}' +
                '</label>' +

                '<div class="col-sm-8">' +
                '<textarea class="form-control summernote" name="add_description[]" id="add_description">{{ old('add_description') }}</textarea>' +
                '</div>' +
                '</div>' +
                '</div>';

            $('.features').append(html);
            $('.summernote').summernote();

        }



        $(document).on('click', '.deleteRow', function(e) {
            e.preventDefault();
            $(this).closest('.prod_feature').remove();
        })
    </script>
@endpush
