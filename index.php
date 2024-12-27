<?php $page = 'home'; ?>
<?php
$courses = [
    [
        'title' => 'SSC & HSC',
        'description' => 'PVT SSC & HSC (Maharashtra, NIOS Board & International Board)',
        'image' => 'https://alfaeducation.org.in/wp-content/themes/alfa-theme/assets/images/institution.png'
    ],
    [
        'title' => 'GRADUATION',
        'description' => 'GRADUATION IN (BSc, BSc IT, BCA, BBA, BCOM, BA )',
        'image' => 'https://alfaeducation.org.in/wp-content/themes/alfa-theme/assets/images/homework.png'
    ],
    [
        'title' => 'MASTERS',
        'description' => 'MA, MSc, MBA in (Marketing, Sales, Finance, HRM, IT, Environment Management & Auditing, Project Monitoring & Evaluation, Project Management, Organizational Development, Finance Services & Secutiry Analysis, Hospitality Management, Operational Management, International Business, Supply Chain Management)',
        'image' => 'https://alfaeducation.org.in/wp-content/themes/alfa-theme/assets/images/master.png'
    ],
    [
        'title' => 'ENGINEERING COURSES',
        'description' => 'ENGINEERING COURSES (B.TECH, M.TECH, DIPLOMA IN ENGINEERING, POST GRADUATION DIPLOMA IN ENGINEERING)',
        'image' => 'https://alfaeducation.org.in/wp-content/themes/alfa-theme/assets/images/engineering.png'
    ],
    [
        'title' => 'IT COURSES',
        'description' => 'IT COURSES (BCA, MCA, M.SC IN COMPUTER SCIENCE, M.SC IT)',
        'image' => 'https://alfaeducation.org.in/wp-content/themes/alfa-theme/assets/images/programming.png'
    ],
    [
        'title' => 'MANAGEMENT COURSES',
        'description' => 'MANAGEMENT COURSES (BBA, MBA, EMBA)',
        'image' => 'https://alfaeducation.org.in/wp-content/themes/alfa-theme/assets/images/team.png'
    ]
];
?>
<?php
$unilogos = [
    'https://alfaeducation.org.in/wp-content/themes/alfa-theme/assets/images/u-logo.png',
    'https://alfaeducation.org.in/wp-content/themes/alfa-theme/assets/images/u-logo1.jpg',
    'https://alfaeducation.org.in/wp-content/themes/alfa-theme/assets/images/u-logo2.jpg',
    'https://alfaeducation.org.in/wp-content/themes/alfa-theme/assets/images/u-logo3.jpg',
    'https://alfaeducation.org.in/wp-content/themes/alfa-theme/assets/images/u-logo4.png',
    'https://alfaeducation.org.in/wp-content/themes/alfa-theme/assets/images/u-logo5.jpg',
    'https://alfaeducation.org.in/wp-content/themes/alfa-theme/assets/images/u-logo6.jpg',
    'https://alfaeducation.org.in/wp-content/themes/alfa-theme/assets/images/u-logo7.jpg',
    'https://alfaeducation.org.in/wp-content/themes/alfa-theme/assets/images/u-logo8.jpg',
    'https://alfaeducation.org.in/wp-content/themes/alfa-theme/assets/images/u-logo9.jpg',
    'https://alfaeducation.org.in/wp-content/themes/alfa-theme/assets/images/u-logo10.png'
];

$steps = [
    [
        'step' => 'Registration',
        'title' => 'Registration',
        'description' => 'Complete registration for services.'
    ],
    [
        'step' => 'Counseling on Call',
        'title' => 'Counseling on Call',
        'description' => 'Receive expert counseling via call.'
    ],
    [
        'step' => 'Course Selection Assistance',
        'title' => 'Course Selection Assistance',
        'description' => 'Get help choosing the right course.'
    ],
    [
        'step' => 'Fee Submission',
        'title' => 'Fee Submission',
        'description' => 'Submit fees to confirm registration.'
    ],
    [
        'step' => 'Document Verification',
        'title' => 'Document Verification',
        'description' => 'Verify documents for application approval.'
    ],
    [
        'step' => 'Admission Done',
        'title' => 'Admission Done',
        'description' => 'Admission successfully completed and confirmed.'
    ]
];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Alfa Education </title>
    <?php include 'include/head-links.php'; ?>
    <meta property="og:url" content="<?php echo $page_url ?>">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="images/logo.png">
    <meta name="twitter:card" content="">
    <meta name="twitter:site" content="<?php echo $page_url ?>">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="images/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>

