<?= $this->extend('templates/index') ?>

<?= $this->section('page-content') ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="my-3">Form Ubah Data Profil Diri</h2>
            <form action="/user/update/<?= $user['username']; ?>" method="post" class="col-8" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="form-group row my-3">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : '' ?>" id="username" name="username" value="<?= $user['username']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row my-3">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : '' ?>" id="email" name="email" value="<?= $user['email']; ?>" autofocus>
                    </div>
                </div>
                <div class="form-group row  my-3">
                    <label for="fullname" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="fullname" name="fullname" value="<?= $user['fullname']; ?>">
                    </div>
                </div>
                <div class="form-group row  my-3">
                    <label for="address" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="address" name="address" value="<?= $user['address']; ?>">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </form>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>