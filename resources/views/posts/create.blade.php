@extends('layouts.app')

@section('content')

<h2 class="my-6">
  Create new post
</h2>

<div style="width:900px" class="container max-w-full mx auto pt-4 pb-4">

      <form method="POST" action="/posts">

      @csrf

      <div class="mb-4">
        <label class="font-bold text-gray-800 w-full" for="title">Title</label>
        <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 
                      mr-4 w-full text-gray-600 text-sm focus:outline-none 
                      focus:border-gray-400 focus:ring-0" id="title" name="title" value="">
      </div>
      <div class="mb-4">
        <label class="font-bold text-gray-8 w-full" for="content">Content</label>
        <textarea class="h-16 bg-white border border-gray-300 rounded py-4 px-3 
                      mr-4 w-full text-gray-600 text-sm focus:outline-none 
                         focus:border-gray-400 focus:ring-0" id="content" name="content"></textarea>
      </div>
        
      <button class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-1g rounded hover:shadow">Create</button>  
      <a href="/posts" class="bg-gray-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-1g rounded hover:shadow">Cancel</a>
        
  </div>
  
  </form>

</div>

@endsection