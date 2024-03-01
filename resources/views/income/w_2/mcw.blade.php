@extends('layouts.app')

@section('title', 'Income')

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
                        <h2 class="tile-title d-lg-flex justify-content-center h2"><b>Minister or Clergy Wages</b></h2>
                        @if (isset($income))
                            <form action="{{ route('income.update', $income) }}" method="post">
                                @method('PUT')
                            @else
                                <form action="{{ route('income.store') }}" method="post">
                        @endif
                        <div class="tile-body">
                            @csrf
                            <div class="container">
                                <br><br>
                                <div class="row d-lg-flex justify-content-center">
                                    <div class="col-lg-10">
                                        <div class="has-danger form-check form-check-inline mb-3">
                                            <input class="form-check-input me-3 h4" name="parent_claim" type="radio"
                                                value="1" aria-label="parent_claim" aria-describedby="basic-addon2"
                                                {{ 1 == 0 ? 'checked' : '' }}>
                                            <label class="form-check-label h6 pt-2" for="parent_claim"><b>Yes</b></label>
                                        </div>
                                        <div class="has-danger form-check form-check-inline mb-3">
                                            <input class="form-check-input me-3 h4" name="parent_claim" type="radio"
                                                value="0" aria-label="parent_claim" aria-describedby="basic-addon2"
                                                {{ 1 == 1 ? 'checked' : '' }}>
                                            <label class="form-check-label h6 pt-2"
                                                for="parent_claim"><b>No</b></label>&nbsp;&nbsp;&nbsp;
                                            <label class="h6 pt-2">Are you a minister or clergy member?</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row d-lg-flex justify-content-center">
                                    <div class="col-lg-10">
                                        <div class="has-danger form-check form-check-inline mb-3">
                                            <input class="form-check-input me-3 h4" name="campaign_contribution"
                                                type="radio" value="1" aria-label="campaign_contribution"
                                                aria-describedby="basic-addon2"
                                                {{ 1 == 0 ? 'checked' : '' }}>
                                            <label class="form-check-label h6 pt-2"
                                                for="campaign_contribution"><b>Yes</b></label>
                                        </div>
                                        <div class="has-danger form-check form-check-inline mb-3">
                                            <input class="form-check-input me-3 h4" name="campaign_contribution"
                                                type="radio" value="0" aria-label="campaign_contribution"
                                                aria-describedby="basic-addon2"
                                                {{ 1 == 1 ? 'checked' : '' }}>
                                            <label class="form-check-label h6 pt-2"
                                                for="campaign_contribution"><b>No</b></label>&nbsp;&nbsp;&nbsp;
                                            <label class="h6 pt-2">Do you want to contribute $3 to the
                                                Presidential Eelection Campaign Fund? <i
                                                    class="fa-regular fa-circle-question text-primary"></i></label>
                                        </div>
                                    </div>
                                </div><br><br>
                                <span class="d-flex justify-content-center">
                                    <hr class="mb-3 mt-0 w-100">
                                </span>
                            </div>
                        </div>
                        <div class="tile-footer d-flex justify-content-between px-lg-5 mx-lg-5 mb-lg-4">
                            <a class="btn btn-white border border-primary rounded-0" href="#"><i
                                class="me-2 mb-5"></i><b class="text-primary">Previous Page</b></a>&nbsp;&nbsp;&nbsp;
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
