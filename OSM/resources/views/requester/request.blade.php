@extends('layouts.masterRequester')
@section('content')

<div class="row">
  <div class="col-lg-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <center><h1 class="card-title"> Service Request</h1></center>
        <div class="col-sm-9 co  l-md-10 mt-5">
  <form class="mx-5" action="{{route('requeststore')}}" method="POST">
  @csrf
  
    <div class="form-group">
      <label for="inputRequestInfo">Request information</label>
      <input type="text" class="form-control" id="inputRequestInfo" placeholder="Request information" name="request_info">
    </div>
    <div class="form-group">
      <label for="inputRequestDescription">Request Description</label>
      <input type="text" class="form-control" id="inputRequestDescription" placeholder="Write Description of the issue" name="request_desc">
    </div>
    <div class="form-group">
      <label for="inputName">Name</label>
      <input type="text" class="form-control" id="inputName"  name="requester_name">
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputAddress">Address 1</label>
        <input type="text" class="form-control" id="inputAddress"  name="requester_add1">
      </div>
      <div class="form-group col-md-6">
        <label for="inputAddress2">Address 2</label>
        <input type="text" class="form-control" id="inputAddress2"  name="requester_add2">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">City</label>
        <input type="text" class="form-control" id="inputCity" name="requester_city">
      </div>
      <div class="form-group col-md-4">
        <label for="inputState">State</label>
        <input type="text" class="form-control" id="inputState" name="requester_state">
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip">Zip</label>
        <input type="text" class="form-control" id="inputZip" name="requester_zip" onkeypress="isInputNumber(event)">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-5">
        <label for="inputEmail">Email</label>
        <input type="email" class="form-control" id="inputEmail" name="requester_email">
      </div>
      <div class="form-group col-md-3">
        <label for="inputMobile">Mobile</label>
        <input type="text" class="form-control" id="inputMobile" name="requester_mobile" onkeypress="isInputNumber(event)">
      </div>
      <div class="form-group col-md-4">
        <label for="inputDate">Date</label>
        <input type="date" class="form-control" id="inputDate" name="request_date">
      </div>
    </div>
    <button type="submit" class="btn btn-secondary">submit</button>

    <button type="Reset" class="btn btn-secondary">Reset</button>
  </form>
      </div>
    </div>
  </div>
</div>

@endsection
