@extends('layouts.masterAdmin')

@section('content')

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title mb-4">Manage Tickets</h5>
        
            @if(session('success'))
        <div class="alert alert-dark mt-4"  role="alert">{{session('success')}}</div>
        @endif
            <?php  $cnt=1;?>
            @foreach($request_tbs as $request_tb)
            <div class="fluid-container">
          <div class="row ticket-card mt-3 pb-2 border-bottom pb-3 mb-3">
            
            <div class="ticket-details col-md-9">
              <div class="d-flex">
                <p class="text-dark font-weight-semibold mr-2 mb-0 no-wrap">Requester Name:{{$request_tb['requester_name']}}</p>
                <p class="text-primary mr-1 mb-0">Request Id: {{$request_tb['id']}}</p>
              </div>
              <p class="text-gray ellipsis mb-2">Request Details:{{$request_tb['request_info']}} </p>

              <div class="row text-gray d-md-flex d-none">
                <div class="col-4 d-flex">
                  <small class="mb-0 mr-2 text-muted text-muted">Request Date :</small>
                  <small class="Last-responded mr-2 mb-0 text-muted text-muted">{{$request_tb['request_date']}}</small>
                </div>
              </div>
            </div>
            <div class="ticket-actions col-md-2">
              <div class="btn-group dropdown">
                <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Manage </button>
                <div class="dropdown-menu">
                  
                  <a class="dropdown-item" href="/click_view_request/{{ $request_tb['id'] }}">
                    <i class="fa fa-check text-success fa-fw"></i>Resolve Issue</a>
                  <a class="dropdown-item" href="/click_delete_request/{{ $request_tb['id'] }}">
                    <i class="fa fa-times text-danger fa-fw"></i>Close Issue</a>
                </div>
              </div>
            </div>
          </div>  
        </div>
                
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

