<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\submitrequest_tb;
use App\Models\submitfeedback_tb;
use App\Models\request_tb;
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

    function Request_status(Request $request){
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
              'user_id'=>$req->user_id,
       'request_info'=>$req->request_info,
       'request_desc'=>$req->request_desc,
       'requester_name'=>$req->requester_name,
       'requester_add'=>$req->requester_add,
       'requester_city'=>$req->requester_city,
       'requester_state'=>$req->requester_state,
       'requester_zip'=>$req->requester_zip,
       'requester_email'=>$req->requester_email,
       'requester_mobile'=>$req->requester_mobile,
       'request_date'=>$req->request_date,
          );
          $result =DB::table('request_tbs')->insertGetId($data);
          return redirect('requester/request_info')->with('success',"your request id is $result Please keep a note of it for further Process");
      }

      function feedback(){
        return view('requester/feedback');
      }

       function addFeedback(Request $req){
        $submitfeedback_tb = new submitfeedback_tb;
        $submitfeedback_tb->rating=$req->rating;
        $submitfeedback_tb->requester_view=$req->requester_view;
        $submitfeedback_tb->save();
        return redirect('requester/feedback')->with('success','Feedback has been submitted ');
       }

      function old_request(){
        //$data = DB::table('request_tb')->get();
        $user_id=  Auth::user()->id ;
        $data=DB::table('request_tbs')->select('request_info','id','request_desc','request_date','requester_name','requester_add'
        ,'requester_city','requester_state','requester_zip','requester_email','requester_mobile')->where('user_id','=',$user_id)->get();
        return view('requester/old_request', ['data' => $data]);
      }

      function requester_dashboard(){
        $user_id=  Auth::user()->id ;
        $pending_request=DB::table('request_tbs')->select('request_id')->where('user_id','=',$user_id)->count();
        $old_request=DB::table('assignwork_tbs')->select('id')->where('user_id','=',$user_id)->count();
        return view('requester/requester_dashboard',compact('pending_request','old_request'));
      }

      function fetch_data_requester(){
        $user_id=  Auth::user()->id ;
         $pending_request=DB::table('request_tb')->select('request_id')->where('user_id','=',$user_id)->count();
        return view('requester/requester_dashboard',compact('pending_request'));
      }
 
}
