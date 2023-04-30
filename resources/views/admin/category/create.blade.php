@extends('admin.layout.master')

@section('content')
<main class="form-signin">

<div class="card">
    <form method="POST" action="{{ route('admin.category.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
       <h4 class="card-title">{{ __('Add Category') }}</h4>

            <div class="form-group column" style="float:right">
              <a href="{{ route('admin.category.index') }}" class="btn btn-dark"><b>Back</b></a>
            </div>

        <div class="form-group row">
            <label
              for="name"
              class="col-sm-3 text-end control-label col-form-label"
              ><b>{{ __('Name') }}</b></label>
            <div class="col-sm-9">
             <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            </div>
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group row">
            <label
              for="cat_image"
              class="col-sm-3 text-end control-label col-form-label"
              ><b>{{ __('Image') }}</b></label>

            <div class="col-sm-9">
              <input id="cat_image" type="file" class="form-control @error('cat_image') is-invalid @enderror" name="cat_image"  autocomplete="cat_image" autofocus>
                @error('cat_image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <!-- <div class="form-group row">
            <label
              for="price"
              class="col-sm-3 text-end control-label col-form-label"
              ><b>{{ __('Price') }}</b></label>

            <div class="col-sm-9">
              <input id="price" type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price">

            </div>
            @error('price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div> -->

        <div class="form-group row">
            <label
              for="description"
              class="col-sm-3 text-end control-label col-form-label"
              ><b>{{ __('Description') }}</b></label>

            <div class="col-sm-9">
              <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description">

            </div>
            @error('Description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group row">
            <label class="col-sm-3 text-end control-label col-form-label"><b>Status</b></label>
            <div class="col-md-9">
                <div class="form-check">

                  <input type="radio" class="form-check-input"
                    id="customControlValidation1"
                    name="status" value="1"
                    required/>
                  <label
                    class="form-check-label mb-0"
                    for="customControlValidation1"
                    >{{ __('Active') }}</label>

                </div>
                <div class="form-check">

                  <input type="radio" class="form-check-input"
                    id="customControlValidation2"
                    name="status" value="0"
                    required/>
                  <label
                    class="form-check-label mb-0"
                    for="customControlValidation2"
                    >{{ __('Deactive') }}</label>
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
           <!--  </div>
        </div>
    </div>
</div> -->
</main>
@endsection
