@extends('layouts.master')

@section('title', 'Hira Model High School Mehrabpur - Excellence in Education')

@section('content')
<!-- Hero Carousel/Slideshow -->
<section class="hero-carousel">
    <div id="schoolCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#schoolCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#schoolCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#schoolCarousel" data-bs-slide-to="2"></button>
            <button type="button" data-bs-target="#schoolCarousel" data-bs-slide-to="3"></button>
        </div>
        
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="carousel-image" style="background-image: url('{{ asset('images/carousel/school.jpg') }}');">
                    <div class="carousel-overlay"></div>
                </div>
                <div class="carousel-caption">
                    <div class="container">
                        <h1 class="display-4 fw-bold mb-4">Welcome to Hira Model High School</h1>
                        <p class="lead mb-4">A premier educational institution committed to nurturing young minds with academic excellence, moral values, and holistic development.</p>
                        <a href="/admission" class="btn btn-primary btn-lg px-4 py-3">
                            <i class="fas fa-graduation-cap me-2"></i>Apply for Admission
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="carousel-image" style="background-image: url('{{ asset('images/carousel/school2.png') }}');">
                    <div class="carousel-overlay"></div>
                </div>
                <div class="carousel-caption">
                    <div class="container">
                        <h1 class="display-4 fw-bold mb-4">Excellence in Education Since 2010</h1>
                        <p class="lead mb-4">Providing quality education with modern facilities and experienced faculty in Mehrabpur, Sindh.</p>
                        <a href="/about" class="btn btn-primary btn-lg px-4 py-3">
                            <i class="fas fa-info-circle me-2"></i>Learn More About Us
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Slide 3 -->
            <div class="carousel-item">
                <div class="carousel-image" style="background-image: url('{{ asset('images/carousel/school1.jpeg') }}');">
                    <div class="carousel-overlay"></div>
                </div>
                <div class="carousel-caption">
                    <div class="container">
                        <h1 class="display-4 fw-bold mb-4">Join Our School Team</h1>
                        <p class="lead mb-4">
                            We welcome dedicated and qualified professionals who want to build their career in education and contribute to student success.
                        </p>
                        <a href="/careers" class="btn btn-primary btn-lg px-4 py-3">
                            <i class="fas fa-briefcase me-2"></i>Apply for Careers
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Slide 4 -->
            <div class="carousel-item">
                <div class="carousel-image" style="background-image: url('{{ asset('images/carousel/school3.png') }}');">
                    <div class="carousel-overlay"></div>
                </div>
                <div class="carousel-caption">
                    <div class="container">
                        <h1 class="display-4 fw-bold mb-4">Contact Us</h1>
                        <p class="lead mb-4">Have questions? Reach out to us for admissions, programs, or any other inquiries. We're here to help!</p>
                        <a href="/contact" class="btn btn-primary btn-lg px-4 py-3">
                            <i class="fas fa-envelope me-2"></i>Get in Touch
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <button class="carousel-control-prev" type="button" data-bs-target="#schoolCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#schoolCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div> <br><br>
</section>

<!-- Colorful Quick Stats -->
<section class="stats-section py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-3 col-6">
                <div class="stat-card text-center">
                    <div class="stat-icon gradient-1">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3 class="stat-number" data-count="1500">500+</h3>
                    <p class="stat-label">Students Enrolled</p>
                    <div class="stat-progress">
                        <div class="progress">
                            <div class="progress-bar gradient-1-bg" style="width: 100%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-card text-center">
                    <div class="stat-icon gradient-2">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                    <h3 class="stat-number" data-count="85">50+</h3>
                    <p class="stat-label">Qualified Teachers</p>
                    <div class="stat-progress">
                        <div class="progress">
                            <div class="progress-bar gradient-2-bg" style="width: 100%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-card text-center">
                    <div class="stat-icon gradient-3">
                        <i class="fas fa-school"></i>
                    </div>
                    <h3 class="stat-number" data-count="25">15</h3>
                    <p class="stat-label">Years of Excellence</p>
                    <div class="stat-progress">
                        <div class="progress">
                            <div class="progress-bar gradient-3-bg" style="width: 100%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-card text-center">
                    <div class="stat-icon gradient-4">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <h3 class="stat-number" data-count="120">100+</h3>
                    <p class="stat-label">Awards Won</p>
                    <div class="stat-progress">
                        <div class="progress">
                            <div class="progress-bar gradient-4-bg" style="width: 100%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Colorful About Preview -->
