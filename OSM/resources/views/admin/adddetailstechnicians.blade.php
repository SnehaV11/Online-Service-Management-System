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
  @csrf
  <input type="hidden" name="id" value="{{$data->id}}">
  <div class="form-group">
  <label for="inputRequestDescription">Request id</label>
      <input type="text" readonly class="form-control" id="inputRequestInfo" placeholder="Request information" name="request_id" value="{{$data->id}}">
    </div>
    <div class="form-group">
      <input type="hidden" class="form-control" id="inputRequestInfo" placeholder="Request information" name="request_info" value="{{$data['request_info']}}">
    </div>
    <div class="form-group">
      <input type="hidden" class="form-control" id="inputRequestDescription" placeholder="Write Description of the issue" name="request_desc" value="{{$data['request_desc']}}">
    </div>
    <div class="form-group">
      <input type="hidden" class="form-control" id="inputName"  name="requester_name" value="{{$data['requester_name']}}">
    </div>
    
      <div class="form-group ">
        <input type="hidden" class="form-control" id="inputAddress"  name="requester_add" value="{{$data['requester_add']}}">
      </div>
    
    <div class="form-row">
      <div class="form-group col-md-6">
        <input type="hidden" class="form-control" id="inputCity" name="requester_city" value="{{$data['requester_city']}}">
      </div>
      <div class="form-group col-md-4">
        <input type="hidden" class="form-control" id="inputState" name="requester_state" value="{{$data['requester_state']}}">
      </div>
      <div class="form-group col-md-2">
        <input type="hidden" class="form-control" id="inputZip" name="requester_zip" value="{{$data['requester_zip']}}" onkeypress="isInputNumber(event)">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-5">
        <input type="hidden" class="form-control" id="inputEmail" name="requester_email" value="{{$data['requester_email']}}">
      </div>
      <div class="form-group col-md-3">
        <input type="hidden" class="form-control" id="inputMobile" name="requester_mobile" value="{{$data['requester_mobile']}}" onkeypress="isInputNumber(event)">
      </div>
      <div class="form-group col-md-4">
        <input type="hidden" class="form-control" id="inputDate" name="request_date" value="{{$data['request_date']}}">
      </div>
    </div>
    
    
      <div class="form-group ">
        <label for="trackingmsg">Cancel Request</label>
        <select name="trackingmsg" class="custom-select" required id="inputGroupSelect02">
        <option value="Resources are not available">Resources are not available</option>
        <option value="Technician not available">Technician not available</option>
        <option value="cant Provide service">cant Provide service</option>
        </select><br>
      </div>
      </div>

      

    <button type="submit" class="btn btn-danger" name="submitRequest">Submit</button>
    <button type="reset" class="btn btn-secondary">Reset</button>
  </form>
      </div>
    </div>
  </div>
</div>

@endsection
