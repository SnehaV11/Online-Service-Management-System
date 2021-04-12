@extends('layouts.master-mini')

@section('content')
<div class="content-wrapper flex align-items-center " style="background-colour:blue; background-size: cover;">
  <div class="row w-100">
    <div class="col-lg-4 margin">
      
      <div class="formContent auto-form-wrapper">
      <x-auth-validation-errors class="mb-4 error" :errors="$errors" />
        <form method="POST" action="{{ route('register') }}">
          @csrf
          <h2 class="text-center">Register</h2>
          <div class="form-group">
            <div class="input-group">
              <input type="text" class="form-control" id="name" name="name" placeholder="FullName">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <input type="password" id="password" name="password" class="form-control" placeholder="Password">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Confirm Password">
            </div>
          </div>
          <div class="form-group">
            <button class="btn btn-primary submit-btn btn-block">Register</button>
          </div>
          <div class="text-center my-3">
            <span class="text-small">Already have and account ?</span>
            <a href="{{ route('login') }}" class="text-small">Login</a>
          </div>
        </form>
      </div>
      <p class="footer-text text-center">Online Service Management</p>
    </div>
  </div>
</div>
@endsection