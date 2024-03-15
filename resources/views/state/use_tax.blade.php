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
                        <h2 class="tile-title d-lg-flex justify-content-center h2"><b>Did you have State use tax?</b></h2>
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
                                    <div class="col-lg-12 pb-2">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input h4" type="radio"
                                                name="new_address" id="new_address" value="yes">
                                            <label class="form-check-label h6 pt-2"
                                                for="new_address"><b>Yes</b></label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input h4" type="radio"
                                                name="new_address" id="new_address" value="no" checked>
                                            <label class="form-check-label h6 pt-2"
                                                for="new_address"><b>No</b></label>
                                        </div>
                                        <label class="form-form-label h6" for="new_address">Did you make any internet, mail order, or other out-of-state purchases in 2023 on which Rhode Island sales tax was not charged?</label>
                                    </div>
                                </div><br>
                                <div class="row ms-4">
                                    <label class="form-form-label h6 pb-2" for="new_address">If you purchased merchandise from an out-of-state seller (for example, by telephone, over the Internet, through a catalog, or in person) that would have been subject to sales tax in Rhode Island, you need to pay use tax on the merchandise if the seller didn't collect Rhode Island sales tax.</label>
                                </div>
                                <div class="row ms-4 pt-xl-2">
                                    <label class="form-form-label h6 pb-2" for="new_address">Choose which option you would like to use to calculate your use tax:</label>
                                </div>
                                <div class="row ps-5">
                                    <div class="col-lg-8 pb-2">
                                        <div class="form-check form-check-inline w-100">
                                            <input class="form-check-input me-3 h4" name="w2_standard"
                                                type="radio" value="1" aria-label="w2_standard"
                                                aria-describedby="basic-addon2" checked>
                                            <label class="form-check-label h6 pt-2" for="w2_standard">Actual Use Tax Due</label><br>
                                            <p class="small" for="w2_standard">Calculates the use tax due on your actual purchases</p>
                                        </div>
                                        <div class="form-check form-check-inline w-100 mb-3">
                                            <input class="form-check-input me-3 h4" name="w2_standard"
                                                type="radio" value="0" aria-label="w2_standard"
                                                aria-describedby="basic-addon2">
                                            <label class="form-check-label h6 pt-2"
                                                for="w2_standard">Use Tax Lookup Table</label><br>
                                            <p class="small" for="w2_standard">Estimates your use tax due based on your adjusted gross income</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ps-5 pb-3">
                                    <div class="col-lg-8 ps-0">
                                        <label class="form-input-label h6 pt-2" for="total_price">Enter the total price of all purchases subject to use tax:</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="has-danger input-group mb-3">
                                            <span
                                                class="input-group-text bg-disabled text-dark @error('total_price') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                id="basic-addon2"><b>$</b></span><input
                                                class="form-control @error('total_price') is-invalid @enderror" name="total_price"
                                                type="text" value="" aria-label="total_price"
                                                aria-describedby="basic-addon2">
                                        </div>
                                    </div>
                                </div>
                                <div class="row ps-5">
                                    <div class="col-lg-8 ps-0">
                                        <label class="form-input-label h6 pt-2" for="sales_tax">Enter the amount of sales tax you paid to other states on these purchases:</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="has-danger input-group mb-3">
                                            <span
                                                class="input-group-text bg-disabled text-dark @error('sales_tax') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                id="basic-addon2"><b>$</b></span><input
                                                class="form-control @error('sales_tax') is-invalid @enderror" name="sales_tax"
                                                type="text" value="" aria-label="sales_tax"
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