<section class="about-preview py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="school-image rounded overflow-hidden shadow-lg">
                    <img src="{{ asset('images/about-school-pic.png') }}" 
                         alt="Hira Model High School Campus" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6">
                <span class="badge bg-primary-gradient mb-3">About Our School</span>
                <h2 class="mb-4">Excellence in Education Since 2010</h2>
                <p class="mb-4">Hira Model High School has stood as a pillar of excellence in education in Mehrabpur for over a decade. Committed to nurturing young minds, we provide an inspiring environment that promotes academic achievement, character building, and overall holistic development.</p>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <i class="fas fa-check-circle text-primary fs-5"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6>Modern Curriculum</h6>
                                <p class="small mb-0">Oxford, Afaq & Paramount with modern teaching methods</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <i class="fas fa-check-circle text-success fs-5"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6>Qualified Faculty</h6>
                                <p class="small mb-0">Highly qualified and experienced teachers</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <i class="fas fa-check-circle text-info fs-5"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6>Islamic & Ethical Values</h6>
                                <p class="small mb-0">Focused on character building, tarbiyyah, and moral development</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <i class="fas fa-check-circle text-warning fs-5"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6>Extracurricular Activities</h6>
                                <p class="small mb-0">Overcoming stage fright and nurturing hidden talents</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <a href="/about" class="btn btn-primary-gradient mt-3">
                    <i class="fas fa-arrow-right me-2"></i>Read More About Us
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Colorful Academic Programs with Pictures -->
<section class="programs-section py-5">
    <div class="container">
        <div class="text-center mb-5">
            <span class="badge bg-success-gradient mb-3">Our Programs</span>
            <h2 class="mb-3 heading-white">Academic Programs</h2>
            <p class="text-muted-ac" style="color: white;">Comprehensive educational programs from pre-primary to higher section</p>
        </div>
        
        <div class="row g-4">
            <!-- Pre-Primary Program -->
            <div class="col-md-6 col-lg-3">
                <div class="program-card text-center p-0 rounded overflow-hidden shadow-sm h-100">
                    <div class="program-image">
                        <img src="{{ asset('images/programs/pre-primary.jpg') }}" 
                             alt="Pre-Primary Program" class="img-fluid">
                        <div class="program-overlay"></div>
                    </div>
                    <div class="program-content p-4">
                        <div class="program-icon mb-3">
                            <i class="fas fa-pencil fa-3x text-primary"></i>
                        </div>
                        <h4>Pre-Primary Section</h4>
                        <p class="text-muted">Play Group, Nursery and KG - Early childhood education with playful learning, basic literacy, and social skills development.</p>
                        <div class="mt-3">
                            <span class="badge bg-info">Play-Based Learning</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Primary Program -->
            <div class="col-md-6 col-lg-3">
                <div class="program-card text-center p-0 rounded overflow-hidden shadow-sm h-100">
                    <div class="program-image">
                        <img src="{{ asset('images/programs/primary.jpg') }}" 
                             alt="Primary Section" class="img-fluid">
                        <div class="program-overlay"></div>
                    </div>
                    <div class="program-content p-4">
                        <div class="program-icon mb-3">
                            <i class="fas fa-child fa-3x text-success"></i>
                        </div>
                        <h4>Primary Section</h4>
                        <p class="text-muted">Classes I to V - Building strong foundations in languages, mathematics, and sciences with interactive learning methods.</p>
                        <div class="mt-3">
                            <span class="badge bg-warning">Foundation Building</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Middle Program -->
            <div class="col-md-6 col-lg-3">
                <div class="program-card text-center p-0 rounded overflow-hidden shadow-sm h-100">
                    <div class="program-image">
                        <img src="{{ asset('images/programs/middle.jpg') }}" 
                             alt="Middle Section" class="img-fluid">
                        <div class="program-overlay"></div>
                    </div>
                    <div class="program-content p-4">
                        <div class="program-icon mb-3">
                            <i class="fas fa-book-reader fa-3x text-info"></i>
                        </div>
                        <h4>Middle Section</h4>
                        <p class="text-muted">Classes VI to VIII - Developing critical thinking and problem-solving skills with specialized subject teachers.</p>
                        <div class="mt-3">
                            <span class="badge bg-secondary">Skill Development</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Secondary & Higher Secondary -->
            <div class="col-md-6 col-lg-3">
                <div class="program-card text-center p-0 rounded overflow-hidden shadow-sm h-100">
                    <div class="program-image">
                        <img src="{{ asset('images/programs/secondary.jpg') }}" 
                             alt="Secondary Section" class="img-fluid">
                        <div class="program-overlay"></div>
                    </div>
                    <div class="program-content p-4">
                        <div class="program-icon mb-3">
                            <i class="fas fa-graduation-cap fa-3x text-warning"></i>
                        </div>
                        <h4>Secondary Section</h4>
                        <p class="text-muted">IX & X - Preparing students for board examinations and future academic pursuits with career guidance.</p>
                        <div class="mt-3">
                            <span class="badge bg-danger">Career Preparation</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Colorful Why Choose Us -->
