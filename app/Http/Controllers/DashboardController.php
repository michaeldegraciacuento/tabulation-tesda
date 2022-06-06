<?php

namespace App\Http\Controllers;

use App\Models\{Contestant,Institution,Qualification,User};
use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $userAuth = \Auth::user('quali_id');

        $getJudge=User::join('institutions','institutions.id','users.tti_id')
                        ->join('qualifications','qualifications.id','users.quali_id')
                        ->select('institutions.tti_name','users.tti_id','users.name','qualifications.quali_name','users.quali_id')
                        ->first();  

        $contestants=Contestant::get();
                 
        $getCon=Contestant::join('institutions','institutions.id','contestants.tti_id')
                    ->where('quali_id',$getJudge->quali_id)
                    ->get()
                    ->keyBy('tti_name');
       return view('dashboard.homepage',compact('getCon','getJudge'));
    }

    public function search(Request $request)
    {
        
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
