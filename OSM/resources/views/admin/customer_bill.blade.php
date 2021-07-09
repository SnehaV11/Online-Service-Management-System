@extends('layouts.masterAdmin')
@section('content')

<div class="row">
  <div class="col-lg-12 ">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Customer Details</h4>
        @if(session('success'))
        <div class="alert alert-dark mt-4" role="alert">{{session('success')}}</div>
        @endif
        <div class="table-responsive">
          <table class="table table-striped">
          <thead>
              <tr>
                <th> # </th>
                <th> customer id </th>
                <th> customer Name </th>
                <th> customer Address </th>
                <th> Product </th>
                <th> Quantity </th>
                <th> Price Each </th>
                <th> Total Cost </th>
                <th> Date </th>
                <th> Action </th>
              </tr>
            </thead>
            <tbody>
            
            <?php  $cnt=1;?>
            @foreach($customer_tbs as $customer_tb)
              <tr>
                <td> <?php echo $cnt;?></td>
                <td> {{$customer_tb['id']}} </td>
                <td>{{$customer_tb['custname']}}</td>
                <td>{{$customer_tb['custadd']}}</td>
                <td>{{$customer_tb['cpname']}}</td>
                <td>{{$customer_tb['cpquantity']}} </td>
                <td>{{$customer_tb['cpeach']}} </td>
                <td>{{$customer_tb['cptotal']}} </td>
                <td>{{$customer_tb['cpdate']}} </td>
                <td>
                <form action="editemp.php" method="POST"> 
                <input type="hidden" name="id" value='. $row["id"] .'>
                <a href="/admin/print_invoice/{{ $customer_tb['id'] }}" ><img src="{{ url('assets/images/file-icons/extension/pdf.png') }}" alt="profile image"></i> </a>
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

