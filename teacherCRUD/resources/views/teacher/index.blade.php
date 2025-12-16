@extends('layout.app')

@section('content')
<div class="card shadow-sm">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Teacher List</h5>
        <a href="{{ route('teacher.create') }}" class="btn btn-success btn-sm">
            + Add Teacher
        </a>
    </div>

    <div class="card-body p-0">
        <table class="table table-hover mb-0">
            <thead class="table-primary">
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Tel</th>
                    <th width="200">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($teachers as $teacher)
                <tr>
                    <td>{{ $teacher->tid }}</td>
                    <td>{{ $teacher->full_name }}</td>
                    <td>{{ $teacher->tel }}</td>
                    <td>
                        <a href="{{ route('teacher.show', $teacher->tid) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('teacher.edit', $teacher->tid) }}" class="btn btn-warning btn-sm">Edit</a>

         
                        <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"
                                data-id="{{ $teacher->tid }}" data-name="{{ $teacher->full_name }}">
                            Delete
                        </button>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center text-muted py-3">
                        No teacher found
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>


    <div class="card-footer d-flex justify-content-between align-items-center">
        <div class="text-muted">
            Showing {{ $teachers->firstItem() }} to {{ $teachers->lastItem() }} of {{ $teachers->total() }} results
        </div>
        <div>
            {{ $teachers->links('pagination::bootstrap-5') }}
        </div>
    </div>
</div>


<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header border-0">
        <h5 class="modal-title" id="deleteModalLabel">Are you sure?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <div class="mb-3">
          <span class="text-danger" style="font-size:48px; font-weight: bold;">!</span>
        </div>
        <p>You are about to permanently delete <strong id="teacherNameInModal">this teacher</strong>.</p>
        <p>This action cannot be undone.</p>
      </div>
      <div class="modal-footer border-0">
        <form id="deleteForm" method="POST" action="">
          @csrf
          @method('DELETE')
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-danger">Yes, delete</button>
        </form>
      </div>
    </div>
  </div>
</div>

{{-- Script to populate modal with the selected teacher --}}
<script>
document.addEventListener('DOMContentLoaded', function () {
  const deleteModal = document.getElementById('deleteModal');
  const deleteForm = document.getElementById('deleteForm');
  const teacherNameInModal = document.getElementById('teacherNameInModal');


  deleteModal.addEventListener('show.bs.modal', function (event) {
    const button = event.relatedTarget;
    const teacherId = button.getAttribute('data-id');
    const teacherName = button.getAttribute('data-name');


    let actionUrlTemplate = "{{ route('teacher.destroy', ':id') }}";
    deleteForm.action = actionUrlTemplate.replace(':id', teacherId);


    teacherNameInModal.textContent = teacherName;
  });
});
</script>

@endsection