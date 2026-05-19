@extends('layouts.app')

@section('header_title', 'Add New Service')

@section('content')
    <div class="admin-card">
        <form action="{{ route('admin.services.store') }}" method="POST">
            @csrf
            
            <div class="form-field">
                <label for="title" class="text-pretitle">Service Title</label>
                <input type="text" name="title" id="title" value="{{ old('title') }}" class="u-fullwidth" required>
                @error('title') <div class="error-message">{{ $message }}</div> @enderror
            </div>

            <div class="form-field">
                <label for="description" class="text-pretitle">Description</label>
                <textarea name="description" id="description" rows="10" class="u-fullwidth" required>{{ old('description') }}</textarea>
                @error('description') <div class="error-message">{{ $message }}</div> @enderror
            </div>

            <div class="u-add-bottom">
                <input type="submit" value="Create Service" class="btn btn--primary">
                <a href="{{ route('admin.services.index') }}" class="btn btn--stroke">Cancel</a>
            </div>
        </form>
    </div>
@endsection
