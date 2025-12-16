@extends('layout.app')

@section('content')
<div class="card shadow-sm">
    <div class="card-header">
        {{-- Displays the teacher's full name in the card header --}}
        <h5 class="mb-0">{{ $teacher->full_name }}</h5>
    </div>
    
    <div class="card-body">
        {{-- Display the teacher's telephone number --}}
        <p class="mb-1"><strong>Tel:</strong> {{ $teacher->tel }}</p>
        
        {{-- Button to return to the teacher list page --}}
        <a href="{{ route('teacher.index') }}" class="btn btn-secondary mt-3">Back to List</a>
        
        {{-- Optional: Add Edit/Delete buttons here if needed --}}
        {{-- 
        <a href="{{ route('teacher.edit', $teacher->tid) }}" class="btn btn-warning mt-3 ms-2">Edit</a>
        --}}
    </div>
</div>
@endsection