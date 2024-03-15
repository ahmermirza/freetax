<?php

namespace App\Http\Controllers;

use App\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    public function stateIndex() {
        $states = auth()->user()->personals()->first()->state()->get();
        return view('state.index', compact('states'));
    }

    public function stateCreate()
    {
        return view('state.state');
    }

    public function stateStore(Request $request)
    {
        auth()->user()->personals()->first()->state()->create([
            'state_name' => $request->state_name,
        ]);
        return redirect()->route('state.name.create');
    }

    public function stateUpdate(Request $request, State $state)
    {
        $state->update([
            'state_name' => $request->state_name,
        ]);
        return redirect()->route('state.name.create');
    }

    public function stateResidentCreate()
    {
        $state = auth()->user()->personals()->first();
        return view('state.resident', compact('state'));
    }

    public function basicInfo()
    {
        $state = auth()->user()->personals()->first();
        return view('state.basic_info', compact('state'));
    }

    public function useTax()
    {
        $state = auth()->user()->personals()->first();
        return view('state.use_tax', compact('state'));
    }

    public function stateEdit()
    {
        $states = auth()->user()->personals()->first();
        return view('state.state', compact('states'));
    }

    public function completed()
    {
        return view('state.completed');
    }
}
