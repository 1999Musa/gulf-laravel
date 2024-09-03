<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Copy Project</title>
    <link rel="stylesheet" href="/css/bootstrap-reboot.min.css">

    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<style>
    /* .hover-effect {
        transition: transform 0.3s ease, filter 0.3s ease;
    }

    .hover-effect:hover {
        transform: translate(-10px);
        filter: brightness(70%);
        cursor: pointer;
    }

    .zoom:hover {
        transform: scale(1.1);
        transition: transform 0.5s ease; 
    } */


    .zoom {
        transition: transform 0.5s ease;
    }

    .zoom:hover {
        transform: scale(1.1);
        cursor: pointer;
    }

    .hover-effect {
        transition: transform 0.5s ease;
    }

    .hover-effect:hover {
        animation: moveUpDown 1s ease infinite alternate;
    }


    @keyframes moveUpDown {
        0% {
            transform: translateY(0);
        }

        100% {
            transform: translateY(-20px);

        }
    }


    .progress {
        position: relative;
        margin: 5px;
        float: left;
        text-align: center;
        height: 50px;
    }

    .barOverflow {
        /* Wraping the rotating .bar */
        position: relative;
        overflow: hidden;

        width: 90px;
        height: 45px;
        /* Half circle (overflow) */
        margin-bottom: -14px;
    }

    .bar {
        position: absolute;
        top: 0;
        left: 0;
        width: 90px;
        height: 90px;
        /* full circle! */
        border-radius: 50%;
        box-sizing: border-box;
        border: 5px solid #eee;
        border-bottom-color: #0bf;
        border-right-color: #0bf;
    }
</style>




