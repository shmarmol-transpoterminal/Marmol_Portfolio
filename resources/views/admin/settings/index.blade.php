@extends('layouts.app')

@section('header_title', 'General Settings')

@section('content')
    <div class="admin-card">
        <form action="{{ route('admin.settings.update_all') }}" method="POST">
            @csrf
            @method('PATCH')
            
            <div class="row">
                @foreach($settings as $key => $value)
                <div class="column xl-6 md-12 form-field">
                    <label for="setting_{{ $key }}" class="text-pretitle">{{ str_replace('_', ' ', $key) }}</label>
                    <input type="text" name="settings[{{ $key }}]" id="setting_{{ $key }}" value="{{ $value }}" class="u-fullwidth">
                </div>
                @endforeach
            </div>

            <div class="u-add-bottom">
                <input type="submit" value="Save All Settings" class="btn btn--primary">
            </div>
        </form>
    </div>
@endsection
