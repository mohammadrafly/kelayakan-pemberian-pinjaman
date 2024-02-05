@extends('layout.app')

@section('content')

@if(session('error'))
    <div id="error-message" class="bg-red-500 text-white p-4 mb-4 rounded-lg">
        {{ session('error') }}
    </div>
@endif
<h1 class="text-3xl font-extralight">Welcome Back! , <span class="font-semibold">{{ Auth::user()->name }}</span></h1>

<div class="flex flex-wrap pt-5">
    <a href="#" class="justify-self-stretch relative block min-w-[450px] p-6 mb-4 mr-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <div class="flex justify-between">
            <div>
                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900">Total Users</h5>
                <p class="font-bold text-gray-700 text-3xl">{{ $user }}</p>
            </div>
            <svg class="w-10 h-10" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 3a3 3 0 1 1-1.614 5.53M15 12a4 4 0 0 1 4 4v1h-3.348M10 4.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0ZM5 11h3a4 4 0 0 1 4 4v2H1v-2a4 4 0 0 1 4-4Z"/>
            </svg>
        </div>
    </a>    
    <a href="#" class="justify-self-stretch relative block min-w-[450px] p-6 mb-4 mr-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <div class="flex justify-between">
            <div>
                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900">Total Karyawan</h5>
                <p class="font-bold text-gray-700 text-3xl">{{ $karyawan }}</p>
            </div>
            <svg class="w-10 h-10" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.333 6.764a3 3 0 1 1 3.141-5.023M2.5 16H1v-2a4 4 0 0 1 4-4m7.379-8.121a3 3 0 1 1 2.976 5M15 10a4 4 0 0 1 4 4v2h-1.761M13 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-4 6h2a4 4 0 0 1 4 4v2H5v-2a4 4 0 0 1 4-4Z"/>
            </svg>
        </div>
    </a>    
</div>


@endsection