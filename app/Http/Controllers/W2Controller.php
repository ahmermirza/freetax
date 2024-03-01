<?php

namespace App\Http\Controllers;

use App\W2;
use Illuminate\Http\Request;

class W2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $w_2 = W2::all();
        return view('income.w_2.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $personal = auth()->user()->personals()->first();
        return view('income.w_2.create', compact('personal'));
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
     * @param  \App\W2  $w2
     * @return \Illuminate\Http\Response
     */
    public function show(W2 $w2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\W2  $w2
     * @return \Illuminate\Http\Response
     */
    public function edit(W2 $w2)
    {
        return view('income.w_2.edit', compact('income'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\W2  $w2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, W2 $w2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\W2  $w2
     * @return \Illuminate\Http\Response
     */
    public function destroy(W2 $w2)
    {
        $w2->delete();
        return back();
    }

    public function ministerClergyWages()
    {
        return view('income.w_2.mcw');
    }
}
