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
                <p class="lead text-muted mb-0">A Legacy of Excellence in Education Since 1999</p>
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
                    <img src="https://images.unsplash.com/photo-1562774053-701939374585?ixlib=rb-4.0.3&auto=format&fit=crop&w=1464&q=80" 
                         alt="Hira Model High School Building" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6">
                <span class="badge bg-primary mb-3">Our Story</span>
                <h2 class="mb-4">Welcome to Hira Model High School</h2>
                <p class="mb-4">Established in 1999, Hira Model High School Mehrabpur is a premier educational institution under the patronage of <strong>Iqra Foundation Sindh</strong>. For over two decades, we have been committed to providing quality education that blends academic excellence with moral and ethical values.</p>
                
                <p class="mb-4">Located on Ghalla Mandi Road, Mehrabpur, our school has grown from a small institution to a center of educational excellence, nurturing thousands of students who have gone on to become successful professionals, entrepreneurs, and responsible citizens.</p>
                
                <div class="row mt-4">
                    <div class="col-sm-6 mb-3">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <i class="fas fa-calendar-check text-primary fs-4"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="mb-1">Established</h5>
                                <p class="mb-0 text-muted">1999</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <i class="fas fa-map-marker-alt text-primary fs-4"></i>
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
                                <i class="fas fa-user-graduate text-primary fs-4"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="mb-1">Affiliation</h5>
                                <p class="mb-0 text-muted">Board of Secondary Education</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <i class="fas fa-building text-primary fs-4"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="mb-1">Project of</h5>
                                <p class="mb-0 text-muted">Iqra Foundation Sindh</p>
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
                <h2 class="mb-3">Mission & Vision</h2>
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
                        <p class="card-text">To provide a holistic educational environment that fosters intellectual growth, moral development, and social responsibility. We aim to empower students with knowledge, skills, and values to become lifelong learners and responsible global citizens.</p>
                        <ul class="text-start mt-4">
                            <li>Provide quality education accessible to all</li>
                            <li>Foster critical thinking and creativity</li>
                            <li>Develop moral and ethical values</li>
                            <li>Prepare students for future challenges</li>
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
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&auto=format&fit=crop&w=1374&q=80" 
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
                    <h3 class="mb-4">"Education is the most powerful weapon which you can use to change the world." - Nelson Mandela</h3>
                    
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

<!-- Core Values -->
<section class="core-values py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-5">
                <span class="badge bg-warning text-dark mb-3">Our Values</span>
                <h2 class="mb-3">Core Values</h2>
                <p class="text-muted">The principles that guide everything we do</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="value-card text-center p-4 rounded h-100">
                    <div class="value-icon mb-3">
                        <i class="fas fa-gem fa-2x text-primary"></i>
                    </div>
                    <h5 class="mb-3">Excellence</h5>
                    <p class="text-muted small">We strive for the highest standards in academics, character, and conduct, encouraging students to achieve their full potential.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="value-card text-center p-4 rounded h-100">
                    <div class="value-icon mb-3">
                        <i class="fas fa-handshake fa-2x text-success"></i>
                    </div>
                    <h5 class="mb-3">Integrity</h5>
                    <p class="text-muted small">We uphold honesty, fairness, and ethical behavior in all our actions, building trust within our school community.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="value-card text-center p-4 rounded h-100">
                    <div class="value-icon mb-3">
                        <i class="fas fa-users fa-2x text-info"></i>
                    </div>
                    <h5 class="mb-3">Respect</h5>
                    <p class="text-muted small">We value diversity, treat everyone with dignity, and foster an environment of mutual respect among students, staff, and parents.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="value-card text-center p-4 rounded h-100">
                    <div class="value-icon mb-3">
                        <i class="fas fa-heart fa-2x text-danger"></i>
                    </div>
                    <h5 class="mb-3">Compassion</h5>
                    <p class="text-muted small">We cultivate empathy, kindness, and concern for others, encouraging students to become caring and socially responsible individuals.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- School Facilities -->
<section class="facilities py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-5">
                <span class="badge bg-info mb-3">Infrastructure</span>
                <h2 class="mb-3">School Facilities</h2>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="facility-card text-center p-4 rounded shadow-sm h-100">
                    <div class="facility-icon mb-3">
                        <i class="fas fa-flask fa-2x text-primary"></i>
                    </div>
                    <h5>Science Laboratories</h5>
                    <p class="small text-muted">Well-equipped physics, chemistry, and biology labs for practical learning and experiments.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="facility-card text-center p-4 rounded shadow-sm h-100">
                    <div class="facility-icon mb-3">
                        <i class="fas fa-desktop fa-2x text-success"></i>
                    </div>
                    <h5>Computer Lab</h5>
                    <p class="small text-muted">Modern computer lab with internet access for digital literacy and IT education.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="facility-card text-center p-4 rounded shadow-sm h-100">
                    <div class="facility-icon mb-3">
                        <i class="fas fa-book fa-2x text-warning"></i>
                    </div>
                    <h5>Library</h5>
                    <p class="small text-muted">Extensive collection of books, reference materials, and digital resources for students.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="facility-card text-center p-4 rounded shadow-sm h-100">
                    <div class="facility-icon mb-3">
                        <i class="fas fa-futbol fa-2x text-danger"></i>
                    </div>
                    <h5>Sports Ground</h5>
                    <p class="small text-muted">Spacious playground for cricket, football, volleyball, and other outdoor activities.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Timeline -->
<section class="timeline-section py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-5">
                <span class="badge bg-dark mb-3">Our Journey</span>
                <h2 class="mb-3">Milestones & Achievements</h2>
            </div>
        </div>
        
        <div class="timeline">
            <div class="timeline-item">
                <div class="timeline-date">1999</div>
                <div class="timeline-content">
                    <h5>School Foundation</h5>
                    <p>Hira Model High School established under Iqra Foundation Sindh with initial enrollment of 50 students.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-date">2005</div>
                <div class="timeline-content">
                    <h5>First Batch Graduation</h5>
                    <p>Our first batch of matriculation students graduates with excellent board results.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-date">2010</div>
                <div class="timeline-content">
                    <h5>Infrastructure Expansion</h5>
                    <p>New building constructed with modern classrooms and science laboratories.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-date">2015</div>
                <div class="timeline-content">
                    <h5>Computer Lab Establishment</h5>
                    <p>State-of-the-art computer lab installed with 30 computers and internet facility.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-date">2020</div>
                <div class="timeline-content">
                    <h5>25+ Awards Recognition</h5>
                    <p>School receives multiple awards for academic excellence and community service.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-date">2024</div>
                <div class="timeline-content">
                    <h5>25 Years of Excellence</h5>
                    <p>Celebrating 25 years of providing quality education to the community.</p>
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
                <h2 class="mb-3">Want to Learn More?</h2>
                <p class="mb-0">Visit our campus or contact us to discover how Hira School can benefit your child's education.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="/contact" class="btn btn-light btn-lg px-4">
                    <i class="fas fa-map-marker-alt me-2"></i>Visit Campus
                </a>
                <a href="/admission" class="btn btn-outline-light btn-lg px-4 ms-2">
                    <i class="fas fa-phone me-2"></i>Contact Us
                </a>
            </div>
        </div>
    </div>
</section>

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
    
    .director-message-content h3 {
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