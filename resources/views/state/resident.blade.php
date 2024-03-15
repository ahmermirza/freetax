@extends('layouts.app')

@section('title', 'State')

@section('content')
    <div class="d-flex justify-content-center p-4">
        <div class="col-lg-9 shadow rounded-3">
            <div class="row p-4 pt-5">
                <div class="d-lg-flex justify-content-between">
                    <i class="fa fa-arrow-left text-primary" aria-hidden="true"></i>
                </div>
            </div>
            <div class="row p-4 pt-0 mx-lg-5 px-lg-5">
                <div class="col-lg-12">
                    <div class="tile">
                        <h2 class="tile-title d-lg-flex justify-content-center h2"><b>What's you New York residency status?</b></h2>
                        @if (isset($state))
                            <form action="{{ route('state.name.update', $state) }}" method="post">
                                @method('PUT')
                            @else
                                <form action="{{ route('state.name.store') }}" method="post">
                        @endif
                        <div class="tile-body">
                            @csrf
                            <div class="container">
                                <br>
                                <div class="row ps-5">
                                    <div class="col-lg-12 ps-0">
                                        <label class="form-form-label h6 pb-2" for="employer_locality">Based on what you've told us so far, you're probably a Nonresident of New York.</label>
                                    </div>
                                    <div class="col-lg-12 pb-5">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input me-3 h4" name="resident_type"
                                                type="radio" value="full" aria-label="resident_type"
                                                aria-describedby="basic-addon2"
                                                {{ $state && $state->resident_type == 'full' ? 'checked' : '' }}>
                                            <label class="form-check-label h6 pt-2" for="Full-year">Full-year resident</label><br>
                                            <p class="small mb-0">You lived in New York for all of 2023 OR maintained a permanent place of residence in New York for substantially all of the year and spent more than 183 days in New York.</p>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input me-3 h4" name="resident_type"
                                                type="radio" value="part" aria-label="resident_type"
                                                aria-describedby="basic-addon2"
                                                {{ $state && $state->resident_type == 'part' ? 'checked' : '' }}>
                                            <label class="form-check-label h6 pt-2" for="Part-year">Part-year resident</label><br>
                                            <p class="small mb-0">You moved into or out of New York during 2023. &nbsp;</p>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input me-3 h4" name="resident_type"
                                                type="radio" value="no" aria-label="resident_type"
                                                aria-describedby="basic-addon2"
                                                {{ $state && $state->resident_type == 'no' ? 'checked' : '' }}>
                                            <label class="form-check-label h6 pt-2" for="Nonresident">Nonresident</label><br>
                                            <p class="small mb-0">You're a resident of a different state, but you worked in New York or received New York income during 2023. &nbsp;</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="d-flex justify-content-center">
                                <hr class="mb-1 mt-0 pt-0 w-100">
                            </span><br>
                        </div>
                        <div class="tile-footer d-flex justify-content-between mb-lg-4">
                            <a class="btn btn-white border border-primary rounded-0" href="#"><i
                                    class="me-2 mb-5"></i><b class="text-primary">Previous
                                    Page</b></a>&nbsp;&nbsp;&nbsp;
                            <button class="btn btn-primary rounded-0" type="submit"><i class="me-2"></i><b
                                    class="text-light">Save and Continue</b></button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