<section class="why-choose-us py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <span class="badge bg-danger-gradient mb-3">Why Choose Us</span>
            <h2 class="mb-3">Why Parents Trust Hira School</h2>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="feature-card text-center p-4 rounded h-100">
                    <div class="feature-icon mb-3 gradient-1">
                        <i class="fas fa-lightbulb fa-2x text-white"></i> <!-- Lightbulb: knowledge + enlightenment -->
                    </div>
                    <h5>Education with Core Values</h5>
                    <p class="small">
                        We provide not only quality education but also emphasize strong moral values and meaningful tarbiyat to shape responsible individuals.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="feature-card text-center p-4 rounded h-100">
                    <div class="feature-icon mb-3 gradient-2">
                        <i class="fas fa-chalkboard-teacher fa-2x text-white"></i> <!-- Teaching icon -->
                    </div>
                    <h5>Activity-Based Learning</h5>
                    <p class="small">
                        Engaging students through hands-on activities to enhance understanding, creativity, and develop critical thinking skills.                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="feature-card text-center p-4 rounded h-100">
                    <div class="feature-icon mb-3 gradient-3">
                        <i class="fas fa-trophy fa-2x text-white"></i> <!-- Trophy icon for achievement -->
                    </div>
                    <h5>Outstanding Results</h5>
                    <p class="small">We consistently deliver excellent academic results, helping our students achieve top grades in both school assessments and board examinations.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="feature-card text-center p-4 rounded h-100">
                    <div class="feature-icon mb-3 gradient-4">
                        <i class="fas fa-home fa-2x text-white"></i> <!-- Home icon for family-friendly -->
                    </div>
                    <h5>Family-Friendly Environment</h5>
                    <p class="small">
                        Providing education with love, care, and a supportive atmosphere for every student, fostering confidence, growth, and lifelong values.                    
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Colorful Latest News & Events -->
<section class="news-section py-5">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-5">
            <div>
                <span class="badge bg-warning-gradient mb-2">Latest Updates</span>
                <h2 class="mb-0" style="color: white;">News & Events</h2>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-md-4">
                <div class="news-card rounded overflow-hidden shadow-sm h-100">
                    <div class="news-image">
                        <img src="{{ asset('images/news/culture-day.png') }}" 
                             alt="Annual Sports Day" class="img-fluid">
                        <div class="news-date gradient-1">
                            <span class="day">15</span>
                            <span class="month">Dec</span>
                        </div>
                    </div>
                    <div class="news-content p-4">
                        <h5>Sindh Culture Festival</h5>
                        <p class="text-muted">Celebrating vibrant Sindhi traditions for the past 5 years through authentic food, crafts, and cultural activities.</p>
                        <!-- <a href="#" class="btn btn-sm gradient-1 text-white">Read More</a> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="news-card rounded overflow-hidden shadow-sm h-100">
                    <div class="news-image">
                        <img src="{{ asset('images/news/result.png') }}" 
                             alt="Admissions Open" class="img-fluid">
                        <div class="news-date gradient-2">
                            <span class="day">12</span>
                            <span class="month">Nov</span>
                        </div>
                    </div>
                    <div class="news-content p-4">
                        <h5>Mid Term Result Announcemnt</h5>
                        <p class="text-muted">Mid-Term Results Announcement for Academic Session 2025-26</p>
                        <!-- <a href="/admission" class="btn btn-sm gradient-2 text-white">Apply Now</a> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="news-card rounded overflow-hidden shadow-sm h-100">
                    <div class="news-image">
                        <img src="{{ asset('images/news/talent.png') }}" 
                             alt="Science Exhibition" class="img-fluid">
                        <div class="news-date gradient-3">
                            <span class="day">30</span>
                            <span class="month">Aug</span>
                        </div>
                    </div>
                    <div class="news-content p-4">
                        <h5>Talent Fiesta 2025</h5>
                        <p class="text-muted">Our students achieved outstanding positions in the Talent Fiesta competitions.</p>
                        <!-- <a href="#" class="btn btn-sm gradient-3 text-white">Read More</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Colorful Call to Action -->
