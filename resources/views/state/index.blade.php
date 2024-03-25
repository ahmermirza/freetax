@extends('layouts.app')

@section('title', 'State')

@section('content')
<div class="d-flex justify-content-center p-lg-4 p-lg-3">
    <div class="col-lg-9 col-11 content-shadow shadow-none rounded-3">
        <div class="row p-4 pt-5">
            <div class="d-lg-flex justify-content-between">
                <i class="fa fa-arrow-left text-primary" aria-hidden="true"></i>
            </div>
        </div>
        <div class="row p-4 pt-0">
            <div class="col-lg-12">
                <div class="tile">
                    <h2 class="tile-title d-flex justify-content-center text-center h2"><b>Your State Tax Returns</b></h2>
                    <div class="tile-body">
                        <br><br>
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-10 col-12">
                                <div class="row">
                                    <div class="col-lg-11 col-12 d-lg-flex justify-content-end pb-2">
                                        <a href="{{ route('state.name.create', null) }}"
                                            class="btn btn-primary button-custom-width rounded-0 btn-sm"><b
                                                class="text-white"><i class="fa fa-plus"></i>&nbsp;&nbsp;Add a State Return</b></a>
                                    </div>
                                </div>
                                <div class="row d-flex justify-content-center">
                                    <div class="col-lg-10 col-12">
                                        <table class="table table-borderless m-auto">
                                            <thead>
                                                <tr>
                                                    <th class="w-75">Type of Return</th>
                                                </tr>
                                            </thead>
                                            @if ($states->count())
                                            <tbody class="border table-borderless">
                                                @foreach ($states as $state)
                                                <tr>
                                                    <td class="align-middle">@if($state->resident_type == 'full'){{ 'Full-year resident' }}@elseif($state->resident_type == 'part'){{ 'Part-year resident' }}@else{{ 'Nonresident' }}@endif</td>
                                                    <td class="text-end align-middle">
                                                        <a href="{{ route('state.name.create', $state) }}"
                                                            class="h6">Edit</a>
                                                    </td>
                                                    <td class="text-start align-middle">

                                                        <form action="{{ route('state.destroy', $state) }}"
                                                            method="POST" class="">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-link text-dark"><i
                                                                    class="fa fa-trash" aria-hidden="true"
                                                                    onclick="return confirm('Are you sure you want to delete this?')"></i></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            @else
                                            <div class="d-flex justify-content-center m-4 mx-2 ms-0">
                                                <p class="h6 small">No State Return found.</p>
                                            </div>
                                            @endif
                                        </table>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <span class="d-flex justify-content-center">
                            <hr class="mb-3 mt-0 w-75 hr-custom-width">
                        </span>
                    </div>
                    <div class="tile-footer d-lg-flex justify-content-between px-lg-5 mx-lg-5 mb-lg-4">
                        <div class="row">
                            <div class="col-lg-8 w-100">
                                <a class="btn btn-primary rounded-0 d-block d-lg-none mb-2 button-custom-width"
                                    href="{{ route('state.completed') }}">
                                    <b class="text-light">No, Continue</b>
                                </a>
                                <a class="btn btn-white border border-primary rounded-0 button-custom-width"
                                    href="{{ route('deductions.completed') }}">
                                    <b class="text-primary">Previous Page</b>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 w-100">
                                <a class="btn btn-primary rounded-0 d-none d-lg-block button-custom-width"
                                    href="{{ route('state.completed') }}">
                                    <b class="text-light">No, Continue</b>
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