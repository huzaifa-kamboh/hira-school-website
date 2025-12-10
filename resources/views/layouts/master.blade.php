<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>@yield('title', 'Hira Model High School Mehrabpur')</title>
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  
  <style>
    :root {
      --primary-color: #0A4D68;
      --secondary-color: #088395;
      --accent-color: #05BFDB;
      --light-color: #E3FEF7;
      --dark-color: #003C43;
      --text-color: #333333;
      --text-light: #6c757d;
      --white: #ffffff;
      --shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
      --transition: all 0.3s ease;
    }

    * {
      box-sizing: border-box;
    }

    body {
      background-color: #f8f9fa;
      font-family: 'Roboto', sans-serif;
      color: var(--text-color);
      padding-top: 160px;
      margin: 0;
    }

    /* ===== TOP INFO BAR ===== */
    .top-info-bar {
      background: linear-gradient(90deg, var(--primary-color), var(--dark-color));
      color: var(--white);
      padding: 0; /* Remove padding, use min-height instead */
      font-size: 0.85rem;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 2000;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      min-height: 40px; /* Fixed height for desktop */
      display: flex;
      align-items: center; /* Vertically center content */
    }

    .top-info-content {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 15px;
      width: 100%;
      padding: 5px 0; /* Small padding instead of item padding */
    }

    .contact-info {
      display: flex;
      gap: 20px;
      flex-wrap: wrap;
      align-items: center; /* Vertically center items */
    }

    .info-item {
      display: flex;
      align-items: center;
      gap: 8px;
      transition: var(--transition);
      padding: 4px 0; /* Small vertical padding */
    }

    .info-item:hover {
      color: var(--accent-color);
    }

    .info-item i {
      font-size: 0.9rem;
    }

    .social-links {
      display: flex;
      gap: 12px;
      align-items: center;
    }

    .social-links a {
      color: var(--white);
      font-size: 1rem;
      transition: var(--transition);
      width: 28px;
      height: 28px;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.1);
      text-decoration: none;
    }

    .social-links a:hover {
      background: var(--accent-color);
      color: var(--white);
      transform: translateY(-2px);
    }

    /* ===== MAIN NAVBAR ===== */
    .navbar {
      background-color: var(--white);
      box-shadow: var(--shadow);
      padding: 0;
      position: fixed;
      top: 40px; /* Height of top info bar */
      left: 0;
      width: 100%;
      z-index: 1999;
      transition: var(--transition);
      min-height: 80px; /* Fixed height for navbar */
      display: flex;
      align-items: center;
    }

    .navbar.scrolled {
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
    }

    .navbar-container {
      max-width: 1400px;
      margin: 0 auto;
      padding: 0 15px;
      width: 100%;
    }

    .navbar-brand {
      font-family: 'Poppins', sans-serif;
      font-weight: 700;
      color: var(--primary-color);
      display: flex;
      align-items: center;
      gap: 12px;
      padding: 5px 0;
      transition: var(--transition);
      margin-right: 0;
    }

    .navbar-brand:hover {
      color: var(--secondary-color);
    }

    .navbar-logo {
      height: 65px;
      width: auto;
      transition: var(--transition);
      object-fit: contain;
    }

    .navbar.scrolled .navbar-logo {
      height: 55px;
    }

    .school-name {
      display: flex;
      flex-direction: column;
      line-height: 1.1;
    }

    .school-main-name {
      font-size: 1.2rem;
      font-weight: 700;
      color: var(--primary-color);
      white-space: normal;
      line-height: 1.2;
    }

    .school-tagline {
      font-size: 0.75rem;
      font-weight: 500;
      color: var(--secondary-color);
      letter-spacing: 0.3px;
      white-space: normal;
      line-height: 1.1;
    }

    /* Responsive text classes for school name */
    @media (min-width: 992px) {
      .school-main-name {
        font-size: 1.4rem;
      }
      .school-tagline {
        font-size: 0.85rem;
      }
    }

    @media (min-width: 1200px) {
      .school-main-name {
        font-size: 1.6rem;
      }
      .school-tagline {
        font-size: 0.9rem;
      }
    }

    /* Nav Items */
    .navbar-nav {
      gap: 5px;
    }

    .nav-link {
      color: var(--text-color) !important;
      font-weight: 600;
      font-family: 'Poppins', sans-serif;
      padding: 12px 18px !important;
      border-radius: 6px;
      margin: 0 2px;
      position: relative;
      transition: var(--transition);
      display: flex;
      align-items: center;
      gap: 8px;
      font-size: 0.95rem;
    }

    .nav-link i {
      font-size: 0.95rem;
    }

    .nav-link:hover, 
    .nav-link:focus,
    .nav-link.active {
      color: var(--primary-color) !important;
      background-color: rgba(10, 77, 104, 0.05);
    }

    /* FIXED: Active link indicator for desktop */
    .nav-link.active::before {
      content: '';
      position: absolute;
      left: 18px;
      right: 18px;
      bottom: 6px;
      height: 3px;
      background-color: var(--accent-color);
      border-radius: 2px;
    }

    /* Mobile Menu Toggle */
    .navbar-toggler {
      border: none;
      padding: 8px;
      border-radius: 6px;
      background-color: rgba(10, 77, 104, 0.05);
      margin-left: auto;
    }

    .navbar-toggler:focus {
      box-shadow: 0 0 0 2px rgba(10, 77, 104, 0.2);
    }

    .navbar-toggler-icon {
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%2810, 77, 104, 0.8%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
      width: 1.2em;
      height: 1.2em;
    }

    /* Mobile Menu - FIXED VERTICAL ALIGNMENT */
    @media (max-width: 991px) {
      body {
        padding-top: 120px; /* Reduced because we have better height control */
      }
      
      .top-info-bar {
        min-height: 35px; /* Reduced height for mobile */
        padding: 0;
      }
      
      .top-info-content {
        padding: 3px 0; /* Smaller padding */
        gap: 10px;
        justify-content: center; /* Center content on mobile */
      }
      
      .contact-info {
        justify-content: center;
        gap: 10px;
        flex-wrap: wrap;
      }
      
      .info-item {
        padding: 2px 0; /* Smaller padding */
        font-size: 0.75rem;
      }
      
      .info-item i {
        font-size: 0.8rem;
      }
      
      .social-links {
        gap: 8px;
      }
      
      .social-links a {
        width: 24px;
        height: 24px;
        font-size: 0.9rem;
      }
      
      .navbar {
        top: 35px; /* Adjusted for smaller top bar */
        min-height: 65px; /* Reduced navbar height on mobile */
      }
      
      .navbar-brand {
        flex: 1;
        max-width: 70%;
      }
      
      .navbar-logo {
        height: 50px;
        min-width: 50px;
      }
      
      .navbar-nav {
        padding: 10px 0;
        gap: 3px;
      }
      
      .nav-link {
        padding: 10px 15px !important;
        margin: 2px 0;
        font-size: 0.9rem;
      }
      
      /* FIXED: Active link indicator for mobile */
      .nav-link.active::before {
        content: '';
        position: absolute;
        left: 0;
        right: auto;
        width: 4px;
        height: 60%;
        top: 20%;
        bottom: auto;
        background-color: var(--accent-color);
        border-radius: 0 2px 2px 0;
      }
      
      .navbar-collapse {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        z-index: 2001;
        background-color: var(--white);
        border-radius: 0 0 12px 12px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        padding: 10px 15px 15px;
        margin-top: 0;
      }
      
      .navbar-collapse.show {
        position: fixed;
        top: 100px; /* Top bar (35px) + Navbar (65px) = 100px */
        z-index: 2001;
      }
      
      /* Small mobile adjustments */
      @media (max-width: 768px) {
        .top-info-content {
          flex-direction: column;
          gap: 8px;
        }
        
        .contact-info {
          flex-direction: column;
          gap: 5px;
          width: 100%;
        }
        
        .info-item {
          justify-content: center;
          width: 100%;
        }
        
        .social-links {
          justify-content: center;
          width: 100%;
          margin-top: 5px;
        }
      }
      
      /* Extra small mobile */
      @media (max-width: 576px) {
        body {
          padding-top: 115px;
        }
        
        .top-info-bar {
          min-height: 30px;
        }
        
        .navbar {
          top: 30px;
          min-height: 60px;
        }
        
        .navbar-collapse.show {
          top: 90px; /* Adjusted for smaller heights */
        }
        
        .navbar-logo {
          height: 45px;
          min-width: 45px;
        }
        
        .school-main-name {
          font-size: 1rem;
        }
        
        .school-tagline {
          font-size: 0.65rem;
        }
        
        .info-item {
          font-size: 0.7rem;
        }
        
        .navbar-toggler {
          padding: 6px;
        }
      }
      
      /* Very small mobile */
      @media (max-width: 400px) {
        .navbar-brand {
          gap: 8px;
        }
        
        .navbar-logo {
          height: 40px;
          min-width: 40px;
        }
        
        .school-main-name {
          font-size: 0.9rem;
        }
        
        .school-tagline {
          font-size: 0.6rem;
        }
      }
    }

    /* ===== FOOTER ===== */
    .demo-footer {
      background-color: var(--dark-color);
      color: white;
      padding: 20px 15px;
      margin-top: 40px;
      margin-bottom: 30px;
      border-radius: 10px;
      text-align: center;
      position: relative;
      z-index: 1;
    }

    .demo-footer::before {
      content: '';
      display: block;
      width: 100px;
      height: 3px;
      background: linear-gradient(90deg, var(--accent-color), var(--secondary-color));
      margin: 0 auto 15px auto;
      border-radius: 2px;
    }

    .demo-footer p {
      margin: 0;
      padding: 0;
      line-height: 1.5;
      font-size: 0.95rem;
    }

    /* Responsive footer */
    @media (max-width: 768px) {
      .demo-footer {
        padding: 15px 10px;
        margin-top: 30px;
        margin-bottom: 20px;
        border-radius: 8px;
      }
      
      .demo-footer::before {
        width: 80px;
        margin-bottom: 12px;
      }
      
      .demo-footer p {
        font-size: 0.9rem;
      }
    }

    @media (max-width: 576px) {
      .demo-footer {
        padding: 12px 8px;
        margin-top: 25px;
        margin-bottom: 15px;
        border-radius: 6px;
      }
      
      .demo-footer::before {
        width: 60px;
        height: 2px;
        margin-bottom: 10px;
      }
      
      .demo-footer p {
        font-size: 0.85rem;
      }
    }

    /* ===== CONTENT AREA ===== */
    .demo-content {
      min-height: 800px;
      padding: 30px 20px;
      background: linear-gradient(180deg, #f8f9fa 0%, #e9ecef 100%);
      border-radius: 12px;
      margin-top: 20px;
      z-index: 1;
      position: relative;
    }

    .demo-content h1 {
      color: var(--primary-color);
      font-family: 'Poppins', sans-serif;
      font-weight: 700;
      margin-bottom: 20px;
    }

    .demo-content p {
      font-size: 1.1rem;
      line-height: 1.6;
      max-width: 800px;
      margin-bottom: 20px;
    }

    /* WhatsApp specific styling */
    .whatsapp-link {
      color: #25D366 !important;
    }

    .whatsapp-link:hover {
      color: #128C7E !important;
    }
  </style>
</head>
<body>
  <!-- TOP INFO BAR - FIXED VERTICAL CENTERING -->
  <div class="top-info-bar">
    <div class="container-fluid navbar-container">
      <div class="top-info-content">
        <div class="contact-info">
          <div class="info-item">
            <i class="fas fa-map-marker-alt"></i>
            <span>Ghalla Mandi Road Mehrabpur, Sindh</span>
          </div>
          <div class="info-item">
            <i class="fab fa-whatsapp whatsapp-link"></i>
            <span>+92 302 3652519</span>
          </div>
          <div class="info-item">
            <i class="fab fa-whatsapp whatsapp-link"></i>
            <span>+92 323 0344306</span>
          </div>
          <div class="info-item">
            <i class="fas fa-envelope"></i>
            <span>hms.mehrabpur@gmail.com</span>
          </div>
        </div>
        <div class="social-links">
          <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
          <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
          <a href="#" title="YouTube"><i class="fab fa-youtube"></i></a>
          <a href="#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </div>
  </div>

  <!-- MAIN NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid navbar-container">
      <a class="navbar-brand" href="/">
        <img src="/images/hira-logo.png" alt="Hira School Logo" class="navbar-logo" />
        <div class="school-name">
          <span class="school-main-name">Hira Model High School Mehrabpur</span>
          <span class="school-tagline">A Project of Iqra Foundation Sindh</span>
        </div>
      </a>

      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto align-items-lg-center">
          <li class="nav-item">
            <a class="nav-link active" href="/home">
              <i class="fas fa-home"></i>
              <span>Home</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about">
              <i class="fas fa-info-circle"></i>
              <span>About Us</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admission">
              <i class="fas fa-graduation-cap"></i>
              <span>Admissions</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/careers">
              <i class="fas fa-briefcase"></i>
              <span>Careers</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contact">
              <i class="fas fa-envelope"></i>
              <span>Contact Us</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- CONTENT AREA -->
  <div class="container mt-4">
    <div class="row justify-content-center">
      <div class="col-12">
        <!-- Laravel blade syntax for dynamic content -->
        @yield('content')
      </div>
    </div>
    
    <!-- FOOTER -->
    <div class="demo-footer mt-5">
      <p>© {{ date('Y') }} Hira Model High School Mehrabpur<br>All Rights Reserved</p>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  
  <script>
    // Navbar scroll effect
    window.addEventListener('scroll', function() {
      const navbar = document.querySelector('.navbar');
      if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    });

    // Close mobile menu when clicking a link
    document.addEventListener('DOMContentLoaded', function() {
      const navLinks = document.querySelectorAll('.nav-link');
      const navbarToggler = document.querySelector('.navbar-toggler');
      const navbarCollapse = document.querySelector('.navbar-collapse');
      
      navLinks.forEach(link => {
        link.addEventListener('click', () => {
          if (navbarCollapse.classList.contains('show')) {
            navbarToggler.click();
          }
        });
      });
    });

    // Mobile menu overlay management
    document.addEventListener('DOMContentLoaded', function() {
      const navbarCollapse = document.getElementById('navbarNav');
      const navbarToggler = document.querySelector('.navbar-toggler');
      
      navbarToggler.addEventListener('click', function() {
        setTimeout(function() {
          if (navbarCollapse.classList.contains('show')) {
            // Add overlay
            const overlay = document.createElement('div');
            overlay.className = 'mobile-menu-overlay';
            overlay.style.position = 'fixed';
            overlay.style.top = '0';
            overlay.style.left = '0';
            overlay.style.width = '100%';
            overlay.style.height = '100%';
            overlay.style.background = 'rgba(0, 0, 0, 0.5)';
            overlay.style.zIndex = '2000';
            overlay.style.display = 'block';
            overlay.addEventListener('click', function() {
              navbarToggler.click();
            });
            document.body.appendChild(overlay);
          } else {
            // Remove overlay
            const overlay = document.querySelector('.mobile-menu-overlay');
            if (overlay) {
              overlay.remove();
            }
          }
        }, 50);
      });
    });
  </script>
</body>
</html>