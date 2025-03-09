<?php include 'config.php'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Pembelajaran Interaktif Anak 24-59 Bulan</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="pembelajaran anak, edukasi interaktif, kesehatan anak, stimulasi psikososial, pendidikan anak usia dini" name="keywords">
    <meta content="Platform pembelajaran interaktif untuk meningkatkan kesehatan, pembelajaran, dan psikososial anak usia 24-59 bulan." name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Boxicon Font Stylesheet -->
     <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.theme.default.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/chatbot.css">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>Pembelajaran Anak 24-59 Bulan</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link active">Beranda</a>
                <a href="about.html" class="nav-item nav-link">Tentang Kami</a>
                <a href="courses.html" class="nav-item nav-link">Materi</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Halaman</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="team.html" class="dropdown-item">Tim Kami</a>
                        <a href="testimonial.html" class="dropdown-item">Testimoni</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Kontak</a>
                <a href="logout.php" class="nav-item nav-link">Logout</a>
            </div>
            <a href="belajar.html" class="btn btn-primary py-3 px-4 d-none d-lg-block">Mulai Belajar <i class="fa fa-arrow-right ms-2"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Chatbot Start -->

    <div class="chatbot-section">
        <div class="chatbot-icon" id="chatbot-act-btn">
            <i class='bx bxs-conversation'></i>
            <p>Virtual Teacher</p>
        </div>
        <div class="chatbot-chat" id="chatbot-chat" hidden>
            <div class="chat-header">
                <p>Virtual Teacher</p>
                <div id="chatbot-close">
                    <i class='bx bx-window-close'></i>
                </div>
            </div>
            <div class="chat-room">
                <div class="teacher-chat chat-bubble">
                    <div>
                        Ada yang bisa saya bantu?
                    </div>
                </div>
            </div>
            <div class="chat-presets" id="horizontalScroll">
                <p id="preset">Metode belajar efektif</p>
                <p id="preset">Jadwal belajar anak</p>
                <p id="preset">Memotivasi anak belajar</p>
                <p id="preset">Kebiasaan belajar anak</p>
            </div>
            <form class="chat-form" id="chat-form">
                <input type="text" class="chat-input" id="prompt-input" placeholder="Ask teacher.." require>
                <button class="chat-send" type="submit"><i class='bx bx-send' ></i></button>
            </form>
            <div class="credits"><p>Powered by <img class="gemini-logo" src="assets/gemini.png"> Gemini</p></div>
        </div>
    </div>

    <!-- Chatbot End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-start" style="background: rgba(24, 29, 56, .7); padding-top: 10vh;">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Belajar Interaktif untuk Anak</h5>
                                <h1 class="display-3 text-white animated slideInDown">Mendukung Perkembangan Anak Usia 24-59 Bulan</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Platform inovatif untuk membantu perkembangan pembelajaran dan psikososial anak dengan metode interaktif yang menyenangkan.</p>
                                <a href="#" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft" id="scrollButton">Pelajari Lebih Lanjut</a>
                                <!--<a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Mulai Belajar</a>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-start" style="background: rgba(24, 29, 56, .7); padding-top: 10vh;">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Pembelajaran Mudah & Menyenangkan</h5>
                                <h1 class="display-3 text-white animated slideInDown">Akses Materi Kapan Saja, di Mana Saja</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Didesain khusus untuk anak-anak, platform ini menyediakan aktivitas interaktif untuk meningkatkan keterampilan motorik, kognitif, dan sosial mereka.</p>
                                <a href="#" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft" id="scrollButton2">Pelajari Lebih Lanjut</a>
                                <!--<a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Mulai Belajar</a>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- JavaScript untuk Scroll ke Bawah -->
    <script>
        document.getElementById("scrollButton").addEventListener("click", function(event) {
            event.preventDefault(); // Menghindari efek bawaan dari tag <a>
            window.scrollBy({
                top: window.innerHeight * 1.2, // Scroll sekitar 120% dari tinggi layar
                behavior: "smooth"
            });
        });

        document.getElementById("scrollButton2").addEventListener("click", function(event) {
            event.preventDefault();
            window.scrollBy({
                top: window.innerHeight * 0.9,
                behavior: "smooth"
            });
        });
    </script>


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-lightbulb text-primary mb-4"></i>
                            <h5 class="mb-3">Metode Belajar Interaktif</h5>
                            <p>Aktivitas belajar berbasis permainan yang menyenangkan dan sesuai dengan tahapan perkembangan anak.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-tablet-alt text-primary mb-4"></i>
                            <h5 class="mb-3">Pembelajaran Digital yang Menarik</h5>
                            <p>Konten edukatif interaktif yang dapat diakses kapan saja, membantu anak belajar sambil bermain.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-paint-brush text-primary mb-4"></i>
                            <h5 class="mb-3">Aktivitas Kreatif untuk Anak</h5>
                            <p>Beragam aktivitas seperti menggambar, mewarnai, dan bermain peran untuk mengembangkan kreativitas dan motorik anak.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-book-reader text-primary mb-4"></i>
                            <h5 class="mb-3">Koleksi Cerita Interaktif</h5>
                            <p>Buku digital interaktif yang mengajak anak menjelajahi dunia cerita dengan gambar dan suara yang menarik.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/about.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Tentang Kami</h6>
                    <h1 class="mb-4">Platform Belajar Interaktif untuk Anak</h1>
                    <p class="mb-4">Kami menghadirkan platform pembelajaran digital yang interaktif dan menyenangkan untuk anak usia 24-59 bulan. Dengan metode berbasis permainan, anak-anak dapat belajar dengan cara yang menyenangkan dan sesuai dengan tahap perkembangannya.</p>
                    <p class="mb-4">Konten kami dirancang oleh para ahli pendidikan anak usia dini, menggabungkan teknologi dengan pembelajaran yang berbasis eksplorasi, kreativitas, dan interaksi. Dengan akses fleksibel, orang tua dapat mendampingi anak belajar kapan saja dan di mana saja.</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Pembelajaran Berbasis Permainan</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Konten Interaktif</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Akses Fleksibel Kapan Saja</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Didesain oleh Ahli Pendidikan Anak</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Pengawasan Orang Tua</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Lingkungan Belajar Aman</p>
                        </div>
                    </div>
                    <!--<a class="btn btn-primary py-3 px-5 mt-2" href="">Pelajari Lebih Lanjut</a>-->
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


