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
            <div class="row p-4 pt-0 mx-lg-5 px-lg-5">
                <div class="col-lg-12">
                    <div class="tile">
                        <h2 class="tile-title d-flex justify-content-center text-center h2"><b>Other Unemployment Compensation
                                Income</b></h2>
                        @if (isset($unemployment))
                            <form action="{{ route('income.other.unemployment.update', $unemployment) }}" method="post">
                                @method('PUT')
                            @else
                                <form action="{{ route('income.other.unemployment.store') }}" method="post">
                        @endif
                        <div class="tile-body">
                            @csrf
                            <br><br>
                            <div class="row ps-5">
                                <div class="col-lg-12 ps-0">
                                    <b>Your Other Unemployment</b>
                                </div>
                            </div><br>
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-8">
                                    <label class="form-input-label h6 pt-2" for="union_unemployment">Enter any union
                                        unemployment benefits you received:</label>
                                </div>
                                <div class="col-lg-3">
                                    <div class="has-danger input-group mb-3">
                                        <span
                                            class="input-group-text bg-disabled text-dark @error('union_unemployment') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                            id="basic-addon2"><b>$</b></span><input
                                            class="form-control @error('union_unemployment') is-invalid @enderror" name="union_unemployment"
                                            type="number" value="{{ old('union_unemployment', $unemployment ? $unemployment->union_unemployment : '') }}" aria-label="union_unemployment"
                                            aria-describedby="basic-addon2">
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-8">
                                    <label class="form-input-label h6 pt-2" for="private_fund_unemployment">Enter any private fund unemployment benefits you received:</label>
                                </div>
                                <div class="col-lg-3">
                                    <div class="has-danger input-group mb-3">
                                        <span
                                            class="input-group-text bg-disabled text-dark @error('private_fund_unemployment') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                            id="basic-addon2"><b>$</b></span><input
                                            class="form-control @error('private_fund_unemployment') is-invalid @enderror" name="private_fund_unemployment"
                                            type="number" value="{{ old('private_fund_unemployment', $unemployment ? $unemployment->private_fund_unemployment : '') }}" aria-label="private_fund_unemployment"
                                            aria-describedby="basic-addon2">
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-8">
                                    <label class="form-input-label h6 pt-2" for="state_unemployment_benefit">Enter any unemployment benefits that you received as a state employee when not covered by regular state unemployment benefits:</label>
                                </div>
                                <div class="col-lg-3">
                                    <div class="has-danger input-group mb-3">
                                        <span
                                            class="input-group-text bg-disabled text-dark @error('state_unemployment_benefit') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                            id="basic-addon2"><b>$</b></span><input
                                            class="form-control @error('state_unemployment_benefit') is-invalid @enderror" name="state_unemployment_benefit"
                                            type="number" value="{{ old('state_unemployment_benefit', $unemployment ? $unemployment->state_unemployment_benefit : '') }}" aria-label="state_unemployment_benefit"
                                            aria-describedby="basic-addon2">
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <span class="d-flex justify-content-center">
                                <hr class="mb-3 mt-0 w-100">
                            </span>
                            <div class="row ps-5">
                                <div class="col-lg-12 ps-0">
                                    <b>Your Spouse's Other Unemployment</b>
                                </div>
                            </div><br>
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-8">
                                    <label class="form-input-label h6 pt-2" for="spouse_union_unemployment">Enter any union
                                        unemployment benefits you received:</label>
                                </div>
                                <div class="col-lg-3">
                                    <div class="has-danger input-group mb-3">
                                        <span
                                            class="input-group-text bg-disabled text-dark @error('spouse_union_unemployment') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                            id="basic-addon2"><b>$</b></span><input
                                            class="form-control @error('spouse_union_unemployment') is-invalid @enderror" name="spouse_union_unemployment"
                                            type="number" value="{{ old('spouse_union_unemployment', $unemployment ? $unemployment->spouse_union_unemployment : '') }}" aria-label="spouse_union_unemployment"
                                            aria-describedby="basic-addon2">
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-8">
                                    <label class="form-input-label h6 pt-2" for="spouse_private_fund_unemployment">Enter any private fund unemployment benefits you received:</label>
                                </div>
                                <div class="col-lg-3">
                                    <div class="has-danger input-group mb-3">
                                        <span
                                            class="input-group-text bg-disabled text-dark @error('spouse_private_fund_unemployment') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                            id="basic-addon2"><b>$</b></span><input
                                            class="form-control @error('spouse_private_fund_unemployment') is-invalid @enderror" name="spouse_private_fund_unemployment"
                                            type="number" value="{{ old('spouse_private_fund_unemployment', $unemployment ? $unemployment->spouse_private_fund_unemployment : '') }}" aria-label="spouse_private_fund_unemployment"
                                            aria-describedby="basic-addon2">
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-8">
                                    <label class="form-input-label h6 pt-2" for="spouse_state_unemployment_benefit">Enter any unemployment benefits that your spouse received as a state employee when not covered by regular state unemployment benefits:</label>
                                </div>
                                <div class="col-lg-3">
                                    <div class="has-danger input-group mb-3">
                                        <span
                                            class="input-group-text bg-disabled text-dark @error('spouse_state_unemployment_benefit') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                            id="basic-addon2"><b>$</b></span><input
                                            class="form-control @error('spouse_state_unemployment_benefit') is-invalid @enderror" name="spouse_state_unemployment_benefit"
                                            type="number" value="{{ old('spouse_state_unemployment_benefit', $unemployment ? $unemployment->spouse_state_unemployment_benefit : '') }}" aria-label="spouse_state_unemployment_benefit"
                                            aria-describedby="basic-addon2">
                                    </div>
                                </div>
                                <br><br>
                                <span class="d-flex justify-content-center">
                                    <hr class="mb-3 mt-0 w-100">
                                </span>
                            </div>
                        </div>
                    </div>
                            {{-- <a class="btn btn-white border border-primary rounded-0" href="#"><b class="text-primary">Skip</b></a>&nbsp;&nbsp;&nbsp; --}}
                            <div class="tile-footer d-lg-flex justify-content-between mb-lg-4">
                                <div class="row">
                                    <div class="col-lg-8 w-100">
                                        <button class="btn btn-primary rounded-0 d-block d-lg-none mb-2 button-custom-width" type="submit">
                                            <b class="text-light">Save and Continue</b>
                                        </button>
                                        <a class="btn btn-white border border-primary rounded-0 button-custom-width"
                                            href="{{ route('form1099-g.index') }}">
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
    @endsection
