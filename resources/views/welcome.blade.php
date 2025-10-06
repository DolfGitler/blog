@extends('partials.layout')
@section('title', 'Dashboard')
@section('content')
    {{ $posts->links() }}
    <div class="grid grid-cols-4 gap-2 ">
    @foreach ($posts as $post)
        <div class="card bg-base-300  shadow-sm">
            <figure>
                <img src="https://i0.wp.com/speaknskills.com/wp-content/uploads/2023/02/aricles-heading.jpg?w=600&ssl=1" alt="Shoes" />
            </figure>
            <div class="card-body">
                <h2 class="card-title"> {{ $post->title }} </h2>
                <p> {{ $post->snippet }} </p>
                <div class="card-actions justify-end">
                    <a href="{{route('post', ['post' => $post])}}" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
    @endforeach
    </div>
    {{ $posts->links() }}

@endsection
