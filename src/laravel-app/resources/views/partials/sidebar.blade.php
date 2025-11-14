<!--  views/partials/sidebar  -->

<!-- Sidebar -->
<div class="col-md-3 col-lg-2 sidebar p-0">
    <div class="d-flex flex-column flex-shrink-0 ">
        <!-- Profile Section -->
        <div class="text-center mb-4 pt-3">
            <div class="position-relative d-inline-block">
                <img src="https://ui-avatars.com/api/?name=Dr+Ahmad&background=3B82F6&color=fff&size=64"
                    class="rounded-circle mb-2" alt="Profile" width="64" height="64">
            </div>
            <h5 class="mt-2 mb-1">Dr. Ahmad Wijaya, M.Kom</h5>
            <p class="text-light small mb-0">Dosen Pembimbing</p>
            <span class="badge bg-light text-primary small mt-1">NIP: 198203102005011001</span>
        </div>

        <hr class="my-3 bg-light opacity-25">

        <!-- Navigation Menu -->
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="#" class="nav-link active" data-page="dashboard-home">
                    <i class="fas fa-home me-2"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" data-page="logbook-page">
                    <i class="fas fa-book me-2"></i>
                    Log Book Mahasiswa
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" data-page="chat-page">
                    <i class="fas fa-comments me-2"></i>
                    Chat dengan Mahasiswa
                    <span class="notification-dot"></span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" data-page="attendance-page">
                    <i class="fas fa-calendar-check me-2"></i>
                    Rekap Absensi
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" data-page="grading-page">
                    <i class="fas fa-chart-bar me-2"></i>
                    Penilaian Mahasiswa
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" data-page="report-page">
                    <i class="fas fa-file-alt me-2"></i>
                    Laporan Bimbingan
                </a>
            </li>
        </ul>

        <hr class="my-3 bg-light opacity-25">

        <!-- Quick Actions -->
        <div class="mt-auto">
            <h6 class="text-light small mb-2">Aksi Cepat</h6>
            <div class="d-grid gap-2">
                <button class="btn btn-outline-light btn-sm" data-bs-toggle="modal" data-bs-target="#addMeetingModal">
                    <i class="fas fa-plus me-1"></i> Jadwal Bimbingan
                </button>
                <button class="btn btn-outline-light btn-sm" data-bs-toggle="modal" data-bs-target="#broadcastModal">
                    <i class="fas fa-bullhorn me-1"></i> Pengumuman
                </button>
            </div>
        </div>
    </div>
</div>
