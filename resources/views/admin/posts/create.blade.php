@extends('layouts.app')

@section('header_title', 'Create New Post')

@section('content')
    <div class="admin-card">
        <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="form-field">
                <label for="title" class="text-pretitle">Title</label>
                <input type="text" name="title" id="title" value="{{ old('title') }}" class="u-fullwidth" required>
                @error('title') <div class="error-message">{{ $message }}</div> @enderror
            </div>

            <div class="form-field">
                <label for="excerpt" class="text-pretitle">Excerpt (Short Summary)</label>
                <textarea name="excerpt" id="excerpt" rows="3" class="u-fullwidth">{{ old('excerpt') }}</textarea>
                @error('excerpt') <div class="error-message">{{ $message }}</div> @enderror
            </div>

            <div class="form-field">
                <label for="content" class="text-pretitle">Full Content</label>
                <textarea name="content" id="content" rows="15" class="u-fullwidth" required>{{ old('content') }}</textarea>
                @error('content') <div class="error-message">{{ $message }}</div> @enderror
            </div>

            <div class="form-field">
                <label for="featured_image" class="text-pretitle">Featured Image</label>
                <input type="file" name="featured_image" id="featured_image" class="u-fullwidth">
                @error('featured_image') <div class="error-message">{{ $message }}</div> @enderror
            </div>

            <div class="form-field">
                <label for="publish_date" class="text-pretitle">Publish Date</label>
                <input type="date" name="publish_date" id="publish_date" value="{{ old('publish_date') }}" class="u-fullwidth">
                @error('publish_date') <div class="error-message">{{ $message }}</div> @enderror
            </div>

            <div class="u-add-bottom">
                <input type="submit" value="Create Post" class="btn btn--primary">
                <a href="{{ route('admin.posts.index') }}" class="btn btn--stroke">Cancel</a>
            </div>
        </form>
    </div>
@endsection
