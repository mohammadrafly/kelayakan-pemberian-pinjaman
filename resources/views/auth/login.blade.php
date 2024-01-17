@extends('layout.app')

@section('content')

<div class="flex justify-center items-center h-screen">
    <div class="bg-white w-[500px] h-min-[500px] rounded-lg text-black shadow-md">
        <div class="p-10">
            <div class="flex justify-center items-center">
                <svg class="w-[100px] h-[100px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 21">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6.072 10.072 2 2 6-4m3.586 4.314.9-.9a2 2 0 0 0 0-2.828l-.9-.9a2 2 0 0 1-.586-1.414V5.072a2 2 0 0 0-2-2H13.8a2 2 0 0 1-1.414-.586l-.9-.9a2 2 0 0 0-2.828 0l-.9.9a2 2 0 0 1-1.414.586H5.072a2 2 0 0 0-2 2v1.272a2 2 0 0 1-.586 1.414l-.9.9a2 2 0 0 0 0 2.828l.9.9a2 2 0 0 1 .586 1.414v1.272a2 2 0 0 0 2 2h1.272a2 2 0 0 1 1.414.586l.9.9a2 2 0 0 0 2.828 0l.9-.9a2 2 0 0 1 1.414-.586h1.272a2 2 0 0 0 2-2V13.8a2 2 0 0 1 .586-1.414Z"/>
                </svg>
            </div>
            <div class="flex justify-center items-center">
                <h1 class="text-2xl font-semibold">Selamat Datang</h1>
            </div>
            <div class="flex justify-center items-center">
                <p class="block text-sm">Silahkan login dengan akun anda.</p>
            </div>
        </div>
        <form id="loginForm" class="p-10" onsubmit="event.preventDefault(); loginUser();">
            @csrf
            <div class="flex justify-center items-center">
                @if(session('error'))
                    <div class="rounded-lg p-2 w-full bg-red-500 text-white flex justify-between">
                        <p>
                            {{ session('error') }}
                        </p>
                        <button type="button" class="text-white" onclick="this.parentElement.style.display='none'">
                            <span>&times;</span>
                        </button>
                    </div>
                @endif
                <div id="errorContainer" class="rounded-lg p-2 w-full bg-red-500 text-white"></div>
            </div>
            <div class="mt-5 mb-5">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" placeholder="Masukan Email" class="focus:border-blue-400 focus:outline-none p-5 rounded-lg bg-gray-100 w-full h-[35px] border border-gray-300">
            </div>
            <div class="mt-5 mb-5">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Masukan Password" class="focus:border-blue-400 focus:outline-none p-5 rounded-lg bg-gray-100 w-full h-[35px] border border-gray-300">
            </div>
            <button class="bg-blue-500 hover:bg-blue-400 w-full rounded-md h-[45px] text-white">LOGIN</button>
        </form>
    </div>
</div>


@endsection

@section('script')

<script src="{{ asset('assets/js/Auth.js') }}"></script>

@endsection