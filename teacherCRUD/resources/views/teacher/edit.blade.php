@extends('layout.app')

@section('content')
<div class="card shadow-sm">
    <div class="card-header">
        <h5 class="mb-0">Edit Teacher</h5>
    </div>
    
    <div class="card-body">
        {{-- Form action targets the 'teacher.update' route with the specific teacher ID --}}
        <form method="POST" action="{{ route('teacher.update', $teacher->tid) }}">
            
            {{-- Required for security --}}
            @csrf 
            
            {{-- Required to tell the framework this is a PUT/PATCH request, not a standard POST --}}
            @method('PUT')
            
            {{-- Full Name Field --}}
            <div class="mb-3">
                <label for="full_name" class="form-label">Full Name</label>
                {{-- Field is pre-filled with the current teacher's name --}}
                <input type="text" name="full_name" id="full_name" class="form-control" value="{{ old('full_name', $teacher->full_name) }}">
            </div>

            {{-- Telephone Field --}}
            <div class="mb-3">
                <label for="tel" class="form-label">Tel</label>
                {{-- Field is pre-filled with the current teacher's telephone number --}}
                <input type="text" name="tel" id="tel" class="form-control" value="{{ old('tel', $teacher->tel) }}">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            {{-- Optional: Add a Cancel button --}}
            {{-- <a href="{{ route('teacher.index') }}" class="btn btn-secondary">Cancel</a> --}}
        </form>
    </div>
</div>
@endsection