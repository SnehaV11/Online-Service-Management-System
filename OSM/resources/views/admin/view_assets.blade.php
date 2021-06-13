@extends('layouts.masterAdmin')
@section('content')
<section>
<div class="row">
<div class="col-lg-12 ">
    <div class="card">
      <div class="card-body">
      <label for="pName"> Choose CSV to Add new Product</label>
<div class="card-body">
<form class="mx-5" action="add_asset" method="POST" enctype="multipart/form-data">
  @csrf
      <input type="file" class="form-group col-md-4" id="file"  name="file">
    <button type="submit" class="btn btn-primary">submit</button>
    <div class="card-body">
    </form>
</div>
</div>
<label for="pName">Add Manually</label>
<div><a class="btn btn-primary " href="{{ url('/admin/add_asset') }}">Add New Product </a>
</div>
</section>
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
                <td>{{$assets_tb['id']}} </td>
                <td>{{$assets_tb['pname']}}</td>
                <td>{{$assets_tb['pdop']}}</td>
                <td>{{$assets_tb['pava']}}</td>
                <td>{{$assets_tb['ptotal']}} </td>
                <td>{{$assets_tb['poriginalcost']}} </td>
                <td>{{$assets_tb['psellingcost']}} </td>
                <td>
                <form action="editemp.php" method="POST"> 
                <input type="hidden" name="id" value='. $row["id"] .'>
                <a href="/click_edit_assets/{{ $assets_tb['id'] }}" class="btn btn-primary"> edit </a>
                @csrf
                @method('DELETE')
                </form></td>
                <td>
                <a href="/click_sell_assets/{{ $assets_tb['id'] }}" class="btn btn-primary"> sell </a>
                  <a href="/click_delete_Product/{{ $assets_tb['id'] }}" class="btn btn-danger"> Delete </a>
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

