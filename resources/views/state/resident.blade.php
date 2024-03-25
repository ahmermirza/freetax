@extends('layouts.app')

@section('title', 'State')

@section('content')
    <div class="d-flex justify-content-center p-lg-4 p-3">
        <div class="col-lg-9 content-shadow shadow-none rounded-3">
            <div class="row p-4 pt-5">
                <div class="d-lg-flex justify-content-between">
                    <i class="fa fa-arrow-left text-primary" aria-hidden="true"></i>
                </div>
            </div>
            <div class="row p-4 pt-0 mx-lg-5 px-lg-5">
                <div class="col-lg-12">
                    <div class="tile">
                        <h2 class="tile-title d-flex justify-content-center text-center h2"><b>What's you State residency status?</b></h2>
                        @if (isset($state))
                            <form action="{{ route('state.resident.update', $state) }}" method="post">
                                @method('PUT')
                            {{-- @else
                                <form action="{{ route('state.resident.store') }}" method="post"> --}}
                        @endif
                        <div class="tile-body">
                            @csrf
                            <div class="container">
                                <br>
                                <div class="row ps-lg-5">
                                    <div class="col-lg-12 ps-0">
                                        <label class="form-form-label h6 pb-2" for="employer_locality">Based on what you've told us so far, you're probably a Nonresident of State.</label>
                                    </div>
                                    <div class="col-lg-12 pb-5 px-lg-3 px-2 pe-0">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input me-3 h4" name="resident_type"
                                                type="radio" value="full" aria-label="resident_type"
                                                aria-describedby="basic-addon2"
                                                {{ $state && $state->resident_type == 'full' ? 'checked' : '' }}>
                                            <label class="form-check-label h6 pt-2" for="Full-year">Full-year resident</label><br>
                                            <p class="small mb-0">You lived in State for all of 2023 OR maintained a permanent place of residence in State for substantially all of the year and spent more than 183 days in State.</p>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input me-3 h4" name="resident_type"
                                                type="radio" value="part" aria-label="resident_type"
                                                aria-describedby="basic-addon2"
                                                {{ $state && $state->resident_type == 'part' ? 'checked' : '' }}>
                                            <label class="form-check-label h6 pt-2" for="Part-year">Part-year resident</label><br>
                                            <p class="small mb-0">You moved into or out of State during 2023. &nbsp;</p>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input me-3 h4" name="resident_type"
                                                type="radio" value="no" aria-label="resident_type"
                                                aria-describedby="basic-addon2"
                                                {{ $state && $state->resident_type == 'no' ? 'checked' : '' }}>
                                            <label class="form-check-label h6 pt-2" for="Nonresident">Nonresident</label><br>
                                            <p class="small mb-0">You're a resident of a different state, but you worked in State or received State income during 2023. &nbsp;</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="d-flex justify-content-center">
                                <hr class="mb-1 mt-0 pt-0 w-100">
                            </span><br>
                        </div>
                        <div class="tile-footer d-lg-flex justify-content-between mb-lg-4">
                            <div class="row">
                                <div class="col-lg-8 w-100">
                                    <button class="btn btn-primary rounded-0 d-block d-lg-none mb-2 button-custom-width" type="submit">
                                        <b class="text-light">Save and Continue</b>
                                    </button>
                                    <a class="btn btn-white border border-primary rounded-0 button-custom-width"
                                        href="{{ route('state.name.create', $state) }}">
                                        <b class="text-primary">Previous Page</b>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8 w-100">
                                    <button class="btn btn-primary rounded-0 d-none d-lg-block button-custom-width" type="submit">
                                        <b class="text-light">Save and Continue</b>
                                    </button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
