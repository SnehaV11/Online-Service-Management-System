@extends('layouts.masterAdmin')

@section('content')

<div class="row">
  <div class="col-lg-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <center><h1 class="card-title">Add Technician</h1></center>
        <div class="col-sm-9 col-md-10 mt-5">
  <form class="mx-5" action="add_technician" method="POST">
  @csrf
    <div class="form-group">
      <input type="text" class="form-control" id="empName"  name="empName">
    </div>
    <div class="form-group">
      <label for="empCity">Technician address</label>
      <input type="text" class="form-control" id="empCity"  name="empCity">
    </div>
    

    <div class="form-row">
      
      <div class="form-group col-md-5">
        <label for="inputMobile">Mobile</label>
        <input type="text" class="form-control" id="empMobile" name="empMobile" onkeypress="isInputNumber(event)">
      </div>
      <div class="form-group col-md-7">
        <label for="inputEmail">Email</label>
        <input type="email" class="form-control" id="empEmail" name="empEmail">
      </div>
    </div>

    <button type="submit" class="btn btn-danger" name="submitRequest">Submit</button>
  </form>
      </div>
    </div>
  </div>
</div>

@endsection
