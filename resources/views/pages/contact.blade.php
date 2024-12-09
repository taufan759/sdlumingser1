@extends('layouts.default')

@section('content')
<div class="container">
    <div class="row vh-100 d-flex align-items-center justify-content-center">
        <div class="card px-5 py-3 rounded-4" style="max-width: 500px;">
            <div class="card-body mx-auto my-auto">
                <h2 class="text-center mb-4">Form Kritik & Saran SDN Lumingser 01</h2>
                <form id="feedbackForm">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="feedback" class="form-label">Kritik & Saran</label>
                        <textarea class="form-control" id="feedback" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('feedbackForm').addEventListener('submit', function(event) {
        event.preventDefault();

        // Ambil data dari form
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const feedback = document.getElementById('feedback').value;

        // Nomor WhatsApp tujuan (sesuaikan dengan nomor yang diinginkan)
        const nomorWhatsApp = '+6283124332900';

        // Buat pesan yang akan dikirim
        const pesan = `Nama: ${name}\nEmail: ${email}\nKritik & Saran:\n${feedback}`;

        // Buat link WhatsApp
        const link = `https://wa.me/${nomorWhatsApp}?text=${encodeURIComponent(pesan)}`;

        // Buka link di tab baru
        window.open(link, '_blank');

        // Tampilkan pesan konfirmasi (opsional)
        alert('Link WhatsApp telah dibuat. Silakan klik link untuk mengirim pesan.');
    });
</script>
@endsection