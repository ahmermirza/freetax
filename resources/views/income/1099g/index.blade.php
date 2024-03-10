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
                        <h2 class="tile-title d-lg-flex justify-content-center h2"><b>Your Form 1099-G Unemployment Compensation Income</b></h2>
                        <div class="tile-body">
                            <div class="row ps-5">
                                <div class="col-lg-1">
                                </div>
                                <div class="col-lg-9">
                                    <div class="py-4 h6">Listed below is the 1099-G unemployment compensation you've entered.</div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-10">
                                    <div class="d-flex justify-content-between px-3">
                                        <div class="d-flex justify-content-between w-50">
                                            <b class="pt-3">Payer</b>
                                            <b class="pt-3">Name</b>
                                            <b class="pt-3">Income</b>
                                        </div>
                                        <div class="pt-2">
                                            <a href="{{ route('form1099-g.create') }}" class="btn btn-primary rounded-0"><b
                                                    class="text-white"><i class="fa fa-plus"></i>&nbsp;&nbsp;Add an Unemployment 1099-G</b></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row py-3 pb-5 d-flex justify-content-center">
                                <div class="col-lg-10 pb-2">
                                    <div class="px-4 pe-5 custom-index-card">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                @if ($form_1099gs->count())
                                                    @foreach ($form_1099gs as $form_1099g)
                                                <div class="d-flex justify-content-between m-4 mx-2 ms-0">
                                                    <div class="d-flex justify-content-between w-50">
                                                        <span class="h6 w-25">{{ $form_1099g->payer_name }}</span>
                                                        <span class="h6">{{ $form_1099g->belongs_to == 'you' ? $form_1099g->personal->first_name : $form_1099g->personal->spouse->first_name }}</span>
                                                        <span class="h6">${{ $form_1099g->unemployment_compensation }}</span>
                                                    </div>
                                                    <div>
                                                        <a href="{{ route('form1099-g.edit', $form_1099g) }}"
                                                            class="h6 pe-5">Edit</a>&nbsp;&nbsp;
                                                        <form action="{{ route('form1099-g.destroy', $form_1099g) }}" method="POST"
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
                                                    <p class="h6 small">No Form 1099 found.</p>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <p class="h6 pb-3 text-secondary">Only enter your Form 1099-G unemployment compensation here. We'll ask for your other unemployment compensation next.</p>
                                </div>
                            </div>
                            <span class="d-flex justify-content-center px-5">
                                <hr class="mb-3 mt-0 w-100">
                            </span>
                        </div>
                        <div class="tile-footer d-flex justify-content-between mx-lg-5 mb-lg-4">
                            <a class="btn btn-white border border-primary rounded-0" href="#"><i
                                    class="me-2 mb-5"></i><b class="text-primary">Previous Page</b></a>&nbsp;&nbsp;&nbsp;
                            <button class="btn btn-primary rounded-0" type="submit"><i class="me-2"></i><b
                                    class="text-light">No, Continue</b></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
