
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MiraSchool | school Management System</title>

    <link rel="stylesheet" href="css/style.css">

</head>


<body>


<!-- =========================================
     NAVIGATION
========================================= -->

<header class="public-navbar">

    <div class="public-logo">
        <span>Mira</span>School
    </div>


    <nav>

        <a href="#home">Home</a>

        <a href="#about">About</a>

        <a href="#services">Services</a>

        <a href="#contact">Contact</a>

        <a href="dashboard.php" class="dashboard-btn">
            Dashboard
        </a>

    </nav>

</header>



<section id="home" class="hero">

    <div class="hero-content">

        <div class="hero-text">

            <span class="welcome-text">
                WELCOME TO MiraSchool
            </span>

            <h1>
                learning Made easy
                <span>Simple & Secure</span>
            </h1>

            <p>
                Your trusted learning system providing reliable,
                secure and convenient learning activties for
                individuals as student.
            </p>


            <div class="hero-buttons">

                <a href="#services" class="primary-btn">
                    Explore Our Services
                </a>

                <a href="#contact" class="secondary-btn">
                    Contact Us
                </a>

            </div>

        </div>


        <!-- =================================
             IMAGE SLIDER
        ================================== -->

        <div class="bank-slider">

            <div class="slide active">

                <img
                    src="school 1.jpg"
                    alt="Modern school Building"
                >

            </div>


            <div class="slide">

                <img
                    src="school 2.jpg"
                    alt="Modern school Building"
                >

            </div>


            <div class="slide">

                <img
                    src="school3.jpg"
                    alt="school Building"
                >

            </div>

        </div>

    </div>

</section>



<!-- =========================================
     ABOUT SECTION
========================================= -->

<section id="about" class="about-section">

    <div class="section-container">

        <div class="section-title">

            <span>ABOUT US</span>

            <h2>Education made easy </h2>

            <p>
              at mira school we provide good and quality edudcation for the 
			  benefit and the betterment of children,producing future leaders
            </p>

        </div>


        <div class="about-content">

            <div class="about-card">

                <h3>Our Mission</h3>

                <p>
                 is to englighten the student,oftering guidians,
				 rasing leaders
                </p>

            </div>


            <div class="about-card">

                <h3>Our Vision</h3>

                <p>
                    To become a trusted school recognized
                  for excellent student,innovation and professionalism.
                </p>

            </div>


            <div class="about-card">

                <h3>Our Values</h3>

                <p>
                    Integrity, professionalism, student
                    satisfaction, security and innovation
                    teaching in our best way,to provide standard education.
                </p>

            </div>

        </div>

    </div>

</section>



<!-- =========================================
     SERVICES SECTION
========================================= -->

<section id="services" class="services-section">

    <div class="section-container">

        <div class="section-title">

            <span>OUR SERVICES</span>

            <h2>What We Offer</h2>

            <p>
                standard education for the growth of our student.
            </p>

        </div>


        <div class="services-grid">


            <div class="service-card">

                <div class="service-icon">
                    💳
                </div>

                <h3>Student Accounts</h3>

                <p>
                    Manage your student accounts with
                    convenient and reliable services.
                </p>

            </div>


            <div class="service-card">

                <div class="service-icon">
                    💰
                </div>

                <h3>registration </h3>

                <p>
                    registration can  be done online,
                    to ease the tension in school environment
                </p>

            </div>


            <div class="service-card">

                <div class="service-icon">
                    💸
                </div>

                <h3> payment</h3>

                <p>
                   payment can be made by cash,transfer,bitcoin
				   scan QRCODE,giftcard.
                </p>

            </div>


            <div class="service-card">

                <div class="service-icon">
                    🔐
                </div>

                <h3>Secure learning</h3>

                <p>
                    We prioritize the security and privacy
                    of our student information.
                </p>

            </div>


        </div>

    </div>

</section>



<!-- =========================================
     CONTACT SECTION
========================================= -->

<section id="contact" class="contact-section">

    <div class="section-container">

        <div class="section-title">

            <span>CONTACT US</span>

            <h2>We Are Here To Help</h2>

            <p>
                Have a question? Our team is ready to assist you.
            </p>

        </div>


        <div class="contact-grid">


            <div class="contact-card">

                <div class="contact-icon">
                    📍
                </div>

                <h3>Our Address</h3>

                <p>
                  MiraSchool Education Centre
                </p>

            </div>


            <div class="contact-card">

                <div class="contact-icon">
                    📞
                </div>

                <h3>Phone</h3>

                <p>
                    +234 906 121 8656
                </p>

            </div>


            <div class="contact-card">

                <div class="contact-icon">
                    ✉️
                </div>

                <h3>Email</h3>

                <p>
                    info@miraschool.com
                </p>

            </div>


        </div>

    </div>

</section>



<!-- =========================================
     FOOTER
========================================= -->

<footer class="public-footer">

    <div class="footer-logo">

        <span>Mira</span>school

    </div>


    <p>
        School Management System
    </p>


    <div class="footer-links">

        <a href="#home">Home</a>

        <a href="#about">About</a>

        <a href="#services">Services</a>

        <a href="#contact">Contact</a>

    </div>


    <p class="copyright">

        &copy; 2026 MiraSchool. All Rights Reserved.

    </p>

</footer>



<!-- =========================================
     IMAGE SLIDER JAVASCRIPT
========================================= -->

<script>

    let currentSlide = 0;

    const slides = document.querySelectorAll(".slide");


    function showSlide(index) {

        slides.forEach(function(slide) {

            slide.classList.remove("active");

        });


        slides[index].classList.add("active");

    }


    function nextSlide() {

        currentSlide++;

        if (currentSlide >= slides.length) {

            currentSlide = 0;

        }

        showSlide(currentSlide);

    }


    setInterval(nextSlide, 5000);

</script>


</body>

</html>

