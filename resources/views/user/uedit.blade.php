@extends('admin.layout.master')
@section('content')
<main class="form-signin">
    <div class="container p-50">
        <div class="card col-lg-5 col-sm-10 position-absolute top-50 start-50 translate-middle p-lg-5">
            <form action="{{ route('user.update') }}" method="POST">
                @csrf
                 <!-- <img class="mb-4" src="https://laravel.com/img/logomark.min.svg" alt="" width="72" height="57"> -->
                 <div class="mb-2 d-flex justify-content-between align-items-left">
                    <div class="px-2">
                        <a href="{{ route('user.index') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>

                <h1 class="h3 mb-3 fw-normal">Update User </h1>

                <div class="form-floating">
                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                        value="{{ old('email',$user->email) }}" id="email" name="email" placeholder="name@example.com">

                        <input type="hidden" name="id" value="{{ $user->id }}">

                    <label for="email">Email address</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                        value="{{ old('name',$user->name) }}" id="name" name="name" placeholder="your name">
                    <label for="name">Your Name</label>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" id="password" placeholder="Password">
                    <label for="password">Password</label>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control @error('confirm-password') is-invalid @enderror"
                        name="confirm-password" id="confirm-password" placeholder="confirm-password">
                    <label for="confirm-password">Confirm Password</label>
                    @error('confirm-password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit" name="uedit">Edit</button>

            </form>
        </div>
    </div>
</main>
@endsection

