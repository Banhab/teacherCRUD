@extends('layout.app')

@section('content')
<div class="card shadow-sm">
    <div class="card-header">
        <h5 class="mb-0">Add Teacher</h5>
    </div>
    
    <div class="card-body">
        {{-- Form to submit new teacher data to the teacher.store route --}}
        <form method="POST" action="{{ route('teacher.store') }}">
            
            {{-- Required for all POST requests in Laravel for security --}}
            @csrf 
            
            {{-- Full Name Field --}}
            <div class="mb-3">
                <label for="full_name" class="form-label">Full Name</label>
                <input type="text" name="full_name" id="full_name" class="form-control" placeholder="Enter full name" value="{{ old('full_name') }}">
                {{-- Add error display here (e.g., @error('full_name')...@enderror) --}}
            </div>

            {{-- Telephone Field --}}
            <div class="mb-3">
                <label for="tel" class="form-label">Tel</label>
                <input type="text" name="tel" id="tel" class="form-control" placeholder="Enter telephone" value="{{ old('tel') }}">
                {{-- Add error display here (e.g., @error('tel')...@enderror) --}}
            </div>

            <button type="submit" class="btn btn-success">Save</button>
            {{-- Optional: Add a Cancel button to go back to the index page --}}
            {{-- <a href="{{ route('teacher.index') }}" class="btn btn-secondary">Cancel</a> --}}
        </form>
    </div>
</div>
@endsection