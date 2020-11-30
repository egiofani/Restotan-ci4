<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Layout</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url()  ?>/bootstrap/css/bootstrap.min.css" >
    <link href="<?= base_url()  ?>/icon/css/all.css" rel="stylesheet">
    <link href="<?= base_url()  ?>/icon/css/fontawesome.css" rel="stylesheet">
    <link href="<?= base_url()  ?>/icon/css/brands.css" rel="stylesheet">
    <link href="<?= base_url()  ?>/icon/css/solid.css" rel="stylesheet">


    

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light col-12">
    <a class="navbar-brand" href="<?= base_url()?>/admin">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav col-6">
        <li class="nav-item active">
            <a class="nav-link" href="<?= base_url()?>/admin/kategori">Kategori</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url()?>/admin/menu">Menu</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url()?>/admin/banner">Banner</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url()?>/admin/pelanggan">Pelanggan</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url()?>/admin/order">Order</a>
        </li>
        <li class="nav-item">
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url()?>/admin/user">User</a>
        </li>
        </ul>
    </div>
    <div>
    <ul class="navbar-nav ">
            <li class="nav-item dropdown mr-2">
            <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="nav-icon fas fa-user mr-1"></i>  <?php 
            if (!empty(session()->get('user'))) {
                echo ' ';
                echo session()->get('email');
            }
            ?>
            </a>
            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">        
            <a class="nav-link"  href="<?= base_url()?>/admin/login/logout">
                <i class="nav-icon fas fa-user-slash"></i> logout
            </a>
            </div>
        </li>
        </ul>
    </div>
    </nav>

        <?= $this->renderSection('content') ?>


        <script defer src="<?= base_url()  ?>/icon/js/all.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>