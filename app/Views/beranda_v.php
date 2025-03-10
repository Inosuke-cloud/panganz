<section class="mt-5 overflow-hidden">
    <div class="landing-page">

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-lg-6 text-white">
                        <h1 class="mt-5">Pangan Era Baru</h1>
                        <p class="lead text-justify">Pangan dan produk pangan mempunyai sumbangan cukup besar pada perekonomian nasional, berpengaruh terhadap inflasi. Industri pangan dan minuman menjadi penyumbang ke 2 terbesar Pendapatan Domestik Bruto non migas
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <img src="<?= base_url('src/img/hero.svg') ?>" alt="" class="img-fluid">
                    </div>
                </div>


            </div>
        </div>

        <section class="benefit-landing text-white">
            <div class="kotak-ijo bg-hijau" style="padding-bottom:10vh;padding-top:10vh;margin-top: 10em;margin-bottom: 4em;">
                <div class="container">
                    <div class="row ">
                        <div class="mr-auto col-lg-3">
                            <div class="icon-kiri text-center">
                                <i class="fas fa-desktop mb-3" style="font-size:3rem"></i>
                                <h4 class="heading">Informasi dapat diandalkan</h4>
                                <p class="mt-4 badan">Indonesia mempunyai potensi besar menghasilkan tepung singkong, jagung dan pati sagu</p>
                            </div>
                        </div>
                        <div class="garis-landing" style="height:270px;border-left:1px solid white;"></div>

                        <div class="col-lg-3 mx-auto">
                            <div class="icon-kiri text-center">
                                <i class="fas fa-comment-dots mb-3" style="font-size:3rem"></i>
                                <h4 class="heading">Berita yang persuasif</h4>
                                <p class="mt-4 badan">Mengajak semua stakeholder untuk mulai mewujudkan gerakan melokalkan bahan baku lokal</p>
                            </div>
                        </div>
                        <div class="garis-landing" style="height:270px;border-left:1px solid white;"></div>
                        <div class="col-lg-3 ml-auto">
                            <div class="icon-kiri text-center">
                                <i class="fas fa-clock mb-3" style="font-size:3rem"></i>
                                <h4 class="heading">Menuju perubahan</h4>
                                <p class="mt-4 badan">Industri pangan dan produk pangan saat ini masih banyak menggunakan bahan baku impor</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="heading h1 mt-5 text-center font-weight-bold"><strong>Ikuti acara ini yuk!</strong></h1>
                        <div class="d-flex justify-content-center">
                            <img src="<?= base_url('src/img/arrow.svg') ?>" class="my-3">
                        </div>
                        <h5 class="heading text-center">geser untuk melihat lebih <a href="<?= base_url('/acara') ?>" class="text-dark"><u>banyak acara</u></a></h5>
                        <section class="max-vh-100">
                            <div class="items">
                                <?php $nomor = 1 ?>
                                <?php foreach ($dataAcara as $d) : ?>
                                    <div class="item mx-4">
                                        <div class="shadow card border-0" style="width: 23rem;">
                                            <div class="card-judul" style="position:relative">
                                                <a href="<?= base_url('Acara/detail/' . $d->id) ?>">
                                                    <img class="card-img-top" src="<?= base_url('src/img/acara' . $nomor . '.svg') ?>" alt="Card image cap">
                                                    <h1 class="h1 heading text-white card-judul-gambar"><strong><?= $d->acara ?></strong></h1>
                                                </a>
                                            </div>
                                            <div class="card-body">
                                                <h3 class="text-center heading mt-n2" style="font-size: 1.5rem"><strong><?= $d->judul ?></strong></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <?php $nomor++;
                                    if ($nomor == 7) $nomor = 1 ?>
                                <?php endforeach ?>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>

        <section class="artikel-landing">
            <div class="container">
                <h2 class="text-center heading font-weight-bold">
                    Baca juga artikel kami!
                </h2>

                <div class="card-artikel-landing mt-5 text-center">
                    <div class="row ">
                        <div class="col-lg-4">
                            <div class="card mb-5 border-0 shadow" style="width: 20rem;">
                                <img class="card-img-top mx-auto" src="<?= base_url('/src/img/beranda/ilustrasi2.png') ?>" alt="Card image cap" style="width:80%;margin-top: 20px;">
                                <div class="card-body">
                                    <h5 class="card-title heading">Artikel Trending</h5>
                                    <p class="card-text badan">Kepala Badan Ketahanan Pangan (BKP) Kementerian Pertanian, Agung Hendriadi pada seminar dan workshop Internasional Plant Industry mengajak semua pihak melokalkan bahan baku industri FPF di Universitas Jember, Kamis (1/11)</p>
                                    <a href="<?= base_url('artikel') ?>" class="btn btn-hijau rounded-pill">Baca selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card mx-auto border-0 shadow" style="width: 20rem;">
                                <img class="card-img-top mx-auto" src="<?= base_url('/src/img/beranda/ilustrasi3.png') ?>" alt="Card image cap" style="width:65%;margin-top: 13px;">
                                <div class="card-body">
                                    <h5 class="card-title heading">Artikel Terkini</h5>
                                    <p class="card-text badan">Agung menantang civitas academica Universitas Jember bisa mendapatkan inovasi dan teknologi budidaya singkong yang mempunyai provitas 80 ton/ha</p>
                                    <a href="<?= base_url('artikel') ?>" class="btn btn-hijau rounded-pill">Baca selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card ml-auto border-0 shadow" style="width: 20rem;">
                                <img class="card-img-top mx-auto" src="<?= base_url('/src/img/beranda/ilustrasi4.png') ?>" alt="Card image cap" style="width:75%;margin-top: 15px;">
                                <div class="card-body">
                                    <h5 class="card-title heading">Artikel Lawas</h5>
                                    <p class="card-text badan">Tahun 2018 impor gandum dan terigu diperkirakan lebih dari 11 juta ton atau meningkat rata-rata 12,2%/tahun</p>
                                    <a href="<?= base_url('artikel') ?>" class="btn btn-hijau rounded-pill">Baca selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>
    <!-- <div class="min-vh-100">
        <div class="row">
            <div class="col mt-5">
                <div class="jumbotron">
                    <h2 class="h1 text-white text-center heading font-weigt-bold">Kenalan dengan kami</h2>
                    <div id="carouselExampleControls" class="carousel slide mb-5" data-ride="carousel">
                        <div class="carousel-inner bg-hijau">
                            <div class="carousel-item active">
                                <div class="container">
                                    <div class="row mt-5">
                                        <div class="col-lg-3 col-sm-12 text-center">
                                            <img src="<?= base_url('src/img/anggota/ino.svg') ?>" class="w-50">
                                            <h5 class="mt-4 text-white heading font-weight-bold">Rizky Aquino</h5>
                                            <h6 class="mt-2 text-white heading">Project Leader</h6>
                                        </div>
                                        <div class="col-lg-3 col-sm-12 text-center">
                                            <img src="<?= base_url('src/img/anggota/daffa.svg') ?>" class="w-50">
                                            <h5 class=" mt-4 text-white heading font-weight-bold">Daffa Zaky</h5>
                                            <h6 class="mt-2 text-white heading">Finalis Olivia</h6>
                                        </div>
                                        <div class="col-lg-3 col-sm-12 text-center">
                                            <img src="<?= base_url('src/img/anggota/latif.svg') ?>" class="w-50">
                                            <h5 class=" mt-4 text-white heading font-weight-bold">Abdul Latif</h5>
                                            <h6 class="mt-2 text-white heading">Backend Developer</h6>
                                        </div>
                                        <div class="col-lg-3 col-sm-12 text-center">
                                            <img src="<?= base_url('src/img/anggota/yaumil.svg') ?>" class="w-50">
                                            <h5 class=" mt-4 text-white heading font-weight-bold">Yaumil Luqyana</h5>
                                            <h6 class="mt-2 text-white heading">Dokumenter</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item bg-hijau">
                                <div class="container">
                                    <div class="row mt-5 bg-hijau">
                                        <div class="col-lg-3 col-sm-12 text-center">
                                            <img src="<?= base_url('src/img/anggota/yaumil.svg') ?>" class="w-50">
                                            <h5 class=" mt-4 text-white heading font-weight-bold">Yaumil Luqyana</h5>
                                            <h6 class="mt-2 text-white heading">Dokumenter</h6>
                                        </div>
                                        <div class="col-lg-3 col-sm-12 text-center">
                                            <img src="<?= base_url('src/img/anggota/latif.svg') ?>" class="w-50">
                                            <h5 class=" mt-4 text-white heading font-weight-bold">Abdul Latif</h5>
                                            <h6 class="mt-2 text-white heading">Backend Developer</h6>
                                        </div>
                                        <div class="col-lg-3 col-sm-12 text-center">
                                            <img src="<?= base_url('src/img/anggota/daffa.svg') ?>" class="w-50">
                                            <h5 class=" mt-4 text-white heading font-weight-bold">Daffa Zaky</h5>
                                            <h6 class="mt-2 text-white heading">Finalis Olivia</h6>
                                        </div>
                                        <div class="col-lg-3 col-sm-12 text-center">
                                            <img src="<?= base_url('src/img/anggota/ino.svg') ?>" class="w-50">
                                            <h5 class=" mt-4 text-white heading font-weight-bold">Rizky Aquino</h5>
                                            <h6 class="mt-2 text-white heading">Project Leader</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</section>