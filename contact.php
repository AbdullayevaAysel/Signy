<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signy</title>

    <link rel="icon" href="./assets/image/logo.svg">
    <!-- fontawesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />

    <!-- bootstrap css file -->
    <link rel="stylesheet" href="./assets/vendor/bootstrap/css/bootstrap.min.css">

    <!-- 404 page css -->
    <link rel="stylesheet" href="./assets/css/404-page.css">
    <!-- about page css -->
    <link rel="stylesheet" href="./assets/css/about.css">
    <!-- blog-post page css -->
    <link rel="stylesheet" href="./assets/css/blog-post.css">
    <!-- question page css -->
    <link rel="stylesheet" href="./assets/css/questions.css">
    <!-- video page css  -->
    <link rel="stylesheet" href="./assets/css/video.css">
    <!-- blog css file -->
    <link rel="stylesheet" href="./assets/css/blog.css" />

    <!-- custom main css file -->
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- custum contact css file -->
    <link rel="stylesheet" href="./assets/css/contact.css">
</head>

<body>

    <!-- Header -->
    <header id="header" class="w-100">
        <nav class="navbar navbar-expand-xxl navbar-light w-100">
            <div class="container">
                <a class="navbar-brand" href="./index.php">
                    <img src="./assets/image/logo-2.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvas" aria-controls="navbarOffcanvas" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end navbar-collapse" id="navbarOffcanvas" tabindex="-1" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header w-100">
                        <a href="./index.php">
                            <img src="./assets/image/logo-2.png" class="offcanvas-title" id="offcanvasNavbarLabel" alt="">
                        </a>
                        <i class="fa-solid fa-xmark close" data-bs-dismiss="offcanvas" aria-label="Close"></i>
                    </div>
                    <ul class="navbar-nav ms-auto d-flex align-items-center offcanvas-body">
                        <li class="nav-item dropdown d-flex align-items-center">
                            <a class="nav-link d-flex align-items-center dropdown-header" href="#">
                                <a href="#" class="nav-link">0 800 750 643</a>
                                <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-chevron-down"></i>
                                </a>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">+380 44 334 56 43</a></li>
                                <li><a class="dropdown-item" href="#">+380 44 338 86 43</a></li>
                            </ul>
                        </li>
                        <div class="d-flex menu-center">
                            <div class="d-flex align-items-center menu-center-inner">
                                <li class="nav-item dropdown d-flex align-items-center">
                                    <a class="nav-link d-flex align-items-center dropdown-header" href="#">
                                        <a href="./about.php" class="nav-link">ABOUT US</a>
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-solid fa-chevron-down"></i>
                                        </a>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                                        <li><a class="dropdown-item" href="./blog.php">blog</a></li>
                                        <li><a class="dropdown-item" href="./video.php">Video</a></li>
                                        <li><a class="dropdown-item" href="./questions.php">Questions</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">PRICES</a>
                                </li>
                                <li class="nav-item">
                                    <a href="./contact.php" class="nav-link">CONTACTS</a>
                                </li>
                            </div>
                            <div class="d-flex buttons">
                                <button class="btn rounded-pill btn-outline-blue" type="button">input</button>
                                <button class="btn rounded-pill btn-blue" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">registration</button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header text-center">
                                                <h5 class="modal-title w-100" id="exampleModalLabel">Demo version</h5>
                                                <i class="fa-solid fa-xmark" data-bs-dismiss="modal" aria-label="Close"></i>
                                            </div>
                                            <div class="modal-body">
                                                <p class="text text-center">
                                                    Fill out the form and our managers will contact you
                                                </p>
                                                <form>
                                                    <div>
                                                        <label for="exampleInputName" class="form-label">Name*:</label>
                                                        <input type="text" class="form-control" id="exampleInputName" placeholder="Aysel">
                                                    </div>
                                                    <div>
                                                        <label for="exampleInputEmail1" class="form-label">Email*:</label>
                                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="abdulla@gmail.com">
                                                    </div>
                                                    <div>
                                                        <label for="exampleInputPhone" class="form-label">Phone*:</label>
                                                        <input type="tel" class="form-control" id="exampleInputPhone" placeholder="+38 000 000 00 00">
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer justify-content-center">
                                                <button type="submit" class="btn rounded-pill btn-blue">Send</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <li class="nav-item dropdown language">
                            <a class="nav-link dropdown-toggle d-flex align-items-center text-uppercase" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Eng
                                <i class="fa-solid fa-chevron-down"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li><a class="dropdown-item text-uppercase " href="#">Ukr</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End Header -->

    <main id="main">
        <nav aria-label="breadcrumb">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Signy</li>
                    <li class="breadcrumb-item active" aria-current="page">????????????????</li>
                </ol>
            </div>
        </nav>
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <p class="title">
                            ???????? ????????????????
                        </p>
                        <p class="text">
                            ???? ???????????? ???????? ???????????????? ???? ???????? ?????????????? ?? ?????????????????? ?????????????????????? ???????????????????????????? ???? ???????? ????????????????, ?????????????????? ?? ?????????????????????? ??????????????????????????????????.
                        </p>
                        <div class="info-box d-flex">
                            <img src="./assets/image/Contact/ant-design_phone-filled.png" class="img-fluid" alt="">
                            <ul>
                                <li>0 800 750 643</li>
                                <li>+3 044 334 56 43</li>
                                <li>+3 044 338 86 43</li>
                            </ul>
                        </div>
                        <div class="info-box d-flex">
                            <img src="./assets/image/Contact/ic_round-mail.svg" class="img-fluid" alt="">
                            <a href="#">infosmartsign@smarttender.biz</a>
                        </div>
                        <div class="info-box d-flex">
                            <img src="./assets/image/Contact/ic_baseline-location-on.svg" class="img-fluid" alt="">
                            <p>
                                ????-?? ????????????, 14 ?? ????????, 02072
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 d-flex align-items-end">
                        <img src="./assets/image/Contact/map.png" class="img-fluid w-100" alt="">
                    </div>
                </div>
                <form>
                    <p class="title">
                        ...?????? ???????????????? ??????:
                    </p>
                    <div class="row flex-column">
                        <div class="col-lg-4 form-group">
                            <label for="name">??????*:</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="????????" required>
                        </div>
                        <div class="col-lg-4 form-group">
                            <label for="email">?????????????????????? ??????????*:</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="ivan@mail.com" required>
                        </div>
                        <div class="col-lg-4 form-group">
                            <label for="phone">??????????????*:</label>
                            <input type="phone" id="phone" name="phone" class="form-control" placeholder="+38 000 000 00 00" required>
                        </div>
                        <div class="col-lg-4 form-group">
                            <label for="msg">??????????????????:</label>
                            <textarea id="msg" class="form-control" aria-label="With textarea" rows="5" name="msg" placeholder="?????????????? ??????"></textarea>
                        </div>
                        <div class="col-lg-4">
                            <button class="btn rounded-pill btn-blue">??????????????????</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer id="footer" class="w-100">

        <!-- Links Section -->
        <Section id="links" class="text-white">
            <div class="container">
                <div class="row">
                    <div class="col-8 col-xl-12 col-md-10">
                        <div class="row">
                            <div class="col-xl-3 col-md-3">
                                <img src="./assets/image/Footer-logo.png" alt="">
                            </div>
                            <div class="col-xl-4 col-md-4">
                                <div class="row">
                                    <div class="col-xl-4 col-md-12 col-sm-6 d-flex flex-column">
                                        <a href="./about.php">?????? ??????</a>
                                        <a href="#">????????</a>
                                    </div>
                                    <div class="col-xl-4 col-md-12 col-sm-6 d-flex flex-column">
                                        <a href="#">????????</a>
                                        <a href="#">??????????????????????</a>
                                    </div>
                                    <div class="col-xl-6 col-md-12 col-sm-12 d-flex flex-column">
                                        <a href="./blog.php">????????</a>
                                        <a href="./contact.php">????????????????</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-4">
                                <div class="row link-media">
                                    <div class="col-xl-6 d-flex flex-column">
                                        <a href="mailto:abdulla2001aysel@gmail.com">infosmartsign@smarttender.biz</a>
                                        <a href="#">Facebook</a>
                                    </div>
                                    <div class="col-xl-6 d-flex flex-column opacity-8">
                                        <p>
                                            ????-?? ???????????? ????????????, 14 ?? <br> ????????, 02072
                                        </p>
                                        <a href="#">0 800 750643</a>
                                        <a href="#">+380 44 334 56 43</a>
                                        <a href="#">+380 44 338 86 43</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-md-2 text-end top">
                        <a href="#header">
                            <img src="./assets/image/top.svg" alt="">
                        </a>
                    </div>
                </div>
                <div class="row pt-4 opacity-4 links-footer">
                    <div class="col-xl-3 col-sm-3">
                        <p>&copy; 2020 Signy</p>
                    </div>
                    <div class="col-xl-4 col-sm-4">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-sm-12">
                                <p>?????????????? ????????????</p>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-sm-12">
                                <p>?????????????? ??????????????</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </Section>
        <!-- End Links Section -->
    </footer>
    <!-- Footer end -->


    <!-- bootstrap js file -->
    <script type="text/javascript " src="./assets/vendor/bootstrap/js/bootstrap.min.js "></script>
</body>

</html>