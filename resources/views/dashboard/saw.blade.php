@extends('layout.app')

@section('content')

<div class="w-full h-full bg-white rounded-lg shadow-lg p-10">
    <div class="relative overflow-x-auto shadow-md rounded-lg p-2">
        <table id="datatable" class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-sky-200">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nama Kriteria
                    </th>
                    <th scope="col" class="px-6 py-3">
                        SAW Value
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status Kelayakan
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sawValues as $sawValue)
                <tr class="bg-white border-b hover:bg-gray-200">
                    <th class="px-6 py-4">
                        {{ $sawValue['karyawan_name'] }}
                    </th>
                    <th class="px-6 py-4">
                        @if($sawValue['saw_value'] !== null)
                            {{ $sawValue['saw_value'] }}
                        @else
                            Not Available
                        @endif
                    </th>
                    <th class="px-6 py-4">
                        {{ $sawValue['loan_eligibility'] }}
                    </th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>    
</div>
@endsection