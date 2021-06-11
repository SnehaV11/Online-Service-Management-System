@extends('layouts.masterRequester')
@section('content')
<div class="row">
  <div class="col-lg-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h1 class="card-title"> Request status</h1>
        <div class="col-sm-7 col-md-8 mt-3">
        <form class="mt-3 form-inline d-print-none" action="">
        @csrf

        @if(session('success'))
        <div class="alert alert-dark mt-4" role="alert">{{session('success')}}</div>
@endif
  </div>
    </div>
  </div>
</div>

</div>
@endsection
