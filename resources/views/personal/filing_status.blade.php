@extends('layouts.app')

@section('title', 'Personal')

@section('content')
    <div class="d-flex justify-content-center p-lg-4 p-3">
        <div class="col-lg-9 col-12 content-shadow shadow-none rounded-3">
            <div class="row p-4 pt-5">
                <div class="d-lg-flex justify-content-between">
                    <i class="fa fa-arrow-left text-primary" aria-hidden="true"></i>
                </div>
            </div>
            <div class="row p-4 pt-0">
                <div class="col-lg-12">
                    <div class="tile">
                        <h2 class="tile-title d-flex justify-content-center text-center h2"><b>What's your filing status?</b></h2>
                        @if (isset($personal))
                            <form action="{{ route('personal.update', $personal) }}" method="post">
                                @method('PUT')
                            @else
                                <form action="{{ route('personal.store') }}" method="post">
                        @endif
                        <div class="tile-body">
                            @csrf
                            <input type="hidden" name="info" value="filing-status">
                            <br>
                            <div class="row d-lg-flex justify-content-center">
                                <div class="col-lg-8">
                                    <div class="has-danger form-check form-check-inline mb-3">
                                        <input class="form-check-input me-4 h4" name="filing_status" type="radio"
                                            value="1" aria-label="filing_status" aria-describedby="basic-addon2"
                                            {{ $personal && $personal->filing_status == 1 ? 'checked' : '' }}>
                                        <label class="h6 pt-2">Single</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-lg-flex justify-content-center">
                                <div class="col-lg-8">
                                    <div class="has-danger form-check form-check-inline mb-3">
                                        <input class="form-check-input me-4 h4" name="filing_status" type="radio"
                                            value="2" aria-label="filing_status" aria-describedby="basic-addon2"
                                            {{ $personal && $personal->filing_status == 2 ? 'checked' : '' }}>
                                        <label class="h6 pt-2">Married Filing Jointly</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-lg-flex justify-content-center">
                                <div class="col-lg-8">
                                    <div class="has-danger form-check form-check-inline mb-3">
                                        <input class="form-check-input me-4 h4" name="filing_status" type="radio"
                                            value="3" aria-label="filing_status" aria-describedby="basic-addon2"
                                            {{ $personal && $personal->filing_status == 3 ? 'checked' : '' }}>
                                        <label class="h6 pt-2">Married Filing Separately</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-lg-flex justify-content-center">
                                <div class="col-lg-8">
                                    @error('filing_status')
                                        <div class="form-control-feedback text-danger pb-4">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <span class="d-flex justify-content-center">
                                <hr class="mb-3 mt-0 w-75 hr-custom-width">
                            </span>
                        </div>
                        <div class="tile-footer d-lg-flex justify-content-between px-lg-5 mx-lg-5 mb-lg-4">
                            <div class="row">
                                <div class="col-lg-8 w-100">
                                    <button class="btn btn-primary rounded-0 d-block d-lg-none mb-2 button-custom-width" type="submit">
                                        <b class="text-light">Save and Continue</b>
                                    </button>
                                    <a class="btn btn-white border border-primary rounded-0 button-custom-width" href="{{ route('personal.create', ['info' => 'basic']) }}">
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
