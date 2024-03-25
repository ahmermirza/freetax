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
                        <h2 class="tile-title d-flex justify-content-center text-center h2"><b>Which state are you filing taxes
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
                                <div class="row ps-lg-5">
                                    <div class="col-lg-8 ps-0">
                                        <label class="form-input-label h6 pt-2" for="long_term">Choose the state you want to
                                            prepare a tax return for:</label>
                                    </div>
                                    <div class="col-lg-3 px-0">
                                        <div class="has-danger input-group mb-3">
                                            <select name="name" id="name" class="form-select @error('name') is-invalid @enderror">
                                                <option value="" {{ $state && $state->name == '' ? 'selected' : '' }}></option>
                                                <option value="AA" {{ $state && $state->name == 'AA' ? 'selected' : '' }}>AA</option>
                                                <option value="AE" {{ $state && $state->name == 'AE' ? 'selected' : '' }}>AE</option>
                                                <option value="AK" {{ $state && $state->name == 'AK' ? 'selected' : '' }}>AK</option>
                                                <option value="AL" {{ $state && $state->name == 'AL' ? 'selected' : '' }}>AL</option>
                                                <option value="AP" {{ $state && $state->name == 'AP' ? 'selected' : '' }}>AP</option>
                                                <option value="AR" {{ $state && $state->name == 'AR' ? 'selected' : '' }}>AR</option>
                                                <option value="AZ" {{ $state && $state->name == 'AZ' ? 'selected' : '' }}>AZ</option>
                                                <option value="CA" {{ $state && $state->name == 'CA' ? 'selected' : '' }}>CA</option>
                                                <option value="CO" {{ $state && $state->name == 'CO' ? 'selected' : '' }}>CO</option>
                                                <option value="CT" {{ $state && $state->name == 'CT' ? 'selected' : '' }}>CT</option>
                                                <option value="DC" {{ $state && $state->name == 'DC' ? 'selected' : '' }}>DC</option>
                                                <option value="DE" {{ $state && $state->name == 'DE' ? 'selected' : '' }}>DE</option>
                                                <option value="FL" {{ $state && $state->name == 'FL' ? 'selected' : '' }}>FL</option>
                                                <option value="GA" {{ $state && $state->name == 'GA' ? 'selected' : '' }}>GA</option>
                                                <option value="HI" {{ $state && $state->name == 'HI' ? 'selected' : '' }}>HI</option>
                                                <option value="IA" {{ $state && $state->name == 'IA' ? 'selected' : '' }}>IA</option>
                                                <option value="ID" {{ $state && $state->name == 'ID' ? 'selected' : '' }}>ID</option>
                                                <option value="IL" {{ $state && $state->name == 'IL' ? 'selected' : '' }}>IL</option>
                                                <option value="IN" {{ $state && $state->name == 'IN' ? 'selected' : '' }}>IN</option>
                                                <option value="KS" {{ $state && $state->name == 'KS' ? 'selected' : '' }}>KS</option>
                                                <option value="KY" {{ $state && $state->name == 'KY' ? 'selected' : '' }}>KY</option>
                                                <option value="LA" {{ $state && $state->name == 'LA' ? 'selected' : '' }}>LA</option>
                                                <option value="MA" {{ $state && $state->name == 'MA' ? 'selected' : '' }}>MA</option>
                                                <option value="MD" {{ $state && $state->name == 'MD' ? 'selected' : '' }}>MD</option>
                                                <option value="ME" {{ $state && $state->name == 'ME' ? 'selected' : '' }}>ME</option>
                                                <option value="MI" {{ $state && $state->name == 'MI' ? 'selected' : '' }}>MI</option>
                                                <option value="MN" {{ $state && $state->name == 'MN' ? 'selected' : '' }}>MN</option>
                                                <option value="MO" {{ $state && $state->name == 'MO' ? 'selected' : '' }}>MO</option>
                                                <option value="MS" {{ $state && $state->name == 'MS' ? 'selected' : '' }}>MS</option>
                                                <option value="MT" {{ $state && $state->name == 'MT' ? 'selected' : '' }}>MT</option>
                                                <option value="NC" {{ $state && $state->name == 'NC' ? 'selected' : '' }}>NC</option>
                                                <option value="ND" {{ $state && $state->name == 'ND' ? 'selected' : '' }}>ND</option>
                                                <option value="NE" {{ $state && $state->name == 'NE' ? 'selected' : '' }}>NE</option>
                                                <option value="NH" {{ $state && $state->name == 'NH' ? 'selected' : '' }}>NH</option>
                                                <option value="NJ" {{ $state && $state->name == 'NJ' ? 'selected' : '' }}>NJ</option>
                                                <option value="NM" {{ $state && $state->name == 'NM' ? 'selected' : '' }}>NM</option>
                                                <option value="NV" {{ $state && $state->name == 'NV' ? 'selected' : '' }}>NV</option>
                                                <option value="NY" {{ $state && $state->name == 'NY' ? 'selected' : '' }}>NY</option>
                                                <option value="OH" {{ $state && $state->name == 'OH' ? 'selected' : '' }}>OH</option>
                                                <option value="OK" {{ $state && $state->name == 'OK' ? 'selected' : '' }}>OK</option>
                                                <option value="OR" {{ $state && $state->name == 'OR' ? 'selected' : '' }}>OR</option>
                                                <option value="PA" {{ $state && $state->name == 'PA' ? 'selected' : '' }}>PA</option>
                                                <option value="RI" {{ $state && $state->name == 'RI' ? 'selected' : '' }}>RI</option>
                                                <option value="SC" {{ $state && $state->name == 'SC' ? 'selected' : '' }}>SC</option>
                                                <option value="SD" {{ $state && $state->name == 'SD' ? 'selected' : '' }}>SD</option>
                                                <option value="TN" {{ $state && $state->name == 'TN' ? 'selected' : '' }}>TN</option>
                                                <option value="TX" {{ $state && $state->name == 'TX' ? 'selected' : '' }}>TX</option>
                                                <option value="UT" {{ $state && $state->name == 'UT' ? 'selected' : '' }}>UT</option>
                                                <option value="VA" {{ $state && $state->name == 'VA' ? 'selected' : '' }}>VA</option>
                                                <option value="VT" {{ $state && $state->name == 'VT' ? 'selected' : '' }}>VT</option>
                                                <option value="WA" {{ $state && $state->name == 'WA' ? 'selected' : '' }}>WA</option>
                                                <option value="WI" {{ $state && $state->name == 'WI' ? 'selected' : '' }}>WI</option>
                                                <option value="WV" {{ $state && $state->name == 'WV' ? 'selected' : '' }}>WV</option>
                                                <option value="WY" {{ $state && $state->name == 'WY' ? 'selected' : '' }}>WY</option>
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
                        <div class="tile-footer d-lg-flex justify-content-between mb-lg-4">
                            <div class="row">
                                <div class="col-lg-8 w-100">
                                    <button class="btn btn-primary rounded-0 d-block d-lg-none mb-2 button-custom-width" type="submit">
                                        <b class="text-light">Save and Continue</b>
                                    </button>
                                    <a class="btn btn-white border border-primary rounded-0 button-custom-width"
                                        href="{{ route('state.index') }}">
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
