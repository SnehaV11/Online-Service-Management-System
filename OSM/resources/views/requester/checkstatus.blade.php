@extends('layouts.masterRequester')
@section('content')
<div class="row">
  
          
            <?php  $cnt=1;?>
            @foreach($data as $request_tb)

     <div class="col-sm-6 col-md-6 col-lg-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-md-7">
            <h4 class="card-title font-weight-medium mb-3"> Request Details</h4>
            <p class="font-weight-medium mb-3">tracking Status:{{ $request_tb->trackingmsg }}</p>
            <h6 class="font-weight-medium mb-0">Request id:{{ $request_tb->id }}</h6>
            <p class="text-muted">Request Details:{{ $request_tb->request_info }}</p>
            <p class="text-muted">Technician Assigned:{{ $request_tb->assign_tech }}</p>
            <p class="mb-0">Date:{{ $request_tb->assign_date}}</p>
          </div>
          <div class="col-md-5 d-flex align-items-end mt-4 mt-md-0">
            <canvas id="conversionBarChart" height="150"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
              <?php 
                        $cnt=$cnt+1;
                       ?>
            @endforeach  
        

@endsection

