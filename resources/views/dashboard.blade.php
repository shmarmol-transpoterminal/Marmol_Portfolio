@extends('layouts.app')

@section('header_title', 'Dashboard')

@section('content')
    <div class="row">
        <div class="column xl-4 lg-6 md-12">
            <div class="admin-card text-center">
                <h3 class="u-remove-bottom">{{ \App\Models\Post::count() }}</h3>
                <p class="text-pretitle">Blog Posts</p>
                <a href="{{ route('admin.posts.index') }}" class="btn btn--stroke admin-btn-sm u-fullwidth">Manage</a>
            </div>
        </div>
        <div class="column xl-4 lg-6 md-12">
            <div class="admin-card text-center">
                <h3 class="u-remove-bottom">{{ \App\Models\Service::count() }}</h3>
                <p class="text-pretitle">Services</p>
                <a href="{{ route('admin.services.index') }}" class="btn btn--stroke admin-btn-sm u-fullwidth">Manage</a>
            </div>
        </div>
        <div class="column xl-4 lg-6 md-12">
            <div class="admin-card text-center">
                <h3 class="u-remove-bottom">{{ \App\Models\ContactMessage::count() }}</h3>
                <p class="text-pretitle">Messages</p>
                <a href="{{ route('admin.contact-messages.index') }}" class="btn btn--stroke admin-btn-sm u-fullwidth">Manage</a>
            </div>
        </div>
    </div>

    <div class="admin-card">
        <h3>Recent Messages</h3>
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Name</th>
                    <th>Subject</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach(\App\Models\ContactMessage::latest()->take(5)->get() as $msg)
                <tr>
                    <td>{{ $msg->created_at->format('M d, Y') }}</td>
                    <td>{{ $msg->name }}</td>
                    <td>{{ $msg->subject }}</td>
                    <td>
                        <a href="{{ route('admin.contact-messages.show', $msg) }}" class="text-pretitle" style="color: #000;">View</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
