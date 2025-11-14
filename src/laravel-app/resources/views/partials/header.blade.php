<!--  views/partials.header  -->

<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-light bg-white mb-4 rounded-3 px-3">
    <div class="container-fluid">
        <div class="d-flex align-items-center">
            <button class="btn btn-outline-primary me-3 d-md-none" type="button" id="sidebarToggle">
                <i class="fas fa-bars"></i>
            </button>
            <h4 class="mb-0 text-primary">Dashboard Dosen</h4>
        </div>

        <div class="d-flex align-items-center">
            <!-- Date Display -->
            <div class="me-3 d-none d-md-block">
                <span class="text-muted" id="currentDate"></span>
            </div>

            <!-- Notifications -->
            <div class="dropdown me-3">
                <button class="btn btn-outline-primary position-relative" type="button" data-bs-toggle="dropdown">
                    <i class="fas fa-bell"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        5
                    </span>
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <h6 class="dropdown-header">Notifikasi</h6>
                    </li>
                    <li><a class="dropdown-item" href="#"><i class="fas fa-book text-primary me-2"></i> 3 log book
                            baru</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fas fa-comment text-success me-2"></i> 5 pesan
                            baru</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fas fa-tasks text-warning me-2"></i> 2 tugas
                            perlu dinilai</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item text-center" href="#">Lihat Semua</a></li>
                </ul>
            </div>

            <!-- User Menu -->
            <div class="dropdown">
                <button class="btn btn-outline-primary dropdown-toggle d-flex align-items-center" type="button"
                    data-bs-toggle="dropdown">
                    <img src="https://ui-avatars.com/api/?name=Dr+Ahmad&background=3B82F6&color=fff&size=32"
                        class="rounded-circle me-2" alt="Profile" width="32" height="32">
                    <span>Dr. Ahmad</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="#"><i class="fas fa-user me-2"></i>Profil</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i>Pengaturan</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#" id="logoutBtn"><i
                                class="fas fa-sign-out-alt me-2"></i>Keluar</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
