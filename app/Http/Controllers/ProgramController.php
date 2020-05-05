<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{

    public function index()
    {
        $data = Program::all();

        return view("programs.index", compact('data'));
    }

    public function create()
    {
        return view('programs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'program_name' => "required|unique:programs",
            'start_date'   => "required|date",
            'end_date'     => "required|date",
        ]);
        Program::create([
            'program_name' => $request->program_name,
            'start_date'   => $request->start_date,
            'end_date'     => $request->end_date
        ]);
        if ('Programs' != '') {
            return redirect()->back()->with("msg", "The Program Added Successfully ");
        } else {
            return "Please fill the form";
        }

    }

    public function show(Program $program)
    {
        //
    }

    public function edit($id)
    {
        return 'Please add the edit file of programs';
    }

    public function update(Request $request, Program $program)
    {
        //
    }


    public function destroy($id)
    {

        $user = Program::findOrFail($id);
        $user->delete();

        return back();

    }
}
