<?php

namespace App\Http\Controllers;

use App\Models\Guideline;
use Illuminate\Http\Request;

class GuidelineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($quali_id, $crit_id)
    {
        $crit = Guideline::where('crit_id', $crit_id)->get();
        $quali = Qualification::where('id', $quali_id)->first();
        $sum = Criteria::select('crit_total')->where('quali_id', $quali_id)->sum('crit_total');
        
        return view('criteria.index',compact('crit', 'quali','sum'));
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
     * @param  \App\Models\Guideline  $guideline
     * @return \Illuminate\Http\Response
     */
    public function show(Guideline $guideline)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Guideline  $guideline
     * @return \Illuminate\Http\Response
     */
    public function edit(Guideline $guideline)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Guideline  $guideline
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guideline $guideline)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Guideline  $guideline
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guideline $guideline)
    {
        //
    }
}
