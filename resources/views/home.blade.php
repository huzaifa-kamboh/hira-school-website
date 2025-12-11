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
                    <!-- <div class="carousel-overlay"></div> -->
                </div>
                <!-- <div class="carousel-caption">
                    <div class="container">
                        <h1 class="display-4 fw-bold mb-4">Welcome to Hira Model High School</h1>
                        <p class="lead mb-4">A premier educational institution committed to nurturing young minds with academic excellence, moral values, and holistic development.</p>
                        <a href="/admission" class="btn btn-primary btn-lg px-4 py-3">
                            <i class="fas fa-graduation-cap me-2"></i>Apply for Admission
                        </a>
                    </div>
                </div> -->
            </div>
            
            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="carousel-image" style="background-image: url('{{ asset('images/carousel/school.jpg') }}');">
                    <!-- <div class="carousel-overlay"></div> -->
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
                <div class="carousel-image" style="background-image: url('{{ asset('images/carousel/school.jpg') }}');">
                </div>
                <div class="carousel-caption">
                    <div class="container">
                        <h1 class="display-4 fw-bold mb-4">Modern Learning Environment</h1>
                        <p class="lead mb-4">Equipped with science labs, computer lab, library and sports facilities for holistic development.</p>
                        <a href="/facilities" class="btn btn-primary btn-lg px-4 py-3">
                            <i class="fas fa-school me-2"></i>View Our Facilities
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Slide 4 -->
            <div class="carousel-item">
                <div class="carousel-image" style="background-image: url('{{ asset('images/carousel/school.jpg') }}');">
                    <!-- <div class="carousel-overlay"></div> -->
                </div>
                <div class="carousel-caption">
                    <div class="container">
                        <h1 class="display-4 fw-bold mb-4">Admissions Open 2024-25</h1>
                        <p class="lead mb-4">Limited seats available for the new academic session. Enroll your child today for a bright future.</p>
                        <a href="/admission" class="btn btn-primary btn-lg px-4 py-3">
                            <i class="fas fa-download me-2"></i>Download Admission Form
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
    </div>
    <br><br>
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
                            <div class="progress-bar gradient-1-bg" style="width: 85%"></div>
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
                            <div class="progress-bar gradient-2-bg" style="width: 75%"></div>
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
                            <div class="progress-bar gradient-3-bg" style="width: 90%"></div>
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
                    <p class="stat-label">Awards We've Won</p>
                    <div class="stat-progress">
                        <div class="progress">
                            <div class="progress-bar gradient-4-bg" style="width: 80%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Colorful About Preview -->
<section class="about-preview py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="school-image rounded overflow-hidden shadow-lg">
                    <img src="/images/logo.png" 
                         alt="Hira Model High School Campus" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6">
                <span class="badge bg-primary-gradient mb-3">About Our School</span>
                <h2 class="mb-4">Excellence in Education Since 2010</h2>
                <p class="mb-4">Hira Model High School, a project of Iqra Foundation Sindh, has been a beacon of quality education in Mehrabpur for over a decade. We provide a nurturing environment that fosters intellectual growth, character building, and holistic development.</p>
                
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <i class="fas fa-check-circle text-primary fs-5"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6>Modern Curriculum</h6>
                                <p class="small mb-0">Sindh Board with modern teaching methods</p>
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
                                <h6>Modern Facilities</h6>
                                <p class="small mb-0">Science labs, computer lab, and library</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <i class="fas fa-check-circle text-warning fs-5"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6>Sports & Activities</h6>
                                <p class="small mb-0">Regular sports and extracurricular activities</p>
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
            <h2 class="mb-3">Academic Programs</h2>
            <p class="text-muted">Comprehensive educational programs from pre-primary to higher secondary</p>
        </div>
        
        <div class="row g-4">
            <!-- Pre-Primary Program -->
            <div class="col-md-6 col-lg-3">
                <div class="program-card text-center p-0 rounded overflow-hidden shadow-sm h-100">
                    <div class="program-image">
                        <img src="https://images.unsplash.com/photo-1516627145497-ae695c1c06c9?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80" 
                             alt="Pre-Primary Program" class="img-fluid">
                        <div class="program-overlay"></div>
                    </div>
                    <div class="program-content p-4">
                        <div class="program-icon mb-3">
                            <i class="fas fa-baby fa-3x text-primary"></i>
                        </div>
                        <h4>Pre-Primary Section</h4>
                        <p class="text-muted">Play Group to Kindergarten - Early childhood education with playful learning, basic literacy, and social skills development.</p>
                        <div class="mt-3">
                            <span class="badge bg-primary">Age 3-5 Years</span>
                            <span class="badge bg-info">Play-Based Learning</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Primary Program -->
            <div class="col-md-6 col-lg-3">
                <div class="program-card text-center p-0 rounded overflow-hidden shadow-sm h-100">
                    <div class="program-image">
                        <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1522&q=80" 
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
                            <span class="badge bg-success">Age 5-10 Years</span>
                            <span class="badge bg-warning">Foundation Building</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Middle Program -->
            <div class="col-md-6 col-lg-3">
                <div class="program-card text-center p-0 rounded overflow-hidden shadow-sm h-100">
                    <div class="program-image">
                        <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80" 
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
                            <span class="badge bg-info">Age 11-13 Years</span>
                            <span class="badge bg-secondary">Skill Development</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Secondary & Higher Secondary -->
            <div class="col-md-6 col-lg-3">
                <div class="program-card text-center p-0 rounded overflow-hidden shadow-sm h-100">
                    <div class="program-image">
                        <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1471&q=80" 
                             alt="Secondary Section" class="img-fluid">
                        <div class="program-overlay"></div>
                    </div>
                    <div class="program-content p-4">
                        <div class="program-icon mb-3">
                            <i class="fas fa-graduation-cap fa-3x text-warning"></i>
                        </div>
                        <h4>Secondary & Higher Secondary</h4>
                        <p class="text-muted">Classes IX to XII - Preparing students for board examinations and future academic pursuits with career guidance.</p>
                        <div class="mt-3">
                            <span class="badge bg-warning">Science & General Groups</span>
                            <span class="badge bg-danger">Career Preparation</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Colorful Why Choose Us -->
