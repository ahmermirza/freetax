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
                        <h2 class="tile-title d-flex justify-content-center text-center h2"><b>Let's get some basic State info</b></h2>
                        @if (isset($state))
                            <form action="{{ route('state.return.update', $state) }}" method="post">
                                @method('PUT')
                            {{-- @else
                                <form action="{{ route('state.return.store') }}" method="post"> --}}
                        @endif
                        <div class="tile-body">
                            @csrf
                            <div class="container">
                                <br>
                                <div class="row ps-lg-5">
                                    <div class="col-lg-12 ps-0">
                                        <label class="form-form-label h6 pb-2" for="new_address">New Address?</label>
                                    </div>
                                    <div class="col-xl-2 col-lg-3 col-6 pe-1 d-flex justify-content-center">
                                        <div class="has-danger form-check form-check-inline mb-3 pe-3">
                                            <input class="form-check-input h4" type="radio"
                                                name="new_address" id="new_address" value="yes"
                                                {{ $state && $state->new_address == 'yes' ? 'checked' : '' }}>
                                            <label class="form-check-label h6 pt-2"
                                                for="new_address"><b>Yes</b></label>
                                        </div>
                                        <div class="has-danger form-check form-check-inline mb-3">
                                            <input class="form-check-input h4" type="radio"
                                                name="new_address" id="new_address" value="no"
                                                {{ isset($state) && $state->new_address ? ((isset($state) && $state->new_address == 'no') ? 'checked' : '') : 'checked' }}>
                                            <label class="form-check-label h6 pt-2"
                                                for="new_address"><b>No</b></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-6 radio-label-custom-width px-0">
                                        <label class="form-form-label h6 pt-2" for="new_address">Is the address on your return different than the address you used last year?</label>
                                    </div>
                                </div>
                                <div class="row ms-lg-4">
                                    <label class="form-form-label small pb-2" for="new_address">If this is your first time filing a State return, answer Yes.</label>
                                </div>
                                <span class="d-flex justify-content-center ps-lg-4 pe-lg-5 me-lg-4">
                                    <hr class="mb-3 mt-0 w-100">
                                </span>
                                <div class="row ps-lg-5">
                                    <div class="col-lg-12 ps-0">
                                        <label class="form-form-label h6 pb-2" for="political_contribution">Political Contribution</label>
                                    </div>
                                    <div class="col-xl-2 col-lg-3 col-6 pe-1 d-flex justify-content-center">
                                        <div class="has-danger form-check form-check-inline mb-3 pe-3">
                                            <input class="form-check-input h4" type="radio"
                                                name="political_contribution" id="political_contribution" value="yes"
                                                {{ $state && $state->political_contribution == 'yes' ? 'checked' : '' }}>
                                            <label class="form-check-label h6 pt-2"
                                                for="political_contribution"><b>Yes</b></label>
                                        </div>
                                        <div class="has-danger form-check form-check-inline mb-3">
                                            <input class="form-check-input h4" type="radio"
                                                name="political_contribution" id="political_contribution" value="no"
                                                {{ isset($state) && $state->political_contribution ? ((isset($state) && $state->political_contribution == 'no') ? 'checked' : '') : 'checked' }}>
                                            <label class="form-check-label h6 pt-2"
                                                for="political_contribution"><b>No</b></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-6 radio-label-custom-width px-0">
                                        <label class="form-form-label h6 pt-2" for="political_contribution">Do you want to designate $10 of your tax liability to the account for the public financing of the electoral system?</label>
                                    </div>
                                </div>
                                <div class="row ms-lg-4">
                                    <label class="form-form-label small pb-2" for="political_contribution">This won't increase your tax or reduce your refund.</label>
                                </div>
                                <span class="d-flex justify-content-center ps-lg-4 pe-lg-5 me-lg-4">
                                    <hr class="mb-3 mt-0 w-100">
                                </span>
                                <div class="row ps-lg-5">
                                    <div class="col-lg-12 ps-0">
                                        <label class="form-form-label h6 pb-2" for="identity_theft">Identity Theft</label>
                                    </div>
                                    <div class="col-xl-2 col-lg-3 col-6 pe-1 d-flex justify-content-center">
                                        <div class="has-danger form-check form-check-inline mb-3 pe-3">
                                            <input class="form-check-input h4" type="radio"
                                                name="identity_theft" id="identity_theft" value="yes"
                                                {{ $state && $state->identity_theft == 'yes' ? 'checked' : '' }}>
                                            <label class="form-check-label h6 pt-2"
                                                for="identity_theft"><b>Yes</b></label>
                                        </div>
                                        <div class="has-danger form-check form-check-inline mb-3">
                                            <input class="form-check-input h4" type="radio"
                                                name="identity_theft" id="identity_theft" value="no"
                                                {{ isset($state) && $state->identity_theft ? ((isset($state) && $state->identity_theft == 'no') ? 'checked' : '') : 'checked' }}>
                                            <label class="form-check-label h6 pt-2"
                                                for="identity_theft"><b>No</b></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-6 radio-label-custom-width px-0">
                                        <label class="form-form-label h6 pt-2" for="identity_theft">Were you or your spouse a victim of identity theft in 2023?</label>
                                    </div>
                                </div>
                                <div class="row ms-lg-4">
                                    <div class="col-lg-11 col-12">
                                        <label class="form-form-label small pb-2" for="identity_theft">If you were a victim of identity theft in 2023, you'll need to attach a copy of your federal Form 14039, Identity Theft Affidavit  that you filed with the IRS to your State tax return.</label>
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
                                        href="{{ route('state.resident.create', $state) }}">
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
