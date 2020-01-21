<!DOCTYPE HTML>
<html lang="bg">

<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title>Fitness X Zone</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Fitness Tutorials and exercises " />
    <meta name="author" content="Nikolay Zhelyazkov" />
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Aleo|Slabo+27px" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css" integrity="sha256-piqEf7Ap7CMps8krDQsSOTZgF+MU/0MPyPW2enj5I40=" crossorigin="anonymous" />

    <link rel="stylesheet" href="../assets/styles/base.css" type="text/css" />
    <link rel="stylesheet" href="../assets/styles/layouts.css" type="text/css" />

    <link rel="stylesheet" href="../exercises/styles/parts.css" type="text/css" />
    <link rel="stylesheet" href="../login_register/style/login-register.css" type="text/css" />
    <link rel="stylesheet" media="screen and (max-width: 660px)" href="../assets/styles/style660px.css" type="text/css" />






</head>

<body>
    <header id="Home">
        <div class="row">
            <!--LOGO-->
            <div class="  col-lg col-md">
                <h1>
                    <a href="../index.php" title="Fitness X Zone">
                        <img src="../assets/images/LOGO.png" class="d-block m-auto" style="max-width:150px;" alt="Fitness X Zone" title="Fitness X Zone" /></a>
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

        <div id="del-html">
            <nav class="  mx-auto  navbar  navbar-dark bg-success  ">
                <a class="navbar-brand d-block" style="margin: 0 auto 0 auto;" href="#">Регистрация</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse  " id="navbarSupportedContent">
                    <ul class="navbar-nav nav-pills  m-auto">
                        <li class="nav-item ">
                            <a class="nav-link " href="../index.php">НАЧАЛО</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="../exercises/">УПРАЖНЕНИЯ</a>
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
                            <a class="nav-link" href="../login_register/login.php">ВХОД</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>

    </header>
    <main>


        <div class="container-fluid p-0">
            <form id="system-out" class="container w-50 mt-5" method="post" action="../register.php">


                <div class="form-group">
                    <label for="exampleInputUsername">Username<span style="color:red;">*</span></label>
                    <input data-name="username" type="text" name="username" class="input form-control user-name" id="exampleInputUserName" aria-describedby="usernameHelp" placeholder="Enter Username" required>
                    <small id="usernameHelp" class="form-text text-muted">We'll never share your username with anyone
                        else.</small>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Password<span style="color:red;">*</span></label>

                    <input type="password" id="password" placeholder="Enter password" name="pass" onInput="check()" class="input form-control user-input" required />
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email address<span style="color:red;">*</span></label>
                    <input data-name="email" type="email" name="email" class="input form-control user-email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                        else.</small>
                </div>

                <div id="set">

                    <div id="count">Length : 0</div>

                    <i id="see" onclick="see()" class="far fa-eye-slash"></i>


                </div>


                <div id="check0">
                    <i class="far fa-check-circle"></i> <span> Length more than 8.</span>
                </div>
                <div id="check1">
                    <i class="far fa-check-circle"></i> <span> Length less than 30.</span>
                </div>
                <div id="check2">
                    <i class="far fa-check-circle"></i> <span> Contains numerical character.</span>
                </div>
                <div id="check3">
                    <i class="far fa-check-circle"></i> <span>Contains special character.</span>
                </div>
                <div id="check4">
                    <i class="far fa-check-circle"></i> <span>Shouldn't contain spaces.</span>
                </div>







                <div class="form-group form-check">
                    <input name="remember-me" type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remeber me</label>
                </div>


                <button id="register-button" style="display: inline-block;" name="submit" class="btn btn-primary text-light ">Register</button>


            </form>


            <aside>
                <button onclick="topFunction()" id="myBtn" title="Go to top">&#8593;</button>
            </aside>
        </div>
    </main>
    <footer>
        <div class="First_Row">
            <span><a href="#Home"><img src="../assets/images/LOGO.png" width="200" height="120" alt="Fitness X Zone" title="Fitness X Zone"></a></span>
            <h2>Fitness X Zone</h2>
            <span>
                <h3><a href="../login_register/login.php">Вход </a></h3>
            </span>
            <span>
                <h3><a href="../login_register/register.php">Регистрация</a></h3>
            </span>
            <span>
                <form action="#" method="POST">
                    <!--search bar--><input type="search" placeholder="Search" name="SEARCH" />
                    <button type="submit">
                        <img src="https://cdn1.iconfinder.com/data/icons/hawcons/32/698627-icon-111-search-512.png" title="Search" alt="Search button" width="15" height="15" id="SEARCH" /></button>
                </form>
            </span>
        </div>
        <div class="table_foot">
            <div class="logos_foot">
                <ul>
                    <li>
                        <a href="https://www.facebook.com/nikolai.zhelqzkov.3" title="FACEBOOK"><img src="https://img.icons8.com/color/96/000000/facebook.png" alt="facebook link" title="Facebook logo" /></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/speedyx000" title="TWITTER"><img src="https://img.icons8.com/color/96/000000/twitter.png" alt="twitter link" title="Twitter logo" /></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/nikijivkov/" title="INSTAGRAM"><img src="https://img.icons8.com/color/96/000000/instagram-new.png" alt="instagram link" title="Instagram logo" /></a>
                    </li>
                </ul>
            </div>
            <div class="first_links">
                <ul>
                    <li><a href="#Home" title="УПРАЖНЕНИЯ">Упражнения</a></li>
                    <li><a href="#" title="ЗАГРЯВКА">Загрявка</a></li>
                    <li><a href="#" title="Хранителен режим">Хранителен режим</a></li>
                    <li><a href="#" title="Фитнес програма">Фитнес програма</a></li>
                    <li><a href="#" title="Какво е Фитнес">Какво е Фитнес</a></li>
                    <li><a href="#" title="Защо стоим само вкъщи">Защо стоим само вкъщи</a></li>
                </ul>
            </div>
            <div class="second_links">
                <ul>
                    <li><a href="#" title="Контакти">Свържете се с нас</a></li>
                    <li><a href="#" title="Фитнес зали">Фитнес зали</a></li>
                    <li><a href="#" title="Фитнес артикули">Фитнес артикули</a></li>
                    <li><a href="#" title="Радостин Кузманов">Радостин Кузманов</a></li>
                    <li><a href="#" title="Станислав Чакъров">Станислав Чакъров</a></li>
                    <li><a href="#" title="Проблемите с храните на Mc.Donalds">Проблемите с храните на Mc.Donalds</a>
                    </li>
                </ul>
            </div>
            <div class="third_links">
                <span>
                    <a href="/">
                        <img id="scrollTop" src="https://cdn2.iconfinder.com/data/icons/material-line-thin/1024/up-512.png" width="100" height="100" alt="Go Up" title="Go Up"></a>
                </span>
            </div>
        </div>
        <div class="language">
            <span>
                <select name="form" onchange="location = this.value;">
                    <option value="/">Български</option>
                    <option value="exercises-en.php">English</option>
                </select>
            </span>
        </div>
        <div style="text-align: center; margin:auto;">
            <h3>&#169; ВСИЧКИ ПРАВА ЗАПАЗЕНИ!!! &#169;</h3>
        </div>
    </footer>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="../assets/scripts/header.js"></script>
    <script src="../assets/scripts/scrollTop.js"></script>
    <script src="../login_register/script/login&Register.js"></script>
    <script>
        $(function() {
            $("#scrollTop").click(function(e) {
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: 0
                }, 'slow');

            });
        });
    </script>




    <!-- // if (isset($_POST['submit'])) {
    //     function CheckCaptcha($userResponse)
    //     {
    //         $fields_string = '';
    //         $fields = array(
    //             'secret' => '6LcrPsQUAAAAAPWNlsJnN_kI8Jt8_FKsyqlsmvDj',
    //             'response' => $userResponse
    //         );
    //         foreach ($fields as $key => $value)
    //             $fields_string .= $key . '=' . $value . '&';
    //         $fields_string = rtrim($fields_string, '&');
    //         $ch = curl_init();
    //         curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
    //         curl_setopt($ch, CURLOPT_POST, count($fields));
    //         curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
    //         curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);
    //         $res = curl_exec($ch);
    //         curl_close($ch);
    //         return json_decode($res, true);
    //     }
    //     // Call the function CheckCaptcha
    //     $result = CheckCaptcha($_POST['g-recaptcha-response']);
    //     if ($result['success']) {
    //         //If the user has checked the Captcha box
    //         echo "Captcha verified Successfully";
    //     } else {
    //         // If the CAPTCHA box wasn't checked
    //         echo '<script>alert("Error Message");</script>';
    //     }
    // } -->


</body>

</html>