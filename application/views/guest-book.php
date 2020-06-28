<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/index.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/global.css') ?>">
        <title>Mitrasarana - Guest Book</title>
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
                    <a class="nav-link active" href="guest-book">Guest Book</a>
                </li>
              </ul>
            </div>
        </nav>

        <div class="container mt-4 mb-4">
            <p class="font-roboto" style="font-size: 20px;">Guest Book</p>
            <hr>
            <div class="card">
                <div class="card-header">
                    Post message
                </div>
                <div class="card-body">
                    <form action="">
                        <div class="form-group">
                            <label for="Subject">Subject</label>
                            <input type="text" class="form-control" id="Subject" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="Name">Name</label>
                            <input type="text" class="form-control" id="Name" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="email" class="form-control" id="Email" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="Message">Message</label>
                            <textarea class="form-control" id="Message" rows="4"></textarea>
                        </div>
                        <button type="button" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <footer style="bottom:0; left:0; right:0; background-color: rgb(71, 37, 194); color: white; padding-top: 10px; padding-bottom: 10px;" class="text-center font-roboto">
          <img src="<?php echo base_url('assets/images/icons/geo-alt.svg') ?>" alt="location" width="15" height="15"> Perkantoran Kedoya Elok Plaza Blok DC 47, JL. Panjang, Jakarta 11520, Indonesia | <img src="<?php echo base_url('assets/images/icons/envelope-fill.svg') ?>" alt="email" width="15" height="15"> 	pt_msc@cbn.net.id | <img src="<?php echo base_url('assets//images/icons/chat-square-dots-fill.svg') ?>" alt="email" width="15" height="15"> 	(+62-21) 5806180<br>
          <span class="badge badge-danger" style="font-size: 15px; margin-top: 10px;">PT MITRASARANA</span> © 2015 All Rights Reserved.
        </footer>
        <script src="<?php echo base_url('assets/js/jquery-3.5.1.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.js') ?>"></script>
    </body>
</html>