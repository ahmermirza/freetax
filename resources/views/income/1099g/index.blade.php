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
        <div class="row p-4 pt-0">
            <div class="col-lg-12">
                <div class="tile">
                    <h2 class="tile-title d-flex justify-content-center text-center h2"><b>Your Form 1099-G Unemployment
                        Compensation Income</b></h2>
                    <div class="tile-body">
                        <br><br>
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-8">
                                <div class="py-4 h6">Listed below is the 1099-G unemployment compensation you've
                                    entered.</div>
                            </div>
                            <div class="col-lg-10 col-12">
                                <div class="row">
                                    <div class="col-lg-11 col-12 d-lg-flex justify-content-end pb-2">
                                        <a href="{{ route('form1099-g.create') }}"
                                            class="btn btn-primary button-custom-width rounded-0 btn-sm"><b
                                                class="text-white"><i class="fa fa-plus"></i>&nbsp;&nbsp;Add an
                                                Unemployment 1099-G</b></a>
                                    </div>
                                </div>
                                <div class="row d-flex justify-content-center">
                                    <div class="col-lg-10 col-12">
                                        <table class="table table-borderless m-auto">
                                            <thead>
                                                <tr>
                                                    <th class="w-25">Payer</th>
                                                    <th class="w-25">Name</th>
                                                    <th class="w-25">Income</th>
                                                </tr>
                                            </thead>
                                            @if ($form_1099gs->count())
                                            <tbody class="border table-borderless">
                                                @foreach ($form_1099gs as $form_1099g)
                                                <tr>
                                                    <td class="align-middle">{{ $form_1099g->payer_name }}</td>
                                                    <td class="align-middle">
                                                        {{ $form_1099g->belongs_to == 'you' ? $form_1099g->personal->first_name : $form_1099g->personal->spouse->first_name }}
                                                    </td>
                                                    <td class="align-middle">
                                                        ${{ $form_1099g->unemployment_compensation }}</td>
                                                    <td class="text-end align-middle">
                                                        <a href="{{ route('form1099-g.edit', $form_1099g) }}"
                                                            class="h6">Edit</a>
                                                    </td>
                                                    <td class="text-start align-middle">

                                                        <form
                                                            action="{{ route('form1099-g.destroy', $form_1099g) }}"
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
                                                <p class="h6 small">No Form 1099 found.</p>
                                            </div>
                                            @endif
                                        </table>
                                        <br>
                                        <p class="h6 pb-2 text-secondary">Only enter your Form 1099-G unemployment compensation here. We'll ask for your other unemployment compensation next.</p>
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
                                    href="{{ route('income.other.unemployment.create') }}">
                                    <b class="text-light">No, Continue</b>
                                </a>
                                <a class="btn btn-white border border-primary rounded-0 button-custom-width"
                                    href="{{ route('income.unemployment.create') }}">
                                    <b class="text-primary">Previous Page</b>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 w-100">
                                <a class="btn btn-primary rounded-0 d-none d-lg-block button-custom-width"
                                    href="{{ route('income.other.unemployment.create') }}">
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