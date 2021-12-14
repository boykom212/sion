<?= $this->extend('layout/template'); ?>

<?= $this->section('test'); ?>


<div class="container">
    <div class="row">
        <div class="col">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">nama</th>
                        <th scope="col">Nis</th>
                        <th scope="col">jurusan</th>
                        <th scope="col">poto</th>
                        <th scope="col">detail</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Ruangkelas</td>
                        <td>X</td>
                        <td>a</td>
                        <td>b</td>
                        <td><button type="button" class="btn btn-success">Detail</button></td>
                    </tr>
        </div>
    </div>
</div>

<?= $this->endsection(); ?>