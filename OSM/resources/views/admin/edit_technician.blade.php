@extends('layouts.masterAdmin')

@section('content')

<div class="row">
  <div class="col-lg-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <center><h1 class="card-title">Update Technician</h1></center>
        <div class="col-sm-9 col-md-10 mt-5">
  <form class="mx-5" action="/edit_technician" method="POST">
  @csrf
  <input type="hidden" name="id" value="{{$data['id']}}">
    <div class="form-group">
    <label for="empName">Technician Name</label>
      <input type="text" class="form-control" id="empName"  name="empName" value="{{$data['empName']}}">
    </div>
    <div class="form-group">
      <label for="empCity">Technician address</label>
      <input type="text" class="form-control" id="empCity"  name="empCity" value="{{$data['empCity']}}">
    </div>
    

    <div class="form-row">
      
      <div class="form-group col-md-5">
        <label for="inputMobile">Mobile</label>
        <input type="text" class="form-control" id="empMobile" name="empMobile" onkeypress="isInputNumber(event)" value="{{$data['empMobile']}}">
      </div>
      <div class="form-group col-md-7">
        <label for="inputEmail">Email</label>
        <input type="email" class="form-control" id="empEmail" name="empEmail" value="{{$data['empEmail']}}">
      </div>
    </div>

    <button type="submit" class="btn btn-danger" name="submitRequest">update</button>
  </form>
      </div>
    </div>
  </div>
</div>

@endsection
