<!-- resources/views/partials/header.blade.php -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow" style="margin-left:250px;">
    <div class="container-fluid">
        <span class="navbar-brand mb-0 h1">Header</span>
        <div class="d-flex align-items-center">
            <!-- Notifikasi -->
            <button class="btn btn-outline-primary me-2">
                <i class="fa-solid fa-bell"></i>
            </button>

            <!-- Dropdown User -->
            <div class="dropdown">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="userMenu"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-user"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userMenu">
                    <li>
                        <a class="dropdown-item" href="{{ url('/profile') }}">
                            <i class="fa-solid fa-user me-2"></i> Profile
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ url('/settings') }}">
                            <i class="fa-solid fa-gear me-2"></i> Settings
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ url('/logout') }}">
                            <i class="fa-solid fa-right-from-bracket me-2"></i> Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
