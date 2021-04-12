@extends('layouts.master-mini')
@section('content')
<div class="content-wrapper flex align-items-center " style="background-colour:blue; background-size: cover;">
  <div class="row w-100">
    <div class="col-lg-4 margin">
      <div class="formContent auto-form-wrapper">
      <!-- Session Status -->
      <x-auth-session-status class="mb-4 error" :status="session('status')" />
      <!-- Validation Errors -->
      <x-auth-validation-errors class="mb-4 error " :errors="$errors" />
        <form method="POST" action="{{ route('login') }}">
          @csrf
          <h2 class="text-center">login</h2>
          <div class="form-group">
            <label class="label" >email</label>
            <div class="input-group">
              <input type="text" id="email" class="form-control"  type="email" name="email" >
            </div>
          </div>
          <div class="form-group">
            <label class="label">Password</label>
            <div class="input-group">
              <input  id="password" type="password" class="form-control" name="password" >
            </div>
          </div>
          <div class="form-group">
            <button class="btn btn-primary submit-btn btn-block">Login</button>
          </div>
          <div class="form-group d-flex justify-content-between">
            @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}" class="text-small ">Forgot Password</a>
             @endif
          </div>
          
          <div class="text-block text-center my-3">
            <span class="text-small font-weight-semibold">Not a member ?</span>
            <a href="{{ route('register') }}" class=" text-small">Create new account</a>
          </div>
        </form>
      </div>
      
      <p class="footer-text text-center">Online Service Management</p>
    </div>
  </div>
</div>
@endsection

