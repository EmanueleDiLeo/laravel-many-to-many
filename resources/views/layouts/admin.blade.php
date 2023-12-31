<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-
iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous"/>

{{-- CK EDITOR --}}
<script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])

    <title>Boolpress Admin @yield('title')</title>
</head>
<body>
    @include('admin.partials.header')

    <div class="main-wrapper d-flex">
        @include('admin.partials.sidebar')
        <div class="p-5 overflow-auto w-100 bg-color">
            @yield('content')
        </div>

    </div>
</body>
</html>
