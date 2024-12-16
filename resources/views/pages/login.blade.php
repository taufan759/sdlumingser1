<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/css/style.css')}}">

    <title>Login SDN Luminger 1</title>
    <style>
      /* Perubahan Custom CSS */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
        overflow: hidden; /* Mencegah scroll di desktop */
      }
      .d-lg-flex.half {
        height: 100vh;
      }
      .contents {
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 30px;
        background: #fff;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-direction: column;
        justify-content: center;
      }
      h3 {
        color: #333; /* Warna teks lebih gelap */
      }
      p {
        color: #555; /* Warna teks lebih gelap */
      }
      .bg {
        background-image: linear-gradient(to bottom, rgba(0,0,0,0.5), rgba(0,0,0,0.3)), url('admin/images/bg_1.jpg');
        background-size: cover;
        background-position: center;
        height: 100%; /* Pastikan gambar memenuhi layar */
      }
      @media (max-width: 991.98px) {
        html, body {
          overflow-y: hidden; /* Nonaktifkan scroll pada mobile */
        }
        .bg {
          height: 50vh; /* Gambar tetap terlihat di perangkat mobile */
        }
        .contents {
          margin-top: -30px; /* Mengurangi jarak antara gambar dan form di tablet */
          height: auto;
        }
      }
      @media (max-width: 768px) {
        .contents {
          padding: 20px;
          margin-top: 0;
        }
        .half .bg, .half .contents {
          width: 100%;
          height: auto;
        }
      }
    </style>
  </head>
  <body>

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3>Selamat Datang</h3>
            <p class="mb-4"><strong>di laman login web SDN Lumingser 1.</strong></p>
            <form method="POST" action="{{ url('login') }}">
              @csrf

              <div class="mb-3">
                  <label for="login" class="form-label">{{ __('NIS/Email') }}</label>
                  <input id="login" type="text" class="form-control @error('login') is-invalid @enderror" name="login" value="{{ old('login') }}" required autocomplete="login" autofocus>
                  @error('login')
                      <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
              </div>

              <div class="mb-3">
                  <label for="password" class="form-label">{{ __('Password') }}</label>
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                  @error('password')
                      <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
              </div>

              <button type="submit" class="btn btn-primary w-100">
                  {{ __('Masuk') }}
              </button>

              @if (Route::has('password.request'))
                  <div class="mt-3 text-center">
                      <a href="{{ route('password.request') }}" class="text-decoration-none">
                          {{ __('Lupa Kata Sandi?') }}
                      </a>
                  </div>
              @endif
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>

    <script src="{{ asset('admin/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('admin/js/popper.min.js')}}"></script>
    <script src="{{ asset('admin/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('admin/js/main.js')}}"></script>
  </body>
</html>
