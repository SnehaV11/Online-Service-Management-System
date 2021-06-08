@extends('layouts.masterRequester')



@section('content')


<div class="row">
  <div class="col-lg-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <center><h1 class="card-title"> Service Status</h1></center>
        <div class="col-sm-9 col-md-10 mt-5">
  <form class="mx-5" action="assign_details" method="get">
  @csrf
    <div class="form-group">
      <label for="checkid">Enter Request ID: </label>
      <input type="text" class="form-control" id="checkid" placeholder="Enter Request ID" name="checkid">
    </div>
  
    <button type="submit" class="btn btn-danger" name="submitRequest">Search</button>
  </form>
      </div>
    </div>
  </div>
</div>

@endsection