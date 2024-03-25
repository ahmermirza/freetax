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
                        <h2 class="tile-title d-flex justify-content-center text-center h2"><b>Minister or Clergy Wages</b></h2>
                        <form action="{{ route('w-2.mcw.update', $w_2) }}" method="post">
                            <div class="tile-body">
                                @csrf
                                @method('PUT')
                                <div class="container">
                                    <br><br>
                                    <div class="row d-lg-flex justify-content-center">
                                        <div class="col-lg-10">
                                            <div class="has-danger form-check form-check-inline mb-3">
                                                <input class="form-check-input me-3 h4" name="clergy_member" type="radio"
                                                    value="1" aria-label="clergy_member" aria-describedby="basic-addon2"
                                                    {{ isset($w_2) && $w_2->clergy_member == 1 ? 'checked' : '' }}>
                                                <label class="form-check-label h6 pt-2"
                                                    for="clergy_member"><b>Yes</b></label>
                                            </div>
                                            <div class="has-danger form-check form-check-inline mb-3">
                                                <input class="form-check-input me-3 h4" name="clergy_member" type="radio"
                                                    value="0" aria-label="clergy_member" aria-describedby="basic-addon2"
                                                    {{ isset($w_2) && $w_2->clergy_member == 0 ? 'checked' : '' }}>
                                                <label class="form-check-label h6 pt-2"
                                                    for="clergy_member"><b>No</b></label>&nbsp;&nbsp;&nbsp;
                                                <label class="h6 pt-2">Are you a minister or clergy member?</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row d-lg-flex justify-content-center">
                                        <div class="col-lg-10">
                                            <div class="has-danger form-check form-check-inline mb-3">
                                                <input class="form-check-input me-3 h4" name="contribute"
                                                    type="radio" value="1" aria-label="contribute"
                                                    aria-describedby="basic-addon2" {{ isset($w_2) && $w_2->contribute == 1 ? 'checked' : '' }}>
                                                <label class="form-check-label h6 pt-2"
                                                    for="contribute"><b>Yes</b></label>
                                            </div>
                                            <div class="has-danger form-check form-check-inline mb-3">
                                                <input class="form-check-input me-3 h4" name="contribute"
                                                    type="radio" value="0" aria-label="contribute"
                                                    aria-describedby="basic-addon2" {{ isset($w_2) && $w_2->contribute == 0 ? 'checked' : '' }}>
                                                <label class="form-check-label h6 pt-2"
                                                    for="contribute"><b>No</b></label>&nbsp;&nbsp;&nbsp;
                                                <label class="h6 pt-2">Do you want to contribute $3 to the
                                                    Presidential Eelection Campaign Fund? <i
                                                        class="fa-regular fa-circle-question text-primary"></i></label>
                                            </div>
                                        </div>
                                    </div><br><br>
                                    <span class="d-flex justify-content-center">
                                        <hr class="mb-3 mt-0 w-75 hr-custom-width">
                                    </span>
                                </div>
                            </div>
                            <div class="tile-footer d-flex justify-content-between mx-lg-4 mb-lg-4">
                                <a class="btn btn-white border border-primary rounded-0" href="{{ route('w-2.edit', $w_2) }}"><i
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
