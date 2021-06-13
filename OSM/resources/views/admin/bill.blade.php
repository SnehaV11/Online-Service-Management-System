@extends('layouts.masterAdmin')

@section('content')

<div class="row">
  <div class="col-lg-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <center><h1 class="card-title">Bill</h1></center>
        <div class="col-sm-9 col-md-10 mt-5">
        <form class='d-print-none'>
  <input type="hidden" name="id" value="{{$data['id']}}">
  <table class='table'>
  <tbody>
  <tr>
    <th>Customer ID</th>
    <td>{{$data['id']}}</td>
  </tr>
   <tr>
     <th>Customer Name</th>
     <td>{{$data['custname']}}</td>
   </tr>
   <tr>
     <th>Address</th>
     <td>{{$data['custadd']}}</td>
   </tr>
   <tr>
   <th>Product</th>
   <td>{{$data['cpname']}}</td>
  </tr>
   <tr>
    <th>Quantity</th>
    <td>{{$data['cpquantity']}}</td>
   </tr>
   <tr>
    <th>Price Each</th>
    <td>{{$data['cpeach']}}</td>
   </tr>
   <tr>
    <th>Total Cost</th>
    <td>{{$data['cptotal']}}</td>
   </tr>
   <tr>
   <th>Date</th>
   <td>{{$data['cpdate']}}</td>
  </tr>
   <tr>
    <td><input class='btn btn-danger' type='submit' value='Print' ></form></td>
   </td>
  </tr>
  </tbody>
 </table>

      </div>
    </div>
  </div>
</div>

@endsection
