@extends('layouts.master')

@section('title', 'About Us - Hira Model High School Mehrabpur')

@section('content')
<!-- Page Header -->
<section class="page-header py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ol>
                </nav>
                <h1 class="display-5 fw-bold mb-3">About Our School</h1>
                <p class="lead text-muted mb-0">A Legacy of Excellence in Education Since 2010</p>
            </div>
        </div>
    </div>
</section>

<!-- School Overview -->
<section class="school-overview py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="about-image rounded overflow-hidden shadow-lg">
                 <img src="{{ asset('images/school-building.jpg') }}" 
                         alt="Hira Model High School Building" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6">
                <span class="badge bg-primary mb-3">Our Story</span>
                <h2 class="mb-4">Welcome to Hira Model High School</h2>
                <p class="mb-4">
                    Established in 2010, Hira Model High School Mehrabpur has consistently delivered high-quality education with a strong focus on academic excellence, character building, and holistic student development. Over the years, the school has upheld its mission of nurturing confident, capable, and responsible learners.
                </p>

                <p class="mb-4">
                    Over the years, our institution has grown into a trusted center of learning, providing a supportive environment where students are encouraged to explore their potential, develop essential skills, and strive for success in both academics and co-curricular activities.
                </p>
                <div class="row mt-4">
                    <div class="col-sm-6 mb-3">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <i class="fas fa-calendar-check text-primary fs-4"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="mb-1">Established</h5>
                                <p class="mb-0 text-muted">2010</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <i class="fas fa-map-marker-alt text-primary fs-4"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="mb-1">Our Slogan</h5>
                                <p class="mb-0 text-muted">Come and Learn, Go and Lead</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <i class="fas fa-user-graduate text-primary fs-4"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="mb-1">Location</h5>
                                <p class="mb-0 text-muted">Mehrabpur, Sindh</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <i class="fas fa-building text-primary fs-4"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="mb-1">Registration</h5>
                                <p class="mb-0 text-muted">School Education and Literacy Department Governemnt of Sindh</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision -->
<section class="mission-vision py-5 bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-5">
                <span class="badge bg-secondary mb-3">Our Philosophy</span>
                <h2 class="mb-3" style="color: white">Mission & Vision</h2>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card mission-card h-100 border-0 shadow-sm">
                    <div class="card-body p-4 text-center">
                        <div class="icon-wrapper mb-4">
                            <i class="fas fa-bullseye fa-3x text-primary"></i>
                        </div>
                        <h3 class="card-title mb-3">Our Mission</h3>
                        <p class="card-text">
                            To create a supportive learning environment that builds strong academics, good character, and a sense of responsibility. <br>With our slogan <strong>“Come and Learn, Go and Lead”</strong> we aim to shape students into confident individuals who bring positive change to society.
                        </p>
                        <ul class="text-start mt-4">
                            <li>Provide quality education for every student</li>
                            <li>Promote creative thinking and problem-solving</li>
                            <li>Build strong moral, ethical, and social values</li>
                            <li>Prepare students to lead and succeed in real-life challenges</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card vision-card h-100 border-0 shadow-sm">
                    <div class="card-body p-4 text-center">
                        <div class="icon-wrapper mb-4">
                            <i class="fas fa-eye fa-3x text-success"></i>
                        </div>
                        <h3 class="card-title mb-3">Our Vision</h3>
                        <p class="card-text">To be recognized as a leading educational institution that sets benchmarks in academic excellence, character building, and community service. We envision creating a learning community that inspires innovation, embraces diversity, and contributes positively to society.</p>
                        <ul class="text-start mt-4">
                            <li>Become a center of educational excellence</li>
                            <li>Nurture future leaders and innovators</li>
                            <li>Promote inclusive and equitable education</li>
                            <li>Contribute to national development</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Director's Message -->
