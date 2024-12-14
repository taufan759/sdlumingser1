<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    @include('includes.head')
</head>

<body>
    <header>
        @include('includes.header')
    </header>
    <main>
        @yield('content')
    </main>
    <!-- Button trigger modal -->
    <button type="button" class="btn floating-button" data-bs-toggle="modal" data-bs-target="#waModal">
        <i class="bi bi-whatsapp"></i>
    </button>


    @include('includes.footer')
    <!-- Modal -->
    <div class="modal fade" id="waModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form>
                    @csrf
                    <!-- Header -->
                    <div class="modal-header">
                        <h5 class="modal-title text-center w-100 fw-bold" id="exampleModalLabel">Kritik dan Saran</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <!-- Body -->
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label for="nama" class="form-label fw-semibold">Nama</label>
                            <input type="text" class="form-control" id="nama" placeholder="Masukkan nama Anda">
                        </div>

                        <div class="form-group mb-3">
                            <label for="email" class="form-label fw-semibold">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Masukkan email Anda">
                        </div>

                        <div class="form-group mb-3">
                            <label for="pesan" class="form-label fw-semibold">Pesan</label>
                            <textarea class="form-control" id="pesan" rows="4" placeholder="Masukkan kritik atau saran Anda"></textarea>
                        </div>
                    </div>

                    <!-- Footer -->
                    <div class="modal-footer d-flex justify-content-between">
                        <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-primary" onclick="kirimPesan()">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <style>
        /* Responsiveness */
        @media (max-width: 768px) {
            .modal-content {
                padding: 10px;
            }
            .modal-title {
                font-size: 18px;
            }
            .form-label {
                font-size: 14px;
            }
            .form-control {
                font-size: 14px;
                padding: 8px;
            }
        }

        @media (min-width: 769px) {
            .modal-content {
                padding: 20px;
            }
            .modal-title {
                font-size: 20px;
            }
            .form-label {
                font-size: 16px;
            }
            .form-control {
                font-size: 16px;
                padding: 10px;
            }
        }
    </style>

    <script>
        function kirimPesan() {
        var nama = document.getElementById('nama').value;
        var email = document.getElementById('email').value
        var pesan = document.getElementById('pesan').value;

        if (nama === '' && email === '' && pesan === '') {
            Swal.fire({
                icon: "error",
                title: "Peringatan",
                text: "Silakan isi nama, email, dan pesan terlebih dahulu.",
            });
            return;
        } else if (nama === '') {
            Swal.fire({
                icon: "error",
                title: "Peringatan",
                text: "Silakan isi nama terlebih dahulu.",
            });
            return;
        } else if (email === '') {
            Swal.fire({
                icon: "error",
                title: "Peringatan",
                text: "Silakan isi email terlebih dahulu.",
            });
            return;
        } else if (pesan === '') {
            Swal.fire({
                icon: "error",
                title: "Peringatan",
                text: "Silakan isi pesan terlebih dahulu.",
            });
            return;
        }
        // Membuat pesan yang berisi informasi dari form
        var whatsappPesan = "Nama : " + encodeURIComponent(nama) + "%0aEmail : " + encodeURIComponent(email) + "%0aPesan : " + encodeURIComponent(pesan);

        // Mengarahkan pengguna ke WhatsApp dengan pesan yang sudah dibuat
        window.open("https://api.whatsapp.com/send?phone=6283124332900&text=" + whatsappPesan,'_blank');

        // Reset form setelah kirim
        document.querySelector('#waModal form').reset();
    };
    </script>

</body>

</html>
