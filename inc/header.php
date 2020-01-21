<?php
// require 'assets/dBase/bootLogin.php';
// if (isset($_SESSION['error'])) {
//     echo "<div style='color:red;'> {$_SESSION['error']} </div>";
// }


// $user = new User();

// if (!$user->loggedIn()) {

//      header("Location: ../login_register/login.php ");
// }




// // $user = new User();
// // $result = new User();
// // if ($result){

// //   
// // }


// // 
?>

<head>
    <link rel="stylesheet" href="assets/styles/layouts.css" type="text/css" />
</head>
<header id="Home">
    <div class="row">
        <!--LOGO-->
        <div class="  col-lg col-md">
            <h1>
                <a href="#Home" title="Fitness X Zone">
                    <img src="assets/images/LOGO.png" class="d-block m-auto" style="max-width:150px;" alt="Fitness X Zone" title="Fitness X Zone" /></a>
                <span class="d-block text-center"> FITNESS X ZONE</span>

            </h1>
        </div>
        <div class="d-flex justify-content-md-end align-items-md-center col-sm col-lg col-md justify-content-center align-items-center mb-1 mb-lg-0">

            <form class="form-inline search">
                <input class="form-control search" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-success my-2 s " type="submit">Search</button>
            </form>

        </div>
    </div>
    <div class="row-fluid">
        <nav class="d-none  d-lg-flex justify-content-center Main_nav" style="margin-bottom: -20px;">
            <ul>
                <li><a href="index.php" title="Home">НАЧАЛО</a></li>
                <span class="dropdown"><a href="" title="УПРАЖНЕНИЯ">УПРАЖНЕНИЯ</a>
                    <ul class="dpdn-content">
                        <li><a href="exercises/" title="УПРАЖНЕНИЯ">МЪЖЕ</a></li>
                        <li><a href="exercises/" title="УПРАЖНЕНИЯ">ЖЕНИ</a></li>
                    </ul>
                </span>
                <li><a href="#" title="ЗАГРЯВКА">ЗАГРЯВКА</a></li>
                <li><a href="#" title="ПРОГРАМИ">ПРОГРАМИ</a></li>
                <li><a href="#" title="КОНТАКТИ">КОНТАКТИ</a></li>
                <li><a href="login_register/login.php" title="ВХОД">ВХОД</a></li>
            </ul>
        </nav>
    </div>


    <nav class="d-lg-none navbar navbar-expand-lg navbar-dark bg-success">
        <a class="navbar-brand d-block d-lg-none" href="#">Меню</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-pills ml-auto ml-lg-0">
                <li class="nav-item ">
                    <a class="nav-link " href="index.php">НАЧАЛО</a>
                </li>


                <li id="navDown" class="nav-item">
                    <a class="nav-link" href="#">УПРАЖНЕНИЯ</a>

                    <a class="d-none nav-item nav-link navDownCont" href="exercises/">МЪЖЕ</a>
                    <a class="d-none nav-item nav-link navDownCont" href="exercises/">ЖЕНИ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">ЗАГРЯВКА</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ПРОГРАМИ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">КОНТАКТИ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login_register/login.html">ВХОД</a>
                </li>

            </ul>
        </div>
    </nav>


</header>
<script src="assets/scripts/header.js"></script>