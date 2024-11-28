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
                @csrf
                <form>
                    <div class="form-group text-center">
                        <p class="lead fw-normal pt-3">Portal Layanan SDN Lumingser 01</p>
                    </div>

                    <div class="form-group p-3 pt-2">
                        <label for="nama">Nama:</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan nama Anda">
                    </div>

                    <div class="form-group p-3 pt-2">
                        <label for="pesan">Pesan:</label>
                        <textarea class="form-control" id="pesan" rows="4" placeholder="Masukkan pesan Anda"></textarea>
                    </div>

                    <div class="form-group d-flex justify-content-center pb-3">
                        <button type="reset" class="btn btn-secondary me-2" data-bs-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-success ms-2" onclick="kirimPesan()">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
</body>

</html>
