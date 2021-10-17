@extends('layouts.app')

@section('content')

<div style="width:900px" class="container max-w-full mx auto pt-4 pb-4">
  
  <a href="/posts/create" class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-1g rounded hover:shadow my-4">Add new post</a>  
  
  
  @foreach ($posts as $post)
  
    <article class="mb-2">
      <h2 class="text-xl font-bold text-gray-900">
          {{ $post->title }}
      </h2>
      <p>
        <a href="/posts/{{ $post->id}}/edit">edit</a>
      </p>
      <p class="text-md text gray-600">
          {{ $post->content }}
      </p>
      <hr class="mt-2"
  </article>
  
  @endforeach

</div>

@endsection