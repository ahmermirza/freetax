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
                        <h2 class="tile-title d-flex justify-content-center text-center h2"><b>Did you have State use tax?</b></h2>
                        @if (isset($state))
                            <form action="{{ route('use.tax.update', $state) }}" method="post">
                                @method('PUT')
                            @else
                                <form action="{{ route('use.tax.store') }}" method="post">
                        @endif
                        <div class="tile-body">
                            @csrf
                            <div class="container">
                                <br>
                                <div class="row ps-lg-5">
                                    <div class="col-xl-2 col-lg-3 col-6 pe-1 d-flex justify-content-center">
                                        <div class="has-danger form-check form-check-inline mb-3 pe-3">
                                            <input class="form-check-input h4" type="radio"
                                                name="made_purchase" id="made_purchase" value="yes" {{ $state && $state->made_purchase == 'yes' ? 'checked' : '' }}>
                                            <label class="form-check-label h6 pt-2"
                                                for="made_purchase"><b>Yes</b></label>
                                        </div>
                                        <div class="has-danger form-check form-check-inline mb-3">
                                            <input class="form-check-input h4" type="radio"
                                                name="made_purchase" id="made_purchase" value="no"
                                                {{ isset($state) && $state->made_purchase ? ((isset($state) && $state->made_purchase == 'no') ? 'checked' : '') : 'checked' }}>
                                            <label class="form-check-label h6 pt-2"
                                                for="made_purchase"><b>No</b></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-6 radio-label-custom-width px-0">
                                        <label class="form-form-label h6 pt-2" for="made_purchase">Did you make any internet, mail order, or other out-of-state purchases in 2023 on which State sales tax was not charged?</label>
                                    </div>
                                </div><br>
                                <div class="row ms-lg-2">
                                    <div class="col-lg-11 col-12 px-0">
                                        <label class="form-form-label h6 pb-2 ps-0 ps-lg-2" for="made_purchase">If you purchased merchandise from an out-of-state seller (for example, by telephone, over the Internet, through a catalog, or in person) that would have been subject to sales tax in State, you need to pay use tax on the merchandise if the seller didn't collect State sales tax.</label>
                                    </div>
                                </div>
                                <div class="row ms-lg-2 pt-xl-2">
                                    <div class="col-lg-11 col-12 px-0">
                                        <label class="form-form-label h6 pb-2 ps-0 ps-lg-2" for="use_tax">Choose which option you would like to use to calculate your use tax:</label>
                                    </div>
                                </div>
                                <div class="row ps-lg-5">
                                    <div class="col-lg-8 pb-2">
                                        <div class="form-check form-check-inline w-100">
                                            <input class="form-check-input me-3 h4" name="use_tax"
                                                type="radio" value="use_tax_due" aria-label="use_tax"
                                                aria-describedby="basic-addon2"
                                                {{ isset($state) && $state->use_tax ? ((isset($state) && $state->use_tax == 'use_tax_due') ? 'checked' : '') : 'checked' }}>
                                            <label class="form-check-label h6 pt-2" for="use_tax">Actual Use Tax Due</label><br>
                                            <p class="small" for="use_tax">Calculates the use tax due on your actual purchases</p>
                                        </div>
                                        <div class="form-check form-check-inline w-100 mb-3">
                                            <input class="form-check-input me-3 h4" name="use_tax"
                                                type="radio" value="tax_lookup_table" aria-label="use_tax"
                                                aria-describedby="basic-addon2"
                                                {{ $state && $state->use_tax == 'tax_lookup_table' ? 'checked' : '' }}>
                                            <label class="form-check-label h6 pt-2"
                                                for="use_tax">Use Tax Lookup Table</label><br>
                                            <p class="small" for="use_tax">Estimates your use tax due based on your adjusted gross income</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ps-lg-5 pb-3">
                                    <div class="col-lg-8 ps-0">
                                        <label class="form-input-label h6 pt-2" for="purchase_total">Enter the total price of all purchases subject to use tax:</label>
                                    </div>
                                    <div class="col-lg-3 px-0">
                                        <div class="has-danger input-group mb-3">
                                            <span
                                                class="input-group-text bg-disabled text-dark @error('purchase_total') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                id="basic-addon2"><b>$</b></span><input
                                                class="form-control @error('purchase_total') is-invalid @enderror" name="purchase_total"
                                                type="number" value="{{ old('purchase_total', $state ? $state->purchase_total : '') }}" aria-label="purchase_total"
                                                aria-describedby="basic-addon2">
                                        </div>
                                    </div>
                                </div>
                                <div class="row ps-lg-5">
                                    <div class="col-lg-8 ps-0">
                                        <label class="form-input-label h6 pt-2" for="purchase_sale_tax">Enter the amount of sales tax you paid to other states on these purchases:</label>
                                    </div>
                                    <div class="col-lg-3 px-0">
                                        <div class="has-danger input-group mb-3">
                                            <span
                                                class="input-group-text bg-disabled text-dark @error('purchase_sale_tax') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                id="basic-addon2"><b>$</b></span><input
                                                class="form-control @error('purchase_sale_tax') is-invalid @enderror" name="purchase_sale_tax"
                                                type="number" value="{{ old('purchase_sale_tax', $state ? $state->purchase_sale_tax : '') }}" aria-label="purchase_sale_tax"
                                                aria-describedby="basic-addon2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
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
                                        href="{{ route('state.return.create', $state) }}">
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
