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
    <!-- contact css file -->
    <link rel="stylesheet" href="./assets/css/contact.css" />
    <!-- blog css file -->
    <link rel="stylesheet" href="./assets/css/blog.css" />
    <!-- custom css file -->
    <link rel="stylesheet" href="./assets/css/style.css">
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

    <!-- Hero Section -->
    <section id="hero">
        <div id="carousel-example-generic" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-bs-target="#carousel-example-generic" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide-1"></li>
                <li data-bs-target="#carousel-example-generic" data-bs-slide-to="1" aria-label="Slide-2"></li>
                <li data-bs-target="#carousel-example-generic" data-bs-slide-to="2" aria-label="Slide-3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="img"></div>
                    <img src="./assets/image/Mask Group-1.png" class="d-block w-100 h-100 carousel-img" alt="...">
                    <div class="carousel-caption container d-flex flex-column align-items-start justify-content-center h-100 ">
                        <h1 class="title">
                            ???????????????? ?????????????????????????????? <br> ?? ?????? ??????????:
                        </h1>
                        <p class="show-active-slide">
                            <span class="active">1</span>
                            <img src="./assets/image/Line 13.svg" alt="">
                            <span>2</span>
                            <img src="./assets/image/Line 13.svg" alt="">
                            <span>3</span>
                        </p>
                        <h5>?????????????? ????????????????</h5>
                        <p class="text">
                            ???? ??????????????, ????????????????, ?????????? ?????????????? ??????????????????????. <br> ??????????????????????????, ?????????????? ???????????? ???????????? ?? ?????????????? ?? <br> 1000 ???????????????? ???????????????????? ?? ??????????????!
                        </p>
                        <button class="btn rounded-pill btn-blue">?????????????????????? ??????????????????</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./assets/image/Mask Group-2.png" class="d-block w-100 h-100 carousel-img" alt="...">
                    <div class="carousel-caption container d-flex flex-column align-items-start justify-content-center h-100 ">
                        <h1 class="title">
                            ???????????????? ?????????????????????????????? <br> ?? ?????? ??????????:
                        </h1>
                        <p class="show-active-slide">
                            <span>1</span>
                            <img src="./assets/image/Line 13.svg" alt="">
                            <span class="active">2</span>
                            <img src="./assets/image/Line 13.svg" alt="">
                            <span>3</span>
                        </p>
                        <h5>?????????????? ????????????????</h5>
                        <p class="text">
                            ???? ??????????????, ????????????????, ?????????? ?????????????? ??????????????????????. <br> ??????????????????????????, ?????????????? ???????????? ???????????? ?? ?????????????? ?? <br> 1000 ???????????????? ???????????????????? ?? ??????????????!
                        </p>
                        <button class="btn rounded-pill btn-blue">?????????????????????? ??????????????????</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./assets/image/Mask Group-3.png" class="d-block w-100 h-100 carousel-img" alt="...">
                    <div class="carousel-caption container d-flex flex-column align-items-start justify-content-center h-100 ">
                        <h1 class="title">
                            ???????????????? ?????????????????????????????? <br> ?? ?????? ??????????:
                        </h1>
                        <p class="show-active-slide">
                            <span>1</span>
                            <img src="./assets/image/Line 13.svg" alt="">
                            <span>2</span>
                            <img src="./assets/image/Line 13.svg" alt="">
                            <span class="active">3</span>
                        </p>
                        <h5>?????????????? ????????????????</h5>
                        <p class="text">
                            ???? ??????????????, ????????????????, ?????????? ?????????????? ??????????????????????. <br> ??????????????????????????, ?????????????? ???????????? ???????????? ?? ?????????????? ?? <br> 1000 ???????????????? ???????????????????? ?? ??????????????!
                        </p>
                        <button class="btn rounded-pill btn-blue">?????????????????????? ??????????????????</button>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Hero -->

    <main id="main">
        <!-- Performance Section -->
        <section id="performance">
            <div class="container">
                <div class="performance-y row justify-content-between">
                    <div class="col-md-4  col-12 p-66">
                        <div class="d-flex align-items-center">
                            <div class="section-img">
                                <img src="./assets/image/Performance/Group.png" class="w-100 h-100" alt="">
                            </div>
                            <div class="section-content">
                                <h5>??????????????????????</h5>
                                <p class="text">
                                    ?????????????? ????????????????. <br> 1 ?????????????? ???? ????????????????????
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12 p-66">
                        <div class="d-flex align-items-center">
                            <div class="section-img">
                                <img src="./assets/image/Performance/Vector.png" class="w-100 h-100" alt="">
                            </div>
                            <div class="section-content">
                                <h5>??????????????????</h5>
                                <p class="text">
                                    ???????????? ???????????????? 24\7 ???? ???????? ??????????????????
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12 p-66">
                        <div class="d-flex align-items-center">
                            <div class="section-img">
                                <img src="./assets/image/Performance/piggy-bank 1.png" class="w-100 h-100" alt="">
                            </div>
                            <div class="section-content">
                                <h5>????????????????</h5>
                                <p class="text">
                                    ?? 30 ?????? ?????????????? ?????? ?????????? ?? ??????????????
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Performance Section -->

        <!-- Section - 2 -->
        <section id="section-2">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-sm-12 col-md-6 ">
                        <p class="title">?????????????? ?? ????????????</p>
                        <p class="text">
                            <i class="fa-solid fa-minus fa-2xs "></i> ???????????????? ?????????????????? ???? ?????????? ???????????? ?????????????????? ????????????????. ?????? ??????????????????????????!
                        </p>
                        <p class="text">
                            <i class="fa-solid fa-minus fa-2xs"></i> ???????????????????? ?????????????? ???????????????????? ??????????????????, ???????? ?????? ?????????????????? ??????????????. ?????? ????????????????????????!
                        </p>
                        <p class="text">
                            <i class="fa-solid fa-minus fa-2xs"></i> ???????????????? XML ???????? ?? ?????????????????????? ???????????????? ???????????????? ??????????????????. ?????? ????????????!
                        </p>
                        <p class="text">
                            <i class="fa-solid fa-minus fa-2xs"></i> ?????????????? ?? ?????????? ?????????????? ?? ???????????????? ???????????????????? ?????? ????????????????????. ?????? ??????????????!
                        </p>
                        <div class="button">
                            <button class="btn rounded-pill btn-outline-blue">???????????? ????????????</button>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 d-flex section-2-img">
                        <div class="img"></div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-between">
                    <div class="col-sm-12 col-md-6 d-flex section-2-img">
                        <div class="img-1"></div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <p class="title">?????? ?????????????? ??????:</p>
                        <p class="text">
                            <i class="fa-solid fa-minus fa-2xs"></i> Web ???????????? ?????? ?????????????????? ???????????????????????? ??????????????????????
                        </p>
                        <p class="text">
                            <i class="fa-solid fa-minus fa-2xs"></i> ?????????????????????? ?????????????????? ?? ???????????????????? ???????????????????????? ???????????????? ??????????????????
                        </p>
                        <p class="text">
                            <i class="fa-solid fa-minus fa-2xs"></i> ?????????????????????? ?????????????????? ?? ???????????????????? ???????????????????????? ???????????????? ??????????????????
                        </p>
                        <p class="text">
                            <i class="fa-solid fa-minus fa-2xs"></i> ?????????????????? ?????????? ?????????? Mobile ID
                        </p>
                        <div class="button">
                            <button class="btn rounded-pill btn-blue">????????????????????????????????????</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Section - 2 -->

        <!-- Section - 3 -->
        <section id="section-3">
            <div class="container">
                <p class="title text-center">
                    ???????????? ???????????????? ????????????????
                </p>
            </div>
            <div class="container d-flex justify-content-center">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-sm-12 col-md-6 d-flex justify-content-end">
                        <div class="card h-100">
                            <div class="card-body">
                                <h4 class="card-title">
                                    Demo
                                </h4>
                                <p class="card-text">
                                    30 ????????????????????
                                </p>
                                <p class="card-detail">
                                    <span>0</span> <span>??????/????????????</span>
                                </p>

                            </div>
                            <button class="btn rounded-pill btn-blue" type="button">????????????????????????????????????</button>

                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-12 d-flex justify-content-start">
                        <div class="card h-100">
                            <div class="card-body">
                                <h4 class="card-title">
                                    Business
                                </h4>
                                <p class="card-text">
                                    1 000 ????????????????????
                                </p>
                                <p class="card-detail">
                                    <span>1 000</span> <span>??????/??????</span>
                                </p>
                            </div>
                            <button class="btn rounded-pill btn-blue" type="button">??????????????????</button>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-12 d-flex justify-content-end">
                        <div class="card h-100">
                            <div class="card-body">
                                <h4 class="card-title">
                                    Pro
                                </h4>
                                <p class="card-text">
                                    1 000 ????????????????????
                                </p>
                                <p class="card-detail">
                                    <span>9 000</span> <span>??????/??????</span>
                                </p>
                            </div>
                            <button class="btn rounded-pill btn-blue " type="button">??????????????????</button>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-12 d-flex justify-content-start">
                        <div class="card h-100">
                            <div class="card-body">
                                <h4 class="card-title">
                                    Individual
                                </h4>
                                <p class="card-text">
                                    ???????????????????? ?????????????????? ????????????????????
                                </p>
                            </div>
                            <button class="btn rounded-pill btn-blue" type="button">?????????????????? ?? ????????</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Section - 3 -->

        <!-- Section - 4 -->
        <section id="section-4">
            <div class="container text-center">
                <p class="number">5 820 125 114 </p>
                <p class="title">
                    ?????????????????? ????????????????????
                </p>
                <p class="text justify-content-center">
                    ???????? ???????????????? ?????? ?????????? 30 ?????? ?????????????? ?????????????? <br/> ?????????????? ?????? ?????????????? ???????????? ??????????????. ???? ???????????????? <br/> Signy ?????? ???????????????????? ?? ???????????????????? ??????????????????
                </p>
            </div>
        </section>
        <!-- End Section - 4 -->

        <!-- Client Section -->
        <section id="clients">
            <div id="carousel-client" class="carousel slide" data-bs-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-bs-target="#carousel-client" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide-1"></li>
                    <li data-bs-target="#carousel-client" data-bs-slide-to="1" aria-label="Slide-2"></li>
                    <li data-bs-target="#carousel-client" data-bs-slide-to="2" aria-label="Slide-3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="container text-center m-auto">
                            <p class="title">???????????? Signy</p>
                            <div class="carousel-item-inner">
                                <div class="row justify-content-center">
                                    <div class="client-img m-0 p-0">
                                        <img src="./assets/image/Client/image 6.png" class="d-block w-100 h-100 img-fluid" alt="...">
                                    </div>
                                    <div class="client-img">
                                        <img src="./assets/image/Client/image 2.png" class="d-block w-100 h-100 img-fluid" alt="...">
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="client-img">
                                        <img src="./assets/image/Client/image 4.png" class="d-block w-100 h-100 img-fluid" alt="...">
                                    </div>
                                    <div class="client-img">
                                        <img src="./assets/image/Client/image 6.png" class="d-block w-100 h-100 img-fluid" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container text-center m-auto">
                            <p class="title">???????????? Signy</p>
                            <div class="carousel-item-inner">
                                <div class="row justify-content-center">
                                    <div class="client-img m-0 p-0">
                                        <img src="./assets/image/Client/image 6.png" class="d-block w-100 h-100 img-fluid" alt="...">
                                    </div>
                                    <div class="client-img">
                                        <img src="./assets/image/Client/image 2.png" class="d-block w-100 h-100 img-fluid" alt="...">
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="client-img">
                                        <img src="./assets/image/Client/image 4.png" class="d-block w-100 h-100 img-fluid" alt="...">
                                    </div>
                                    <div class="client-img">
                                        <img src="./assets/image/Client/image 6.png" class="d-block w-100 h-100 img-fluid" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container text-center m-auto">
                            <p class="title">???????????? Signy</p>
                            <div class="carousel-item-inner">
                                <div class="row justify-content-center">
                                    <div class="client-img m-0 p-0">
                                        <img src="./assets/image/Client/image 6.png" class="d-block w-100 h-100 img-fluid" alt="...">
                                    </div>
                                    <div class="client-img">
                                        <img src="./assets/image/Client/image 2.png" class="d-block w-100 h-100 img-fluid" alt="...">
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="client-img">
                                        <img src="./assets/image/Client/image 4.png" class="d-block w-100 h-100 img-fluid" alt="...">
                                    </div>
                                    <div class="client-img">
                                        <img src="./assets/image/Client/image 6.png" class="d-block w-100 h-100 img-fluid" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Client Section -->

        <!-- Section - 6 -->
        <section id="section-6">
            <div class="container">
                <p class="title text-center">?????????????????? ?????????? ?????? </p>
                <div class="row">
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="image img-1 rounded">
                            <img src="./assets/image/picture-linear.png" class="d-block w-100 h-100" alt="...">
                        </div>
                        <div class="content d-flex flex-column">
                            <span class="date">28.05.2020</span>
                            <h5>?????????????????? ???????????????? ?? <br /> ?????? ????????????</h5>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="image img-2 rounded">
                            <img src="./assets/image/picture-linear.png" class="d-block w-100 h-100" alt="...">
                        </div>
                        <div class="content d-flex flex-column">
                            <span class="date">28.05.2020</span>
                            <h5>?????????????????? ???????????????? ?? <br /> ?????? ????????????</h5>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="image img-3 rounded">
                            <img src="./assets/image/picture-linear.png" class="d-block w-100 h-100" alt="...">
                        </div>
                        <div class="content d-flex flex-column">
                            <span class="date">28.05.2020</span>
                            <h5>?????????????????? ???????????????? ?? <br/> ?????? ????????????</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Section - 6 -->

        <!-- Section - 7 -->
        <section id="section-7" class="text-center w-100">
            <div class="container">
                <p class="title">???????????????????????? ?? ??????????? </p>
                <div class="img mx-auto">
                    <img src="./assets/image/video-linear.png" class="w-100 h-100" alt="">
                </div>
            </div>
        </section>
        <!-- End Section - 7 -->

        <!-- Section - 8 -->
        <section id="section-8" class="w-100">
            <div class="container">
                <p class="title text-center">???????????????????? ?????????????? ?? ???????????? ???? ??????</p>
                <div class="accordion mx-auto" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed flex-row-reverse" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            ???????????? ?????????????? ?????????? ???????????? ?? ???????????????????? ??????????????, ?? <br/> ???????????????? ?????????????????????????????
                        </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="accordion-text">
                                    <i class="fa-solid fa-minus"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat nemo distinctio provident, et amet cumque, aliquid labore ea nostrum ratione dicta, vitae quae. Blanditiis et culpa
                                    aliquam expedita quidem maxime?
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button flex-row-reverse" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            ???????????? ?????????? ?????????????? ???????????? ?????????? ???????????????????????????
                        </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>
                                    <i class="fa-solid fa-minus"></i> ???????????? ?????? ???????????? ???? ?????? ???????????????????? ?????????????????????????????? ??????????????????.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed flex-row-reverse" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            ???????????? ???????? ?????????????
                        </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>
                                    <i class="fa-solid fa-minus"></i> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium, minima sed est voluptatem, illo distinctio, ipsam perspiciatis odio eveniet labore inventore tenetur ullam in voluptate
                                    laborum voluptatibus perferendis nesciunt velit!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed flex-row-reverse" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            ???????????? ???????? ?????????????
                        </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>
                                    <i class="fa-solid fa-minus"></i> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium, minima sed est voluptatem, illo distinctio, ipsam perspiciatis odio eveniet labore inventore tenetur ullam in voluptate
                                    laborum voluptatibus perferendis nesciunt velit!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed flex-row-reverse" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            ???????????? ???????? ?????????????
                        </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>
                                    <i class="fa-solid fa-minus"></i> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium, minima sed est voluptatem, illo distinctio, ipsam perspiciatis odio eveniet labore inventore tenetur ullam in voluptate
                                    laborum voluptatibus perferendis nesciunt velit!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed flex-row-reverse" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            ???????????? ???????? ?????????????
                        </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>
                                    <i class="fa-solid fa-minus"></i> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium, minima sed est voluptatem, illo distinctio, ipsam perspiciatis odio eveniet labore inventore tenetur ullam in voluptate
                                    laborum voluptatibus perferendis nesciunt velit!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Section - 8 -->

    </main>

    <!-- Footer -->
    <footer id="footer" class="w-100">
        <!-- Form -->
        <form action="#">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-auto text-center">
                        <p class="title">?????????????????? ???? ???????? ??????????????!</p>
                        <p class="text">
                            ?????????? ???????? ?????????????????????? ?????????? ?? ???????? ?? ?????????? ???????? ????????????????????
                        </p>
                    </div>
                </div>
                <div class="row justify-content-center align-items-center">
                    <div class="col-auto">
                        <input type="email" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="col-auto">
                        <button class="btn rounded-pill btn-blue" type="button">??????????????????</button>
                    </div>
                </div>
            </div>
        </form>
        <!-- End Form -->

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

        <!-- <section id="footer-bottom">
            <div class="container text-center">
                <p class="title">??????????????!</p>
                <p class="text justify-content-center">???? ???????????? example@maile.com ???????????? ?????????? ?????????????????? <br/> ?????????? ???????????? ??????????????</p>
            </div>
        </section> -->
    </footer>
    <!-- Footer end -->

    <!-- bootstrap js file -->
    <script type="text/javascript " src="./assets/vendor/bootstrap/js/bootstrap.min.js "></script>
</body>

</html>