<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="<?php echo base_url() ?>assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link rel="icon" href="<?= base_url() ?>assets/img/ds-icon.ico" type="image/x-icon">
    <title>Blog Homepage</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="<?php echo base_url() ?>/assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      #greeting {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
      body {
      background-image: url('<?= base_url() ?>assets/img/bg.png');
      padding-top: 3.5rem;
      }
    </style>

  <link href="<?php echo base_url() ?>assets/css/slider.css" rel="stylesheet">
  </head>
  <body>
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>


    
<?php $this->load->view('blog_header'); ?>

<main>

<?php $this->load->view('blog_carousel'); ?>

<div class="container w-auto shadow-lg p-3 mb-5 bg-body-tertiary rounded">
  <div class="row">
    <div class="col">
      <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
        <h1 class="display-4 ">Selamat Datang di BSI Mini Blog</h1>
        <p class="lead my-3">BSI Mini Blog adalah aplikasi web sederhana yang memungkinkan pengguna untuk membuat, mengelola, dan berbagi postingan blog. Proyek ini dirancang sebagai platform blogging dasar yang menawarkan fitur-fitur inti seperti pembuatan, pengeditan, dan penghapusan artikel, serta tampilan daftar postingan.</p>

      </div>
    </div>
    <div class="row">
      <div class="col">
    </div>
  </div>
</div>
  

  <div class="album py-5 bg-body-tertiary" id="artikel">
    <h1 class="display-2 text-center mb-5">Artikel Terbaru</h1>
    <div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php 
        $count = 0;
        foreach ($artikel as $key => $value) {
            if ($count >= 6) {
                break;
            }
        ?>
            <div class="col">
                <div class="card shadow-sm h-100">
                    <div style="overflow: hidden;">
                        <img src="<?= base_url() . $value['blog_img'] ?>" class="card-img-top img-fluid" style="object-fit: cover; object-position: center; height: 200px;" alt="...">
                    </div>
                    <div class="card-body">
                        <p <?php echo $value['kategori'] == 'Umum' ? 'class="badge rounded-pill text-bg-primary"' : ($value['kategori'] == 'Pengumuman' ? 'class="badge rounded-pill text-bg-warning"' : 'class="badge rounded-pill text-bg-danger"') ?> ><?= $value['kategori'] ?></p>
                        <hr style="height:3px;border:none;color:red;background-color:red;margin:0px;margin-bottom:4px;">
                        <p class="card-text align-bottom"><?= $value['blog_title'] ?></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="<?= base_url() . 'home/blog_detail/' . $value['blog_id'] ?>" type="button" class="btn btn-sm btn-outline-secondary position-sticky bottom-0 start-0">Baca Selengkapnya</a>
                            </div>
                            <?php $date = date_create($value['created_on']); ?>
                            <small class="text-body-secondary"><?php echo date_format($date, "d-M-Y H:i"); ?></small>
                        </div>
                    </div>
                </div>
            </div>
        <?php
            $count++;
        }   
        ?>
      </div>
      <center><a type="button" class="btn btn-primary btn-lg btn-block w-auto mt-4" href="<?php echo base_url()?>home/blog_get_all">Lihat Semua Artikel</a></center>
    </div>
  </div>
</main>

<?php $this->load->view('blog_footer'); ?>