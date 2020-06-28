<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/index.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/global.css') ?>">
        <title>Mitrasarana</title>
    </head>

    <body>
        <nav class="navbar font-roboto navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="#"><span class="badge badge-danger" style="font-size: 20px;">PT MITRASARANA</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about">About Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Products
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="products">UPS</a>
                      <a class="dropdown-item" href="products">Battery</a>
                      <a class="dropdown-item" href="products">Transfer Systems</a>
                      <a class="dropdown-item" href="products">Solutions</a>
                      <a class="dropdown-item" href="products">Software and Connectivity</a>
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

        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide mt-3" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="<?php echo base_url('assets/images/banner1.png') ?>" class="d-block w-100" alt="Banner1">
                  </div>
                  <div class="carousel-item">
                    <img src="<?php echo base_url('assets/images/banner2.png') ?>" class="d-block w-100" alt="Banner2">
                  </div>
                  <div class="carousel-item">
                    <img src="<?php echo base_url('assets/images/banner3.png') ?>" class="d-block w-100" alt="Banner3">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>

            <div class="row mt-3">
                <div class="col-sm-12 mt-2">
                    <div class="text-center">
                        <h4 class="our-products font-roboto" style="font-weight: bold; box-shadow: 2px 2px 2px black;">Our Products</h4>
                    </div>
                    <div class="card-deck mt-4">
                        <div class="card shadow-sm" style="width: 18rem;">
                          <img src="<?php echo base_url('assets/images/home1.jpg') ?>" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title font-playfair-bold">UPS</h5>
                            <p class="card-text font-roboto">Single phase and three phase UPS from 400 VA to 6.4 MVA, for applications ranging from home offices to large industrial plants to data centres</p>
                          </div>
                          <div class="card-footer text-center"><a href="products" class="btn btn-primary">See details</a></div>
                        </div>
                        <div class="card shadow-sm">
                          <img src="<?php echo base_url('assets/images/home2.jpg') ?>" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title font-playfair-bold">Battery</h5>
                            <p class="card-text font-roboto">Battery Extended Runtime Packs from the Critical Power Supplies UPS range of UPS Battery Packs for power protection installations requiring extended runtimes.</p>
                          </div>
                          <div class="card-footer text-center"><a href="products" class="btn btn-primary">See details</a></div>
                        </div>
                        <div class="card shadow-sm">
                          <img src="<?php echo base_url('assets/images/home3.jpg') ?>" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title font-playfair-bold">Transfer Systems</h5>
                            <p class="card-text font-roboto">Transfer Systems and "intelligent" Switching Device to ensure continuous and reliable power distributions.</p>
                        </div>
                        <div class="card-footer text-center"><a href="products" class="btn btn-primary">See details</a></div>
                        </div>
                        <div class="card shadow-sm">
                            <img src="<?php echo base_url('assets/images/home4.jpg') ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title font-playfair-bold">Software and Connectivity</h5>
                              <p class="card-text font-roboto">A range of software and accessories are characterized by simplicity and intuitiveness, security and reliability, highly customizable.</p>
                            </div>
                            <div class="card-footer text-center"><a href="products" class="btn btn-primary">See details</a></div>
                          </div>
                      </div>
                    <div class="text-center mt-4">
                      <h4 class="our-products font-roboto" style="font-weight: bold; box-shadow: 2px 2px 2px black;">Latest News</h4>
                    </div>
                    <div class="card mt-4 mb-4">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="card-body" style="padding: 10px 0px;">
                                <h5 class="card-title mb-0 font-playfair" style="font-weight: bold;">AROS GmbH changes company name to Riello Power Systems GmbH</h5>
                                <p class="card-text mt-0 mb-2"><small class="text-muted">Thursday, 16 April 2015</small></p>
                                <p class="card-text font-roboto">January 17, 2014 Effective from January 1st 2014... Effective from January 1st 2014, Munich based company AROS GmBH will now be known  as Riello...</p>
                                <a href="#" class="card-link">Read more</a>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="card-body" style="padding: 10px 0px;">
                                <h5 class="card-title mb-0 font-playfair" style="font-weight: bold;">Brand new models from 160 to 200 kVA of the high efficiency UPS Multi Sentry</h5>
                                <p class="card-text mt-0 mb-2"><small class="text-muted">Thursday, 16 April 2015</small></p>
                                <p class="card-text font-roboto">January 13, 2015   Riello UPS is pleased to announce the new Multi Sentry 160-200 kVA, the brand new models of high efficiency and ultra compact UPS... </p>
                                <a href="#" class="card-link">Read more</a>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="card-body" style="padding: 10px 0px;">
                                <h5 class="card-title mb-0 font-playfair" style="font-weight: bold;">Riello renews premiere sponsorship of DATACENTRE.ME website</h5>
                                <p class="card-text mt-0 mb-2"><small class="text-muted">Thursday, 16 April 2015</small></p>
                                <p class="card-text font-roboto">August 04, 2014   For the second year running, Riello UPS has renewed its annual sponsorship of the DATACENTRE.ME website. DATACENTRE.ME is the...</p>
                                <a href="#" class="card-link">Read more</a>
                                </div>
                            </li>
                        </ul>
                    </div>
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