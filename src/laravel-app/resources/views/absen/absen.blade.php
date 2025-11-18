<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi Dengan Kontrol Tombol</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container my-5">
        <h2 class="mb-4">Absensi Mahasiswa Magang</h2>

        <div class="mb-3">
            <button id="checkInBtn" class="btn btn-success me-2" disabled>Check In</button>
            <button id="checkOutBtn" class="btn btn-primary" disabled>Check Out</button>
        </div>

        <div class="alert alert-info" id="infoWaktu"></div>

        <table class="table table-bordered mt-4">
            <thead class="table-secondary">
                <tr>
                    <th>Nama</th>
                    <th>Check In</th>
                    <th>Check Out</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody id="absensiTable"></tbody>
        </table>
    </div>


    <script>
        // Dummy Data
        let absensiData = [{
            nama: "Andi",
            checkIn: null,
            checkOut: null,
            status: null
        }];

        // Waktu aturan
        const waktuTepat = 7.5; // 07:30
        const waktuTelat = 8.0; // 08:00
        const batasCheckIn = 9.0; // 09:00
        const mulaiCheckOut = 16.0; // 16:00
        const batasCheckOut = 17.0; // 17:00

        let sudahCheckIn = false;
        let sudahCheckOut = false;

        // Render tabel
        function renderTable() {
            const tbody = document.getElementById("absensiTable");
            tbody.innerHTML = "";
            absensiData.forEach(data => {
                tbody.innerHTML += `
            <tr>
                <td>${data.nama}</td>
                <td>${data.checkIn ?? "-"}</td>
                <td>${data.checkOut ?? "-"}</td>
                <td>${data.status ?? "-"}</td>
            </tr>`;
            });
        }

        // Mengambil jam saat ini format desimal
        function getCurrentTime() {
            const now = new Date();
            const jam = now.getHours();
            const menit = now.getMinutes();
            const decimal = jam + menit / 60;
            return {
                timeString: `${jam.toString().padStart(2,"0")}:${menit.toString().padStart(2,"0")}`,
                hour: decimal
            };
        }

        // Update status tombol sesuai waktu
        function updateButtonStatus() {
            const {
                hour
            } = getCurrentTime();
            const info = document.getElementById("infoWaktu");

            // Aturan tombol Check In
            if (!sudahCheckIn && hour >= 7 && hour <= batasCheckIn) {
                document.getElementById("checkInBtn").disabled = false;
                info.innerHTML = "Waktu Check In aktif (07:00 - 09:00)";
            } else {
                document.getElementById("checkInBtn").disabled = true;
            }

            // Aturan tombol Check Out
            if (sudahCheckIn && !sudahCheckOut && hour >= mulaiCheckOut && hour <= batasCheckOut) {
                document.getElementById("checkOutBtn").disabled = false;
                info.innerHTML = "Waktu Check Out aktif (16:00 - 17:00)";
            } else if (sudahCheckIn) {
                document.getElementById("checkOutBtn").disabled = true;
            }

            // Update tiap 5 detik
            setTimeout(updateButtonStatus, 5000);
        }


        // EVENT CHECK IN
        document.getElementById("checkInBtn").addEventListener("click", () => {
            const {
                timeString,
                hour
            } = getCurrentTime();

            if (hour > batasCheckIn) {
                alert("Sudah lewat batas check in!");
                return;
            }

            let data = absensiData[0];
            data.checkIn = timeString;

            if (hour <= waktuTepat) data.status = "Tepat Waktu";
            else if (hour >= waktuTelat && hour < batasCheckIn) data.status = "Telat";
            else data.status = "Diluar Waktu";

            sudahCheckIn = true;
            document.getElementById("checkInBtn").disabled = true;

            renderTable();
        });


        // EVENT CHECK OUT
        document.getElementById("checkOutBtn").addEventListener("click", () => {
            const {
                timeString,
                hour
            } = getCurrentTime();

            if (hour < mulaiCheckOut || hour > batasCheckOut) {
                alert("Belum waktunya check out!");
                return;
            }

            let data = absensiData[0];
            data.checkOut = timeString;

            if (hour > mulaiCheckOut) {
                data.status += " | Pulang Lewat Waktu";
            }

            sudahCheckOut = true;
            document.getElementById("checkOutBtn").disabled = true;

            renderTable();
        });


        // Pertama kali load halaman
        renderTable();
        updateButtonStatus();
    </script>

</body>

</html>
