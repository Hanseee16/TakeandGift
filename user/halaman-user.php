<?php
// Koneksi
require '../admin/functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Take and Gift</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../img/logo/Logo.jpg" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="#" class="logo d-flex align-items-center">
                <i class="bi bi-gift" style="font-size: 30px; padding-right: 8px; color: #012970;"></i>
                <span>TakeandGift</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="#tentang">Tentang</a></li>
                    <li><a class="nav-link scrollto" href="#kategori">Kategori</a></li>
                    <li><a class="nav-link scrollto" href="#produk">Produk</a></li>
                    <li><a class="nav-link scrollto getstarted" href="#kontak" style=" padding: 8px 25px;">Hubungi
                            Kami</a></li>
                    <!-- <li><a class="getstarted scrollto"
                            href="https://wa.me/6282124047897?text=contoh%20isi%20pesan%20dikirim%20via%20whatsapp"
                            target="_blank">Kontak</a></li> -->
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Selamat datang diwebsite Take and Gift!</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">"Temukan keindahan dalam setiap momen dengan pilihan
                        Hampers dan Buket terbaik dari kami!"
                    </h2>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="#tentang" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Tentang Kami</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="../img/background-hiro/2.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= tentang Section ======= -->
        <section id="tentang" class="about">

            <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="../img/background-hiro/3.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="content">
                            <h3>Tentang Kami</h3>
                            <h2>Take and Gift</h2>
                            <p>
                                Toko Take and Gift adalah toko yang menawarkan berbagai macam pilihan hadiah yang unik
                                dan menarik. Kami menyediakan beragam produk seperti Hampers dan Buket bunga
                                segar,
                                serta hadiah-hadiah kreatif lainnya. Kami berkomitmen untuk memberikan pengalaman
                                belanja yang menyenangkan dan memuaskan kepada pelanggan kami.
                            </p>
                            <div class="text-center text-lg-start">
                                <a href="#kategori" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                    <i class="bi bi-arrow-left" style="margin-right: 7px;"></i>
                                    <span>Lihat Kategori</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= kategori Section ======= -->
        <section id="kategori" class="values">
            <div class="container" data-aos="fade-up">
                <header class="section-header">
                    <h2>Kategori</h2>
                    <p>Beberapa kategori yang tersedia ditoko kami</p>
                </header>
                <div class="row">

                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
                        <div class="box">
                            <img src="assets/img/kategori/Chinese Gift (HD) (1).png" class="img-fluid" alt="">
                            <h3>Hampers</h3>
                        </div>
                    </div>

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="box">
                            <img src="../img/logo/Logo.jpg" class="img-fluid" alt="">
                            <!-- <img src="assets/img/kategori/Buy Now (HD).png" class="img-fluid" alt=""> -->
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
                        <div class="box">
                            <img src="assets/img/kategori/Rose Bouquet (HD).png" class="img-fluid" alt="">
                            <h3>Buket</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Layanan Section -->

        <!-- ======= totalProduk Section ======= -->
        <section id="totalProduk" class="counts">
            <div class="container" data-aos="fade-up">
                <div class="row gy-4" style="display: flex; justify-content: center; align-items: center;">
                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <img src="assets/img/total produk/received.png" width="60" class="mx-3" alt="">
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="<?= number_format($jml_produk); ?>" data-purecounter-duration="1" class="purecounter"></span>
                                <p style="color: #444444; font-size: 20px; font-weight: 500;">Total Produk</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <img src="assets/img/total produk/hamper.png" width="60" class="mx-3" alt="">
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="<?= number_format($jml_kategori_hampers); ?>" data-purecounter-duration="1" class="purecounter"></span>
                                <p style="color: #444444; font-size: 20px; font-weight: 500;">Hampers</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <img src="assets/img/total produk/flower-bouquet.png" width="60" class="mx-3" alt="">
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="<?= number_format($jml_kategori_buket); ?>" data-purecounter-duration="1" class="purecounter"></span>
                                <p style="color: #444444; font-size: 20px; font-weight: 500;">Buket</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Counts Section -->

        <!-- ======= produk Section ======= -->
        <section id="produk" class="portfolio">
            <div class="container" data-aos="fade-up">
                <header class="section-header">
                    <h2>Produk Kami</h2>
                    <p>Berikut adalah produk yang tersedia</p>
                </header>
                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active" style="font-size: 17px;">Semua</li>
                            <li data-filter=".filter-hampers" style="font-size: 17px;">Hampers</li>
                            <li data-filter=".filter-bouquet" style="font-size: 17px;">Buket</li>
                        </ul>
                    </div>
                </div>

                <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <!-- kategori produk bouquet -->
                    <?php $i = 1; ?>
                    <?php
                    $data_all = kategori_bouquet();
                    foreach ($data_all as $data_bouquet) : ?>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-bouquet">
                            <div class="portfolio-wrap">
                                <img src="../file/<?= $data_bouquet['cover']; ?>" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4 style="font-size: 22px;"><?= ucwords($data_bouquet['nama_produk']); ?></h4>
                                    <!-- <p class="mb-2" style="font-size: 18px;">Rp.
                                    <?= number_format($data_bouquet['harga']); ?></p> -->

                                    <a href="detail-produk.php?produk=<?= $data_bouquet['id_produk'] ?>" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center mb-3" style="border-radius: 5px;">
                                        <span>Detail Produk</span>
                                        <i class="bi bi-plus"></i>
                                    </a>

                                    <!-- <a href="../file/<?= $data_bouquet['cover']; ?>" class="portfokio-lightbox"
                                    data-gallery="portfolioGallery"
                                    style="padding: 10px 55px; border-radius: 5px; border: 2px solid #4154f1; color: #4154f1;">
                                    <span>Lihat Produk</span>
                                </a> -->
                                </div>
                            </div>
                        </div>

                        <?php $i++; ?>
                    <?php endforeach; ?>

                    <!-- kategori produk hampers -->
                    <?php $i = 1; ?>
                    <?php
                    $data_all = kategori_hampers();
                    foreach ($data_all as $data_hampers) : ?>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-hampers">
                            <div class="portfolio-wrap">
                                <img src="../file/<?= $data_hampers['cover']; ?>" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4 style="font-size: 22px;"><?= ucwords($data_hampers['nama_produk']); ?></h4>
                                    <!-- <p class="mb-3" style="font-size: 18px;">Rp.
                                    <?= number_format($data_hampers['harga']); ?></p> -->

                                    <a href="detail-produk.php?produk=<?= $data_hampers['id_produk'] ?>" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center mb-3" style="border-radius: 5px;">
                                        <span>Detail Produk</span>
                                        <i class="bi bi-plus"></i>
                                    </a>

                                    <!-- <a href="../file/<?= $data_hampers['cover']; ?>" class="portfokio-lightbox"
                                    data-gallery="portfolioGallery"
                                    style="padding: 10px 55px; border-radius: 5px; border: 2px solid #4154f1; color: #4154f1;">
                                    <span>Lihat Produk</span>
                                </a> -->
                                </div>
                            </div>
                        </div>

                        <?php $i++; ?>
                    <?php endforeach; ?>

                </div>
            </div>
        </section>
        <!-- End Produk Section -->

        <!-- ======= kontak Section ======= -->
        <section id="kontak" class="contact">
            <div class="container" data-aos="fade-up">
                <header class="section-header">
                    <p>Hubungi Kami</p>
                </header>
                <div class="row gy-4">
                    <div class="col-lg-6">
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-geo-alt"></i>
                                    <h3>Alamat</h3>
                                    <a href="https://maps.app.goo.gl/qJp2eeXm7F65eAS48" target="_blank">
                                        <p style="color: #444444;">Jl.Swadaya II No. 47 Kelurahan Meruyung, Kecamatan
                                            Limo Kota
                                            Depok</p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-telephone"></i>
                                    <h3>Telpon</h3>
                                    <a href="https://wa.me/6282124047897?text=contoh%20isi%20pesan%20dikirim%20via%20whatsapp" target="_blank">
                                        <p style="color: #444444;">+62 8212 4047 897</p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-envelope"></i>
                                    <h3>Email</h3>
                                    <a href="#">
                                        <p style="color: #444444;">takeandgift@gmail.com</p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-clock"></i>
                                    <h3>Jam Buka</h3>
                                    <p>Setiap Hari<br>9:00 WIB - 22:00 WIB</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <!-- <form action="forms/contact.php" method="post" class="php-email-form">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Masukkan Nama" required>
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email" placeholder="Masukkan Email" required>
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Masukkan subjek" required>
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Masukkan pesan" required></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                    <button type="submit">Kirim Pesan</button>
                                </div>
                            </div>
                        </form> -->

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.088572686025!2d106.76723937387932!3d-6.3825685624282595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ef2ab43f74e3%3A0x3b81b9425eb8064c!2sJl.%20Swadaya%20II%2C%20Meruyung%2C%20Kec.%20Limo%2C%20Kota%20Depok%2C%20Jawa%20Barat%2016515!5e0!3m2!1sid!2sid!4v1686387701458!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>
                </div>
            </div>
        </section><!-- End kontak Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="#" class="logo d-flex align-items-center ">
                            <span class="mb-2">Take and Gift</span>
                        </a>
                        <p>Take and Gift adalah toko hadiah dengan beberapa kategori seperti Hampers dan
                            Buket.</p>
                        <div class="social-links mt-3">
                            <a href="https://wa.me/6282124047897?text=contoh%20isi%20pesan%20dikirim%20via%20whatsapp" target="_blank" class="twitter">
                                <i class="bi bi-whatsapp"></i>
                            </a>
                            <a href="https://www.instagram.com/take_and_gift/" target="_blank class=" instagram">
                                <i class="bi bi-instagram"></i>
                            </a>
                            <a href="https://www.tiktok.com/@takeandgift_id?_t=8cj0oWUh2Sw&_r=1" target="_blank" class="facebook"><i class="bi bi-tiktok"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-envelope"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Tautan</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#hero">Beranda</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#tentang">Tentang Kami</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#kategori">Kategori</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#produk">Produk Kami</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#kontak">Hubungi Kami</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Kategori Produk</h4>
                        <ul>
                            <!-- <li><i class="bi bi-chevron-right"></i> <a href="#">Gift</a></li> -->
                            <li><i class="bi bi-chevron-right"></i> <a href="#produk">Hampers</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#produk">Buket</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Hubungi Kami</h4>
                        <p>
                            Jl. Swadaya II No. 47 <br>
                            Kelurahan Meruyung Kecamatan Limo<br>
                            Kota Depok <br><br>
                            <strong>Telpon:</strong> +62 8212 4047 897<br>
                            <strong>Email:</strong> takeandgift@gmail.com<br>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>TakeandGift</span></strong>. 2023
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center" style="border-radius: 50px;"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>



    <script>
        const myModal = document.getElementById('myModal')
        const myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', () => {
            myInput.focus()
        })
    </script>

</body>

</html>