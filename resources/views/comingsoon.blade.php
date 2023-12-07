<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    @include('includes.head')
</head>

<body>
    <div class="row">
        <img class="card-img-top" src="{{ asset('assets/img/construction-silhouette.jpg') }}" alt=""
            style="filter: brightness(50%); object-fit: cover; height: 100vh;">
        <div class="card-img-overlay">
            <div class="row d-flex align-items-center">
                <div class="col text-center" style="color: whitesmoke; padding-top: 38vh">
                    <p class="display-4">Web ini Sedang dalam Konstruksi<br>Kami Akan Kembali Pada :</p>
                    <div id="countdown" class="mt-3 text-center" style="font-size: 2em"></div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Tanggal target (ganti sesuai kebutuhan)
            const targetDate = new Date("December 14, 2023 08:00:00").getTime();

            // Memperbarui countdown setiap 1 detik
            const countdownInterval = setInterval(function() {
                // Tanggal saat ini
                const currentDate = new Date().getTime();

                // Hitung selisih waktu antara tanggal target dan tanggal saat ini
                const timeDifference = targetDate - currentDate;

                // Hitung hari, jam, menit, dan detik
                const days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
                const hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

                // Tampilkan countdown di elemen dengan id "countdown"
                document.getElementById("countdown").innerHTML =
                    days + " Hari " + hours + " Jam " + minutes + " Menit " + seconds + " Detik ";
            }, 1000);
        });
    </script>
</body>

</html>
