@extends('layouts.app')

@section('title', 'Deductions / Credits')

@section('content')
    <div class="d-flex justify-content-center p-lg-4 p-3">
        <div class="col-lg-9 content-shadow shadow-none rounded-3">
            <div class="row p-4 pt-5">
                <div class="d-lg-flex justify-content-between">
                    <i class="fa fa-arrow-left text-primary" aria-hidden="true"></i>
                </div>
            </div>
            <div class="row p-1 pt-0 mx-lg-5 px-lg-5">
                <div class="col-lg-12">
                    <div class="tile">
                        <h2 class="tile-title d-flex justify-content-center text-center h2"><b>Enter your mortgage info from Form
                                1098</b></h2>
                        <form action="{{ route('mortgage-interest.update', $mortgage_interest) }}" method="post">
                            <div class="tile-body">
                                @csrf
                                @method('PUT')
                                <div class="container">
                                    <br>
                                    <div class="row ms-lg-2 ms-0 pt-3 pt-lg-0">
                                        <div class="col-lg-2 col-5 pe-1 d-flex justify-content-center">
                                            <div class="has-danger form-check form-check-inline mb-3 pe-3">
                                                <input class="form-check-input h4" type="radio" name="refinanced"
                                                    id="foreign-yes" value="yes" {{ $mortgage_interest && $mortgage_interest->refinanced == 'yes' ? 'checked' : '' }}>
                                                <label class="form-check-label h6 pt-2" for="foreign-yes"><b>Yes</b></label>
                                            </div>
                                            <div class="has-danger form-check form-check-inline mb-3">
                                                <input class="form-check-input h4" type="radio" name="refinanced"
                                                    id="foreign-no" value="no" {{ isset($mortgage_interest) ? ((isset($mortgage_interest) && $mortgage_interest->refinanced == 'no') ? 'checked' : '') : 'checked' }}>
                                                <label class="form-check-label h6 pt-2" for="foreign-no"><b>No</b></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-7 radio-label-custom-width px-0">
                                            <label class="form-form-label h6 pt-2" for="employer-address">Is
                                                this Form 1098 for a mortgage that was refinanced or sold to another lender
                                                during 2023?</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-11 ms-lg-3">
                                            <label class="form-form-label h6 pb-2" for="lender_name">Lender Name:</label>
                                            <div class="has-danger input-group mb-3">
                                                <input class="form-control @error('lender_name') is-invalid @enderror" id="lender_name"
                                                    name="lender_name" type="text" value="{{ ($mortgage_interest && $mortgage_interest->lender_name != null) ? $mortgage_interest->lender_name : '' }}" aria-label="lender_name"
                                                    aria-describedby="basic-addon2" required>
                                            </div>
                                            <label class="form-form-label h6 pb-2 text-secondary" for="lender_name">The Lender Name is the
                                                financial institution that loaned you the money for your mortgage.</label>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-5 ms-lg-3">
                                            <label class="form-form-label h6 pb-2" for="deductible_mortgage"><b>Box 1</b> -
                                                Deductible Mortgage Interest:</label>
                                            <div class="has-danger input-group mb-3">
                                                <span
                                                    class="input-group-text bg-disabled text-dark @error('deductible_mortgage') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                    id="basic-addon2"><b>$</b></span><input
                                                    class="form-control @error('deductible_mortgage') is-invalid @enderror"
                                                    name="deductible_mortgage" type="number" value="{{ ($mortgage_interest && $mortgage_interest->deductible_mortgage != null) ? $mortgage_interest->deductible_mortgage : '' }}" aria-label="deductible_mortgage"
                                                    aria-describedby="basic-addon2">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-5 ms-lg-3">
                                            <label class="form-form-label h6 pb-2" for="outstanding_mortgage"><b>Box 2</b> -
                                                Outstanding Mortgage Principal:</label>
                                            <div class="has-danger input-group mb-3">
                                                <span
                                                    class="input-group-text bg-disabled text-dark @error('outstanding_mortgage') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                    id="basic-addon2"><b>$</b></span><input
                                                    class="form-control @error('outstanding_mortgage') is-invalid @enderror"
                                                    name="outstanding_mortgage" type="number" value="{{ ($mortgage_interest && $mortgage_interest->outstanding_mortgage != null) ? $mortgage_interest->outstanding_mortgage : '' }}" aria-label="outstanding_mortgage"
                                                    aria-describedby="basic-addon2" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-5 ms-lg-3">
                                            <label class="form-form-label h6 pb-2" for="dob"><b>Box 3</b> - Mortgage
                                                Origination Date:</label>
                                            <div class="has-danger input-group mb-3">
                                                <input class="form-control @error('dob') is-invalid @enderror"
                                                    name="dob" type="date" value="{{ ($mortgage_interest && $mortgage_interest->dob != null) ? $mortgage_interest->dob : '' }}" aria-label="dob"
                                                    aria-describedby="basic-addon2" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-5 ms-lg-3">
                                            <label class="form-form-label h6 pb-2" for="refund_overpaid"><b>Box 4</b> - Refund of
                                                Overpaid Interest:</label>
                                            <div class="has-danger input-group mb-3">
                                                <span
                                                    class="input-group-text bg-disabled text-dark @error('refund_overpaid') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                    id="basic-addon2"><b>$</b></span><input
                                                    class="form-control @error('refund_overpaid') is-invalid @enderror"
                                                    name="refund_overpaid" type="number" value="{{ ($mortgage_interest && $mortgage_interest->refund_overpaid != null) ? $mortgage_interest->refund_overpaid : '' }}" aria-label="refund_overpaid"
                                                    aria-describedby="basic-addon2">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row ms-lg-2 ms-0 pt-3 pt-lg-0">
                                        <label class="form-form-label h6 pb-2 px-0 px-lg-2" for="pmi"><b>Box 5</b> - Mortgage
                                            Insurance Premiums (PMI):</label><br>
                                        <div class="col-lg-2 col-5 pe-1 d-flex justify-content-center">
                                            <div class="has-danger form-check form-check-inline mb-3 pe-3">
                                                <input class="form-check-input h4" type="radio" name="pmi"
                                                    id="pmi-yes" value="yes" {{ $mortgage_interest && $mortgage_interest->pmi == 'yes' ? 'checked' : '' }}>
                                                <label class="form-check-label h6 pt-2"
                                                    for="pmi-yes"><b>Yes</b></label>
                                            </div>
                                            <div class="has-danger form-check form-check-inline mb-3">
                                                <input class="form-check-input h4" type="radio" name="pmi"
                                                    id="pmi-no" value="no" {{ isset($mortgage_interest) ? ((isset($mortgage_interest) && $mortgage_interest->pmi == 'no') ? 'checked' : '') : 'checked' }}>
                                                <label class="form-check-label h6 pt-2" for="pmi-no"><b>No</b></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-7 radio-label-custom-width px-0">
                                            <label class="form-form-label h6 pt-2" for="employer-address">Did
                                                you pay mortgage insurance premiums?</label>
                                        </div>
                                    </div>
                                    <div class="row pt-3 pt-lg-0">
                                        <div class="col-lg-5 ms-lg-3">
                                            <label class="form-form-label h6 pb-2" for="points_paid"><b>Box 6</b> - Points
                                                Paid on Purchase of Principal Residence:</label>
                                            <div class="has-danger input-group mb-3">
                                                <span
                                                    class="input-group-text bg-disabled text-dark @error('points_paid') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                    id="basic-addon2"><b>$</b></span><input
                                                    class="form-control @error('points_paid') is-invalid @enderror"
                                                    name="points_paid" type="number" value="{{ ($mortgage_interest && $mortgage_interest->points_paid != null) ? $mortgage_interest->points_paid : '' }}"
                                                    aria-label="points_paid" aria-describedby="basic-addon2">
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row ms-lg-2 ms-0 pt-0 pt-lg-0">
                                        <div class="col-lg-2 col-5 pe-1 d-flex justify-content-center">
                                            <div class="has-danger form-check form-check-inline mb-3 pe-3">
                                                <input class="form-check-input h4" type="radio" name="money_used"
                                                    id="money_used-yes" value="yes" {{ isset($mortgage_interest) ? ((isset($mortgage_interest) && $mortgage_interest->money_used == 'yes') ? 'checked' : '') : 'checked' }}>
                                                <label class="form-check-label h6 pt-2" for="money_used-yes"><b>Yes</b></label>
                                            </div>
                                            <div class="has-danger form-check form-check-inline mb-3">
                                                <input class="form-check-input h4" type="radio" name="money_used"
                                                    id="money_used-no" value="no" {{ $mortgage_interest && $mortgage_interest->money_used == 'no' ? 'checked' : '' }}>
                                                <label class="form-check-label h6 pt-2" for="money_used-no"><b>No</b></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-7 radio-label-custom-width px-0">
                                            <label class="form-form-label h6 pt-2" for="employer-address">Did you use all of the money from this loan to buy, build, or substantially improve your home?</label>
                                        </div>
                                    </div>
                                    <div class="row ms-lg-2 ms-0 pt-0 pt-lg-0">
                                        <div class="col-lg-2 col-5 pe-1 d-flex justify-content-center">
                                            <div class="has-danger form-check form-check-inline mb-3 pe-3">
                                                <input class="form-check-input h4" type="radio" name="main_home"
                                                    id="main_home-yes" value="yes" {{ isset($mortgage_interest) ? ((isset($mortgage_interest) && $mortgage_interest->main_home == 'yes') ? 'checked' : '') : 'checked' }}>
                                                <label class="form-check-label h6 pt-2" for="main_home-yes"><b>Yes</b></label>
                                            </div>
                                            <div class="has-danger form-check form-check-inline mb-3">
                                                <input class="form-check-input h4" type="radio" name="main_home"
                                                    id="main_home-no" value="no" {{ $mortgage_interest && $mortgage_interest->main_home == 'no' ? 'checked' : '' }}>
                                                <label class="form-check-label h6 pt-2" for="main_home-no"><b>No</b></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-7 radio-label-custom-width px-0">
                                            <label class="form-form-label h6 pt-2" for="employer-address">Was this loan for your main home?</label>
                                        </div>
                                    </div>
                                    <div class="row ms-lg-2 ms-0 pt-3 pt-lg-0">
                                        <div class="col-lg-10 col-12 px-1">
                                            <label class="form-form-label h6 text-secondary" for="employer-address">If your lender reported property taxes on your Form 1098, you can enter that on the next screens.</label>
                                        </div>
                                    </div>
                                </div><br><br>
                                <span class="d-flex justify-content-center">
                                    <hr class="mb-1 mt-0 pt-0 mx-4 w-100">
                                </span><br>
                                <div class="tile-footer d-lg-flex justify-content-between mx-lg-0 mx-4 mb-lg-4">
                                    <div class="row">
                                        <div class="col-lg-8 w-100">
                                            <button class="btn btn-primary rounded-0 d-block d-lg-none mb-2 button-custom-width" type="submit">
                                                <b class="text-light">Save and Continue</b>
                                            </button>
                                            <a class="btn btn-white border border-primary rounded-0 button-custom-width"
                                                href="{{ route('mortgage-interest.index') }}">
                                                <b class="text-primary">Cancel</b>
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

@push('custom-scripts')
    <script>
        const lender_name = document.getElementById('lender_name');
        lender_name.addEventListener('input', function(event) {
            const inputValue = event.target.value;

            // Remove non-alphabetic characters and hyphens from the input value
            const sanitizedValue = inputValue.replace(/[^A-Za-z\- .]/g, '');

            // Update the input field value with the sanitized value
            event.target.value = sanitizedValue;
        });
    </script>
@endpush