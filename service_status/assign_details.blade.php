@extends('layouts.masterRequester')



@section('content')


<div class="row">
  <div class="col-lg-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <center><h1 class="card-title"> Assigned Work Details</h1></center>
        <div class="table-responsive">
          <table class="table table-striped">
          <thead>
              <tr>
                <th> Request ID </th>
                <th> Request Info </th>
                <th> Request Description </th>
                <th> Name </th>
                <th> Address Line 1 </th>
                <th> Address Line 2 </th>
                <th> City </th>
                <th> State </th>
                <th> Pin Code </th>
                <th> Email </th>
                <th> Mobile </th>
                <th> Assigned Date </th>
                <th> Technician Name </th>
                <th> Customer Sign </th>
                <th> Technician Sign </th>
              </tr>
            </thead>
            <tbody>
            
            <?php  $cnt=1;?>
            @foreach($assignwork_tbs as $assignwork_tb)
              <tr>
                <td> <?php echo $cnt;?></td>
                <td> {{$assignwork_tb['request_id']}} </td>
                <td>{{$assignwork_tb['request_info']}}</td>
                <td>{{$assignwork_tb['request_desc']}}</td>
                <td>{{$assignwork_tb['requester_name']}}</td>
                <td>{{$assignwork_tb['requester_add1']}} </td>
                <td> {{$assignwork_tb['requester_add2']}} </td>
                <td> {{$assignwork_tb['requester_city']}} </td>
                <td> {{$assignwork_tb['requester_state']}} </td>
                <td> {{$assignwork_tb['requester_zip']}} </td>
                <td> {{$assignwork_tb['requester_email']}} </td>
                <td> {{$assignwork_tb['requester_mobile']}} </td>
                <td> {{$assignwork_tb['assign_date']}} </td>
                <td> Zahir Khan </td>

              </tr>
              <?php 
                        $cnt=$cnt+1;
                       ?>
            @endforeach  
            </tbody>
          </table>
        </div>

    <button type="submit" class="btn btn-danger" value="Print" onClick="window.print()">Print</button>
    <button type="submit" action="" class="btn btn-secondary" value="Close">Close</button>
  </form>
      </div>
    </div>
  </div>
</div>

@endsection