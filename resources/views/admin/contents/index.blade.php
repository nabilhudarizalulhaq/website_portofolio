@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Content List</h2>
    <a href="{{ route('content.create') }}" class="btn btn-primary">Add Content</a>
    
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Key</th>
                <th>Value</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($contents as $content)
                <tr>
                    <td>{{ $content->key }}</td>
                    <td>{{ $content->value }}</td>
                    <td>
                        <a href="{{ route('content.edit', $content->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('content.destroy', $content->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">No Content Available</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
