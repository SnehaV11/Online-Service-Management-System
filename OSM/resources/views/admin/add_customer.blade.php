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
      <input type="text" class="form-control" id="cpname"  name="cpname" value="{{$data['pname']}}" readonly>
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
      <input  type='number' min='1' max='10' onchange="subTotal()" class="form-control text-center cpquantity" id="cpquantity"  name="cpquantity" >
    </div>
    </div>

    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="empCity">Price Each</label>
      <td><input type='hidden' class='cpeach' value="{{$data['psellingcost']}}"></td>
      <input type="text" class="form-control cpeach" id="cpeach" readonly name="cpeach" value="{{$data['psellingcost']}}">
    </div>
    <div class="form-group col-md-6">
      <label for="empCity">Total Price</label>
      <input  class="form-control cptotal"  id="cptotal"  name="cptotal" >
    </div>
    </div>

    <button type="submit" class="btn btn-danger" name="submitRequest">Submit</button>
  </form>
      </div>
    </div>
  </div>
</div>
<script>
var cpeach=document.getElementsByClassName('cpeach');
var cpquantity=document.getElementsByClassName('cpquantity');
var cptotal=document.getElementsByClassName('cptotal');
function subTotal()
{
  for(i=0;cpeach.length;i++) 
  { 
    cptotal[i].innerText=cpeach[i].value)*(cpquantity[i].value);

  }
}

subTotal();
</script>

@endsection
