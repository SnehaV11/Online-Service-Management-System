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
@if($assignwork_tbs->isNotEmpty())
    @foreach ($assignwork_tbs as $assignwork_tb)
    <h1 class="card-title"> Your Request has been approved and these are the details</h1>
    <table class="table table-bordered">
    <tbody>
      <tr>
        <td>Request ID</td>
        <td>
        {{ $assignwork_tb->request_id }}
        </td>
      </tr>
      <tr>
        <td>Request Info</td>
        <td>
        {{ $assignwork_tb->request_info }}
        </td>
      </tr>
      <tr>
        <td>Request Description</td>
        <td>
        {{ $assignwork_tb->request_desc }}
        </td>
      </tr>
      <tr>
        <td>Name</td>
        <td>
        {{ $assignwork_tb->requester_name }}
        </td>
      </tr>
      <tr>
        <td>Address Line 1</td>
        <td>
        {{ $assignwork_tb->requester_add }}
        </td>
      </tr>
      <tr>
        <td>City</td>
        <td>
        {{ $assignwork_tb->requester_city }}
        </td>
      </tr>
      <tr>
        <td>State</td>
        <td>
        {{ $assignwork_tb->requester_city }}
        </td>
      </tr>
      <tr>
        <td>Pin Code</td>
        <td>
        {{ $assignwork_tb->requester_zip }}
        </td>
      </tr>
      <tr>
        <td>Assigned Date</td>
        <td>
        {{ $assignwork_tb->assign_date }}
        </td>
      </tr>
      <tr>
        <td>Technician Name</td>
        <td>{{ $assignwork_tb->assign_tech }}
        </td>
      </tr>
    </tbody>
  </table>
       
    @endforeach
@else 
    <div>
    <div class="alert alert-dark mt-4" role="alert">
      Your Request is Still Pending </div>
    </div>
@endif

  </div>
    </div>
  </div>
</div>

</div>
@endsection
