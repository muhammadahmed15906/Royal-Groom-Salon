<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glamour Beauty Salon - Karachi</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    
    <style>
        /* CSS Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        /* Global Styles */
        body {
            background-color: #f8f8f8;
            color: #333;
            line-height: 1.6;
            overflow-x: hidden;
            
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 0;
        }

        /* Header Styles */
        header {
            background-color: #111;
            color: white;
            padding: 20px 0;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Hero Section */
        

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-content h1 {
            font-size: 48px;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .hero-content p {
            font-size: 20px;
            max-width: 700px;
            margin: 0 auto 30px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }

.btn {
      display: block; /* important for margin auto */
  margin: 0 auto;
  position: relative;
  display: inline-block;
  width: 200px;
  padding: 12px 30px;
  background-color: #d4af37;
  color: #111;
  font-weight: 600;
  border: none;
  border-radius: 20px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  overflow: hidden;
  transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  margin-left: 50px;
}

/* Lighting bar animation on hover */
.btn::before {
  content: "";
  position: absolute;
  top: 0;
  left: -75%;
  width: 50%;
  height: 100%;
  background: rgba(255, 255, 255, 0.3);
  transform: skewX(-20deg);
  transition: none;
}

/* On hover: light sweeps across */
.btn:hover::before {
  left: 125%;
  transition: all 0.55s ease-in-out;
}

.btn:hover {
  background-color: #ffd700;
  color: #000;
  box-shadow: 0 0 15px #ffd700, 0 0 30px #ffd700;
}

    .btn1 {
            display: inline-block;
            background-color: #d4af37;
            color: #111;
            padding: 12px 30px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
        }

/* On hover: light sweeps across */
.btn1:hover::before {
  left: 125%;
  transition: all 0.55s ease-in-out;
}

.btn1:hover {
  background-color: #ffd700;
  color: #000;
  box-shadow: 0 0 15px #ffd700, 0 0 20px #ffd700;
}


        .btn:hover {
            background-color: #c9a227;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        /* Services Section */
        .services {
            padding: 80px 0;
            background-color: #252525;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title h2 {
            font-size: 36px;
            color: #111;
            position: relative;
            display: inline-block;
            padding-bottom: 15px;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            width: 70px;
            height: 3px;
            background-color: #d4af37;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .service-card {
            background-color: #363030;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.5s ease;
            opacity: 0;
            transform: translateY(50px);
        }

        .service-card.animate {
            opacity: 1;
            transform: translateY(0);
        }

        .service-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .service-img {
            height: 200px;
            overflow: hidden;
        }

        .service-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .service-card:hover .service-img img {
            transform: scale(1.1);
        }

        .service-content {
            padding: 20px;
        }

        .service-content h3 {
            font-size: 22px;
            text-align: center;
            margin-bottom: 10px;
            color: #ffffff;
        }

        .service-content p {
            color: #666;
            margin-bottom: 15px;
            text-align: center;
        }

        .price {
            font-size: 20px;
            font-weight: 700;
            color: #d4af37;
            margin-bottom: 15px;
            display: block;
            text-align: center;
        }

        /* Testimonials */
        .testimonials {
            background-color: #252525;
            color: white;
            padding: 80px 0;
        }

        .testimonials .section-title h2 {
            color: white;
        }

        .testimonials .section-title h2::after {
            background-color: white;
        }

        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .testimonial-card {
            background-color: #111;
            padding: 30px;
            border-radius: 10px;
            position: relative;
            transition: all 0.5s ease;
            opacity: 0;
            transform: translateY(50px);
        }

        .testimonial-card.animate {
            opacity: 1;
            transform: translateY(0);
        }

        .testimonial-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }

        .testimonial-card::before {
            content: '"';
            font-size: 80px;
            color: #d4af37;
            opacity: 0.2;
            position: absolute;
            top: 10px;
            left: 10px;
        }

        .testimonial-content {
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
        }

        .author-img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 15px;
        }

        .author-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .author-info h4 {
            font-size: 18px;
            margin-bottom: 5px;
        }

        .author-info p {
            font-size: 14px;
            color: #d4af37;
        }




        /* Team Section */
        .team {
            padding: 80px 0;
            background-color:#252525;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }

        .team-member {
            text-align: center;
            opacity: 0;
            transform: translateY(50px);
            transition: all 0.5s ease;
        }

        .team-member.animate {
            opacity: 1;
            transform: translateY(0);
        }

        .member-img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto 20px;
            border: 5px solid #f8f8f8;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.5s ease;
        }

        .team-member:hover .member-img {
            transform: scale(1.1);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .member-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .member-info h3 {
            font-size: 22px;
            margin-bottom: 5px;
            color: #111;
        }

        .member-info p {
            color: #d4af37;
            font-weight: 500;
            margin-bottom: 15px;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .social-links a {
            display: inline-flex;                                                                                                                                                                                                                                                              
            align-items: center;
            justify-content: center;     
            width: 35px;
            height: 35px;                                                                                       
            background-color: #f8f8f8;
            color: #111;
            border-radius: 50%;
            transition: all 0.3s;
        }

        .social-links a:hover {
            background-color: #d4af37;
            color: white;
            transform: translateY(-3px);
        }


.testimonial-form {
  display: none;
}
.appointment-form {
  display: none;
}


        .social-links {
            display: flex;
            gap: 15px;
        }

        .social-links a {
            display: inline-block;
            width: 40px;
            height: 40px;
            background-color: #222;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s;
        }

        .social-links a:hover {
            background-color: #d4af37;
            transform: translateY(-3px);
        }

        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #222;
            color: #bbb;
            font-size: 14px;
        }

        /* Back to Top Button */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background-color: #d4af37;
            color: #111;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            text-decoration: none;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s;
            z-index: 99;
        }

        .back-to-top.active {
            opacity: 1;
            visibility: visible;
        }

        .back-to-top:hover {
            background-color: #c9a227;
            transform: translateY(-5px);
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .header-container {
                padding: 0 20px;
            }

            nav {
                position: fixed;
                top: 80px;
                left: -100%;
                width: 100%;
                height: calc(100vh - 80px);
                background-color: #111;
                transition: left 0.3s;
                padding: 30px 0;
            }

            nav.active {
                left: 0;
            }

            nav ul {
                flex-direction: column;
                align-items: center;
            }

            nav ul li {
                margin: 15px 0;
            }

            .mobile-menu-btn {
                display: block;
            }

            .hero {
                height: 70vh;
                z-index: 20;
            }

            .hero-content h1 {
                font-size: 36px;
            }

            .hero-content p {
                font-size: 18px;
            }

            .section-title h2 {
                font-size: 30px;
                color: #fbb10f;
            }

            .about-container, .booking-container {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .about-img {
                order: -1;
            }
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .animate-on-scroll {
            opacity: 0;
        }
        
    </style>

<link rel="stylesheet" href="css/styles.css" />

<style>
    .hero {
            background-image:  url('assets/images/header1.jpg');
            background-size: cover;
            background-position: center;
            height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            position: relative;
            overflow: hidden;
        }
</style>
</head>
<body>
    <div id="navbar-container">
        <?php include 'navbar.php'; ?>
    </div>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-content animate__animated animate__fadeIn">
            <h1>Premium Beauty & Hair Salon</h1>
            <p>Experience luxury beauty treatments with our expert stylists and premium products in the heart of Karachi.</p>
            <a href="book.php" class="btn-book">BOOK NOW</a>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services" id="services">
        <div class="container">
            <div class="section-title">
                <h2 style="color: #fbb10f;">Our Services</h2>
                <p style="color: white;">We offer a wide range of beauty and hair services to make you look and feel your best.</p>
            </div>
            <div class="services-grid">
                <!-- Service 1 -->
                <div class="service-card animate-on-scroll">
                    <div class="service-img">
                        <img src="https://images.unsplash.com/photo-1605497788044-5a32c7078486?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Hair Styling">
                    </div>
                    <div class="service-content">
                        <h3>Hair Styling</h3>
                        <p>Professional haircut with precision styling using the latest techniques tools.</p>
                        <span class="price">Rs. 1,500 - 3,000</span>
                        <a href="book.html" class="btn">Book Now</a>
                    </div>
                </div>
                
                <!-- Service 2 -->
                <div class="service-card animate-on-scroll" >
                    <div class="service-img">
                        <img src="assets/images/color.jpg" alt="Hair Coloring" >
                    </div>
                    <div class="service-content">
                        <h3>Hair Coloring</h3>
                        <p>Premium hair coloring services to cover grays or create a bold new look.</p>
                        <span class="price">Rs. 3,500 - 6,000</span>
                        <a href="book.php" class="btn">Book Now</a>
                    </div>
                </div>
                
                <!-- Service 3 -->
                <div class="service-card animate-on-scroll">
                    <div class="service-img">
                        <img src="https://i.pinimg.com/736x/7f/05/2e/7f052eb35e7c6333aad5dcf2682df2e9.jpg" alt="Facial Treatment">
                    </div>
                    <div class="service-content">
                        <h3>Facial Treatment</h3>
                        <p>Deep cleansing facial treatment with massage to rejuvenate your skin.</p>
                        <span class="price">Rs. 2,500 - 5,000</span>
                        <a href="book.php" class="btn">Book Now</a>
                    </div>
                </div>
                
                <!-- Service 4 -->
                <div class="service-card animate-on-scroll">
                    <div class="service-img">
                        <img src="https://i.pinimg.com/736x/3c/fa/81/3cfa81b736e3f42f2c4c19f91c50a74d.jpg" alt="Makeup">
                    </div>
                    <div class="service-content">
                        <h3>Pro Makeup</h3>
                        <p>Flawless makeup application for occasions or everyday wear.</p>
                        <span class="price">Rs. 2,000 - 8,000</span>
                        <a href="book.php" class="btn">Book Now</a>
                    </div>
                </div>
                
                <!-- Service 5 -->
                <div class="service-card animate-on-scroll">
                    <div class="service-img">
                        <img src="assets/images/foot.jpg" alt="Manicure">
                    </div>
                    <div class="service-content">
                        <h3>Manicure & Pedicure</h3>
                        <p>Luxurious nail care services to pamper your hands and feet.</p>
                        <span class="price">Rs. 1,500 - 3,500</span>
                        <a href="book.php" class="btn">Book Now</a>
                    </div>
                </div>
                
                <!-- Service 6 -->
                <div class="service-card animate-on-scroll">
                    <div class="service-img">
                        <img src="assets/images/hair.jpg" alt="Waxing">
                    </div>
                    <div class="service-content">
                        <h3>Classic Haircut</h3>
                        <p>Sharp and clean classic haircut style for all occasions.</p>
                        <span class="price">Rs. 800 - 3,000</span>
                        <a href="book.php" class="btn">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Team Section -->
    <section class="team" id="team">
        <div class="container">
            <div class="section-title">
                <h2 style="color: #fbb10f;">Our Expert Team</h2>
                <p style="color: white;">Meet our talented team of beauty professionals dedicated to making you look your best.</p>
            </div>
            <div class="team-grid">
                <!-- Team Member 1 -->
                <div class="team-member animate-on-scroll">
                    <div class="member-img">
                        <img src="assets/images/zeeshan.jpg" alt="Ayesha Khan">
                    </div>
                    <div class="member-info">
                        <h3 style="color: white;">Zeeshan</h3>
                        <p>Master Stylist</p>
                        <p>10+ years of experience in hair cutting and coloring</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Team Member 2 -->
                <div class="team-member animate-on-scroll">
                    <div class="member-img">
                        <img src="assets/images/aqeel.jpg" alt="Fatima Ahmed">
                    </div>
                    <div class="member-info">
                        <h3 style="color: white;">Aqeel</h3>
                        <p>Makeup Artist</p>
                        <p>Specializes in bridal and special occasion makeup</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Team Member 3 -->
                <div class="team-member animate-on-scroll">
                    <div class="member-img">
                        <img src="assets/images/moosa.jpg" alt="Zainab Malik">
                    </div>
                    <div class="member-info">
                        <h3 style="color: white;">Moosa</h3>
                        <p>Skin Care Specialist</p>
                        <p>Expert in facials and skin treatments</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Team Member 4 -->
                <div class="team-member animate-on-scroll">
                    <div class="member-img">
                        <img src="assets/images/amjad.jpg" alt="Sana Khan">
                    </div>
                    <div class="member-info">
                        <h3 style="color: white;">Amjad</h3>
                        <p>Nail Technician</p>
                        <p>Specializes in manicures, pedicures, and nail art</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <div class="container">
            <div class="section-title">
                <h2>Client Testimonials</h2>
                <p>Hear what our clients have to say about their experiences at our salon.</p>
            </div>
            <div class="testimonial-grid">
                <!-- Testimonial 1 -->
                <div class="testimonial-card animate-on-scroll">
                    <div class="testimonial-content">
                        <p>Best salon in Karachi! Zeeshan gave me the perfect haircut that suits my face shape. The atmosphere is so relaxing and the staff is incredibly professional.It was such a good experiance</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-img">
                            <img src="assets/images/dp.jpg" alt="Sara Khan">
                        </div>
                        <div class="author-info">
                            <h4>AHMED</h4>
                            <p>Regular Client</p>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="testimonial-card animate-on-scroll">
                    <div class="testimonial-content">
                        <p>Aqeel did my makeup for my wedding and I couldn't have been happier! She understood exactly the look I wanted and made me feel so beautiful on my special day.</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-img">
                            <img src="assets/images/dp2.jpg" alt="Amina Ahmed">
                        </div>
                        <div class="author-info">
                            <h4>HUSSAIN</h4>
                            <p>Bridal Client</p>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="testimonial-card animate-on-scroll">
                    <div class="testimonial-content">
                        <p>Amjad facials have transformed my skin! I've been coming monthly for the past year and my complexion has never looked better. Highly recommend!</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-img">
                            <img src="assets/images/dp3.jpg" alt="Nadia Malik">
                        </div>
                        <div class="author-info">
                            <h4>ZAKIR</h4>
                            <p>Skin Care Client</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>          
                       <form id="appointmentForm">
    <!-- Back to Top Button -->
    <a href="#" class="back-to-top" id="backToTop"><i class="fas fa-arrow-up"></i></a>

    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                    
                    // Close mobile menu if open
                    if (mainNav.classList.contains('active')) {
                        mainNav.classList.remove('active');
                        mobileMenuBtn.innerHTML = '<i class="fas fa-bars"></i>';
                    }
                }
            });
        });

        // Form Submission
        const appointmentForm = document.getElementById('appointmentForm');
        
        appointmentForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form values
            const formData = {
                name: document.getElementById('name').value,
                email: document.getElementById('email').value,
                phone: document.getElementById('phone').value,
                service: document.getElementById('service').value,
                date: document.getElementById('date').value,
                message: document.getElementById('message').value
            };
            
            // Here you would typically send the data to a server
            // For this example, we'll just show an alert
            alert(`Thank you, ${formData.name}! Your appointment request for ${formData.service} has been received. We'll contact you shortly to confirm.`);
            
            // Reset form
            appointmentForm.reset();
        });


        // Animation on Scroll
        function animateOnScroll() {
            const elements = document.querySelectorAll('.animate-on-scroll');
            
            elements.forEach(element => {
                const elementPosition = element.getBoundingClientRect().top;
                const screenPosition = window.innerHeight / 1.2;
                
                if (elementPosition < screenPosition) {
                    element.classList.add('animate');
                }
            });
        }

        // Initialize animations when page loads
        window.addEventListener('load', animateOnScroll);
        
        // Animate elements when scrolling
        window.addEventListener('scroll', animateOnScroll);

        // Set current year for copyright
        document.querySelector('.copyright p').innerHTML = `&copy; ${new Date().getFullYear()} Glamour Beauty Salon. All Rights Reserved.`;
    </script>

<!-- Footer Section -->
<?php include 'footer.php'; ?>


  <!-- Custom JS -->
  <script src="js/script.js"></script>
</body>
</html>