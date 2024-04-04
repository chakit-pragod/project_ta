@extends('layouts.adminLayout')

@section('title', 'Admin')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">{{ __('Admin') }}</div>
                <div class="card-body">
                    You are a Admin User.
                </div>
            </div>
        </div>
    </div>
@endsection



{{-- @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
    
                    <div class="card-body">
                        You are a Admin User.
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection --}}
