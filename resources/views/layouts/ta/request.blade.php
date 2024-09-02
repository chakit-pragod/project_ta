@extends('layouts.taLayout')

@section('title', 'request')
@section('break', 'ยื่นคำร้องสมัครผู้ช่วยสอน')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <!-- <div class="card-header">{{ __('Admin') }}</div> -->
                <div class="card-body">
                    <div class="container">
                        <h4 class="mb-4">ยื่นคำร้องสมัครผู้ช่วยสอน</h4>

                        <form method="POST" enctype="multipart/form-data" action="{{ route('request.store') }}">
                            <h5 class="mb-3">แบบฟอร์มกรอกรายละเอียดผู้ช่วยสอน</h5>

                            <div class="row mb-3">
                                <div class="col-md-1">
                                    <input type="text" class="form-control" placeholder="คำนำหน้า">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" placeholder="ชื่อ">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" placeholder="นามสกุล">
                                </div>
                                <div class="col-md-3">
                                    <input type="tel" class="form-control" placeholder="รหัสนักศึกษา">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" placeholder="อีเมล">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" placeholder="รหัสบัตรประจำตัวประชาชน">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" placeholder="เบอร์โทรศัพท์">
                                </div>
                            </div>
                            {{-- subject --}}
                            {{-- <div class="mb-3">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>เลือกรายวิชาที่ต้องการสมัคร</option>
                                    @foreach ($subjects as $subject)
                                        <option value="{{ $subject->id }}">{{ $subject->subject_id }}
                                            {{ $subject->name_en }}</option>
                                    @endforeach
                                </select>
                            </div> --}}
                            <div class="mb-3">
                                <small class="text-danger">*** นักศึกษาสามารถเป็นผู้ช่วยสอนได้ไม่เกิน 3 รายวิชา</small>
                            </div>
                            <button type="submit" class="btn btn-success">ยืนยันการสมัคร</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
