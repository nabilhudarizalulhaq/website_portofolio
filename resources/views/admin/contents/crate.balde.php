@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create Content</h2>
    <form action="{{ route('content.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Key</label>
            <input type="text" name="key" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Value</label>
            <textarea name="value" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
