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
                        <h2 class="tile-title d-lg-flex justify-content-center h2"><b>Which state are you filing taxes
                                for?</b></h2>
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
                                    <div class="col-lg-8 ps-0">
                                        <label class="form-input-label h6 pt-2" for="long_term">Choose the state you want to
                                            prepare a tax return for:</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="has-danger input-group mb-3">
                                            <select name="state_name" id="state_name" class="form-select @error('state_name') is-invalid @enderror">
                                                <option value=""
                                                    {{ $state && $state->state_name == '' ? 'selected' : '' }}></option>
                                                <option value="AA"
                                                    {{ $state && $state->state_name == 'AA' ? 'selected' : '' }}>AA</option>
                                                <option value="AE"
                                                    {{ $state && $state->state_name == 'AE' ? 'selected' : '' }}>AE</option>
                                                <option value="AK"
                                                    {{ $state && $state->state_name == 'AK' ? 'selected' : '' }}>AK</option>
                                                <option value="AL"
                                                    {{ $state && $state->state_name == 'AL' ? 'selected' : '' }}>AL</option>
                                                <option value="AP"
                                                    {{ $state && $state->state_name == 'AP' ? 'selected' : '' }}>AP</option>
                                                <option value="AR"
                                                    {{ $state && $state->state_name == 'AR' ? 'selected' : '' }}>AR</option>
                                                <option value="AZ"
                                                    {{ $state && $state->state_name == 'AZ' ? 'selected' : '' }}>AZ</option>
                                                <option value="CA"
                                                    {{ $state && $state->state_name == 'CA' ? 'selected' : '' }}>CA
                                                </option>
                                                <option value="CO"
                                                    {{ $state && $state->state_name == 'CO' ? 'selected' : '' }}>CO
                                                </option>
                                                <option value="CT"
                                                    {{ $state && $state->state_name == 'CT' ? 'selected' : '' }}>CT
                                                </option>
                                                <option value="DC"
                                                    {{ $state && $state->state_name == 'DC' ? 'selected' : '' }}>DC
                                                </option>
                                                <option value="DE"
                                                    {{ $state && $state->state_name == 'DE' ? 'selected' : '' }}>DE
                                                </option>
                                                <option value="FL"
                                                    {{ $state && $state->state_name == 'FL' ? 'selected' : '' }}>FL
                                                </option>
                                                <option value="GA"
                                                    {{ $state && $state->state_name == 'GA' ? 'selected' : '' }}>GA
                                                </option>
                                                <option value="HI"
                                                    {{ $state && $state->state_name == 'HI' ? 'selected' : '' }}>HI
                                                </option>
                                                <option value="IA"
                                                    {{ $state && $state->state_name == 'IA' ? 'selected' : '' }}>IA
                                                </option>
                                                <option value="ID"
                                                    {{ $state && $state->state_name == 'ID' ? 'selected' : '' }}>ID
                                                </option>
                                                <option value="IL"
                                                    {{ $state && $state->state_name == 'IL' ? 'selected' : '' }}>IL
                                                </option>
                                                <option value="IN"
                                                    {{ $state && $state->state_name == 'IN' ? 'selected' : '' }}>IN
                                                </option>
                                                <option value="KS"
                                                    {{ $state && $state->state_name == 'KS' ? 'selected' : '' }}>KS
                                                </option>
                                                <option value="KY"
                                                    {{ $state && $state->state_name == 'KY' ? 'selected' : '' }}>KY
                                                </option>
                                                <option value="LA"
                                                    {{ $state && $state->state_name == 'LA' ? 'selected' : '' }}>LA
                                                </option>
                                                <option value="MA"
                                                    {{ $state && $state->state_name == 'MA' ? 'selected' : '' }}>MA
                                                </option>
                                                <option value="MD"
                                                    {{ $state && $state->state_name == 'MD' ? 'selected' : '' }}>MD
                                                </option>
                                                <option value="ME"
                                                    {{ $state && $state->state_name == 'ME' ? 'selected' : '' }}>ME
                                                </option>
                                                <option value="MI"
                                                    {{ $state && $state->state_name == 'MI' ? 'selected' : '' }}>MI
                                                </option>
                                                <option value="MN"
                                                    {{ $state && $state->state_name == 'MN' ? 'selected' : '' }}>MN
                                                </option>
                                                <option value="MO"
                                                    {{ $state && $state->state_name == 'MO' ? 'selected' : '' }}>MO
                                                </option>
                                                <option value="MS"
                                                    {{ $state && $state->state_name == 'MS' ? 'selected' : '' }}>MS
                                                </option>
                                                <option value="MT"
                                                    {{ $state && $state->state_name == 'MT' ? 'selected' : '' }}>MT
                                                </option>
                                                <option value="NC"
                                                    {{ $state && $state->state_name == 'NC' ? 'selected' : '' }}>NC
                                                </option>
                                                <option value="ND"
                                                    {{ $state && $state->state_name == 'ND' ? 'selected' : '' }}>ND
                                                </option>
                                                <option value="NE"
                                                    {{ $state && $state->state_name == 'NE' ? 'selected' : '' }}>NE
                                                </option>
                                                <option value="NH"
                                                    {{ $state && $state->state_name == 'NH' ? 'selected' : '' }}>NH
                                                </option>
                                                <option value="NJ"
                                                    {{ $state && $state->state_name == 'NJ' ? 'selected' : '' }}>NJ
                                                </option>
                                                <option value="NM"
                                                    {{ $state && $state->state_name == 'NM' ? 'selected' : '' }}>NM
                                                </option>
                                                <option value="NV"
                                                    {{ $state && $state->state_name == 'NV' ? 'selected' : '' }}>NV
                                                </option>
                                                <option value="NY"
                                                    {{ $state && $state->state_name == 'NY' ? 'selected' : '' }}>NY
                                                </option>
                                                <option value="OH"
                                                    {{ $state && $state->state_name == 'OH' ? 'selected' : '' }}>OH
                                                </option>
                                                <option value="OK"
                                                    {{ $state && $state->state_name == 'OK' ? 'selected' : '' }}>OK
                                                </option>
                                                <option value="OR"
                                                    {{ $state && $state->state_name == 'OR' ? 'selected' : '' }}>OR
                                                </option>
                                                <option value="PA"
                                                    {{ $state && $state->state_name == 'PA' ? 'selected' : '' }}>PA
                                                </option>
                                                <option value="RI"
                                                    {{ $state && $state->state_name == 'RI' ? 'selected' : '' }}>RI
                                                </option>
                                                <option value="SC"
                                                    {{ $state && $state->state_name == 'SC' ? 'selected' : '' }}>SC
                                                </option>
                                                <option value="SD"
                                                    {{ $state && $state->state_name == 'SD' ? 'selected' : '' }}>SD
                                                </option>
                                                <option value="TN"
                                                    {{ $state && $state->state_name == 'TN' ? 'selected' : '' }}>TN
                                                </option>
                                                <option value="TX"
                                                    {{ $state && $state->state_name == 'TX' ? 'selected' : '' }}>TX
                                                </option>
                                                <option value="UT"
                                                    {{ $state && $state->state_name == 'UT' ? 'selected' : '' }}>UT
                                                </option>
                                                <option value="VA"
                                                    {{ $state && $state->state_name == 'VA' ? 'selected' : '' }}>VA
                                                </option>
                                                <option value="VT"
                                                    {{ $state && $state->state_name == 'VT' ? 'selected' : '' }}>VT
                                                </option>
                                                <option value="WA"
                                                    {{ $state && $state->state_name == 'WA' ? 'selected' : '' }}>WA
                                                </option>
                                                <option value="WI"
                                                    {{ $state && $state->state_name == 'WI' ? 'selected' : '' }}>WI
                                                </option>
                                                <option value="WV"
                                                    {{ $state && $state->state_name == 'WV' ? 'selected' : '' }}>WV
                                                </option>
                                                <option value="WY"
                                                    {{ $state && $state->state_name == 'WY' ? 'selected' : '' }}>WY
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br><br>
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
