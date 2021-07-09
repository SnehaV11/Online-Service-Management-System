<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\AssetsImport;
use App\Models\submitrequest_tb;
use App\Models\request_tb;
use App\Models\customer_tb;
use App\Models\technician_tb;
use App\Models\assignwork_tb;
use App\Models\assets_tb;
use App\Models\technicianleave_tb;
use App\Models\submitfeedback_tb;
use DB;


class DashboardController extends Controller
{
  
    public function index(){
        if(Auth::user()->hasRole('admin')){
          $new_request=DB::table('submitrequest_tbs')->count();
          $request_work_assigned=DB::table('assignwork_tbs')->count();
          $Total_technicians=DB::table('technician_tbs')->count();
          $customer=DB::table('customer_tbs')->count();
                return view('/admin/admin_dashboard',compact('new_request','request_work_assigned','Total_technicians','customer'));

        }elseif(Auth::user()->hasRole('requester')) {
            $user_id=  Auth::user()->id ;
            $pending_request=DB::table('request_tbs')->select('request_id')->where('user_id','=',$user_id)->count();
            $old_request=DB::table('assignwork_tbs')->select('id')->where('user_id','=',$user_id)->count();
                 return view('/requester/requester_dashboard',compact('pending_request','old_request'));
        }
    }

    function logout(){
        if(session()->has('User')){
          session()->pull('User');
          return redirect('/auth/login');
        }
      }

      function admin_dashboard(){
        $new_request=DB::table('submitrequest_tbs')->count();
        $request_work_assigned=DB::table('assignwork_tbs')->count();
        $Total_technicians=DB::table('technician_tbs')->count();
        $customer=DB::table('customer_tbs')->count();
        return view('admin/admin_dashboard',compact('new_request','request_work_assigned','Total_technicians','customer'));
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

    function add_leave(){
      return view('admin/add_leave');
    }

    function reqaddleave(Request $req){
      return redirect('admin/add_leave');
     }

     public function view_techid(Request $request){
      $search = $request->input('search');
      // Search in the title and body columns from the posts table
      $technician_tbs = technician_tb::query()
          ->where('id', 'LIKE', "%{$search}%")
          ->get();
      // Return the search view with the resluts compacted
      return view('admin/add_leave', compact('technician_tbs'));
  }

  function Request_id(Request $request){
    $search = $request->input('search');
    // Search in the title and body columns from the posts table
    $technician_tbs = technician_tb::query()
        ->where('id', 'LIKE', "%{$search}%")
        ->get();
    // Return the search view with the resluts compacted
    return view('admin/leave', compact('technician_tbs'));

}

function insert_leave(Request $req){
  $technicianleave_tb = new technicianleave_tb;
  $technicianleave_tb->id=$req->id;
  $technicianleave_tb->empName=$req->empName;
  $technicianleave_tb->empCity=$req->empCity;
  $technicianleave_tb->empMobile=$req->empMobile;
  $technicianleave_tb->empEmail=$req->empEmail;
  $technicianleave_tb->leave_date=$req->leave_date;
  $technicianleave_tb->save();
  return redirect('admin/add_leave');

 }

    function add_technicians(Request $req){
      $technician_tb = new technician_tb;
      $technician_tb->empName=$req->empName;
      $technician_tb->empCity=$req->empCity;
      $technician_tb->empMobile=$req->empMobile;
      $technician_tb->empEmail=$req->empEmail;
      $technician_tb->save();
      return redirect('admin/view_technicians')
      ->with('success','Data inserted successfully');

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
      return redirect('admin/view_assets')->with('success','Data inserted successfully');
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
       return redirect('admin/view_technicians')->with('success','Data updated successfully ');
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
       return redirect('admin/view_assets')->with('success','Data Updated successfully');
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
      return redirect('/click_customer_bill')->with('success',' Customer Bill Generated ');
 
     }
     function customer_bill(){
      
      $data= customer_tb::all();
      return view ('admin/customer_bill',['customer_tbs'=>$data])->with('success',' Customer Bill Generated ');
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
       return redirect('admin/customer_bill')->with('success',' Customer Bill Generated ');
     }

     function view_request(){
      $data= request_tb::all();
      return view('admin/view_request',['request_tbs'=>$data]);
      
    }

    function view_feedbacks(){
      $data= submitfeedback_tb::all();
      return view('admin/view_feedbacks',['submitfeedback_tbs'=>$data]);
      
    }

    function details_addtechnicians($id){
      $data =request_tb::find( $id);
      return view('admin/details_addtechnicians',['data'=>$data]);
     }
     function update_details(Request $req){
       $data= submitrequest_tb::find($req->id);
     }

     function insert_assignedwork(Request $req){
      $assignwork_tb = new assignwork_tb;
      $assignwork_tb->request_id=$req->request_id;
      
      $assignwork_tb->user_id=$req->user_id;
      $assignwork_tb->request_info=$req->request_info;
      $assignwork_tb->request_desc=$req->request_desc;
      $assignwork_tb->requester_name=$req->requester_name;
      $assignwork_tb->requester_add=$req->requester_add;
      $assignwork_tb->requester_city=$req->requester_city;
      $assignwork_tb->requester_state=$req->requester_state;
      $assignwork_tb->requester_zip=$req->requester_zip;
      $assignwork_tb->requester_email=$req->requester_email;
      $assignwork_tb->requester_mobile=$req->requester_mobile;
      $assignwork_tb->assign_tech=$req->assign_tech;
      $assignwork_tb->assign_date=$req->assign_date;
      $assignwork_tb->save();
      return redirect('admin/view_request')->with('success','action has been taken for the Request ');
    
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
    public function myform(){
      $data =DB::table("technician_tbs")->pluck("empName","empName");
      return view('admin/details_addtechnicians',compact('data'));
     }

     function delete_request($id)
    {
      DB::delete('delete from request_tbs where id = ?', [$id]);
      return redirect('admin/view_request')->with('success','action has been taken for the Request ');
    }
   
    function delete_requester($id)
    {
      DB::delete('delete from submitrequest_tbs where id = ?', [$id]);
      return redirect('admin/view_requester')->with('success','data deleted ');
    }


     function fetch_data_admin(){
      $new_request=DB::table('submitrequest_tbs')->count();
      $request_work_assigned=DB::table('assignwork_tbs')->count();
      $Total_technicians=DB::table('technician_tbs')->count();
      $customer=DB::table('customer_tbs')->count();
      return view('admin/admin_dashboard',compact('new_request','request_work_assigned','Total_technicians','customer'));
    }

   



}
