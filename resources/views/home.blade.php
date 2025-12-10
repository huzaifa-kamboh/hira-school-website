@extends('layouts.master')

@section('title', 'Hira Model High School Mehrabpur - Excellence in Education')

@section('content')
<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="row align-items-center min-vh-80">
            <div class="col-lg-8 text-white">
                <h1 class="display-4 fw-bold mb-4">Welcome to Hira Model High School</h1>
                <p class="lead mb-4">A premier educational institution committed to nurturing young minds with academic excellence, moral values, and holistic development.</p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="/admission" class="btn btn-primary btn-lg px-4 py-3">
                        <i class="fas fa-graduation-cap me-2"></i>Apply for Admission
                    </a>
                    <a href="/about" class="btn btn-outline-light btn-lg px-4 py-3">
                        <i class="fas fa-info-circle me-2"></i>Learn More
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quick Stats -->
<section class="stats-section py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-3 col-6">
                <div class="stat-card text-center">
                    <div class="stat-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3 class="stat-number" data-count="1500">500+</h3>
                    <p class="stat-label">Students Enrolled</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-card text-center">
                    <div class="stat-icon">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                    <h3 class="stat-number" data-count="85">50+</h3>
                    <p class="stat-label">Qualified Teachers</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-card text-center">
                    <div class="stat-icon">
                        <i class="fas fa-school"></i>
                    </div>
                    <h3 class="stat-number" data-count="25">15</h3>
                    <p class="stat-label">Years of Excellence</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-card text-center">
                    <div class="stat-icon">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <h3 class="stat-number" data-count="120">100+</h3>
                    <p class="stat-label">Awards Won</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Preview -->
<section class="about-preview py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="school-image rounded overflow-hidden shadow-lg">
                    <img src="/images/hira-logo.png" 
                         alt="Hira Model High School Campus" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6">
                <span class="badge bg-primary mb-3">About Our School</span>
                <h2 class="mb-4">Excellence in Education Since 2010</h2>
                <p class="mb-4">Hira Model High School, a project of Iqra Foundation Sindh, has been a beacon of quality education in Mehrabpur for over two decades. We provide a nurturing environment that fosters intellectual growth, character building, and holistic development.</p>
                
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
                                <i class="fas fa-check-circle text-primary fs-5"></i>
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
                                <i class="fas fa-check-circle text-primary fs-5"></i>
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
                                <i class="fas fa-check-circle text-primary fs-5"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6>Sports & Activities</h6>
                                <p class="small mb-0">Regular sports and extracurricular activities</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <a href="/about" class="btn btn-outline-primary mt-3">Read More About Us</a>
            </div>
        </div>
    </div>
</section>

<!-- Programs Offered -->
<section class="programs-section py-5">
    <div class="container">
        <div class="text-center mb-5">
            <span class="badge bg-secondary mb-3">Our Programs</span>
            <h2 class="mb-3">Academic Programs</h2>
            <p class="text-muted">We offer comprehensive educational programs from primary to higher secondary</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-4">
                <div class="program-card text-center p-4 rounded shadow-sm h-100">
                    <div class="program-icon mb-4">
                        <i class="fas fa-child fa-3x text-primary"></i>
                    </div>
                    <h4>Primary Section</h4>
                    <p class="text-muted">Classes I to V - Building strong foundations in languages, mathematics, and sciences with interactive learning methods.</p>
                    <div class="mt-3">
                        <span class="badge bg-light text-dark">Age 5-10 Years</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="program-card text-center p-4 rounded shadow-sm h-100">
                    <div class="program-icon mb-4">
                        <i class="fas fa-book-reader fa-3x text-primary"></i>
                    </div>
                    <h4>Middle Section</h4>
                    <p class="text-muted">Classes VI to VIII - Developing critical thinking and problem-solving skills with specialized subject teachers.</p>
                    <div class="mt-3">
                        <span class="badge bg-light text-dark">Age 11-13 Years</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="program-card text-center p-4 rounded shadow-sm h-100">
                    <div class="program-icon mb-4">
                        <i class="fas fa-graduation-cap fa-3x text-primary"></i>
                    </div>
                    <h4>Secondary & Higher Secondary</h4>
                    <p class="text-muted">Classes IX to XII - Preparing students for board examinations and future academic pursuits with career guidance.</p>
                    <div class="mt-3">
                        <span class="badge bg-light text-dark">Science & General Groups</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="why-choose-us py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <span class="badge bg-success mb-3">Why Choose Us</span>
            <h2 class="mb-3">Why Parents Trust Hira School</h2>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="feature-card text-center p-4 rounded h-100">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-user-shield fa-2x text-success"></i>
                    </div>
                    <h5>Safe & Secure Environment</h5>
                    <p class="small">24/7 security and CCTV surveillance ensuring student safety</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="feature-card text-center p-4 rounded h-100">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-users fa-2x text-success"></i>
                    </div>
                    <h5>Small Class Sizes</h5>
                    <p class="small">Individual attention with optimal student-teacher ratio</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="feature-card text-center p-4 rounded h-100">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-laptop-code fa-2x text-success"></i>
                    </div>
                    <h5>Technology Integration</h5>
                    <p class="small">Smart classrooms and computer lab for digital literacy</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="feature-card text-center p-4 rounded h-100">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-heartbeat fa-2x text-success"></i>
                    </div>
                    <h5>Health & Wellness</h5>
                    <p class="small">Regular health checkups and counseling services</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Latest News & Events -->
