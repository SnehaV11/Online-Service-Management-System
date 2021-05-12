<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\submitrequest_tb;
use App\Models\technician_tb;
use App\Models\assets_tb;
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

     function view_assets(){
      $data= assets_tb::all();
      return view('admin/view_assets',['assets_tbs'=>$data]);
      
    }
    function add_asset(){

      return view('admin/add_asset');
    }
    function add_assets(Request $req){
      $assets_tb = new assets_tb;
      $assets_tb->pname=$req->pname;
      $assets_tb->pdop=$req->pdop;
      $assets_tb->pava=$req->pava;
      $assets_tb->ptotal=$req->ptotal;
      $assets_tb->poriginalcost=$req->poriginalcost;
      $assets_tb->psellingcost=$req->psellingcost;
      $assets_tb->save();
      return redirect('admin/view_assets');

     }

    function delete_technician($empid)
    {
      DB::delete('delete from technician_tbs where empid = ?', [$empid]);
      return redirect('admin/view_technicians')->with('success','Data Deleted');
    }

    function delete_product($pid)
    {
      DB::delete('delete from assets_tbs where pid = ?', [$pid]);
      return redirect('admin/view_assets')->with('success','Data Deleted');
    }

     


}
