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
                        <h2 class="tile-title d-flex justify-content-center text-center h2"><b>Enter the unemployment info from your
                                1099-G</b></h2>
                        <form action="{{ route('form1099-g.store') }}" method="post">
                            <div class="tile-body">
                                @csrf
                                <div class="container">
                                    <br><br>
                                    <div class="row d-lg-flex justify-content-center">
                                        <div class="col-lg-10">
                                            <label class="h6 pt-2 form-check-label" for="belongs_to">Who does this Form
                                                1099-G unemployment
                                                compensation belong to?</label><br>
                                            <div class="ms-3 has-danger form-check form-check-inline mb-3">
                                                <input class="form-check-input me-3 h4" name="belongs_to" type="radio"
                                                    value="you" aria-label="belongs_to" aria-describedby="basic-addon2">
                                                <label class="form-check-label h6 pt-2" for="belongs_to">{{ $personal ? $personal->first_name : '' }}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row d-lg-flex justify-content-center">
                                        <div class="col-lg-10">
                                            <div class="ms-3 has-danger form-check form-check-inline mb-3">
                                                <input class="form-check-input me-3 h4" name="belongs_to" type="radio"
                                                    value="spouse" aria-label="belongs_to" aria-describedby="basic-addon2">
                                                <label class="form-check-label h6 pt-2" for="belongs_to">{{ $personal && $personal->spouse ? $personal->spouse->first_name : '' }}</label>
                                            </div>
                                        </div>
                                    </div><br>
                                    <div class="row d-lg-flex justify-content-center">
                                        <div class="col-lg-10">
                                            <label class="form-form-label h6 pb-2" for="payer_name">Payer's Name:</label>
                                            <div class="has-danger input-group mb-3">
                                                <input class="form-control @error('payer_name') is-invalid @enderror"
                                                    name="payer_name" type="text" value="{{ old('payer_name') }}" id="payer_name"
                                                    aria-label="payer_name" aria-describedby="basic-addon2" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row d-lg-flex justify-content-center">
                                        <div class="col-lg-5">
                                            <label class="form-form-label h6 pb-2" for="unemployment_compensation"><b>Box
                                                    1</b> - Unemployment Compensation:</label>
                                            <div class="has-danger input-group mb-3">
                                                <span
                                                    class="input-group-text bg-disabled text-dark @error('unemployment_compensation') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                    id="basic-addon2"><b>$</b></span><input
                                                    class="form-control @error('unemployment_compensation') is-invalid @enderror"
                                                    name="unemployment_compensation" type="number"
                                                    value="{{ old('unemployment_compensation') }}"
                                                    aria-label="unemployment_compensation" aria-describedby="basic-addon2">
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <label class="form-form-label h6 pb-2" for="federal_income_tax"><b>Box 4</b> -
                                                Federal Income Tax Withheld:</label>
                                            <div class="has-danger input-group mb-3">
                                                <span
                                                    class="input-group-text bg-disabled text-dark @error('federal_income_tax') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                    id="basic-addon2"><b>$</b></span><input
                                                    class="form-control @error('federal_income_tax') is-invalid @enderror"
                                                    name="federal_income_tax" type="number"
                                                    value="{{ old('federal_income_tax') }}" aria-label="federal_income_tax"
                                                    aria-describedby="basic-addon2">
                                            </div>
                                        </div>
                                    </div>
                                </div><br><br>
                                <span class="d-flex justify-content-center">
                                    <hr class="mb-3 mt-0 w-75">
                                </span>
                            </div>
                            <div class="tile-footer d-lg-flex justify-content-between px-lg-5 mx-lg-5 mx-4 mb-lg-4">
                                <div class="row">
                                    <div class="col-lg-8 w-100">
                                        <button class="btn btn-primary rounded-0 d-block d-lg-none mb-2 button-custom-width" type="submit">
                                            <b class="text-light">Save and Continue</b>
                                        </button>
                                        <a class="btn btn-white border border-primary rounded-0 button-custom-width"
                                            href="{{ route('form1099-g.index') }}">
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
        const payer_name = document.getElementById('payer_name');
        payer_name.addEventListener('input', function(event) {
            const inputValue = event.target.value;

            // Remove non-alphabetic characters and hyphens from the input value
            const sanitizedValue = inputValue.replace(/[^A-Za-z\- .]/g, '');

            // Update the input field value with the sanitized value
            event.target.value = sanitizedValue;
        });
    </script>
@endpush