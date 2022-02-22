<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="/data_file/librarius.png" type="image/x-icon">
    <title>Voile</title>
</head>
<body>
    <nav class="navbar sticky-top navbar-dark"style="background-color:#000000;">
        <div class="container-fluid justify-content-between">
        <a href="/" class="awd"alt="Go Back To The Archive Hub"><img src="/data_file/librarius.png" alt="" width="75" height="70" class="d-inline-block align-text-top"> </a>
        <img src="/data_file/writing.png" alt="" width="550" height="80" class="d-inline-block align-text-top"> 
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <span class="border-top border-light">
              <li class="nav-item">
                <a class="nav-link" href="/">~ View Book Collection</a>
              </li>
              </span>
              <span class="border-top border-bottom border-light">
              <li class="nav-item">
                <a class="nav-link" href="/upload/">+ Add New Book</a>
              </li>
              </span>
</ul>
</div>
</nav>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase">Contacts</h5>

        <p>
          email : musangcorp@gmail.com 
          <br><br/>
          phone number : 08862538177
          <br><br/>
address : 123 abc Street
        </p>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase">About The Library</h5>

        <p>
          The Library is located in abc street , which serves as the location of work for many employees and
          this website is made for archival porpuses in the library. The company owns all rights to manage this website and 
          the maintenance as well as the rights of this website.
        </p>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright PT Musang All Rights Reserved.
  </div>
  <!-- Copyright -->
</footer>
</html>
