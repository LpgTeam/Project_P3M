<?= $this->extend('auth/templates/index'); ?>

<?= $this->section('content'); ?>

<link href="<?= base_url(); ?>/css/style2.css" rel="stylesheet">

<div class="container">
    <!-- Outer Row -->
    <div class="row">

        <div class="col">

            <?= view('Myth\Auth\Views\_message_block') ?>


            <div class="text-center text-white">
                <img src="/img/LogoStis.png" alt="Logo STIS" class="img-login">
                <h2><b>Pengelolaan Penelitian dan Pengabidan Kepada Masyrakat</b></h2>
                <h3>Politeknik Statistika STIS</h3>
            </div>

            <div class="container" data-toggle="modal" data-target="#exampleModal">

                <div class="card">
                    <div class="box">
                        <div class="content">
                            <h2>1</h2>
                            <h3>Dosen</h3>
                            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam velit? Iure nemo labore inventore?</p> -->
                            <a href="#">Login</a>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <div class="content">
                            <h2>2</h2>
                            <h3>Administrator</h3>
                            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam velit? Iure nemo labore inventore?</p> -->
                            <a href="#">Login</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button> -->


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?= lang('Auth.loginTitle') ?> </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form class="user" action="<?= url_to('login') ?>" method="post">
                        <?= csrf_field() ?>

                        <div class="text-center">
                            <img src="/img/LogoStis.png" alt="Logo STIS" class="img-modal">
                            <h1><b>Masuk</b></h1>
                            <h6>Gunakan email stis untuk masuk</h6>
                        </div>


                        <?php if ($config->validFields === ['email']) : ?>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.email') ?>">

                                <div class="invalid-feedback">
                                    <?= session('errors.login') ?>
                                </div>
                            </div>

                        <?php else : ?>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>">
                                <div class="invalid-feedback">
                                    <?= session('errors.login') ?>
                                </div>
                            </div>

                        <?php endif; ?>


                        <div class="form-group">
                            <input type="password" class="form-control form-control-user <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" name="password" placeholder="<?= lang('Auth.password') ?>">
                            <div class="invalid-feedback">
                                <?= session('errors.password') ?>
                            </div>

                        </div>


                        <?php if ($config->allowRemembering) : ?>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
                                    <?= lang('Auth.rememberMe') ?>
                                </label>
                            </div>
                        <?php endif; ?>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary"><?= lang('Auth.loginAction') ?></button>

                        </div>
                        <div class="text-center">
                            <?php if ($config->allowRegistration) : ?>
                                <p><a class="small" href="<?= url_to('register') ?>"><?= lang('Auth.needAnAccount') ?></a></p>
                            <?php endif; ?>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>



    <?= $this->endSection(); ?>


    <script>
        animate("#container-judul", "slideInDown");
        animate("#container-dosen", "flipInY");
        animate("#container-mhs", "flipInY");
    </script>