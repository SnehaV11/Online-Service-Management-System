@extends('layouts.masterAdmin')

@section('content')

<div class="row">
  <div class="col-lg-12 ">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">View Requester</h4>
        <div class="table-responsive">
          <table class="table table-striped">
          <thead>
              <tr>
                <th> # </th>
                <th> Request ID </th>
                <th> Requester Information </th>
                <th> Requester Description </th>
                <th> Action </th>
              </tr>
            </thead>
            <tbody>
            
            <?php  $cnt=1;?>
            @foreach($submitrequest_tbs as $submitrequest_tb)
            
              <tr>
                <td> <?php echo $cnt;?></td>
                <td> {{$submitrequest_tb['id']}} </td>
                <td>{{$submitrequest_tb['request_info']}}</td>
                <td>{{$submitrequest_tb['request_desc']}} </td>
                <td>
                <form action="editemp.php" method="POST"> 
                <input type="hidden" name="id" value='. $row["id"] .'>
                
                @csrf
                @method('DELETE')
                
                <a href="/click_view_request/{{ $submitrequest_tb['id'] }}" class="btn btn-primary"> view </a>
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

