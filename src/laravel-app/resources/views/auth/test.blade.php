<!-- views/auth/login.blade.php-->

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login - Sistem Magang TRKJ</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #bfc7cf;
        }

        .login-card {
            transition: all 0.4s ease;
            /* box-shadow: 0 10px 25px rgba(0, 0, 0, 1); */
            border: 6px solid #3b82f6;
            border-bottom: 16px solid #3b82f6;
            opacity: 0;
            transform: translateY(15px);
            animation: fadeInUp 0.4s ease forwards;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(15px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .login-card:hover {
            box-shadow: 0 0px 16px #3b82f6;
        }

        .form-control:focus {
            box-shadow: 0 0 0 0.25rem rgba(59, 130, 246, 0.15);
            border-color: #3b82f6;
        }

        .role-option {
            transition: all 0.2s ease;
            cursor: pointer;
            border: 1px solid #3b82f6 !important;
        }

        .role-option:hover {
            background-color: #f8fafc;
        }

        .role-option.active {
            background-color: #3b82f6 !important;
            color: #fff !important;
            font-weight: 600;
        }

        .floating-label {
            transition: all 0.2s ease;
        }

        .form-control:focus+.floating-label,
        .form-control:not(:placeholder-shown)+.floating-label {
            transform: translateY(-1.5rem) scale(0.85);
            color: #3b82f6;
        }

        #loginBtn {
            transition: all 0.2s ease;
        }

        #loginBtn:active {
            transform: scale(0.98);
        }

        #togglePassword {
            border-left: none;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        #togglePassword:hover {
            background-color: #e5e7eb;
        }
    </style>
</head>

<body>
    <div class="container-fluid min-vh-100 d-flex align-items-center justify-content-center py-5">
        <div class="row w-100 justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 col-xl-4">
                <!-- Login Card -->
                <div class="login-card bg-white rounded-3 p-4 p-md-5">
                    <!-- Header -->
                    <div class="text-center mb-4">
                        <div class="d-flex justify-content-center mb-3">
                            <div class="bg-blue-500 rounded-full p-3 w-16 h-16 flex items-center justify-center">
                                <i class="fas fa-graduation-cap text-white text-2xl"></i>
                            </div>
                        </div>
                        <h2 class="fw-bold text-gray-800">Sistem Magang TRKJ</h2>
                        <p class="text-gray-600 mt-2">Silakan masuk ke akun Anda</p>
                    </div>

                    <!-- Login Form -->
                    <form id="loginForm" method="POST" action="{{ route('login.submit') }}">
                        @csrf
                        <!-- Role Selection -->
                        <div class="mb-4">
                            <label class="form-label fw-medium text-gray-700 mb-3">Pilih Peran</label>
                            <div class="d-flex gap-2">
                                <div class="flex-fill">
                                    <input type="radio" class="btn-check" name="role" id="role-dosen"
                                        value="dosen" autocomplete="off" checked>
                                    <label
                                        class="role-option btn btn-outline-primary w-100 rounded-2 py-2 d-flex align-items-center justify-content-center"
                                        for="role-dosen">
                                        <i class="fas fa-chalkboard-teacher me-2"></i>
                                        <span>Dosen</span>
                                    </label>
                                </div>
                                <div class="flex-fill">
                                    <input type="radio" class="btn-check" name="role" id="role-mahasiswa"
                                        value="mahasiswa" autocomplete="off">
                                    <label
                                        class="role-option btn btn-outline-primary w-100 rounded-2 py-2 d-flex align-items-center justify-content-center"
                                        for="role-mahasiswa">
                                        <i class="fas fa-user-graduate me-2"></i>
                                        <span>Mahasiswa</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Username Field dengan Icon -->
                        <div class="mb-3">
                            <div class="input-group">
                                <span class="input-group-text bg-primary text-white">
                                    <i class="fas fa-id-card "></i>
                                </span>
                                <input type="text" class="form-control" id="username" placeholder="NIP atau NIM"
                                    required>
                            </div>
                            <div class="form-text text-gray-500 mt-1" id="username-help">
                                Pilih peran terlebih dahulu
                            </div>
                        </div>

                        <!-- Password Field dengan Icon -->
                        <div class="mb-4 position-relative">
                            <div class="input-group">
                                <span class="input-group-text bg-primary text-white">
                                    <i class="fas fa-lock"></i>
                                </span>
                                <input type="password" class="form-control" id="password" placeholder="Password"
                                    required>
                                <button type="button" class="input-group-text" aria-label="Tampilkan Password"
                                    id="togglePassword">
                                    <i class="fas fa-eye-slash text-primary"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" id="loginBtn"
                            class="btn btn-primary w-100 py-2 rounded-2 fw-medium fs-5 mb-3">
                            <i class="fas fa-sign-in-alt me-2"></i>
                            Masuk
                        </button>

                    </form>
                </div>

                <!-- Footer -->
                <div class="text-center mt-4">
                    <p class="text-gray-500 text-sm">&copy; 2025 Sistem Magang TRKJ. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const dosenRadio = document.getElementById("role-dosen");
            const mahasiswaRadio = document.getElementById("role-mahasiswa");
            const usernameInput = document.getElementById("username");
            const usernameHelp = document.getElementById("username-help");
            const roleLabels = document.querySelectorAll(".role-option");

            function updatePlaceholder() {
                roleLabels.forEach(label => label.classList.remove("active"));

                if (dosenRadio.checked) {
                    usernameInput.placeholder = "Masukkan NIP Dosen";
                    usernameHelp.textContent = "Gunakan NIP Anda untuk masuk.";
                    document.querySelector("label[for='role-dosen']").classList.add("active");
                } else if (mahasiswaRadio.checked) {
                    usernameInput.placeholder = "Masukkan NIM Mahasiswa";
                    usernameHelp.textContent = "Gunakan NIM Anda untuk masuk.";
                    document.querySelector("label[for='role-mahasiswa']").classList.add("active");
                }
            }

            dosenRadio.addEventListener("change", updatePlaceholder);
            mahasiswaRadio.addEventListener("change", updatePlaceholder);

            // Panggil sekali pas load awal
            updatePlaceholder();
        });

        document.getElementById("loginForm").addEventListener("submit", function(e) {
            const btn = document.getElementById("loginBtn");
            btn.disabled = true;
            btn.innerHTML = `<i class="fas fa-spinner fa-spin me-2"></i> Memproses...`;
        });
        // Show / Hide Password
        document.getElementById("togglePassword").addEventListener("click", function() {
            const passwordInput = document.getElementById("password");
            const icon = this.querySelector("i");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                icon.classList.replace("fa-eye-slash", "fa-eye");
                icon.style.color = "#3b82f6"; // biru saat aktif
            } else {
                passwordInput.type = "password";
                icon.classList.replace("fa-eye", "fa-eye-slash");
                icon.style.color = "#3b82f6"; // reset
            }
        });
    </script>
</body>

</html>
