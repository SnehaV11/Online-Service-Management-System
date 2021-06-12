<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\submitrequest_tb;
use App\Models\technician_tb;
use App\Models\assignwork_tb;
use App\Models\submitfeedback_tb;
use DB;
class DashboardController extends Controller
{
    public function index(){
        if(Auth::user()->hasRole('admin')){
                return view('/admin/admin_dashboard');

        }elseif(Auth::user()->hasRole('requester')) {
                 return view('/requester/requester_dashboard');
        }
    }

    public function delete_function($empid)
    {
      DB::delete('delete from technician_tbs where empid = ?', [$empid]);
      return redirect('admin/view_technicians')->with('success','Data Deleted');
    }

    public function edit_function($empid)
    {
      $technician = DB::select('select * from technician_tbs where empid = ?', [$empid]);
      return view('admin/technician_edit',['technician'=>$technician]);
    }

    public function update_function(Request $request,$empid)
    {
      $technician_name = $request->input('empName');
      $technician_city = $request->input('empCity');
      $technician_mobile = $request->input('empMobile');
      $technician_email = $request->input('empEmail');

      DB::update('update technician_tbs set empName = ?, empCity = ?, empMobile = ?, empEmail = ? where empid = ?'
      , [$technician_name, $technician_city, $technician_mobile, $technician_email, $empid ]);

      return redirect('admin/view_technicians')->with('success','Data Updated');
    }


    function logout(){
        if(session()->has('User')){
          session()->pull('User');
          return redirect('/auth/login');
        }
      }

    
    function view_technicians(){
      $data= technician_tb::all();
      return view('admin/view_technicians',['technician_tbs'=>$data]);
      
    }
    function view_requester(){
      $data= submitrequest_tb::all();
      return view('admin/view_requester',['submitrequest_tbs'=>$data]);
      
    }
    
    function request(){

      return view('requester/request');
    }

    function feedback(){

      return view('requester/feedback');
    }

    function request_status(){
      return view('requester/request_status');
    }

    function addRequest(Request $req){
     $submitrequest_tb = new submitrequest_tb;
     $submitrequest_tb->request_info=$req->request_info;
     $submitrequest_tb->request_desc=$req->request_desc;
     $submitrequest_tb->requester_name=$req->requester_name;
     $submitrequest_tb->requester_add1=$req->requester_add1;
     $submitrequest_tb->requester_add2=$req->requester_add2;
     $submitrequest_tb->requester_city=$req->requester_city;
     $submitrequest_tb->requester_state=$req->requester_state;
     $submitrequest_tb->requester_zip=$req->requester_zip;
     $submitrequest_tb->requester_email=$req->requester_email;
     $submitrequest_tb->requester_mobile=$req->requester_mobile;
     $submitrequest_tb->request_date=$req->request_date;
     $submitrequest_tb->save();
     return redirect('requester/request');
    }

    function addFeedback(Request $req){
      $submitfeedback_tb = new submitfeedback_tb;
      $submitfeedback_tb->requester_name=$req->requester_name;
      $submitfeedback_tb->requester_email=$req->requester_email;
      $submitfeedback_tb->technician_name=$req->technician_name;
      $submitfeedback_tb->requester_review=$req->requester_review;
      $submitfeedback_tb->requester_experience=$req->requester_experience;
      $submitfeedback_tb->requester_response=$req->requester_response;
      $submitfeedback_tb->requester_support=$req->requester_support;
      $submitfeedback_tb->requester_satisfaction=$req->requester_satisfaction;
      $submitfeedback_tb->requester_view=$req->requester_view;
      $submitfeedback_tb->save();
      return redirect('requester/feedback');
     }

    function add_technician(){

      return view('admin/add_technician');
    }
    function add_technicians(Request $req){
      $technician_tb = new technician_tb;
      $technician_tb->empName=$req->empName;
      $technician_tb->empCity=$req->empCity;
      $technician_tb->empMobile=$req->empMobile;
      $technician_tb->empEmail=$req->empEmail;
      $technician_tb->save();
      return redirect('admin/view_technicians');
 
 
 
 
     }



}
