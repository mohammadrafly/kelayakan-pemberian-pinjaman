@extends('layout.app')

@section('content')

<div class="w-full h-full bg-white rounded-lg shadow-lg p-10">
    <button type="button" data-modal-target="modal-kriteria" data-modal-toggle="modal-kriteria" class="text-white flex bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-5 focus:outline-none ">
        <svg class="w-5 h-5 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 5.757v8.486M5.757 10h8.486M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
        </svg>
        Tambah {{ $title }}
    </button>
    <div class="relative overflow-x-auto shadow-md rounded-lg p-2">
        <table id="datatable" class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-sky-200">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nama Kriteria
                    </th>
                    <th scope="col" class="px-6 py-3">
                        
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $index => $dt)
                <tr id="kriteria-{{ $dt->id }}" class="bg-white border-b hover:bg-gray-200">
                    <th class="px-6 py-4">
                        {{ $dt->nama_kriteria }}
                    </th>
                    <td class="px-6 py-4 text-right">
                        <button type="button" data-modal-target="modal-kriteria" data-modal-toggle="modal-kriteria" class="font-medium text-sky-600 hover:underline" onclick="editData('{{ $dt->id }}')">Edit</button>
                        <button type="button" data-modal-target="modal-kriteria-delete" data-modal-toggle="modal-kriteria-delete" class="font-medium text-red-600 hover:underline" onclick="setDeleteId('{{ $dt->id }}')">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>    
</div>

@include('dashboard.partials.deleteKriteriaModal')

<div id="modal-kriteria" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <div class="relative bg-white rounded-lg shadow">
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Tambah {{ $title }}
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modal-kriteria">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <form id="form" class="p-4 md:p-5 space-y-4">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Nama Kriteria</label>
                    <input type="text" id="nama_kriteria" name="nama_kriteria" class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                    <input type="text" id="id" name="id" hidden>
                </div>
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Bobot Kriteria</label>
                    <input type="text" id="bobot_kriteria" name="bobot_kriteria" class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                </div>
                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b ">
                    <button type="button" onclick="saveData()" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Save</button>
                    <button type="button" data-modal-hide="modal-kriteria" class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')

<script src="{{ asset('assets/js/Kriteria.js') }}"></script>

@endsection