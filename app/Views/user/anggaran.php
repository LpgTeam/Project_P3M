<?= $this->extend('templates/index') ?>

<?= $this->section('page-content') ?>
<div class="container-fluid alert-info m-1 p-2">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="container">
        <div class="row">
            <div class="col">
                Ini laman anggaran
            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>