<body>
    <!-- <div class="container-fluid  pt-1.5 pl-5 d-flex" style="background-color: #004a80;"> -->
    <nav id="navbar" class="navbar navbar-expand-lg has-top-bar hover-line-center smart-scroll scheme-2 primary"
        style="background-color:  #004a80;">
        <div class=" container-fluid" style="background-color: #004a80;">

            <!-- left side panel of top navbar -->

            <div class="container-fluid">
                <div class="nav-top">
                    <ul class="nav ">
                        <li class="nav-item d-flex">
                            <a href="#" class="nav-link has-icon has-text">
                                <i class="fa-solid fa-location-dot icon" style="color: white;"></i>
                                <span class="text" style="color: white;">Hafr Al Batin</span>
                            </a>

                            <a class="nav-link has-icon" href="https://wa.me/+966597216666?text=السلام عليكم..."
                                style="color: white;"> <i class="fa-brands fa-whatsapp fa-lg" style="color: white;">
                                </i></a>

                            <a class=" nav-link has-icon"
                                href="https://twitter.com/gulfcolleges?s=1t=QwiyXFXbeA9VVKwWbrIsOA"
                                style="color: white;">
                                <i class=" fa-brands fa-twitter" style="color: white;"> </i>
                            </a>


                            <a class=" nav-link has-icon"
                                href="https://instagram.com/gulfcolleges1?igshid=NTc4MTIwNjQ2YQ=="
                                style="color: white;">
                                <i class="fa-brands fa-instagramfa-brands fa-instagram" style="color: white;">
                                </i>
                            </a>


                            <a class="nav-link has-icon"
                                href="https://www.linkedin.com/company/%D9%83%D9%84%D9%8A%D8%A7%D8%AA-%D8%A7%D9%84%D8%AE%D9%84%D9%8A%D8%AC-gulfcolleges/"
                                style="color: white;">
                                <i class="fa-brands fa-linkedin" style="color: white;">
                                </i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


        <!-- rigght panel of top naavbar -->

        <div class="navbar-right">
            <ul id="menu-shock-language-switcher" class="navbar-nav language-switcher">
                <li class="nav-item  d-flex">
                    <a href="mailto:info@gulf.edu.sa" class="nav-link has-icon has-text">
                        <i class="fa-solid fa-envelope icon" style="color: white;"></i>
                        <span class="text" style="color: white;">Email: info@gulf.edu.sa </span>
                    </a>
                </li>
                <a href="#" class="nav-link has-icon has-text">
                    <!-- <img class="image-icon dropdown-icon" src="../assets/svg/gb-ukm.svg" alt="Icon name" data-shock-icon="32" style="width:20px;height:20px;" />&nbsp; -->
                    <form method="post" action="">
                        <select name="language" onchange="this.form.submit()"
                            style="background: none; border: none; color: white;">
                            <option style="color: black;" value="en" selected="selected"> English</option>
                            <option style="color: black;" value="ar"> العربية</option>
                            <option style="color: black;" value="ar"> Bangla</option>
                            <!-- add language editing this tag <option style="color: black;" value="ar"> العربية</option>-->
                        </select>
                    </form>
                    &nbsp; <i class="fa-solid fa-earth-americas icon" style="color: white;"></i>
                </a>
            </ul>
        </div>
    </nav>

    <!-- second navbar -->
    <nav class="container navbar navbar-expand-lg" style="background-color: #006680;">
        <div class="navbar-nav collapse navbar-collapse focus-trigger align-items-right">
            <a class="navbar-brand" href="#">
                <img class="p-3 img-fluid navbar-brand"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTOkgkETvwmSNgV4MhxLgYeS73psw2gkvb-gg&s"
                    alt="Logo" width="180px" height="150px">
            </a>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    About
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Admission
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Programs
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    E-Service
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Scientific Reasearch
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button data-bs-toggle=" dropdown
                    aria-expanded="false">
                    Gates
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>

            </li>
            <!-- search button will be here, should be responsive -->

            <i class="fa-solid fa-magnifying-glass"></i>
        </div>
    </nav>
    <!-- </div> -->
    <div class="row">
        <div class="col-6 d-flex bg-light rounded-1 align-items-center p-5 mb-5">
            <img class="p-3 img-fluid"
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSK5mjq8NUq6a1IjVTlRctpQDrCgbdjHW44sw&s "
                alt="Logo">
        </div>

        <div class="col-6 d-flex bg-light rounded-1 align-items-center p-5 mb-5">
            <div class="text-start">
                <h1>GULF COLLEGE</h1>
                <p class="text-xxl-end">
                    Center aligned text on all viewport sizes.The Gulf College was established in September 2016 in the
                    city of Hafr Al-Batin in thenortheast of the Kingdom of Saudi Arabia. Bachelor’s degrees are offered
                    in four programs in the areas Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto, nemo?
                </p>
                <div class="btn">
                    <button type="button" class="btn btn-primary btn-sm">Register Now <i
                            class="fa-solid fa-arrow-right"></i></button>

                </div>
            </div>

        </div>
    </div>

    <!-- here the next phase aafter navbar starts -->
    <div class="container ">
        <div class="row ">
            <div class="bg-light m-3 col 4 rounded-1 ">
                <a class="fa-solid fa-book"></a>
                <span class="fs-5 fw-semibold text-end">Graduate Studies <br> <br></span>
                <p>Gulf College introduces a Master's program (Public Law - Private Law) with exceptional admission
                    requirements.</p>
                <div class="btn">
                    <button type="button" class="btn btn-sm">More <i class="fa-solid fa-arrow-right"></i></button>
                </div>
            </div>
            <div class="bg-light m-3 col 4 rounded-1">
                <a class="fa-solid fa-user-graduate"></a>
                <span class="fs-5 fw-semibold text-end">Bachelor's programs <br><br></span>
                <p>
                    Gulf College introduces a variety of outstanding Bachelor's programs.
                </p>
                <div class="btn">
                    <button type="button" class="btn btn-sm">More <i class="fa-solid fa-arrow-right"></i></button>
                </div>
            </div>

            <div class="bg-light m-3 col 4 rounded-1">
                <a class="fa-solid fa-user-graduate"></a>
                <span class="fs-5 fw-semibold text-end">Diploma Programs <br><br></span>
                <p class="text-xxl-end">
                    Gulf College introduces a variety of outstanding diploma programs in partnership with other
                    universities.
                </p>
                <div class="btn">
                    <button type="button" class="btn btn-sm"> More
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>



    <!-- aabout college button are in this phase -->
    <div class="container">
    <div class="horizontal-tab scheme-1 primary">
        <ul class="nav nav-tabs ">
            <li class="nav-item ">
                <a class="nav-link active d-flex align-items-center" id="about-tab" data-bs-toggle="tab" href="#about" >
                    
                    <i class="fa-solid fa-building-columns" style="margin-right: 8px; color: #0072adbf;"></i>
                    <span class="fs-5 fw-bold text-black-50">About College</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link d-flex align-items-center" id="vision-tab" data-bs-toggle="tab" href="#vision" role="tab">
                    <i class="fa-solid fa-bullseye" style="margin-right: 8px; color: #0072adbf;"></i>
                    <span class="fs-5 fw-semibold " style="color:#413f3f;">College Vision</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link d-flex align-items-center" id="mission-tab" data-bs-toggle="tab" href="#mission" >
                    
                    <i class="fa-regular fa-message" style="margin-right: 8px; color: #0072adbf;"></i>
                    <span class="fs-5 fw-semibold text-black-50">College Mission</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link d-flex align-items-center" id="obj-tab" data-bs-toggle="tab" href="#obj" >
                    
                    <i class="fa-regular fa-square-check" style="margin-right: 8px; color: #0072adbf;"></i>
                    <span class="fs-5 fw-semibold text-black-50">College Objectives</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link d-flex align-items-center" id="value-tab" data-bs-toggle="tab" href="#value" >
                    
                    <i class="fa-solid fa-thumbtack" style="margin-right: 8px; color: #0072adbf;"></i>
                    <span class="fs-5 fw-semibold text-black-50">About Values</span>
                </a>
            </li>
        </ul>
    </div>

    <!-- Tab Content details are here-->
    <div class="tab-content mt-4">
        <!-- About College -->
        <div class="tab-pane fade show active" id="about" role="tabpanel">
            <div class="text-color black text-center">
                <mark class="animated-underline primary-55">
                    <h3><i class="fa-solid fa-building-columns icon" style="color: #0072adbf;"></i>&nbsp;About College</h3>
                </mark>
                <br><br>
                <p class="text-color black">
                    The Gulf College was established in September 2016 in the city of
                    <mark class="animated-underline primary-30">Hafr Al-Batin</mark>
                    in the northeast of the Kingdom of Saudi Arabia. Bachelor’s degrees are offered in four
                    programs in the areas of Law, Information Technology, Business Administration, and English
                    Language. The College is
                    <mark class="animated-underline primary-30">licensed</mark>
                    by the Ministry of Education and their programs are
                    <mark class="animated-underline primary-30">classified</mark>
                    by the Ministry of Human Resources and Social Development.
                </p>
            </div>
            <div class="d-flex justify-content-between">
                <img class="img-fluid hover-effect" src="https://gulf.edu.sa/assets/images/jpg/gulf6.jpeg" alt="" style="width: 250px; height: auto; margin-right: 40px;">
                <img class="img-fluid hover-effect" src="https://gulf.edu.sa/assets/images/jpg/gulf2.jpg" alt="" style="width: 450px; height: auto; margin-right: 40px;">
                <img class="img-fluid hover-effect" src="https://gulf.edu.sa/assets/images/jpg/gulf5.jpg" alt="" style="width: 250px; height: auto; margin-right: 0px;">
            </div>
        </div>

        <!-- College Vision -->
        <div class="tab-pane fade" id="vision" role="tabpanel">
            <div class="text-color black text-center">
                <mark class="animated-underline primary-55">
                    <h3><i class="fa-solid fa-bullseye" style="color: #0072adbf;"></i>&nbsp;College Vision</h3>
                </mark>
                <br><br>
                <p class="text-color black">The Gulf College was established in September 2016 in the city of</p>
            </div>
            <div class="d-flex justify-content-between">
                <img class="img-fluid hover-effect" src="https://images.pexels.com/photos/409696/pexels-photo-409696.jpeg?cs=srgb&dl=pexels-karoldach-409696.jpg&fm=jpg" alt="" style="width: 300px; height: auto; margin-right: 40px;">
                <img class="img-fluid hover-effect" src="https://gulf.edu.sa/assets/images/jpg/gulf2.jpg" alt="" style="width: 450px; height: auto; margin-right: 40px;">
                <img class="img-fluid hover-effect" src="https://gulf.edu.sa/assets/images/jpg/gulf5.jpg" alt="" style="width: 300px; height: auto; margin-right: 0px;">
            </div>
        </div>

        <!-- College Mission -->
        <div class="tab-pane fade" id="mission" role="tabpanel">
            <div class="text-color black text-center">
                <mark class="animated-underline primary-55">
                    <h3><i class="fa-regular fa-message" style="color: #0072adbf;"></i>&nbsp;College Mission</h3>
                </mark>
                <br><br>
                <p class="text-color black">The Gulf College was established in September 2016 in the city of</p>
            </div>
            <div class="d-flex justify-content-between">
                <img class="img-fluid hover-effect" src="https://cdn.pixabay.com/photo/2016/02/27/18/07/clover-1225988_640.jpg" alt="" style="width: 300px; height: auto; margin-right: 40px;">
                <img class="img-fluid hover-effect" src="https://cdn.pixabay.com/photo/2016/02/27/18/07/clover-1225988_640.jpg" alt="" style="width: 450px; height: auto; margin-right: 40px;">
                <img class="img-fluid hover-effect" src="https://cdn.pixabay.com/photo/2016/02/27/18/07/clover-1225988_640.jpg" alt="" style="width: 300px; height: auto; margin-right: 0px;">
            </div>
        </div>

        <!-- College Objective -->
        <div class="tab-pane fade" id="obj" role="tabpanel">
            <div class="text-color black text-center">
                <mark class="animated-underline primary-55">
                    <h3><i class="fa-regular fa-square-check" style="color: #0072adbf;"></i>&nbsp;College Objective</h3>
                </mark>
                <br><br>
                <p class="text-color black">The Gulf College was established in September 2016 in the city of</p>
            </div>
            <div class="d-flex justify-content-between">
                <img class="img-fluid hover-effect" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSLw5jwi3ND49t_k2t-8hyWsZrazqXX0BmQmg&s" alt="" style="width: 300px; height: auto; margin-right: 40px;">
                <img class="img-fluid hover-effect" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSLw5jwi3ND49t_k2t-8hyWsZrazqXX0BmQmg&s" alt="" style="width: 450px; height: auto; margin-right: 40px;">
                <img class="img-fluid hover-effect" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSLw5jwi3ND49t_k2t-8hyWsZrazqXX0BmQmg&s" alt="" style="width: 300px; height: auto; margin-right: 0px;">
            </div>
        </div>

        <!-- About Values -->
        <div class="tab-pane fade" id="value" role="tabpanel">
            <div class="text-color black text-center">
                <mark class="animated-underline primary-55">
                    <h3><i class="fa-solid fa-thumbtack" style="color: #0072adbf;"></i>&nbsp;About Values</h3>
                </mark>
                <br><br>
                <p class="text-color black">The Gulf College was established in September 2016 in the city of</p>
            </div>
            <div class="d-flex justify-content-between">
                <img class="img-fluid hover-effect" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSr5g0NvsStAjFkGuVxiaw7KjSiq4NzPAy8uA&s" alt="" style="width: 300px; height: auto; margin-right: 40px;">
                <img class="img-fluid hover-effect" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSr5g0NvsStAjFkGuVxiaw7KjSiq4NzPAy8uA&s" alt="" style="width: 450px; height: auto; margin-right: 40px;">
                <img class="img-fluid hover-effect" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSr5g0NvsStAjFkGuVxiaw7KjSiq4NzPAy8uA&s" alt="" style="width: 300px; height: auto; margin-right: 0px;">
            </div>
        </div>
    </div>
