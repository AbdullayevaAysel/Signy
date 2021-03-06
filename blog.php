<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Signy</title>

    <link rel="icon" href="./assets/image/logo.svg" />

    <!-- fontawesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />

    <!-- bootstrap css file -->
    <link rel="stylesheet" href="./assets/vendor/bootstrap/css/bootstrap.min.css" />

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
    <!-- main css file -->
    <link rel="stylesheet" href="./assets/css/style.css" />
    <!-- contact css file -->
    <link rel="stylesheet" href="./assets/css/contact.css" />
    <!-- blog css file -->
    <link rel="stylesheet" href="./assets/css/blog.css" />
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
                    <li class="breadcrumb-item active" aria-current="page">Блог</li>
                </ol>
            </div>
        </nav>
        <section id="blog-section-1">
            <div class="container">
                <p class="title">Интересно пишем про</p>
                <div class="row">
                    <div class="col-lg-8">
                        <img src="./assets/image/Blog/img-1.png" class="img-fluid w-100 h-100" alt="" />
                    </div>
                    <div class="col-lg-4">
                        <span class="date">28.05.2020</span>
                        <p class="content-title">Burn Calories Quicker in 30 Min.</p>
                        <span class="badge rounded-pill bg-gray">про продукт</span>
                        <span class="badge rounded-pill bg-gray">теги</span>
                        <span class="badge rounded-pill bg-gray">много тегов</span>
                        <p class="text">
                            Идейные соображения высшего порядка, а также укрепление и развитие структуры играет важную роль в формировании существенных финансовых и административных условий. Не следует, однако забывать, что дальнейшее развитие различных форм деятельности способствует
                            подготовки и реализации форм развития.
                        </p>
                        <h5><a href="./blog-post.php" id="blog-post">Читать</a></h5>
                    </div>
                </div>
            </div>
        </section>

        <!-- nav-tabs -->
        <section id="nav-tabs">
            <div class="container">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="Все-tab" data-bs-toggle="tab" href="#Все" role="tab" aria-controls="Все" aria-selected="true">Все</a>
                        <i class="fa-solid fa-chevron-down" onclick="navTabsBtn()"></i>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="новости-tab" data-bs-toggle="tab" href="#новости" role="tab" aria-controls="новости" aria-selected="false">новости</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="обучение-tab" data-bs-toggle="tab" href="#обучение" role="tab" aria-controls="обучение" aria-selected="false">обучение</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="законы-tab" data-bs-toggle="tab" href="#законы" role="tab" aria-controls="законы" aria-selected="false">законы</a>
                    </li>

                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="Все" role="tabpanel" aria-labelledby="Все-tab">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="image">
                                    <img src="./assets/image/Blog/img-2.png" class="w-100 h-100" alt="">
                                </div>
                                <div class="context">
                                    <span class="date">05.03.2020</span>
                                    <h5>Burn Calories Quicker in 30 Min.</h5>
                                    <span class="badge rounded-pill bg-gray">про продукт</span>
                                    <span class="badge rounded-pill bg-gray">Теги</span>
                                    <p class="text">
                                        Не следует, однако забывать, что дальнейшее развитие различных форм деятельности
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="image">
                                    <img src="./assets/image/Blog/img-3.png" class="w-100 h-100" alt="">
                                </div>
                                <div class="context">
                                    <span class="date">05.03.2020</span>
                                    <h5>Burn Calories Quicker in 30 Min.</h5>
                                    <span class="badge rounded-pill bg-gray">про продукт</span>
                                    <span class="badge rounded-pill bg-gray">Теги</span>
                                    <p class="text">
                                        Не следует, однако забывать, что дальнейшее развитие различных форм деятельности
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="image">
                                    <img src="./assets/image/Blog/img-4.png" class="w-100 h-100" alt="">
                                </div>
                                <div class="context">
                                    <span class="date">05.03.2020</span>
                                    <h5>Burn Calories Quicker in 30 Min.</h5>
                                    <span class="badge rounded-pill bg-gray">про продукт</span>
                                    <span class="badge rounded-pill bg-gray">Теги</span>
                                    <p class="text">
                                        Не следует, однако забывать, что дальнейшее развитие различных форм деятельности
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="image">
                                    <img src="./assets/image/Blog/img-2.png" class="w-100 h-100" alt="">
                                </div>
                                <div class="context">
                                    <span class="date">05.03.2020</span>
                                    <h5>Burn Calories Quicker in 30 Min.</h5>
                                    <span class="badge rounded-pill bg-gray">про продукт</span>
                                    <span class="badge rounded-pill bg-gray">Теги</span>
                                    <p class="text">
                                        Не следует, однако забывать, что дальнейшее развитие различных форм деятельности
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="image">
                                    <img src="./assets/image/Blog/img-3.png" class="w-100 h-100" alt="">
                                </div>
                                <div class="context">
                                    <span class="date">05.03.2020</span>
                                    <h5>Burn Calories Quicker in 30 Min.</h5>
                                    <span class="badge rounded-pill bg-gray">про продукт</span>
                                    <span class="badge rounded-pill bg-gray">Теги</span>
                                    <p class="text">
                                        Не следует, однако забывать, что дальнейшее развитие различных форм деятельности
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="image">
                                    <img src="./assets/image/Blog/img-4.png" class="w-100 h-100" alt="">
                                </div>
                                <div class="context">
                                    <span class="date">05.03.2020</span>
                                    <h5>Burn Calories Quicker in 30 Min.</h5>
                                    <span class="badge rounded-pill bg-gray">про продукт</span>
                                    <span class="badge rounded-pill bg-gray">Теги</span>
                                    <p class="text">
                                        Не следует, однако забывать, что дальнейшее развитие различных форм деятельности
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="image">
                                    <img src="./assets/image/Blog/img-2.png" class="w-100 h-100" alt="">
                                </div>
                                <div class="context">
                                    <span class="date">05.03.2020</span>
                                    <h5>Burn Calories Quicker in 30 Min.</h5>
                                    <span class="badge rounded-pill bg-gray">про продукт</span>
                                    <span class="badge rounded-pill bg-gray">Теги</span>
                                    <p class="text">
                                        Не следует, однако забывать, что дальнейшее развитие различных форм деятельности
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="image">
                                    <img src="./assets/image/Blog/img-3.png" class="w-100 h-100" alt="">
                                </div>
                                <div class="context">
                                    <span class="date">05.03.2020</span>
                                    <h5>Burn Calories Quicker in 30 Min.</h5>
                                    <span class="badge rounded-pill bg-gray">про продукт</span>
                                    <span class="badge rounded-pill bg-gray">Теги</span>
                                    <p class="text">
                                        Не следует, однако забывать, что дальнейшее развитие различных форм деятельности
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="image">
                                    <img src="./assets/image/Blog/img-4.png" class="w-100 h-100" alt="">
                                </div>
                                <div class="context">
                                    <span class="date">05.03.2020</span>
                                    <h5>Burn Calories Quicker in 30 Min.</h5>
                                    <span class="badge rounded-pill bg-gray">про продукт</span>
                                    <span class="badge rounded-pill bg-gray">Теги</span>
                                    <p class="text">
                                        Не следует, однако забывать, что дальнейшее развитие различных форм деятельности
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="новости" role="tabpanel" aria-labelledby="новости-tab">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="image">
                                    <img src="./assets/image/Blog/img-2.png" class="w-100 h-100" alt="">
                                </div>
                                <div class="context">
                                    <span class="date">05.03.2020</span>
                                    <h5>Burn Calories Quicker in 30 Min.</h5>
                                    <span class="badge rounded-pill bg-gray">про продукт</span>
                                    <span class="badge rounded-pill bg-gray">Теги</span>
                                    <p class="text">
                                        Не следует, однако забывать, что дальнейшее развитие различных форм деятельности
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="image">
                                    <img src="./assets/image/Blog/img-3.png" class="w-100 h-100" alt="">
                                </div>
                                <div class="context">
                                    <span class="date">05.03.2020</span>
                                    <h5>Burn Calories Quicker in 30 Min.</h5>
                                    <span class="badge rounded-pill bg-gray">про продукт</span>
                                    <span class="badge rounded-pill bg-gray">Теги</span>
                                    <p class="text">
                                        Не следует, однако забывать, что дальнейшее развитие различных форм деятельности
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="image">
                                    <img src="./assets/image/Blog/img-4.png" class="w-100 h-100" alt="">
                                </div>
                                <div class="context">
                                    <span class="date">05.03.2020</span>
                                    <h5>Burn Calories Quicker in 30 Min.</h5>
                                    <span class="badge rounded-pill bg-gray">про продукт</span>
                                    <span class="badge rounded-pill bg-gray">Теги</span>
                                    <p class="text">
                                        Не следует, однако забывать, что дальнейшее развитие различных форм деятельности
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="image">
                                    <img src="./assets/image/Blog/img-2.png" class="w-100 h-100" alt="">
                                </div>
                                <div class="context">
                                    <span class="date">05.03.2020</span>
                                    <h5>Burn Calories Quicker in 30 Min.</h5>
                                    <span class="badge rounded-pill bg-gray">про продукт</span>
                                    <span class="badge rounded-pill bg-gray">Теги</span>
                                    <p class="text">
                                        Не следует, однако забывать, что дальнейшее развитие различных форм деятельности
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="image">
                                    <img src="./assets/image/Blog/img-3.png" class="w-100 h-100" alt="">
                                </div>
                                <div class="context">
                                    <span class="date">05.03.2020</span>
                                    <h5>Burn Calories Quicker in 30 Min.</h5>
                                    <span class="badge rounded-pill bg-gray">про продукт</span>
                                    <span class="badge rounded-pill bg-gray">Теги</span>
                                    <p class="text">
                                        Не следует, однако забывать, что дальнейшее развитие различных форм деятельности
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="image">
                                    <img src="./assets/image/Blog/img-4.png" class="w-100 h-100" alt="">
                                </div>
                                <div class="context">
                                    <span class="date">05.03.2020</span>
                                    <h5>Burn Calories Quicker in 30 Min.</h5>
                                    <span class="badge rounded-pill bg-gray">про продукт</span>
                                    <span class="badge rounded-pill bg-gray">Теги</span>
                                    <p class="text">
                                        Не следует, однако забывать, что дальнейшее развитие различных форм деятельности
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="image">
                                    <img src="./assets/image/Blog/img-2.png" class="w-100 h-100" alt="">
                                </div>
                                <div class="context">
                                    <span class="date">05.03.2020</span>
                                    <h5>Burn Calories Quicker in 30 Min.</h5>
                                    <span class="badge rounded-pill bg-gray">про продукт</span>
                                    <span class="badge rounded-pill bg-gray">Теги</span>
                                    <p class="text">
                                        Не следует, однако забывать, что дальнейшее развитие различных форм деятельности
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="image">
                                    <img src="./assets/image/Blog/img-3.png" class="w-100 h-100" alt="">
                                </div>
                                <div class="context">
                                    <span class="date">05.03.2020</span>
                                    <h5>Burn Calories Quicker in 30 Min.</h5>
                                    <span class="badge rounded-pill bg-gray">про продукт</span>
                                    <span class="badge rounded-pill bg-gray">Теги</span>
                                    <p class="text">
                                        Не следует, однако забывать, что дальнейшее развитие различных форм деятельности
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="image">
                                    <img src="./assets/image/Blog/img-4.png" class="w-100 h-100" alt="">
                                </div>
                                <div class="context">
                                    <span class="date">05.03.2020</span>
                                    <h5>Burn Calories Quicker in 30 Min.</h5>
                                    <span class="badge rounded-pill bg-gray">про продукт</span>
                                    <span class="badge rounded-pill bg-gray">Теги</span>
                                    <p class="text">
                                        Не следует, однако забывать, что дальнейшее развитие различных форм деятельности
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="обучение" role="tabpanel" aria-labelledby="обучение-tab">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="image">
                                    <img src="./assets/image/Blog/img-2.png" class="w-100 h-100" alt="">
                                </div>
                                <div class="context">
                                    <span class="date">05.03.2020</span>
                                    <h5>Burn Calories Quicker in 30 Min.</h5>
                                    <span class="badge rounded-pill bg-gray">про продукт</span>
                                    <span class="badge rounded-pill bg-gray">Теги</span>
                                    <p class="text">
                                        Не следует, однако забывать, что дальнейшее развитие различных форм деятельности
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="image">
                                    <img src="./assets/image/Blog/img-3.png" class="w-100 h-100" alt="">
                                </div>
                                <div class="context">
                                    <span class="date">05.03.2020</span>
                                    <h5>Burn Calories Quicker in 30 Min.</h5>
                                    <span class="badge rounded-pill bg-gray">про продукт</span>
                                    <span class="badge rounded-pill bg-gray">Теги</span>
                                    <p class="text">
                                        Не следует, однако забывать, что дальнейшее развитие различных форм деятельности
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="image">
                                    <img src="./assets/image/Blog/img-4.png" class="w-100 h-100" alt="">
                                </div>
                                <div class="context">
                                    <span class="date">05.03.2020</span>
                                    <h5>Burn Calories Quicker in 30 Min.</h5>
                                    <span class="badge rounded-pill bg-gray">про продукт</span>
                                    <span class="badge rounded-pill bg-gray">Теги</span>
                                    <p class="text">
                                        Не следует, однако забывать, что дальнейшее развитие различных форм деятельности
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="image">
                                    <img src="./assets/image/Blog/img-2.png" class="w-100 h-100" alt="">
                                </div>
                                <div class="context">
                                    <span class="date">05.03.2020</span>
                                    <h5>Burn Calories Quicker in 30 Min.</h5>
                                    <span class="badge rounded-pill bg-gray">про продукт</span>
                                    <span class="badge rounded-pill bg-gray">Теги</span>
                                    <p class="text">
                                        Не следует, однако забывать, что дальнейшее развитие различных форм деятельности
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="image">
                                    <img src="./assets/image/Blog/img-3.png" class="w-100 h-100" alt="">
                                </div>
                                <div class="context">
                                    <span class="date">05.03.2020</span>
                                    <h5>Burn Calories Quicker in 30 Min.</h5>
                                    <span class="badge rounded-pill bg-gray">про продукт</span>
                                    <span class="badge rounded-pill bg-gray">Теги</span>
                                    <p class="text">
                                        Не следует, однако забывать, что дальнейшее развитие различных форм деятельности
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="image">
                                    <img src="./assets/image/Blog/img-4.png" class="w-100 h-100" alt="">
                                </div>
                                <div class="context">
                                    <span class="date">05.03.2020</span>
                                    <h5>Burn Calories Quicker in 30 Min.</h5>
                                    <span class="badge rounded-pill bg-gray">про продукт</span>
                                    <span class="badge rounded-pill bg-gray">Теги</span>
                                    <p class="text">
                                        Не следует, однако забывать, что дальнейшее развитие различных форм деятельности
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="image">
                                    <img src="./assets/image/Blog/img-2.png" class="w-100 h-100" alt="">
                                </div>
                                <div class="context">
                                    <span class="date">05.03.2020</span>
                                    <h5>Burn Calories Quicker in 30 Min.</h5>
                                    <span class="badge rounded-pill bg-gray">про продукт</span>
                                    <span class="badge rounded-pill bg-gray">Теги</span>
                                    <p class="text">
                                        Не следует, однако забывать, что дальнейшее развитие различных форм деятельности
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="image">
                                    <img src="./assets/image/Blog/img-3.png" class="w-100 h-100" alt="">
                                </div>
                                <div class="context">
                                    <span class="date">05.03.2020</span>
                                    <h5>Burn Calories Quicker in 30 Min.</h5>
                                    <span class="badge rounded-pill bg-gray">про продукт</span>
                                    <span class="badge rounded-pill bg-gray">Теги</span>
                                    <p class="text">
                                        Не следует, однако забывать, что дальнейшее развитие различных форм деятельности
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="image">
                                    <img src="./assets/image/Blog/img-4.png" class="w-100 h-100" alt="">
                                </div>
                                <div class="context">
                                    <span class="date">05.03.2020</span>
                                    <h5>Burn Calories Quicker in 30 Min.</h5>
                                    <span class="badge rounded-pill bg-gray">про продукт</span>
                                    <span class="badge rounded-pill bg-gray">Теги</span>
                                    <p class="text">
                                        Не следует, однако забывать, что дальнейшее развитие различных форм деятельности
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="законы" role="tabpanel" aria-labelledby="законы-tab">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="image">
                                    <img src="./assets/image/Blog/img-2.png" class="w-100 h-100" alt="">
                                </div>
                                <div class="context">
                                    <span class="date">05.03.2020</span>
                                    <h5>Burn Calories Quicker in 30 Min.</h5>
                                    <span class="badge rounded-pill bg-gray">про продукт</span>
                                    <span class="badge rounded-pill bg-gray">Теги</span>
                                    <p class="text">
                                        Не следует, однако забывать, что дальнейшее развитие различных форм деятельности
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="image">
                                    <img src="./assets/image/Blog/img-3.png" class="w-100 h-100" alt="">
                                </div>
                                <div class="context">
                                    <span class="date">05.03.2020</span>
                                    <h5>Burn Calories Quicker in 30 Min.</h5>
                                    <span class="badge rounded-pill bg-gray">про продукт</span>
                                    <span class="badge rounded-pill bg-gray">Теги</span>
                                    <p class="text">
                                        Не следует, однако забывать, что дальнейшее развитие различных форм деятельности
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="image">
                                    <img src="./assets/image/Blog/img-4.png" class="w-100 h-100" alt="">
                                </div>
                                <div class="context">
                                    <span class="date">05.03.2020</span>
                                    <h5>Burn Calories Quicker in 30 Min.</h5>
                                    <span class="badge rounded-pill bg-gray">про продукт</span>
                                    <span class="badge rounded-pill bg-gray">Теги</span>
                                    <p class="text">
                                        Не следует, однако забывать, что дальнейшее развитие различных форм деятельности
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="image">
                                    <img src="./assets/image/Blog/img-2.png" class="w-100 h-100" alt="">
                                </div>
                                <div class="context">
                                    <span class="date">05.03.2020</span>
                                    <h5>Burn Calories Quicker in 30 Min.</h5>
                                    <span class="badge rounded-pill bg-gray">про продукт</span>
                                    <span class="badge rounded-pill bg-gray">Теги</span>
                                    <p class="text">
                                        Не следует, однако забывать, что дальнейшее развитие различных форм деятельности
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="image">
                                    <img src="./assets/image/Blog/img-3.png" class="w-100 h-100" alt="">
                                </div>
                                <div class="context">
                                    <span class="date">05.03.2020</span>
                                    <h5>Burn Calories Quicker in 30 Min.</h5>
                                    <span class="badge rounded-pill bg-gray">про продукт</span>
                                    <span class="badge rounded-pill bg-gray">Теги</span>
                                    <p class="text">
                                        Не следует, однако забывать, что дальнейшее развитие различных форм деятельности
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="image">
                                    <img src="./assets/image/Blog/img-4.png" class="w-100 h-100" alt="">
                                </div>
                                <div class="context">
                                    <span class="date">05.03.2020</span>
                                    <h5>Burn Calories Quicker in 30 Min.</h5>
                                    <span class="badge rounded-pill bg-gray">про продукт</span>
                                    <span class="badge rounded-pill bg-gray">Теги</span>
                                    <p class="text">
                                        Не следует, однако забывать, что дальнейшее развитие различных форм деятельности
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="image">
                                    <img src="./assets/image/Blog/img-2.png" class="w-100 h-100" alt="">
                                </div>
                                <div class="context">
                                    <span class="date">05.03.2020</span>
                                    <h5>Burn Calories Quicker in 30 Min.</h5>
                                    <span class="badge rounded-pill bg-gray">про продукт</span>
                                    <span class="badge rounded-pill bg-gray">Теги</span>
                                    <p class="text">
                                        Не следует, однако забывать, что дальнейшее развитие различных форм деятельности
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="image">
                                    <img src="./assets/image/Blog/img-3.png" class="w-100 h-100" alt="">
                                </div>
                                <div class="context">
                                    <span class="date">05.03.2020</span>
                                    <h5>Burn Calories Quicker in 30 Min.</h5>
                                    <span class="badge rounded-pill bg-gray">про продукт</span>
                                    <span class="badge rounded-pill bg-gray">Теги</span>
                                    <p class="text">
                                        Не следует, однако забывать, что дальнейшее развитие различных форм деятельности
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="image">
                                    <img src="./assets/image/Blog/img-4.png" class="w-100 h-100" alt="">
                                </div>
                                <div class="context">
                                    <span class="date">05.03.2020</span>
                                    <h5>Burn Calories Quicker in 30 Min.</h5>
                                    <span class="badge rounded-pill bg-gray">про продукт</span>
                                    <span class="badge rounded-pill bg-gray">Теги</span>
                                    <p class="text">
                                        Не следует, однако забывать, что дальнейшее развитие различных форм деятельности
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item"><a class="page-link active" href="#Все">01</a></li>
                        <li class="page-item"><a class="page-link" href="#новости">02</a></li>
                        <li class="page-item"><a class="page-link" href="#обучение">03</a></li>
                        <li class="page-item"><a class="page-link" href="#законы">04</a></li>
                        <li class="page-item"><a class="page-link next" href="#Все">дальше</a></li>
                    </ul>
                </nav>
                <!-- End Pagination -->
            </div>
        </section>
        <!-- end nav tabs -->
    </main>

    <!-- Footer -->
    <footer id="footer" class="w-100">
        <!-- Form -->
        <form action="#">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-auto text-center">
                        <p class="title">Подпишись на наши новости!</p>
                        <p class="text">
                            Введи свой электронный адрес и будь в курсе всех обновлений
                        </p>
                    </div>
                </div>
                <div class="row justify-content-center align-items-center">
                    <div class="col-auto">
                        <input type="email" class="form-control" id="exampleFormControlInput1" />
                    </div>
                    <div class="col-auto">
                        <button class="btn rounded-pill btn-blue" type="button">
                            отправить
                        </button>
                    </div>
                </div>
            </div>
        </form>
        <!-- End Form -->

        <!-- Accordion -->
        <section id="blog-accordion">
            <div class="container">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <div class="accordion-body">
                            <p class="content-title">SEO текст</p>
                            <p class="text">
                                Разнообразный и богатый опыт дальнейшее развитие различных форм деятельности требуют от нас анализа существенных финансовых и административных условий. Задача организации, в особенности же укрепление и развитие структуры позволяет оценить значение новых
                                предложений. С другой стороны постоянный количественный рост и сфера нашей активности требуют от нас анализа позиций, занимаемых участниками в отношении поставленных задач. Задача организации, в особенности же дальнейшее
                                развитие различных форм деятельности позволяет выполнять важные задания по разработке соответствующий условий активизации. Разнообразный и богатый опыт начало повседневной работы по формированию позиции обеспечивает широкому
                                кругу (специалистов) участие в формировании новых предложений. Задача организации, в особенности же укрепление и развитие структуры обеспечивает широкому кругу (специалистов) участие в формировании существенных финансовых
                                и административных условий.
                                <br><br> Повседневная практика показывает, что реализация намеченных плановых заданий позволяет выполнять важные задания по разработке системы обучения кадров, соответствует насущным потребностям. Равным образом сложившаяся
                                структура организации позволяет
                            </p>
                        </div>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="content-title">Повседневная практика показывает</p>
                                <p class="text">
                                    Разнообразный и богатый опыт рамки и место обучения кадров представляет собой интересный эксперимент проверки форм развития. Повседневная практика показывает, что постоянное информационно-пропагандистское обеспечение нашей деятельности обеспечивает широкому
                                    кругу (специалистов) участие в формировании дальнейших направлений развития. Не следует, однако забывать, что укрепление и развитие структуры позволяет оценить значение направлений прогрессивного развития. С другой
                                    стороны консультация с широким активом влечет за собой процесс внедрения и модернизации позиций, занимаемых участниками в отношении поставленных задач. Значимость этих проблем настолько очевидна, что постоянный количественный
                                    рост и сфера нашей активности в значительной степени обуславливает создание новых предложений.
                                </p>
                            </div>
                            <div class="accordion-body">
                                <p class="content-title">Реализация намеченных плановых</p>
                                <p class="text">
                                    Равным образом сложившаяся структура организации требуют определения и уточнения системы обучения кадров, соответствует насущным потребностям. Товарищи! консультация с широким активом влечет за собой процесс внедрения и модернизации направлений прогрессивного
                                    развития. Идейные соображения высшего порядка, а также постоянный количественный рост и сфера нашей активности позволяет выполнять важные задания по разработке соответствующий условий активизации.
                                    <br><br> Значимость этих проблем настолько очевидна, что новая модель организационной деятельности способствует подготовки и реализации новых предложений. Товарищи! консультация с широким активом влечет за собой процесс
                                    внедрения и модернизации модели развития. С другой стороны рамки и место обучения кадров играет важную роль в формировании систем массового участия. Товарищи! новая модель организационной деятельности влечет за собой
                                    процесс внедрения и модернизации модели развития.
                                    <br><br> С другой стороны постоянный количественный рост и сфера нашей активности позволяет выполнять важные задания по разработке форм развития. Значимость этих проблем настолько очевидна, что постоянный количественный
                                    рост и сфера нашей активности в значительной степени обуславливает создание соответствующий условий активизации. Равным образом реализация намеченных плановых заданий играет важную роль в формировании форм развития.
                                </p>
                            </div>
                        </div>
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button d-block text-center collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Развернуть
                            </button>
                        </h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Accordion -->

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
                                        <a href="./about.php">Про нас</a>
                                        <a href="#">Цены</a>
                                    </div>
                                    <div class="col-xl-4 col-md-12 col-sm-6 d-flex flex-column">
                                        <a href="#">Вход</a>
                                        <a href="#">Регистрация</a>
                                    </div>
                                    <div class="col-xl-6 col-md-12 col-sm-12 d-flex flex-column">
                                        <a href="./blog.php">Блог</a>
                                        <a href="./contact.php">Контакты</a>
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
                                            пр-т Миколи Бажана, 14 А <br> Київ, 02072
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
                                <p>Договір оферти</p>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-sm-12">
                                <p>Безпека сервісу</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </Section>
        <!-- End Links Section -->
    </footer>

    <!-- bootstrap js file -->
    <script type="text/javascript " src="./assets/vendor/bootstrap/js/bootstrap.min.js "></script>
    <script type="text/javascript" src="./assets/vendor/js/blog.js"></script>
</body>

</html>