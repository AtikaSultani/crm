<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{

    public function index()
    {
        $data = Program::paginate(10);

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
            return redirect('/programs')->with("msg", "The Program Added Successfully ");
        } else {
            return "Please fill the form";
        }

    }

    public function edit($id)
    {
      $data = Program::find($id);

      return view('programs.edit', compact('data','id'));
    }

    public function update(Request $request,$id)
    {
      $request->validate([
          'program_name' => "required|unique:programs",
          'start_date'   => "required|date",
          'end_date'     => "required|date",
      ]);

      $program=Program::findOrFail($id);
      $program->update([
        'program_name' => $request->program_name,
        'start_date'   => $request->start_date,
        'end_date'     => $request->end_date
      ]);
      return redirect('/programs');
    }


    public function destroy($id)
    {

        $user = Program::findOrFail($id);
        $user->delete();

        return back();

    }
}
