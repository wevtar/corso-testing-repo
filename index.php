<?php // global variables
  $title = "Pit Stop";
  $dimensions = "px-3 py-2 m-1" //padding & dimensionamento menu (mt-1)
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css" type="text/css">
    <style media="screen">
      .collapsing {
        transition-duration: 0.1s;
      }
    </style>
    <title><?= $title ?></title>
  </head>

  <body>
    <header class="header container-fluid sticky-top">
      <!--<div class="row">
        <div class="col">-->

          <!-- prova toggler -->
          <!--
          <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
            <a class="navbar-brand" href="#">Top navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="true" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse show" id="navbarCollapse" style="">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
              </ul>
              <form class="form-inline mt-2 mt-md-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
          </nav>
          -->
          <!-- fine prova toggler -->



          <nav class="navbar navbar-expand-md flex-row-reverse">
            <h2 class="navbar-nav ml-md-auto"><?= $title ?></h2>
            <!-- begin menu toggle button -->
            <!--<a href="#" class="navbar-brand">Top Navbar</a>-->
            <button class="navbar-toggler visible" type="button"
                    data-toggle="collapse" data-target="#menubar"
                    aria-label="Toggle navigation">
              <img src="images/menu.png" width="40rem" height="40rem" alt="menu">
            </button>
            <!-- end menu toggle button -->
            <!-- begin togglable content -->
            <div id="menubar" class="navbar-nav-scroll navbar-collapse navbar-expand-md collapse">
              <ul class="navbar-nav nav-pills bd-navbar-nav mb-1 mx-1 mr-auto">
                <li class="nav-item">
                  <a class="nav-link <?= $dimensions ?>"href="#">Contatti</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active <?= $dimensions ?>" href="#">Servizi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link <?= $dimensions ?>" href="#">Chi siamo</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link <?= $dimensions ?>" href="#">Orari</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link <?= $dimensions ?>" href="#">Dove trovarci</a>
                </li>
              </ul>
            </div>
            <!-- end toggable content -->

          </nav>
        <!--</div>
      </div>-->
    </header>
    <main class="container">
      <div class="row mt-2">
        <div class="col-12 col-md-6">
          <h3 class="badge-dark">Titolo</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
            sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div>
        <div class="col-12 col-md-6">
          <h3 class="badge-dark">Titolo</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
            sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div>
        <div class="col-12 col-md-6">
          <h3 class="badge-dark">Titolo</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
            sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div>
        <div class="col-12 col-md-6">
          <h3 class="badge-dark">Titolo</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
            sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div>
      </div>

    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>
