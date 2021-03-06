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
    <!-- blog-post page css -->
    <link rel="stylesheet" href="./assets/css/blog-post.css">
    <!-- video page css  -->
    <link rel="stylesheet" href="./assets/css/video.css">
    <!-- blog css file -->
    <link rel="stylesheet" href="./assets/css/blog.css" />

    <!-- custom main css file -->
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- custum contact css file -->
    <link rel="stylesheet" href="./assets/css/contact.css">

    <!-- questions css css file -->
    <link rel="stylesheet" href="./assets/css/questions.css">


    <!-- about css file -->
    <link rel="stylesheet" href="./assets/css/about.css">

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
                    <li class="breadcrumb-item active" aria-current="page">Про нас</li>
                </ol>
            </div>
        </nav>
        <section id="about">
            <div class="container">
                <p class="title">
                    Страница про нас
                </p>
                <div class="img-1">
                    <img src="./assets/image/about/about-linear.png" class="img-linear" alt="">
                </div>

                <div class="context">
                    <p class="text ">
                        настолько очевидна, что дальнейшее развитие различных форм деятельности обеспечивает широкому кругу (специалистов) участие в формировании новых предложений. Разнообразный и богатый опыт консультация с широким активом обеспечивает широкому кругу. Повседневная
                        практика показывает, что реализация намеченных плановых заданий в значительной степени обуславливает создание модели развития. Значимость этих проблем

                    </p>
                    <p class="text ">
                        Если у вас есть какие то интересные предложения, обращайтесь! Студия Web-Boss всегда готова решить любую задачу. Равным образом постоянный количественный рост и сфера нашей активности играет важную роль в формировании системы обучения кадров, соответствует
                        насущным потребностям.

                    </p>
                    <p class="text ">
                        Таким образом новая модель организационной деятельности способствует подготовки и реализации систем массового участия. Повседневная практика показывает, что укрепление и развитие структуры обеспечивает широкому кругу (специалистов) участие в формировании
                        дальнейших направлений развития.

                    </p>
                    <p class="text ">
                        Товарищи! постоянное информационно-пропагандистское обеспечение нашей деятельности позволяет выполнять важные задания по разработке модели развития. С другой стороны укрепление и развитие структуры обеспечивает участие в формировании систем массового
                        участия.

                    </p>
                </div>

                <div class="row align-items-center justify-content-between about-inner-section">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="img-2">
                            <img src="./assets/image/about/about-linear.png" class="img-linear" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="about-inner-section-context">
                            <p class="text ">
                                Идейные соображения высшего порядка, а также рамки и место обучения кадров обеспечивает широкому кругу (специалистов) участие в формировании новых предложений.
                            </p>
                            <p class="text d-flex flex-column align-items-end">
                                <strong>Имя Фамилия</strong>
                                <span>должность</span>
                                <span>ООО”Компания”</span>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="context">
                    <p class="text ">
                        Постоянное информационно-пропагандистское обеспечение нашей деятельности позволяет выполнять важные задания по разработке модели развития. Идейные соображения высшего порядка, а также рамки и место обучения кадров обеспечивает широкому кругу (специалистов)
                        участие в формировании новых предложений.

                    </p>
                    <p class="text ">
                        Сложившаяся структура организации представляет собой интересный эксперимент проверки направлений прогрессивного развития. С другой стороны укрепление и развитие структуры обеспечивает участие в формировании систем массового участия. Идейные соображения
                        высшего порядка, а также рамки и место обучения кадров обеспечивает широкому кругу (специалистов) участие в формировании новых предложений.

                    </p>
                    <p class="text ">

                        Постоянное информационно-пропагандистское обеспечение нашей деятельности позволяет выполнять важные задания по разработке модели развития. Равным образом консультация с широким активом требуют определения и уточнения модели развития.
                    </p>
                    <p class="text ">
                        Повседневная практика показывает, что реализация намеченных плановых заданий в значительной степени обуславливает создание модели развития. Товарищи! консультация с широким активом позволяет выполнять важные задания по разработке систем массового участия.
                        Равным образом постоянный количественный рост и сфера нашей активности играет важную роль в формировании системы обучения кадров, соответствует насущным потребностям.

                    </p>
                </div>

            </div>
        </section>
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
                            <p class="title">Друзья Signy</p>
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
                            <p class="title">Друзья Signy</p>
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
                            <p class="title">Друзья Signy</p>
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
                        <input type="email" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="col-auto">
                        <button class="btn rounded-pill btn-blue" type="button">отправить</button>
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
    <!-- End Links Section -->

    </footer>


    <!-- bootstrap js file -->
    <script type="text/javascript " src="./assets/vendor/bootstrap/js/bootstrap.min.js "></script>
</body>

</html>