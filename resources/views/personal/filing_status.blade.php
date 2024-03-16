@extends('layouts.app')

@section('title', 'Personal')

@section('content')
    <div class="d-flex justify-content-center p-4">
        <div class="col-lg-9 shadow rounded-3">
            <div class="row p-4 pt-5">
                <div class="d-lg-flex justify-content-between">
                    <i class="fa fa-arrow-left text-primary" aria-hidden="true"></i>
                </div>
            </div>
            <div class="row p-4 pt-0">
                <div class="col-lg-12">
                    <div class="tile">
                        <h2 class="tile-title d-lg-flex justify-content-center h2"><b>What's your filing status?</b></h2>
                        @if (isset($personal))
                            <form action="{{ route('personal.update', $personal) }}" method="post">
                                @method('PUT')
                            @else
                                <form action="{{ route('personal.store') }}" method="post">
                        @endif
                        <div class="tile-body">
                            @csrf
                            <input type="hidden" name="info" value="filing-status">
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
                        </div>
                        <div class="tile-footer d-flex justify-content-between px-lg-5 mx-lg-5 mb-lg-4">
                            <a class="btn btn-white border border-primary rounded-0" href="{{ route('personal.create', ['info' => 'basic']) }}"><i
                                    class="me-2 mb-5"></i><b class="text-primary">Previous Page</b></a>&nbsp;&nbsp;&nbsp;
                            <button class="btn btn-primary rounded-0" type="submit"><i class="me-2"></i><b
                                    class="text-light">Save
                                    and
                                    Continue</b></button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
