@extends('layouts.default')

@section('content')
<div class="container">
    <div class="row vh-100 d-flex align-items-center justify-content-center">
        <div class="card px-5 py-3 rounded-4" style="max-width: 500px;">
            <div class="card-body mx-auto my-auto">
                <h2 class="pb-3">Form Kritik & Saran SDN Kesamiran 01</h2>
                <form onsubmit="return validateForm()">
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
                    <button type="submit" class="btn btn-success">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
