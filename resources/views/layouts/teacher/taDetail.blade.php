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
                    <h3>ลงเวลาการสอน</h3>
                    <div class="mb-3">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false">เลือกเดือน
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="#">มิถุนายน</a></li>
                                <li><a class="dropdown-item" href="#">กรกฎาคม</a></li>
                                <li><a class="dropdown-item" href="#">สิงหาคม</a></li>
                                <li><a class="dropdown-item" href="#">กันยายน</a></li>

                            </ul>
                        </div>
                    </div>

                    <h1>ชั่วโมงการสอน</h1>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>เวลาเริ่มเรียน</th>
                                    <th>เวลาเลิกเรียน</th>
                                    <th>เวลาที่สอน</th>
                                    <th>การเรียน</th>
                                    <th>การปฏิบัติงาน</th>
                                    <th>งานที่ปฏิบัติ</th>
                                    <th>หมายเหตุ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>5-8-2024 10:30</td>
                                    <td>5-8-2024 12:30</td>
                                    <td>2 ชั่วโมง</td>
                                    <td>บรรยาย</td>
                                    <td><span class="badge bg-success">เข้าปฏิบัติการสอน</span></td>
                                    <td><span class="badge bg-secondary">สอนคาบบรรยาย</span></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>6-8-2024 08:30</td>
                                    <td>6-8-2024 10:30</td>
                                    <td>2 ชั่วโมง</td>
                                    <td>แลป</td>
                                    <td><span class="badge bg-danger">ไม่ได้เข้าปฏิบัติการสอน</span></td>
                                    <td><span class="badge bg-warning text-dark">ลา</span></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>7-8-2024 10:30</td>
                                    <td>7-8-2024 12:30</td>
                                    <td>2 ชั่วโมง</td>
                                    <td>บรรยาย</td>
                                    <td><span class="badge bg-danger">ไม่ได้เข้าปฏิบัติการสอน</span></td>
                                    <td><span class="badge bg-secondary">เลือก</span></td>
                                    <td>วันหยุด</td>
                                </tr>
                                <tr>
                                    <td>10-8-2024 10:30</td>
                                    <td>10-8-2024 12:30</td>
                                    <td>2 ชั่วโมง</td>
                                    <td>บรรยาย</td>
                                    <td><span class="badge bg-danger">ไม่ได้เข้าปฏิบัติการสอน</span></td>
                                    <td><span class="badge bg-secondary">เลือก</span></td>
                                    <td>สอนชดเชย วันที่ 7-2-2024</td>
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
