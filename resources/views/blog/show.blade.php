<base href="/public">
@extends('layouts.app')

@section('content')
    <main class="sm:container sm:mx-auto sm:mt-10">
        <div class="w-full sm:px-6 mb-10">
            <h1 class="text-center uppercase font-bold text-3xl pb-5 border-b border-gray-300">Blog</h1>
        </div>
        @if(isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
        <div class="w-4/5 w-25 m-auto">
            <a href="/blog/{{$post->slug}}/edit" class="text-m text-white bg-blue-900 py-3 px-10 rounded-full mt-100 inline-flex">Edit</a>
            <span class="float-right">
                <form action="/blog/{{ $post->slug }}"
                    method="POST">
                    @csrf
                    @method("delete")
                    <button type="submit" 
                    class="text-m text-white bg-red-600 py-3 px-10 rounded-full mt-100 inline-block">Delete</button>
                </form>
            </span>

        </div>
        @endif
            <div class="sm:grid grid-cols-2 gap-10 w-25 w-4/5 m-auto py-10 border-gray-400">
                <div class="">
                    <img src="blog_image/{{ $post->image_path }}" class="rounded-md" alt="" width="700">
                </div>
                <div class="m-auto sm:m-auto text-left block h-auto ">
                    <h2 class="text-2xl front-extrabold to-gray-600 uppercase font-bold pb-4 top-0">
                        {{ $post->title}}
                    </h2>
                    <p class="text-md ">By <span class="font-bold italic">{{ $post->user->name}}</span>, Posted on:  <span>{{ date('D jS M Y', strtotime( $post->updated_at)) }}</span></p>
                    <p class="mt-8 text-lg leading-6">
                        {{ $post->description }}
                    </p>
                    <div class="my-10"  >
                    {{-- <a href="/blog/{{ $post->slug }}" class="text-m text-white bg-blue-900 py-3 px-10 rounded-full mt-100">Read More</a> --}}
                    </div>
                </div>
            </div>
    </main>
@endsection