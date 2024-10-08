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
                        <h2 class="tile-title d-flex justify-content-center text-center h2"><b>Cryptocurrency</b></h2>
                        @if (isset($unemployment))
                            <form action="{{ route('income.crypto.update', $unemployment) }}" method="post">
                                @method('PUT')
                        @else
                            <form action="{{ route('income.crypto.store') }}" method="post">
                        @endif
                            <div class="tile-body">
                                @csrf
                                <div class="container">
                                    <br>
                                    <div class="row ms-1 pt-3 pt-lg-0">
                                        <div class="col-lg-3 col-5 pe-1 d-flex justify-content-end">
                                            <div class="has-danger form-check form-check-inline mb-3 pe-3">
                                                <input class="form-check-input h4" type="radio" name="crypto"
                                                    id="crypto_yes" value="yes" {{ $unemployment && $unemployment->crypto == 'yes' ? 'checked' : '' }}>
                                                <label class="form-check-label h6 pt-2" for="crypto_yes"><b>Yes</b></label>
                                            </div>
                                            <div class="has-danger form-check form-check-inline mb-3">
                                                <input class="form-check-input h4" type="radio" name="crypto"
                                                    id="crypto_no" value="no"
                                                    {{ isset($unemployment) ? ((isset($unemployment) && $unemployment->crypto == 'no') ? 'checked' : '') : 'checked' }}>
                                                <label class="form-check-label h6 pt-2" for="crypto_no"><b>No</b></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-7 px-0">
                                            <label class="form-form-label h6 pt-2" for="crypto">Did you receive, sell, exchange, or otherwise dispose of any cryptocurrency during 2023?</label>
                                            <p class="h6 text-secondary" for="employer-address">Such as Bitcoin, Dogecoin, Ethereum, etc.</p>
                                        </div>
                                    </div>
                                </div><br>
                                <span class="d-flex justify-content-center">
                                    <hr class="mb-1 mt-0 pt-0 mx-4 w-100">
                                </span><br>
                            </div>
                            <div class="tile-footer d-lg-flex justify-content-between mx-4 mb-lg-4">
                                <div class="row">
                                    <div class="col-lg-8 w-100">
                                        <button class="btn btn-primary rounded-0 d-block d-lg-none mb-2 button-custom-width" type="submit">
                                            <b class="text-light">Save and Continue</b>
                                        </button>
                                        <a class="btn btn-white border border-primary rounded-0 button-custom-width"
                                            href="{{ route('income.ssb.create') }}">
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
