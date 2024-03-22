@extends('layouts.app')

@section('title', 'Personal')

@section('content')
    <div class="d-flex justify-content-center p-lg-4 p-3">
        <div class="col-lg-9 content-shadow shadow-none rounded-3">
            <div class="row p-4 pt-5">
                <div class="d-lg-flex justify-content-between">
                    <i class="fa fa-arrow-left text-primary" aria-hidden="true"></i>
                </div>
            </div>
            <div class="row p-4 pt-0">
                <div class="col-lg-12">
                    <div class="tile">
                        <h2 class="tile-title d-flex justify-content-center h2"><b>Your Wages (Form W-2)</b></h2>
                        <div class="tile-body">
                            <br><br>
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-10 col-12">
                                        <div class="row">
                                            <div class="col-lg-9 col-12 d-lg-flex justify-content-end pe-lg-0 pb-2 pb-lg-0">
                                                <a href="{{ route('w-2.create') }}" class="btn btn-primary button-custom-width rounded-0 btn-sm"><b
                                                    class="text-white"><i class="fa fa-plus"></i>&nbsp;&nbsp;Add
                                                    W-2 for yourself</b></a>
                                            </div>
                                            <div class="col-lg-3 col-12 d-lg-flex justify-content-end pb-2 pb-lg-0">
                                                <a href="{{ route('spouse.w-2.create') }}" class="btn btn-primary button-custom-width rounded-0 btn-sm"><b
                                                    class="text-white"><i class="fa fa-plus"></i>&nbsp;&nbsp;Add W-2 for your spouse</b></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-8 col-9 ms-lg-3 ps-lg-2">
                                                <table class="table table-borderless my-2">
                                                    <thead>
                                                        <tr>
                                                            <th class="w-25">Employer</th>
                                                            <th class="w-25">Name</th>
                                                            <th class="w-25">Wages</th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-10">
                                    <div class="px-lg-3">
                                        <div class="row">
                                            <div class="col-lg-12 py-2 py-lg-0">
                                                @if ($w_2s->count())
                                                    @foreach ($w_2s as $w_2)
                                                    <table class="table border table-borderless">
                                                        <thead>
                                                        </thead>
                                                        <tbody>
                                                          <tr>
                                                            <td class="w-25">{{ $w_2->emp_name }}</td>
                                                            <td class="w-25">{{ $w_2->personal_id ? $w_2->personal->first_name : $w_2->spouse->first_name }}</td>
                                                            <td class="ps-3 pe-lg-5 ps-lg-3">${{ $w_2->federal_wages }}</td>
                                                            <td class="ps-4 ps-lg-5 pt-0 w-50">
                                                                <form action="{{ route('w-2.destroy', $w_2) }}" method="POST"
                                                                class="">
                                                                @csrf
                                                                @method('DELETE')
                                                                <a href="{{ route('w-2.edit', $w_2) }}"
                                                                    class="h6">Edit</a>
                                                                    <button class="btn btn-link text-dark"><i
                                                                            class="fa fa-trash" aria-hidden="true"
                                                                            onclick="return confirm('Are you sure you want to delete this?')"></i></button>
                                                                        </form>
                                                                        
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        {{-- <div class="d-flex justify-content-between m-4 mx-2 ms-0">
                                                            <div class="d-flex justify-content-between w-50">
                                                                <span class="h6"></span>
                                                                <span class="h6"></span>
                                                                <span class="h6"></span>
                                                            </div>
                                                            <div>
                                                            </div>
                                                            </div> --}}
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
                                <hr class="mb-3 mt-0 w-75 hr-custom-width">
                            </span>
                        </div>
                        <div class="tile-footer d-lg-flex justify-content-between px-lg-5 mx-lg-5 mb-lg-4">
                            <div class="row">
                                <div class="col-lg-8 w-100">
                                    <a class="btn btn-primary rounded-0 d-block d-lg-none mb-2 button-custom-width" href="{{ route('income.unemployment.create') }}">
                                        <b class="text-light">Continue</b>
                                    </a>
                                    <a class="btn btn-white border border-primary rounded-0 button-custom-width" href="{{ route('personal.completed') }}">
                                        <b class="text-primary">Previous Page</b>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8 w-100">
                                    <a class="btn btn-primary rounded-0 d-none d-lg-block button-custom-width" href="{{ route('income.unemployment.create') }}">
                                        <b class="text-light">Continue</b>
                                    </a>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
