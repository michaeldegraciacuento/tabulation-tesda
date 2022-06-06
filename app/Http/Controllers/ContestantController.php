<?php

namespace App\Http\Controllers;

use App\Models\{Contestant,Institution,Qualification};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as Image;

class ContestantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $con = Contestant::join('qualifications','qualifications.id','contestants.quali_id')
                            ->join('institutions','institutions.id','contestants.tti_id')
                            ->select('qualifications.quali_name','institutions.tti_abrv','contestants.con_name','contestants.con_image','contestants.con_gender')
                            ->get(); 
        $quali=Qualification::get();
        $tti=Institution::get();
        return view('contestant.index', compact('con','quali','tti'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'con_name' => 'required',
            'con_age' => 'required',
            'con_gender' => 'required',
        ]);
        $con = new Contestant();
        $con->con_name=$request->con_name;
        $con->con_age=$request->con_age;
        $con->con_gender=$request->con_gender;
        $con->tti_id = $request->tti_id;
        $con->quali_id = $request->quali_id;

        if( $request->file('con_image') != null){
            $picture = $request->file('con_image');
            $fileName = time() . '.' . $picture->getClientOriginalExtension();
            $img = Image::make($picture->getRealPath());
            $img->stream();
            $url = Storage::disk('public')->put('uploads/contestant', $picture);
            $con->con_image = $url;
        }
        $con->save();

        $data=array();
        $data['status']= "1";
        Institution::where('id',$request->tti_id)->update($data);
        
        return redirect()->back()->with('success','Successfully Created Contestant!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contestant  $contestant
     * @return \Illuminate\Http\Response
     */
    public function show(Contestant $contestant)
    {

        return view('dashboard._appendContestant',compact('contestant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contestant  $contestant
     * @return \Illuminate\Http\Response
     */
    public function edit(Contestant $contestant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contestant  $contestant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contestant $contestant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contestant  $contestant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contestant $contestant)
    {
        //
    }
    public function contestantShow($tti_id, $quali_id)
    {
            $getCo=Contestant::where('tti_id',$tti_id)->where('quali_id',$quali_id)->get();
            return view('dashboard._appendContestant',compact('getCo'));
    }
}
