<?php
include "spoj.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="HireMe" content="">

    <title>Kristian Pavić - Portfolio</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/start.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="pocetna.html">Kristian Pavić</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="pocetna.html">Početna</a>
                    </li>
                    <li class="page-scroll">
                        <a href="fakultet.html">Fakultet</a>
                    </li>
                    <li class="page-scroll">
                        <a href="privatno.html">Privatno</a>
                    </li>
                    <li class="page-scroll">
                        <a href="zivotopis.html">Životopis</a>
                    </li>
                    <li class="page-scroll">
                        <a href="kontakt.html">Kontakt</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#page-top">Prijava</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

 <!-- Text section -->
    <section class="success" id="prijava">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center heading">
                    <h2>Prijava</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-1 text-center format-text">

                    <form method="POST" action="upis.php" class="form-horizontal">
                      <div class="form-group">
                        <label for="Name" class="col-sm-3 control-label">Ime</label>
                        <div class="col-sm-9">
                          <input type="text" name="ime" class="form-control" id="inputName" placeholder="Unesite svoje ime">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="Surename" class="col-sm-3 control-label">Prezime</label>
                        <div class="col-sm-9">
                          <input type="text" name="prezime" class="form-control" id="inputSurename" placeholder="Unesite svoje prezime">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="adress" class="col-sm-3 control-label">Adresa</label>
                        <div class="col-sm-9">
                          <input type="text" name="adresa" class="form-control" id="inputadress" placeholder="Unesite svoju adresu">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="Email" class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-9">
                          <input type="text" name="email" class="form-control" id="inputEmail" placeholder="Unesite svoju email adresu">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="username" class="col-sm-3 control-label">Korisničko ime</label>
                        <div class="col-sm-9">
                          <input type="text" name="korisnik" class="form-control" id="username" placeholder="Unesite svoje korisničko ime">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-9">
                          <button type="submit" name="upis" class="btn btn-default log">Prijavi se</button>
                        </div>
                      </div>
                    </form>

                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Lokacija</h3>
                        <p>31000, Osijek</br>
                        </p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Na webu</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="https://www.facebook.com/kristian.pavic.92" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/profile/view?id=304898086&trk=nav_responsive_tab_profile" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>O meni</h3>
                        <p>U potrazi za znanjem i iskustvom!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Kristian Pavić 2015
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visble-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/start.js"></script>

</body>

</html>