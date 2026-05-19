@extends('layouts.app')

@section('header_title', 'Services')

@section('header_actions')
    <a href="{{ route('admin.services.create') }}" class="btn btn--primary admin-btn-sm">Add Service</a>
@endsection

@section('content')
    <div class="admin-card">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($services as $service)
                <tr>
                    <td><strong>{{ $service->title }}</strong></td>
                    <td>{{ Str::limit($service->description, 100) }}</td>
                    <td>
                        <div class="admin-actions">
                            <a href="{{ route('admin.services.edit', $service) }}" class="btn-admin-edit">Edit</a>
                            <form action="{{ route('admin.services.destroy', $service) }}" method="POST" onsubmit="return confirm('Delete this service?');">
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
