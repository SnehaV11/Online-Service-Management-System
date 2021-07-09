@extends('layouts.masterRequester')



@section('content')

<div class="row">
  <div class="col-lg-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <center><h1 class="card-title"> Feedback Form</h1></center>
        <div class="col-sm-9 col-md-10 mt-5">
  <form class="mx-5" action="feedback" method="POST">
  @csrf
  @if(session('success'))
        <div class="alert alert-dark mt-4" role="alert">{{session('success')}}</div>
        @endif
    <div class="form-row">
    <input type="hidden" name="requester_name" value="{{ Auth::user()->name }}">
    <input type="hidden" name="requester_email" value="{{ Auth::user()->email }}">
      <div class="form-group">
        <label for="inputTechnicianName">Your Rating</label>
        <fieldset class="rating">
          <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Rocks!">5 stars</label>
          <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty good">4 stars</label>
          <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Meh">3 stars</label>
          <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Kinda bad">2 stars</label>
          <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>
      </fieldset>
      </div>
    </div>
      <div class="form-group">
        <label for="inputReview">Your Review </label>
        <textarea name="requester_view" rows="4" cols="40" type="text" class="form-control" id="inputReview" placeholder="Type here"></textarea>
      </div>

    <button type="submit" class="btn btn-primary" name="submitRequest">Submit</button>
    
  </form>
  
      </div>
    </div>
  </div>
</div>

@endsection