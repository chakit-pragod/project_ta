@extends('layouts.taLayout')

@section('title', 'request')
@section('break', 'ข้อมูลรายวิชาผู้ช่วยสอน')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <!-- <div class="card-header">{{ __('Admin') }}</div> -->
            <div class="card-body">
                <h4>
                    ข้อมูลรายวิชาผู้ช่วยสอน
                </h4>
                <div class="card-body">
                    <h5 class="card-title">รายวิชาทั้งหมด</h5>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <td>ลำดับ</td>
                                    <td>รหัสวิชา</td>
                                    <td>รายวิชา</td>
                                    <td>ปีการศึกษา</td>
                                    <td>อาจารย์ประจำวิชา</td>
                                    <td>สาขา</td>
                                    <td>โครงการ</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>SC312003</td>
                                    <td>Dabase Management System and...</td>
                                    <td>2/2567</td>
                                    <td>ผศ.ดร.พุธษดี ศิริแสงตระกูล</td>
                                    <td>วิทยาการคอมพิวเตอร์</td>
                                    <td></td>
                                    <td><a href="/attendances">ลงเวลา</a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>SC312003</td>
                                    <td>Dabase Management System and...</td>
                                    <td>2/2567</td>
                                    <td>ผศ.ดร.พุธษดี ศิริแสงตระกูล</td>
                                    <td>วิทยาการคอมพิวเตอร์</td>
                                    <td>โครงการพิเศษ</td>
                                    <td><a href="">ลงเวลา</a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>SC313004</td>
                                    <td>Software Engineering</td>
                                    <td>2/2567</td>
                                    <td>ผศ.ดร.ชิตสุธา สุ่มเล็ก</td>
                                    <td>วิทยาการคอมพิวเตอร์</td>
                                    <td></td>
                                    <td><a href="">ลงเวลา</a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>SC313004</td>
                                    <td>Software Engineering</td>
                                    <td>2/2567</td>
                                    <td>ผศ.ดร.ชิตสุธา สุ่มเล็ก</td>
                                    <td>วิทยาการคอมพิวเตอร์</td>
                                    <td>โครงการพิเศษ</td>
                                    <td><a href="">ลงเวลา</a></td>
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