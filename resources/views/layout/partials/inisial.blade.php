@php
    $user = Auth::user();
    $nameParts = explode(' ', $user->name);
    $initials = '';

    foreach ($nameParts as $part) {
        $initials .= strtoupper(substr($part, 0, 1));
    }
@endphp

<div class="p-10 text-center flex">
    <div class="relative inline-flex items-center justify-center w-10 h-10 overflow-hidden bg-gray-200 rounded-full">
        <span class="font-medium text-gray-600">{{ $initials }}</span>
    </div>

    <h1 class="pl-2 text-3xl font-semibold">{{ $user->name }}</h1>
</div>