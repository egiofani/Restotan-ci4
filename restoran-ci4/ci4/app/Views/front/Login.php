<?= $this->extend('template/front/home') ?>
<?= $this->section('content') ?>

<div class="body mt-5">
		<div class="veen">
			<div class="login-btn splits">
				<p>Already an user?</p>
				<button class="active">Login</button>
			</div>
			<div class="rgstr-btn splits">
				<p>Don't have an account?</p>
				<button>Register</button>
			</div>
			<div class="wrapper">

        <!-- LOGIN -->
        <form class="form" method="post" action="<?= base_url('/authlogin') ?>" id="login" tabindex="500">
        <?php if (session()->getFlashdata('message') != null) : ?>
                        <center>
                            <div class="alert alert-success" role="alert"><?= session()->getFlashdata('message') ?>
                            </div>
                        </center>
                        <?php endif?>
                        <?php if (session()->getFlashdata('error') != null) : ?>
                        <center>
                            <div class="alert alert-danger" role="alert"><?= session()->getFlashdata('error') ?></div>
                        </center>
                        <?php endif?>
					<h3>Login</h3>
					<div class="mail">
						<input type="email" name="email" required="required">
						<label>Email</label>
					</div>
					<div class="passwd">
						<input type="password" name="password" required="required">
						<label>Password</label>
					</div>
					<div class="submit">
						<button class="dark" type="submit" name="login">Login</button>
					</div>
        </form>

        <!-- Register -->
        <form id="register" tabindex="502"  class="form" method="post" action="<?= base_url('authregister') ?>">
        <?php if (session()->getFlashdata('info') != null) : ?>
                        <center>
                            <div class="alert alert-danger" role="alert"><?= session()->getFlashdata('info') ?></div>
                        </center>
                        <?php endif?>
					<h3>Register</h3>
					<div class="name">
						<input type="text"  name="pelanggan" required="required">
						<label>Full Name</label>
          </div>
          <div class="mail">
						<input type="text" name="alamat" required="required">
						<label>Alamat</label>
          </div>
          <div class="uid">
						<input type="text" name="telp" required="required">
						<label>Phone</label>
					</div>
					<div class="mail">
						<input type="email" name="email" required="required">
						<label>Email</label>
					</div>
					
					<div class="passwd">
						<input type="password" name="password" required="required">
						<label>Password</label>
					</div>
					<div class="submit">
						<button class="dark" type="submit"name="register">Register</button>
					</div>
				</form>
			</div>
		</div>	
	</div>



<?= $this->endSection() ?>