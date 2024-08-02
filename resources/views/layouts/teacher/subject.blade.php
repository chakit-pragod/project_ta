@extends('layouts.teacherLayout')

@section('title', 'Teacher')
@section('break', 'ข้อมูลรายวิชา')

@section('content')
{{-- <div class="container"> --}}
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">{{ __('Teacher') }}</div>
                <div class="card-body">
                    ข้อมูลรายวิชา
                </div>
            </div>
        </div>
    </div>
{{-- </div> --}}
@endsection
