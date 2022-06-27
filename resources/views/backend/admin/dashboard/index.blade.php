@extends('backend.layouts.apps')
<title>Doctor App | Dashboard</title>

@section('title')
Doctor App
@endsection

@push('style')
<style>

</style>
@endpush

@section('content')
<div class="card">
    <div class="card-header">
        <div class="card-title text-center">Main Dashboard</div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden dash1-card border-0 dash1">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-6 col-6">
                                <div class="">
                                    <span class="fs-14 font-weight-normal">Total User</span>
                                    <h2 class="mb-2 number-font carn1 font-weight-bold">{{$user->count()}}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden dash1-card border-0 dash2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-6 col-6">
                                <div class="">
                                    <span class="fs-14">Total Companies</span>
                                    <h2 class="mb-2 mt-1 number-font carn2 font-weight-bold">{{$coampnies->count()}}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden dash1-card border-0 dash2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-6 col-6">
                                <div class="">
                                    <span class="fs-14">Total Employees</span>
                                    <h2 class="mb-2 mt-1 number-font carn2 font-weight-bold">{{$employee->count()}}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
