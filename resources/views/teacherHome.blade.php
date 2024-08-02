@extends('layouts.teacherLayout')

@section('title', 'Teacher')
@section('break', 'คำร้องการสมัครผู้ช่วยสอน')

@section('content')
    {{-- <div class="container"> --}}
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">{{ __('Teacher') }}</div>
                <div class="card-body">
                    คำร้องการสมัครผู้ช่วยสอน
                    <div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <td scope="col">#</td>
                                    <th scope="col">รหัสนักศึกษา</th>
                                    <th scope="col">ชื่อ-นามสกุล</th>
                                    <th scope="col">รายวิชาที่สมัคร</th>
                                    <th scope="col">วันที่สมัคร</th>
                                    <th scope="col">สถานะการสมัคร</th>
                                    <th scope="col">วันที่อนุมัติ</th>
                                    <th scope="col">ความคิดเห็น</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>Otto</td>
                                </tr>
                                <tr>
                                    <th>1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>Otto</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- </div> --}}
@endsection
