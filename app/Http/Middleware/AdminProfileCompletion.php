<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminProfileCompletion
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $admin=DB::table('admins')
            ->where('userId','=',Auth::user()->id)
            ->get();
        
        if(count($admin)) {

            return $next($request);
        }
        else {
            $request->session()->flash('msg','Please Complete Your Profile');
            return redirect()->route('admin.create');
        }

    }
}
