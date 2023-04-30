@extends('admin.layout.master')
@section('content')
<main class="form-signin">

<div class="card">
  <form action="{{ route('admin.category.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
      <h4 class="card-title">Update Category</h4>

        <div class="card-body">
            <div class="form-group column" style="float:right">
              <a href="{{ route('admin.category.index') }}" class="btn btn-dark"><b>Back</b></a>
            </div>
        </div>

        <div class="form-group row">
            <label
              for="name"
              class="col-sm-3 text-end control-label col-form-label"
              ><b>{{ __('Name') }}</b></label>
            <div class="col-sm-9">
              <input type="text" class="form-control @error('name') is-invalid @enderror"
                     value="{{ old('name',$category->name) }}" id="name" name="name" placeholder=" name">

              <input type="hidden" name="id" value="{{ $category->id }}">

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
              <input id="cat_image" type="file" class="form-control" name="cat_image"  autocomplete="cat_image" autofocus>

            </div>
        </div>

       <!--  <div class="form-group row">
            <label
              for="price"
              class="col-sm-3 text-end control-label col-form-label"
              ><b>{{ __('price') }}</b></label>
            <div class="col-sm-9">
              <input type="number" class="form-control @error('price') is-invalid @enderror"
                     value="{{ old('price',$category->price) }}" id="price" name="price" placeholder="your price">

            </div>
            @error('price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div> -->

        <div class="form-group row">
            <label for="description" class="col-sm-3 text-end control-label col-form-label"
              ><b>{{ __('Description') }}</b></label>
            <div class="col-sm-9">
              <input type="text" class="form-control @error('description')is-invalid @enderror"
                      value="{{ old('description',$category->description) }}" id="description" name="description" placeholder="name@example.com">


            </div>
             @error('description')
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
                    name="status" value="1" @if ($category->status == 1){{ 'checked=checked' }} @endif
                    required/>
                  <label
                    class="form-check-label mb-0"
                    for="customControlValidation1"
                    >{{ __('Active') }}</label>

                </div>
                <div class="form-check">

                  <input type="radio" class="form-check-input"
                    id="customControlValidation2"
                    name="status" value="0" @if ($category->status == 0){{ 'checked=checked'}} @endif
                    required/>
                  <label
                    class="form-check-label mb-0"
                    for="customControlValidation2"
                    >{{ __('Deactive') }}</label>
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
