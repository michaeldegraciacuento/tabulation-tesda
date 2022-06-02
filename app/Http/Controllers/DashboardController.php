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
        $contestants=Contestant::get();
                           
        foreach($contestants as $dd){
            if($dd->quali_id == $userAuth->quali_id){
                $sortContestant = Contestant::join('institutions','institutions.id','contestants.tti_id')
                ->select('institutions.tti_name','institutions.tti_abrv','contestants.con_name','contestants.con_image','contestants.con_gender','contestants.con_age')              
                ->where('quali_id','=',$userAuth->quali_id)
                ->get();
            }  
        }
         $sortContestant->groupBy('tti_name');          
        return view('dashboard.homepage',compact('sortContestant'));
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
