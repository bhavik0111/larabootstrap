@extends('admin.layout.master')

@section('content')
<main class="form-signin">

<div class="card">
    <form method="POST" action="{{ route('store') }}">
    @csrf
    <div class="card-body">
       <h4 class="card-title">{{ __('Add User') }}</h4>


        <div class="card-body">
            <div class="form-group column" style="float:right">
              <a href="{{ route('user.index') }}" class="btn btn-dark"><b>Back</b></a>
            </div>
        </div>
        

        <div class="form-group row">
            <label
              for="name"
              class="col-sm-3 text-end control-label col-form-label"
              ><b>{{ __('First Name') }}</b></label>
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
              for="last_name"
              class="col-sm-3 text-end control-label col-form-label"
              ><b>{{ __('Last Name') }}</b></label>

            <div class="col-sm-9">
              <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

            </div>
            @error('last_name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group row">
            <label
              for="email"
              class="col-sm-3 text-end control-label col-form-label"
              ><b>{{ __('Email Address') }}</b></label>

            <div class="col-sm-9">
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            </div>
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group row">
            <label
              for="password"
              class="col-sm-3 text-end control-label col-form-label"
              ><b>{{ __('Password') }}</b></label>

            <div class="col-sm-9">
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password">

            </div>
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group row">
            <label
              for="password-confirm"
              class="col-sm-3 text-end control-label col-form-label"
              ><b>{{ __('Confirm Password') }}</b></label>

            <div class="col-sm-9">
              <input id="password-confirm" type="password-confirm" class="form-control @error('password-confirm') is-invalid @enderror" name="password_confirmation" value="{{ old('password-confirm') }}" required autocomplete="password-confirm">

            </div>
            @error('password-confirm')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group row">
            <label class="col-sm-3 text-end control-label col-form-label"><b>Is Admin</b></label>
            <div class="col-md-9">
                <div class="form-check">

                  <input type="radio" class="form-check-input"
                    id="customControlValidation1"
                    name="is_admin" value="1" 
                    required/>
                  <label
                    class="form-check-label mb-0"
                    for="customControlValidation1"
                    >Yes</label>

                </div>
                <div class="form-check">

                  <input type="radio" class="form-check-input"
                    id="customControlValidation2"
                    name="is_admin" value="2"
                    required/>
                  <label
                    class="form-check-label mb-0"
                    for="customControlValidation2"
                    >No</label>
                </div>
            </div>
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