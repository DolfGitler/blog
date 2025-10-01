@extends('partials.layout')
@section('title', 'Home')
@section('content')
    <h1 class="text-3xl"> Posts</h1>
    <a href="{{ route('posts.create') }}" class="btn join-item btn-primary">New Post</a>
    {{ $posts->links() }}
    <table class="table table-zebra">
        <thead>
            <th>ID</th>
            <th>Title</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>{{ $post->updated_at }}</td>
                    <td>
                        <div class="join">
                            <a class="btn join-item btn-info">View</a>
                            <a class="btn join-item btn-warning">Edit</a>
                            <a class="btn join-item btn-error">Delete</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $posts->links() }}
@endsection