<!-- <section class="cta-section py-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h2 class="mb-3">Ready to Join Hira School Family?</h2>
                <p class="mb-0">Admissions are now open. Give your child the gift of quality education.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="/contact" class="btn btn-light btn-lg px-4">
                    <i class="fas fa-phone-alt me-2"></i>Contact Us
                </a>
                <a href="/admission" class="btn btn-outline-light btn-lg px-4 ms-2">
                    <i class="fas fa-download me-2"></i>Fill Form
                </a>
            </div>
        </div>
    </div>
</section> -->

<style>
    /* Colorful Design System */
    :root {
        --gradient-1: linear-gradient(135deg, #FF6B6B 0%, #FF8E8E 100%);
        --gradient-2: linear-gradient(135deg, #4ECDC4 0%, #6AE2D9 100%);
        --gradient-3: linear-gradient(135deg, #45B7D1 0%, #59D1EA 100%);
        --gradient-4: linear-gradient(135deg, #96CEB4 0%, #B1E3C6 100%);
        --gradient-primary: linear-gradient(135deg, #0A4D68 0%, #088395 100%);
        --gradient-success: linear-gradient(135deg, #28a745 0%, #20c997 100%);
        --gradient-danger: linear-gradient(135deg, #dc3545 0%, #fd7e14 100%);
        --gradient-warning: linear-gradient(135deg, #ffc107 0%, #fd7e14 100%);
    }
    
    .gradient-1 {
        background: var(--gradient-1);
    }
    
    .gradient-2 {
        background: var(--gradient-2);
    }
    
    .gradient-3 {
        background: var(--gradient-3);
    }
    
    .gradient-4 {
        background: var(--gradient-4);
    }
    
    .gradient-1-bg {
        background: linear-gradient(90deg, #FF6B6B 0%, #FF8E8E 100%);
    }
    
    .gradient-2-bg {
        background: linear-gradient(90deg, #4ECDC4 0%, #6AE2D9 100%);
    }
    
    .gradient-3-bg {
        background: linear-gradient(90deg, #45B7D1 0%, #59D1EA 100%);
    }
    
    .gradient-4-bg {
        background: linear-gradient(90deg, #96CEB4 0%, #B1E3C6 100%);
    }
    
    .bg-primary-gradient {
        background: var(--gradient-primary);
        color: white;
    }
    
    .bg-success-gradient {
        background: var(--gradient-success);
        color: white;
    }
    
    .bg-danger-gradient {
        background: var(--gradient-danger);
        color: white;
    }
    
    .bg-warning-gradient {
        background: var(--gradient-warning);
        color: white;
    }
    
    .btn-primary-gradient {
        background: var(--gradient-primary);
        color: white;
        border: none;
        transition: all 0.3s ease;
    }
    
    .btn-primary-gradient:hover {
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(10, 77, 104, 0.3);
    }
    
    /* Hero Carousel Styles - FIXED FOR RESPONSIVE */
    .hero-carousel {
        margin-top: -40px;
        position: relative;
    }
    
    .carousel-item {
        height: 100vh;
        min-height: 600px;
        max-height: 800px;
    }
    
    .carousel-image {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
    
    .carousel-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(rgba(10, 77, 104, 0.7), rgba(8, 131, 149, 0.7));
    }
    
    .carousel-caption {
        position: absolute;
        top: 50%;
        left: 0;
        right: 0;
        transform: translateY(-50%);
        padding: 20px;
        text-align: center;
    }
    
    .carousel-caption .container {
        max-width: 800px;
        margin: 0 auto;
    }
    
    .carousel-caption h1 {
        font-size: clamp(1.8rem, 4vw, 3.5rem);
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        line-height: 1.2;
        margin-bottom: 20px;
    }
    
    .carousel-caption p {
        font-size: clamp(1rem, 2vw, 1.3rem);
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        line-height: 1.6;
        margin-bottom: 30px;
    }
    
    .carousel-control-prev,
    .carousel-control-next {
        width: 50px;
        height: 50px;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        top: 50%;
        transform: translateY(-50%);
        margin: 0 15px;
    }
    
    .carousel-indicators {
        bottom: 20px;
    }
    
    .carousel-indicators button {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        margin: 0 8px;
        background-color: rgba(255, 255, 255, 0.5);
        border: none;
    }
    
    .carousel-indicators button.active {
        background-color: white;
        transform: scale(1.2);
    }
    
    /* Colorful Stats Section */
    .stats-section {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        position: relative;
        overflow: hidden;
        margin-top: -50px;
        border-radius: 0 0 20px 20px;
    }
    
    .stats-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 5px;
        background: linear-gradient(90deg, 
            #FF6B6B 0%, 
            #4ECDC4 25%, 
            #45B7D1 50%, 
            #96CEB4 75%, 
            #FFEAA7 100%);
    }
    
    .stat-card {
        padding: 30px 20px;
        background: white;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        border: 1px solid rgba(255, 255, 255, 0.5);
        position: relative;
        overflow: hidden;
    }
    
    .stat-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 5px;
        background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    
    .stat-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    }
    
    .stat-card:hover::before {
        opacity: 1;
    }
    
    .stat-icon {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        font-size: 28px;
        color: white;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        transition: all 0.3s ease;
    }
    
    .stat-card:hover .stat-icon {
        transform: rotateY(360deg);
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.2);
    }
    
    .stat-number {
        font-size: 2.5rem;
        font-weight: 800;
        margin-bottom: 10px;
        background: linear-gradient(135deg, #333 0%, #555 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        letter-spacing: -1px;
    }
    
    .stat-label {
        color: #666;
        font-weight: 600;
        font-size: 1rem;
        margin-bottom: 20px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    
    .stat-progress {
        margin-top: 15px;
    }
    
    .progress {
        height: 6px;
        background-color: rgba(0, 0, 0, 0.05);
        border-radius: 10px;
        overflow: hidden;
    }
    
    .progress-bar {
        border-radius: 10px;
        transition: width 1.5s ease-in-out;
    }
    
    /* Colorful About Preview */
    .about-preview {
        background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
    }
    
    .school-image {
        transition: transform 0.3s ease;
        border: 5px solid white;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
    }
    
    .school-image:hover {
        transform: translateY(-5px);
    }
    
    /* Colorful Academic Programs */
    .programs-section {
        background: linear-gradient(135deg, rgba(10, 77, 104, 0.9), rgba(8, 131, 149, 0.9));
    }

    .heading-white {
        color: white;
    }
    
    .program-card {
        background: white;
        transition: all 0.4s ease;
        border: 2px solid transparent;
    }
    
    .program-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15) !important;
        border-color: var(--primary-color);
    }
    
    .program-image {
        height: 200px;
        overflow: hidden;
        position: relative;
    }
    
    .program-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    
    .program-card:hover .program-image img {
        transform: scale(1.1);
    }
    
    .program-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(to bottom, rgba(0,0,0,0.1), rgba(0,0,0,0.3));
    }
    
    .program-icon i {
        transition: transform 0.3s ease;
    }
    
    .program-card:hover .program-icon i {
        transform: scale(1.2);
    }
    
    /* Colorful Feature Cards */
    .feature-card {
        background: white;
        border: 1px solid #e9ecef;
        transition: all 0.3s ease;
    }
    
    .feature-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        border-color: transparent;
    }
    
    .feature-icon {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
        transition: all 0.3s ease;
    }
    
    .feature-card:hover .feature-icon {
        transform: scale(1.1) rotate(10deg);
    }
    
    /* Colorful News Cards */
    .news-section{
        background: linear-gradient(135deg, rgba(10, 77, 104, 0.9), rgba(8, 131, 149, 0.9));
    }
    .news-card {
        background: white;
        transition: all 0.3s ease;
    }
    
    .news-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    }
    
    .news-image {
        position: relative;
        height: 200px;
        overflow: hidden;
    }
    
    .news-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    
    .news-card:hover .news-image img {
        transform: scale(1.1);
    }
    
    .news-date {
        position: absolute;
        top: 15px;
        left: 15px;
        width: 60px;
        height: 60px;
        border-radius: 10px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        color: white;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }
    
    .news-date .day {
        font-size: 1.5rem;
        line-height: 1;
    }
    
    .news-date .month {
        font-size: 0.9rem;
        line-height: 1;
        text-transform: uppercase;
    }
    
    /* Colorful Call to Action */
    .cta-section {
        background: var(--gradient-primary);
        color: white;
    }
    
    /* Responsive Design - IMPROVED */
    @media (max-width: 992px) {
        .carousel-item {
            height: 80vh;
            min-height: 500px;
        }
        
        .carousel-caption {
            padding: 15px;
        }
        
        .stat-number {
            font-size: 2rem;
        }
        
        .stat-icon {
            width: 60px;
            height: 60px;
            font-size: 24px;
        }
        
        .program-image {
            height: 180px;
        }
    }
    
    @media (max-width: 768px) {
        .carousel-item {
            height: 70vh;
            min-height: 400px;
        }
        
        .carousel-caption h1 {
            font-size: 1.8rem;
            margin-bottom: 15px;
        }
        
        .carousel-caption p {
            font-size: 1rem;
            margin-bottom: 20px;
        }
        
        .carousel-control-prev,
        .carousel-control-next {
            width: 40px;
            height: 40px;
            margin: 0 10px;
        }
        
        .stats-section {
            margin-top: -30px;
            padding: 40px 0;
        }
        
        .stat-card {
            padding: 20px 15px;
            margin-bottom: 15px;
        }
        
        .stat-number {
            font-size: 1.8rem;
        }
        
        .stat-icon {
            width: 50px;
            height: 50px;
            font-size: 20px;
            margin-bottom: 15px;
        }
        
        .stat-label {
            font-size: 0.9rem;
        }
        
        .program-image {
            height: 160px;
        }
        
        .btn-lg {
            padding: 10px 20px;
            font-size: 1rem;
        }
    }
    
    @media (max-width: 576px) {
        .carousel-item {
            height: 60vh;
            min-height: 350px;
        }
        
        .carousel-caption h1 {
            font-size: 1.5rem;
        }
        
        .carousel-caption p {
            font-size: 0.9rem;
        }
        
        .carousel-indicators {
            bottom: 15px;
        }
        
        .carousel-indicators button {
            width: 8px;
            height: 8px;
            margin: 0 5px;
        }
        
        .stat-card {
            padding: 15px 10px;
        }
        
        .stat-number {
            font-size: 1.5rem;
        }
        
        .stat-icon {
            width: 45px;
            height: 45px;
            font-size: 18px;
        }
        
        .progress {
            height: 4px;
        }
        
        .program-image {
            height: 140px;
        }
        
        .news-image {
            height: 160px;
        }
        
        .news-date {
            width: 50px;
            height: 50px;
        }
        
        .news-date .day {
            font-size: 1.2rem;
        }
        
        .news-date .month {
            font-size: 0.8rem;
        }
    }
    
    /* Animation for numbers */
    @keyframes countUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .stat-number.animated {
        animation: countUp 0.8s ease-out forwards;
    }
</style>

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize carousel with 3 seconds interval
        const carousel = new bootstrap.Carousel(document.getElementById('schoolCarousel'), {
            interval: 3000, // 3 seconds
            wrap: true,
            pause: 'hover',
            touch: true
        });
        
        // Animated counter for stats
        const counters = document.querySelectorAll('.stat-number');
        const speed = 100;
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counter = entry.target;
                    const target = +counter.getAttribute('data-count');
                    const start = +counter.innerText.replace('+', '');
                    
                    const updateCount = () => {
                        const count = +counter.innerText.replace('+', '');
                        const inc = target / speed;
                        
                        if (count < target) {
                            counter.innerText = Math.ceil(count + inc);
                            setTimeout(updateCount, 20);
                        } else {
                            if (counter.textContent.includes('+')) {
                                counter.innerText = target + '+';
                            } else {
                                counter.innerText = target;
                            }
                            counter.classList.add('animated');
                        }
                    };
                    
                    updateCount();
                    observer.unobserve(entry.target);
                    
                    // Animate progress bars
                    const progressBar = counter.closest('.stat-card').querySelector('.progress-bar');
                    if (progressBar) {
                        setTimeout(() => {
                            progressBar.style.width = progressBar.style.width;
                        }, 500);
                    }
                }
            });
        }, {
            threshold: 0.3,
            rootMargin: '0px 0px -50px 0px'
        });
        
        counters.forEach(counter => {
            observer.observe(counter);
        });
        
        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
        
        // Fix carousel height on window resize
        function adjustCarouselHeight() {
            const carouselItems = document.querySelectorAll('.carousel-item');
            const viewportHeight = window.innerHeight;
            const navbarHeight = 140; // Adjust based on your navbar height
            
            carouselItems.forEach(item => {
                item.style.height = Math.max(600, viewportHeight - navbarHeight) + 'px';
            });
        }
        
        // Initial adjustment
        adjustCarouselHeight();
        
        // Adjust on window resize
        window.addEventListener('resize', adjustCarouselHeight);
        
        // Fix carousel image loading
        const carouselImages = document.querySelectorAll('.carousel-image');
        carouselImages.forEach(img => {
            const src = img.style.backgroundImage.replace(/url\(['"]?(.*?)['"]?\)/i, '$1');
            const image = new Image();
            image.src = src;
            image.onload = function() {
                img.classList.add('loaded');
            };
        });
    });
</script>
@endsection