<section class="director-message py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-5">
                <span class="badge bg-success mb-3">Leadership</span>
                <h2 class="mb-3">Director's Message</h2>
            </div>
        </div>
        
        <div class="row align-items-center">
            <div class="col-lg-4 text-center mb-4 mb-lg-0">
                <div class="director-profile">
                    <div class="director-image mb-4">
                        <img src="{{ asset('images/director.jpeg') }}" 
                             alt="Naeem Ahmed Kamboh - Director" class="img-fluid rounded-circle shadow" style="width: 250px; height: 250px; object-fit: cover;">
                    </div>
                    <h4 class="mb-1">Naeem Ahmed Kamboh</h4>
                    <p class="text-muted mb-2">Director</p>
                    <p class="text-muted mb-0">Hira Model High School Mehrabpur</p>
                    <div class="director-credentials mt-3">
                        <span class="badge bg-primary">Educationist</span>
                        <span class="badge bg-secondary">Social Worker</span>
                        <span class="badge bg-info">Community Leader</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="director-quote mb-4">
                    <i class="fas fa-quote-left fa-2x text-primary opacity-25"></i>
                </div>
                
                <div class="director-message-content">
                    <h4 class="mb-4">"Abu Hurairah reported the Prophet صلی ‌اللہ ‌علیہ ‌وسلم as saying: If anyone pursues a path in search of knowledge, Allah will thereby make easy for him a path to paradise; and he who is made slow by his actions will not be speeded by his genealogy." — Sunan Abi Dawud 3643</h4>
                    
                    <p class="mb-4">Dear Students, Parents, and Well-wishers,</p>
                    
                    <p class="mb-4">It gives me immense pleasure to welcome you to Hira Model High School Mehrabpur, an institution that has been my passion and life's work for over two decades. As the Director, I have witnessed the transformative power of education in shaping young minds and building a better society.</p>
                    
                    <p class="mb-4">Our journey began in 1999 with a simple vision: to provide quality education to the children of Mehrabpur and surrounding areas. Today, I am proud to see our school as a beacon of hope and excellence, nurturing future leaders, doctors, engineers, teachers, and responsible citizens.</p>
                    
                    <p class="mb-4">At Hira School, we believe that education is not just about academic excellence but about holistic development. We focus on:</p>
                    
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <ul class="mb-3">
                                <li>Academic rigor and innovation</li>
                                <li>Character building and moral values</li>
                                <li>Sports and physical development</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="mb-3">
                                <li>Creative and critical thinking</li>
                                <li>Community service and social responsibility</li>
                                <li>Technology integration in learning</li>
                            </ul>
                        </div>
                    </div>
                    
                    <p class="mb-4">I extend my heartfelt gratitude to our dedicated teachers, supportive parents, and hardworking students who make Hira School a special place. Together, we are building not just a school, but a community committed to excellence.</p>
                    
                    <p class="mb-0">I invite you to join us in this noble journey of education and transformation.</p>
                    
                    <div class="director-signature mt-5">
                        <h5 class="mb-1">Warm regards,</h5>
                        <h4 class="text-primary mb-1">Naeem Ahmed Kamboh</h4>
                        <p class="text-muted mb-0">Director, Hira Model High School Mehrabpur</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<!-- <section class="cta-section py-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h2 class="mb-3">Want to Learn More?</h2>
                <p class="mb-0">Visit our campus or contact us to discover how Hira School can benefit your child's education.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="https://maps.app.goo.gl/FhV1V2Lhw3YQNfzx9" target="_blank" class="btn btn-light btn-lg px-4">
                    <i class="fas fa-map-marker-alt me-2"></i>Visit Campus
                </a>
                <a href="/admission" class="btn btn-outline-light btn-lg px-4 ms-2">
                    <i class="fas fa-phone me-2"></i>Contact Us
                </a>
            </div>
        </div>
    </div>
</section> -->

