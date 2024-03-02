@extends('layouts.app')

@section('title', 'Deductions / Credits')

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
                        <h2 class="tile-title d-lg-flex justify-content-center h2"><b>Enter your mortgage info from Form
                                1098</b></h2>
                        <form action="{{ route('mortgage-interest.store') }}" method="post">
                            <div class="tile-body">
                                @csrf
                                <div class="container">
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-12 ms-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input h4" type="radio" name="refinanced"
                                                    id="foreign-yes" value="yes">
                                                <label class="form-check-label h6 pt-2" for="foreign-yes"><b>Yes</b></label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input h4" type="radio" name="refinanced"
                                                    id="foreign-no" value="no" checked>
                                                <label class="form-check-label h6 pt-2" for="foreign-no"><b>No</b></label>
                                            </div>
                                            <label class="form-form-label h6 form-check-inline" for="employer-address">Is
                                                this Form 1098 for a mortgage that was refinanced or sold to another lender
                                                during 2023?</label>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-11 ms-3">
                                            <label class="form-form-label h6 pb-2" for="first_name">Lender Name:</label>
                                            <div class="has-danger input-group mb-3">
                                                <input class="form-control @error('first_name') is-invalid @enderror"
                                                    name="first_name" type="text" value="" aria-label="first_name"
                                                    aria-describedby="basic-addon2">
                                            </div>
                                            <label class="form-form-label h6 pb-2 text-secondary" for="first_name">The Lender Name is the
                                                financial institution that loaned you the money for your mortgage.</label>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-5 ms-3">
                                            <label class="form-form-label h6 pb-2" for="first_name"><b>Box 1</b> -
                                                Deductible Mortgage Interest:</label>
                                            <div class="has-danger input-group mb-3">
                                                <span
                                                    class="input-group-text bg-disabled text-dark @error('first_name') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                    id="basic-addon2"><b>$</b></span><input
                                                    class="form-control @error('first_name') is-invalid @enderror"
                                                    name="first_name" type="text" value="" aria-label="first_name"
                                                    aria-describedby="basic-addon2">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-5 ms-3">
                                            <label class="form-form-label h6 pb-2" for="first_name"><b>Box 2</b> -
                                                Outstanding Mortgage Principal:</label>
                                            <div class="has-danger input-group mb-3">
                                                <span
                                                    class="input-group-text bg-disabled text-dark @error('first_name') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                    id="basic-addon2"><b>$</b></span><input
                                                    class="form-control @error('first_name') is-invalid @enderror"
                                                    name="first_name" type="text" value="" aria-label="first_name"
                                                    aria-describedby="basic-addon2">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-5 ms-3">
                                            <label class="form-form-label h6 pb-2" for="first_name"><b>Box 3</b> - Mortgage
                                                Origination Date:</label>
                                            <div class="has-danger input-group mb-3">
                                                <input class="form-control @error('dob') is-invalid @enderror"
                                                    name="dob" type="date" value="" aria-label="dob"
                                                    aria-describedby="basic-addon2">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-5 ms-3">
                                            <label class="form-form-label h6 pb-2" for="first_name"><b>Box 4</b> - Refund of
                                                Overpaid Interest:</label>
                                            <div class="has-danger input-group mb-3">
                                                <span
                                                    class="input-group-text bg-disabled text-dark @error('first_name') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                    id="basic-addon2"><b>$</b></span><input
                                                    class="form-control @error('first_name') is-invalid @enderror"
                                                    name="first_name" type="text" value="" aria-label="first_name"
                                                    aria-describedby="basic-addon2">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 ms-3 pb-3">
                                            <label class="form-form-label h6 pb-2" for="first_name"><b>Box 5</b> - Mortgage
                                                Insurance Premiums (PMI):</label><br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input h4" type="radio" name="foreign-address"
                                                    id="foreign-yes" value="yes">
                                                <label class="form-check-label h6 pt-2"
                                                    for="foreign-yes"><b>Yes</b></label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input h4" type="radio" name="foreign-address"
                                                    id="foreign-no" value="no" checked>
                                                <label class="form-check-label h6 pt-2" for="foreign-no"><b>No</b></label>
                                            </div>
                                            <label class="form-form-label h6 form-check-inline" for="employer-address">Did
                                                you pay mortgage insurance premiums?</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-5 ms-3">
                                            <label class="form-form-label h6 pb-2" for="first_name"><b>Box 6</b> - Points
                                                Paid on Purchase of Principal Residence:</label>
                                            <div class="has-danger input-group mb-3">
                                                <span
                                                    class="input-group-text bg-disabled text-dark @error('first_name') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                    id="basic-addon2"><b>$</b></span><input
                                                    class="form-control @error('first_name') is-invalid @enderror"
                                                    name="first_name" type="text" value=""
                                                    aria-label="first_name" aria-describedby="basic-addon2">
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-12 ms-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input h4" type="radio" name="money_used"
                                                    id="foreign-yes" value="yes" checked>
                                                <label class="form-check-label h6 pt-2" for="foreign-yes"><b>Yes</b></label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input h4" type="radio" name="money_used"
                                                    id="foreign-no" value="no">
                                                <label class="form-check-label h6 pt-2" for="foreign-no"><b>No</b></label>
                                            </div>
                                            <label class="form-form-label h6 form-check-inline" for="employer-address">Did you use all of the money from this loan to buy, build, or substantially improve your home?</label>
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-lg-12 ms-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input h4" type="radio" name="main_home"
                                                    id="foreign-yes" value="yes" checked>
                                                <label class="form-check-label h6 pt-2" for="foreign-yes"><b>Yes</b></label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input h4" type="radio" name="main_home"
                                                    id="foreign-no" value="no">
                                                <label class="form-check-label h6 pt-2" for="foreign-no"><b>No</b></label>
                                            </div>
                                            <label class="form-form-label h6 form-check-inline" for="employer-address">Was this loan for your main home?</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 ms-4">
                                            <label class="form-form-label h6 text-secondary" for="employer-address">If your lender reported property taxes on your Form 1098, you can enter that on the next screens.</label>
                                        </div>
                                    </div>
                                </div><br><br>
                                <span class="d-flex justify-content-center">
                                    <hr class="mb-1 mt-0 pt-0 w-100">
                                </span><br>
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