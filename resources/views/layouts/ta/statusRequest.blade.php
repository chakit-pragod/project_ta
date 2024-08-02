@extends('layouts.taLayout')

@section('title', 'request')
@section('break', 'สถานะคำร้องการสมัครผู้ช่วยสอน')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <!-- <div class="card-header">{{ __('Admin') }}</div> -->
            <div class="card-body">
                <div class="container mt-4">
                    <h4 class="mb-3">คำร้องการสมัครผู้ช่วยสอน</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <td>ลำดับ</td>
                                    <td>รหัสนักศึกษา</td>
                                    <td>ชื่อ-นามสกุล</td>
                                    <td>รายวิชาที่สมัคร</td>
                                    <td>วันที่สมัคร</td>
                                    <td>สถานะการสมัคร</td>
                                    <td>วันที่อนุมัติ</td>
                                    <td>ความคิดเห็น</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>643021342-5</td>
                                    <td>สุพัตรา แพงจันทร์</td>
                                    <td>SC313004 Software Engineering</td>
                                    <td>10-3-2567</td>
                                    <td><span class="badge bg-success">อนุมัติ</span></td>
                                    <td>20-5-2024</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>643021342-5</td>
                                    <td>สุพัตรา แพงจันทร์</td>
                                    <td>SC312003 Dabase Management...</td>
                                    <td>10-3-2567</td>
                                    <td><span class="badge bg-success">อนุมัติ</span></td>
                                    <td>20-5-2024</td>
                                    <td></td>
                                </tr>
                            </thead>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection