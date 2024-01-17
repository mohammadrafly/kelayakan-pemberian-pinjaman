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