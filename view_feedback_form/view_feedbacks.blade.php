@extends('layouts.masterAdmin')

@section('content')

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title mb-4">Feedbacks</h5>
        
            @if(session('success'))
        <div class="alert alert-dark mt-4"  role="alert">{{session('success')}}</div>
        @endif
            <?php  $cnt=1;?>
            @foreach($submitfeedback_tbs as $submitfeedback_tb)
            <div class="fluid-container">
          <div class="row ticket-card mt-3 pb-2 border-bottom pb-3 mb-3">
            
            <div class="ticket-details col-md-9">
              <div class="d-flex">
                <p class="text-dark font-weight-semibold mr-2 mb-0 no-wrap">Ratings out of 5 : {{$submitfeedback_tb['rating']}}</p>
              </div>
              <p class="text-gray ellipsis mb-2">Requester Review:{{$submitfeedback_tb['requester_view']}} </p>
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
