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
                    <div class="container shadow-lg bg-body rounded p-5">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ลำดับ</th>
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
                                    <td>1</td>
                                    <td>643021342-5</td>
                                    <td>สุพัตรา แพงจันทร์</td>
                                    <td>SC312003 Data Structure</td>
                                    <td>10-06-2567</td>
                                    <td>อนุมัติ</td>
                                    <td>15-06-2567</td>
                                    <td></td>
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
