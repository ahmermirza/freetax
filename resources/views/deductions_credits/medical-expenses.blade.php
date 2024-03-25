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
                        <h2 class="tile-title d-flex justify-content-center text-center h2"><b>Tell us about your medical expenses</b></h2>
                        @if (isset($deductions_credit))
                            <form action="{{ route('medical-expenses.update', $deductions_credit) }}" method="post">
                                @method('PUT')
                            @else
                                <form action="{{ route('medical-expenses.store') }}" method="post">
                        @endif
                        <div class="tile-body">
                            @csrf
                            <br>
                            <div class="row mx-1 ms-lg-4">
                                <div class="col-lg-12 ps-3 ps-lg-0">
                                    <b>Enter your medical or dental expenses.</b>
                                </div>
                            </div><br>
                            <div class="row mx-1 ms-lg-4">
                                <div class="norm-text col-sm-12 h6" style="margin-top:4px;" align="left">
                                    <span>
                                        You can only include expenses that you directly paid.
                                        <ul>
                                            <li class="py-1">Don't include insurance premiums deducted from your wages by your employer.</li>
                                            <li class="py-1">Don't include expenses reimbursed by your insurance company.</li>
                                            <li class="py-1">Don't include expenses paid for by a friend or relative.</li>
                                            <li class="py-1">Don't include expenses paid for by a distribution from an HSA/MSA account.</li>
                                            <li class="py-1">Don't include expenses already deducted as a business expense.</li>
                                        </ul>
                                    </span>
                                </div>
                            </div>
                            <div class="row ps-lg-5 pb-3 px-3">
                                <div class="col-lg-11 ps-lg-0 h6">
                                    You can only deduct medical expenses for you, your spouse, and any dependents on Schedule A if those expenses are greater than 7.5% of your adjusted gross income.
                                </div>
                            </div><br>
                            <div class="row mx-1 ms-lg-4">
                                <div class="col-lg-11 ps-lg-0 h6">
                                    <b>Enter all of your medical expenses that you directly paid</b> and we'll calculate the amount you can deduct. The IRS definition of a medical expense is very broad and includes expenses to diagnose, cure, mitigate, treat or prevent disease.
                                </div>
                            </div><br>
                            <div class="row mx-1 ms-lg-4">
                                <div class="col-lg-12 ps-3 ps-lg-0">
                                    <b>Health Insurance Premiums</b>
                                </div>
                            </div>
                            <div class="row mx-1 ms-lg-4">
                                <div class="col-lg-8 ps-3 ps-lg-0">
                                    <label class="form-input-label h6 pt-2" for="health">Enter any health insurance premiums you paid out of pocket during 2023:</label>
                                </div>
                                <div class="col-lg-3">
                                    <div class="has-danger input-group mb-3">
                                        <span
                                            class="input-group-text bg-disabled text-dark @error('health') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                            id="basic-addon2"><b>$</b></span><input
                                            class="form-control @error('health') is-invalid @enderror" name="health"
                                            type="number" value="{{ old('health', $deductions_credit ? $deductions_credit->health : '') }}" aria-label="health"
                                            aria-describedby="basic-addon2">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <span class="d-flex justify-content-center me-lg-5">
                                <hr class="mb-3 mt-0 mx-4 w-100">
                            </span>
                            <div class="row mx-1 ms-lg-4">
                                <div class="col-lg-12 ps-3 ps-lg-0">
                                    <b>Long-Term Care Insurance Premiums</b>
                                </div>
                            </div>
                            <div class="row mx-1 ms-lg-4">
                                <div class="col-lg-8 ps-3 ps-lg-0">
                                    <label class="form-input-label h6 pt-2" for="long_term">Enter the allowable amount of any long-term care insurance premiums you paid during 2023:</label>
                                </div>
                                <div class="col-lg-3">
                                    <div class="has-danger input-group mb-3">
                                        <span
                                            class="input-group-text bg-disabled text-dark @error('long_term') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                            id="basic-addon2"><b>$</b></span><input
                                            class="form-control @error('long_term') is-invalid @enderror" name="long_term"
                                            type="number" value="{{ old('long_term', $deductions_credit ? $deductions_credit->long_term : '') }}" aria-label="long_term"
                                            aria-describedby="basic-addon2">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <span class="d-flex justify-content-center me-lg-5">
                                <hr class="mb-3 mt-0 mx-4 w-100">
                            </span>
                            <div class="row mx-1 ms-lg-4">
                                <div class="col-lg-12 ps-3 ps-lg-0">
                                    <b>Doctor Expenses</b>
                                </div>
                            </div>
                            <div class="row mx-1 ms-lg-4">
                                <div class="col-lg-8 ps-3 ps-lg-0">
                                    <label class="form-input-label h6 pt-2" for="doctor">Enter the amount of medical expenses you paid to doctors, dentists, chiropractors, psychiatrists, and other medical professionals:</label>
                                </div>
                                <div class="col-lg-3">
                                    <div class="has-danger input-group mb-3">
                                        <span
                                            class="input-group-text bg-disabled text-dark @error('doctor') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                            id="basic-addon2"><b>$</b></span><input
                                            class="form-control @error('doctor') is-invalid @enderror" name="doctor"
                                            type="number" value="{{ old('doctor', $deductions_credit ? $deductions_credit->doctor : '') }}" aria-label="doctor"
                                            aria-describedby="basic-addon2">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <span class="d-flex justify-content-center me-lg-5">
                                <hr class="mb-3 mt-0 mx-4 w-100">
                            </span>
                            <div class="row mx-1 ms-lg-4">
                                <div class="col-lg-12 ps-3 ps-lg-0">
                                    <b>Hospital Expenses</b>
                                </div>
                            </div>
                            <div class="row mx-1 ms-lg-4">
                                <div class="col-lg-8 ps-3 ps-lg-0">
                                    <label class="form-input-label h6 pt-2" for="hospital">Enter the amount of medical expenses you paid directly to a hospital:</label>
                                </div>
                                <div class="col-lg-3">
                                    <div class="has-danger input-group mb-3">
                                        <span
                                            class="input-group-text bg-disabled text-dark @error('hospital') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                            id="basic-addon2"><b>$</b></span><input
                                            class="form-control @error('hospital') is-invalid @enderror" name="hospital"
                                            type="number" value="{{ old('hospital', $deductions_credit ? $deductions_credit->hospital : '') }}" aria-label="hospital"
                                            aria-describedby="basic-addon2">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <span class="d-flex justify-content-center me-lg-5">
                                <hr class="mb-3 mt-0 mx-4 w-100">
                            </span>
                            <div class="row mx-1 ms-lg-4">
                                <div class="col-lg-12 ps-3 ps-lg-0">
                                    <b>Prescriptions</b>
                                </div>
                            </div>
                            <div class="row mx-1 ms-lg-4">
                                <div class="col-lg-8 ps-3 ps-lg-0">
                                    <label class="form-input-label h6 pt-2" for="prescriptions">Enter the total amount you spent during 2023 for prescription medications:</label>
                                </div>
                                <div class="col-lg-3">
                                    <div class="has-danger input-group mb-3">
                                        <span
                                            class="input-group-text bg-disabled text-dark @error('prescriptions') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                            id="basic-addon2"><b>$</b></span><input
                                            class="form-control @error('prescriptions') is-invalid @enderror" name="prescriptions"
                                            type="number" value="{{ old('prescriptions', $deductions_credit ? $deductions_credit->prescriptions : '') }}" aria-label="prescriptions"
                                            aria-describedby="basic-addon2">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <span class="d-flex justify-content-center me-lg-5">
                                <hr class="mb-3 mt-0 mx-4 w-100">
                            </span>
                            <div class="row mx-1 ms-lg-4">
                                <div class="col-lg-12 ps-3 ps-lg-0">
                                    <b>Medical Equipment / Supplies</b>
                                </div>
                            </div>
                            <div class="row mx-1 ms-lg-4">
                                <div class="col-lg-8 ps-3 ps-lg-0">
                                    <label class="form-input-label h6 pt-2" for="equipment">Enter the amount you paid for medical equipment and supplies:</label>
                                </div>
                                <div class="col-lg-3">
                                    <div class="has-danger input-group mb-3">
                                        <span
                                            class="input-group-text bg-disabled text-dark @error('equipment') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                            id="basic-addon2"><b>$</b></span><input
                                            class="form-control @error('equipment') is-invalid @enderror" name="equipment"
                                            type="number" value="{{ old('equipment', $deductions_credit ? $deductions_credit->equipment : '') }}" aria-label="equipment"
                                            aria-describedby="basic-addon2">
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-1 ms-lg-4">
                                <div class="col-lg-8 ps-3 ps-lg-0">
                                    <label class="form-input-label text-secondary small" for="travel">This would include money spent for eyeglasses, contact lenses, wheelchair, etc.</label>
                                </div>
                            </div>
                            <br>
                            <span class="d-flex justify-content-center me-lg-5">
                                <hr class="mb-3 mt-0 mx-4 w-100">
                            </span>
                            <div class="row mx-1 ms-lg-4">
                                <div class="col-lg-12 ps-3 ps-lg-0">
                                    <b>Travel Expenses</b>
                                </div>
                            </div>
                            <div class="row mx-1 ms-lg-4">
                                <div class="col-lg-8 ps-3 ps-lg-0">
                                    <label class="form-input-label h6 pt-2" for="travel">Enter the total amount of any travel expenses you paid receiving or undergoing medical procedures:</label>
                                </div>
                                <div class="col-lg-3">
                                    <div class="has-danger input-group mb-3">
                                        <span
                                            class="input-group-text bg-disabled text-dark @error('travel') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                            id="basic-addon2"><b>$</b></span><input
                                            class="form-control @error('travel') is-invalid @enderror" name="travel"
                                            type="number" value="{{ old('travel', $deductions_credit ? $deductions_credit->travel : '') }}" aria-label="travel"
                                            aria-describedby="basic-addon2">
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-1 ms-lg-4">
                                <div class="col-lg-8 ps-3 ps-lg-0">
                                    <label class="form-input-label text-secondary small" for="campaign_contribution">There's a limit of $50 per night for lodging. For automobile expenses, you can either deduct 22.0 cents per mile or deduct your actual automobile expenses for medical travel.</label>
                                </div>
                            </div>
                            <br>
                            <span class="d-flex justify-content-center me-lg-5">
                                <hr class="mb-3 mt-0 mx-4 w-100">
                            </span>
                            <div class="row mx-1 ms-lg-4">
                                <div class="col-lg-12 ps-3 ps-lg-0">
                                    <b>Other Medical Expenses</b>
                                </div>
                            </div>
                            <div class="row mx-1 ms-lg-4">
                                <div class="col-lg-8 ps-3 ps-lg-0">
                                    <label class="form-input-label h6 pt-2" for="other">Enter the amount of any other medical expenses you paid during 2023:</label>
                                </div>
                                <div class="col-lg-3">
                                    <div class="has-danger input-group mb-3">
                                        <span
                                            class="input-group-text bg-disabled text-dark @error('other') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                            id="basic-addon2"><b>$</b></span><input
                                            class="form-control @error('other') is-invalid @enderror" name="other"
                                            type="number" value="{{ old('other', $deductions_credit ? $deductions_credit->other : '') }}" aria-label="other"
                                            aria-describedby="basic-addon2">
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-1 ms-lg-4">
                                <div class="col-lg-8 ps-3 ps-lg-0">
                                    <label class="form-input-label text-secondary small" for="campaign_contribution">The definition of deductible medical expenses is very broad. Examples of miscellaneous deductible medical expenses include: acupuncture, alcoholism treatment, ambulance costs, birth control pills, child birth classes, dentures, drug addiction treatment, dyslexia reading programs and tutors, guide dogs, insulin, laboratory fees, nursing home if for medical treatment, and physical therapy. This is just a sample; there are many other medical deductions available.</label>
                                </div>
                            </div>
                            <br><br>
                            <span class="d-flex justify-content-center">
                                <hr class="mb-3 mt-0 mx-4 w-100">
                            </span>
                        </div>
                        <div class="tile-footer d-lg-flex justify-content-between mx-lg-0 mx-4 mb-lg-4">
                            <div class="row">
                                <div class="col-lg-8 w-100">
                                    <button class="btn btn-primary rounded-0 d-block d-lg-none mb-2 button-custom-width" type="submit">
                                        <b class="text-light">Save and Continue</b>
                                    </button>
                                    <a class="btn btn-white border border-primary rounded-0 button-custom-width"
                                        href="{{ route('charities-donations.create') }}">
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
