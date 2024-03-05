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
                        <form action="{{ route('w-2.update', $w_2) }}" method="post">
                            <div class="tile-body">
                                @method('PUT')
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
                                                    <input type="text" id="ein" class="form-control mb-3" value="{{ ($w_2 && $w_2->ein != null) ? $w_2->ein : '' }}"
                                                        name="ein">
                                                    <label class="form-form-label h6 pb-3" for="employer-name"><b>Box C</b>
                                                        -
                                                        Employer's Name, Address, and Zip Code</label>
                                                    <br>
                                                    <label class="form-form-label h6" for="employer-name">Employer's
                                                        Name:</label>
                                                    <input type="text" id="employer-name" class="form-control" value="{{ ($w_2 && $w_2->emp_name != null) ? $w_2->emp_name : '' }}"
                                                        name="emp_name">
                                                    <br>
                                                    <div class="form-check form-check-inline ms-3">
                                                        <input class="form-check-input h4" type="radio"
                                                            name="emp_foreign_address" id="emp_foreign_address_yes"
                                                            value="yes" {{ isset($w_2) && $w_2->emp_foreign_address == 'yes' ? 'checked' : '' }}>
                                                        <label class="form-check-label h6 pt-2"
                                                            for="emp_foreign_address_yes"><b>Yes</b></label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input h4" type="radio"
                                                            name="emp_foreign_address" id="emp_foreign_address_no"
                                                            value="no" {{ isset($w_2) && $w_2->emp_foreign_address == 'no' ? 'checked' : '' }}>
                                                        <label class="form-check-label h6 pt-2"
                                                            for="emp_foreign_address_no"><b>No</b></label>
                                                    </div>
                                                    <label class="form-form-label h6" for="employer-address">Foreign
                                                        Address?</label>
                                                    <br><br>
                                                    <label class="form-form-label h6" for="employer-city">Employer's
                                                        Address:</label>
                                                    <input type="text" id="employer-address" class="form-control" value="{{ ($w_2 && $w_2->emp_address != null) ? $w_2->emp_address : '' }}"
                                                        name="emp_address">
                                                    <br>
                                                    <label class="form-form-label h6" for="employer-city">Employer's
                                                        City:</label>
                                                    <input type="text" id="employer-city" class="form-control" value="{{ ($w_2 && $w_2->emp_city != null) ? $w_2->emp_city : '' }}"
                                                        name="emp_city">
                                                    <br>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label class="form-form-label h6" for="employer-city">Employer's
                                                        State:</label>
                                                    <select name="emp_state" id="employers_state"
                                                        class="form-select @error('code') is-invalid @enderror">
                                                        <option value="" {{ $w_2 && $w_2->emp_state == '' ? 'selected' : '' }}></option>
                                                        <option value="AA" {{ $w_2 && $w_2->emp_state == 'AA' ? 'selected' : '' }}>AA</option>
                                                        <option value="AE" {{ $w_2 && $w_2->emp_state == 'AE' ? 'selected' : '' }}>AE</option>
                                                        <option value="AK" {{ $w_2 && $w_2->emp_state == 'AK' ? 'selected' : '' }}>AK</option>
                                                        <option value="AL" {{ $w_2 && $w_2->emp_state == 'AL' ? 'selected' : '' }}>AL</option>
                                                        <option value="AP" {{ $w_2 && $w_2->emp_state == 'AP' ? 'selected' : '' }}>AP</option>
                                                        <option value="AR" {{ $w_2 && $w_2->emp_state == 'AR' ? 'selected' : '' }}>AR</option>
                                                        <option value="AZ" {{ $w_2 && $w_2->emp_state == 'AZ' ? 'selected' : '' }}>AZ</option>
                                                        <option value="CA" {{ $w_2 && $w_2->emp_state == 'CA' ? 'selected' : '' }}>CA</option>
                                                        <option value="CO" {{ $w_2 && $w_2->emp_state == 'CO' ? 'selected' : '' }}>CO</option>
                                                        <option value="CT" {{ $w_2 && $w_2->emp_state == 'CT' ? 'selected' : '' }}>CT</option>
                                                        <option value="DC" {{ $w_2 && $w_2->emp_state == 'DC' ? 'selected' : '' }}>DC</option>
                                                        <option value="DE" {{ $w_2 && $w_2->emp_state == 'DE' ? 'selected' : '' }}>DE</option>
                                                        <option value="FL" {{ $w_2 && $w_2->emp_state == 'FL' ? 'selected' : '' }}>FL</option>
                                                        <option value="GA" {{ $w_2 && $w_2->emp_state == 'GA' ? 'selected' : '' }}>GA</option>
                                                        <option value="HI" {{ $w_2 && $w_2->emp_state == 'HI' ? 'selected' : '' }}>HI</option>
                                                        <option value="IA" {{ $w_2 && $w_2->emp_state == 'IA' ? 'selected' : '' }}>IA</option>
                                                        <option value="ID" {{ $w_2 && $w_2->emp_state == 'ID' ? 'selected' : '' }}>ID</option>
                                                        <option value="IL" {{ $w_2 && $w_2->emp_state == 'IL' ? 'selected' : '' }}>IL</option>
                                                        <option value="IN" {{ $w_2 && $w_2->emp_state == 'IN' ? 'selected' : '' }}>IN</option>
                                                        <option value="KS" {{ $w_2 && $w_2->emp_state == 'KS' ? 'selected' : '' }}>KS</option>
                                                        <option value="KY" {{ $w_2 && $w_2->emp_state == 'KY' ? 'selected' : '' }}>KY</option>
                                                        <option value="LA" {{ $w_2 && $w_2->emp_state == 'LA' ? 'selected' : '' }}>LA</option>
                                                        <option value="MA" {{ $w_2 && $w_2->emp_state == 'MA' ? 'selected' : '' }}>MA</option>
                                                        <option value="MD" {{ $w_2 && $w_2->emp_state == 'MD' ? 'selected' : '' }}>MD</option>
                                                        <option value="ME" {{ $w_2 && $w_2->emp_state == 'ME' ? 'selected' : '' }}>ME</option>
                                                        <option value="MI" {{ $w_2 && $w_2->emp_state == 'MI' ? 'selected' : '' }}>MI</option>
                                                        <option value="MN" {{ $w_2 && $w_2->emp_state == 'MN' ? 'selected' : '' }}>MN</option>
                                                        <option value="MO" {{ $w_2 && $w_2->emp_state == 'MO' ? 'selected' : '' }}>MO</option>
                                                        <option value="MS" {{ $w_2 && $w_2->emp_state == 'MS' ? 'selected' : '' }}>MS</option>
                                                        <option value="MT" {{ $w_2 && $w_2->emp_state == 'MT' ? 'selected' : '' }}>MT</option>
                                                        <option value="NC" {{ $w_2 && $w_2->emp_state == 'NC' ? 'selected' : '' }}>NC</option>
                                                        <option value="ND" {{ $w_2 && $w_2->emp_state == 'ND' ? 'selected' : '' }}>ND</option>
                                                        <option value="NE" {{ $w_2 && $w_2->emp_state == 'NE' ? 'selected' : '' }}>NE</option>
                                                        <option value="NH" {{ $w_2 && $w_2->emp_state == 'NH' ? 'selected' : '' }}>NH</option>
                                                        <option value="NJ" {{ $w_2 && $w_2->emp_state == 'NJ' ? 'selected' : '' }}>NJ</option>
                                                        <option value="NM" {{ $w_2 && $w_2->emp_state == 'NM' ? 'selected' : '' }}>NM</option>
                                                        <option value="NV" {{ $w_2 && $w_2->emp_state == 'NV' ? 'selected' : '' }}>NV</option>
                                                        <option value="NY" {{ $w_2 && $w_2->emp_state == 'NY' ? 'selected' : '' }}>NY</option>
                                                        <option value="OH" {{ $w_2 && $w_2->emp_state == 'OH' ? 'selected' : '' }}>OH</option>
                                                        <option value="OK" {{ $w_2 && $w_2->emp_state == 'OK' ? 'selected' : '' }}>OK</option>
                                                        <option value="OR" {{ $w_2 && $w_2->emp_state == 'OR' ? 'selected' : '' }}>OR</option>
                                                        <option value="PA" {{ $w_2 && $w_2->emp_state == 'PA' ? 'selected' : '' }}>PA</option>
                                                        <option value="RI" {{ $w_2 && $w_2->emp_state == 'RI' ? 'selected' : '' }}>RI</option>
                                                        <option value="SC" {{ $w_2 && $w_2->emp_state == 'SC' ? 'selected' : '' }}>SC</option>
                                                        <option value="SD" {{ $w_2 && $w_2->emp_state == 'SD' ? 'selected' : '' }}>SD</option>
                                                        <option value="TN" {{ $w_2 && $w_2->emp_state == 'TN' ? 'selected' : '' }}>TN</option>
                                                        <option value="TX" {{ $w_2 && $w_2->emp_state == 'TX' ? 'selected' : '' }}>TX</option>
                                                        <option value="UT" {{ $w_2 && $w_2->emp_state == 'UT' ? 'selected' : '' }}>UT</option>
                                                        <option value="VA" {{ $w_2 && $w_2->emp_state == 'VA' ? 'selected' : '' }}>VA</option>
                                                        <option value="VT" {{ $w_2 && $w_2->emp_state == 'VT' ? 'selected' : '' }}>VT</option>
                                                        <option value="WA" {{ $w_2 && $w_2->emp_state == 'WA' ? 'selected' : '' }}>WA</option>
                                                        <option value="WI" {{ $w_2 && $w_2->emp_state == 'WI' ? 'selected' : '' }}>WI</option>
                                                        <option value="WV" {{ $w_2 && $w_2->emp_state == 'WV' ? 'selected' : '' }}>WV</option>
                                                        <option value="WY" {{ $w_2 && $w_2->emp_state == 'WY' ? 'selected' : '' }}>WY</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="form-form-label h6" for="employer-city">Employer's Zip
                                                        Code:</label>
                                                    <div class="row">
                                                        @php
                                                            $zip_arr = json_decode($w_2->emp_zip, true)
                                                        @endphp
                                                        <div class="col-lg-4">
                                                            <div class="has-danger input-group">
                                                                <input
                                                                    class="form-control @error('emp_zip1') is-invalid @enderror"
                                                                    name="emp_zip1" type="text" value="{{ $zip_arr['emp_zip1'] }}"
                                                                    aria-label="emp_zip1" aria-describedby="basic-addon2">
                                                            </div>
                                                        </div>
                                                        &lowbar;
                                                        <div class="col-lg-4">
                                                            <div class="has-danger input-group">
                                                                <input
                                                                    class="form-control @error('emp_zip2') is-invalid @enderror"
                                                                    name="emp_zip2" type="text" value="{{ $zip_arr['emp_zip2'] }}"
                                                                    aria-label="emp_zip2" aria-describedby="basic-addon2">
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
                                                    <label class="form-form-label h6" for="federal_wages"><b>Box 1</b> -
                                                        Wages
                                                        and Tips:</label>
                                                    <div class="has-danger input-group mb-3">
                                                        <span
                                                            class="input-group-text bg-disabled text-dark @error('federal_wages') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                            id="basic-addon2"><b>$</b></span><input
                                                            class="form-control @error('federal_wages') is-invalid @enderror"
                                                            name="federal_wages" type="text" value="{{ ($w_2 && $w_2->federal_wages != null) ? $w_2->federal_wages : '' }}"
                                                            aria-label="federal_wages" aria-describedby="basic-addon2">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="form-form-label h6" for="federal_income_tax"><b>Box
                                                            2</b> - Federal
                                                        Income Tax Withheld:</label>
                                                    <div class="has-danger input-group mb-3">
                                                        <span
                                                            class="input-group-text bg-disabled text-dark @error('federal_income_tax') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                            id="basic-addon2"><b>$</b></span><input
                                                            class="form-control @error('federal_income_tax') is-invalid @enderror"
                                                            name="federal_income_tax" type="text" value="{{ ($w_2 && $w_2->federal_income_tax != null) ? $w_2->federal_income_tax : '' }}"
                                                            aria-label="federal_income_tax"
                                                            aria-describedby="basic-addon2">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label class="form-form-label h6" for="federal_ss_wages"><b>Box 3</b>
                                                        - Social
                                                        Security Wages:</label>
                                                    <div class="has-danger input-group mb-3">
                                                        <span
                                                            class="input-group-text bg-disabled text-dark @error('federal_ss_wages') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                            id="basic-addon2"><b>$</b></span><input
                                                            class="form-control @error('federal_ss_wages') is-invalid @enderror"
                                                            name="federal_ss_wages" type="text" value="{{ ($w_2 && $w_2->federal_ss_wages != null) ? $w_2->federal_ss_wages : '' }}"
                                                            aria-label="federal_ss_wages" aria-describedby="basic-addon2">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="form-form-label h6" for="federal_ss_tax"><b>Box 4</b> -
                                                        Social
                                                        Security Tax Withheld:</label>
                                                    <div class="has-danger input-group mb-3">
                                                        <span
                                                            class="input-group-text bg-disabled text-dark @error('federal_ss_tax') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                            id="basic-addon2"><b>$</b></span><input
                                                            class="form-control @error('federal_ss_tax') is-invalid @enderror"
                                                            name="federal_ss_tax" type="text" value="{{ ($w_2 && $w_2->federal_ss_tax != null) ? $w_2->federal_ss_tax : '' }}"
                                                            aria-label="federal_ss_tax" aria-describedby="basic-addon2">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label class="form-form-label h6" for="federal_medicare_wages"><b>Box
                                                            5</b> - Medicare
                                                        Wages and Tips:</label>
                                                    <div class="has-danger input-group mb-3">
                                                        <span
                                                            class="input-group-text bg-disabled text-dark @error('federal_medicare_wages') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                            id="basic-addon2"><b>$</b></span><input
                                                            class="form-control @error('federal_medicare_wages') is-invalid @enderror"
                                                            name="federal_medicare_wages" type="text" value="{{ ($w_2 && $w_2->federal_medicare_wages != null) ? $w_2->federal_medicare_wages : '' }}"
                                                            aria-label="federal_medicare_wages"
                                                            aria-describedby="basic-addon2">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="form-form-label h6" for="federal_medicare_tax"><b>Box
                                                            6</b> - Medicare
                                                        Tax Withheld:</label>
                                                    <div class="has-danger input-group mb-3">
                                                        <span
                                                            class="input-group-text bg-disabled text-dark @error('federal_medicare_tax') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                            id="basic-addon2"><b>$</b></span><input
                                                            class="form-control @error('federal_medicare_tax') is-invalid @enderror"
                                                            name="federal_medicare_tax" type="text" value="{{ ($w_2 && $w_2->federal_medicare_tax != null) ? $w_2->federal_medicare_tax : '' }}"
                                                            aria-label="federal_medicare_tax"
                                                            aria-describedby="basic-addon2">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label class="form-form-label h6" for="federal_ss_tips"><b>Box 7</b> -
                                                        Social
                                                        Security Tips:</label>
                                                    <div class="has-danger input-group mb-3">
                                                        <span
                                                            class="input-group-text bg-disabled text-dark @error('federal_ss_tips') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                            id="basic-addon2"><b>$</b></span><input
                                                            class="form-control @error('federal_ss_tips') is-invalid @enderror"
                                                            name="federal_ss_tips" type="text" value="{{ ($w_2 && $w_2->federal_ss_tips != null) ? $w_2->federal_ss_tips : '' }}"
                                                            aria-label="federal_ss_tips" aria-describedby="basic-addon2">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="form-form-label h6" for="federal_allocated_tips"><b>Box
                                                            8</b> -
                                                        Allocated Tips:</label>
                                                    <div class="has-danger input-group mb-3">
                                                        <span
                                                            class="input-group-text bg-disabled text-dark @error('federal_allocated_tips') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                            id="basic-addon2"><b>$</b></span><input
                                                            class="form-control @error('federal_allocated_tips') is-invalid @enderror"
                                                            name="federal_allocated_tips" type="text" value="{{ ($w_2 && $w_2->federal_allocated_tips != null) ? $w_2->federal_allocated_tips : '' }}"
                                                            aria-label="federal_allocated_tips"
                                                            aria-describedby="basic-addon2">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label class="form-form-label h6" for="federal_empty"><b>Box
                                                            9</b></label>
                                                    <div class="has-danger input-group mb-3">
                                                        <input
                                                            class="form-control @error('federal_empty') is-invalid @enderror"
                                                            name="federal_empty" type="text" value="N/A"
                                                            aria-label="federal_empty" aria-describedby="basic-addon2"
                                                            disabled>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="form-form-label h6" for="federal_dependent"><b>Box
                                                            10</b> -
                                                        Dependent Care Benefits:</label>
                                                    <div class="has-danger input-group mb-3">
                                                        <span
                                                            class="input-group-text bg-disabled text-dark @error('federal_dependent') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                            id="basic-addon2"><b>$</b></span><input
                                                            class="form-control @error('federal_dependent') is-invalid @enderror"
                                                            name="federal_dependent" type="text" value="{{ ($w_2 && $w_2->federal_dependent != null) ? $w_2->federal_dependent : '' }}"
                                                            aria-label="federal_dependent"
                                                            aria-describedby="basic-addon2">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label class="form-form-label h6" for="federal_nonqualified"><b>Box
                                                            11</b> -
                                                        Nonqualified Plans:</label>
                                                    <div class="has-danger input-group mb-3">
                                                        <span
                                                            class="input-group-text bg-disabled text-dark @error('federal_nonqualified') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                            id="basic-addon2"><b>$</b></span><input
                                                            class="form-control @error('federal_nonqualified') is-invalid @enderror"
                                                            name="federal_nonqualified" type="text" value="{{ ($w_2 && $w_2->federal_nonqualified != null) ? $w_2->federal_nonqualified : '' }}"
                                                            aria-label="federal_nonqualified"
                                                            aria-describedby="basic-addon2">
                                                    </div>
                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <label class="form-form-label h6 pb-2" for=""><b>Box
                                                        12</b></label>
                                                <div class="col-lg-6">
                                                    <label class="form-form-label h6 pb-2" for="code_1">Code:</label>
                                                    <div class="has-danger input-group mb-3">
                                                        <select class="form-select @error('code_1') is-invalid @enderror"
                                                            name="code_1" aria-label="code_1"
                                                            aria-describedby="basic-addon2">
                                                            <option value="" {{ $w_2 && $w_2->code_1 == '' ? 'selected' : '' }}></option>
                                                            <option value="A" {{ $w_2 && $w_2->code_1 == 'A' ? 'selected' : '' }}>A: Uncollected SS or RRTA on tips</option>
                                                            <option value="B" {{ $w_2 && $w_2->code_1 == 'B' ? 'selected' : '' }}>B: Uncollected Medicare on tips</option>
                                                            <option value="C" {{ $w_2 && $w_2->code_1 == 'C' ? 'selected' : '' }}>C: Group term life insurance</option>
                                                            <option value="D" {{ $w_2 && $w_2->code_1 == 'D' ? 'selected' : '' }}>D: 401(k) contributions</option>
                                                            <option value="E" {{ $w_2 && $w_2->code_1 == 'E' ? 'selected' : '' }}>E: 403(b) contributions</option>
                                                            <option value="F" {{ $w_2 && $w_2->code_1 == 'F' ? 'selected' : '' }}>F: 408(k)(6) contributions</option>
                                                            <option value="G" {{ $w_2 && $w_2->code_1 == 'G' ? 'selected' : '' }}>G: 457(b) contributions</option>
                                                            <option value="H" {{ $w_2 && $w_2->code_1 == 'H' ? 'selected' : '' }}>H: 501(c)(18)(D) contributions</option>
                                                            <option value="J" {{ $w_2 && $w_2->code_1 == 'J' ? 'selected' : '' }}>J: Nontaxable sick pay</option>
                                                            <option value="K" {{ $w_2 && $w_2->code_1 == 'K' ? 'selected' : '' }}>K: Golden parachute</option>
                                                            <option value="L" {{ $w_2 && $w_2->code_1 == 'L' ? 'selected' : '' }}>L: Expense reimbursements</option>
                                                            <option value="M" {{ $w_2 && $w_2->code_1 == 'M' ? 'selected' : '' }}>M: Uncollected SS or RRTA on insurance</option>
                                                            <option value="N" {{ $w_2 && $w_2->code_1 == 'N' ? 'selected' : '' }}>N: Uncollected Medicare on insurance</option>
                                                            <option value="P" {{ $w_2 && $w_2->code_1 == 'P' ? 'selected' : '' }}>P: Moving expenses</option>
                                                            <option value="Q" {{ $w_2 && $w_2->code_1 == 'Q' ? 'selected' : '' }}>Q: Nontaxable combat pay</option>
                                                            <option value="R" {{ $w_2 && $w_2->code_1 == 'R' ? 'selected' : '' }}>R: Employer MSA contributions</option>
                                                            <option value="S" {{ $w_2 && $w_2->code_1 == 'S' ? 'selected' : '' }}>S: Employee 408(p) contributions</option>
                                                            <option value="T" {{ $w_2 && $w_2->code_1 == 'T' ? 'selected' : '' }}>T: Adoption benefits</option>
                                                            <option value="V" {{ $w_2 && $w_2->code_1 == 'V' ? 'selected' : '' }}>V: Non-statutory stock option</option>
                                                            <option value="W" {{ $w_2 && $w_2->code_1 == 'W' ? 'selected' : '' }}>W: Employer HSA contributions</option>
                                                            <option value="Y" {{ $w_2 && $w_2->code_1 == 'Y' ? 'selected' : '' }}>Y: 409A contributions</option>
                                                            <option value="Z" {{ $w_2 && $w_2->code_1 == 'Z' ? 'selected' : '' }}>Z: 409A income</option>
                                                            <option value="AA" {{ $w_2 && $w_2->code_1 == 'AA' ? 'selected' : '' }}>AA: Roth 401(k) contributions</option>
                                                            <option value="BB" {{ $w_2 && $w_2->code_1 == 'BB' ? 'selected' : '' }}>BB: Roth 403(b) contributions</option>
                                                            <option value="DD" {{ $w_2 && $w_2->code_1 == 'DD' ? 'selected' : '' }}>DD: Employer health coverage</option>
                                                            <option value="EE" {{ $w_2 && $w_2->code_1 == 'EE' ? 'selected' : '' }}>EE: Roth 457(b) contributions</option>
                                                            <option value="FF" {{ $w_2 && $w_2->code_1 == 'FF' ? 'selected' : '' }}>FF: Small employer health reimbursement</option>
                                                            <option value="GG" {{ $w_2 && $w_2->code_1 == 'GG' ? 'selected' : '' }}>GG: Section 83(i) qualified equity grants income</option>
                                                            <option value="HH" {{ $w_2 && $w_2->code_1 == 'HH' ? 'selected' : '' }}>HH: End of year Section 83(i) deferral elections</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="form-form-label h6 pb-2" for="amount_1">Amount:</label>
                                                    <div class="has-danger input-group mb-3">
                                                        <span
                                                            class="input-group-text bg-disabled text-dark @error('amount_1') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                            id="basic-addon2"><b>$</b></span><input
                                                            class="form-control @error('amount_1') is-invalid @enderror"
                                                            name="amount_1" type="text" value="{{ ($w_2 && $w_2->amount_1 != null) ? $w_2->amount_1 : '' }}"
                                                            aria-label="amount_1" aria-describedby="basic-addon2">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="has-danger input-group mb-3">
                                                        <select class="form-select @error('code_2') is-invalid @enderror"
                                                            name="code_2" aria-label="code_2"
                                                            aria-describedby="basic-addon2">
                                                            <option value="" {{ $w_2 && $w_2->code_2 == '' ? 'selected' : '' }}></option>
                                                            <option value="A" {{ $w_2 && $w_2->code_2 == 'A' ? 'selected' : '' }}>A: Uncollected SS or RRTA on tips</option>
                                                            <option value="B" {{ $w_2 && $w_2->code_2 == 'B' ? 'selected' : '' }}>B: Uncollected Medicare on tips</option>
                                                            <option value="C" {{ $w_2 && $w_2->code_2 == 'C' ? 'selected' : '' }}>C: Group term life insurance</option>
                                                            <option value="D" {{ $w_2 && $w_2->code_2 == 'D' ? 'selected' : '' }}>D: 401(k) contributions</option>
                                                            <option value="E" {{ $w_2 && $w_2->code_2 == 'E' ? 'selected' : '' }}>E: 403(b) contributions</option>
                                                            <option value="F" {{ $w_2 && $w_2->code_2 == 'F' ? 'selected' : '' }}>F: 408(k)(6) contributions</option>
                                                            <option value="G" {{ $w_2 && $w_2->code_2 == 'G' ? 'selected' : '' }}>G: 457(b) contributions</option>
                                                            <option value="H" {{ $w_2 && $w_2->code_2 == 'H' ? 'selected' : '' }}>H: 501(c)(18)(D) contributions</option>
                                                            <option value="J" {{ $w_2 && $w_2->code_2 == 'J' ? 'selected' : '' }}>J: Nontaxable sick pay</option>
                                                            <option value="K" {{ $w_2 && $w_2->code_2 == 'K' ? 'selected' : '' }}>K: Golden parachute</option>
                                                            <option value="L" {{ $w_2 && $w_2->code_2 == 'L' ? 'selected' : '' }}>L: Expense reimbursements</option>
                                                            <option value="M" {{ $w_2 && $w_2->code_2 == 'M' ? 'selected' : '' }}>M: Uncollected SS or RRTA on insurance</option>
                                                            <option value="N" {{ $w_2 && $w_2->code_2 == 'N' ? 'selected' : '' }}>N: Uncollected Medicare on insurance</option>
                                                            <option value="P" {{ $w_2 && $w_2->code_2 == 'P' ? 'selected' : '' }}>P: Moving expenses</option>
                                                            <option value="Q" {{ $w_2 && $w_2->code_2 == 'Q' ? 'selected' : '' }}>Q: Nontaxable combat pay</option>
                                                            <option value="R" {{ $w_2 && $w_2->code_2 == 'R' ? 'selected' : '' }}>R: Employer MSA contributions</option>
                                                            <option value="S" {{ $w_2 && $w_2->code_2 == 'S' ? 'selected' : '' }}>S: Employee 408(p) contributions</option>
                                                            <option value="T" {{ $w_2 && $w_2->code_2 == 'T' ? 'selected' : '' }}>T: Adoption benefits</option>
                                                            <option value="V" {{ $w_2 && $w_2->code_2 == 'V' ? 'selected' : '' }}>V: Non-statutory stock option</option>
                                                            <option value="W" {{ $w_2 && $w_2->code_2 == 'W' ? 'selected' : '' }}>W: Employer HSA contributions</option>
                                                            <option value="Y" {{ $w_2 && $w_2->code_2 == 'Y' ? 'selected' : '' }}>Y: 409A contributions</option>
                                                            <option value="Z" {{ $w_2 && $w_2->code_2 == 'Z' ? 'selected' : '' }}>Z: 409A income</option>
                                                            <option value="AA" {{ $w_2 && $w_2->code_2 == 'AA' ? 'selected' : '' }}>AA: Roth 401(k) contributions</option>
                                                            <option value="BB" {{ $w_2 && $w_2->code_2 == 'BB' ? 'selected' : '' }}>BB: Roth 403(b) contributions</option>
                                                            <option value="DD" {{ $w_2 && $w_2->code_2 == 'DD' ? 'selected' : '' }}>DD: Employer health coverage</option>
                                                            <option value="EE" {{ $w_2 && $w_2->code_2 == 'EE' ? 'selected' : '' }}>EE: Roth 457(b) contributions</option>
                                                            <option value="FF" {{ $w_2 && $w_2->code_2 == 'FF' ? 'selected' : '' }}>FF: Small employer health reimbursement</option>
                                                            <option value="GG" {{ $w_2 && $w_2->code_2 == 'GG' ? 'selected' : '' }}>GG: Section 83(i) qualified equity grants income</option>
                                                            <option value="HH" {{ $w_2 && $w_2->code_2 == 'HH' ? 'selected' : '' }}>HH: End of year Section 83(i) deferral elections</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="has-danger input-group mb-3">
                                                        <span
                                                            class="input-group-text bg-disabled text-dark @error('amount_2') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                            id="basic-addon2"><b>$</b></span><input
                                                            class="form-control @error('amount_2') is-invalid @enderror"
                                                            name="amount_2" type="text" value="{{ ($w_2 && $w_2->amount_2 != null) ? $w_2->amount_2 : '' }}"
                                                            aria-label="amount_2" aria-describedby="basic-addon2">
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
                                                        class="form-check-input @error('statutory_employee') is-invalid @enderror h4 ms-1"
                                                        name="statutory_employee" type="checkbox"
                                                        value="{{ $w_2 && $w_2->statutory_employee == 1 ? $w_2->statutory_employee : '1' }}"
                                                        aria-label="statutory_employee" aria-describedby="basic-addon2"
                                                        {{ $w_2 && $w_2->statutory_employee == 1 ? 'checked' : '' }}>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input
                                                        class="form-check-input @error('eetirement_plan') is-invalid @enderror h4 ms-1"
                                                        name="eetirement_plan" type="checkbox"
                                                        value="{{ $w_2 && $w_2->eetirement_plan == 1 ? $w_2->eetirement_plan : '1' }}"
                                                        aria-label="eetirement_plan" aria-describedby="basic-addon2"
                                                        {{ $w_2 && $w_2->eetirement_plan == 1 ? 'checked' : '' }}>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input
                                                        class="form-check-input @error('third_party_pay') is-invalid @enderror h4 ms-1"
                                                        name="third_party_pay" type="checkbox"
                                                        value="{{ $w_2 && $w_2->third_party_pay == 1 ? $w_2->third_party_pay : '1' }}"
                                                        aria-label="third_party_pay" aria-describedby="basic-addon2"
                                                        {{ $w_2 && $w_2->third_party_pay == 1 ? 'checked' : '' }}>
                                                </div>
                                            </div><br><br>
                                            <div class="row">
                                                <label class="form-form-label h6 pb-2" for="other_desc"><b>Box 14</b> -
                                                    Other</label>
                                                <div class="col-lg-6">
                                                    <label class="form-form-label h6 pb-2"
                                                        for="other_desc">Description:</label>
                                                    <div class="has-danger input-group mb-3">
                                                        <input
                                                            class="form-control @error('other_desc') is-invalid @enderror"
                                                            name="other_desc" type="text" value="{{ ($w_2 && $w_2->other_desc != null) ? $w_2->other_desc : '' }}"
                                                            aria-label="other_desc" aria-describedby="basic-addon2">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="form-form-label h6 pb-2"
                                                        for="other_amount">Amount:</label>
                                                    <div class="has-danger input-group mb-3">
                                                        <span
                                                            class="input-group-text bg-disabled text-dark @error('other_amount') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                            id="basic-addon2"><b>$</b></span><input
                                                            class="form-control @error('other_amount') is-invalid @enderror"
                                                            name="other_amount" type="text" value="{{ ($w_2 && $w_2->other_amount != null) ? $w_2->other_amount : '' }}"
                                                            aria-label="other_amount" aria-describedby="basic-addon2">
                                                    </div>
                                                </div>
                                            </div><br><br>
                                            <label class="h4 mb-0">State and Local Tax Information</label>
                                            <span class="d-flex justify-content-center">
                                                <hr class="mb-1 w-100">
                                            </span><br><br>
                                            <div class="row">
                                                <label class="form-form-label h6 pb-2" for="employer_state"><b>Box
                                                        15</b></label>
                                                <div class="col-lg-6">
                                                    <label class="form-form-label h6 pb-2"
                                                        for="employer_state">State:</label>
                                                    <div class="has-danger input-group mb-3">
                                                        <select name="employer_state" id="employer_state" class="form-select @error('employer_state') is-invalid @enderror">
                                                            <option value="" {{ $w_2 && $w_2->employer_state == '' ? 'selected' : '' }}></option>
                                                            <option value="AA" {{ $w_2 && $w_2->employer_state == 'AA' ? 'selected' : '' }}>AA</option>
                                                            <option value="AE" {{ $w_2 && $w_2->employer_state == 'AE' ? 'selected' : '' }}>AE</option>
                                                            <option value="AK" {{ $w_2 && $w_2->employer_state == 'AK' ? 'selected' : '' }}>AK</option>
                                                            <option value="AL" {{ $w_2 && $w_2->employer_state == 'AL' ? 'selected' : '' }}>AL</option>
                                                            <option value="AP" {{ $w_2 && $w_2->employer_state == 'AP' ? 'selected' : '' }}>AP</option>
                                                            <option value="AR" {{ $w_2 && $w_2->employer_state == 'AR' ? 'selected' : '' }}>AR</option>
                                                            <option value="AZ" {{ $w_2 && $w_2->employer_state == 'AZ' ? 'selected' : '' }}>AZ</option>
                                                            <option value="CA" {{ $w_2 && $w_2->employer_state == 'CA' ? 'selected' : '' }}>CA</option>
                                                            <option value="CO" {{ $w_2 && $w_2->employer_state == 'CO' ? 'selected' : '' }}>CO</option>
                                                            <option value="CT" {{ $w_2 && $w_2->employer_state == 'CT' ? 'selected' : '' }}>CT</option>
                                                            <option value="DC" {{ $w_2 && $w_2->employer_state == 'DC' ? 'selected' : '' }}>DC</option>
                                                            <option value="DE" {{ $w_2 && $w_2->employer_state == 'DE' ? 'selected' : '' }}>DE</option>
                                                            <option value="FL" {{ $w_2 && $w_2->employer_state == 'FL' ? 'selected' : '' }}>FL</option>
                                                            <option value="GA" {{ $w_2 && $w_2->employer_state == 'GA' ? 'selected' : '' }}>GA</option>
                                                            <option value="HI" {{ $w_2 && $w_2->employer_state == 'HI' ? 'selected' : '' }}>HI</option>
                                                            <option value="IA" {{ $w_2 && $w_2->employer_state == 'IA' ? 'selected' : '' }}>IA</option>
                                                            <option value="ID" {{ $w_2 && $w_2->employer_state == 'ID' ? 'selected' : '' }}>ID</option>
                                                            <option value="IL" {{ $w_2 && $w_2->employer_state == 'IL' ? 'selected' : '' }}>IL</option>
                                                            <option value="IN" {{ $w_2 && $w_2->employer_state == 'IN' ? 'selected' : '' }}>IN</option>
                                                            <option value="KS" {{ $w_2 && $w_2->employer_state == 'KS' ? 'selected' : '' }}>KS</option>
                                                            <option value="KY" {{ $w_2 && $w_2->employer_state == 'KY' ? 'selected' : '' }}>KY</option>
                                                            <option value="LA" {{ $w_2 && $w_2->employer_state == 'LA' ? 'selected' : '' }}>LA</option>
                                                            <option value="MA" {{ $w_2 && $w_2->employer_state == 'MA' ? 'selected' : '' }}>MA</option>
                                                            <option value="MD" {{ $w_2 && $w_2->employer_state == 'MD' ? 'selected' : '' }}>MD</option>
                                                            <option value="ME" {{ $w_2 && $w_2->employer_state == 'ME' ? 'selected' : '' }}>ME</option>
                                                            <option value="MI" {{ $w_2 && $w_2->employer_state == 'MI' ? 'selected' : '' }}>MI</option>
                                                            <option value="MN" {{ $w_2 && $w_2->employer_state == 'MN' ? 'selected' : '' }}>MN</option>
                                                            <option value="MO" {{ $w_2 && $w_2->employer_state == 'MO' ? 'selected' : '' }}>MO</option>
                                                            <option value="MS" {{ $w_2 && $w_2->employer_state == 'MS' ? 'selected' : '' }}>MS</option>
                                                            <option value="MT" {{ $w_2 && $w_2->employer_state == 'MT' ? 'selected' : '' }}>MT</option>
                                                            <option value="NC" {{ $w_2 && $w_2->employer_state == 'NC' ? 'selected' : '' }}>NC</option>
                                                            <option value="ND" {{ $w_2 && $w_2->employer_state == 'ND' ? 'selected' : '' }}>ND</option>
                                                            <option value="NE" {{ $w_2 && $w_2->employer_state == 'NE' ? 'selected' : '' }}>NE</option>
                                                            <option value="NH" {{ $w_2 && $w_2->employer_state == 'NH' ? 'selected' : '' }}>NH</option>
                                                            <option value="NJ" {{ $w_2 && $w_2->employer_state == 'NJ' ? 'selected' : '' }}>NJ</option>
                                                            <option value="NM" {{ $w_2 && $w_2->employer_state == 'NM' ? 'selected' : '' }}>NM</option>
                                                            <option value="NV" {{ $w_2 && $w_2->employer_state == 'NV' ? 'selected' : '' }}>NV</option>
                                                            <option value="NY" {{ $w_2 && $w_2->employer_state == 'NY' ? 'selected' : '' }}>NY</option>
                                                            <option value="OH" {{ $w_2 && $w_2->employer_state == 'OH' ? 'selected' : '' }}>OH</option>
                                                            <option value="OK" {{ $w_2 && $w_2->employer_state == 'OK' ? 'selected' : '' }}>OK</option>
                                                            <option value="OR" {{ $w_2 && $w_2->employer_state == 'OR' ? 'selected' : '' }}>OR</option>
                                                            <option value="PA" {{ $w_2 && $w_2->employer_state == 'PA' ? 'selected' : '' }}>PA</option>
                                                            <option value="RI" {{ $w_2 && $w_2->employer_state == 'RI' ? 'selected' : '' }}>RI</option>
                                                            <option value="SC" {{ $w_2 && $w_2->employer_state == 'SC' ? 'selected' : '' }}>SC</option>
                                                            <option value="SD" {{ $w_2 && $w_2->employer_state == 'SD' ? 'selected' : '' }}>SD</option>
                                                            <option value="TN" {{ $w_2 && $w_2->employer_state == 'TN' ? 'selected' : '' }}>TN</option>
                                                            <option value="TX" {{ $w_2 && $w_2->employer_state == 'TX' ? 'selected' : '' }}>TX</option>
                                                            <option value="UT" {{ $w_2 && $w_2->employer_state == 'UT' ? 'selected' : '' }}>UT</option>
                                                            <option value="VA" {{ $w_2 && $w_2->employer_state == 'VA' ? 'selected' : '' }}>VA</option>
                                                            <option value="VT" {{ $w_2 && $w_2->employer_state == 'VT' ? 'selected' : '' }}>VT</option>
                                                            <option value="WA" {{ $w_2 && $w_2->employer_state == 'WA' ? 'selected' : '' }}>WA</option>
                                                            <option value="WI" {{ $w_2 && $w_2->employer_state == 'WI' ? 'selected' : '' }}>WI</option>
                                                            <option value="WV" {{ $w_2 && $w_2->employer_state == 'WV' ? 'selected' : '' }}>WV</option>
                                                            <option value="WY" {{ $w_2 && $w_2->employer_state == 'WY' ? 'selected' : '' }}>WY</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="form-form-label h6 pb-2" for="employer_sin">Employer's
                                                        State
                                                        ID Number::</label>
                                                    <div class="has-danger input-group mb-3">
                                                        <span
                                                            class="input-group-text bg-disabled text-dark @error('employer_sin') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                            id="basic-addon2"><b>$</b></span><input
                                                            class="form-control @error('employer_sin') is-invalid @enderror"
                                                            name="employer_sin" type="text" value="{{ ($w_2 && $w_2->employer_sin != null) ? $w_2->employer_sin : '' }}"
                                                            aria-label="employer_sin" aria-describedby="basic-addon2">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="form-form-label h6 pb-2"
                                                        for="employer_state_wages"><b>Box
                                                            16</b> - State Wages, Tips, Etc.:</label>
                                                    <div class="has-danger input-group mb-3">
                                                        <select class="form-select @error('employer_state_wages') is-invalid @enderror"
                                                            name="employer_state_wages" aria-label="employer_state_wages"
                                                            aria-describedby="basic-addon2">
                                                            <option value="" {{ $w_2 && $w_2->employer_state_wages == '' ? 'selected' : '' }}></option>
                                                            <option value="A" {{ $w_2 && $w_2->employer_state_wages == 'A' ? 'selected' : '' }}>A: Uncollected SS or RRTA on tips</option>
                                                            <option value="B" {{ $w_2 && $w_2->employer_state_wages == 'B' ? 'selected' : '' }}>B: Uncollected Medicare on tips</option>
                                                            <option value="C" {{ $w_2 && $w_2->employer_state_wages == 'C' ? 'selected' : '' }}>C: Group term life insurance</option>
                                                            <option value="D" {{ $w_2 && $w_2->employer_state_wages == 'D' ? 'selected' : '' }}>D: 401(k) contributions</option>
                                                            <option value="E" {{ $w_2 && $w_2->employer_state_wages == 'E' ? 'selected' : '' }}>E: 403(b) contributions</option>
                                                            <option value="F" {{ $w_2 && $w_2->employer_state_wages == 'F' ? 'selected' : '' }}>F: 408(k)(6) contributions</option>
                                                            <option value="G" {{ $w_2 && $w_2->employer_state_wages == 'G' ? 'selected' : '' }}>G: 457(b) contributions</option>
                                                            <option value="H" {{ $w_2 && $w_2->employer_state_wages == 'H' ? 'selected' : '' }}>H: 501(c)(18)(D) contributions</option>
                                                            <option value="J" {{ $w_2 && $w_2->employer_state_wages == 'J' ? 'selected' : '' }}>J: Nontaxable sick pay</option>
                                                            <option value="K" {{ $w_2 && $w_2->employer_state_wages == 'K' ? 'selected' : '' }}>K: Golden parachute</option>
                                                            <option value="L" {{ $w_2 && $w_2->employer_state_wages == 'L' ? 'selected' : '' }}>L: Expense reimbursements</option>
                                                            <option value="M" {{ $w_2 && $w_2->employer_state_wages == 'M' ? 'selected' : '' }}>M: Uncollected SS or RRTA on insurance</option>
                                                            <option value="N" {{ $w_2 && $w_2->employer_state_wages == 'N' ? 'selected' : '' }}>N: Uncollected Medicare on insurance</option>
                                                            <option value="P" {{ $w_2 && $w_2->employer_state_wages == 'P' ? 'selected' : '' }}>P: Moving expenses</option>
                                                            <option value="Q" {{ $w_2 && $w_2->employer_state_wages == 'Q' ? 'selected' : '' }}>Q: Nontaxable combat pay</option>
                                                            <option value="R" {{ $w_2 && $w_2->employer_state_wages == 'R' ? 'selected' : '' }}>R: Employer MSA contributions</option>
                                                            <option value="S" {{ $w_2 && $w_2->employer_state_wages == 'S' ? 'selected' : '' }}>S: Employee 408(p) contributions</option>
                                                            <option value="T" {{ $w_2 && $w_2->employer_state_wages == 'T' ? 'selected' : '' }}>T: Adoption benefits</option>
                                                            <option value="V" {{ $w_2 && $w_2->employer_state_wages == 'V' ? 'selected' : '' }}>V: Non-statutory stock option</option>
                                                            <option value="W" {{ $w_2 && $w_2->employer_state_wages == 'W' ? 'selected' : '' }}>W: Employer HSA contributions</option>
                                                            <option value="Y" {{ $w_2 && $w_2->employer_state_wages == 'Y' ? 'selected' : '' }}>Y: 409A contributions</option>
                                                            <option value="Z" {{ $w_2 && $w_2->employer_state_wages == 'Z' ? 'selected' : '' }}>Z: 409A income</option>
                                                            <option value="AA" {{ $w_2 && $w_2->employer_state_wages == 'AA' ? 'selected' : '' }}>AA: Roth 401(k) contributions</option>
                                                            <option value="BB" {{ $w_2 && $w_2->employer_state_wages == 'BB' ? 'selected' : '' }}>BB: Roth 403(b) contributions</option>
                                                            <option value="DD" {{ $w_2 && $w_2->employer_state_wages == 'DD' ? 'selected' : '' }}>DD: Employer health coverage</option>
                                                            <option value="EE" {{ $w_2 && $w_2->employer_state_wages == 'EE' ? 'selected' : '' }}>EE: Roth 457(b) contributions</option>
                                                            <option value="FF" {{ $w_2 && $w_2->employer_state_wages == 'FF' ? 'selected' : '' }}>FF: Small employer health reimbursement</option>
                                                            <option value="GG" {{ $w_2 && $w_2->employer_state_wages == 'GG' ? 'selected' : '' }}>GG: Section 83(i) qualified equity grants income</option>
                                                            <option value="HH" {{ $w_2 && $w_2->employer_state_wages == 'HH' ? 'selected' : '' }}>HH: End of year Section 83(i) deferral elections</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="form-form-label h6 pb-2"
                                                        for="employer_state_income_tax"><b>Box
                                                            17</b> - State Income Tax:</label>
                                                    <div class="has-danger input-group mb-3">
                                                        <span
                                                            class="input-group-text bg-disabled text-dark @error('employer_state_income_tax') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                            id="basic-addon2"><b>$</b></span><input
                                                            class="form-control @error('employer_state_income_tax') is-invalid @enderror"
                                                            name="employer_state_income_tax" type="text"
                                                            value="{{ ($w_2 && $w_2->employer_state_income_tax != null) ? $w_2->employer_state_income_tax : '' }}" aria-label="employer_state_income_tax"
                                                            aria-describedby="basic-addon2">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <label class="form-form-label h6 pb-2"
                                                        for="employer_local_wages"><b>Box
                                                            18</b> - Local Wages, Tips, Etc.:</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="form-form-label h6 pb-2"
                                                        for="employer_local_income_tax"><b>Box 19</b>
                                                        - Local Income Tax:</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="form-form-label h6 pb-2" for="employer_locality"><b>Box
                                                            20</b> -
                                                        Locality Name:</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="has-danger input-group mb-3">
                                                        <span
                                                            class="input-group-text bg-disabled text-dark @error('employer_local_wages') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                            id="basic-addon2"><b>$</b></span><input
                                                            class="form-control @error('employer_local_wages') is-invalid @enderror"
                                                            name="employer_local_wages" type="text" value="{{ ($w_2 && $w_2->employer_local_wages != null) ? $w_2->employer_local_wages : '' }}"
                                                            aria-label="employer_local_wages"
                                                            aria-describedby="basic-addon2">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="has-danger input-group mb-3">
                                                        <span
                                                            class="input-group-text bg-disabled text-dark @error('employer_local_income_tax') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                            id="basic-addon2"><b>$</b></span><input
                                                            class="form-control @error('employer_local_income_tax') is-invalid @enderror"
                                                            name="employer_local_income_tax" type="text"
                                                            value="{{ ($w_2 && $w_2->employer_local_income_tax != null) ? $w_2->employer_local_income_tax : '' }}" aria-label="employer_local_income_tax"
                                                            aria-describedby="basic-addon2">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="has-danger input-group mb-3">
                                                        <input
                                                            class="form-control @error('employer_locality') is-invalid @enderror"
                                                            name="employer_locality" type="text" value="{{ ($w_2 && $w_2->employer_locality != null) ? $w_2->employer_locality : '' }}"
                                                            aria-label="employer_locality"
                                                            aria-describedby="basic-addon2">
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
                                                        <input class="form-check-input me-3 h4" name="w2_standard"
                                                            type="radio" value="1" aria-label="w2_standard"
                                                            aria-describedby="basic-addon2"
                                                            {{ isset($w_2) && $w_2->w2_standard == 1 ? 'checked' : '' }}>
                                                        <label class="form-check-label h6 pt-2" for="w2_standard">Standard
                                                            W-2
                                                            (most common)
                                                        </label>
                                                    </div>
                                                    <div class="has-danger form-check form-check-inline mb-3">
                                                        <input class="form-check-input me-3 h4" name="w2_standard"
                                                            type="radio" value="0" aria-label="w2_standard"
                                                            aria-describedby="basic-addon2"
                                                            {{ isset($w_2) && $w_2->w2_standard == 0 ? 'checked' : '' }}>
                                                        <label class="form-check-label h6 pt-2"
                                                            for="w2_standard">Nonstandard
                                                            W-2 (handwritten, altered, or hand-typed)
                                                        </label>&nbsp;&nbsp;&nbsp;
                                                    </div>
                                                    <br>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input h4" type="radio"
                                                            name="w2_corrected" id="w2_corrected" value="yes" {{ isset($w_2) && $w_2->w2_corrected == 'yes' ? 'checked' : '' }}>
                                                        <label class="form-check-label h6 pt-2"
                                                            for="w2_corrected"><b>Yes</b></label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input h4" type="radio"
                                                            name="w2_corrected" id="w2_corrected" value="no" {{ isset($w_2) && $w_2->w2_corrected == 'no' ? 'checked' : '' }}>
                                                        <label class="form-check-label h6 pt-2"
                                                            for="w2_corrected"><b>No</b></label>
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
