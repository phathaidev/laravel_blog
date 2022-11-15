@extends('layouts.app')

@section('content')
    <main class="sm:container sm:mx-auto sm:mt-10">
        <div class="w-full sm:px-6 mb-10">
            <h1 class="text-center uppercase font-bold text-3xl pb-5 border-b border-gray-300">Create new Blog</h1>
        </div>
       
        @if ($errors->any())
            <div class="w-4/5 m-auto bg-red-600 p-8">
                <ul>
                    @foreach ($errors->all() as $error )
                        <li class="text-white text-md pb-2">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="w-4/5 pt-10 m-auto">
            <form action="/blog"
                method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-2 gap-0">
    
                    <div class="field w-full">
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Title</label>
                        <input type="text" name="title" placeholder="Enter Title" class="block p-2.5 w-11/12 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <div class="field w-full">
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Description</label>
                        <textarea name="description" placeholder="Description..." rows="10" class="block p-2.5 w-11/12 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                    </div>

                    <div class="field w-full">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="file_input">Upload file</label>
                        <input name="image" class="block w-full text-sm h-50 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
                        <p class="mt-2 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PNG, JPG or JPEG (MAX. 5048).</p>
                    </div>
                    <div class="mt-5">
                        <button type="submit" class="text-m text-white bg-blue-900 py-3 px-13 rounded-full float-right mr-10 ">Save</button>
                    </div>

                </div>
            </form>
        </div>
    </main>
@endsection