<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\submitrequest_tb;
use App\Models\customer_tb;
use App\Models\technician_tb;
use App\Models\assignwork_tb;
use App\Models\assets_tb;


class RequesterController extends Controller
{
    function checkstatus(){

        return view('requester/checkstatus');
      }
  
      function reqcheckstatus(Request $req){
       return redirect('requester/checkstatus');
      }

      public function view_status(Request $request){
        $search = $request->input('search');

        // Search in the title and body columns from the posts table
        $assignwork_tbs = assignwork_tb::query()
            ->where('request_id', 'LIKE', "%{$search}%")
            ->get();
        // Return the search view with the resluts compacted
        return view('requester/checkstatus', compact('assignwork_tbs'));
    }

    function vi(Request $request){
        $search = $request->input('search');

        // Search in the title and body columns from the posts table
        $assignwork_tbs = assignwork_tb::query()
            ->where('request_id', 'LIKE', "%{$search}%")
            ->get();
        
        // Return the search view with the resluts compacted
        return view('requester/status', compact('assignwork_tbs'));

    }

    function request_info(){
        return view('requester/request_info');
    }

    function request(){
        return view('requester/request');
      }

      function addRequest(Request $req){
          $data= array(
       'request_info'=>$req->request_info,
       'request_desc'=>$req->request_desc,
       'requester_name'=>$req->requester_name,
       'requester_add1'=>$req->requester_add1,
       'requester_add2'=>$req->requester_add2,
       'requester_city'=>$req->requester_city,
       'requester_state'=>$req->requester_state,
       'requester_zip'=>$req->requester_zip,
       'requester_email'=>$req->requester_email,
       'requester_mobile'=>$req->requester_mobile,
       'request_date'=>$req->request_date,
          );
          $result =DB::table('submitrequest_tbs')->insertGetId($data);
          
          
          return redirect('requester/request_info')->with('success',"your request id is $result Please keep a note of it for further Process");
      }
 
}