</div>

    <!-- progressbar -->

    <div class="container">
        <div class="progress">
            <div class="barOverflow">
                <div class="bar"></div>
            </div>
            <span>80</span>%
        </div>
        <div class="progress">
            <div class="barOverflow">
                <div class="bar"></div>
            </div>
            <span>80</span>%
        </div>
        <div class="progress">
            <div class="barOverflow">
                <div class="bar"></div>
            </div>
            <span>80</span>%
        </div>
    </div>


    <!-- news section starts here -->

    <div class="container ">
        <div class="text-center ">
            <br> <br>
            <span class=" fw-bold" style="font-size: 40px;">NEWS</span>
        </div>
        <div class="d-flex justify-content-center pt-5 pb-5">
            <div class="d-flex hover-effect">
                <!-- first news of ffrst coloumn -->
                <div class="news1">
                    <img class="img-fluid border zoom"
                        src="https://gulf.edu.sa/assets/upload_news/8-file1-Fu9y7MJXwAEDbbl.jpeg" alt=""
                        style="width: 250px; height: auto; margin-right:0px;">
                </div>
                <div class="text-center bg-light border" style="width: 350px; height: auto; margin-right:50px;">
                    <span class="text-center">NEWS 1</span>
                </div>
            </div>

            <!-- third news in second coloumn -->
            <div class="d-flex">
                <div class="news2">
                    <img class="img-fluid border zoom"
                        src="https://gulf.edu.sa/assets/upload_news/47-file1-GUScvfzWMAADiav.jpg" alt=""
                        style="width: 250px; height: auto; margin-right:-20px;">
                </div>
                <div class="text-center bg-light border" style="width: 350px; height: 250; margin-right:10px;">
                    <span class="text-center">News 2</span>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center pt-4 pb-4">
            <div class="d-flex ">
                <div class="news1">
                    <img class="img-fluid border zoom"
                        src="https://gulf.edu.sa/assets/upload_news/45-file1-aa1d1987-14b4-4aa7-9167-b2924d655cb0.jpg"
                        alt="" style="width: 250px; height: auto; margin-right:0px;">
                </div>
                <div class="text-center bg-light border" style="width: 350px; height: auto; margin-right:50px;">
                    <span class="text-center">NEWS 3</span>
                </div>
            </div>

            <!-- fourth news in second coloumn -->
            <div class="d-flex">
                <div class="news2">
                    <img class="img-fluid border zoom" src="https://gulf.edu.sa/assets/upload_news/44-file1-ddcef58.jpg"
                        alt="" style="width: 250px; height: auto; margin-right:-20px;">
                </div>

                <div class="text-center bg-light border" style="width: 350px; height:auto; margin-right:10px">
                    <span class="text-center">News 4</span>
                </div>
            </div>
        </div>

        <div class="mt-4 text-center">
            <button type="button" class="btn mt-3  btn-primary rounded button-collision btn-lg">
                <span class="button-text white primary-hover">More News</span>
                <i class="fa-solid fa-arrow-right button-icon white primary-hover"></i>
            </button>
        </div>
    </div>


    <!-- ACTIVITIES -->


    <div class="container ">
        <div class="text-center ">
            <br> <br>
            <span class=" fw-bold" style="font-size: 40px;">ACTIVITIES</span>
        </div>
        <div class="d-flex justify-content-center pt-5 pb-5">
            <div class="d-flex hover-effect">
                <!-- first activities in fffirst coloumn -->
                <div class="activities 1 zoom">
                    <img class="img-fluid border hover-effect"
                        src="https://gulf.edu.sa/assets/upload_active/112-file1-GVVxRdiWYAAwy-W.jpg" alt=""
                        style="width: 250px; height: auto; margin-right:0px;">
                </div>
                <div class="text-center bg-light border" style="width: 350px; height: auto; margin-right:50px;">
                    <span class="text-center">NEWS 1</span>
                </div>
            </div>

            <!-- seconnd activities in ffffirst coloumn -->
            <div class="d-flex">
                <div class="activities zoom">
                    <img class="img-fluid border  hover-effect"
                        src="https://gulf.edu.sa/assets/upload_active/112-file1-GVVxRdiWYAAwy-W.jpg" alt=""
                        style="width: 250px; height: auto; margin-right:-20px;">
                </div>
                <div class="text-center bg-light border" style="width: 350px; height: 250; margin-right:10px;">
                    <span class="text-center">News 2</span>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center pt-4 pb-4">
            <div class="d-flex ">
                <!-- third activities in second coloumn -->
                <div class="activities zoom">
                    <img class="img-fluid border  hover-effect"
                        src="https://gulf.edu.sa/assets/upload_active/112-file1-GVVxRdiWYAAwy-W.jpg" alt=""
                        style="width: 250px; height: auto; margin-right:0px;">
                </div>
                <div class="text-center bg-light border" style="width: 350px; height: auto; margin-right:50px;">
                    <span class="text-center">NEWS 3</span>
                </div>
            </div>

            <!-- fourth activities in second coloumn -->
            <div class="d-flex">
                <div class="activities zoom">
                    <img class="img-fluid border  hover-effect"
                        src="https://gulf.edu.sa/assets/upload_active/112-file1-GVVxRdiWYAAwy-W.jpg" alt=""
                        style="width: 250px; height: auto; margin-right:-20px;">
                </div>

                <div class="text-center bg-light border" style="width: 350px; height:auto; margin-right:10px">
                    <span class="text-center">News 4</span>
                </div>
            </div>
        </div>

        <div class="mt-4 text-center">
            <button type="button" class="btn mt-3  btn-primary rounded button-collision btn-lg">
                <span class="button-text white primary-hover">More News</span>
                <i class="fa-solid fa-arrow-right button-icon white primary-hover"></i>
            </button>
        </div>
    </div>

    <div class="container">
        <div class="text-center">
            <br><br><br>
            <span class=" fw-bold" style="font-size: 40px;">MEMBERSHIPS & PARTNERSHIPS</span>
        </div>

        <div class="container mt-5">
    <div class="">
        <!-- Carousel -->
        <div id="imageCarousel" class="carousel slide" data-bs-ride="false">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="0" class="active bg-success rounded-circle"></button>
                <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="1" class="bg-success rounded-circle"></button>
                <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="2" class="bg-success rounded-circle"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="https://gulf.edu.sa/assets/images/png/a-7.png" class="img-fluid rounded" style="border-radius: 20px; width: auto; height: 20%;" alt="Image 1">
                        </div>
                        <div class="col-md-4">
                            <img src="https://gulf.edu.sa/assets/images/png/a-6.png" class="img-fluid rounded" style="border-radius: 20px; width: auto; height: 20%;" alt="Image 2">
                        </div>
                        <div class="col-md-4">
                            <img src="https://gulf.edu.sa/assets/images/png/a-5.png" class="img-fluid rounded" style="border-radius: 20px; width: auto; height: 20%;" alt="Image 3">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="https://gulf.edu.sa/assets/images/png/a-4.png" class="img-fluid rounded" style="border-radius: 20px; width: auto; height: 20%;" alt="Image 4">
                        </div>
                        <div class="col-md-4">
                            <img src="https://gulf.edu.sa/assets/images/png/a-3.png" class="img-fluid rounded" style="border-radius: 20px; width: auto; height: 20%;" alt="Image 5">
                        </div>
                        <div class="col-md-4">
                            <img src="https://gulf.edu.sa/assets/images/png/a-2.png" class="img-fluid rounded" style="border-radius: 20px; width: auto; height: 20%;" alt="Image 6">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="https://gulf.edu.sa/assets/images/png/a-1.png" class="img-fluid rounded" style="border-radius: 20px; width: auto; height: auto;" alt="Image 7">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev bg-success" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next bg-success" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>
