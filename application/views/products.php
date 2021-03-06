<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/index.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/global.css') ?>">
        <title>Mitrasarana - Products</title>
    </head>

    <body>
        <nav class="navbar font-roboto navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="#"><span class="badge badge-danger" style="font-size: 20px;">PT MITRASARANA</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="index">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about">About Us <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Products
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <?php foreach($categories as $category){ ?>
                      <a class="dropdown-item" href="products"><?php echo $category->nama ?></a>
                      <?php } ?>
                    </div>
                  </li>
                <li class="nav-item">
                  <a class="nav-link" href="services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="news">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact-us">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="guest-book">Guest Book</a>
                </li>
              </ul>
            </div>
        </nav>

        <div class="container mt-4 mb-4">
            <p class="font-roboto" style="font-size: 20px;">Our Products</p>
            <hr>
            <div class="row">
                <div class="col-3">
                    <ul class="nav flex-column nav-pills">
                    <li class="nav-item">
                          <a class="nav-link active" href="products"><?php echo $categories[0]->nama ?></a>
                    </li>
                    <?php foreach(array_slice($categories,1) as $category){ ?>
                      <li class="nav-item">
                          <a class="nav-link" href="products"><?php echo $category->nama ?></a>
                        </li>
                      <?php } ?>
                    </ul>
                </div>
                <div class="col-9">
                    <div class="card-deck">
                        <?php foreach($products as $product){ ?>
                        <div class="card">
                          <img src="<?php echo base_url($product->gambar) ?>" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title font-playfair" style="font-weight: bold;"><?php echo $product->nama ?></h5>
                            <p class="card-text mb-0"><small class="text-muted">Stock: <?php echo $product->stok ?></small></p>
                            <p class="card-text mt-0"><small class="text-muted">Harga: Rp<?php echo $product->harga ?></small></p>
                            <p class="card-text font-roboto"><?php echo $product->deskripsi ?></p>
                          </div>
                          <div class="card-footer text-center">
                              <button class="btn btn-primary">Buy Now</button>
                          </div>
                        </div>
                        <?php } ?>
                    </div>
                    <nav aria-label="Page navigation example" class="mt-3">
                        <ul class="pagination">
                          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                          <li class="page-item active"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
              </div>
        </div>

        <footer style="background-color: rgb(71, 37, 194); color: white; padding-top: 10px; padding-bottom: 10px;" class="text-center font-roboto">
          <img src="<?php echo base_url('assets/images/icons/geo-alt.svg') ?>" alt="location" width="15" height="15"> Perkantoran Kedoya Elok Plaza Blok DC 47, JL. Panjang, Jakarta 11520, Indonesia | <img src="<?php echo base_url('assets/images/icons/envelope-fill.svg') ?>" alt="email" width="15" height="15"> 	pt_msc@cbn.net.id | <img src="<?php echo base_url('assets//images/icons/chat-square-dots-fill.svg') ?>" alt="email" width="15" height="15"> 	(+62-21) 5806180<br>
          <span class="badge badge-danger" style="font-size: 15px; margin-top: 10px;">PT MITRASARANA</span> © 2015 All Rights Reserved.
        </footer>

        <script src="<?php echo base_url('assets/js/jquery-3.5.1.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.js') ?>"></script>
    </body>
</html>