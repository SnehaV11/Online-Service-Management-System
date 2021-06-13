<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\AssetsImport;
use App\Models\submitrequest_tb;
use App\Models\customer_tb;
use App\Models\technician_tb;
use App\Models\assignwork_tb;
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
      return redirect('admin/view_technicians')
      ->with('success','inserted');

     }

     function view_assets(){
      $data= assets_tb::all();
      return view('admin/view_assets', ['assets_tbs'=>$data]);
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

    function delete_technician($id)
    {
      DB::delete('delete from technician_tbs where id = ?', [$id]);
      return redirect('admin/view_technicians')->with('success','Data Deleted');
    }

    function delete_product($id)
    {
      DB::delete('delete from assets_tbs where id = ?', [$id]);
      return redirect('admin/view_assets')->with('success','Data Deleted');
    }

     function edit_technician($id){
      
      $data =technician_tb::find( $id);
      return view('admin/edit_technician',['data'=>$data]);
     }
     function update_technician(Request $req){
       $data= technician_tb::find($req->id);
       $data->empName=$req->empName;
       $data->empCity=$req->empCity;
       $data->empMobile=$req->empMobile;
       $data->empEmail=$req->empEmail;
       $data->save();
       return redirect('admin/view_technicians');
     }
     function edit_assets($id){
      
      $data =assets_tb::find( $id);
      return view('admin/edit_assets',['data'=>$data]);
     }
     function update_assets(Request $req){
       $data= assets_tb::find($req->id);
       $data->pname=$req->pname;
       $data->pdop=$req->pdop;
       $data->pava=$req->pava;
       $data->ptotal=$req->ptotal;
       $data->poriginalcost=$req->poriginalcost;
       $data->psellingcost=$req->psellingcost;
       $data->save();
       return redirect('admin/view_assets');
     }

     function sell_assets($id){
      
      $data =assets_tb::find( $id);
      return view('admin/sell_assets',['data'=>$data]);
     }

     function add_customer($id){
      $data =assets_tb::find( $id);
      return view('admin/add_customer',['data'=>$data]);
    }

     
     function add_customers(Request $req){
      $customer_tb = new customer_tb;
      $customer_tb->custname=$req->custname;
      $customer_tb->custadd=$req->custadd;
      $customer_tb->cpname=$req->cpname;
      $customer_tb->cpquantity=$req->cpquantity;
      $customer_tb->cpeach=$req->cpeach;
      $customer_tb->cptotal=$req->cptotal;
      $customer_tb->cpdate=$req->cpdate;
      $customer_tb->save();
      return redirect('/click_customer_bill');
 
     }
     function customer_bill(){
      
      $data= customer_tb::all();
      return view ('admin/customer_bill',['customer_tbs'=>$data]);
     }
     function customer_bills(Request $req){
       $data= customer_tb::find($req->id);
       $customer_tb->custname=$req->custname;
      $customer_tb->custadd=$req->custadd;
      $customer_tb->cpname=$req->cpname;
      $customer_tb->cpquantity=$req->cpquantity;
      $customer_tb->cpeach=$req->cpeach;
      $customer_tb->cptotal=$req->cptotal;
      $customer_tb->cpdate=$req->cpdate;
      $customer_tb->save();
       return redirect('admin/customer_bill');
     }

     function view_request(){
      $data= submitrequest_tb::all();
      return view('admin/view_request',['submitrequest_tbs'=>$data]);
      
    }

    function details_addtechnicians($id){
      
      $data =submitrequest_tb::find( $id);
      return view('admin/details_addtechnicians',['data'=>$data]);
     }
     function update_details(Request $req){
       $data= submitrequest_tb::find($req->id);
     }

     function insert_assignedwork(Request $req){
      $assignwork_tb = new assignwork_tb;
      $assignwork_tb->request_id=$req->request_id;
      $assignwork_tb->request_info=$req->request_info;
      $assignwork_tb->request_desc=$req->request_desc;
      $assignwork_tb->requester_name=$req->requester_name;
      $assignwork_tb->requester_add1=$req->requester_add1;
      $assignwork_tb->requester_add2=$req->requester_add2;
      $assignwork_tb->requester_city=$req->requester_city;
      $assignwork_tb->requester_state=$req->requester_state;
      $assignwork_tb->requester_zip=$req->requester_zip;
      $assignwork_tb->requester_email=$req->requester_email;
      $assignwork_tb->requester_mobile=$req->requester_mobile;
      $assignwork_tb->assign_tech=$req->assign_tech;
      $assignwork_tb->assign_date=$req->assign_date;
      $assignwork_tb->save();
      return redirect('admin/view_request');
      
     }

     function work_order(){
      $data= assignwork_tb::all();
      return view('admin/work_order',['assignwork_tbs'=>$data]);
    }

    public function importexcel(){
      return view('admin/add_asset');
    }

    public function import(){
      $data= assets_tb::all();
      Excel::import(new AssetsImport,request()->file('file'));
      return view('admin/view_assets', ['assets_tbs'=>$data]);
    }




}
