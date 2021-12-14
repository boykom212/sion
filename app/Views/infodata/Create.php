<?= $this->extend('layout/template'); ?>

<?= $this->Section('test'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Tambah Data Siswa</h2>

            <form action="/Inputdatasiswa/save" method="POST">
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="Nama" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" autofocus value="<?= old('Nama'); ?>">
                        <div class=" invalid-feedback">
                            <?= $validation->getError('nama'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="Nis" class="col-sm-2 col-form-label">Nis</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('nis')) ? 'is-invalid' : ''; ?>" id="nis" name="nis" autofocus value="<?= old('nis'); ?>">
                        <div class=" invalid-feedback">
                            <?= $validation->getError('nis'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="alamat-siswa" class="col-sm-2 col-form-label">alamat siswa</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control<?= ($validation->hasError('almat_siswa')) ? 'is-invalid' : ''; ?>" id="alamat_siswa" name="alamat_siswa" autofocus value="<?= old('alamat_siswa'); ?>">
                        <div class=" invalid-feedback">
                            <?= $validation->getError('almat_siwa'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="Jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control<?= ($validation->hasError('jurusan')) ? 'is-invalid' : ''; ?>" id="jurusan" name="jurusan" autofocus value="<?= old('jurusan'); ?>">
                        <div class=" invalid-feedback">
                            <?= $validation->getError('jurusan'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="poto" class="col-sm-2 col-form-label">poto</label>
                    <div class="col-sm-10">
                        <input type="poto" class="form-control<?= ($validation->hasError('poto')) ? 'is-invalid' : ''; ?>" id="poto" name="poto" autofocus value="<?= old('poto'); ?>">
                        <div class=" invalid-feedback">
                            <?= $validation->getError('poto'); ?>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-10 offset-sm-2">

                                <div class="form-check my-3">
                                    <input class="form-check-input" type="checkbox" id="gridCheck2">
                                    <label class="form-check-label" for="gridCheck2">
                                        saya setuju dengan persaratan yang telah di tentukan nya
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>