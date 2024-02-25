<?php

namespace App\Http\Controllers;

use App\Dependent;
use Illuminate\Http\Request;

class DependentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dependents = Dependent::all();
        return view('personal.dependents.index', compact('dependents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personal.dependents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'relation' => 'required',
            'dob' => 'required',
            'ssn' => 'required',
        ]);

        auth()->user()->personals()->first()->dependents()->create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'relation' => $request->relation,
            'dob' => $request->dob,
            'middle_initial' => $request->middle_initial,
            'suffix' => $request->suffix,
            'ssn' => $request->ssn,
        ]);
        return redirect()->route('dependents.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dependent  $dependent
     * @return \Illuminate\Http\Response
     */
    public function edit(Dependent $dependent)
    {
        return view('personal.dependents.edit', compact('dependent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dependent  $dependent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dependent $dependent)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'relation' => 'required',
            'dob' => 'required',
            'ssn' => 'required',
        ]);

        $dependent->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'relation' => $request->relation,
            'dob' => $request->dob,
            'middle_initial' => $request->middle_initial,
            'suffix' => $request->suffix,
            'ssn' => $request->ssn,
        ]);
        return redirect()->route('dependents.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dependent  $dependent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dependent $dependent)
    {
        $dependent->delete();
        return back();
    }
}
