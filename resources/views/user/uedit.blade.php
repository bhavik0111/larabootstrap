@extends('admin.layout.master')
@section('content')
<main class="form-signin">

<div class="card">
  <form action="{{ route('user.update') }}" method="POST">
    @csrf
    <div class="card-body">
      <h4 class="card-title">Update User</h4>

        <div class="card-body">
            <div class="form-group column" style="float:right">
              <a href="{{ route('user.index') }}" class="btn btn-dark"><b>Back</b></a>
            </div>
        </div>

        <div class="form-group row">
            <label
              for="name"
              class="col-sm-3 text-end control-label col-form-label"
              ><b>First Name</b></label>
            <div class="col-sm-9">
              <input type="text" class="form-control @error('name') is-invalid @enderror"
                     value="{{ old('name',$user->name) }}" id="name" name="name" placeholder="your name">
              
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
              ><b>Last Name</b></label>
            <div class="col-sm-9">
              <input type="text" class="form-control @error('last_name') is-invalid @enderror"
                     value="{{ old('last_name',$user->last_name) }}" id="last_name" name="last_name" placeholder="your last_name">
              
            </div>
            @error('last_name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group row">
            <label for="email" class="col-sm-3 text-end control-label col-form-label"
              ><b>Email</b></label>
            <div class="col-sm-9">
              <input type="email" class="form-control @error('email')is-invalid @enderror"
                      value="{{ old('email',$user->email) }}" id="email" name="email" placeholder="name@example.com">

              <input type="hidden" name="id" value="{{ $user->id }}">              
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
              ><b>Password</b></label
            >
            <div class="col-sm-9">
               <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password">
            </div>

            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group row">
            <label
              for="confirm-password"
              class="col-sm-3 text-end control-label col-form-label"
              ><b>Confirm Password</b></label
            >
            <div class="col-sm-9">
              <input type="password" class="form-control @error('confirm-password') is-invalid @enderror"
                            name="confirm-password" id="confirm-password" placeholder="confirm-password">
            </div>
            @error('confirm-password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group row">
            <label class="col-sm-3 text-end control-label col-form-label"><b>Account</b></label>
            <div class="col-md-9">
                <div class="form-check">

                  <input type="radio" class="form-check-input"
                    id="customControlValidation1"
                    name="verify_acc" value="1" @if ($user->verify_acc == 1){{ 'checked=checked' }} @endif
                    required/>
                  <label
                    class="form-check-label mb-0"
                    for="customControlValidation1"
                    >Verify</label>

                </div>
                <div class="form-check">

                  <input type="radio" class="form-check-input"
                    id="customControlValidation2"
                    name="verify_acc" value="0"
                    @if ($user->verify_acc == 0){{ 'checked=checked'}} @endif
                    required/>
                  <label
                    class="form-check-label mb-0"
                    for="customControlValidation2"
                    >Unverify</label>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 text-end control-label col-form-label"><b>Is Admin</b></label>
            <div class="col-md-9">
                <div class="form-check">

                  <input type="radio" class="form-check-input"
                    id="customControlValidation1"
                    name="is_admin" value="1" @if ($user->is_admin == 1){{ 'checked=checked' }} @endif
                    required/>
                  <label
                    class="form-check-label mb-0"
                    for="customControlValidation1"
                    >Yes</label>

                </div>
                <div class="form-check">

                  <input type="radio" class="form-check-input"
                    id="customControlValidation2"
                    name="is_admin" value="2" @if ($user->is_admin == 2){{ 'checked=checked' }} @endif
                    required/>
                  <label
                    class="form-check-label mb-0"
                    for="customControlValidation2"
                    >No</label>
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