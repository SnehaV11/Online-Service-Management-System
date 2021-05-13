@extends('layouts.masterAdmin')

@section('content')
<div class="row">
<div class="col-lg-12 ">
    <div class="card">
      <div class="card-body">
<div><a class="btn btn-primary " href="{{ url('/admin/add_technician') }}">Add Technician</a>
</div>
</div>
</div>
<div class="row">
  <div class="col-lg-12 ">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Technician Details</h4>
        <div class="table-responsive">
          <table class="table table-striped">
          <thead>
              <tr>
                <th> # </th>
                <th> Technician id </th>
                <th> Technician Name </th>
                <th> Technician City </th>
                <th> Technician Mobile </th>
                <th> Technician Email </th>
                <th> Action </th>
              </tr>
            </thead>
            <tbody>
            
            <?php  $cnt=1;?>
            @foreach($technician_tbs as $technician_tb)
              <tr>
                <td> <?php echo $cnt;?></td>
                <td> {{$technician_tb['id']}} </td>
                <td>{{$technician_tb['empName']}}</td>
                <td>{{$technician_tb['empCity']}}</td>
                <td>{{$technician_tb['empMobile']}}</td>
                <td>{{$technician_tb['empEmail']}} </td>
                <td>
                <form action="editemp.php" method="POST"> 
                <input type="hidden" name="id" value='. $row["id"] .'>
                <a href="/click_edit_technician/{{ $technician_tb['id'] }}" class="btn btn-primary"> edit </a>
                @csrf
                @method('DELETE')
                
                </form></td>
                <td>
                  <a href="/click_delete_technician/{{ $technician_tb['id'] }}" class="btn btn-danger"> Delete </a>
                  
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

