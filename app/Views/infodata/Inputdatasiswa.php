<?= $this->extend('layout/template'); ?>

<?= $this->section('test'); ?>


<div class="container">
    <div class="row">
        <div class="col">
            <a href="/Inputdatasiswa/create" class="btn btn-primary mt-3">Form Tambah Data</a>
            <h2 class="mt-2">Input Data Siswa</h2>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <table class="table table-light ">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">nama</th>
                        <th scope="col">Nis</th>
                        <th scope="col">Alamat_siswa</th>
                        <th scope="col">jurusan</th>
                        <th scope="col">poto</th>
                        <th scope="col">detail</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($data_siswa as $d) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $d['Nama']; ?></td>
                            <td><?= $d['Nis']; ?></td>
                            <td><?= $d['Alamat_siswa']; ?></td>
                            <td><?= $d['Jurusan']; ?></td>
                            <td><img src="/img/<?= $d['poto']; ?>" width="50px" alt=""></td>
                            <td>
                                <a href="<?= base_url(); ?>/datasiswa/<?= $d['id']; ?>" class="btn btn-success">Detail</a>
                            </td>
                        <?php endforeach; ?>
                        </tr>
                </tbody>

        </div>
    </div>
</div>

<?= $this->endsection(); ?>