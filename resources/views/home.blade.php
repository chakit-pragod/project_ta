@extends('layouts.taLayout')

@section('title', 'Teaching assistant')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header">{{ __('Teaching Assistant') }}</div>
            <div class="card-body">
                {{-- @if (auth()->user()->is_admin == 1)
                        <a href="{{ url('admin/routes') }}">Admin</a>
                    @else
                        <div class="panel-heading">You are a Admin User.</div>
                    @endif --}}
                You are a Teaching Assistant
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
                    @if (auth()->user()->is_admin == 1)
                        <a href="{{ url('admin/routes') }}">Admin</a>
                    @else
                        <div class="panel-heading">Normal User</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}


