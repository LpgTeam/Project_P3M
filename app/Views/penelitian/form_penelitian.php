<?= $this->extend('templates/index') ?>

<?= $this->section('page-content') ?>

<div class="container">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row">
        <div class="col">

            <form action="<?= base_url('/penelitian/save'); ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="mb-3 mt-3">
                    <label for="judulPenelitian" class="form-label">Judul Penelitian</label>
                    <input type="text" class="form-control" id="judul_penelitian" placeholder="Input Judul Penelitian" name="judul_penelitian" autofocus>
                </div>
                <!-- ketua peneliti-->
                <div class="mb-3 mt-3">
                    <label for="fullname" class="form-label">Ketua Tim Peneliti</label>
                    <div class="form-group row my-3">
                        <label for="fullname" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="fullname" name="fullname" value="<?= old('fullname') ?>">
                        </div>
                    </div>
                    <div class="form-group row  my-3">
                        <label for="jabatan" class="col-sm-2 col-form-label">Jabatan Fungsional</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?= old('jabatan') ?>">
                        </div>
                    </div>
                    <div class="form-group row  my-3">
                        <label for="nohp" class="col-sm-2 col-form-label">Nomor HP</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nohp" name="nohp" value="<?= old('nohp') ?>">
                        </div>
                    </div>
                    <div class="form-group row  my-3">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="email" value="<?= old('email') ?>">
                        </div>
                    </div>
                    <!-- <div class="form-group row  my-3">
                        <label for="sampul" class="col-sm-2 col-form-label">Gambar</label>
                        <div class="col-sm-2">
                            <img src="/img/default.jpg" class="img-thumbnail img-preview">
                        </div>
                        <div class="col-sm-8">
                            <input class="form-control" type="file" id="sampul" name="sampul" onchange="previewImg()">
                            <label hidden class="custom-file-label" for="Sampul"></label>
                        </div>
                    </div> -->
                </div>
                <!-- end of ketua peneliti-->
                <div class="mb-3 mt-3">
                    <label for="bidang" class="form-label">Bidang</label>
                    <input type="text" class="form-control" id="bidang" placeholder="Input Bidang Penelitian" name="bidang">
                </div>
                <div class="mb-3 mt-3">
                    <label for="jumlah_Anggota" class="form-label">Jumlah Anggota</label>
                    <input type="text" class="form-control" id="jumlah_Anggota" placeholder="Input Jumlah Anggota" name="jumlah_Anggota">
                </div>
                <div class="custom-file my-3">
                    <input type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Upload Bukti Luaran</label>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>


        </div>
    </div>
</div>

<?= $this->endsection() ?>