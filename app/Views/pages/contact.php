<?= $this->extend('templates/index') ?>

<?= $this->section('page-content') ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Contact Us</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Kontak</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Kategori</td>
                        <td><?= $kategori; ?></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><?= $alamat; ?></td>
                    </tr>
                    <tr>
                        <td>No. Telp</td>
                        <td><?= $notelp; ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?= $email; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>