<footer id="footer" class="footer">
    <div class="container footer-top">
    <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
            <a href="#" class="d-flex align-items-center">
                <img width="50px" src="{{ asset('assets/kemdikbud.png') }}" alt="">
                <span style="margin-left: 10px; font-size: 18px;">SD Negeri Lumingser 1</span>
            </a>
        <div class="footer-contact pt-3">
            <p>Jl. Kemiri, RT 3/RW 1, Dusun Lumingsir, Desa Lumingser, Kec. Adiwerna, Kab. Tegal, Prov. Jawa Tengah, Kode Pos 52194.<br>
            <p class="mt-3"><strong>Telepon:</strong> <span>(0283) 3321443</span></p>
            <p><strong>Email:</strong> <span>sdnlumingser01@gmail.com</span></p>
        </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
        <h4>Profil</h4>
        <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/sejarah') }}">Sejarah</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/visimisi') }}">Visi &  Misi</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/staff_profile') }}">Guru</a></li>
        </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
        <h4>Media</h4>
        <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="{{ url('news') }}">Berita</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="{{ url('galery') }}">Galeri</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="{{ url('prestasi') }}">Prestasi</a></li>
        </ul>
        </div>

        <div class="col-lg-4 col-md-12 footer-links">
        <h4>Akun</h4>
        <p>Media Sosial Resmi Kami.</p>
        <div class="social-links d-flex">
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
        </div>
        </div>
    </div>
    </div>

    <div class="container copyright text-center mt-4">
    <p><strong>© <span>Copyright</span> <span id="current-year"></span> Made with 💓 UBSI Tegal</strong></p>
    </div>
    
    <script>
    document.getElementById('current-year').textContent = new Date().getFullYear();
    </script>
</footer>

<style>
    .footer {
        color: rgb(255, 255, 255); 
        background: rgb(19, 62, 135); 
        font-size: 14px;
        padding-bottom: 20px;
        position: relative;
    }

    .footer .footer-top {
        padding-top: 50px;
    }

    .footer .social-links a {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        border: 1px solid rgba(255, 255, 255, 0.5); 
        font-size: 16px;
        color: rgba(255, 255, 255, 0.8); 
        margin-right: 10px;
        transition: 0.3s;
    }

    .footer .social-links a:hover {
        color: rgb(255, 255, 255); 
        color: rgb(255, 255, 255); 
    }

    .footer h4 {
        font-size: 16px;
        font-weight: bold;
        position: relative;
        padding-bottom: 12px;
    }

    .footer .footer-links {
        margin-bottom: 30px;
    }

    .footer .footer-links ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer .footer-links ul i {
        margin-right: 3px;
        font-size: 12px;
        line-height: 0;
        color: rgba(255, 255, 255, 0.8); 
    }

    .footer .footer-links ul li {
        padding: 10px 0;
        display: flex;
        align-items: center;
    }

    .footer .footer-links ul li:first-child {
        padding-top: 0;
    }

    .footer .footer-links ul a {
        display: inline-block;
        color: rgba(255, 255, 255, 0.8); 
        line-height: 1;
    }

    .footer .footer-links ul a:hover {
        color: rgba(255, 255, 255, 0.8); 
    }

    .footer .footer-about a {
        color: rgba(255, 255, 255, 0.8); 
        font-size: 28px;
        font-weight: 600;
        text-transform: uppercase;
    }

    .footer .footer-contact p {
        margin-bottom: 5px;
        color: rgb(255, 255, 255); 
    }

    .footer .copyright {
        padding-top: 25px;
        padding-bottom: 25px;
        border-top: 1px solid rgba(255, 255, 255, 0.9); 
    }

    .footer .copyright p {
        margin-bottom: 0;
        color: rgb(255, 255, 255); 
    }

    .footer .credits {
        margin-top: 6px;
        font-size: 13px;
        color: rgb(255, 255, 255); 
    }
</style>