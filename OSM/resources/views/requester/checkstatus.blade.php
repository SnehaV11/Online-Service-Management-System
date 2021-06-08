@extends('layouts.masterRequester')
@section('content')
<div class="row">
  <div class="col-lg-12 grid-margin">
    <div class="card">
      <div class="card-body">
        
        <h1 class="card-title"> Enter Your Request Id</h1>
        <div class="col-sm-7 col-md-8 mt-3">
        
        @csrf
        <form class="mt-3 form-inline d-print-none" action="{{ route('requester/status') }}" method="GET">
        <div class="form-group col-md-6">
    <input type="text" name="search" class="form-control" required/>
    </div>
    <div class="form-group ">
    <button type="submit" class="btn btn-danger">Search</button>
    </div>
</form>
  </div>
    </div>
  </div>
</div>

</div>
@endsection
