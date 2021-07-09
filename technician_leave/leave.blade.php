@extends('layouts.masterAdmin')
@section('content')
<div class="row">
  <div class="col-lg-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <center><h1 class="card-title"> Add Technician Leave</h1></center>
        <div class="col-sm-9 col-md-10 mt-5">
        <form class="mx-5" action="/insertLeave" method="POST">
        @csrf
@if($technician_tbs->isNotEmpty())
    @foreach ($technician_tbs as $technician_tb)
        <div class="form-group">
            <input type="text" class="form-control" id="inputTechnicanId" placeholder="Technician ID" name="id" value="{{$technician_tb['id']}}">
        </div>
        <div class="form-group">
            <label for="inputName">Technican Name</label>
            <input type="text" class="form-control" id="inputName"  name="empName" value="{{$technician_tb['empName']}}">
        </div>
        <div class="form-group">
            <label for="inputCity">Technician City</label>
            <input type="text" class="form-control" id="inputCity" name="empCity" value="{{$technician_tb['empCity']}}">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputMobile">Technician Mobile</label>
                <input type="text" class="form-control" id="inputMobile" name="empMobile" value="{{$technician_tb['empMobile']}}" onkeypress="isInputNumber(event)">
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail">Technician Email</label>
                <input type="email" class="form-control" id="inputEmail" name="empEmail" value="{{$technician_tb['empEmail']}}">
            </div>
        </div>
        <div class="form-group col-md-4">
            <label for="inputDate">leave_date</label>
            <input type="date" class="form-control" id="inputDate" name="leave_date">
        </div>

        <button type="submit" class="btn btn-danger" name="submitLeave">Submit</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
       
    @endforeach
@else 
    <div>
    <div class="alert alert-dark mt-4" role="alert">
      Please enter correct id </div>
    </div>
@endif

  </div>
    </div>
  </div>
</div>

</div>
@endsection