<section class="why-choose-us py-5">
    <div class="container">
        <div class="text-center mb-5">
            <span class="badge bg-danger-gradient mb-3">Why Choose Us</span>
            <h2 class="mb-3">Why Parents Trust Hira School</h2>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="feature-card text-center p-4 rounded h-100">
                    <div class="feature-icon mb-3 gradient-1">
                        <i class="fas fa-user-shield fa-2x text-white"></i>
                    </div>
                    <h5>Safe & Secure Environment</h5>
                    <p class="small">24/7 security and CCTV surveillance ensuring student safety</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="feature-card text-center p-4 rounded h-100">
                    <div class="feature-icon mb-3 gradient-2">
                        <i class="fas fa-users fa-2x text-white"></i>
                    </div>
                    <h5>Small Class Sizes</h5>
                    <p class="small">Individual attention with optimal student-teacher ratio</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="feature-card text-center p-4 rounded h-100">
                    <div class="feature-icon mb-3 gradient-3">
                        <i class="fas fa-laptop-code fa-2x text-white"></i>
                    </div>
                    <h5>Technology Integration</h5>
                    <p class="small">Smart classrooms and computer lab for digital literacy</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="feature-card text-center p-4 rounded h-100">
                    <div class="feature-icon mb-3 gradient-4">
                        <i class="fas fa-heartbeat fa-2x text-white"></i>
                    </div>
                    <h5>Health & Wellness</h5>
                    <p class="small">Regular health checkups and counseling services</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Colorful Latest News & Events -->
<section class="news-section py-5 bg-light">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-5">
            <div>
                <span class="badge bg-warning-gradient mb-2">Latest Updates</span>
                <h2 class="mb-0">News & Events</h2>
            </div>
            <a href="/news" class="btn btn-primary-gradient">View All</a>
        </div>
        
        <div class="row g-4">
            <div class="col-md-4">
                <div class="news-card rounded overflow-hidden shadow-sm h-100">
                    <div class="news-image">
                        <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1471&q=80" 
                             alt="Annual Sports Day" class="img-fluid">
                        <div class="news-date gradient-1">
                            <span class="day">15</span>
                            <span class="month">Dec</span>
                        </div>
                    </div>
                    <div class="news-content p-4">
                        <h5>Annual Sports Day 2024</h5>
                        <p class="text-muted">Join us for our annual sports day event featuring various competitions and activities.</p>
                        <a href="#" class="btn btn-sm gradient-1 text-white">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="news-card rounded overflow-hidden shadow-sm h-100">
                    <div class="news-image">
                        <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1522&q=80" 
                             alt="Admissions Open" class="img-fluid">
                        <div class="news-date gradient-2">
                            <span class="day">01</span>
                            <span class="month">Jan</span>
                        </div>
                    </div>
                    <div class="news-content p-4">
                        <h5>Admissions Open for 2024-25</h5>
                        <p class="text-muted">Admissions are now open for the academic session 2024-25. Limited seats available.</p>
                        <a href="/admission" class="btn btn-sm gradient-2 text-white">Apply Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="news-card rounded overflow-hidden shadow-sm h-100">
                    <div class="news-image">
                        <img src="https://images.unsplash.com/photo-1524178234883-043d5c3f3cf4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1471&q=80" 
                             alt="Science Exhibition" class="img-fluid">
                        <div class="news-date gradient-3">
                            <span class="day">20</span>
                            <span class="month">Jan</span>
                        </div>
                    </div>
                    <div class="news-content p-4">
                        <h5>Science & Technology Exhibition</h5>
                        <p class="text-muted">Students showcase innovative projects in our annual science exhibition.</p>
                        <a href="#" class="btn btn-sm gradient-3 text-white">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Colorful Call to Action -->
