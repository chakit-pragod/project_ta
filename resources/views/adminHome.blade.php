@extends('layouts.adminLayout')

@section('title', 'announce')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-body">
                <div class="row">
                    <h4>จัดการประกาศ</h4>
                </div>
                <div class="row">
                    <a href="#" class="btn btn-primary btn-lg col-2" data-bs-toggle="modal"
                        data-bs-target="#addAnnounceModal">เพิ่มประกาศ</a>
                </div>

                <div class="col-12">
                    <!-- <div class="card"> -->
                    <div class="card-body">
                        <h5 class="card-title">ประกาศทั้งหมด</h5>
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>#</td>
                                    <td>หัวข้อประกาศ</td>
                                    <td>วันที่ประกาศ</td>
                                    <td>แก้ไข</td>
                                    <td>ลบ</td>
                                </tr>
                                @foreach($announces as $announce)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $announce->title }}</td>
                                    <td>{{ $announce->created_at }}</td> <!-- Assuming created_at is the date -->
                                    <td><a href=""><i class="fa-solid fa-pen"></i></a></td>
                                    <td><a href=""><i class="fa-solid fa-trash-can text-danger"></i></a></td>
                                </tr>
                                @endforeach
                            </thead>
                        </table>

                    </div>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="addAnnounceModal" tabindex="-1" aria-labelledby="addAnnounce" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addAnnounce">เพิ่มประกาศ</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addAnnounceForm" action="{{ route('admin.addAnnounce') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">หัวข้อ</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">เนื้อหา</label>
                        <textarea class="form-control" id="content" name="content" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">บันทึก</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('addAnnounceForm');
    if (form) {
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            
            Swal.fire({
                title: 'กำลังบันทึก...',
                html: 'กรุณารอสักครู่',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading()
                }
            });

            const formData = new FormData(this);
            fetch('{{ route("admin.addAnnounce") }}', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    'Accept': 'application/json'
                },
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                Swal.fire({
                    icon: 'success',
                    title: 'สำเร็จ!',
                    text: data.message,
                    confirmButtonText: 'ตกลง'
                }).then((result) => {
                    if (result.isConfirmed) {
                        location.reload();
                    }
                });
            })
            .catch(error => {
                console.error('Error:', error);
                Swal.fire({
                    icon: 'error',
                    title: 'เกิดข้อผิดพลาด!',
                    text: 'เกิดข้อผิดพลาดในการบันทึกข้อมูล',
                    confirmButtonText: 'ตกลง'
                });
            });
        });
    } else {
        console.error('Form with id "addAnnounceForm" not found');
    }
});
</script>
@endsection