@extends('layouts.app')

@section('title', 'Income')

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
                        <h2 class="tile-title d-lg-flex justify-content-center h2"><b>Did you receive unemployment?</b></h2>
                        @if (isset($income))
                            <form action="{{ route('income.update', $income) }}" method="post">
                                @method('PUT')
                            @else
                                <form action="{{ route('income.store') }}" method="post">
                        @endif
                        <div class="tile-body">
                            @csrf
                            <div class="row ps-5">
                                <div class="col-lg-12 ps-0">
                                    <div class="py-4 h6">If you have state or local income tax refunds reported in Form
                                        1099-G, Box 2 don't enter that here. You can report your state and local refunds on
                                        the Taxable State Refund (Form 1099-G, Box 2) screen.</div>
                                </div>
                            </div>
                            <div class="row ps-5">
                                <div class="col-lg-12 ps-0">
                                    <b>Your Unemployment Compensation</b>
                                </div>
                            </div><br>
                            <div class="row ps-5">
                                <div class="col-lg-11">
                                    <div class="has-danger form-check form-check-inline mb-3">
                                        <input class="form-check-input me-3 h4" name="parent_claim" type="radio"
                                            value="1" aria-label="parent_claim" aria-describedby="basic-addon2"
                                            {{ 1 == 0 ? 'checked' : '' }}>
                                        <label class="form-check-label h6 pt-2" for="parent_claim"><b>Yes</b></label>
                                    </div>
                                    <div class="has-danger form-check form-check-inline mb-3">
                                        <input class="form-check-input me-3 h4" name="parent_claim" type="radio"
                                            value="0" aria-label="parent_claim" aria-describedby="basic-addon2"
                                            {{ 1 == 1 ? 'checked' : '' }}>
                                        <label class="form-check-label h6 pt-2"
                                            for="parent_claim"><b>No</b></label>&nbsp;&nbsp;&nbsp;
                                        <label class="h6 pt-2">Did you receive unemployment compensation reported on a Form
                                            1099-G?
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row ps-5">
                                <div class="col-lg-11">
                                    <div class="has-danger form-check form-check-inline mb-3">
                                        <input class="form-check-input me-3 h4" name="campaign_contribution" type="radio"
                                            value="1" aria-label="campaign_contribution"
                                            aria-describedby="basic-addon2" {{ 1 == 0 ? 'checked' : '' }}>
                                        <label class="form-check-label h6 pt-2"
                                            for="campaign_contribution"><b>Yes</b></label>
                                    </div>
                                    <div class="has-danger form-check form-check-inline mb-3">
                                        <input class="form-check-input me-3 h4" name="campaign_contribution" type="radio"
                                            value="0" aria-label="campaign_contribution"
                                            aria-describedby="basic-addon2" {{ 1 == 1 ? 'checked' : '' }}>
                                        <label class="form-check-label h6 pt-2"
                                            for="campaign_contribution"><b>No</b></label>&nbsp;&nbsp;&nbsp;
                                        <label class="h6 pt-2">Did you receive other unemployment compensation?</label>
                                    </div>
                                    <span class="d-flex justify-content-center">
                                        <hr class="mb-1 w-100">
                                    </span>
                                </div>
                            </div>
                            <br>
                            <div class="row ps-5">
                                <div class="col-lg-12 ps-0">
                                    <b>Your Spouse's Unemployment Compensation</b>
                                </div>
                            </div><br>
                            <div class="row ps-5">
                                <div class="col-lg-11">
                                    <div class="has-danger form-check form-check-inline mb-3">
                                        <input class="form-check-input me-3 h4" name="spouse_unemp_comp" type="radio"
                                            value="1" aria-label="spouse_unemp_comp" aria-describedby="basic-addon2"
                                            {{ 1 == 0 ? 'checked' : '' }}>
                                        <label class="form-check-label h6 pt-2" for="spouse_unemp_comp"><b>Yes</b></label>
                                    </div>
                                    <div class="has-danger form-check form-check-inline mb-3">
                                        <input class="form-check-input me-3 h4" name="spouse_unemp_comp" type="radio"
                                            value="0" aria-label="spouse_unemp_comp" aria-describedby="basic-addon2"
                                            {{ 1 == 1 ? 'checked' : '' }}>
                                        <label class="form-check-label h6 pt-2"
                                            for="spouse_unemp_comp"><b>No</b></label>&nbsp;&nbsp;&nbsp;
                                        <label class="h6 pt-2">Did your spouse receive unemployment compensation reported on a Form
                                            1099-G?
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row ps-5">
                                <div class="col-lg-11">
                                    <div class="has-danger form-check form-check-inline mb-3">
                                        <input class="form-check-input me-3 h4" name="spouse_other_comp" type="radio"
                                            value="1" aria-label="spouse_other_comp"
                                            aria-describedby="basic-addon2" {{ 1 == 0 ? 'checked' : '' }}>
                                        <label class="form-check-label h6 pt-2"
                                            for="spouse_other_comp"><b>Yes</b></label>
                                    </div>
                                    <div class="has-danger form-check form-check-inline mb-3">
                                        <input class="form-check-input me-3 h4" name="spouse_other_comp" type="radio"
                                            value="0" aria-label="spouse_other_comp"
                                            aria-describedby="basic-addon2" {{ 1 == 1 ? 'checked' : '' }}>
                                        <label class="form-check-label h6 pt-2"
                                            for="spouse_other_comp"><b>No</b></label>&nbsp;&nbsp;&nbsp;
                                        <label class="h6 pt-2">Did your spouse receive other unemployment compensation?</label>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <span class="d-flex justify-content-center">
                                <hr class="mb-3 mt-0 w-100">
                            </span>
                        </div>
                    </div>
                    <div class="tile-footer d-flex justify-content-between mb-lg-4">
                        <a class="btn btn-white border border-primary rounded-0" href="#"><i
                                class="me-2 mb-5"></i><b class="text-primary">Previous Page</b></a>&nbsp;&nbsp;&nbsp;
                        <button class="btn btn-primary rounded-0" type="submit"><i class="me-2"></i><b
                                class="text-light">Save and Continue</b></button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection
