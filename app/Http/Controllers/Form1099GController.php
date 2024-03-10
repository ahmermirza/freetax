<?php

namespace App\Http\Controllers;

use App\Form1099G;
use Illuminate\Http\Request;

class Form1099GController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $form_1099gs = auth()->user()->personals()->first()->form_1099g()->get();
        return view('income.1099g.index', compact('form_1099gs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personal = auth()->user()->personals()->first();
        return view('income.1099g.create', compact('personal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $personal = auth()->user()->personals()->first();

            // Check if the user has a personal
            if ($personal) {
                $personal->form_1099g()->create([
                    'belongs_to' => $request->belongs_to,
                    'payer_name' => $request->payer_name,
                    'unemployment_compensation' => $request->unemployment_compensation,
                    'federal_income_tax' => $request->federal_income_tax,
                ]);
            }
        return redirect()->route('form1099-g.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Form1099G $form1099_g)
    {
        $personal = auth()->user()->personals()->first();
        return view('income.1099g.edit', compact('form1099_g', 'personal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Form1099G $form1099_g)
    {
        $form1099_g->update([
            'belongs_to' => $request->belongs_to,
            'payer_name' => $request->payer_name,
            'unemployment_compensation' => $request->unemployment_compensation,
            'federal_income_tax' => $request->federal_income_tax,
        ]);
        return redirect()->route('form1099-g.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form1099G $form1099_g)
    {
        $form1099_g->delete();
        return back();
    }
}
