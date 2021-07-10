@extends('layouts.masterAdmin')

@section('content')

<div class="row">
  <div class="col-lg-12 ">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Work Order</h4>
        <div class="table-responsive">
          <table class="table table-striped">
          <thead>
              <tr>
                <th> # </th>
                <th> Request ID </th>
                <th> Request information </th>
                <th> Requester Name </th>
                <th> Technician </th>
                <th> Assigned date </th>
              </tr>
            </thead>
            <tbody>
            
            <?php  $cnt=1;?>
            @foreach($assignwork_tbs as $assignwork_tb)
              <tr>
                <td> <?php echo $cnt;?></td>
                <td>{{$assignwork_tb['request_id']}} </td>
                <td>{{$assignwork_tb['request_info']}}</td>
                <td>{{$assignwork_tb['requester_name']}}</td>
                <td>{{$assignwork_tb['assign_tech']}} </td>
                <td>{{$assignwork_tb['assign_date']}}</td>
                <td>
                <form action="editemp.php" method="POST"> 
                <input type="hidden" name="id" value='. $row["empid"] .'>
                
                @csrf
                @method('DELETE')
                </form></td>
              </tr>
              <?php 
                        $cnt=$cnt+1;
                       ?>
            @endforeach  
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

