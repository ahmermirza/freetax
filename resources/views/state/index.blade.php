@extends('layouts.app')

@section('title', 'State')

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
                        <h2 class="tile-title d-lg-flex justify-content-center h2"><b>Your State Tax Returns</b></h2>
                        <div class="tile-body">
                            <br><br>
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-10">
                                    <div class="d-flex justify-content-between px-3">
                                        <div class="d-flex justify-content-between w-50">
                                            <b class="pt-3">Type of Return</b>
                                        </div>
                                        <div class="pt-2">
                                            <a href="{{ route('state.name.create') }}" class="btn btn-primary rounded-0 btn-sm"><b
                                                    class="text-white"><i class="fa fa-plus"></i>&nbsp;&nbsp;Add a State Return</b></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row py-3 pb-5 d-flex justify-content-center">
                                <div class="col-lg-10 pb-2">
                                    <div class="px-4 pe-5 custom-index-card">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                @if ($states->count())
                                                    @foreach ($states as $state)
                                                    <div class="d-flex justify-content-between m-4 mx-2 ms-0">
                                                        <div class="d-flex justify-content-between w-50">
                                                            <span class="h6">{{ "Full-Year Resident" }}</span>
                                                        </div>
                                                        <div>
                                                            <a href="{{ route('state.name.create', $state) }}"
                                                                class="h6 pe-5">Edit</a>&nbsp;&nbsp;
                                                            <form action="{{ route('state.destroy', $state) }}" method="POST"
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
                                                    <p class="h6 small">No State found.</p>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                </div>
                            </div>
                            <span class="d-flex justify-content-center">
                                <hr class="mb-3 mt-0 w-75">
                            </span>
                        </div>
                        <div class="tile-footer d-flex justify-content-between px-lg-5 mx-lg-5 mb-lg-4">
                            <a class="btn btn-white border border-primary rounded-0" href="#"><i
                                    class="me-2 mb-5"></i><b class="text-primary">Previous Page</b></a>&nbsp;&nbsp;&nbsp;
                            <button class="btn btn-primary rounded-0" type="submit"><i class="me-2"></i><b
                                    class="text-light">Continue</b></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
