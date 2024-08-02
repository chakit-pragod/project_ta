@extends('layouts.teacherLayout')

@section('title', 'Teacher')
@section('break', 'รายวิชาทั้งหมด')
@section('break2', 'ข้อมูลรายวิชา')
@section('break3', 'ข้อมูลผู้ช่วยสอน')

@section('content')
    {{-- <div class="container"> --}}
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h1>ข้อมูลผู้ช่วยสอน</h1>
                    <div class="container shadow-lg bg-body rounded p-5">
                        <p><span class="fw-bold text-dark">ชื่อ-นามสกุล : </span>นายชาคริต ปรากฎ</p>
                        <p><span class="fw-bold text-dark">รหัสนักศึกษา : </span>643021316-6</p>
                        <p><span class="fw-bold text-dark">ระดับ : </span>ปริญญาตรี</p>
                        <p><span class="fw-bold text-dark">เบอร์โทรศุพท์ : </span>094-525-0692</p>
                        <p><span class="fw-bold text-dark">อีเมล : </span>chakit.p@kkumail</p>
                    </div>
                </div>
                <div class="card-body">
                    <h1>ชั่วโมงการสอน</h1>
                    <div class="container shadow-lg bg-body rounded p-5">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">วัน/เดือน/ปี</th>
                                    <th scope="col">เวลาปฏิบัติงาน</th>
                                    <th scope="col">กลุ่มเรียน<br>(ปกติ/พิเศษ)</th>
                                    <th scope="col">รหัสนักศึกษา</th>
                                    <th scope="col">ระดับ</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>ชาคริต</td>
                                    <td>ปรากฏ</td>
                                    <td>643021316-6</td>
                                    <td>ปริญญาตรี</td>
                                    <td><a class="fw-bold" href="#">ตรวจสอบข้อมูล</a></td>
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
