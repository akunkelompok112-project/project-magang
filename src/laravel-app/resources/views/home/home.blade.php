<!-- resources/views/home.blade.php -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Akses Terbatas</title>
    <style>
        /* .selector-for-some-widget {
            box-sizing: content-box;
        } */
    </style>
</head>

<body>
    <div class="container-fluid">
        <h1 class="text-3xl font-bold underline">Akses Terbatas</h1>

        <p>Halo, <strong>{{ Auth::user()->name }}.</strong> Anda telah berhasil masuk ke sistem.</p>

        <p>Namun, peran Anda <strong>({{ Auth::user()->role->name }})</strong> tidak memiliki akses dashboard yang
            spesifik.
            Silakan hubungi
            Administrator untuk informasi lebih lanjut.</p>

        <!-- BUKAN KAYAK GINI BAKALAN ERROR DAN MENJADI LOGOUT GET -->
        {{-- <a class="btn btn-danger btn-sm mt-3" href="{{ route('logout') }}">Logout</a> --}}
        <!-- BUKAN KAYAK GINI BAKALAN ERROR DAN MENJADI LOGOUT GET -->

        <!-- YANG BENAR SEPERTI INI -->
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
            class="btn btn-danger mt-3">Logout</a>

        <form id="logout-form" method="POST" action="{{ route('logout') }}">
            @csrf
        </form>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