<!-- Categories Start -->
<div class="container-xxl py-5 category">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Kategori</h6>
            <h1 class="mb-5">Kategori Pembelajaran</h1>
        </div>
        <div class="row g-3">
            <div class="col-lg-7 col-md-6">
                <div class="row g-3">
                    <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                        <div class="kategori-item position-relative d-block overflow-hidden">
                            <img class="img-fluid" src="img/cat-1.jpg" alt="">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                <h5 class="m-0">Mengenal Angka & Huruf</h5>
                                <small class="text-primary">2 Aktivitas</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                        <div class="kategori-item position-relative d-block overflow-hidden">
                            <img class="img-fluid" src="img/cat-2.jpg" alt="">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                <h5 class="m-0">Warna & Bentuk</h5>
                                <small class="text-primary">2 Aktivitas</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                        <div class="kategori-item position-relative d-block overflow-hidden">
                            <img class="img-fluid" src="img/cat-3.jpg" alt="">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                <h5 class="m-0">Cerita Anak</h5>
                                <small class="text-primary">1 Aktivitas</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                <div class="kategori-item position-relative d-block h-100 overflow-hidden">
                    <img class="img-fluid position-absolute w-100 h-100" src="img/cat-4.jpg" alt="" style="object-fit: cover;">
                    <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:  1px;">
                        <h5 class="m-0">Keterampilan Motorik</h5>
                        <small class="text-primary">1 Aktivitas</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Categories End -->

<style>
    .kategori-item {
        width: 100%;
        height: 100%;
        position: relative;
        overflow: hidden;
        cursor: default; /* Menghilangkan efek pointer */
    }

    .kategori-item img {
        width: 100%;
        height: auto;
        display: block;
        object-fit: cover;
        transition: transform 0.3s ease-in-out;
    }

    .kategori-item:hover img {
        transform: scale(1.05); /* Animasi saat disentuh */
    }
