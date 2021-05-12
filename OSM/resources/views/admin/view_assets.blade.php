@extends('layouts.masterAdmin')
@section('content')
<div class="row">
<div class="col-lg-12 ">
    <div class="card">
      <div class="card-body">
<div><a class="btn btn-primary " href="{{ url('/admin/add_asset') }}">Add New Product</a>
</div>
</div>
</div>
<div class="row">
  <div class="col-lg-12 ">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Product Details</h4>
        <div class="table-responsive">
          <table class="table table-striped">
          <thead>
              <tr>
                <th> # </th>
                <th> Product id </th>
                <th> Product Name </th>
                <th> Date of purchase </th>
                <th> Avaliable </th>
                <th> Total </th>
                <th> cost </th>
                <th> selling price </th>
                <th> Action </th>
              </tr>
            </thead>
            <tbody>
            
            <?php  $cnt=1;?>
            @foreach($assets_tbs as $assets_tb)
              <tr>
                <td> <?php echo $cnt;?></td>
                <td> {{$assets_tb['pid']}} </td>
                <td>{{$assets_tb['pname']}}</td>
                <td>{{$assets_tb['pdop']}}</td>
                <td>{{$assets_tb['pava']}}</td>
                <td>{{$assets_tb['ptotal']}} </td>
                <td>{{$assets_tb['poriginalcost']}} </td>
                <td>{{$assets_tb['psellingcost']}} </td>
                <td>
                <form action="editemp.php" method="POST"> 
                <input type="hidden" name="id" value='. $row["pid"] .'>
                <button type="submit" class="btn btn-primary" href="" name="view" >edit</button>
                @csrf
                @method('DELETE')
                </form></td>
                <td>
                  <a href="/click_delete_Product/{{ $assets_tb['pid'] }}" class="btn btn-danger"> Delete </a>
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

