<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DLB Company Profile</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap">
</head>

<body>
    {{-- Home Content 1 --}}
    <nav class="navbar">
        <div class="container1">
            <div class="navbar-left">
                <div class="navbar-logo">
                    <a href="#"><img src="{{ asset('images/logo tech.png') }}" alt="Logo Tech"></a>
                </div>
                <ul class="navbar-menu">
                    <li><a href="#layanan"> Layanan</a></li>
                    <li><a href="#portofolio">Portofolio</a></li>
                    <li><a href="#tentang">Tentang</a></li>
                    <li><a href="#kontak">Kontak</a></li>
                </ul>
            </div>
            <div class="navbar-right">
                <div class="navbar-icons">
                    <a href="#"><img src="{{ asset('images/facebook.png') }}" alt="Facebook"></a>
                    <a href="#"><img src="{{ asset('images/twitter.png') }}" alt="Twitter"></a>
                    <a href="#"><img src="{{ asset('images/instagram.png') }}" alt="Instagram"></a>
                    <a href="#"><img src="{{ asset('images/whatsapp.png') }}" alt="Whatsapp"></a>
                </div>
            </div>
        </div>
    </nav>

    {{-- Home Content 2 --}}
    <div class="container2">
        <img src="{{ asset('images/BG.png') }}" alt="Background Image">
        <div class="content2">
            <div class="kaki">
                <img src="{{ asset('images/kaki.png') }}" alt="">
            </div>
            <div class="isi-content-2">
                <h1>Mitra Terbaik Untuk</h1>
                <h1>Transformasi Digital</h1>
                <h1>Anda</h1>
                <br>
                <h3>Maju bersama perkembangan zaman bersama kami! Kami lengkapi</h3>
                <h3>Bisnis Anda dengan aplikasi cerdas untuk meraih kesuksesan masa</h3>
                <h3>depan. Hubungi kami segera untuk mendapatkan layanan terbaik demi</h3>
                <h3>kemajuan bisnis Anda</h3>
                <div class="button-hubungi-kami">
                    <a href="#" class="button">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </div>

    {{-- Home Content 3 --}}
    <div class="container3">
        <div class="imagegedungputih">
            <img src="{{ asset('images/Gedung Putih.png') }}" alt="">
        </div>
        <div class="layanan-kami">
            <h1>Layanan Kami</h1>
            <p>Kami berkomitmen untuk mewujudkan impian digital anda dengan menyediakan</p>
            <p>layanan pengembangan software berkualitas tinggi.</p>
        </div>
        <div class="card-layanan-kami">
            <div class="card">
                <img src="{{ asset('images/carduiux.png') }}" alt="UI/UX Design">
                <h1>Desain UI/UX</h1>
                <p>DlbforTech memiliki tim desain yang berpengalaman dalam menciptakan antarmuka pengguna (UI)
                    yang menarik dan ramah pengguna (UX) untuk aplikasi dan situs web. Desain kami fokus pada
                    kegunaan, estetika, dan pengalaman pengguna yang memuaskan.</p>
                <a href="#" class="button">Lihat Selengkapnya</a>
            </div>
            <div class="card">
                <img src="{{ asset('images/cardpsw.png') }}" alt="Pengembangan Situs Web">
                <h1>Pengembangan Situs Web</h1>
                <p>DLBforTech menawarkan layanan pengembangan situs web yang
                    responsif dan profesional melalui
                    pendekatan yang
                    berorientasi pada
                    kualitas dan kepuasan pelanggan.</p>
                <a href="#" class="button">Lihat Selengkapnya</a>
            </div>
            <div class="card">
                <img src="{{ asset('images/cardam.png') }}" alt="Pengembangan Aplikasi Mobile">
                <h1>Pengembangan Aplikasi Mobile</h1>
                <p>Kami menyediakan layanan
                    pengembangan aplikasi mobile untuk
                    platform Android dan iOS.
                    Tim pengembangan kami menggunakan
                    teknologi terkini untuk menciptakan
                    aplikasi mobile yang responsif,
                    berkinerja tinggi, dan sesuai dengan
                    kebutuhan bisnispengguna.</p>
                <a href="#" class="button">Lihat Selengkapnya</a>
            </div>
            <div class="card">
                <img src="{{ asset('images/cardsi.png') }}" alt="Sistem Informasi">
                <h1>Sistem Informasi</h1>
                <p>Kami menyediakan layanan
                    pengembangan aplikasi mobile untuk
                    platform Android dan iOS.
                    Tim pengembangan kami menggunakan
                    teknologi terkini untuk menciptakan
                    aplikasi mobile yang responsif,
                    berkinerja tinggi, dan sesuai dengan
                    kebutuhan bisnispengguna.</p>
                <a href="#" class="button">Lihat Selengkapnya</a>
            </div>
        </div>
    </div>

    {{-- Home Content 4 --}}
    <div class="container4">
        <div class="list-client">
            <h1>0</h1>
            <p>Klien</p>
        </div>
        <div class="list-client">
            <h1>0</h1>
            <p>Projek</p>
        </div>
        <div class="list-client">
            <h1>0</h1>
            <p>Masalah Terpecahkan</p>
        </div>
        <div class="list-client">
            <h1>0</h1>
            <p>Tahun Berjalan</p>
        </div>
    </div>

    {{-- Home Content 5 --}}
    <div class="container5">
        <div class="choose-us">
            <img src="{{ asset('images/kaki.png') }}" alt="">
            <div class="text">
                <h1>Mengapa Memilih</h1>
                <h1>Kami?</h1>
                <p>Kami Menjaga Berbagai Aspek Yang Dapat</span> <br> Berpengaruh Pada Penilaian Klien</p>
            </div>
        </div>
    </div>
    <div class="container5a">
        <div class="choose-me">
            <img src="{{ asset('images/terjangkau.png') }}" alt="">
            <h1>Terjangkau</h1>
            <p>Dengan biaya yang terjangkau namun tetap memberikan kualitas terbaik.</p>
        </div>
        <div class="choose-me">
            <img src="{{ asset('images/kualitas.png') }}" alt="">
            <h1>Kualitas</h1>
            <p>Kami berkomitmen untuk memberikan produk dan layanan berkualitas tinggi serta menghasilkan solusi yang
                memenuhi standar kualitas tertinggi</p>
        </div>
        <div class="choose-me">
            <img src="{{ asset('images/inovasi.png') }}" alt="">
            <h1>Inovasi</h1>
            <p>DLBforTech berkomitmen untuk inovasi dan kreativitas dalam meningkatkan efisiensi dan efektivitas solusi
                teknologi informasi</p>
        </div>
        <div class="choose-me">
            <img src="{{ asset('images/kemitraan.png') }}" alt="">
            <h1>Kemitraan</h1>
            <p>DLBforTech berkomitmen menjadi mitra strategis jangka panjang untuk membantu pelanggan mencapai tujuan
                bisnis dengan teknologi</p>
        </div>
        <div class="choose-me">
            <img src="{{ asset('images/komitmen.png') }}" alt="">
            <h1>Komitmen</h1>
            <p>Kepuasan pelanggan adalah prioritas DLBforTech, dengan fokus pada pemenuhan kebutuhan dan dukungan purna
                jual berkualitas</p>
        </div>
    </div>

    {{-- Home Content 6 --}}
    <div class="container6">
        <h1>Klien Kami</h1>
        <p>Kami Menjaga Berbagai Aspek Yang Dapat</p>
        <p>Berpengaruh Pada Penilaian Klien</p>
    </div>
    <div class="logos">
        <div class="logos-slide">
            <img src="{{ asset('images/logo_tech.png') }} " class="logo_tech">
            <img src="{{ asset('images/logo_tech1.png') }}" class="logo_tech">
            <img src="{{ asset('images/logo_tech.png') }} " class="logo_tech">
            <img src="{{ asset('images/logo_tech1.png') }}" class="logo_tech">
            <img src="{{ asset('images/logo_tech.png') }} " class="logo_tech">
            <img src="{{ asset('images/logo_tech1.png') }}" class="logo_tech">
            <img src="{{ asset('images/logo_tech.png') }} " class="logo_tech">
            <img src="{{ asset('images/logo_tech1.png') }}" class="logo_tech">
        </div>
    </div>

    <script>
        var copy = document.querySelector(".logos-slide").cloneNode(true);
        document.querySelector('.logos').appendChild(copy);
    </script>

    {{-- Home Content 7 --}}
    <div class="portfolio">
        <h1>Portfolio</h1>
    </div>
    <div class="wrapper">
        <div class="image">
            <img src="{{ asset('images/dlbcoffeshop.png') }}">
            <div class="content">
                <h1>Image Hover Effect</h1>
                <p>Ini Hover</p>
            </div>
        </div>
        <div class="image">
            <img src="{{ asset('images/dlbstressapp.png') }}">
            <div class="content">
                <h1>Image Hover Effect</h1>
                <p>Ini Hover</p>
            </div>
        </div>
        <div class="image">
            <img src="{{ asset('images/dlbmenu.png') }}">
            <div class="content">
                <h1>Image Hover Effect</h1>
                <p>Ini Hover</p>
            </div>
        </div>
        <div class="image">
            <img src="{{ asset('images/dlbpresensi.png') }}">
            <div class="content">
                <h1>Image Hover Effect</h1>
                <p>Ini Hover</p>
            </div>
        </div>
    </div>
    <div class="buttonportfolio">
        <a href="#" class="button-portfolio">Lihat Selengkapnya</a>
    </div>

    {{-- Home Content 8 --}}
    <section id="contact">
        <div class="contact-content">
            <div class="contact-info">
                <h1>Hubungi Kami</h1>
                <p>Maju bersama perkembangan zaman bersama kami! Kami lengkapi bisnis Anda dengan aplikasi cerdas untuk
                    meraih kesuksesan masa depan. Hubungi kami segera untuk mendapatkan layanan terbaik demi kemajuan
                    bisnis Anda.</p>
            </div>

            <form action="{{ route('contact.submit') }}" method="POST" class="contact-form">
                @csrf
                <div class="form-group">
                    <div class="form-item">
                        <input type="text" id="name" name="name" placeholder="Nama" required>
                    </div>
                    <div class="form-item">
                        <input type="email" id="email" name="email" placeholder="Email" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-item">
                        <input type="text" id="notelepon" name="notelepon" placeholder="No.Telepon" required>
                    </div>
                    <div class="form-item">
                        <input type="text" id="namaperusahaan" name="namaperusahaan"
                            placeholder="Nama Perusahaan" required>
                    </div>
                </div>
                <textarea id="message" name="message" placeholder="Pesan" required></textarea>
                <div class="button-container">
                    <a href="#" class="button">Kirim Pesan</a>
                </div>
            </form>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>
    </section>

    {{-- Footer --}}
    <div class="footer1">
        <img src="{{ asset('images/Gedung Abu.png') }}" alt="" class="footerimg">
    </div>
    <div class="footer">
        <img src="{{ asset('images/kaki.png') }}" alt="">
        <div>
            <h1>DLBforTech</h1>
            <p>Jalan DS Kalimanjung, Tlogo, Ambarketawang, Kec. Gamping,</p>
            <p>Kabupaten Sleman, Daerah Istimewa Yogyakarta 55294</p>
            <p>Telp. +6283163950225</p>
            <p>Email : bersamadualangkah@gmail.com</p>
        </div>
    </div>
    <div class="footer-icons">
        <img src="{{ asset('images/facebook.png') }}" alt="Facebook" class="footericon">
        <img src="{{ asset('images/twitter.png') }}" alt="Twitter" class="footericon">
        <img src="{{ asset('images/instagram.png') }}" alt="Instagram" class="footericon">
        <img src="{{ asset('images/whatsapp.png') }}" alt="WhatsApp" class="footericon">
    </div>

    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
