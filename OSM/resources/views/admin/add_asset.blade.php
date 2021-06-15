@extends('layouts.masterAdmin')

@section('content')

<div class="row">
  <div class="col-lg-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <center><h1 class="card-title">Add New Product</h1></center>
        <div class="col-sm-9 col-md-10 mt-5">
  <form class="mx-5" action="add_asset" method="POST">
  @csrf
    <div class="form-group">
    <label for="pName">Product Name</label>
      <input type="text" class="form-control" id="pname"  name="pname">
    </div>
    <div class="form-group ">
        <label for="inputDate">Purchase Date</label>
        <input type="date" class="form-control" id="pdop" name="pdop">
      </div>
    <div class="form-group">
      <label for="empCity">available</label>
      <input type="text" class="form-control" id="pava"  name="pava">
    </div>
    <div class="form-group">
      <label for="empCity">total</label>
      <input type="text" class="form-control" id="ptotal"  name="ptotal">
    </div>

    <div class="form-row">
      
    <div class="form-group col-md-5">
      <label for="empCity">Cost</label>
      <input type="text" class="form-control" id="poriginalcost"  name="poriginalcost">
    </div>
    <div class="form-group col-md-5">
      <label for="empCity">Selling Price</label>
      <input type="text" class="form-control" id="psellingcost"  name="psellingcost">
    </div>
    </div>

    <button type="submit" class="btn btn-danger" name="submitRequest">Submit</button>
    
  </form>
      </div>
    </div>
  </div>
</div>

@endsection
