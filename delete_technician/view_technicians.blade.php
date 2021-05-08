@extends('layouts.masterAdmin')

@section('content')
<!--@if(\Session::has('success'))
<div class="alert alert-danger">
  <h4> {{ \Session::get('success') }}</h4>
</div>
<hr>
@endif-->

<div class="row">
@if(\Session::has('success'))
<div class="alert alert-danger">
  <h10> {{ \Session::get('success') }}</h10>
</div>
<hr>
@endif
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
                <td> {{$technician_tb['empid']}} </td>
                <td>{{$technician_tb['empName']}}</td>
                <td>{{$technician_tb['empCity']}}</td>
                <td>{{$technician_tb['empMobile']}}</td>
                <td>{{$technician_tb['empEmail']}} </td>
                <!--<td>
                <form action="editemp.php" method="POST"> 
                <input type="hidden" name="id" value='. $row["empid"] .'>
                <button type="submit" class="btn btn-primary" href="" name="view" >edit</button>
                @csrf
                @method('DELETE')
                
                <button type="submit" class="btn btn-danger" name="delete" value="Delete">delete</button>
                </form></td>-->
                <td>
                  <a href="/click_delete/{{ $technician_tb['empid'] }}" class="btn btn-danger"> Delete </a>
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

