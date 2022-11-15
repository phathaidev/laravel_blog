@extends('layouts.app')

@section('content')
    <main class="sm:container sm:mx-auto sm:mt-10">
        <div class="w-full sm:px-6 mb-10">
            <h1 class="text-center uppercase font-bold text-3xl pb-5 border-b border-gray-300">Blog</h1>
        </div>
        @if (session()->has('message'))
        <div class="w-1/4 m-auto bg-green-500 p-2 mb-10">
            <p class="text-white text-md pb-2 text-center">
                {{ session()->get('message')}}
            </p>
        </div>
        @endif
        @if (Auth::check())
            <div class="w-25 w-4/5 m-auto mb-10">
                <a href="blog/create" class="text-m text-white bg-blue-900 py-3 px-10 rounded-full mt-100">Create new post</a>
            </div>
        @endif

        <div class="sm:grid grid-cols-3 w-25 w-4/5 m-auto">
        @foreach ($posts as $post)
        
            <div class="sm:grid grid-cols-2 gap-5 w-25 w-4/5 mx-auto border-gray-400 h-50">
                <div class="h-auto">
                    <img src="blog_image/{{ $post->image_path }}" class="rounded-md" alt="" width="700">
                </div>
                <div class="m-auto sm:m-auto text-left block">
                    <h2 class="text-1xl front-extrabold to-gray-600 uppercase font-bold pb-4">
                        {{ $post->title}}
                    </h2>
                    <p class="text-md ">By <span class="font-bold italic">Admin {{ $post->user->name}}</span>, <span class=" text-sm">{{ date('d M Y', strtotime( $post->updated_at)) }}</span></p>
                    <p class="mt-8 text-lg leading-6 trim-text">
                        {{ $post->description }}
                    </p> 
                    <div class="my-10"  >
                        <a href="/blog/{{ $post->slug }}" class="text-m text-white bg-blue-900 py-2 px-8 rounded-full mt-100">Read</a>
                    </div>
                </div>
                
            </div>
            
        @endforeach
        </div>

    </main>
@endsection