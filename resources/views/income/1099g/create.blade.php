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
                        <h2 class="tile-title d-lg-flex justify-content-center h2"><b>Enter the unemployment info from your
                                1099-G</b></h2>
                        @if (isset($income))
                            <form action="{{ route('income.update', $income) }}" method="post">
                                @method('PUT')
                            @else
                                <form action="{{ route('income.store') }}" method="post">
                        @endif
                        <div class="tile-body">
                            @csrf
                            <div class="container">
                                <br><br>
                                <div class="row d-lg-flex justify-content-center">
                                    <div class="col-lg-10">
                                        <label class="h6 pt-2 form-check-label" for="parent_claim">Who does this Form 1099-G unemployment
                                            compensation belong to?</label><br>
                                        <div class="ms-3 has-danger form-check form-check-inline mb-3">
                                            <input class="form-check-input me-3 h4" name="parent_claim" type="radio"
                                                value="1" aria-label="parent_claim" aria-describedby="basic-addon2"
                                                {{ 1 == 0 ? 'checked' : '' }}>
                                            <label class="form-check-label h6 pt-2" for="parent_claim"><b>Yes</b></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row d-lg-flex justify-content-center">
                                    <div class="col-lg-10">
                                        <div class="ms-3 has-danger form-check form-check-inline mb-3">
                                            <input class="form-check-input me-3 h4" name="campaign_contribution"
                                                type="radio" value="1" aria-label="campaign_contribution"
                                                aria-describedby="basic-addon2" {{ 1 == 0 ? 'checked' : '' }}>
                                            <label class="form-check-label h6 pt-2"
                                                for="campaign_contribution"><b>Yes</b></label>
                                        </div>
                                    </div>
                                </div><br>
                                <div class="row d-lg-flex justify-content-center">
                                    <div class="col-lg-10">
                                        <label class="form-form-label h6 pb-2" for="first_name">Payer's Name:</label>
                                        <div class="has-danger input-group mb-3">
                                            <input
                                                class="form-control @error('first_name') is-invalid @enderror"
                                                name="first_name" type="text" value=""
                                                aria-label="first_name" aria-describedby="basic-addon2">
                                        </div>
                                    </div>
                                </div>
                                <div class="row d-lg-flex justify-content-center">
                                    <div class="col-lg-5">
                                        <label class="form-form-label h6 pb-2" for="first_name"><b>Box 1</b> - Unemployment Compensation:</label>
                                        <div class="has-danger input-group mb-3">
                                            <span
                                                class="input-group-text bg-disabled text-dark @error('first_name') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                id="basic-addon2"><b>$</b></span><input
                                                class="form-control @error('first_name') is-invalid @enderror"
                                                name="first_name" type="text" value=""
                                                aria-label="first_name" aria-describedby="basic-addon2">
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <label class="form-form-label h6 pb-2" for="first_name"><b>Box 4</b> - Federal Income Tax Withheld:</label>
                                        <div class="has-danger input-group mb-3">
                                            <span
                                                class="input-group-text bg-disabled text-dark @error('first_name') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                id="basic-addon2"><b>$</b></span><input
                                                class="form-control @error('first_name') is-invalid @enderror"
                                                name="first_name" type="text" value=""
                                                aria-label="first_name" aria-describedby="basic-addon2">
                                        </div>
                                    </div>
                            </div><br><br>
                            <span class="d-flex justify-content-center">
                                <hr class="mb-3 mt-0 w-100">
                            </span>
                        </div>
                    </div>
                    <div class="tile-footer d-flex justify-content-between mb-lg-4">
                        <a class="btn btn-white border border-primary rounded-0" href="#"><b
                                class="text-primary">Cancel</b></a>&nbsp;&nbsp;&nbsp;
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
