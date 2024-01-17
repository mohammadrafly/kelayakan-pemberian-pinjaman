<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KPP | {{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
</head>
<body>
    @if($title === 'Login')
        <div class="bg-gray-200">
            @yield('content')
        </div>
    @else
        <div class="flex min-h-screen bg-gray-200">
            <div class="p-2 w-[300px] min-h-screen bg-white shadow-md fixed">
                @include('layout.partials.sidebar')
            </div>
        
            <div class="flex-1 pl-[380px] p-20">
                @yield('content')
            </div>
        </div>
    @endif

 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    @yield('script')

    <script>
        $(document).ready( function () {
            $('#datatable').DataTable();
        } );
    </script>
</body>
</html>
