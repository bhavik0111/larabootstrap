@extends('admin.layout.master')

@section('content')
<main class="form-signin">

<div class="card">
    <form method="POST" action="{{ route('store') }}">
    @csrf
    <div class="card-body">
       <h4 class="card-title">{{ __('Add Category') }}</h4>

        <!-- <div class="card-body">
            <div class="form-group column" style="float:right">
              <a href="{{ route('user.index') }}" class="btn btn-dark"><b>Back</b></a>
            </div>
        </div> -->
        
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
              for="Image"
              class="col-sm-3 text-end control-label col-form-label"
              ><b>{{ __('Image') }}</b></label>

            <div class="col-sm-9">
              <input id="Image" type="file" class="form-control @error('Image') is-invalid @enderror" name="Image" value="{{ old('Image') }}" required autocomplete="Image" autofocus>

            </div>
            @error('Image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group row">
            <label
              for="Price"
              class="col-sm-3 text-end control-label col-form-label"
              ><b>{{ __('Price') }}</b></label>

            <div class="col-sm-9">
              <input id="Price" type="number" class="form-control @error('Price') is-invalid @enderror" name="Price" value="{{ old('Price') }}" required autocomplete="Price">

            </div>
            @error('Price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

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
            <label
              for="status"
              class="col-sm-3 text-end control-label col-form-label"
              ><b>{{ __('Status') }}</b></label>

            <div class="col-sm-9">
              <input id="status" type="text" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ old('status') }}" required autocomplete="status">

            </div>
            @error('status')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="border-top">
            <div class="card-body">
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