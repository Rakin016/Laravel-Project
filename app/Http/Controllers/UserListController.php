<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequests;
use App\Models\User;
use Carbon\Carbon;
use http\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class UserListController extends Controller
{
	 	 function index(Request $request){

        $users = DB::table('users')->get();
        return view('admin.userList.index')->with('users', $users);
    }


     function delete($id){
    	
        $user = User::find($id);
        return view('admin.userList.delete')->with('user', $user);

    }


    function destroy($id, Request $request){

        if(User::destroy($id)){
            return redirect()->route('admin.userList.index');
        }else{
            return redirect()->route('admin.userList.delete', $id);
        }
    }


	 	public function search(Request $request,$str){
        $userId=$request->session()->get('userId');
        $response=Http::get('http://localhost:3000/search/'.$userId.'/'.$str);
        return $response->json();
    	}

}
