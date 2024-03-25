@extends('layouts.app')

@section('title', 'Income')

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
                        <h2 class="tile-title d-flex justify-content-center text-center h2"><b>Wages (Form W-2)</b></h2>
                        <form action="{{ route('w-2.store') }}" method="post">
                            <div class="tile-body">
                                @csrf
                                @if (!empty(\Request::segment(4)) && \Request::segment(4) == 'spouse')
                                    <input type="hidden" name="w2_for" value="spouse">
                                @endif
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
                                                    <input type="number" id="ein" class="form-control mb-3 @error('ein') is-invalid @enderror"
                                                        name="ein">
                                                    @error('ein')
                                                        <div class="form-control-feedback text-danger pb-2">{{ $message }}</div>
                                                    @enderror
                                                    <label class="form-form-label h6 pb-3" for="employer-name"><b>Box C</b>
                                                        -
                                                        Employer's Name, Address, and Zip Code</label>
                                                    <br>
                                                    <label class="form-form-label h6" for="employer-name">Employer's
                                                        Name:</label>
                                                    <input type="text" id="employer-name" class="form-control @error('emp_name') is-invalid @enderror"
                                                        name="emp_name">
                                                    @error('emp_name')
                                                        <div class="form-control-feedback text-danger pb-2">{{ $message }}</div>
                                                    @enderror
                                                    <br>
                                                    <div class="form-check form-check-inline ms-3">
                                                        <input class="form-check-input h4" type="radio"
                                                            name="emp_foreign_address" id="emp_foreign_address_yes"
                                                            value="yes">
                                                        <label class="form-check-label h6 pt-2"
                                                            for="emp_foreign_address_yes"><b>Yes</b></label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input h4" type="radio"
                                                            name="emp_foreign_address" id="emp_foreign_address_no"
                                                            value="no" checked>
                                                        <label class="form-check-label h6 pt-2"
                                                            for="emp_foreign_address_no"><b>No</b></label>
                                                    </div>
                                                    <label class="form-form-label h6" for="employer-address">Foreign
                                                        Address?</label>
                                                    <br><br>
                                                    <label class="form-form-label h6" for="employer-city">Employer's
                                                        Address:</label>
                                                    <input type="text" id="employer-address" class="form-control @error('emp_address') is-invalid @enderror"
                                                        name="emp_address">
                                                    @error('emp_address')
                                                        <div class="form-control-feedback text-danger pb-2">{{ $message }}</div>
                                                    @enderror
                                                    <br>
                                                    <label class="form-form-label h6" for="employer-city">Employer's
                                                        City:</label>
                                                    <input type="text" id="employer-city" class="form-control @error('emp_city') is-invalid @enderror"
                                                        name="emp_city">
                                                    @error('last_name')
                                                        <div class="form-control-feedback text-danger pb-2">{{ $message }}</div>
                                                    @enderror
                                                    <br>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label class="form-form-label h6" for="employer-city">Employer's
                                                        State:</label>
                                                    <select name="emp_state" id="employers_state"
                                                        class="form-select @error('emp_state') is-invalid @enderror">
                                                        <option value="" {{ old('emp_state') == '' ? 'selected' : '' }}></option>
                                                        <option value="AA" {{ old('emp_state') == 'AA' ? 'selected' : '' }}>AA</option>
                                                        <option value="AE" {{ old('emp_state') == 'AE' ? 'selected' : '' }}>AE</option>
                                                        <option value="AK" {{ old('emp_state') == 'AK' ? 'selected' : '' }}>AK</option>
                                                        <option value="AL" {{ old('emp_state') == 'AL' ? 'selected' : '' }}>AL</option>
                                                        <option value="AP" {{ old('emp_state') == 'AP' ? 'selected' : '' }}>AP</option>
                                                        <option value="AR" {{ old('emp_state') == 'AR' ? 'selected' : '' }}>AR</option>
                                                        <option value="AZ" {{ old('emp_state') == 'AZ' ? 'selected' : '' }}>AZ</option>
                                                        <option value="CA" {{ old('emp_state') == 'CA' ? 'selected' : '' }}>CA</option>
                                                        <option value="CO" {{ old('emp_state') == 'CO' ? 'selected' : '' }}>CO</option>
                                                        <option value="CT" {{ old('emp_state') == 'CT' ? 'selected' : '' }}>CT</option>
                                                        <option value="DC" {{ old('emp_state') == 'DC' ? 'selected' : '' }}>DC</option>
                                                        <option value="DE" {{ old('emp_state') == 'DE' ? 'selected' : '' }}>DE</option>
                                                        <option value="FL" {{ old('emp_state') == 'FL' ? 'selected' : '' }}>FL</option>
                                                        <option value="GA" {{ old('emp_state') == 'GA' ? 'selected' : '' }}>GA</option>
                                                        <option value="HI" {{ old('emp_state') == 'HI' ? 'selected' : '' }}>HI</option>
                                                        <option value="IA" {{ old('emp_state') == 'IA' ? 'selected' : '' }}>IA</option>
                                                        <option value="ID" {{ old('emp_state') == 'ID' ? 'selected' : '' }}>ID</option>
                                                        <option value="IL" {{ old('emp_state') == 'IL' ? 'selected' : '' }}>IL</option>
                                                        <option value="IN" {{ old('emp_state') == 'IN' ? 'selected' : '' }}>IN</option>
                                                        <option value="KS" {{ old('emp_state') == 'KS' ? 'selected' : '' }}>KS</option>
                                                        <option value="KY" {{ old('emp_state') == 'KY' ? 'selected' : '' }}>KY</option>
                                                        <option value="LA" {{ old('emp_state') == 'LA' ? 'selected' : '' }}>LA</option>
                                                        <option value="MA" {{ old('emp_state') == 'MA' ? 'selected' : '' }}>MA</option>
                                                        <option value="MD" {{ old('emp_state') == 'MD' ? 'selected' : '' }}>MD</option>
                                                        <option value="ME" {{ old('emp_state') == 'ME' ? 'selected' : '' }}>ME</option>
                                                        <option value="MI" {{ old('emp_state') == 'MI' ? 'selected' : '' }}>MI</option>
                                                        <option value="MN" {{ old('emp_state') == 'MN' ? 'selected' : '' }}>MN</option>
                                                        <option value="MO" {{ old('emp_state') == 'MO' ? 'selected' : '' }}>MO</option>
                                                        <option value="MS" {{ old('emp_state') == 'MS' ? 'selected' : '' }}>MS</option>
                                                        <option value="MT" {{ old('emp_state') == 'MT' ? 'selected' : '' }}>MT</option>
                                                        <option value="NC" {{ old('emp_state') == 'NC' ? 'selected' : '' }}>NC</option>
                                                        <option value="ND" {{ old('emp_state') == 'ND' ? 'selected' : '' }}>ND</option>
                                                        <option value="NE" {{ old('emp_state') == 'NE' ? 'selected' : '' }}>NE</option>
                                                        <option value="NH" {{ old('emp_state') == 'NH' ? 'selected' : '' }}>NH</option>
                                                        <option value="NJ" {{ old('emp_state') == 'NJ' ? 'selected' : '' }}>NJ</option>
                                                        <option value="NM" {{ old('emp_state') == 'NM' ? 'selected' : '' }}>NM</option>
                                                        <option value="NV" {{ old('emp_state') == 'NV' ? 'selected' : '' }}>NV</option>
                                                        <option value="NY" {{ old('emp_state') == 'NY' ? 'selected' : '' }}>NY</option>
                                                        <option value="OH" {{ old('emp_state') == 'OH' ? 'selected' : '' }}>OH</option>
                                                        <option value="OK" {{ old('emp_state') == 'OK' ? 'selected' : '' }}>OK</option>
                                                        <option value="OR" {{ old('emp_state') == 'OR' ? 'selected' : '' }}>OR</option>
                                                        <option value="PA" {{ old('emp_state') == 'PA' ? 'selected' : '' }}>PA</option>
                                                        <option value="RI" {{ old('emp_state') == 'RI' ? 'selected' : '' }}>RI</option>
                                                        <option value="SC" {{ old('emp_state') == 'SC' ? 'selected' : '' }}>SC</option>
                                                        <option value="SD" {{ old('emp_state') == 'SD' ? 'selected' : '' }}>SD</option>
                                                        <option value="TN" {{ old('emp_state') == 'TN' ? 'selected' : '' }}>TN</option>
                                                        <option value="TX" {{ old('emp_state') == 'TX' ? 'selected' : '' }}>TX</option>
                                                        <option value="UT" {{ old('emp_state') == 'UT' ? 'selected' : '' }}>UT</option>
                                                        <option value="VA" {{ old('emp_state') == 'VA' ? 'selected' : '' }}>VA</option>
                                                        <option value="VT" {{ old('emp_state') == 'VT' ? 'selected' : '' }}>VT</option>
                                                        <option value="WA" {{ old('emp_state') == 'WA' ? 'selected' : '' }}>WA</option>
                                                        <option value="WI" {{ old('emp_state') == 'WI' ? 'selected' : '' }}>WI</option>
                                                        <option value="WV" {{ old('emp_state') == 'WV' ? 'selected' : '' }}>WV</option>
                                                        <option value="WY" {{ old('emp_state') == 'WY' ? 'selected' : '' }}>WY</option>
                                                    </select>
                                                    @error('emp_state')
                                                        <div class="form-control-feedback text-danger pb-2">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-lg-4">
                                                    <br>
                                                    <label class="form-form-label h6" for="employer-city">Employer's Zip
                                                        Code:</label>
                                                    <div class="row">
                                                        <div class="col-lg-4 col-4">
                                                            <div class="has-danger input-group">
                                                                <input
                                                                    class="form-control @error('emp_zip1') is-invalid @enderror"
                                                                    name="emp_zip1" type="text" value="{{ old('emp_zip1') }}"
                                                                    aria-label="emp_zip1" aria-describedby="basic-addon2">
                                                                @error('emp_zip1')
                                                                    <div class="form-control-feedback text-danger pb-2">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        &lowbar;
                                                        <div class="col-lg-4 col-4">
                                                            <div class="has-danger input-group">
                                                                <input
                                                                    class="form-control @error('emp_zip2') is-invalid @enderror"
                                                                    name="emp_zip2" type="text" value="{{ old('emp_zip2') }}"
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
                                                            name="federal_wages" type="number" value="{{ old('federal_wages') }}"
                                                            aria-label="federal_wages" aria-describedby="basic-addon2">
                                                        @error('federal_wages')
                                                            <div class="form-control-feedback text-danger pb-2">{{ $message }}</div>
                                                        @enderror
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
                                                            name="federal_income_tax" type="number" value="{{ old('federal_income_tax') }}"
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
                                                            name="federal_ss_wages" type="number" value="{{ old('federal_ss_wages') }}"
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
                                                            name="federal_ss_tax" type="number" value="{{ old('federal_ss_tax') }}"
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
                                                            name="federal_medicare_wages" type="number" value="{{ old('federal_medicare_wages') }}"
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
                                                            name="federal_medicare_tax" type="number" value="{{ old('federal_medicare_tax') }}"
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
                                                            name="federal_ss_tips" type="number" value="{{ old('federal_ss_tips') }}"
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
                                                            name="federal_allocated_tips" type="number" value="{{ old('federal_allocated_tips') }}"
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
                                                            name="federal_dependent" type="number" value="{{ old('federal_dependent') }}"
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
                                                            name="federal_nonqualified" type="number" value="{{ old('federal_nonqualified') }}"
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
                                                            <option value="" {{ old('code_1') == '' ? 'selected' : '' }}></option>
                                                            <option value="A" {{ old('code_1') == 'A' ? 'selected' : '' }}>A: Uncollected SS or RRTA on tips</option>
                                                            <option value="B" {{ old('code_1') == 'B' ? 'selected' : '' }}>B: Uncollected Medicare on tips</option>
                                                            <option value="C" {{ old('code_1') == 'C' ? 'selected' : '' }}>C: Group term life insurance</option>
                                                            <option value="D" {{ old('code_1') == 'D' ? 'selected' : '' }}>D: 401(k) contributions</option>
                                                            <option value="E" {{ old('code_1') == 'E' ? 'selected' : '' }}>E: 403(b) contributions</option>
                                                            <option value="F" {{ old('code_1') == 'F' ? 'selected' : '' }}>F: 408(k)(6) contributions</option>
                                                            <option value="G" {{ old('code_1') == 'G' ? 'selected' : '' }}>G: 457(b) contributions</option>
                                                            <option value="H" {{ old('code_1') == 'H' ? 'selected' : '' }}>H: 501(c)(18)(D) contributions</option>
                                                            <option value="J" {{ old('code_1') == 'J' ? 'selected' : '' }}>J: Nontaxable sick pay</option>
                                                            <option value="K" {{ old('code_1') == 'K' ? 'selected' : '' }}>K: Golden parachute</option>
                                                            <option value="L" {{ old('code_1') == 'L' ? 'selected' : '' }}>L: Expense reimbursements</option>
                                                            <option value="M" {{ old('code_1') == 'M' ? 'selected' : '' }}>M: Uncollected SS or RRTA on insurance</option>
                                                            <option value="N" {{ old('code_1') == 'N' ? 'selected' : '' }}>N: Uncollected Medicare on insurance</option>
                                                            <option value="P" {{ old('code_1') == 'P' ? 'selected' : '' }}>P: Moving expenses</option>
                                                            <option value="Q" {{ old('code_1') == 'Q' ? 'selected' : '' }}>Q: Nontaxable combat pay</option>
                                                            <option value="R" {{ old('code_1') == 'R' ? 'selected' : '' }}>R: Employer MSA contributions</option>
                                                            <option value="S" {{ old('code_1') == 'S' ? 'selected' : '' }}>S: Employee 408(p) contributions</option>
                                                            <option value="T" {{ old('code_1') == 'T' ? 'selected' : '' }}>T: Adoption benefits</option>
                                                            <option value="V" {{ old('code_1') == 'V' ? 'selected' : '' }}>V: Non-statutory stock option</option>
                                                            <option value="W" {{ old('code_1') == 'W' ? 'selected' : '' }}>W: Employer HSA contributions</option>
                                                            <option value="Y" {{ old('code_1') == 'Y' ? 'selected' : '' }}>Y: 409A contributions</option>
                                                            <option value="Z" {{ old('code_1') == 'Z' ? 'selected' : '' }}>Z: 409A income</option>
                                                            <option value="AA" {{ old('code_1') == 'AA' ? 'selected' : '' }}>AA: Roth 401(k) contributions</option>
                                                            <option value="BB" {{ old('code_1') == 'BB' ? 'selected' : '' }}>BB: Roth 403(b) contributions</option>
                                                            <option value="DD" {{ old('code_1') == 'DD' ? 'selected' : '' }}>DD: Employer health coverage</option>
                                                            <option value="EE" {{ old('code_1') == 'EE' ? 'selected' : '' }}>EE: Roth 457(b) contributions</option>
                                                            <option value="FF" {{ old('code_1') == 'FF' ? 'selected' : '' }}>FF: Small employer health reimbursement</option>
                                                            <option value="GG" {{ old('code_1') == 'GG' ? 'selected' : '' }}>GG: Section 83(i) qualified equity grants income</option>
                                                            <option value="HH" {{ old('code_1') == 'HH' ? 'selected' : '' }}>HH: End of year Section 83(i) deferral elections</option>
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
                                                            name="amount_1" type="number" value="{{ old('amount_1') }}"
                                                            aria-label="amount_1" aria-describedby="basic-addon2">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label class="form-form-label d-lg-none h6 pb-2" for="code_1">Code:</label>
                                                    <div class="has-danger input-group mb-3">
                                                        <select class="form-select @error('code_2') is-invalid @enderror"
                                                            name="code_2" aria-label="code_2"
                                                            aria-describedby="basic-addon2">
                                                            <option value="" {{ old('code_2') == '' ? 'selected' : '' }}></option>
                                                            <option value="A" {{ old('code_2') == 'A' ? 'selected' : '' }}>A: Uncollected SS or RRTA on tips</option>
                                                            <option value="B" {{ old('code_2') == 'B' ? 'selected' : '' }}>B: Uncollected Medicare on tips</option>
                                                            <option value="C" {{ old('code_2') == 'C' ? 'selected' : '' }}>C: Group term life insurance</option>
                                                            <option value="D" {{ old('code_2') == 'D' ? 'selected' : '' }}>D: 401(k) contributions</option>
                                                            <option value="E" {{ old('code_2') == 'E' ? 'selected' : '' }}>E: 403(b) contributions</option>
                                                            <option value="F" {{ old('code_2') == 'F' ? 'selected' : '' }}>F: 408(k)(6) contributions</option>
                                                            <option value="G" {{ old('code_2') == 'G' ? 'selected' : '' }}>G: 457(b) contributions</option>
                                                            <option value="H" {{ old('code_2') == 'H' ? 'selected' : '' }}>H: 501(c)(18)(D) contributions</option>
                                                            <option value="J" {{ old('code_2') == 'J' ? 'selected' : '' }}>J: Nontaxable sick pay</option>
                                                            <option value="K" {{ old('code_2') == 'K' ? 'selected' : '' }}>K: Golden parachute</option>
                                                            <option value="L" {{ old('code_2') == 'L' ? 'selected' : '' }}>L: Expense reimbursements</option>
                                                            <option value="M" {{ old('code_2') == 'M' ? 'selected' : '' }}>M: Uncollected SS or RRTA on insurance</option>
                                                            <option value="N" {{ old('code_2') == 'N' ? 'selected' : '' }}>N: Uncollected Medicare on insurance</option>
                                                            <option value="P" {{ old('code_2') == 'P' ? 'selected' : '' }}>P: Moving expenses</option>
                                                            <option value="Q" {{ old('code_2') == 'Q' ? 'selected' : '' }}>Q: Nontaxable combat pay</option>
                                                            <option value="R" {{ old('code_2') == 'R' ? 'selected' : '' }}>R: Employer MSA contributions</option>
                                                            <option value="S" {{ old('code_2') == 'S' ? 'selected' : '' }}>S: Employee 408(p) contributions</option>
                                                            <option value="T" {{ old('code_2') == 'T' ? 'selected' : '' }}>T: Adoption benefits</option>
                                                            <option value="V" {{ old('code_2') == 'V' ? 'selected' : '' }}>V: Non-statutory stock option</option>
                                                            <option value="W" {{ old('code_2') == 'W' ? 'selected' : '' }}>W: Employer HSA contributions</option>
                                                            <option value="Y" {{ old('code_2') == 'Y' ? 'selected' : '' }}>Y: 409A contributions</option>
                                                            <option value="Z" {{ old('code_2') == 'Z' ? 'selected' : '' }}>Z: 409A income</option>
                                                            <option value="AA" {{ old('code_2') == 'AA' ? 'selected' : '' }}>AA: Roth 401(k) contributions</option>
                                                            <option value="BB" {{ old('code_2') == 'BB' ? 'selected' : '' }}>BB: Roth 403(b) contributions</option>
                                                            <option value="DD" {{ old('code_2') == 'DD' ? 'selected' : '' }}>DD: Employer health coverage</option>
                                                            <option value="EE" {{ old('code_2') == 'EE' ? 'selected' : '' }}>EE: Roth 457(b) contributions</option>
                                                            <option value="FF" {{ old('code_2') == 'FF' ? 'selected' : '' }}>FF: Small employer health reimbursement</option>
                                                            <option value="GG" {{ old('code_2') == 'GG' ? 'selected' : '' }}>GG: Section 83(i) qualified equity grants income</option>
                                                            <option value="HH" {{ old('code_2') == 'HH' ? 'selected' : '' }}>HH: End of year Section 83(i) deferral elections</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="form-form-label d-lg-none h6 pb-2" for="amount_1">Amount:</label>
                                                    <div class="has-danger input-group mb-3">
                                                        <span
                                                            class="input-group-text bg-disabled text-dark @error('amount_2') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                            id="basic-addon2"><b>$</b></span><input
                                                            class="form-control @error('amount_2') is-invalid @enderror"
                                                            name="amount_2" type="number" value="{{ old('amount_2') }}"
                                                            aria-label="amount_2" aria-describedby="basic-addon2">
                                                    </div>
                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <label class="form-form-label h6 pb-2" for="first_name"><b>Box
                                                        13</b></label>
                                                <div class="col-lg-4 col-4">
                                                    <label class="form-form-label h6 pb-2" for="first_name">Statutory
                                                        Employee</label>
                                                </div>
                                                <div class="col-lg-4 col-4">
                                                    <label class="form-form-label h6 pb-2" for="first_name">Retirement
                                                        Plan</label>
                                                </div>
                                                <div class="col-lg-4 col-4">
                                                    <label class="form-form-label h6 pb-2" for="first_name">Third-Party
                                                        Sick
                                                        Pay</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4 col-4">
                                                    <input
                                                        class="form-check-input @error('statutory_employee') is-invalid @enderror h4 ms-1"
                                                        name="statutory_employee" type="checkbox"
                                                        value="1"
                                                        aria-label="statutory_employee" aria-describedby="basic-addon2">
                                                </div>
                                                <div class="col-lg-4 col-4">
                                                    <input
                                                        class="form-check-input @error('eetirement_plan') is-invalid @enderror h4 ms-1"
                                                        name="eetirement_plan" type="checkbox"
                                                        value="1"
                                                        aria-label="eetirement_plan" aria-describedby="basic-addon2">
                                                </div>
                                                <div class="col-lg-4 col-4">
                                                    <input
                                                        class="form-check-input @error('third_party_pay') is-invalid @enderror h4 ms-1"
                                                        name="third_party_pay" type="checkbox"
                                                        value="1"
                                                        aria-label="third_party_pay" aria-describedby="basic-addon2">
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
                                                            name="other_desc" type="text" value="{{ old('other_desc') }}"
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
                                                            name="other_amount" type="number" value="{{ old('other_amount') }}"
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
                                                        <select name="employer_state" id="employer_state"
                                                            class="form-select @error('employer_state') is-invalid @enderror">
                                                            <option value="" {{ old('emp_state') == '' ? 'selected' : '' }}></option>
                                                            <option value="AA" {{ old('emp_state') == 'AA' ? 'selected' : '' }}>AA</option>
                                                            <option value="AE" {{ old('emp_state') == 'AE' ? 'selected' : '' }}>AE</option>
                                                            <option value="AK" {{ old('emp_state') == 'AK' ? 'selected' : '' }}>AK</option>
                                                            <option value="AL" {{ old('emp_state') == 'AL' ? 'selected' : '' }}>AL</option>
                                                            <option value="AP" {{ old('emp_state') == 'AP' ? 'selected' : '' }}>AP</option>
                                                            <option value="AR" {{ old('emp_state') == 'AR' ? 'selected' : '' }}>AR</option>
                                                            <option value="AZ" {{ old('emp_state') == 'AZ' ? 'selected' : '' }}>AZ</option>
                                                            <option value="CA" {{ old('emp_state') == 'CA' ? 'selected' : '' }}>CA</option>
                                                            <option value="CO" {{ old('emp_state') == 'CO' ? 'selected' : '' }}>CO</option>
                                                            <option value="CT" {{ old('emp_state') == 'CT' ? 'selected' : '' }}>CT</option>
                                                            <option value="DC" {{ old('emp_state') == 'DC' ? 'selected' : '' }}>DC</option>
                                                            <option value="DE" {{ old('emp_state') == 'DE' ? 'selected' : '' }}>DE</option>
                                                            <option value="FL" {{ old('emp_state') == 'FL' ? 'selected' : '' }}>FL</option>
                                                            <option value="GA" {{ old('emp_state') == 'GA' ? 'selected' : '' }}>GA</option>
                                                            <option value="HI" {{ old('emp_state') == 'HI' ? 'selected' : '' }}>HI</option>
                                                            <option value="IA" {{ old('emp_state') == 'IA' ? 'selected' : '' }}>IA</option>
                                                            <option value="ID" {{ old('emp_state') == 'ID' ? 'selected' : '' }}>ID</option>
                                                            <option value="IL" {{ old('emp_state') == 'IL' ? 'selected' : '' }}>IL</option>
                                                            <option value="IN" {{ old('emp_state') == 'IN' ? 'selected' : '' }}>IN</option>
                                                            <option value="KS" {{ old('emp_state') == 'KS' ? 'selected' : '' }}>KS</option>
                                                            <option value="KY" {{ old('emp_state') == 'KY' ? 'selected' : '' }}>KY</option>
                                                            <option value="LA" {{ old('emp_state') == 'LA' ? 'selected' : '' }}>LA</option>
                                                            <option value="MA" {{ old('emp_state') == 'MA' ? 'selected' : '' }}>MA</option>
                                                            <option value="MD" {{ old('emp_state') == 'MD' ? 'selected' : '' }}>MD</option>
                                                            <option value="ME" {{ old('emp_state') == 'ME' ? 'selected' : '' }}>ME</option>
                                                            <option value="MI" {{ old('emp_state') == 'MI' ? 'selected' : '' }}>MI</option>
                                                            <option value="MN" {{ old('emp_state') == 'MN' ? 'selected' : '' }}>MN</option>
                                                            <option value="MO" {{ old('emp_state') == 'MO' ? 'selected' : '' }}>MO</option>
                                                            <option value="MS" {{ old('emp_state') == 'MS' ? 'selected' : '' }}>MS</option>
                                                            <option value="MT" {{ old('emp_state') == 'MT' ? 'selected' : '' }}>MT</option>
                                                            <option value="NC" {{ old('emp_state') == 'NC' ? 'selected' : '' }}>NC</option>
                                                            <option value="ND" {{ old('emp_state') == 'ND' ? 'selected' : '' }}>ND</option>
                                                            <option value="NE" {{ old('emp_state') == 'NE' ? 'selected' : '' }}>NE</option>
                                                            <option value="NH" {{ old('emp_state') == 'NH' ? 'selected' : '' }}>NH</option>
                                                            <option value="NJ" {{ old('emp_state') == 'NJ' ? 'selected' : '' }}>NJ</option>
                                                            <option value="NM" {{ old('emp_state') == 'NM' ? 'selected' : '' }}>NM</option>
                                                            <option value="NV" {{ old('emp_state') == 'NV' ? 'selected' : '' }}>NV</option>
                                                            <option value="NY" {{ old('emp_state') == 'NY' ? 'selected' : '' }}>NY</option>
                                                            <option value="OH" {{ old('emp_state') == 'OH' ? 'selected' : '' }}>OH</option>
                                                            <option value="OK" {{ old('emp_state') == 'OK' ? 'selected' : '' }}>OK</option>
                                                            <option value="OR" {{ old('emp_state') == 'OR' ? 'selected' : '' }}>OR</option>
                                                            <option value="PA" {{ old('emp_state') == 'PA' ? 'selected' : '' }}>PA</option>
                                                            <option value="RI" {{ old('emp_state') == 'RI' ? 'selected' : '' }}>RI</option>
                                                            <option value="SC" {{ old('emp_state') == 'SC' ? 'selected' : '' }}>SC</option>
                                                            <option value="SD" {{ old('emp_state') == 'SD' ? 'selected' : '' }}>SD</option>
                                                            <option value="TN" {{ old('emp_state') == 'TN' ? 'selected' : '' }}>TN</option>
                                                            <option value="TX" {{ old('emp_state') == 'TX' ? 'selected' : '' }}>TX</option>
                                                            <option value="UT" {{ old('emp_state') == 'UT' ? 'selected' : '' }}>UT</option>
                                                            <option value="VA" {{ old('emp_state') == 'VA' ? 'selected' : '' }}>VA</option>
                                                            <option value="VT" {{ old('emp_state') == 'VT' ? 'selected' : '' }}>VT</option>
                                                            <option value="WA" {{ old('emp_state') == 'WA' ? 'selected' : '' }}>WA</option>
                                                            <option value="WI" {{ old('emp_state') == 'WI' ? 'selected' : '' }}>WI</option>
                                                            <option value="WV" {{ old('emp_state') == 'WV' ? 'selected' : '' }}>WV</option>
                                                            <option value="WY" {{ old('emp_state') == 'WY' ? 'selected' : '' }}>WY</option>
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
                                                            name="employer_sin" type="number" value="{{ old('employer_sin') }}"
                                                            aria-label="employer_sin" aria-describedby="basic-addon2">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="form-form-label h6 pb-2"
                                                        for="employer_state_wages"><b>Box
                                                            16</b> - State Wages, Tips, Etc.:</label>
                                                    <div class="has-danger input-group mb-3">
                                                        <select
                                                            class="form-select @error('employer_state_wages') is-invalid @enderror"
                                                            name="employer_state_wages" aria-label="employer_state_wages"
                                                            aria-describedby="basic-addon2">
                                                            <option value="" {{ old('employer_state_wages') == '' ? 'selected' : '' }}></option>
                                                            <option value="A" {{ old('employer_state_wages') == 'A' ? 'selected' : '' }}>A: Uncollected SS or RRTA on tips</option>
                                                            <option value="B" {{ old('employer_state_wages') == 'B' ? 'selected' : '' }}>B: Uncollected Medicare on tips</option>
                                                            <option value="C" {{ old('employer_state_wages') == 'C' ? 'selected' : '' }}>C: Group term life insurance</option>
                                                            <option value="D" {{ old('employer_state_wages') == 'D' ? 'selected' : '' }}>D: 401(k) contributions</option>
                                                            <option value="E" {{ old('employer_state_wages') == 'E' ? 'selected' : '' }}>E: 403(b) contributions</option>
                                                            <option value="F" {{ old('employer_state_wages') == 'F' ? 'selected' : '' }}>F: 408(k)(6) contributions</option>
                                                            <option value="G" {{ old('employer_state_wages') == 'G' ? 'selected' : '' }}>G: 457(b) contributions</option>
                                                            <option value="H" {{ old('employer_state_wages') == 'H' ? 'selected' : '' }}>H: 501(c)(18)(D) contributions</option>
                                                            <option value="J" {{ old('employer_state_wages') == 'J' ? 'selected' : '' }}>J: Nontaxable sick pay</option>
                                                            <option value="K" {{ old('employer_state_wages') == 'K' ? 'selected' : '' }}>K: Golden parachute</option>
                                                            <option value="L" {{ old('employer_state_wages') == 'L' ? 'selected' : '' }}>L: Expense reimbursements</option>
                                                            <option value="M" {{ old('employer_state_wages') == 'M' ? 'selected' : '' }}>M: Uncollected SS or RRTA on insurance</option>
                                                            <option value="N" {{ old('employer_state_wages') == 'N' ? 'selected' : '' }}>N: Uncollected Medicare on insurance</option>
                                                            <option value="P" {{ old('employer_state_wages') == 'P' ? 'selected' : '' }}>P: Moving expenses</option>
                                                            <option value="Q" {{ old('employer_state_wages') == 'Q' ? 'selected' : '' }}>Q: Nontaxable combat pay</option>
                                                            <option value="R" {{ old('employer_state_wages') == 'R' ? 'selected' : '' }}>R: Employer MSA contributions</option>
                                                            <option value="S" {{ old('employer_state_wages') == 'S' ? 'selected' : '' }}>S: Employee 408(p) contributions</option>
                                                            <option value="T" {{ old('employer_state_wages') == 'T' ? 'selected' : '' }}>T: Adoption benefits</option>
                                                            <option value="V" {{ old('employer_state_wages') == 'V' ? 'selected' : '' }}>V: Non-statutory stock option</option>
                                                            <option value="W" {{ old('employer_state_wages') == 'W' ? 'selected' : '' }}>W: Employer HSA contributions</option>
                                                            <option value="Y" {{ old('employer_state_wages') == 'Y' ? 'selected' : '' }}>Y: 409A contributions</option>
                                                            <option value="Z" {{ old('employer_state_wages') == 'Z' ? 'selected' : '' }}>Z: 409A income</option>
                                                            <option value="AA" {{ old('employer_state_wages') == 'AA' ? 'selected' : '' }}>AA: Roth 401(k) contributions</option>
                                                            <option value="BB" {{ old('employer_state_wages') == 'BB' ? 'selected' : '' }}>BB: Roth 403(b) contributions</option>
                                                            <option value="DD" {{ old('employer_state_wages') == 'DD' ? 'selected' : '' }}>DD: Employer health coverage</option>
                                                            <option value="EE" {{ old('employer_state_wages') == 'EE' ? 'selected' : '' }}>EE: Roth 457(b) contributions</option>
                                                            <option value="FF" {{ old('employer_state_wages') == 'FF' ? 'selected' : '' }}>FF: Small employer health reimbursement</option>
                                                            <option value="GG" {{ old('employer_state_wages') == 'GG' ? 'selected' : '' }}>GG: Section 83(i) qualified equity grants income</option>
                                                            <option value="HH" {{ old('employer_state_wages') == 'HH' ? 'selected' : '' }}>HH: End of year Section 83(i) deferral elections</option>
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
                                                            name="employer_state_income_tax" type="number"
                                                            value="{{ old('employer_state_income_tax') }}" aria-label="employer_state_income_tax"
                                                            aria-describedby="basic-addon2">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <label class="form-form-label h6 pb-3"
                                                        for="employer_local_wages"><b>Box
                                                            18</b> - Local Wages, Tips, Etc.:</label>
                                                    <div class="has-danger input-group mb-3">
                                                        <span
                                                            class="input-group-text bg-disabled text-dark @error('employer_local_wages') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                            id="basic-addon2"><b>$</b></span><input
                                                            class="form-control @error('employer_local_wages') is-invalid @enderror"
                                                            name="employer_local_wages" type="number" value="{{ old('employer_local_wages') }}"
                                                            aria-label="employer_local_wages"
                                                            aria-describedby="basic-addon2">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="form-form-label h6 pb-3"
                                                        for="employer_local_income_tax"><b>Box 19</b>
                                                        - Local Income Tax:</label>
                                                    <div class="has-danger input-group mb-3">
                                                        <span
                                                            class="input-group-text bg-disabled text-dark @error('employer_local_income_tax') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                            id="basic-addon2"><b>$</b></span><input
                                                            class="form-control @error('employer_local_income_tax') is-invalid @enderror"
                                                            name="employer_local_income_tax" type="number"
                                                            value="{{ old('employer_local_income_tax') }}" aria-label="employer_local_income_tax"
                                                            aria-describedby="basic-addon2">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="form-form-label h6 pb-3" for="employer_locality"><b>Box
                                                            20</b> -
                                                        Locality Name:</label>
                                                    <div class="has-danger input-group mb-3">
                                                        <input
                                                            class="form-control @error('employer_locality') is-invalid @enderror"
                                                            name="employer_locality" type="text" value="{{ old('employer_locality') }}"
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
                                            <div class="row ms-0 ms-lg-2">
                                                <div class="col-lg-8 col-12 ms-3 ms-lg-0 ps-lg-0 d-flex justify-content-start">
                                                    <div class="has-danger form-check form-check-inline mb-3 pe-0">
                                                        <input class="form-check-input me-3 h4" name="w2_standard"
                                                            type="radio" value="1" aria-label="w2_standard"
                                                            aria-describedby="basic-addon2" checked>
                                                            <label class="form-check-label h6 pt-2" for="w2_standard">Standard
                                                                W-2
                                                                (most common)
                                                            </label>
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="row ms-0 ms-lg-2">
                                                <div class="col-lg-8 col-12 ms-3 ms-lg-0 ps-lg-0 d-flex justify-content-start">
                                                    <div class="has-danger form-check form-check-inline mb-3 pe-0">
                                                        <input class="form-check-input me-3 h4" name="w2_standard"
                                                            type="radio" value="0" aria-label="w2_standard"
                                                            aria-describedby="basic-addon2">
                                                            <label class="form-check-label h6 pt-2"
                                                                for="w2_standard">Nonstandard
                                                                W-2 (handwritten, altered, or hand-typed)
                                                            </label>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="row ms-1 pt-3 pt-lg-0">
                                                <div class="col-xl-2 col-lg-3 col-6 pe-1 d-flex justify-content-center">
                                                    <div class="has-danger form-check form-check-inline mb-3 pe-3">
                                                        <input class="form-check-input h4" type="radio"
                                                            name="w2_corrected" id="w2_corrected" value="yes">
                                                        <label class="form-check-label h6 pt-2"
                                                            for="w2_corrected"><b>Yes</b></label>
                                                    </div>
                                                    <div class="has-danger form-check form-check-inline mb-3">
                                                        <input class="form-check-input h4" type="radio"
                                                            name="w2_corrected" id="w2_corrected" value="no" checked>
                                                        <label class="form-check-label h6 pt-2"
                                                            for="w2_corrected"><b>No</b></label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-6 radio-label-custom-width px-0">
                                                    <label class="form-form-label h6 pt-2" for="employer-address">Is this a
                                                        corrected W-2 from your employer? <span class="text-secondary">(not
                                                            common)</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><br><br>
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
                                                href="{{ route('w-2.index') }}">
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
        const employer_name = document.getElementById('employer-name');
        employer_name.addEventListener('input', function(event) {
            const inputValue = event.target.value;

            // Remove non-alphabetic characters and hyphens from the input value
            const sanitizedValue = inputValue.replace(/[^A-Za-z\- .]/g, '');

            // Update the input field value with the sanitized value
            event.target.value = sanitizedValue;
        });
    </script>
@endpush