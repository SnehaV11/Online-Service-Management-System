@extends('layouts.masterAdmin')

@section('content')

<div class="row">
  <div class="col-lg-12 ">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">View Requester</h4>
        <div class="table-responsive">
        @if(session('success'))
        <div class="alert alert-dark mt-4" role="alert">{{session('success')}}</div>
        @endif
          <table class="table table-striped">
          <thead>
              <tr>
                <th> # </th>
                <th> Request ID </th>
                <th> Requester Name </th>
                <th> Requester Email </th>
                <th> Action </th>
              </tr>
            </thead>
            <tbody>
            
            <?php  $cnt=1;?>
            @foreach($submitrequest_tbs as $submitrequest_tb)
              <tr>
                <td> <?php echo $cnt;?></td>
                <td> {{$submitrequest_tb['id']}} </td>
                <td>{{$submitrequest_tb['requester_name']}}</td>
                <td>{{$submitrequest_tb['requester_email']}} </td>
                <td>
                <form action="editemp.php" method="POST"> 
                <input type="hidden" name="id" value='. $row["empid"] .'>
                
                @csrf
                @method('DELETE')
                
                </form></td>

                <td>
                <a href="/click_delete_requester/{{ $submitrequest_tb['id'] }}" class="btn btn-danger">Delete </a>
                
                </td>
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

