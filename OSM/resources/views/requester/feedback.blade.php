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
      <div class="form-group col-md-12">
        <label for="inputTechnicianName">Technician Name</label>
        <input type="text" class="form-control" id="inputTechnicianName"  name="technician_name" placeholder="Type here">
      </div>
    </div>
      <div class="form-group">
        <label for="inputReview">Your Review ( Tips and Guidelines )</label>
        <textarea name="requester_review" rows="4" cols="40" type="text" class="form-control" id="inputReview" placeholder="Type here"></textarea>
      </div>
      <div class="form-group">
        <label for="inputExperience">Overall Experience</label>
        <br>
          <input type="radio" id="veryGood"  name="requester_experience" value="10">Very Good
          <br>
          <input type="radio"  id="good"  name="requester_experience" value="8">Good
          <br>
          <input type="radio"  id="fair"  name="requester_experience" value="4">Fair
          <br>
          <input type="radio"  id="poor"  name="requester_experience" value="2">Poor
      </div>
      <div class="form-group">
        <label for="inputResponse">Timely Response</label>
        <br>
          <input type="radio" id="veryGood"  name="requester_response" value="10">Very Good
          <br>
          <input type="radio"  id="good"  name="requester_response" value="8">Good
          <br>
          <input type="radio"  id="fair"  name="requester_response" value="4">Fair
          <br>
          <input type="radio"  id="poor"  name="requester_response" value="2">Poor
      </div>
      <div class="form-group">
        <label for="inputSupport">Our Support</label>
        <br>
          <input type="radio" id="veryGood"  name="requester_support" value="10">Very Good
          <br>
          <input type="radio"  id="good"  name="requester_support" value="8">Good
          <br>
          <input type="radio"  id="fair"  name="requester_support" value="4">Fair
          <br>
          <input type="radio"  id="poor"  name="requester_support" value="2">Poor
      </div>
      <div class="form-group">
        <label for="inputSatisfaction">Overall Satisfaction</label>
        <br>
          <input type="radio" id="veryGood"  name="requester_satisfaction" value="10">Very Good
          <br>
          <input type="radio"  id="good"  name="requester_satisfaction" value="8">Good
          <br>
          <input type="radio"  id="fair"  name="requester_satisfaction" value="4">Fair
          <br>
          <input type="radio"  id="poor"  name="requester_satisfaction" value="2">Poor
      </div>
      <div class="form-group">
        <label for="inputTell">Is there anything you would like to tell us?</label>
        <textarea name="requester_view" rows="4" cols="40" type="text" class="form-control" id="inputTell" placeholder="Type here"></textarea>
      </div>

    <button type="submit" class="btn btn-primary" name="submitRequest">Submit</button>
    
  </form>
  
      </div>
    </div>
  </div>
</div>

@endsection