</style>


    <!-- Courses Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Pembelajaran</h6>
                <h1 class="mb-5">Pembelajaran Populer</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/course-1.jpg" alt="">
                            <!--
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Pelajari Lebih Lanjut</a>
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Mulai Belajar</a>
                            </div>
                            -->
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">2 Aktivitas</h3>
                            <!--

                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(123)</small>
                            </div>
                            -->
                            <h5 class="mb-4">Mengenal Angka & Huruf</h5>
                        </div>
                        <!--
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>Durasi Fleksibel</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>28 Anak Didik</small>
                        </div>
                        -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/course-2.jpg" alt="">
                            <!--
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Pelajari Lebih Lanjut</a>
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Mulai Belajar</a>
                            </div>
                            -->
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">2 Aktivitas</h3>
                            <!--
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(123)</small>
                            </div>
                            -->
                            <h5 class="mb-4">Warna & Bentuk</h5>
                        </div>
                        <!--
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>1 Jam</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 Anak Didik</small>
                        </div>
                        -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/course-3.jpg" alt="">
                            <!--
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Pelajari Lebih Lanjut</a>
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Mulai Belajar</a>
                            </div>
                            -->
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">1 Aktivitas</h3>
                            <!--
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(123)</small>
                            </div>
                            -->
                            <h5 class="mb-4">Keterampilan Motorik</h5>
                        </div>
                        <!--
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>Durasi Fleksibel</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>25 Anak Didik</small>
                        </div>
                        -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Tim Kami</h6>
                <h1 class="mb-5">Penyusun Materi</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-1.jpg" alt="">
                        </div>
                        <!--
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        -->
                        <div class="text-center p-4">
                            <h5 class="mb-0">Nama</h5>
                            <small>Spesialisasi</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-2.jpg" alt="">
                        </div>
                        <!--
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        -->
                        <div class="text-center p-4">
                            <h5 class="mb-0">Nama</h5>
                            <small>Spesialisasi</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-3.jpg" alt="">
                        </div>
                        <!--
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        -->
                        <div class="text-center p-4">
                            <h5 class="mb-0">Nama</h5>
                            <small>Spesialisasi</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-4.jpg" alt="">
                        </div>
                        <!--
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        -->
                        <div class="text-center p-4">
                            <h5 class="mb-0">Nama</h5>
                            <small>Spesialisasi</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Testimoni</h6>
                <h1 class="mb-5">Apa Kata Orang Tua?</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-1.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Nama Orang Tua</h5>
                    <p>Orang Tua Murid</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Platform ini sangat membantu anak saya belajar dengan cara yang menyenangkan dan interaktif. Saya sangat merekomendasikannya!</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-2.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Nama Orang Tua</h5>
                    <p>Orang Tua Murid</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Platform ini sangat membantu anak saya belajar dengan cara yang menyenangkan dan interaktif. Saya sangat merekomendasikannya!</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-3.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Nama Orang Tua</h5>
                    <p>Orang Tua Murid</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Platform ini sangat membantu anak saya belajar dengan cara yang menyenangkan dan interaktif. Saya sangat merekomendasikannya!</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-4.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Nama Orang Tua</h5>
                    <p>Orang Tua Murid</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Platform ini sangat membantu anak saya! Saya sangat merekomendasikannya!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
        

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <!--
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Tautan Cepat</h4>
                    <a class="btn btn-link" href="">Tentang Kami</a>
                    <a class="btn btn-link" href="">Hubungi Kami</a>
                    <a class="btn btn-link" href="">Kebijakan Privasi</a>
                    <a class="btn btn-link" href="">Syarat & Ketentuan</a>
                    <a class="btn btn-link" href="">FAQ & Bantuan</a>
                </div>
                -->
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-3">Kontak</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Jalan, Palangka Raya, Indonesia</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 877 7777 7777</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@contoh.com</p>
                    <!--
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Galeri</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-1.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <!--
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Dapatkan Informasi Terbaru</h4>
                    <p>Jangan lewatkan update seputar kesehatan, pembelajaran, dan perkembangan anak.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Masukkan email Anda">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Daftar</button>
                    </div>
                </div>
                -->
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Pembelajaran Interaktif Anak 24-59 Bulan</a>, Hak Cipta Dilindungi.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Template oleh <a class="border-bottom" href="https://www.free-css.com/">Free CSS</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                        <!--
                            <a href="">Beranda</a>
                            <a href="">Kebijakan Cookies</a>
                            <a href="">Bantuan</a>
                            <a href="">Tanya Jawab</a>
                        -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
    <script src="js/chatbot.js"></script>
    <script src="API/fetchGemini.js"></script>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>