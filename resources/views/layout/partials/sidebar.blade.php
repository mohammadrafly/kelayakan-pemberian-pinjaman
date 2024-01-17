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
        <a href="#submenu" class="flex items-center hover:bg-sky-700 hover:text-white p-3 rounded-lg submenu-toggle @if (Route::currentRouteName() == 'kriteria' || Route::currentRouteName() == 'kriteriakaryawan' || Route::currentRouteName() == 'normalisasi') bg-sky-500 text-white @endif">
            <svg class="w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 4c0 1.657-3.582 3-8 3S1 5.657 1 4m16 0c0-1.657-3.582-3-8-3S1 2.343 1 4m16 0v6M1 4v6m0 0c0 1.657 3.582 3 8 3s8-1.343 8-3M1 10v6c0 1.657 3.582 3 8 3s8-1.343 8-3v-6"/>
            </svg>
            Master Data
            <svg class="w-3 h-3 ml-auto transition-transform duration-300 transform" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 13 5.7-5.326a.909.909 0 0 0 0-1.348L1 1"/>
            </svg>
        </a>
        <ul class="submenu hidden p-3 bg-slate-300 rounded-lg mt-5 text-black">
            <li class="p-2">
                <a href="{{ route('kriteria') }}" class="flex items-center hover:bg-sky-700 hover:text-white p-3 rounded-lg @if (Route::currentRouteName() == 'kriteria') bg-sky-500 text-white @endif">
                    <svg class="w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M17 10H4a1 1 0 0 0-1 1v9m14-10a1 1 0 0 1 1 1m-1-1h-5.057M17 10a1 1 0 0 1 1 1m0 0v9m0 0a1 1 0 0 1-1 1m1-1a1 1 0 0 1-1 1m0 0H4m0 0a1 1 0 0 1-1-1m1 1a1 1 0 0 1-1-1m0 0V7m0 0a1 1 0 0 1 1-1h4.443a1 1 0 0 1 .8.4l2.7 3.6M3 7v3h8.943M18 18h2a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1h-5.057l-2.7-3.6a1 1 0 0 0-.8-.4H7a1 1 0 0 0-1 1v1"/>
                      </svg>
                    Kriteria
                </a>
            </li>
            <li class="p-2">
                <a href="{{ route('normalisasi') }}" class="flex items-center hover:bg-sky-700 hover:text-white p-3 rounded-lg @if (Route::currentRouteName() == 'normalisasi') bg-sky-500 text-white @endif">
                    <svg class="w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 17V2a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H3a2 2 0 0 0-2 2Zm0 0a2 2 0 0 0 2 2h12M5 15V1m8 18v-4"/>
                    </svg>
                    Normalisasi
                </a>
            </li>
            <li class="p-2">
                <a href="{{ route('kriteriakaryawan') }}" class="flex items-center hover:bg-sky-700 hover:text-white p-3 rounded-lg @if (Route::currentRouteName() == 'kriteriakaryawan') bg-sky-500 text-white @endif">
                    <svg class="w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.828 10h6.239m-6.239 4h6.239M6 1v4a1 1 0 0 1-1 1H1m14-4v16a.97.97 0 0 1-.933 1H1.933A.97.97 0 0 1 1 18V5.828a2 2 0 0 1 .586-1.414l2.828-2.828A2 2 0 0 1 5.828 1h8.239A.97.97 0 0 1 15 2Z"/>
                      </svg>
                    Kriteria Karyawan
                </a>
            </li>
        </ul>
    </li>
    <li class="p-2">
        <a href="{{ route('saw') }}" class="flex items-center hover:bg-sky-700 hover:text-white p-3 rounded-lg @if (Route::currentRouteName() == 'saw') bg-sky-500 text-white @endif">
            <svg class="w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.333 6.764a3 3 0 1 1 3.141-5.023M2.5 16H1v-2a4 4 0 0 1 4-4m7.379-8.121a3 3 0 1 1 2.976 5M15 10a4 4 0 0 1 4 4v2h-1.761M13 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-4 6h2a4 4 0 0 1 4 4v2H5v-2a4 4 0 0 1 4-4Z"/>
            </svg>
            SAW
        </a>
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