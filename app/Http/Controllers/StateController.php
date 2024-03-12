<?php

namespace App\Http\Controllers;

use App\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    public function stateCreate()
    {
        $state = auth()->user()->personals()->first();
        return view('state.state', compact('state'));
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
}