<section class="cta-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h2 class="mb-3">Ready to Join Hira School Family?</h2>
                <p class="mb-0">Admissions are now open. Give your child the gift of quality education.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="/contact" class="btn gradient-1 btn-lg px-4 text-white">
                    <i class="fas fa-phone-alt me-2"></i>Contact Us
                </a>
                <a href="/admission" class="btn gradient-2 btn-lg px-4 text-white ms-2">
                    <i class="fas fa-download me-2"></i>Fill Form
                </a>
            </div>
        </div>
    </div>
</section>

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
    
    /* Hero Carousel Styles */
    .hero-carousel {
        margin-top: -40px;
        position: relative;
    }
    
    .carousel-image {
        height: 90vh;
        min-height: 600px;
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
        transform: translateY(-50%);
        bottom: auto;
        text-align: left;
    }
    
    .carousel-caption h1 {
        font-size: 3.5rem;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }
    
    .carousel-caption p {
        font-size: 1.3rem;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
    }
    
    .carousel-control-prev,
    .carousel-control-next {
        width: 60px;
        height: 60px;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        top: 50%;
        transform: translateY(-50%);
        margin: 0 20px;
    }
    
    .carousel-indicators button {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        margin: 0 5px;
        background-color: rgba(255, 255, 255, 0.5);
    }
    
    .carousel-indicators button.active {
        background-color: white;
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
        transform: translateY(-15px) scale(1.03);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    }
    
    .stat-card:hover::before {
        opacity: 1;
    }
    
    .stat-icon {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 25px;
        font-size: 32px;
        color: white;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        transition: all 0.3s ease;
    }
    
    .stat-card:hover .stat-icon {
        transform: rotateY(360deg);
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.2);
    }
    
    .stat-number {
        font-size: 2.8rem;
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
        font-size: 1.1rem;
        margin-bottom: 20px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    
    .stat-progress {
        margin-top: 15px;
    }
    
    .progress {
        height: 8px;
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
        transform: translateY(-5px) scale(1.02);
    }
    
    /* Colorful Academic Programs */
    .programs-section {
        background: linear-gradient(135deg, rgba(10, 77, 104, 0.9), rgba(8, 131, 149, 0.9));
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
        height: 180px;
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
    
    /* Responsive Design */
    @media (max-width: 992px) {
        .carousel-caption h1 {
            font-size: 2.5rem;
        }
        
        .carousel-image {
            height: 70vh;
            min-height: 500px;
        }
        
        .stat-number {
            font-size: 2.3rem;
        }
        
        .stat-icon {
            width: 70px;
            height: 70px;
            font-size: 28px;
        }
    }
    
    @media (max-width: 768px) {
        .carousel-caption {
            text-align: center;
        }
        
        .carousel-caption h1 {
            font-size: 2rem;
        }
        
        .carousel-caption p {
            font-size: 1.1rem;
        }
        
        .carousel-image {
            height: 60vh;
            min-height: 400px;
        }
        
        .stats-section {
            margin-top: -30px;
            padding: 40px 0;
        }
        
        .stat-card {
            padding: 25px 15px;
            margin-bottom: 15px;
        }
        
        .stat-number {
            font-size: 2rem;
        }
        
        .stat-icon {
            width: 60px;
            height: 60px;
            font-size: 24px;
            margin-bottom: 20px;
        }
        
        .stat-label {
            font-size: 1rem;
        }
        
        .program-image {
            height: 150px;
        }
    }
    
    @media (max-width: 576px) {
        .carousel-caption h1 {
            font-size: 1.8rem;
        }
        
        .carousel-caption p {
            font-size: 1rem;
        }
        
        .carousel-image {
            height: 50vh;
            min-height: 350px;
        }
        
        .carousel-control-prev,
        .carousel-control-next {
            width: 50px;
            height: 50px;
        }
        
        .stat-card {
            padding: 20px 10px;
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
        
        .progress {
            height: 6px;
        }
        
        .btn-lg {
            padding: 10px 20px;
            font-size: 1rem;
        }
        
        .program-image {
            height: 120px;
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
        // Initialize carousel with autoplay
        const carousel = new bootstrap.Carousel(document.getElementById('schoolCarousel'), {
            interval: 1000,
            wrap: true
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
            threshold: 0.5,
            rootMargin: '0px 0px -50px 0px'
        });
        
        counters.forEach(counter => {
            observer.observe(counter);
        });
        
        // Add hover effect with color change
        document.querySelectorAll('.stat-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.background = 'linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.background = 'white';
            });
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
    });
</script>
@endsection