<?php

namespace App\Http\Controllers;

use App\Models\{User,Qualification,Criteria};
use Illuminate\Http\Request;

class CriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($quali_id)
    {
        $crit = Criteria::where('quali_id', $quali_id)->get();
        $quali = Qualification::where('id', $quali_id)->first();
        $sum = Criteria::select('crit_total')->where('quali_id', $quali_id)->sum('crit_total');
        
        return view('criteria.index',compact('crit', 'quali','sum'));
    }
    public function addCriteria(Request $request)
    {
        $criteria = new Criteria();
        $criteria->crit_name = $request->crit_name;
        $criteria->crit_total = $request->crit_total;
        $criteria->quali_id = $request->quali_id;
        $criteria->save();
        return redirect()->back()->with('success','Successfully Created Criteria');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Criteria  $criteria
     * @return \Illuminate\Http\Response
     */
    public function show(Criteria $criteria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Criteria  $criteria
     * @return \Illuminate\Http\Response
     */
    public function edit(Criteria $criteria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Criteria  $criteria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Criteria $criteria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Criteria  $criteria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Criteria $criteria)
    {
        //
    }
}