<body onload="createCaptcha();">
    <div class="wrapper ">
        <?php include 'include/header.php'; ?>

        <div class="banner-wrapper ">
            <div class="containerFull">
                <div class="row">
                    <div class="col-lg-6 ">
                        <div class="banner-content-main">

                            <div class="banner-content">
                                <h2 class="heading fontHeading fontWeight600">
                                    Welcome to
                                </h2>
                                <h1 class="large_heading fontHeading fontWeight700 mt-2 text_primary">
                                    Alfa Education

                                </h1>



                                <p class="mt-2">
                                    Alfa Education Consultancy is a leading education consultancy in Mumbai, India. We
                                    provide expert guidance to students for pursuing their higher education abroad. We
                                    have
                                    a team of experienced professionals who provide comprehensive guidance to students
                                    for
                                    choosing the right course and university.
                                </p>

                                <p class="mt-4 fontWeight700 text_primary">
                                    Get A Fast Track Degree From An Approved University
                                </p>

                                <div class=" mt-5">
                                    <a class="btn_5" href="tel:267-645-9005">
                                        <span class=" btn_icon bg-white circle pulse">
                                            <i class="fa-solid fa-phone "></i>
                                        </span> <span>
                                            <p class="btn_letterspacing ">
                                                Contact with us
                                            </p>
                                            <h4 class="fontWeight700">
                                                267-645-9005
                                            </h4>
                                        </span> &nbsp;</a>
                                </div>



                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6 ">
                        <div class="bannerForm_main">
                            <form action="" class="bg-white bannerForm shadow">
                                <div class=" p-4 bg_primary text-white ">
                                    <h4 class="fontHeading fontWeight700">
                                        Speak To A Our Expert
                                    </h4>
                                    <p class="mt-1 text-white-50">
                                        Tell us about course!
                                    </p>
                                </div>
                                <div class="px-4 py-4">
                                    <div class="form-floating mb-3">
                                        <input type="tel" class="form-control" id="floatingName" placeholder="Name">
                                        <label for="floatingName">Name</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="floatingInput"
                                            placeholder="name@example.com">
                                        <label for="floatingInput">Email address</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="tel" class="form-control" id="floatingPassword"
                                            placeholder="Phone No.">
                                        <label for="floatingPassword">Phone No.</label>
                                    </div>
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here"
                                            style="height: 100px" id="floatingTextarea"></textarea>
                                        <label for="floatingTextarea">Message</label>
                                    </div>
                                    <button class="btn btn_6 fontHeading w-100 py-3 mt-3  " type="submit">
                                        Speak To A Consultant
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="about-section">
            <div class="containerFull">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="img_box">
                            <img src="images/about-1.jpg" alt="">

                            <div class="experience_box">
                                <h4>
                                    12+
                                </h4>
                                <p>
                                    Year of<br />
                                    Experience
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6 ps-5">
                        <h4 class="heading fontHeading fontWeight600 h_underline">
                            About Alfa Education Consultancy
                        </h4>
                        <p class="mt-5  ">
                            Alfa Education Consultancy is a leading education consultancy in Mumbai, India. We
                            provide expert guidance to students for pursuing their higher education abroad. We
                            have
                            a team of experienced professionals who provide comprehensive guidance to students
                            for
                            choosing the right course and university.

                        </p>
                        <div class="mt-5">

                            <a class="btn_5" href="tel:267-645-9005">
                                <span class=" btn_icon bg-white circle pulse">
                                    <i class="fa-solid fa-phone "></i>
                                </span> <span>
                                    <p class="btn_letterspacing ">
                                        Contact with us
                                    </p>
                                    <h4 class="fontWeight700">
                                        267-645-9005
                                    </h4>
                                </span> &nbsp;</a>

                            <a href="#" class="btn_6 ">
                                KNow More
                            </a>




                        </div>

                    </div>

                </div>

            </div>
        </section>

        <section class="info-section">
            <div class="containerFull">
                <ul>
                    <li>
                        <div class="img_box">
                            <img src="images/icons/university (1).png" alt="Universities">
                        </div>
                        <p> <span class="fontHeading fontWeight700">40+</span> <br> Universities</p>
                    </li>
                    <li>
                        <div class="img_box">
                            <img src="images/icons/graduation-hat.png" alt="Graduates">
                        </div>
                        <p><span class="fontHeading fontWeight700">
                                10,000+
                            </span><br> Graduates</p>
                    </li>
                    <li>
                        <div class="img_box">
                            <img src="images/icons/execution.png" alt="Courses">
                        </div>
                        <p> <span class="fontHeading fontWeight700">720+</span>
                            <br> Courses
                        </p>
                    </li>
                    <li>
                        <div class="img_box">
                            <img src="images/icons/experience.png" alt="Years of Experience">
                        </div>
                        <p><span class="fontHeading fontWeight700">12+</span> Years <br> of Experience</p>
                    </li>
                </ul>

            </div>
        </section>


        <section class="form-section">
            <div class="containerFull">
                <div class="row">
                    <div class="col-lg-7 pe-5">

                        <h4 class="heading fontHeading fontWeight600 h_underline text-white">
                            Let Our Team reach out to you
                        </h4>
                        <form action="" class="  mt-5">

                            <div class="form_grid">
                                <div class="form-floating mb-3">
                                    <input type="tel" class="form-control" id="floatingFName" placeholder="Name">
                                    <label for="floatingFName">First Name</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="tel" class="form-control" id="floatingLName" placeholder="Name">
                                    <label for="floatingLName">Last Name</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInput"
                                        placeholder="name@example.com">
                                    <label for="floatingInput">Email address</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="tel" class="form-control" id="floatingPassword"
                                        placeholder="Phone No.">
                                    <label for="floatingPassword">Phone No.</label>
                                </div>


                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="course" placeholder="Phone No.">
                                <label for="course">Course</label>
                            </div>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a message here" style="height: 100px"
                                    id="floatingTextarea"></textarea>
                                <label for="floatingTextarea">Message</label>
                            </div>

                            <button class="btn btn_3 d-inline-block  fontHeading w-100 py-3 mt-4  " type="submit">
                                Speak To A Consultant
                            </button>



                        </form>

                    </div>
                    <div class="col-lg-5">
                        <div class="img_box">
                            <img src="images/education.jpg" alt="">
                        </div>

                    </div>

                </div>
            </div>
        </section>
        <section class="programs_sec">
            <div class="containerFull">
                <div class="row">

                    <!-- <div class="col-lg-6 ">
                        <div class="img_box left_img">
                            <img src="images/graduation-concept-with-students-holding-blank-certificate-template_23-2148201847.jpg"
                                alt="">
                        </div>

                    </div> -->
                    <div class="col-lg-12 ps-5">
                        <h4 class="heading fontHeading fontWeight600 h_underline ">
                            Programs & Courses Offered
                        </h4>
                        <p class="mt-5">
                            Our vast range of Courses that has helped students to complete their education.<br/> Our
                            Universities are UGC Recognised, AICTE Approved, DEB approved, MHRD approved.
                        </p>
                        <div class=" row mt-5">
                            <div class="col-md-4 mb-3">
                                <div class="course_box">
                                    <div class="img_box ">
                                        <img src="https://alfaeducation.org.in/wp-content/themes/alfa-theme/assets/images/institution.png"
                                            alt="SSC &amp; HSC">
                                    </div>
                                    <h4 class="text-center mt-3 fontHeading fontWeight600 title h_underline">
                                        SSC &amp; HSC </h4>
                                    <p class=" text-center mt-4">
                                        PVT SSC &amp; HSC (Maharashtra, NIOS Board &amp; International Board) </p>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="course_box">
                                    <div class="img_box ">
                                        <img src="https://alfaeducation.org.in/wp-content/themes/alfa-theme/assets/images/homework.png"
                                            alt="GRADUATION">
                                    </div>
                                    <h4 class="text-center mt-3 fontHeading fontWeight600 title h_underline">
                                        GRADUATION </h4>
                                    <p class=" text-center mt-4">
                                        GRADUATION IN (BSc, BSc IT, BCA, BBA, BCOM, BA ) </p>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="course_box">
                                    <div class="img_box ">
                                        <img src="https://alfaeducation.org.in/wp-content/themes/alfa-theme/assets/images/master.png"
                                            alt="MASTERS">
                                    </div>
                                    <h4 class="text-center mt-3 fontHeading fontWeight600 title h_underline">
                                        MASTERS </h4>
                                    <p class=" text-center mt-4">
                                        MA, MSc, MBA in (Marketing, Sales, Finance, HRM, IT, Environment Management
                                        &amp; Auditing, Project Monitoring &amp; Evaluation, Project Management,
                                        Organizational Development, Finance Services &amp; Secutiry Analysis,
                                        Hospitality Management, Operational Management, International Business, Supply
                                        Chain Management) </p>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="course_box">
                                    <div class="img_box ">
                                        <img src="https://alfaeducation.org.in/wp-content/themes/alfa-theme/assets/images/engineering.png"
                                            alt="ENGINEERING COURSES">
                                    </div>
                                    <h4 class="text-center mt-3 fontHeading fontWeight600 title h_underline">
                                        ENGINEERING COURSES </h4>
                                    <p class=" text-center mt-4">
                                        ENGINEERING COURSES (B.TECH, M.TECH, DIPLOMA IN ENGINEERING, POST GRADUATION
                                        DIPLOMA IN ENGINEERING) </p>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="course_box">
                                    <div class="img_box ">
                                        <img src="https://alfaeducation.org.in/wp-content/themes/alfa-theme/assets/images/programming.png"
                                            alt="IT COURSES">
                                    </div>
                                    <h4 class="text-center mt-3 fontHeading fontWeight600 title h_underline">
                                        IT COURSES </h4>
                                    <p class=" text-center mt-4">
                                        IT COURSES (BCA, MCA, M.SC IN COMPUTER SCIENCE, M.SC IT) </p>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="course_box">
                                    <div class="img_box ">
                                        <img src="https://alfaeducation.org.in/wp-content/themes/alfa-theme/assets/images/team.png"
                                            alt="MANAGEMENT COURSES">
                                    </div>
                                    <h4 class="text-center mt-3 fontHeading fontWeight600 title h_underline">
                                        MANAGEMENT COURSES </h4>
                                    <p class=" text-center mt-4">
                                        MANAGEMENT COURSES (BBA, MBA, EMBA) </p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section>






















        <section class="contact-details">
            <div class="containerFull">
                <div class="row">
                    <div class="col-lg-5 bg_primary p-5">
                        <h4 class="heading fontHeading text-white fontWeight600 h_underline">
                            Contact Details
                        </h4>

                        <ul class="contact_list mt-5">
                            <li>
                                <a href="tel:+91 8097044229">

                                    <div class="img_box">
                                        <i class="fa-solid fa-location-dot"></i>

                                    </div>
                                    <div class="content">
                                        <h5>
                                            Address
                                        </h5>

                                        <p>Innovative Info Park 7th Floor
                                            Gumpha Road Off Western Express Highway Jogeshwari East Mumbai 400060.</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="tel:+91 8097044229">

                                    <div class="img_box">
                                        <i class="fa-solid fa-phone"></i>

                                    </div>
                                    <div class="content">
                                        <h5>
                                            Phone
                                        </h5>

                                        <p>+91 8097044229</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="mailto:info@alfaeducation.in">

                                    <div class="img_box">
                                        <i class="fa-solid fa-envelope"></i>

                                    </div>
                                    <div class="content">
                                        <h5>
                                            Email
                                        </h5>
                                        <p>info@alfaeducation.in</p>
                                    </div>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <div class="col-lg-7">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3768.6883157584944!2d72.850434!3d19.165116!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b7ca3c1a6757%3A0xdccf93e2c3d9ff60!2sAlfa%20Education%20Consultancy!5e0!3m2!1sen!2sin!4v1735206783501!5m2!1sen!2sin"
                            height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>

                </div>

            </div>
        </section>



    </div>
    <?php include 'include/footer.php'; ?>

    </div>
    <?php include 'include/footer-links.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    <script>
        var swiper = new Swiper(".universities_slider", {
            spaceBetween: 10,
            // centeredSlides: true,
            slidesPerView: 4,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },

            // breakpoints: {

            //     320: {
            //         slidesPerView: 2,
            //         spaceBetween: 10
            //     },

            //     480: {
            //         slidesPerView: 2,
            //         spaceBetween: 20
            //     },

            //     640: {
            //         slidesPerView: 3,
            //         spaceBetween: 30
            //     },

            //     768: {
            //         slidesPerView: 4,
            //         spaceBetween: 30
            //     }
            // }
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },

            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
    <script>
        var swiper = new Swiper(".awards_slider", {
            spaceBetween: 20,
            centeredSlides: true,
            slidesPerView: 1.5,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },

            // breakpoints: {

            //     320: {
            //         slidesPerView: 1,
            //         spaceBetween: 10
            //     },

            //     480: {
            //         slidesPerView: 1,
            //         spaceBetween: 20
            //     },

            //     640: {
            //         slidesPerView: 2,
            //         spaceBetween: 30
            //     },

            //     768: {
            //         slidesPerView: 2,
            //         spaceBetween: 30
            //     }
            //     1024: {
            //         slidesPerView: 3,
            //         spaceBetween: 30
            //     }
            // }
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },

            navigation: {
                nextEl: ".next_1",
                prevEl: ".prev_1",
            },
        });
    </script>

</body>

</html>