<section id="acara_detail" class="mt-5 mb-5">
    <div class="min-vh-100">
        <div class="container">
            <nav aria-label="breadcrumb" style="padding-top: 4em;">
                <ol class="breadcrumb bg-white heading">
                    <li class="breadcrumb-item"><a href="<?= base_url('/') ?>" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url('/acara') ?>" class="text-dark">Acara</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?= $dataAcara->acara ?></li>
                </ol>
            </nav>
            <div class="row pt-3">
                <?php $dataAcara->id < 6  ? $nomor = $dataAcara->id : $nomor = 1 ?>
                <div class="col-lg-6 col-sm-12">
                    <img src="<?= base_url('src/img/detail_acara/acara' . $nomor . '.svg') ?>" class="img-fluid position-relative">
                    <h1 class="position-absolute text-white font-weight-bold heading" style="top: 38%;left:96px;font-size: 4.8rem"><?= $dataAcara->acara ?></h1>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="mt-lg-0 mt-xs-5">
                        <div class="<?php echo $dataAcara->harga == 'GRATIS' ? 'price' :  'priceM' ?> d-inline-block text-center text-white font-weight-bold py-1 px-5"><?= $dataAcara->harga ?></div>
                    </div>
                    <h1 class="heading font-weight-bold mt-3" style="color: #2D874F"><?= $dataAcara->acara ?></h1>
                    <h3 class="badan my-4"><strong>Tiket untuk: </strong>1 orang</h3>
                    <p class="badan h4"><?= $dataAcara->konten ?></p>
                    <button class="h4 bg-hijau border-0 text-white font-weight-bold rounded-pill py-2 px-5 mt-5" onclick="window.location.href='<?= base_url('form') ?>'">Daftar Sekarang</button>
                </div>
            </div>
        </div>
    </div>

</section>