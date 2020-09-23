<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequests;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DoctorListController extends Controller
{
    public function index(Request $request)
    {
        $doctorList = DB::table('doctors')
        ->join('users','doctors.userId','=','users.id')
        ->get();
        return view('admin.doctorList.index')->with('users', $doctorList);

    }
    public function ban($id){
        $doctorList=Doctor::find($id);
        $doctorList->docStatus='Banned';
        $doctorList->save();
        return redirect()->route('admin.doctorList.index',Auth::user()->id);
    }
}