<style>
    /* About Page Specific Styles */
    .page-header {
        background: linear-gradient(135deg, rgba(10, 77, 104, 0.9), rgba(8, 131, 149, 0.9));        background-size: cover;
        background-position: center;
        color: white;
        margin-top: -40px;
        padding-top: 100px !important;
    }

    .mission-vision {
    background: linear-gradient(135deg, rgba(10, 77, 104, 0.9), rgba(8, 131, 149, 0.9));
    }
    
    .page-header .breadcrumb {
        background: transparent;
        padding: 0;
    }
    
    .page-header .breadcrumb-item a {
        color: rgba(255, 255, 255, 0.8);
        text-decoration: none;
    }
    
    .page-header .breadcrumb-item.active {
        color: white;
    }
    
    .page-header .breadcrumb-item + .breadcrumb-item::before {
        color: rgba(255, 255, 255, 0.5);
    }
    
    .about-image {
        transition: transform 0.3s ease;
    }
    
    .about-image:hover {
        transform: translateY(-5px);
    }
    
    .mission-card, .vision-card {
        transition: all 0.3s ease;
        border: 2px solid transparent !important;
    }
    
    .mission-card:hover {
        border-color: var(--primary-color) !important;
        transform: translateY(-5px);
    }
    
    .vision-card:hover {
        border-color: var(--secondary-color) !important;
        transform: translateY(-5px);
    }
    
    .icon-wrapper {
        width: 80px;
        height: 80px;
        background: rgba(10, 77, 104, 0.1);
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }
    
    /* Director Section Styles */
    .director-message {
        background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
    }
    
    .director-image img {
        border: 5px solid white;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }
    
    .director-image img:hover {
        transform: scale(1.05);
    }
    
    .director-quote {
        color: var(--primary-color);
        opacity: 0.5;
    }
    
    .director-message-content {
        position: relative;
        padding-left: 20px;
        border-left: 4px solid var(--primary-color);
    }
    
    .director-message-content h4 {
        font-style: italic;
        color: var(--dark-color);
    }
    
    .director-signature {
        padding-top: 20px;
        border-top: 2px dashed #dee2e6;
    }
    
    /* Value Cards */
    .value-card, .facility-card {
        transition: all 0.3s ease;
        background: white;
        border: 1px solid #e9ecef;
    }
    
    .value-card:hover, .facility-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1) !important;
        border-color: transparent;
    }
    
    .value-icon i, .facility-icon i {
        transition: transform 0.3s ease;
    }
    
    .value-card:hover .value-icon i,
    .facility-card:hover .facility-icon i {
        transform: scale(1.2);
    }
    
    /* Timeline Styles */
    .timeline {
        position: relative;
        max-width: 800px;
        margin: 0 auto;
    }
    
    .timeline::before {
        content: '';
        position: absolute;
        left: 50%;
        top: 0;
        bottom: 0;
        width: 2px;
        background: var(--primary-color);
        transform: translateX(-50%);
    }
    
    .timeline-item {
        display: flex;
        align-items: center;
        margin-bottom: 40px;
        position: relative;
    }
    
    .timeline-item:nth-child(odd) {
        flex-direction: row-reverse;
    }
    
    .timeline-date {
        flex: 0 0 120px;
        background: var(--primary-color);
        color: white;
        padding: 10px 15px;
        border-radius: 30px;
        text-align: center;
        font-weight: bold;
        z-index: 1;
    }
    
    .timeline-item:nth-child(even) .timeline-date {
        margin-right: 30px;
    }
    
    .timeline-item:nth-child(odd) .timeline-date {
        margin-left: 30px;
    }
    
    .timeline-content {
        flex: 1;
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        position: relative;
    }
    
    .timeline-item:nth-child(even) .timeline-content {
        margin-left: 30px;
    }
    
    .timeline-item:nth-child(odd) .timeline-content {
        margin-right: 30px;
        text-align: right;
    }
    
    .timeline-item::before {
        content: '';
        position: absolute;
        left: 50%;
        top: 50%;
        width: 20px;
        height: 20px;
        background: var(--accent-color);
        border-radius: 50%;
        transform: translate(-50%, -50%);
        z-index: 1;
        border: 3px solid white;
    }
    
    /* Responsive Design */
    @media (max-width: 768px) {
        .page-header {
            padding-top: 80px !important;
        }
        
        .page-header h1 {
            font-size: 2rem;
        }
        
        .director-profile {
            padding-bottom: 30px;
            border-bottom: 1px solid #dee2e6;
        }
        
        .director-image img {
            width: 200px;
            height: 200px;
        }
        
        .timeline::before {
            left: 30px;
        }
        
        .timeline-item {
            flex-direction: row !important;
            margin-left: 60px;
        }
        
        .timeline-date {
            position: absolute;
            left: -90px;
            top: 0;
            width: 80px;
            margin: 0 !important;
        }
        
        .timeline-content {
            margin: 0 !important;
            text-align: left !important;
        }
        
        .timeline-item::before {
            left: 20px;
        }
    }
    
    @media (max-width: 576px) {
        .page-header h1 {
            font-size: 1.8rem;
        }
        
        .director-image img {
            width: 150px;
            height: 150px;
        }
        
        .timeline-item {
            margin-left: 50px;
        }
        
        .timeline-date {
            left: -70px;
            width: 60px;
            padding: 8px 10px;
            font-size: 0.9rem;
        }
    }
</style>

@section('scripts')
<script>
    // Add any interactive JavaScript for About Page here
    document.addEventListener('DOMContentLoaded', function() {
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const target = document.querySelector(targetId);
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
        
        // Add animation to cards on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-in');
                }
            });
        }, observerOptions);
        
        // Observe cards for animation
        document.querySelectorAll('.value-card, .facility-card, .mission-card, .vision-card').forEach(card => {
            observer.observe(card);
        });
    });
</script>
@endsection