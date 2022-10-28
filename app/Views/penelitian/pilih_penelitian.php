<?= $this->extend('templates/index') ?>

<?= $this->section('page-content') ?>

<div class="container">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row">
        <div class="col">

            <div class="row">

                <div class="col-sm-2">
                    <div class="card text-white bg-dark mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Penelitian Mandiri</h5>
                            <p class="card-text">Deskripsi</p>
                            <a href="<?= base_url('add-penelitian'); ?>" class="btn btn-primary">Ajukan Penlitian</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="card text-white bg-dark mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Penelitian Semi Mandiri</h5>
                            <p class="card-text">Deskripsi</p>
                            <a href="<?= base_url('add-penelitian'); ?>" class="btn btn-primary">Ajukan Penlitian</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="card text-white bg-dark mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Penelitian Institusi</h5>
                            <p class="card-text">Deskripsi</p>
                            <a href="<?= base_url('add-penelitian'); ?>" class="btn btn-primary">Ajukan Penlitian</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="card text-white bg-dark mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Penelitian Didanai Institusi</h5>
                            <p class="card-text">Deskripsi</p>
                            <a href="<?= base_url('add-penelitian'); ?>" class="btn btn-primary">Ajukan Penlitian</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="card text-white bg-dark mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Penelitian Kerjasama</h5>
                            <p class="card-text">Deskripsi</p>
                            <a href="<?= base_url('add-penelitian'); ?>" class="btn btn-primary">Ajukan Penlitian</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?= $this->endsection() ?>