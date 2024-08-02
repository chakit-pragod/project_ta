@extends('layouts.teacherLayout')

@section('title', 'Teacher')
@section('break', 'คำร้องการสมัครผู้ช่วยสอน')

@section('content')
{{-- <div class="container"> --}}
    <div class="row">
        <div class="col-12 mt-5">
            <div class="card mb-4">
                <div class="card-header">{{ __('Teacher') }}</div>
                <div class="card-body">
                    คำร้องการสมัครผู้ช่วยสอน
                    <div>
                        <table>
                            <tr>
                                <th>ลำดับ</th>

                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- </div> --}}
@endsection
