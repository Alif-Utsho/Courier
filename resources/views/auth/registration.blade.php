@extends('layouts.base')
@section('title')
Registration
@endsection


@section('content')

<!-- class="vh-100" -->
<section  style="background-color: #3ec73e;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-4 p-sm-5  text-center">

            <h2 class="btn btn-dark col-12 btn-lg fs-2 fw-bold">
                <i class="fab fa-asymmetrik"></i> 
                Easy Alpha
            </h2>

            <h4 class="mt-5 mb-3">Create an account</h4>

            <form action="{{route('registration.post')}}" method="POST">
                {{csrf_field()}}

                <div class="form-outline mb-4">
                    <input type="text" id="name" name="name" class="form-control form-control-lg" placeholder="Name" value="{{old('name')}}" />
                    @error('name')
                        <p class="text-danger"><i class="fas fa-exclamation-triangle"></i> {{ $message }} </p>
                    @enderror
                </div>

                <div class="form-outline mb-4">
                    <input type="text" id="phone" name="phone" class="form-control form-control-lg" placeholder="Phone" value="{{old('phone')}}" />
                    @error('phone')
                        <p class="text-danger"><i class="fas fa-exclamation-triangle"></i> {{ $message }} </p>
                    @enderror
                </div>

                <div class="form-outline mb-4">
                    <input type="text" id="email" name="email" class="form-control form-control-lg" placeholder="E-mail" value="{{old('email')}}" />
                    @error('email')
                        <p class="text-danger"><i class="fas fa-exclamation-triangle"></i> {{ $message }} </p>
                    @enderror
                </div>
    
                <div class="form-outline mb-4">
                    <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Password" value="{{old('password')}}" />
                    @error('password')
                        <p class="text-danger"><i class="fas fa-exclamation-triangle"></i> {{ $message }} </p>
                    @enderror
                </div>

    
    
                <button class="btn btn-success btn-block col-12 btn-lg" type="submit">Submit</button>

            </form>

            <hr class="my-4">

            <a href="{{route('login.get')}}" class="btn btn-primary col-12">Log in here</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection