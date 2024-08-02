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
                    <a href="#" class="btn btn-primary btn-lg col-2" data-bs-toggle="modal" data-bs-target="#addAnnounceModal">เพิ่มประกาศ</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">ประกาศทั้งหมด</h5>
                <ul class="list-group">
                    @foreach($announces as $announce)
                        <li class="list-group-item">
                            <h6>{{ $announce->title }}</h6>
                            <p>{{ $announce->content }}</p>
                            <!-- <small>{{ $announce->created_at->format('d/m/Y H:i') }}</small> -->
                        </li>
                    @endforeach
                </ul>
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
                <form id="addAnnounceForm">
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
    $(document).ready(function() {
    $('#addAnnounceForm').on('submit', function(e) {
        e.preventDefault();
        
        var formData = {
            title: $('#title').val(),
            content: $('#content').val(),
            _token: $('input[name="_token"]').val()
        };
        
        $.ajax({
            url: "{{ route('admin.addAnnounce') }}",
            method: 'POST',
            data: formData,
            dataType: 'json',
            success: function(response) {
                $('#addAnnounceModal').modal('hide');
                alert(response.message);
                location.reload();
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
                alert('เกิดข้อผิดพลาด: ' + (xhr.responseJSON ? xhr.responseJSON.message : error));
            }
        });
    });
});
</script>
@endsection