<section class="news-section py-5">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-5">
            <div>
                <span class="badge bg-danger mb-2">Latest Updates</span>
                <h2 class="mb-0">News & Events</h2>
            </div>
            <a href="/news" class="btn btn-outline-primary">View All</a>
        </div>
        
        <div class="row g-4">
            <div class="col-md-4">
                <div class="news-card rounded overflow-hidden shadow-sm h-100">
                    <div class="news-image">
                        <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1471&q=80" 
                             alt="Annual Sports Day" class="img-fluid">
                        <div class="news-date">
                            <span class="day">15</span>
                            <span class="month">Dec</span>
                        </div>
                    </div>
                    <div class="news-content p-4">
                        <h5>Annual Sports Day 2024</h5>
                        <p class="text-muted">Join us for our annual sports day event featuring various competitions and activities.</p>
                        <a href="#" class="btn btn-sm btn-outline-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="news-card rounded overflow-hidden shadow-sm h-100">
                    <div class="news-image">
                        <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1522&q=80" 
                             alt="Admissions Open" class="img-fluid">
                        <div class="news-date">
                            <span class="day">01</span>
                            <span class="month">Jan</span>
                        </div>
                    </div>
                    <div class="news-content p-4">
                        <h5>Admissions Open for 2024-25</h5>
                        <p class="text-muted">Admissions are now open for the academic session 2024-25. Limited seats available.</p>
                        <a href="/admission" class="btn btn-sm btn-outline-primary">Apply Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="news-card rounded overflow-hidden shadow-sm h-100">
                    <div class="news-image">
                        <img src="https://images.unsplash.com/photo-1524178234883-043d5c3f3cf4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1471&q=80" 
                             alt="Science Exhibition" class="img-fluid">
                        <div class="news-date">
                            <span class="day">20</span>
                            <span class="month">Jan</span>
                        </div>
                    </div>
                    <div class="news-content p-4">
                        <h5>Science & Technology Exhibition</h5>
                        <p class="text-muted">Students showcase innovative projects in our annual science exhibition.</p>
                        <a href="#" class="btn btn-sm btn-outline-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="cta-section py-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h2 class="mb-3">Ready to Join Hira School Family?</h2>
                <p class="mb-0"> Admissions are now open. Give your child the gift of quality education.</p>
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
</section>

<style>
    /* Home Page Specific Styles */
    .hero-section {
        background: linear-gradient(rgba(10, 77, 104, 0.8), rgba(10, 77, 104, 0.9)), 
                    url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        padding: 100px 0;
        position: relative;
        margin-top: -40px;
    }
    
    .hero-section .min-vh-80 {
        min-height: 80vh;
    }
    
    .stats-section {
        background: var(--white);
        margin-top: -50px;
        position: relative;
        z-index: 1;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    }
    
    .stat-card {
        padding: 30px 20px;
        transition: transform 0.3s ease;
    }
    
    .stat-card:hover {
        transform: translateY(-5px);
    }
    
    .stat-icon {
        width: 70px;
        height: 70px;
        background: rgba(10, 77, 104, 0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
    }
    
    .stat-icon i {
        font-size: 30px;
        color: var(--primary-color);
    }
    
    .stat-number {
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--primary-color);
        margin-bottom: 10px;
    }
    
    .stat-label {
        color: var(--text-light);
        font-weight: 500;
    }
    
    .school-image {
        transition: transform 0.3s ease;
    }
    
    .school-image:hover {
        transform: scale(1.02);
    }
    
    .program-card, .feature-card, .news-card {
        transition: all 0.3s ease;
        background: var(--white);
    }
    
    .program-card:hover, .feature-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1) !important;
    }
    
    .news-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1) !important;
    }
    
    .program-icon i, .feature-icon i {
        transition: transform 0.3s ease;
    }
    
    .program-card:hover .program-icon i,
    .feature-card:hover .feature-icon i {
        transform: scale(1.1);
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
        transform: scale(1.05);
    }
    
    .news-date {
        position: absolute;
        top: 15px;
        left: 15px;
        background: var(--primary-color);
        color: white;
        width: 50px;
        height: 50px;
        border-radius: 5px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        font-weight: bold;
    }
    
    .news-date .day {
        font-size: 1.2rem;
        line-height: 1;
    }
    
    .news-date .month {
        font-size: 0.8rem;
        line-height: 1;
    }
    
    .cta-section {
        background: linear-gradient(90deg, var(--primary-color), var(--dark-color));
    }
    
    /* Responsive adjustments */
    @media (max-width: 768px) {
        .hero-section {
            padding: 80px 0;
            background-attachment: scroll;
        }
        
        .hero-section h1 {
            font-size: 2.2rem;
        }
        
        .stat-number {
            font-size: 2rem;
        }
        
        .stats-section {
            margin-top: -30px;
        }
    }
    
    @media (max-width: 576px) {
        .hero-section {
            padding: 60px 0;
        }
        
        .hero-section h1 {
            font-size: 1.8rem;
        }
        
        .btn-lg {
            padding: 10px 20px;
            font-size: 1rem;
        }
    }
</style>

@section('scripts')
<script>
    // Animated counter for stats
    document.addEventListener('DOMContentLoaded', function() {
        const counters = document.querySelectorAll('.stat-number');
        const speed = 200;
        
        counters.forEach(counter => {
            const updateCount = () => {
                const target = +counter.getAttribute('data-count');
                const count = +counter.innerText;
                
                const inc = target / speed;
                
                if (count < target) {
                    counter.innerText = Math.ceil(count + inc);
                    setTimeout(updateCount, 1);
                } else {
                    counter.innerText = target;
                }
            };
            
            // Start counter when element is in viewport
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        updateCount();
                        observer.unobserve(entry.target);
                    }
                });
            });
            
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
    });
</script>
@endsection