<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Policestation</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Roboto:400,500&display=swap"
    rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <style>
    .header_section .container-fluid {
      width: 100%;
    }

    .logo-head {
      color: white;
    }

  </style>
  
</head>

<body>
  <!-- header section strats -->
  <header class="header_section">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="home.php">
          <div class="logo_box">
            <h2>P<span class="logo-head">SA</span></h2>
          </div>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mr-2 mx-auto">
            <?php
            if($_SESSION['type'] == 'Admin'){
            ?>
            <li class="nav-item active">
              <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="police-details.php">Police Details </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="station-details.php">Station Details</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view-citizen-committee.php">View Citizen Commitee</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view-duty-board.php">View Duty Board</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view-crime.php">View Crime </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="settings.php">Settings</a>
            </li>
            <?php
            } else {
            ?>
            <li class="nav-item active">
              <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="petition-endrosement.php">Petition Endrosement</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="add-citizen.php">Citizen</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="duty-board.php">Duty Board</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="public-service.php">Public Service</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="vip-tour-details.php">VIP Tour Details</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="crime-details.php">Crime Details</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="victim-details.php">Victims</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="petition-registration.php">Petition</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://127.0.0.1:5000">Phishing Detection</dEl></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="settings.php">Settings</a>
            </li>
           
            <?php
            }
            ?>

          </ul>
          <form class="form-inline my-2 my-lg-0">
            <a class="btn btn-primary" href="include/logout.php" role="button">Logout <i class="bi bi-box-arrow-right"></i></a>
          </form>
        </div>
      </nav>
    </div>
  </header>
  <!-- end header section -->