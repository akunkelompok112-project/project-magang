@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <!-- Dashboard Home -->
    <div id="dashboard-home" class="page-content active">
        <!-- Stats Cards -->
        <div class="row mb-4">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card stat-card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6 class="card-title text-muted mb-2">Mahasiswa Bimbingan</h6>
                                <h3 class="fw-bold text-primary">12</h3>
                                <p class="card-text small text-success">
                                    <i class="fas fa-arrow-up me-1"></i> 2 dari bulan lalu
                                </p>
                            </div>
                            <div class="align-self-center">
                                <i class="fas fa-users fa-2x text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card stat-card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6 class="card-title text-muted mb-2">Log Book Menunggu</h6>
                                <h3 class="fw-bold text-success">8</h3>
                                <p class="card-text small text-danger">
                                    <i class="fas fa-clock me-1"></i> 3 sudah lewat deadline
                                </p>
                            </div>
                            <div class="align-self-center">
                                <i class="fas fa-book fa-2x text-success "></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card stat-card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6 class="card-title text-muted mb-2">Pesan Belum Dibaca</h6>
                                <h3 class="fw-bold text-info">5</h3>
                                <p class="card-text small text-success">
                                    <i class="fas fa-comment me-1"></i> 2 dari mahasiswa prioritas
                                </p>
                            </div>
                            <div class="align-self-center">
                                <i class="fas fa-comments fa-2x text-info"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card stat-card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6 class="card-title text-muted mb-2">Tugas Perlu Dinilai</h6>
                                <h3 class="fw-bold text-danger">3</h3>
                                <p class="card-text small text-warning">
                                    <i class="fas fa-exclamation-circle me-1"></i> Deadline besok
                                </p>
                            </div>
                            <div class="align-self-center">
                                <i class="fas fa-tasks fa-2x text-danger"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content Row -->
        <div class="row">
            <!-- Mahasiswa Bimbingan -->
            <div class="col-lg-8 mb-4">
                <div class="card h-100">
                    <div class="card-header bg-white d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">Mahasiswa Bimbingan</h5>
                        <div class="dropdown">
                            <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button"
                                data-bs-toggle="dropdown">
                                Semua Mahasiswa
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#" data-filter="all">Semua Mahasiswa</a></li>
                                <li><a class="dropdown-item" href="#" data-filter="active">Aktif</a></li>
                                <li><a class="dropdown-item" href="#" data-filter="need-attention">Perlu Perhatian</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover" id="studentsTable">
                                <thead class="table-light">
                                    <tr>
                                        <th>Nama Mahasiswa</th>
                                        <th>NIM</th>
                                        <th>Progress</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr data-status="active">
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://ui-avatars.com/api/?name=Muhammad+Rizki&background=10B981&color=fff&size=32"
                                                    class="rounded-circle me-2" alt="Avatar" width="32"
                                                    height="32">
                                                <div>
                                                    <div class="fw-medium">Muhammad Rizki</div>
                                                    <small class="text-muted">TA: Sistem Monitoring</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>20210120001</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 me-3">
                                                    <div class="progress" style="height: 6px;">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            style="width: 75%"></div>
                                                    </div>
                                                </div>
                                                <small class="text-muted">75%</small>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-success">Aktif</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary view-student" data-id="1">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr data-status="need-attention">
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://ui-avatars.com/api/?name=Sarah+Fitriani&background=8B5CF6&color=fff&size=32"
                                                    class="rounded-circle me-2" alt="Avatar" width="32"
                                                    height="32">
                                                <div>
                                                    <div class="fw-medium">Sarah Fitriani</div>
                                                    <small class="text-muted">TA: Aplikasi Mobile</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>20210120002</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 me-3">
                                                    <div class="progress" style="height: 6px;">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            style="width: 45%"></div>
                                                    </div>
                                                </div>
                                                <small class="text-muted">45%</small>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-warning">Perlu Bimbingan</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary view-student" data-id="2">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr data-status="active">
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://ui-avatars.com/api/?name=Andi+Pratama&background=3B82F6&color=fff&size=32"
                                                    class="rounded-circle me-2" alt="Avatar" width="32"
                                                    height="32">
                                                <div>
                                                    <div class="fw-medium">Andi Pratama</div>
                                                    <small class="text-muted">TA: Web Dashboard</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>20210120003</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 me-3">
                                                    <div class="progress" style="height: 6px;">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            style="width: 90%"></div>
                                                    </div>
                                                </div>
                                                <small class="text-muted">90%</small>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-success">Aktif</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary view-student" data-id="3">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Aktivitas Terbaru & Mata Kuliah -->
            <div class="col-lg-4 mb-4">
                <!-- Mata Kuliah -->
                <div class="card mb-4">
                    <div class="card-header bg-white">
                        <h5 class="card-title mb-0">Mata Kuliah</h5>
                    </div>
                    <div class="card-body">
                        <div class="list-group list-group-flush">
                            <div class="list-group-item px-0 d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="mb-1">Pemrograman Web</h6>
                                    <small class="text-muted">Kode: PW2023</small>
                                </div>
                                <span class="badge bg-primary rounded-pill">42</span>
                            </div>
                            <div class="list-group-item px-0 d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="mb-1">Basis Data</h6>
                                    <small class="text-muted">Kode: BD2023</small>
                                </div>
                                <span class="badge bg-primary rounded-pill">38</span>
                            </div>
                            <div class="list-group-item px-0 d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="mb-1">Algoritma</h6>
                                    <small class="text-muted">Kode: AL2023</small>
                                </div>
                                <span class="badge bg-primary rounded-pill">45</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Aktivitas Terbaru -->
                <div class="card">
                    <div class="card-header bg-white">
                        <h5 class="card-title mb-0">Aktivitas Terbaru</h5>
                    </div>
                    <div class="card-body">
                        <div class="list-group list-group-flush">
                            <div class="list-group-item px-0">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1">Log Book Diserahkan</h6>
                                    <small class="text-muted">1 jam lalu</small>
                                </div>
                                <p class="mb-1 small">Muhammad Rizki menyerahkan log book minggu 10</p>
                                <span class="badge bg-success small">Baru</span>
                            </div>
                            <div class="list-group-item px-0">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1">Pesan Baru</h6>
                                    <small class="text-muted">2 jam lalu</small>
                                </div>
                                <p class="mb-1 small">Sarah Fitriani mengirim pesan mengenai kendala</p>
                            </div>
                            <div class="list-group-item px-0">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1">Bimbingan</h6>
                                    <small class="text-muted">5 jam lalu</small>
                                </div>
                                <p class="mb-1 small">Sesi bimbingan dengan Andi Pratama</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Progress Chart -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-white">
                        <h5 class="card-title mb-0">Progress Tugas Akhir Mahasiswa</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="progressChart" height="100"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
