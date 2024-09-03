@extends('layouts.adminLayout')

@section('title', 'Announce Management')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card bg-primary text-white p-3">
                        <h1>Data from API</h1>

                        @if (!empty($data))
                            <ul>
                                @foreach ($data as $item)
                                    <li>{{ $item['semester_id'] ?? 'N/A' }} - {{ $item['year'] ?? 'N/A' }} -
                                        {{ $item['semester'] ?? 'N/A' }}</li>
                                @endforeach
                            </ul>
                        @else
                            <p>No data found.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