</div>



    <div class="container">
        <div class="text-center fw-bold text-color black" style="font-size: 40px;">
            <br><br><br>
            <mark class="animated-underline when-hover ">VIRTUAL TOUR</mark>
        </div>


        <!-- Carousel starts from  here -->

        <div class="container mt-5">
            <div class="container">
                <!-- Carousel -->
                <div id="videoCarousel" class="carousel slide" data-bs-ride="false">

                    <!-- Indicators/dots -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#videoCarousel" data-bs-slide-to="0"
                            class="active bg-warning rounded-circle"></button>
                        <button type="button" data-bs-target="#videoCarousel" data-bs-slide-to="1"
                            class="bg-warning rounded-circle"></button>
                        <button type="button" data-bs-target="#videoCarousel" data-bs-slide-to="2"
                            class="bg-warning rounded-circle"></button>
                    </div>


                    <!-- The slideshow/carousel -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-4">
                                    <video class="img-fluid rounded" style="border-radius: 20px; width: 100%;" controls
                                        onclick="this.play()">
                                        <source src="video1.mp4" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                                <div class="col-md-4">
                                    <video class="img-fluid rounded" style="border-radius: 20px; width: 100%;" controls
                                        onclick="this.play()">
                                        <source src="video2.mp4" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                                <div class="col-md-4">
                                    <video class="img-fluid rounded" style="border-radius: 20px; width: 100%;" controls
                                        onclick="this.play()">
                                        <source src="video3.mp4" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <video class="img-fluid rounded" style="border-radius: 20px; width: 100%;" controls
                                        onclick="this.play()">
                                        <source src="video4.mp4" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                                <div class="col-md-4">
                                    <video class="img-fluid rounded" style="border-radius: 20px; width: 100%;" controls
                                        onclick="this.play()">
                                        <source src="video5.mp4" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                                <div class="col-md-4">
                                    <video class="img-fluid rounded" style="border-radius: 20px; width: 100%;" controls
                                        onclick="this.play()">
                                        <source src="video6.mp4" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <video class="img-fluid rounded" style="border-radius: 20px; width: 100%;" controls
                                        onclick="this.play()">
                                        <source src="video7.mp4" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                                <div class="col-md-4">
                                    <video class="img-fluid rounded" style="border-radius: 20px; width: 100%;" controls
                                        onclick="this.play()">
                                        <source src="video8.mp4" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                                <div class="col-md-4">
                                    <video class="img-fluid rounded" style="border-radius: 20px; width: 100%;" controls
                                        onclick="this.play()">
                                        <source src="video9.mp4" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Left and right controls/icons -->
                    <button class="carousel-control-prev " type="button" data-bs-target="#videoCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next " type="button" data-bs-target="#videoCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>
        </div>




        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
            </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
            integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
            </script>
        <script src="../assets/js/vendor/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>

        <!-- Main JavaScript -->
        <script src="../assets/js/mainx.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


        <!-- my custom JavaScript -->
        <script>
            $(".progress").each(function () {
                var $bar = $(this).find(".bar");
                var $val = $(this).find("span");
                var perc = parseInt($val.text(), 10);

                $({ p: 0 }).animate({ p: perc }, {
                    duration: 3000,
                    easing: "swing",
                    step: function (p) {
                        $bar.css({
                            transform: "rotate(" + (45 + (p * 1.8)) + "deg)", // 100%=180° so: ° = % * 1.8
                            // 45 is to add the needed rotation to have the green borders at the bottom
                        });
                        $val.text(Math.round(p)); // Use Math.round() to avoid decimals
                    }
                });
            });
        </script>
</body>

</html>

<!-- $primary:       $blue;
$secondary:     $gray-600;
$success:       $green;
$info:          $cyan;
$warning:       $yellow;
$danger:        $red;
$light:         $gray-100;
$dark:          $gray-900; -->