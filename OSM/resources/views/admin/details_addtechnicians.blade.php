@extends('layouts.masterAdmin')



@section('content')


<div class="row">
  <div class="col-lg-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <center><h1 class="card-title"> Service Request</h1></center>
        <div class="col-sm-9 col-md-10 mt-5">
  <form class="mx-5" action="/insert" method="POST">
  @csrf
  <input type="hidden" name="user_id" value="{{ $data->user_id }}">
  <input type="hidden" name="id" value="{{$data->id}}">
  <div class="form-group">
      <input type="text" class="form-control" id="inputRequestInfo" placeholder="Request information" name="request_id" value="{{$data->id}}">
    </div>
    <div class="form-group">
      <label for="inputRequestInfo">Request information</label>
      <input type="text" class="form-control" id="inputRequestInfo" placeholder="Request information" name="request_info" value="{{$data['request_info']}}">
    </div>
    <div class="form-group">
      <label for="inputRequestDescription">Request Description</label>
      <input type="text" class="form-control" id="inputRequestDescription" placeholder="Write Description of the issue" name="request_desc" value="{{$data['request_desc']}}">
    </div>
    <div class="form-group">
      <label for="inputName">Name</label>
      <input type="text" class="form-control" id="inputName"  name="requester_name" value="{{$data['requester_name']}}">
    </div>
    
      <div class="form-group ">
        <label for="inputAddress">Address</label>
        <input type="text" class="form-control" id="inputAddress"  name="requester_add" value="{{$data['requester_add']}}">
      </div>
    
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">City</label>
        <input type="text" class="form-control" id="inputCity" name="requester_city" value="{{$data['requester_city']}}">
      </div>
      <div class="form-group col-md-4">
        <label for="inputState">State</label>
        <input type="text" class="form-control" id="inputState" name="requester_state" value="{{$data['requester_state']}}">
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip">Zip</label>
        <input type="text" class="form-control" id="inputZip" name="requester_zip" value="{{$data['requester_zip']}}" onkeypress="isInputNumber(event)">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-5">
        <label for="inputEmail">Email</label>
        <input type="email" class="form-control" id="inputEmail" name="requester_email" value="{{$data['requester_email']}}">
      </div>
      <div class="form-group col-md-3">
        <label for="inputMobile">Mobile</label>
        <input type="text" class="form-control" id="inputMobile" name="requester_mobile" value="{{$data['requester_mobile']}}" onkeypress="isInputNumber(event)">
      </div>
      <div class="form-group col-md-4">
        <label for="inputDate">Request Date</label>
        <input type="date" class="form-control" id="inputDate" name="request_date" value="{{$data['request_date']}}">
      </div>
    </div>
    <div class="form-group col-md-12">
        <label for="assign_tech">Add Technician</label>
        <select name="assign_tech"  style="width:350px">
        <option value="">---select technician---</option>
        @foreach ($data as $key => $value)
        <option value="{{ $key }}">{{ $value }}</option>
        <option value="trusm">trusm</option>
        @endforeach
        </select> 
        </div>

      <div class="form-group col-md-4">
        <label for="inputDate">assign_date</label>
        <input type="date" class="form-control" id="inputDate" name="assign_date">
      </div>

    <button type="submit" class="btn btn-danger" name="submitRequest">Submit</button>
    <button type="reset" class="btn btn-secondary">Reset</button>
  </form>
      </div>
    </div>
  </div>
</div>

@endsection
