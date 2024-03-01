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
                        <h2 class="tile-title d-lg-flex justify-content-center h2"><b>Wages (Form W-2)</b></h2>
                        <form action="{{ route('w-2.update', 1) }}" method="post">
                            @method('PUT')
                            <div class="tile-body">
                                @csrf
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <br><br>
                                            <div class="row">
                                                <p class="h6">Enter your information as it appears on your W-2 form.</p>
                                                <div class="col-lg-5">
                                                    <br>
                                                    <label class="form-form-label h6" for="ssn"><b>Box A</b> -
                                                        Employee's
                                                        Social Security Number:</label>
                                                    <input type="text" id="ssn" class="form-control" value="123"
                                                        disabled>
                                                    <br>
                                                </div>
                                            </div>
                                            <br>
                                            <label class="h4 mb-0">Employer Information</label>
                                            <span class="d-flex justify-content-center">
                                                <hr class="mb-1 w-100">
                                            </span>
                                            <br>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label class="form-form-label h6" for="ein"><b>Box B</b> - Employer
                                                        Identification Number (EIN):</label>
                                                    <input type="text" id="ein" class="form-control mb-3">
                                                    <label class="form-form-label h6 pb-3" for="employer-name"><b>Box C</b>
                                                        -
                                                        Employer's Name, Address, and Zip Code</label>
                                                    <br>
                                                    <label class="form-form-label h6" for="employer-name">Employer's
                                                        Name:</label>
                                                    <input type="text" id="employer-name" class="form-control">
                                                    <br>
                                                    <div class="form-check form-check-inline ms-3">
                                                        <input class="form-check-input h4" type="radio"
                                                            name="foreign-address" id="foreign-yes" value="yes">
                                                        <label class="form-check-label h6 pt-2"
                                                            for="foreign-yes"><b>Yes</b></label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input h4" type="radio"
                                                            name="foreign-address" id="foreign-no" value="no" checked>
                                                        <label class="form-check-label h6 pt-2"
                                                            for="foreign-no"><b>No</b></label>
                                                    </div>
                                                    <label class="form-form-label h6" for="employer-address">Foreign
                                                        Address?</label>
                                                    <br><br>
                                                    <label class="form-form-label h6" for="employer-city">Employer's
                                                        Address:</label>
                                                    <input type="text" id="employer-address" class="form-control">
                                                    <br>
                                                    <label class="form-form-label h6" for="employer-city">Employer's
                                                        City:</label>
                                                    <input type="text" id="employer-city" class="form-control">
                                                    <br>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label class="form-form-label h6" for="employer-city">Employer's
                                                        State:</label>
                                                    <select name="employers_state" id="employers_state"
                                                        class="form-select @error('code') is-invalid @enderror">
                                                        <option value="" selected></option>
                                                        <option value="AA">AA</option>
                                                        <option value="AE">AE</option>
                                                        <option value="AK">AK</option>
                                                        <option value="AL">AL</option>
                                                        <option value="AP">AP</option>
                                                        <option value="AR">AR</option>
                                                        <option value="AZ">AZ</option>
                                                        <option value="CA">CA</option>
                                                        <option value="CO">CO</option>
                                                        <option value="CT">CT</option>
                                                        <option value="DC">DC</option>
                                                        <option value="DE">DE</option>
                                                        <option value="FL">FL</option>
                                                        <option value="GA">GA</option>
                                                        <option value="HI">HI</option>
                                                        <option value="IA">IA</option>
                                                        <option value="ID">ID</option>
                                                        <option value="IL">IL</option>
                                                        <option value="IN">IN</option>
                                                        <option value="KS">KS</option>
                                                        <option value="KY">KY</option>
                                                        <option value="LA">LA</option>
                                                        <option value="MA">MA</option>
                                                        <option value="MD">MD</option>
                                                        <option value="ME">ME</option>
                                                        <option value="MI">MI</option>
                                                        <option value="MN">MN</option>
                                                        <option value="MO">MO</option>
                                                        <option value="MS">MS</option>
                                                        <option value="MT">MT</option>
                                                        <option value="NC">NC</option>
                                                        <option value="ND">ND</option>
                                                        <option value="NE">NE</option>
                                                        <option value="NH">NH</option>
                                                        <option value="NJ">NJ</option>
                                                        <option value="NM">NM</option>
                                                        <option value="NV">NV</option>
                                                        <option value="NY">NY</option>
                                                        <option value="OH">OH</option>
                                                        <option value="OK">OK</option>
                                                        <option value="OR">OR</option>
                                                        <option value="PA">PA</option>
                                                        <option value="RI">RI</option>
                                                        <option value="SC">SC</option>
                                                        <option value="SD">SD</option>
                                                        <option value="TN">TN</option>
                                                        <option value="TX">TX</option>
                                                        <option value="UT">UT</option>
                                                        <option value="VA">VA</option>
                                                        <option value="VT">VT</option>
                                                        <option value="WA">WA</option>
                                                        <option value="WI">WI</option>
                                                        <option value="WV">WV</option>
                                                        <option value="WY">WY</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="form-form-label h6" for="employer-city">Employer's Zip
                                                        Code:</label>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="has-danger input-group">
                                                                <input
                                                                    class="form-control @error('zip1') is-invalid @enderror"
                                                                    name="zip1" type="text" value=""
                                                                    aria-label="zip1" aria-describedby="basic-addon2">
                                                            </div>
                                                        </div>
                                                        &lowbar;
                                                        <div class="col-lg-4">
                                                            <div class="has-danger input-group">
                                                                <input
                                                                    class="form-control @error('zip2') is-invalid @enderror"
                                                                    name="zip2" type="text" value=""
                                                                    aria-label="zip2" aria-describedby="basic-addon2">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="d-flex justify-content-center">
                                                <hr class="mb-1 w-100">
                                            </span><br><br>
                                            <label class="h4 mb-0">Federal Tax Information</label>
                                            <span class="d-flex justify-content-center">
                                                <hr class="mb-1 w-100">
                                            </span><br><br>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label class="form-form-label h6" for="first_name"><b>Box 1</b> -
                                                        Wages
                                                        and Tips:</label>
                                                    <div class="has-danger input-group mb-3">
                                                        <span
                                                            class="input-group-text bg-disabled text-dark @error('first_name') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                            id="basic-addon2"><b>$</b></span><input
                                                            class="form-control @error('first_name') is-invalid @enderror"
                                                            name="first_name" type="text" value=""
                                                            aria-label="first_name" aria-describedby="basic-addon2">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="form-form-label h6" for="first_name"><b>Box 2</b> -
                                                        Federal
                                                        Income Tax Withheld:</label>
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
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label class="form-form-label h6" for="first_name"><b>Box 3</b> -
                                                        Social
                                                        Security Wages:</label>
                                                    <div class="has-danger input-group mb-3">
                                                        <span
                                                            class="input-group-text bg-disabled text-dark @error('first_name') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                            id="basic-addon2"><b>$</b></span><input
                                                            class="form-control @error('first_name') is-invalid @enderror"
                                                            name="first_name" type="text" value=""
                                                            aria-label="first_name" aria-describedby="basic-addon2">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="form-form-label h6" for="first_name"><b>Box 4</b> -
                                                        Social
                                                        Security Tax Withheld:</label>
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
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label class="form-form-label h6" for="first_name"><b>Box 5</b> -
                                                        Medicare
                                                        Wages and Tips:</label>
                                                    <div class="has-danger input-group mb-3">
                                                        <span
                                                            class="input-group-text bg-disabled text-dark @error('first_name') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                            id="basic-addon2"><b>$</b></span><input
                                                            class="form-control @error('first_name') is-invalid @enderror"
                                                            name="first_name" type="text" value=""
                                                            aria-label="first_name" aria-describedby="basic-addon2">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="form-form-label h6" for="first_name"><b>Box 6</b> -
                                                        Medicare
                                                        Tax Withheld:</label>
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
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label class="form-form-label h6" for="first_name"><b>Box 7</b> -
                                                        Social
                                                        Security Tips:</label>
                                                    <div class="has-danger input-group mb-3">
                                                        <span
                                                            class="input-group-text bg-disabled text-dark @error('first_name') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                            id="basic-addon2"><b>$</b></span><input
                                                            class="form-control @error('first_name') is-invalid @enderror"
                                                            name="first_name" type="text" value=""
                                                            aria-label="first_name" aria-describedby="basic-addon2">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="form-form-label h6" for="first_name"><b>Box 8</b> -
                                                        Allocated Tips:</label>
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
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label class="form-form-label h6" for="first_name"><b>Box
                                                            9</b></label>
                                                    <div class="has-danger input-group mb-3">
                                                        <input
                                                            class="form-control @error('first_name') is-invalid @enderror"
                                                            name="first_name" type="text" value="N/A"
                                                            aria-label="first_name" aria-describedby="basic-addon2"
                                                            disabled>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="form-form-label h6" for="first_name"><b>Box 10</b> -
                                                        Dependent Care Benefits:</label>
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
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label class="form-form-label h6" for="first_name"><b>Box 11</b> -
                                                        Nonqualified Plans:</label>
                                                    <div class="has-danger input-group mb-3">
                                                        <span
                                                            class="input-group-text bg-disabled text-dark @error('first_name') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                            id="basic-addon2"><b>$</b></span><input
                                                            class="form-control @error('first_name') is-invalid @enderror"
                                                            name="first_name" type="text" value=""
                                                            aria-label="first_name" aria-describedby="basic-addon2">
                                                    </div>
                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <label class="form-form-label h6 pb-2" for="first_name"><b>Box
                                                        12</b></label>
                                                <div class="col-lg-6">
                                                    <label class="form-form-label h6 pb-2" for="first_name">Code:</label>
                                                    <div class="has-danger input-group mb-3">
                                                        <select class="form-select @error('code') is-invalid @enderror"
                                                            name="code" aria-label="code"
                                                            aria-describedby="basic-addon2">
                                                            <option value="" selected=""></option>
                                                            <option value="A">A: Uncollected SS or RRTA on tips
                                                            </option>
                                                            <option value="B">B: Uncollected Medicare on tips</option>
                                                            <option value="C">C: Group term life insurance</option>
                                                            <option value="D">D: 401(k) contributions</option>
                                                            <option value="E">E: 403(b) contributions</option>
                                                            <option value="F">F: 408(k)(6) contributions</option>
                                                            <option value="G">G: 457(b) contributions</option>
                                                            <option value="H">H: 501(c)(18)(D) contributions</option>
                                                            <option value="J">J: Nontaxable sick pay</option>
                                                            <option value="K">K: Golden parachute</option>
                                                            <option value="L">L: Expense reimbursements</option>
                                                            <option value="M">M: Uncollected SS or RRTA on insurance
                                                            </option>
                                                            <option value="N">N: Uncollected Medicare on insurance
                                                            </option>
                                                            <option value="P">P: Moving expenses</option>
                                                            <option value="Q">Q: Nontaxable combat pay</option>
                                                            <option value="R">R: Employer MSA contributions</option>
                                                            <option value="S">S: Employee 408(p) contributions
                                                            </option>
                                                            <option value="T">T: Adoption benefits</option>
                                                            <option value="V">V: Non-statutory stock option</option>
                                                            <option value="W">W: Employer HSA contributions</option>
                                                            <option value="Y">Y: 409A contributions</option>
                                                            <option value="Z">Z: 409A income</option>
                                                            <option value="AA">AA: Roth 401(k) contributions</option>
                                                            <option value="BB">BB: Roth 403(b) contributions</option>
                                                            <option value="DD">DD: Employer health coverage</option>
                                                            <option value="EE">EE: Roth 457(b) contributions</option>
                                                            <option value="FF">FF: Small employer health reimbursement
                                                            </option>
                                                            <option value="GG">GG: Section 83(i) qualified equity
                                                                grants
                                                                income</option>
                                                            <option value="HH">HH: End of year Section 83(i) deferral
                                                                elections</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="form-form-label h6 pb-2"
                                                        for="first_name">Amount:</label>
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
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="has-danger input-group mb-3">
                                                        <select class="form-select @error('code') is-invalid @enderror"
                                                            name="code" aria-label="code"
                                                            aria-describedby="basic-addon2">
                                                            <option value="" selected=""></option>
                                                            <option value="A">A: Uncollected SS or RRTA on tips
                                                            </option>
                                                            <option value="B">B: Uncollected Medicare on tips</option>
                                                            <option value="C">C: Group term life insurance</option>
                                                            <option value="D">D: 401(k) contributions</option>
                                                            <option value="E">E: 403(b) contributions</option>
                                                            <option value="F">F: 408(k)(6) contributions</option>
                                                            <option value="G">G: 457(b) contributions</option>
                                                            <option value="H">H: 501(c)(18)(D) contributions</option>
                                                            <option value="J">J: Nontaxable sick pay</option>
                                                            <option value="K">K: Golden parachute</option>
                                                            <option value="L">L: Expense reimbursements</option>
                                                            <option value="M">M: Uncollected SS or RRTA on insurance
                                                            </option>
                                                            <option value="N">N: Uncollected Medicare on insurance
                                                            </option>
                                                            <option value="P">P: Moving expenses</option>
                                                            <option value="Q">Q: Nontaxable combat pay</option>
                                                            <option value="R">R: Employer MSA contributions</option>
                                                            <option value="S">S: Employee 408(p) contributions
                                                            </option>
                                                            <option value="T">T: Adoption benefits</option>
                                                            <option value="V">V: Non-statutory stock option</option>
                                                            <option value="W">W: Employer HSA contributions</option>
                                                            <option value="Y">Y: 409A contributions</option>
                                                            <option value="Z">Z: 409A income</option>
                                                            <option value="AA">AA: Roth 401(k) contributions</option>
                                                            <option value="BB">BB: Roth 403(b) contributions</option>
                                                            <option value="DD">DD: Employer health coverage</option>
                                                            <option value="EE">EE: Roth 457(b) contributions</option>
                                                            <option value="FF">FF: Small employer health reimbursement
                                                            </option>
                                                            <option value="GG">GG: Section 83(i) qualified equity
                                                                grants
                                                                income</option>
                                                            <option value="HH">HH: End of year Section 83(i) deferral
                                                                elections</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="has-danger input-group mb-3">
                                                        <span
                                                            class="input-group-text bg-disabled text-dark @error('first_name') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                            id="basic-addon2"><b>$</b></span><input
                                                            class="form-control @error('first_name') is-invalid @enderror"
                                                            name="first_name" type="text" value=""
                                                            aria-label="first_name" aria-describedby="basic-addon2">
                                                    </div>
                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <label class="form-form-label h6 pb-2" for="first_name"><b>Box
                                                        13</b></label>
                                                <div class="col-lg-4">
                                                    <label class="form-form-label h6 pb-2" for="first_name">Statutory
                                                        Employee</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="form-form-label h6 pb-2" for="first_name">Retirement
                                                        Plan</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="form-form-label h6 pb-2" for="first_name">Third-Party
                                                        Sick
                                                        Pay</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <input
                                                        class="form-check-input @error('address_changed') is-invalid @enderror h4 ms-1"
                                                        name="address_changed" type="checkbox"
                                                        value="{{ $personal && $personal->address_changed == 1 ? $personal->address_changed : '1' }}"
                                                        aria-label="address_changed" aria-describedby="basic-addon2"
                                                        {{ $personal && $personal->address_changed == 1 ? 'checked' : '' }}>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input
                                                        class="form-check-input @error('address_changed') is-invalid @enderror h4 ms-1"
                                                        name="address_changed" type="checkbox"
                                                        value="{{ $personal && $personal->address_changed == 1 ? $personal->address_changed : '1' }}"
                                                        aria-label="address_changed" aria-describedby="basic-addon2"
                                                        {{ $personal && $personal->address_changed == 1 ? 'checked' : '' }}>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input
                                                        class="form-check-input @error('address_changed') is-invalid @enderror h4 ms-1"
                                                        name="address_changed" type="checkbox"
                                                        value="{{ $personal && $personal->address_changed == 1 ? $personal->address_changed : '1' }}"
                                                        aria-label="address_changed" aria-describedby="basic-addon2"
                                                        {{ $personal && $personal->address_changed == 1 ? 'checked' : '' }}>
                                                </div>
                                            </div><br><br>
                                            <div class="row">
                                                <label class="form-form-label h6 pb-2" for="first_name"><b>Box 14</b> -
                                                    Other</label>
                                                <div class="col-lg-6">
                                                    <label class="form-form-label h6 pb-2"
                                                        for="first_name">Description:</label>
                                                    <div class="has-danger input-group mb-3">
                                                        <input
                                                            class="form-control @error('first_name') is-invalid @enderror"
                                                            name="code" type="text" value=""
                                                            aria-label="first_name" aria-describedby="basic-addon2">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="form-form-label h6 pb-2"
                                                        for="first_name">Amount:</label>
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
                                            <label class="h4 mb-0">State and Local Tax Information</label>
                                            <span class="d-flex justify-content-center">
                                                <hr class="mb-1 w-100">
                                            </span><br><br>
                                            <div class="row">
                                                <label class="form-form-label h6 pb-2" for="first_name"><b>Box
                                                        15</b></label>
                                                <div class="col-lg-6">
                                                    <label class="form-form-label h6 pb-2" for="first_name">State:</label>
                                                    <div class="has-danger input-group mb-3">
                                                        <select name="state_tax_info" id="state_tax_info"
                                                            class="form-select @error('code') is-invalid @enderror">
                                                            <option value="" selected></option>
                                                            <option value="AA">AA</option>
                                                            <option value="AE">AE</option>
                                                            <option value="AK">AK</option>
                                                            <option value="AL">AL</option>
                                                            <option value="AP">AP</option>
                                                            <option value="AR">AR</option>
                                                            <option value="AZ">AZ</option>
                                                            <option value="CA">CA</option>
                                                            <option value="CO">CO</option>
                                                            <option value="CT">CT</option>
                                                            <option value="DC">DC</option>
                                                            <option value="DE">DE</option>
                                                            <option value="FL">FL</option>
                                                            <option value="GA">GA</option>
                                                            <option value="HI">HI</option>
                                                            <option value="IA">IA</option>
                                                            <option value="ID">ID</option>
                                                            <option value="IL">IL</option>
                                                            <option value="IN">IN</option>
                                                            <option value="KS">KS</option>
                                                            <option value="KY">KY</option>
                                                            <option value="LA">LA</option>
                                                            <option value="MA">MA</option>
                                                            <option value="MD">MD</option>
                                                            <option value="ME">ME</option>
                                                            <option value="MI">MI</option>
                                                            <option value="MN">MN</option>
                                                            <option value="MO">MO</option>
                                                            <option value="MS">MS</option>
                                                            <option value="MT">MT</option>
                                                            <option value="NC">NC</option>
                                                            <option value="ND">ND</option>
                                                            <option value="NE">NE</option>
                                                            <option value="NH">NH</option>
                                                            <option value="NJ">NJ</option>
                                                            <option value="NM">NM</option>
                                                            <option value="NV">NV</option>
                                                            <option value="NY">NY</option>
                                                            <option value="OH">OH</option>
                                                            <option value="OK">OK</option>
                                                            <option value="OR">OR</option>
                                                            <option value="PA">PA</option>
                                                            <option value="RI">RI</option>
                                                            <option value="SC">SC</option>
                                                            <option value="SD">SD</option>
                                                            <option value="TN">TN</option>
                                                            <option value="TX">TX</option>
                                                            <option value="UT">UT</option>
                                                            <option value="VA">VA</option>
                                                            <option value="VT">VT</option>
                                                            <option value="WA">WA</option>
                                                            <option value="WI">WI</option>
                                                            <option value="WV">WV</option>
                                                            <option value="WY">WY</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="form-form-label h6 pb-2" for="emp_state_id">Employer's
                                                        State
                                                        ID Number::</label>
                                                    <div class="has-danger input-group mb-3">
                                                        <span
                                                            class="input-group-text bg-disabled text-dark @error('emp_state_id') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                            id="basic-addon2"><b>$</b></span><input
                                                            class="form-control @error('emp_state_id') is-invalid @enderror"
                                                            name="emp_state_id" type="text" value=""
                                                            aria-label="emp_state_id" aria-describedby="basic-addon2">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="form-form-label h6 pb-2" for="state_wages_tips"><b>Box
                                                            16</b> - State Wages, Tips, Etc.:</label>
                                                    <div class="has-danger input-group mb-3">
                                                        <select
                                                            class="form-select @error('state_wages_tips') is-invalid @enderror"
                                                            name="state_wages_tips" aria-label="state_wages_tips"
                                                            aria-describedby="basic-addon2">
                                                            <option value="" selected=""></option>
                                                            <option value="A">A: Uncollected SS or RRTA on tips
                                                            </option>
                                                            <option value="B">B: Uncollected Medicare on tips</option>
                                                            <option value="C">C: Group term life insurance</option>
                                                            <option value="D">D: 401(k) contributions</option>
                                                            <option value="E">E: 403(b) contributions</option>
                                                            <option value="F">F: 408(k)(6) contributions</option>
                                                            <option value="G">G: 457(b) contributions</option>
                                                            <option value="H">H: 501(c)(18)(D) contributions</option>
                                                            <option value="J">J: Nontaxable sick pay</option>
                                                            <option value="K">K: Golden parachute</option>
                                                            <option value="L">L: Expense reimbursements</option>
                                                            <option value="M">M: Uncollected SS or RRTA on insurance
                                                            </option>
                                                            <option value="N">N: Uncollected Medicare on insurance
                                                            </option>
                                                            <option value="P">P: Moving expenses</option>
                                                            <option value="Q">Q: Nontaxable combat pay</option>
                                                            <option value="R">R: Employer MSA contributions</option>
                                                            <option value="S">S: Employee 408(p) contributions
                                                            </option>
                                                            <option value="T">T: Adoption benefits</option>
                                                            <option value="V">V: Non-statutory stock option</option>
                                                            <option value="W">W: Employer HSA contributions</option>
                                                            <option value="Y">Y: 409A contributions</option>
                                                            <option value="Z">Z: 409A income</option>
                                                            <option value="AA">AA: Roth 401(k) contributions</option>
                                                            <option value="BB">BB: Roth 403(b) contributions</option>
                                                            <option value="DD">DD: Employer health coverage</option>
                                                            <option value="EE">EE: Roth 457(b) contributions</option>
                                                            <option value="FF">FF: Small employer health reimbursement
                                                            </option>
                                                            <option value="GG">GG: Section 83(i) qualified equity
                                                                grants
                                                                income</option>
                                                            <option value="HH">HH: End of year Section 83(i) deferral
                                                                elections</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="form-form-label h6 pb-2" for="state_income_tax"><b>Box
                                                            17</b> - State Income Tax:</label>
                                                    <div class="has-danger input-group mb-3">
                                                        <span
                                                            class="input-group-text bg-disabled text-dark @error('state_income_tax') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                            id="basic-addon2"><b>$</b></span><input
                                                            class="form-control @error('state_income_tax') is-invalid @enderror"
                                                            name="state_income_tax" type="text" value=""
                                                            aria-label="state_income_tax" aria-describedby="basic-addon2">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <label class="form-form-label h6 pb-2" for="local_wages_tips"><b>Box
                                                            18</b> - Local Wages, Tips, Etc.:</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="form-form-label h6 pb-2" for="loca_income_tax"><b>Box
                                                            19</b>
                                                        - Local Income Tax:</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="form-form-label h6 pb-2" for="locality_name"><b>Box
                                                            20</b> -
                                                        Locality Name:</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="has-danger input-group mb-3">
                                                        <span
                                                            class="input-group-text bg-disabled text-dark @error('state_income_tax') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                            id="basic-addon2"><b>$</b></span><input
                                                            class="form-control @error('state_income_tax') is-invalid @enderror"
                                                            name="state_income_tax" type="text" value=""
                                                            aria-label="state_income_tax" aria-describedby="basic-addon2">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="has-danger input-group mb-3">
                                                        <span
                                                            class="input-group-text bg-disabled text-dark @error('state_income_tax') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                            id="basic-addon2"><b>$</b></span><input
                                                            class="form-control @error('state_income_tax') is-invalid @enderror"
                                                            name="state_income_tax" type="text" value=""
                                                            aria-label="state_income_tax" aria-describedby="basic-addon2">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="has-danger input-group mb-3">
                                                        <input
                                                            class="form-control @error('state_income_tax') is-invalid @enderror"
                                                            name="state_income_tax" type="text" value=""
                                                            aria-label="state_income_tax" aria-describedby="basic-addon2">
                                                    </div>
                                                </div>
                                            </div>
                                            <br><br><br>
                                            <label class="h4 mb-0">Other Information</label>
                                            <span class="d-flex justify-content-center">
                                                <hr class="mb-1 w-100">
                                            </span><br>
                                            <div class="row ms-1">
                                                <div class="col-lg-8 pb-5">
                                                    <div class="has-danger form-check form-check-inline mb-3">
                                                        <input class="form-check-input me-3 h4" name="passed_away"
                                                            type="radio" value="1" aria-label="passed_away"
                                                            aria-describedby="basic-addon2"
                                                            {{ isset($personal) && $personal->passed_away == 1 ? 'checked' : '' }}>
                                                        <label class="form-check-label h6 pt-2" for="passed_away">Standard
                                                            W-2
                                                            (most common)
                                                        </label>
                                                    </div>
                                                    <div class="has-danger form-check form-check-inline mb-3">
                                                        <input class="form-check-input me-3 h4" name="passed_away"
                                                            type="radio" value="0" aria-label="passed_away"
                                                            aria-describedby="basic-addon2"
                                                            {{ isset($personal) && $personal->passed_away == 0 ? 'checked' : '' }}>
                                                        <label class="form-check-label h6 pt-2"
                                                            for="passed_away">Nonstandard
                                                            W-2 (handwritten, altered, or hand-typed)
                                                        </label>&nbsp;&nbsp;&nbsp;
                                                    </div>
                                                    <br>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input h4" type="radio"
                                                            name="foreign-address" id="foreign-yes" value="yes">
                                                        <label class="form-check-label h6 pt-2"
                                                            for="foreign-yes"><b>Yes</b></label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input h4" type="radio"
                                                            name="foreign-address" id="foreign-no" value="no"
                                                            checked>
                                                        <label class="form-check-label h6 pt-2"
                                                            for="foreign-no"><b>No</b></label>
                                                    </div>
                                                    <label class="form-form-label h6" for="employer-address">Is this a
                                                        corrected W-2 from your employer? <span class="text-secondary">(not
                                                            common)</span></label>
                                                </div>
                                                <div class="col-lg-1">
                                                </div>
                                                <span class="d-flex justify-content-center">
                                                    <hr class="mb-1 mt-0 pt-0 w-100">
                                                </span><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tile-footer d-flex justify-content-end mx-lg-5 mb-lg-4">
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
