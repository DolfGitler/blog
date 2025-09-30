@extends('partials.layout')
@section('title', 'Home')
@section('content')
    <div class="card bg-base-300  shadow-sm">
        <figure>
            <img src="https://i0.wp.com/speaknskills.com/wp-content/uploads/2023/02/aricles-heading.jpg?w=600&ssl=1" alt="Shoes" />
        </figure>
        <div class="card-body">
            <h2 class="card-title"> {{ $post->title }} </h2>
            <p> {{ $post->displayBody !! }} </p>
            <div class="card-actions justify-end">
            </div>
        </div>
       </div>
@endsection
