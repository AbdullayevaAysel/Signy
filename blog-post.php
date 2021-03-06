<?php 
    include 'include/header.php';
?>

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
                                        <a href="./about.php" class="nav-link">?????? ?????? </a>
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-solid fa-chevron-down"></i>
                                        </a>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                                        <li><a class="dropdown-item" href="./blog.php">????????</a></li>
                                        <li><a class="dropdown-item" href="./video.php">??????????</a></li>
                                        <li><a class="dropdown-item" href="./questions.php">??????????????</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">????????</a>
                                </li>
                                <li class="nav-item">
                                    <a href="./contact.php" class="nav-link">????????????????</a>
                                </li>
                            </div>
                            <div class="d-flex buttons">
                                <button class="btn rounded-pill btn-outline-blue" type="button">????????</button>
                                <button class="btn rounded-pill btn-blue" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">??????????????????????</button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header text-center">
                                                <h5 class="modal-title w-100" id="exampleModalLabel">???????? ????????????</h5>
                                                <i class="fa-solid fa-xmark" data-bs-dismiss="modal" aria-label="Close"></i>
                                            </div>
                                            <div class="modal-body">
                                                <p class="text text-center">
                                                    ?????????????? ?????????? ?? ???????? ?????????????????? ???????????????? ?? ??????????
                                                </p>
                                                <form>
                                                    <div>
                                                        <label for="exampleInputName" class="form-label">??????*:</label>
                                                        <input type="text" class="form-control" id="exampleInputName" placeholder="????????">
                                                    </div>
                                                    <div>
                                                        <label for="exampleInputEmail1" class="form-label">?????????????????????? ??????????*:</label>
                                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="ivan@mail.com">
                                                    </div>
                                                    <div>
                                                        <label for="exampleInputPhone" class="form-label">??????????????*:</label>
                                                        <input type="tel" class="form-control" id="exampleInputPhone" placeholder="+38 000 000 00 00">
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer justify-content-center">
                                                <button type="submit" class="btn rounded-pill btn-blue">??????????????????</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <li class="nav-item dropdown language">
                            <a class="nav-link dropdown-toggle d-flex align-items-center text-uppercase" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                ?????? 
                                <i class="fa-solid fa-chevron-down"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li><a class="dropdown-item text-uppercase " href="#">??????</a></li>
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
                    <li class="breadcrumb-item active" aria-current="page">????????</li>
                    <li class="breadcrumb-item active" aria-current="page">???????????????? ????????????</li>
                </ol>
            </div>
        </nav>
        <section id="blog-section-1">
            <div class="container">
                <p class="title">???????????????? ????????????</p>
                <span class="date">28.05.2020</span>
                <span class="badge rounded-pill bg-gray">?????? ??????????????</span>
                <span class="badge rounded-pill bg-gray">????????</span>
                <span class="badge rounded-pill bg-gray">?????????? ??????????</span>
                <div class="row">
                    <div class="col-lg-6">
                        <p class="text">
                            Luxury is something everyone deserves from time to time. Such an indulgence can make a vacation a truly rejuvenating experience. One of the best ways to get the luxury of the rich and famous to fit into your budget can be yours through yacht charter companies.
                            These companies specialize in creating custom sailing vacations that redefine travel.
                        </p>
                        <p class="text">
                            Planning Your Luxury Trip
                        </p>
                        <p class="text">
                            With your budget in mind, it is easy to plan a chartered yacht vacation. Companies often have a fleet of sailing vessels that can accommodate parties of various sizes. You may want to make it a more intimate trip with only close family. There are charters
                            that can be rented for as few as two people. These include either a sailboat or motorboat and can come with or without a crew and captain to sail the ship for you. If you choose not to hire a crew, you will have to show that
                            you are knowledgeable of sailing and can handle the ship competently.
                        </p>
                        <p class="text">
                            The next part of planning is to determine your starting and ending ports. This could be a place close to home and sail in one area or start and finish at two different ports. Generally, starting and stopping in the same port will save you money and is
                            usually more convenient. You can also fly to a destination far from home and then sail another exotic sea. There are luxury yacht charter companies that cruise the Caribbean and Mediterranean seas or around Alaska, the Panama
                            Canal, or anyplace you can imagine.
                        </p>
                        <p class="text">
                            Determining the type of cruise is another aspect of planning a chartered yachting trip. You can have as little or many crew members as the ship will hold. A captain takes all the worries out of navigating and onboard housekeeping services make it a real
                            vacation that rivals the finest hotel services. You can also choose to have a chef and service crew as part of your vacation package.
                        </p>
                        <img src="./assets/image/Blog/img-1.png" class="img-fluid w-100" alt="">

                        <p class="text">
                            Destinations & Ports of important Charter Companies One of the greatest benefits of choosing a chartered cruise as a vacation is the choice. You will most likely have a rough itinerary and that can be affected by weather. However, you are flexible in
                            deciding how long you want to stay in a particular port and if you want to add or subtract stops along the way.
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <img src="./assets/image/Blog/img-5.png" class="img-fluid w-100" alt="">
                        <p class="text">
                            Destinations & Ports of important Charter Companies One of the greatest benefits of choosing a chartered cruise as a vacation is the choice. You will most likely have a rough itinerary and that can be affected by weather. However, you are flexible in
                            deciding how long you want to stay in a particular port and if you want to add or subtract stops along the way.
                        </p>
                        <p class="text">
                            Your yacht is your hotel that travels with you. There is only one flight and one hotel to book! Then you take all of your luggage and unpack it just once to enjoy several days of new destinations.
                        </p>
                        <p class="text">
                            If you have never experienced cruising before, a chartered experience is a great way to get your feet wet. It is different from cruise lines with thousands of guests because the people on your ship will be your friends and family. The personal touches
                            of a chartered trip will help you develop your love for the sea with all the best benefits of commercial cruises.
                        </p>
                        <p class="text">
                            If you like the idea of knowing what it is really like to sail, but don???t want to risk safety, you can charter a sailing cruise that puts you in the role of deck hand. A competent crew will direct you as to your ???chores??? for keeping the ship in top shape
                            and on course.
                        </p>
                        <p class="text">
                            Destinations & Ports of important Charter Companies One of the greatest benefits of choosing a chartered cruise as a vacation is the choice. You will most likely have a rough itinerary and that can be affected by weather. However, you are flexible in
                            deciding how long you want to stay in a particular port and if you want to add or subtract stops along the way.
                        </p>
                        <p class="text">
                            If you like the idea of knowing what it is really like to sail, but don???t want to risk safety, you can charter a sailing cruise that puts you in the role of deck hand. A competent crew will direct you as to your ???chores??? for keeping the ship in top shape
                            and on course.
                        </p>
                        <p class="text">
                            Destinations & Ports of important Charter Companies One of the greatest benefits of choosing a chartered cruise as a vacation is the choice. You will most likely have a rough itinerary and that can be affected by weather. However, you are flexible in
                            deciding how long you want to stay in a particular port and if you want to add or subtract stops along the way.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="blog-section-links">
            <div class="container">
                <p class="title text-center">
                    ??????????????????:
                </p>
                <div class="links d-flex justify-content-center">
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-linkedin-in"></i>
                    <i class="fa-brands fa-google"></i>
                    <i class="fa-brands fa-facebook-f"></i>
                </div>
                <div class="row justify-content-between w-75 m-auto">
                    <div class="col-6">
                        <p class="title">
                            ???????????????? ???????????? ?? ?????? ??????????
                        </p>
                        <p class="small-title">
                            ???????????????????? ????????????
                        </p>
                    </div>
                    <div class="col-6 text-end position-relative">
                        <p class="title blue position-absolute end-0">
                            ???????????????? ???????????? ?? ?????? ??????????
                        </p>
                        <p class="small-title position-absolute bottom-0 end-0">
                            ?????????????????? ????????????
                        </p>
                    </div>
                </div>
            </div>
        </section>

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
                        <input type="email" class="form-control" id="exampleFormControlInput1" />
                    </div>
                    <div class="col-auto">
                        <button class="btn rounded-pill btn-blue" type="button">
                            ??????????????????
                        </button>
                    </div>
                </div>
            </div>
        </form>
        <!-- End Form -->

        <!-- Links Section -->
        <section id="links" class="text-white">
            <div class="container">
                <div class="row">
                    <div class="col-8 col-xl-12 col-md-10">
                        <div class="row">
                            <div class="col-xl-3 col-md-3">
                                <img src="./assets/image/Footer-logo.png" alt="" />
                            </div>
                            <div class="col-xl-4 col-md-4">
                                <div class="row">
                                    <div class="col-xl-4 col-sm-6 d-flex flex-column">
                                        <a href="#">?????? ??????</a>
                                        <a href="#">????????</a>
                                    </div>
                                    <div class="col-xl-4 col-sm-6 d-flex flex-column">
                                        <a href="#">????????</a>
                                        <a href="#">??????????????????????</a>
                                    </div>
                                    <div class="col-xl-6 col-sm-12 d-flex flex-column">
                                        <a href="#">????????</a>
                                        <a href="#">????????????????</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-4">
                                <div class="row">
                                    <div class="col-xl-6 d-flex flex-column">
                                        <a href="mailto:abdulla2001aysel@gmail.com">infosmartsign@smarttender.biz</a>
                                        <a href="#">Facebook</a>
                                    </div>
                                    <div class="col-xl-6 d-flex flex-column opacity-8">
                                        <p>
                                            ????-?? ???????????? ????????????, 14 ?? <br /> ????????, 02072
                                        </p>
                                        <a href="#">0 800 750643</a>
                                        <a href="#">+380 44 334 56 43</a>
                                        <a href="#">+380 44 338 86 43</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-md-2 text-end top" style="display: none">
                        <img src="./assets/image/top.svg" alt="" />
                    </div>
                </div>
                <div class="row pt-4 opacity-4">
                    <div class="col-xl-3 col-sm-4">
                        <p>&copy; 2020 Signy</p>
                    </div>
                    <div class="col-xl-4 col-sm-6">
                        <div class="row">
                            <div class="col-xl-4 col-sm-6">
                                <p>?????????????? ????????????</p>
                            </div>
                            <div class="col-xl-6 col-sm-12">
                                <p>?????????????? ??????????????</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Links Section -->
    </footer>

    <!-- bootstrap js file -->
    <script type="text/javascript " src="./assets/vendor/bootstrap/js/bootstrap.min.js "></script>
</body>

</html>