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
                        <h2 class="tile-title d-lg-flex justify-content-center h2"><b>Your Wages (Form W-2)</b></h2>
                        <div class="tile-body">
                            <br><br>
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-10">
                                    <div class="d-flex justify-content-between px-3">
                                        <div class="d-flex justify-content-between w-50">
                                            <b class="pt-3">Employer</b>
                                            <b class="pt-3">Name</b>
                                            <b class="pt-3">Wages</b>
                                        </div>
                                        <div class="pt-2">
                                            <a href="{{ route('w-2.create') }}" class="btn btn-primary rounded-0 btn-sm"><b
                                                    class="text-white"><i class="fa fa-plus"></i>&nbsp;&nbsp;Add
                                                    W-2 for yourself</b></a>&nbsp;
                                            <a href="{{ route('spouse.w-2.create') }}" class="btn btn-primary rounded-0 btn-sm"><b
                                                    class="text-white"><i class="fa fa-plus"></i>&nbsp;&nbsp;Add W-2 for your spouse</b></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row py-3 pb-5 d-flex justify-content-center">
                                <div class="col-lg-10 pb-2">
                                    <div class="px-4 pe-5 custom-index-card">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                @if ($w_2s->count())
                                                    @foreach ($w_2s as $w_2)
                                                    <div class="d-flex justify-content-between m-4 mx-2 ms-0">
                                                        <div class="d-flex justify-content-between w-50">
                                                            <span class="h6">{{ $w_2->emp_name }}</span>
                                                            <span class="h6">{{ $w_2->personal_id ? $w_2->personal->first_name : $w_2->spouse->first_name }}</span>
                                                            <span class="h6">${{ $w_2->federal_wages }}</span>
                                                        </div>
                                                        <div>
                                                            <a href="{{ route('w-2.edit', $w_2) }}"
                                                                class="h6 pe-5">Edit</a>&nbsp;&nbsp;
                                                            <form action="{{ route('w-2.destroy', $w_2) }}" method="POST"
                                                                class="d-inline">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-link text-dark pe-4"><i
                                                                        class="fa fa-trash" aria-hidden="true"
                                                                        onclick="return confirm('Are you sure you want to delete this?')"></i></button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                    @endforeach
                                                @else
                                                <div class="d-flex justify-content-center m-4 mx-2 ms-0">
                                                    <p class="h6 small">No W-2 found.</p>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <p class="h6 pb-3">If you have any more W-2s for wages and salaries, add them here. You can come back and enter them later if you don't have them now.</p>
                                    <p class="h6">If you have a 1099 form, we'll work on that later.</p>
                                </div>
                            </div>
                            <span class="d-flex justify-content-center">
                                <hr class="mb-3 mt-0 w-75">
                            </span>
                        </div>
                        <div class="tile-footer d-flex justify-content-between px-lg-5 mx-lg-5 mb-lg-4">
                            <a class="btn btn-white border border-primary rounded-0" href="#"><i
                                    class="me-2 mb-5"></i><b class="text-primary">Previous Page</b></a>&nbsp;&nbsp;&nbsp;
                            <a class="btn btn-primary rounded-0" href="{{ route('income.unemployment.create') }}"><i class="me-2"></i><b
                                    class="text-light">Continue</b></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
