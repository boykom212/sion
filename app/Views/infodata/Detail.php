<?= $this->extend('layout/template'); ?>

<?= $this->Section('test'); ?>


<div class="container">
    <div class="row">
        <div class="col">
            <h2> Detail Siswa</h2>
            <div class="card bg-light mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/img/<?= $datasiswa['poto']; ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body-success ">
                            <h5 class="card-title mx-3"> Data Siswa</h5>
                            <p class="card-text mx-3"><b>Nama : </b> <?= $datasiswa['Nama']; ?></p>
                            <p class="card-text mx-3"><b>Nis : </b> <?= $datasiswa['Nis']; ?></p>

                            <p class="card-text mx-3"><small class="text-muted"> guru </small>Detail lengkap</p>
                            <a href="" class="btn btn-primary mx-1">Edit</a>
                            <a href="" class="btn btn-warning mx-1">Hapus</a>
                            <br><br>
                            <a href="/datasiswa">Kembalai Ke Data Siswa</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>