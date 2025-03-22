@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Content</h2>
    <form action="{{ route('content.update', $content->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Key</label>
            <input type="text" name="key" class="form-control" value="{{ $content->key }}" readonly>
        </div>
        <div class="mb-3">
            <label>Value</label>
            <textarea name="value" class="form-control" required>{{ $content->value }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
