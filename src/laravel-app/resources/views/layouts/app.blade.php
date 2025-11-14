<!-- views/layouts/app-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    {{-- Load asset dari Vite --}}
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    {{-- Bootstrap 5 (hanya bundle, sudah termasuk Popper) --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
        :root {
            --primary-color: #3b82f6;
            --secondary-color: #1e40af;
            --success-color: #10b981;
            --warning-color: #f59e0b;
            --danger-color: #ef4444;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8fafc;
        }

        .sidebar {
            background: linear-gradient(180deg, #1e40af 0%, #3b82f6 100%);
            color: white;
            min-height: 100vh;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
        }

        .sidebar .nav-link {
            color: #e0f2fe;
            padding: 12px 20px;
            border-radius: 8px;
            margin: 4px 0;
            transition: all 0.3s;
        }

        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            background-color: rgba(255, 255, 255, 0.15);
            color: white;
        }

        .sidebar .nav-link i {
            width: 25px;
        }

        .navbar {
            background: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        }

        .stat-card {
            border-left: 4px solid var(--primary-color);
        }

        .feature-icon {
            font-size: 2rem;
            margin-bottom: 15px;
        }

        .chat-message {
            max-height: 400px;
            overflow-y: auto;
        }

        .message {
            padding: 10px 15px;
            border-radius: 18px;
            margin-bottom: 10px;
            max-width: 80%;
        }

        .message-sent {
            background-color: #3b82f6;
            color: white;
            margin-left: auto;
            border-bottom-right-radius: 5px;
        }

        .message-received {
            background-color: #f1f5f9;
            color: #334155;
            border-bottom-left-radius: 5px;
        }

        .table-responsive {
            border-radius: 10px;
            overflow: hidden;
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-primary:hover {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
        }

        .badge-dosen {
            background-color: var(--primary-color);
        }

        .progress {
            height: 8px;
            border-radius: 4px;
        }

        .notification-dot {
            position: absolute;
            top: 8px;
            right: 8px;
            width: 8px;
            height: 8px;
            background-color: var(--danger-color);
            border-radius: 50%;
        }

        .page-content {
            display: none;
        }

        .page-content.active {
            display: block;
        }

        .logbook-item {
            transition: all 0.3s;
            cursor: pointer;
        }

        .logbook-item:hover {
            background-color: #f8fafc;
        }

        .attendance-badge {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            display: inline-block;
            margin-right: 5px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">

            {{-- Sidebar --}}
            @include('partials.sidebar')
            {{-- Konten Utama --}}
            <div class="col-md-9 col-lg-10 ms-sm-auto px-4 py-4">
                {{-- Header --}}
                @include('partials.header')
                @yield('content')
            </div>

        </div>
    </div>

    {{-- Footer --}}
    {{-- @include('partials.footer') --}}

    {{-- Bootstrap JS Bundle (sudah termasuk Popper) --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>

    <style>
        .selector-for-some-widget {
            box-sizing: content-box;
        }
    </style>
</body>

</html>
