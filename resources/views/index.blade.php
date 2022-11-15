@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-col-1 m-auto">
        <div class="flex">
            <div class="m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14 pt-20">Do you want to become a Developer?</h1>
                <a href="/blog" class="text-white bg-gray-900 text-center py-3 px-10 rounded-full text-s uppercase">
                    Read More
                </a>
            </div>
        </div>
    </div>
    <div class="sm:grid grid-cols-2 gap-20 w-25 w-4/5 mx-auto py-15 border-gray-400">
        <div class="">
            <img src="images/bg.png" class="rounded-md" alt="" width="700">
        </div>
        <div class="m-auto sm:m-auto text-left block">
            <h2 class="text-2xl front-extrabold to-gray-600 uppercase font-bold">
                Strugging to be Web Developer?
            </h2>
            <p class="mt-8 text-lg leading-6">
                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
            </p>
            <div class="my-10"  >
            <a href="/blog" class="text-m text-white bg-blue-900 py-3 px-10 rounded-full mt-100">Find Out More</a>
            </div>
        </div>
    </div>
    <div class="bg-blue-900 text-white w-25 p-10 text-center">
        <p class="text-md pb-5">I'm Phathai and my skills are...</p>
        <p class="text-2xl font-bold pb-3 ">Graphic Design</p>
        <p class="text-2xl font-bold pb-3 ">UX/UI Design</p>
        <p class="text-2xl font-bold pb-3 ">Web Design</p>
        <p class="text-2xl font-bold pb-3 ">Web Develop</p>

    </div>
    <div class="m-auto w-25 w-4/5">
       <div class="p-10">
            <h1 class="font-bold pb-5 text-3xl text-center">Recent Post</h1>
            <p class="text-md text-center text-gray-600">Check our posts to see more</p>
       </div>
       <div class="sm:grid grid-cols-2 gap-0">
        <div class="m-auto sm:m-auto text-left block bg-orange-500 p-10 text-white h-96">
            <h2 class="text-2xl front-extrabold to-gray-600 uppercase font-bold">
                Strugging to be Web Developer?
            </h2>
            <p class="mt-8 text-lg leading-6">
                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
            </p>
            <div class="my-15"  >
            <a href="/blog" class="text-m text-white border-2 border-white border-solid py-3 px-10 rounded-full mt-100 hover:bg-white hover:text-black">Find Out More</a>
            </div>
        </div>
        <div class="h-96">
            <img src="images/bg1.jpg" class="h-full"  alt="">
        </div>
       </div>
    </div>
@endsection
