<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()
    {
        $prgm = Program::get(); 
        return view('program.index', compact('prgm'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'prgm_name' => 'required',
            'prgm_date' => 'required',
            'prgm_location' => 'required',
        ]);

        Program::create($validated);
        return redirect()->back()->with('success','Successfully Created Program');
    }
    public function edit(Program $program)
    {
        return view('program._update',compact('program'));
    }
    public function update(Request $request, Program $program)
    {
        $validatedData = $request->validate([
            'prgm_name' => '',
            'prgm_date' => '',
            'prgm_location' => '',
        ]);

        $program = $program->update($validatedData);
        return redirect()->back()->with('success','Successfully Updated Program!!');
    }
    public function destroy(Program $program)
    {
        $program->delete();
        return redirect()->back()->with('deleted','Program deleted successfully!!');
    }

}
