@extends('layouts.masterAdmin')

@section('content')

<div class="row">
  <div class="col-lg-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <center><h1 class="card-title">sell Product</h1></center>
        <div class="col-sm-9 col-md-10 mt-5">
  <form class="mx-5" action="add_customer" method="POST">
  @csrf
  <input type="hidden" name="id" value="{{$data['id']}}">
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="id">Customer Name</label>
      <input type="text" class="form-control" id="custname"  name="custname" >
    </div>
    <div class="form-group col-md-6">
    <label for="id">Customer Address</label>
      <input type="text" class="form-control" id="custadd"  name="custadd" >
    </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
    <label for="pName">Product Name</label>
      <input type="text" class="form-control" id="cpname"  name="cpname" value="{{$data['pname']}}">
    </div>
    <div class="form-group col-md-6">
        <label for="inputDate">Purchase Date</label>
        <input type="date" class="form-control" id="cpdate" name="cpdate" >
    </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="empCity">available</label>
      <input type="text" class="form-control" id="pava"  name="pava" value="{{$data['pava']}}" readonly>
    </div>
    <div class="form-group col-md-6">
      <label for="empCity">Quantity</label>
      <input type="text" class="form-control" id="cpquantity"  name="cpquantity" >
    </div>
    </div>

    <div class="form-row">
      
    <div class="form-group col-md-6">
      <label for="empCity">Price Each</label>
      <input type="text" class="form-control" id="cpeach"  name="cpeach" value="{{$data['psellingcost']}}">
    </div>
    <div class="form-group col-md-6">
      <label for="empCity">Total Price</label>
      <input type="text" class="form-control" id="cptotal"  name="cptotal" >
    </div>
    </div>

    <button type="submit" class="btn btn-danger" name="submitRequest">Submit</button>
  </form>
      </div>
    </div>
  </div>
</div>

@endsection
