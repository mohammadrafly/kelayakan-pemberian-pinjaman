@extends('layout.app')

@section('content')

<div class="w-full bg-white rounded-lg shadow-lg p-10">
    <h1 class="text-3xl font-semibold">Edit {{ $title }}</h1>
    <form id="profileForm" class="max-w-full mx-auto mt-10">
        @csrf
        <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nama Lengkap</label>
            <input type="name" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="John Doe" required value="{{ $data->name }}">
            <input type="text" name="id" id="id" hidden value="{{ $data->id }}">
        </div>
        <div class="mb-5">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="john.doe@example.com" required value="{{ $data->email }}">
        </div>
        <div class="mb-5">
            <label for="role" class="block mb-2 text-sm font-medium text-gray-900">Role</label>
            <input disabled name="role" id="role" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Admin" required value="{{ $data->role }}">
        </div>
        <button type="button" onclick="saveData()" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Simpan</button>
    </form>
</div>

<div class="w-full bg-white rounded-lg shadow-lg p-10 mt-10">
    <h1 class="text-3xl font-semibold">Ganti Password</h1>
    <form id="changePasswordForm" class="max-w-full mx-auto mt-10">
        @csrf
        <div class="mb-5">
            <label for="old_password" class="block mb-2 text-sm font-medium text-gray-900">Password Lama</label>
            <input type="password" id="old_password" name="old_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="***********" required>
        </div>
        <div class="mb-5">
            <label for="new_password" class="block mb-2 text-sm font-medium text-gray-900">Password Baru</label>
            <input type="password" id="new_password" name="new_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="***********" required>
        </div>
        <div class="mb-5">
            <label for="new_password_confirm" class="block mb-2 text-sm font-medium text-gray-900">Konfirmasi Password Baru</label>
            <input type="password" id="new_password_confirm" name="new_password_confirm" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="***********" required>
        </div>
        <button type="button" onclick="savePassword()" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Simpan</button>
    </form>
</div>

@endsection

@section('script')

<script src="{{ asset('assets/js/Profile.js') }}"></script>

@endsection