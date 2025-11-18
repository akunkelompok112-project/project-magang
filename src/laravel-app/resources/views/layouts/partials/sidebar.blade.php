<!-- resources/views/partials/sidebar.blade.php -->
<div class="d-flex flex-column flex-shrink-0 p-3 bg-dark text-white"
    style="width: 250px; height: 100vh; position: fixed;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <i class="fa-solid fa-layer-group me-2"></i>
        <span class="fs-4">MyApp</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{ url('/') }}" class="nav-link text-white {{ Request::is('/') ? 'active' : '' }}">
                <i class="fa-solid fa-house me-2"></i> Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-white ">
                <i class="fa-solid fa-ranking-star me-2"></i> Pangkat
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-white">
                <i class="fa-solid fa-user-graduate me-2"></i> Data Mahasiswa
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-white ">
                <i class="fa-solid fa-chalkboard-teacher me-2"></i> Data Dosen
            </a>
        </li>
        {{-- <li>
            <a href="{{ url('/profile') }}" class="nav-link text-white {{ Request::is('profile') ? 'active' : '' }}">
                <i class="fa-solid fa-user me-2"></i> Profile
            </a>
        </li>
        <li>
            <a href="{{ url('/settings') }}" class="nav-link text-white {{ Request::is('settings') ? 'active' : '' }}">
                <i class="fa-solid fa-gear me-2"></i> Settings
            </a>
        </li> --}}
    </ul>
</div>
