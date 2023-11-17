<div class="">

    <!-- STARTHERO -->
    <div class="container mx-5 my-lg-5">
        <div class="HERO row my-5">
            <!-- img -->
            <div class="col-md-6 d-flex justify-content-center  order-md-2 order-lg-last">
                <img class="img w-100" src="<?= BASEURL; ?>/public/img/illustrations/Hero 1.svg" alt=""
                    class="justify-content-center" />
            </div>
            <!-- ENd img -->
            <!-- text section -->
            <div class="col-md-6 d-flex align-items-center authentication-inner">
                <div>
                    <p class="mt-5 fs-1 fw-bold">
                        <span class=" text-black">Raih</span> <span class="text-primary">karir</span> <span
                            class=" text-black">impian</span> <span class=" text-black">untuk masa depan</span>
                        <span class=" text-black">bersama</span> <span class="text-primary">DigiSkill</span>
                    </p>
                    <p class="fs-5">
                        Dapatkan pekerjaan impianmu untuk masa <br> depanmu, bersama kami anda
                        akan mendapatkan pelatihan secara gratis dan terbaik.
                    </p>
                    <?php if (isset($_SESSION['id_profile'])) { ?>
                        <a href="#kelas" class="btn btn-primary">Belajar Sekarang
                        </a>
                    <?php } else { ?>
                        <a href="<?= BASEURL; ?>/auth/" class="btn btn-primary">Belajar Sekarang</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <!-- END HERO -->

    <!-- START VALUE 1 -->
    <div class="container rounded-2 mb-5  py-5"">  
    <!-- <p class=" text-center text-white fs-1 fw-bold lh-1 mb">
        Dapatkan Skill Baru <br> Bersama <span class=""> DigiSkill</span>
        </p> -->
        <p class="text-center text-black fs-1 fw-bold lh-sm mb-3">
            Dapatkan Skill Baru <br> Bersama <span class=""> DigiSkill</span>
        </p>
        <br>
        <div class="row content-value   mt-3 rounded">
            <div class="col-md-4 ">
                <div class="d-flex gap-3">
                    <img src="<?= BASEURL; ?>/public/img/icons/unicons/online-meeting (1).png"
                        class="img mb-4 p-3 bg-primary rounded" alt="" />
                    <div class="d-flex flex-column g-0 justify-content-start ">
                        <p class="fw-bold fs-5 text-black">4 Ribu Peserta</p>
                        <p class="lh-sm fs-6 mt-0 text-black">
                            Banyak Peserta Tergabung
                            Bersama DigiSkill
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="d-flex gap-3">
                    <img src="<?= BASEURL; ?>/public/img/icons/unicons/online-test 1.svg"
                        class="img mb-4 p-3 bg-primary rounded" alt="" />
                    <div class="d-flex flex-column g-0 justify-content-start ">
                        <p class="fw-bold fs-5 text-black">25+ Mentor Berpengalaman</p>
                        <p class="lh-sm fs-6 mt-0 text-black">
                            Puluhan mentor siap membantu anda mengembangkan keahlianmu
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="d-flex gap-3">
                    <img src="<?= BASEURL; ?>/public/img/icons/unicons/paypal.png"
                        class="img mb-4 p-3 bg-primary rounded" alt="" />
                    <div class="d-flex flex-column g-0 justify-content-start ">
                        <p class="fw-bold fs-5 text-black">Banyak Pilihan Kelas</p>
                        <p class="lh-sm fs-6 mt-0 text-black">
                            Tersedia banyak Video Kelas Pilihan
                            Terbaik Untuk Anda
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END VALUE 1 -->

    <!-- START VALUE 2 -->
    <div class="container-fluid bg-label-primary text-black">
        <div class="container py-5">
            <div class="HERO row my-5">
                <!-- img -->
                <div class="col-md-6 d-flex justify-content-start  authentication-inner">
                    <img class="img w-100" src="<?= BASEURL; ?>/public/img/illustrations/Hero 3.svg" alt=""
                        class="justify-content-center" />
                </div>
                <!-- ENd img -->
                <!-- text section -->
                <div class="col-md-6 d-flex align-items-center authentication-inner">
                    <div>
                        <p class="mt-5 fs-1 fw-bold">
                            <span class=" text-black">Mengapa Harus</span> <span class="text-primary">DigiSkill?</span>
                        </p>
                        <p class="fs-5 text-black">
                            DigiSkill merupakan program persiapan kerja terbaik yang mendampingi peserta dari awal
                            dengan banyak pilihan materi
                        </p>
                        <div class="row text-black">
                            <div class="col-md-6 gap-5">
                                <div class="d-flex gap-2 align-items-start">
                                    <i class='bx bx-check-square bx-md'></i>
                                    <p class="fs-5">Pembelajaran Gratis, Tanpa Dipunggut Biaya</p>
                                </div>
                                <div class="d-flex gap-2 align-items-start">
                                    <i class='bx bx-check-square bx-md'></i>
                                    <p class="fs-5">Tersedia Banyak Materi Yang Tersetruktur</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex gap-2 align-items-start">
                                    <i class='bx bx-check-square bx-md'></i>
                                    <p class="fs-5">Mentor Yang Berpengalaman </p>
                                </div>
                                <div class="d-flex gap-2 align-items-start">
                                    <i class='bx bx-check-square bx-md'></i>
                                    <p class="fs-5">Materi Yang Uptudate Selalu</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END VALUE 2 -->

    <!-- Start Card Produk -->
    <div class="container mx-4 mt-5" id="kelas">
        <div class="row text-center mx-4 mx-md-5 text-center">
            <p class="fw-bold fs-1">Program Kelas Terbaik <span class="text-primary"> DigiSkill?</span></p>
            <p class="fs-5">
                DigiSKill menyediakan kelas pilihan terbaik untuk meningkakan keahlian
                anda
            </p>
        </div>

        <div class="row mt-5 justify-content-center">
            <?php foreach ($data['terbaik'] as $jml): ?>
                <?php
                $currentClassId = $jml['id_kelas']; // Store the value in a variable
                ?>
                <div class="col-lg-4 col-md-6 mb-4 rounded ">
                    <div class="card p-3 ">
                        <div class="img-box">
                            <img src="<?= BASEURL; ?>/public/img/assets/kelas/<?= $jml['thumbnail']; ?>" alt=""
                                class="img-fluid figure-img rounded h-25 w" />
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <p class="badge bg-label-primary fw-semibold">
                                <?= $jml['nama_kategori']; ?>
                            </p>
                        </div>
                        <div class="product-caption ">
                            <p class="product-name fs-6 fw-bold ">
                                <?= $jml['nama_kelas']; ?>
                            </p>
                            <div class="dropdown-divider">
                            </div>
                            <div class="pt-2">
                                <ul class="bx-ul d-flex justify-content-between">
                                    <li><i class='bx bx-video'></i>
                                        <?= $jml['total_materi']; ?> Video
                                    </li>
                                    <li><i class='bx bx-book'></i>
                                        <?= $jml['total_materi']; ?> Materi
                                    </li>
                                    <li><i class='bx bx-user'></i>
                                        <?= $jml['total_data_user']; ?> User
                                    </li>
                                </ul>
                            </div>
                            <div class="d-grid ">

                                <?php
                                if (isset($_SESSION['id_profile'])) {
                                    $telahDaftar = false;
                                    foreach ($data['user_daftar'] as $usr) {
                                        if ($usr['id_kelas'] === $currentClassId) {
                                            $telahDaftar = true;
                                            break;
                                        }
                                    }
                                }
                                if (isset($_SESSION['id_profile']) && !$telahDaftar) { ?>
                                    <a href="<?= BASEURL; ?>/pendaftaran/tambah/<?= $jml['id_kelas'] ?>"
                                        class="btn btn-primary btn-sm mt-1 btn-lg mb-2 px-3 py-2 K_ModalMasukKelas"
                                        data-bs-toggle="modal" data-bs-target="#MasukKelas"
                                        data-id="<?= $jml['id_kelas'] ?>">Masuk
                                        Kelas
                                    </a>
                                <?php } elseif (isset($_SESSION['id_profile'])) { ?>
                                    <a href="<?= BASEURL ?>/materi/<?= $jml['id_kelas'] ?>"
                                        class="btn btn-primary btn-sm mt-1 btn-lg px-3 py-2">Lihat Kelas</a>
                                <?php } else { ?>
                                    <a href="<?= BASEURL; ?>/auth/"
                                        class="btn btn-primary btn-sm mt-1 btn-lg mb-2 px-3 py-2">Masuk
                                        Kelas</a>
                                <?php } ?>
                                <a href="<?= BASEURL; ?>/kelas/detail/<?= $jml['id_kelas'] ?>"
                                    class="btn  btn-outline-primary btn-sm mt-1 btn-lg px-3 py-2">Detail Kelas</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- End Card Produk -->

    <!-- Start Testimoni -->
    <div class="container-fluid container-review vp-1 my-5 mb-4 mb-md-5 py-md-5">

        <div class="container container-value">
            <div class="row">
                <div class="col">
                    <p class="text-center mt-5 fs-1 fw-bold">
                        Apa Kata Mereka Tentang <br> Kelas di <span class="text-primary">DigiSkill</span> ?
                    </p>
                </div>
            </div>
            <div class="row mt-4">
                <!-- Bootstrap carousel -->
                <!-- Bootstrap crossfade carousel -->
                <div class="col-md">
                    <div id="carouselTes" class="carousel carousel-dark slide carousel-fade" data-bs-ride="carousel">
                        <!-- <ol class="carousel-indicators">
                                <li data-bs-target="#carouselTes" data-bs-slide-to="0" class="active"></li>
                                <li data-bs-target="#carouselTes" data-bs-slide-to="1"></li>
                                <li data-bs-target="#carouselTes" data-bs-slide-to="2"></li>
                            </ol> -->
                        <div class="carousel-inner">
                            <?php
                            foreach ($data['review'] as $rvw): ?>
                                <div class="carousel-item <?= ($rvw['id_penilaian'] === 3) ? 'active' : '' ?>">
                                    <div class="d-block w-100 text-center">
                                        <div class="mb-5 ">
                                            <i class='bx bxs-quote-right bx-lg mb-2 text-primary'></i>
                                            <p class="lead font-italic px-4 mx-md-5">
                                                <?= $rvw['komentar_user']; ?>
                                            </p>
                                            <div class="my-3">
                                                <!-- lupa img -->
                                                <img src="<?= BASEURL; ?>/public/img/profile/1.png"
                                                    class="rounded-circle img-fluid shadow-1-strong" alt="smaple image"
                                                    width="100" height="100" />
                                            </div>
                                            <p class="text-primary fs-5 fw-bold">
                                                <?= $rvw['nama_user']; ?>
                                            </p>
                                            <p class="text-secondary mt-n3 fs-5 fw-light">
                                                <?= $rvw['asal_instansi']; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="">
                            <a class="carousel-control-prev ps-lg-5 pt-5" href="#carouselTes" role="button"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </a>
                            <a class="carousel-control-next ps-lg-5 pt-5" href="#carouselTes" role="button"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimoni -->

    <!-- START CTA -->
    <div class="container-fluid  py-5">
        <div class="container mt-lg-5  ">
            <div class="HERO row mt-5">
                <!-- img -->
                <div class="col-md-6 d-flex justify-content-center  order-md-2 order-lg-last">
                    <img class="img w-100" src="<?= BASEURL; ?>/public/img/illustrations/Hero 1.svg" alt=""
                        class="justify-content-center" />
                </div>
                <!-- ENd img -->

                <!-- text section -->
                <div class="col-md-6 d-flex align-items-center authentication-inner">
                    <div>
                        <p class="mt-5 fs-1 fw-bold">
                            <span class=" text-black">Bersiap </span> <span class="text-primary">Belajar</span> <span
                                class=" text-black"> </span> <span class=" text-black">untuk masa depan</span>
                            <span class=" text-black">bersama</span> <span class="text-primary">DigiSkill</span>

                        </p>
                        <p class="fs-5 text-black">
                            Dapatkan pekerjaan impianmu untuk masa <br> depanmu, bersama kami anda
                            akan mendapatkan pelatihan secara gratis dan terbaik.
                        </p>
                        <?php if (isset($_SESSION['id_profile'])) { ?>
                            <a href="#kelas" class="btn btn-primary">Belajar Sekarang
                            </a>
                        <?php } else { ?>
                            <a href="<?= BASEURL; ?>/auth/" class="btn btn-primary">Belajar Sekarang</a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <!-- END CTA -->

    <div class="modal fade" id="MasukKelas" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="judulModal">Masuk Kelas</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASEURL; ?>/pendaftaran/tambah" method="post">
                        <input type="hidden" class="form-control" id="id_kelas" name="id_kelas">
                        <input type="hidden" class="form-control" id="id_profile" name="id_profile"
                            value="<?= $data['login']['id_profile'] ?>">
                        <div class="mb-3">
                            <label for="nama_user" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama_user" name="nama_user"
                                value="<?= $data['login']['nama_user'] ?>" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="nama_kelas" class="form-label">Kelas Yang dipilih</label>
                            <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" readonly>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Masuk Kelas</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>