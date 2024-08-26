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

                    <form>
                        <h5 class="mb-3">แบบฟอร์มกรอกรายละเอียดผู้ช่วยสอน</h5>

                        <div class="row mb-3">
                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="ชื่อ" 
                                value="{{ Auth::user()->students ? Auth::user()->students->fName : 'N/A' }}" disabled>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="นามสกุล" 
                                value="{{ Auth::user()->students ? Auth::user()->students->lName : 'N/A' }}" disabled>
                            </div>
                            <div class="col-md-4">
                                <input type="tel" class="form-control" placeholder="รหัสนักศึกษา" 
                                value="{{ Auth::user()->students ? Auth::user()->students->student_id : 'N/A' }}" disabled>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="รหัสประจำตัวประชาชน" 
                                value="{{ Auth::user()->students ? Auth::user()->students->card_id : 'N/A' }}" disabled>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="เบอร์โทรศัพท์" 
                                value="{{ Auth::user()->students ? Auth::user()->students->phone : 'N/A' }}" disabled>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="อีเมล" 
                                value="{{ Auth::user()->students ? Auth::user()->students->email : 'N/A' }}" disabled>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="กรอกเลขบัญชีธนาคาร">
                            </div>
                            <div class="col-md-6">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>เลือกบัญชีธนาคาร</option>
                                    <option value="1">02 ธนาคารกรุงเทพ</option>
                                    <option value="2">04 ธนาคารกสิกรไทย</option>
                                    <option value="3">06 ธนาคารกรุงไทย</option>
                                    <option value="4">11 ธนาคารทหารไทยธนชาติ</option>
                                    <option value="5">14 ธนาคารไทยพาณิชย์</option>
                                    <option value="6">25 ธนาคารกรุงศรีอยุธยา</option>
                                    <option value="7">30 ธนาคารออมสิน</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>เลือกรายวิชาที่ต้องการสมัคร</option>
                                @foreach ($subjects as $subject)
                                    <option value="{{ $subject->id }}">{{ $subject->name_th }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <a href="">
                                <i class="fa-solid fa-square-plus"></i>
                                <label class="form-check-label" for="selectSubjects">
                                    เลือกรายวิชาเพิ่ม
                                </label>
                            </a>
                            <small class="text-danger">*** นักศึกษาสามารถเลือกได้ไม่เกิน 3 รายวิชา</small>
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="applicantType" id="newApplicant"
                                    checked>
                                <label class="form-check-label" for="newApplicant">
                                    ผู้สมัครรายเดิม
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="applicantType" id="oldApplicant">
                                <label class="form-check-label" for="oldApplicant">
                                    ผู้สมัครรายใหม่
                                </label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="fileUpload" class="form-label">อัปโหลดตารางเรียน แบบแจ้งข้อมูลหนี้บุลคลากร
                                สำเนาบัตรประชาชน สำเนาบัญชีธนาคาร </label>
                            <input class="form-control" type="file" id="fileUpload">
                        </div>

                        <button type="submit" class="btn btn-success">ยืนยันการสมัคร</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection