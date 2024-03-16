@extends('layouts.app')

@section('title', 'Deductions / Credits')

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
                        <h2 class="tile-title d-lg-flex justify-content-center h2"><b>Your Mortgage Interest (Form 1098)</b></h2>
                        <div class="tile-body">
                            <div class="row ps-5">
                                <div class="col-lg-1">
                                </div>
                                <div class="col-lg-9">
                                    <div class="py-4 h6">Listed below is the mortgage interest (1098) information you've already entered.</div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-10">
                                    <div class="d-flex justify-content-between px-3">
                                        <div class="d-flex justify-content-between w-50">
                                            <b class="pt-3">Mortgage Lender</b>
                                            <b class="pt-3">Interest</b>
                                        </div>
                                        <div class="pt-2">
                                            <a href="{{ route('mortgage-interest.create') }}" class="btn btn-primary rounded-0 btn-sm"><b
                                                    class="text-white"><i class="fa fa-plus"></i>&nbsp;&nbsp;Add 1098 Mortgage Interest</b></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row py-3 pb-5 d-flex justify-content-center">
                                <div class="col-lg-10 pb-2">
                                    <div class="px-4 pe-5 custom-index-card">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                @if ($mortgage_interests->count())
                                                    @foreach ($mortgage_interests as $mortgage_interest)
                                                <div class="d-flex justify-content-between m-4 mx-2 ms-0">
                                                    <div class="d-flex justify-content-between w-50">
                                                        <span class="h6">{{ $mortgage_interest->lender_name }}</span>
                                                        <span class="h6">${{ ($mortgage_interest->deductible_mortgage) ? $mortgage_interest->deductible_mortgage : '0' }}</span>
                                                    </div>
                                                    <div>
                                                        <a href="{{ route('mortgage-interest.edit', $mortgage_interest) }}"
                                                            class="h6 pe-5">Edit</a>&nbsp;&nbsp;
                                                        <form action="{{ route('mortgage-interest.destroy', $mortgage_interest) }}" method="POST"
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
                                                    <p class="h6 small">No Form 1098 found.</p>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <p class="h6 pb-3"><b>Do you need to enter any more mortgage interest (1098) forms received from your mortgage lender?</b></p>
                                    <p class="h6 text-secondary">If you have mortgage interest that is on a Form 1098 issued in another person's name or from a seller-financed loan, select I have other expenses on the Homeowner Expenses screen.</p>
                                </div>
                            </div>
                            <span class="d-flex justify-content-center">
                                <hr class="mb-3 mt-0 w-75">
                            </span>
                        </div>
                        <div class="tile-footer d-flex justify-content-between px-lg-5 mx-lg-5 mb-lg-4">
                            <a class="btn btn-white border border-primary rounded-0" href="{{ route('itemized.deductions') }}"><i
                                    class="me-2 mb-5"></i><b class="text-primary">Previous Page</b></a>&nbsp;&nbsp;&nbsp;
                            <a class="btn btn-primary rounded-0" href="{{ route('charities-donations.create') }}"><i class="me-2"></i><b
                                    class="text-light">No, Continue</b></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
