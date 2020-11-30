<?= $this->extend('template/front/home') ?>
<?= $this->section('content') ?>
<div style="margin: 0; background-image: url(<?= base_url()?>/assets/front/images/hero-bg.jpg);background-repeat:no-repeat;background-size:cover;"
    class="shop login">
    <div class="container">
        <div class="row">
            <div style="color:#fff; background:lightgrey;opacity:0.9;" class="mx-auto col-sm-5 col-12">
                <div class="m-5 login-form">
                    <h2 class="text-center mb-4">Register</h2>

                    <form class="form" method="post" action="<?= base_url('authregister') ?>">
                        <?php if (session()->getFlashdata('info') != null) : ?>
                        <center>
                            <div class="alert alert-danger" role="alert"><?= session()->getFlashdata('info') ?></div>
                        </center>
                        <?php endif?>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label style="color : #000"><b>Nama</b></label>
                                    <input type="text" name="pelanggan" required="required">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label style="color : #000"><b>Alamat</b></label>
                                    <input type="text" name="alamat" required="required">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label style="color : #000">
                                        <b?>Telepon</b>
                                    </label>
                                    <input type="number" name="telp" required="required">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label style="color : #000"><b>Email</b></label>
                                    <input type="email" name="email" required="required">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label style="color : #000"><b>Password</b></label>
                                    <input type="password" name="password" required="required">
                                </div>
                            </div>
                            <div class="col-12 mx-auto">
                                <input style="background : #ffc107" class="btn btn-warning btn-block" type="submit"
                                    name="register" value="Submit">
                            </div>
                            <div class="col-12 mx-auto">
                                <a style="background : red" class="btn btn-warning btn-block text-center"
                                    href="<?= base_url('login')?>">Login</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>