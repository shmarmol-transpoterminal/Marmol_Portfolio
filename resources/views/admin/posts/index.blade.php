@extends('layouts.app')

@section('header_title', 'Blog Posts')

@section('header_actions')
    <a href="{{ route('admin.posts.create') }}" class="btn btn--primary admin-btn-sm">Create Post</a>
@endsection

@section('content')
    <div class="admin-card">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Publish Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <td><strong>{{ $post->title }}</strong></td>
                    <td>{{ $post->publish_date?->format('M d, Y') ?? 'Draft' }}</td>
                    <td>
                        <div class="admin-actions">
                            <a href="{{ route('admin.posts.edit', $post) }}" class="btn-admin-edit">Edit</a>
                            <form action="{{ route('admin.posts.destroy', $post) }}" method="POST" onsubmit="return confirm('Delete this post?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-admin-delete">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
