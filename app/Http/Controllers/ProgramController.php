<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProgramRequest;
use App\Models\Program;

class ProgramController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Get list of programs
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $programs = Program::latest()->paginate(10);

        return view("programs.index", compact('programs'));
    }

    /**
     * Store new program
     *
     * @param  ProgramRequest  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|string
     */
    public function store(ProgramRequest $request)
    {
       
        Program::create($request->all());

        return redirect('/programs')->with("message", "The Program Added Successfully ");
    }

    /**
     * Edit Program
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $program = Program::findOrFail($id);

        return view('programs.edit', compact('program'));
    }

    /**
     * Update program
     *
     * @param  ProgramRequest  $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(ProgramRequest $request, $id)
    {
        $program = Program::findOrFail($id);
        $program->update($request->all());

        return redirect('/programs');
    }

    /**
     * Get delete program
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $user = Program::findOrFail($id);
        $user->delete();

        return back();
    }
}
