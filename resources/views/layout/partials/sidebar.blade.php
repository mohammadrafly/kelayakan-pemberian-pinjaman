@include('layout.partials.inisial')
<ul>
    <li class="p-2">
        <a href="{{ route('dashboard') }}" class="flex items-center hover:bg-sky-700 hover:text-white p-3 rounded-lg @if (Route::currentRouteName() == 'dashboard') bg-sky-500 text-white @endif">
            <svg class="w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8v10a1 1 0 0 0 1 1h4v-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v5h4a1 1 0 0 0 1-1V8M1 10l9-9 9 9"/>
            </svg>
            Dashboard
        </a>            
    </li>
    <li class="p-2">
        <a href="{{ route('users') }}" class="flex items-center hover:bg-sky-700 hover:text-white p-3 rounded-lg @if (Route::currentRouteName() == 'users') bg-sky-500 text-white @endif">
            <svg class="w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 3a3 3 0 1 1-1.614 5.53M15 12a4 4 0 0 1 4 4v1h-3.348M10 4.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0ZM5 11h3a4 4 0 0 1 4 4v2H1v-2a4 4 0 0 1 4-4Z"/>
            </svg>
            Users
        </a>
    </li>
    <li class="p-2">
        <a href="{{ route('karyawan') }}" class="flex items-center hover:bg-sky-700 hover:text-white p-3 rounded-lg @if (Route::currentRouteName() == 'karyawan') bg-sky-500 text-white @endif">
            <svg class="w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.333 6.764a3 3 0 1 1 3.141-5.023M2.5 16H1v-2a4 4 0 0 1 4-4m7.379-8.121a3 3 0 1 1 2.976 5M15 10a4 4 0 0 1 4 4v2h-1.761M13 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-4 6h2a4 4 0 0 1 4 4v2H5v-2a4 4 0 0 1 4-4Z"/>
            </svg>
            Karyawan
        </a>
    </li>
    <li class="p-2">
        <a href="#submenu" class="flex items-center hover:bg-sky-700 hover:text-white p-3 rounded-lg submenu-toggle @if (Route::currentRouteName() == 'lamakerja' || Route::currentRouteName() == 'pinjaman' || Route::currentRouteName() == 'riwayatpinjaman' || Route::currentRouteName() == 'totaltanggungan') bg-sky-500 text-white @endif">
            <svg class="w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 4c0 1.657-3.582 3-8 3S1 5.657 1 4m16 0c0-1.657-3.582-3-8-3S1 2.343 1 4m16 0v6M1 4v6m0 0c0 1.657 3.582 3 8 3s8-1.343 8-3M1 10v6c0 1.657 3.582 3 8 3s8-1.343 8-3v-6"/>
            </svg>
            Data Bobot
            <svg class="w-3 h-3 ml-auto transition-transform duration-300 transform" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 13 5.7-5.326a.909.909 0 0 0 0-1.348L1 1"/>
            </svg>
        </a>
        <ul class="submenu hidden p-3 bg-slate-300 rounded-lg mt-5 text-black">
            <li class="p-2">
                <a href="{{ route('lamakerja') }}" class="flex items-center hover:bg-sky-700 hover:text-white p-3 rounded-lg @if (Route::currentRouteName() == 'lamakerja') bg-sky-500 text-white @endif">
                    <svg class="w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M10 6v4l3.276 3.276M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                    </svg>
                    Lama Kerja
                </a>
            </li>
            <li class="p-2">
                <a href="{{ route('pinjaman') }}" class="flex items-center hover:bg-sky-700 hover:text-white p-3 rounded-lg @if (Route::currentRouteName() == 'pinjaman') bg-sky-500 text-white @endif">
                    <svg class="w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 11 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1.75 15.363a4.954 4.954 0 0 0 2.638 1.574c2.345.572 4.653-.434 5.155-2.247.502-1.813-1.313-3.79-3.657-4.364-2.344-.574-4.16-2.551-3.658-4.364.502-1.813 2.81-2.818 5.155-2.246A4.97 4.97 0 0 1 10 5.264M6 17.097v1.82m0-17.5v2.138"/>
                    </svg>
                    Pinjaman
                </a>
            </li>
            <li class="p-2">
                <a href="{{ route('riwayatpinjaman') }}" class="flex items-center hover:bg-sky-700 hover:text-white p-3 rounded-lg @if (Route::currentRouteName() == 'riwayatpinjaman') bg-sky-500 text-white @endif">
                    <svg class="w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 19 21">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.6 16.733c.234.268.548.456.895.534a1.4 1.4 0 0 0 1.75-.762c.172-.615-.445-1.287-1.242-1.481-.796-.194-1.41-.862-1.241-1.481a1.4 1.4 0 0 1 1.75-.763c.343.078.654.261.888.525m-1.358 4.017v.617m0-5.94v.726M1 10l5-4 4 1 7-6m0 0h-3.207M17 1v3.207M5 19v-6m-4 6v-4m17 0a5 5 0 1 1-10 0 5 5 0 0 1 10 0Z"/>
                    </svg>
                    Riwayat Pinjaman
                </a>
            </li>
            <li class="p-2">
                <a href="{{ route('totaltanggungan') }}" class="flex items-center hover:bg-sky-700 hover:text-white p-3 rounded-lg @if (Route::currentRouteName() == 'totaltanggungan') bg-sky-500 text-white @endif">
                    <svg class="w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2h4a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h4m6 0a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1m6 0v3H6V2M5 5h8m-8 5h8m-8 4h8"/>
                    </svg>
                    Total Tanggungan
                </a>
            </li>
        </ul>
    </li>
</ul>

<ul class="absolute bottom-5 left-0 w-full">
    <li class="p-4">
        <a href="{{ route('profile', Auth::user()->id) }}" class="flex items-center hover:bg-sky-700 hover:text-white p-3 rounded-lg @if (Route::currentRouteName() == 'profile') bg-sky-500 text-white @endif">
            <svg class="w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.656 12.115a3 3 0 0 1 5.682-.015M13 5h3m-3 3h3m-3 3h3M2 1h16a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1Zm6.5 4.5a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z"/>
              </svg>
            Profile
        </a>
    </li>
    <li class="p-4 pt-0">
        <a href="#" class="flex items-center hover:bg-sky-700 hover:text-white p-3 rounded-lg" onclick="event.preventDefault(); performLogout();">
            <svg class="w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 15">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 7.5h11m0 0L8 3.786M12 7.5l-4 3.714M12 1h3c.53 0 1.04.196 1.414.544.375.348.586.82.586 1.313v9.286c0 .492-.21.965-.586 1.313A2.081 2.081 0 0 1 15 14h-3"/>
            </svg>
            Logout
        </a>
    </li>
</ul>