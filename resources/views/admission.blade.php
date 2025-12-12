@extends('layouts.master')

@section('title', 'Admissions - Hira Model High School Mehrabpur')

@section('content')
<!-- Page Header -->
<section class="page-header py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Admissions</li>
                    </ol>
                </nav>
                <h1 class="display-5 fw-bold mb-3">Admissions</h1>
                <p class="lead text-muted mb-0">Begin Your Educational Journey With Us</p>
            </div>
        </div>
    </div>
</section>

<!-- Admission Process Timeline -->
<section class="admission-process py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-5">
                <span class="badge bg-primary-gradient mb-3">Simple 4-Step Process</span>
                <h2 class="mb-4">How to Get Admission</h2>
                <p class="text-muted">Follow these simple steps to join our esteemed institution</p>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="process-timeline">
                    <div class="process-step">
                        <div class="step-number">1</div>
                        <div class="step-content">
                            <i class="fas fa-file-alt fa-2x step-icon text-primary"></i>
                            <h5>Fill Form</h5>
                            <p>Complete admission form online or download</p>
                        </div>
                    </div>
                    
                    <div class="process-step">
                        <div class="step-number">2</div>
                        <div class="step-content">
                            <i class="fas fa-file-upload fa-2x step-icon text-success"></i>
                            <h5>Submit Documents</h5>
                            <p>Submit required documents at school office</p>
                        </div>
                    </div>
                    
                    <div class="process-step">
                        <div class="step-number">3</div>
                        <div class="step-content">
                            <i class="fas fa-file-invoice-dollar fa-2x step-icon text-warning"></i>
                            <h5>Pay Fee</h5>
                            <p>Complete admission fee payment</p>
                        </div>
                    </div>
                    
                    <div class="process-step">
                        <div class="step-number">4</div>
                        <div class="step-content">
                            <i class="fas fa-user-check fa-2x step-icon text-danger"></i>
                            <h5>Get Admitted</h5>
                            <p>Receive admission confirmation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Classes Offered -->
<section class="classes-offered py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-5">
                <span class="badge bg-success-gradient mb-3">Classes Offered</span>
                <h2 class="mb-4">Academic Programs</h2>
                <p class="text-muted">Quality education from early years to matriculation</p>
            </div>
        </div>
        
        <div class="row g-4 justify-content-center">
            @php
                $classes = [
                    ['name' => 'Nursery', 'age' => '3-4 Years', 'color' => 'bg-primary-light', 'icon' => 'fas fa-baby'],
                    ['name' => 'KG', 'age' => '4-5 Years', 'color' => 'bg-success-light', 'icon' => 'fas fa-child'],
                    ['name' => 'One', 'age' => '5-6 Years', 'color' => 'bg-info-light', 'icon' => 'fas fa-1'],
                    ['name' => 'Two', 'age' => '6-7 Years', 'color' => 'bg-warning-light', 'icon' => 'fas fa-2'],
                    ['name' => 'Three', 'age' => '7-8 Years', 'color' => 'bg-danger-light', 'icon' => 'fas fa-3'],
                    ['name' => 'Four', 'age' => '8-9 Years', 'color' => 'bg-purple-light', 'icon' => 'fas fa-4'],
                    ['name' => 'Five', 'age' => '9-10 Years', 'color' => 'bg-pink-light', 'icon' => 'fas fa-5'],
                    ['name' => 'Six', 'age' => '10-11 Years', 'color' => 'bg-indigo-light', 'icon' => 'fas fa-6'],
                    ['name' => 'Seven', 'age' => '11-12 Years', 'color' => 'bg-teal-light', 'icon' => 'fas fa-7'],
                    ['name' => 'Eight', 'age' => '12-13 Years', 'color' => 'bg-orange-light', 'icon' => 'fas fa-8'],
                    ['name' => 'Nine', 'age' => '13-14 Years', 'color' => 'bg-cyan-light', 'icon' => 'fas fa-9'],
                    ['name' => 'Matric', 'age' => '14-15 Years', 'color' => 'bg-gradient-primary', 'icon' => 'fas fa-graduation-cap']
                ];
            @endphp
            
            @foreach($classes as $class)
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <div class="class-card text-center p-3 rounded h-100 shadow-sm {{ $class['color'] }}">
                    <div class="class-icon mb-3">
                        <i class="{{ $class['icon'] }} fa-2x"></i>
                    </div>
                    <h6 class="mb-1 fw-bold">{{ $class['name'] }}</h6>
                    <p class="small text-muted mb-0">{{ $class['age'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Admission Inquiry Form -->
<section class="admission-form-section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow-lg border-0 overflow-hidden">
                    <div class="card-header bg-gradient-primary text-white py-4 position-relative">
                        <div class="position-absolute top-0 end-0 p-3">
                            <i class="fas fa-user-graduate fa-3x opacity-25"></i>
                        </div>
                        <h3 class="mb-2 text-center">
                            <i class="fas fa-pencil-alt me-2"></i>Admission Inquiry Form
                        </h3>
                        <p class="mb-0 text-center opacity-90">Our representative will contact you within 24 hours</p>
                    </div>
                    
                    <div class="card-body p-4 p-md-5">
                        @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show d-flex align-items-center" role="alert">
                            <i class="fas fa-check-circle me-3 fa-lg"></i>
                            <div>
                                <strong>Success!</strong> {{ session('success') }}
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        
                        @if($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="fas fa-exclamation-triangle me-2"></i>
                            <strong>Please correct the following errors:</strong>
                            <ul class="mb-0 mt-2 ps-3">
                                @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        
                        <form method="POST" action="{{ route('admission.submit') }}" id="admissionForm" class="row g-4">
                            @csrf
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name" class="form-label fw-bold text-primary">
                                        <i class="fas fa-user me-2"></i>Student Name
                                    </label>
                                    <input type="text" class="form-control form-control-lg border-primary border-2 rounded-pill" 
                                           id="name" name="name" placeholder="Enter student's full name" 
                                           value="{{ old('name') }}" required>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="father_name" class="form-label fw-bold text-primary">
                                        <i class="fas fa-user-friends me-2"></i>Father Name
                                    </label>
                                    <input type="text" class="form-control form-control-lg border-primary border-2 rounded-pill" 
                                           id="father_name" name="father_name" placeholder="Enter father's name" 
                                           value="{{ old('father_name') }}" required>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="applicant" class="form-label fw-bold text-primary">
                                        <i class="fas fa-handshake me-2"></i>Relation with Student
                                    </label>
                                    <select class="form-select form-select-lg border-primary border-2 rounded-pill" 
                                            id="applicant" name="applicant" required>
                                        <option value="" disabled selected>Select Relation</option>
                                        <option value="father" {{ old('applicant') == 'father' ? 'selected' : '' }}>Father</option>
                                        <option value="mother" {{ old('applicant') == 'mother' ? 'selected' : '' }}>Mother</option>
                                        <option value="student" {{ old('applicant') == 'student' ? 'selected' : '' }}>Student</option>
                                        <option value="other" {{ old('applicant') == 'other' ? 'selected' : '' }}>Other</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="contact" class="form-label fw-bold text-primary">
                                        <i class="fas fa-phone-alt me-2"></i>Contact Number
                                    </label>
                                    <div class="input-group">
                                        <span class="input-group-text border-primary border-2 bg-primary text-white rounded-start-pill">
                                            <i class="fas fa-mobile-alt"></i>
                                        </span>
                                        <input type="tel" class="form-control form-control-lg border-primary border-2 rounded-end-pill" 
                                               id="contact" name="contact" placeholder="03XX-XXXXXXX" 
                                               value="{{ old('contact') }}" pattern="[0-9]{11}" required>
                                    </div>
                                    <small class="form-text text-muted">11 digit number starting with 03</small>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="address" class="form-label fw-bold text-primary">
                                        <i class="fas fa-map-marker-alt me-2"></i>Complete Address
                                    </label>
                                    <textarea class="form-control border-primary border-2 rounded-3" 
                                              id="address" name="address" rows="3" 
                                              placeholder="Enter your complete address" required>{{ old('address') }}</textarea>
                                </div>
                            </div>
                            
                            <div class="col-12 mt-4">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-gradient-primary btn-lg py-3 rounded-pill shadow">
                                        <i class="fas fa-paper-plane me-2"></i>Submit Admission Inquiry
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Documents Required -->
<section class="documents-required py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow-lg border-0">
                    <div class="card-header bg-gradient-success text-white py-4">
                        <h3 class="mb-2 text-center">
                            <i class="fas fa-file-contract me-2"></i>Required Documents for Admission
                        </h3>
                        <p class="mb-0 text-center opacity-90">Keep these documents ready for smooth admission process</p>
                    </div>
                    
                    <div class="card-body p-5">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="doc-category bg-primary-light rounded p-4 h-100">
                                    <h4 class="text-primary mb-3">
                                        <i class="fas fa-star me-2"></i>Essential Documents
                                        <span class="badge bg-primary ms-2">For All Students</span>
                                    </h4>
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-3">
                                            <div class="d-flex align-items-center">
                                                <div class="doc-icon bg-primary text-white rounded-circle p-2 me-3">
                                                    <i class="fas fa-certificate"></i>
                                                </div>
                                                <div>
                                                    <h6 class="mb-1">Student Birth Certificate</h6>
                                                    <p class="small text-muted mb-0">Original and 2 photocopies</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mb-3">
                                            <div class="d-flex align-items-center">
                                                <div class="doc-icon bg-success text-white rounded-circle p-2 me-3">
                                                    <i class="fas fa-id-card"></i>
                                                </div>
                                                <div>
                                                    <h6 class="mb-1">Student B-Form (NADRA)</h6>
                                                    <p class="small text-muted mb-0">Original and 2 photocopies</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mb-3">
                                            <div class="d-flex align-items-center">
                                                <div class="doc-icon bg-warning text-white rounded-circle p-2 me-3">
                                                    <i class="fas fa-user-tie"></i>
                                                </div>
                                                <div>
                                                    <h6 class="mb-1">Father CNIC Copy</h6>
                                                    <p class="small text-muted mb-0">2 attested photocopies</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="doc-category bg-success-light rounded p-4 h-100">
                                    <h4 class="text-success mb-3">
                                        <i class="fas fa-school me-2"></i>Additional Documents
                                        <span class="badge bg-success ms-2">If Applicable</span>
                                    </h4>
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-3">
                                            <div class="d-flex align-items-center">
                                                <div class="doc-icon bg-info text-white rounded-circle p-2 me-3">
                                                    <i class="fas fa-file-export"></i>
                                                </div>
                                                <div>
                                                    <h6 class="mb-1">Previous School Leaving Certificate</h6>
                                                    <p class="small text-muted mb-0">Required for Class 2 to 10</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mb-3">
                                            <div class="d-flex align-items-center">
                                                <div class="doc-icon bg-danger text-white rounded-circle p-2 me-3">
                                                    <i class="fas fa-chart-line"></i>
                                                </div>
                                                <div>
                                                    <h6 class="mb-1">Last Annual Result Card</h6>
                                                    <p class="small text-muted mb-0">Attested copy from previous school</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mb-3">
                                            <div class="d-flex align-items-center">
                                                <div class="doc-icon bg-purple text-white rounded-circle p-2 me-3">
                                                    <i class="fas fa-award"></i>
                                                </div>
                                                <div>
                                                    <h6 class="mb-1">Character Certificate</h6>
                                                    <p class="small text-muted mb-0">From previous school</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="text-center mt-5">
                            <div class="alert alert-info border-0 bg-info-light">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-info-circle fa-2x text-info me-3"></i>
                                    <div class="text-start">
                                        <h5 class="mb-1">Important Note</h5>
                                        <p class="mb-0">All documents must be submitted in original for verification along with 2 attested photocopies each.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Important Notes -->
<section class="important-notes py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-5">
                <span class="badge bg-warning-gradient mb-3">Fee Structure & Policies</span>
                <h2 class="mb-4">Important Information</h2>
                <p class="text-muted">Please review these important notes before admission</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="note-card text-center p-4 rounded h-100 shadow-sm border-top border-5 border-primary">
                    <div class="note-icon mb-3 bg-primary-light rounded-circle p-3 d-inline-block">
                        <i class="fas fa-money-bill-wave fa-2x text-primary"></i>
                    </div>
                    <h5 class="text-primary">Admission Fee</h5>
                    <p class="mb-0">One-time, non-refundable fee payable at admission time</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="note-card text-center p-4 rounded h-100 shadow-sm border-top border-5 border-success">
                    <div class="note-icon mb-3 bg-success-light rounded-circle p-3 d-inline-block">
                        <i class="fas fa-calendar-check fa-2x text-success"></i>
                    </div>
                    <h5 class="text-success">Monthly Fee</h5>
                    <p class="mb-0">Payable before 10th of each month to avoid late charges</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="note-card text-center p-4 rounded h-100 shadow-sm border-top border-5 border-warning">
                    <div class="note-icon mb-3 bg-warning-light rounded-circle p-3 d-inline-block">
                        <i class="fas fa-percentage fa-2x text-warning"></i>
                    </div>
                    <h5 class="text-warning">Annual Discount</h5>
                    <p class="mb-0">10% discount on annual fee payment in advance</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="note-card text-center p-4 rounded h-100 shadow-sm border-top border-5 border-danger">
                    <div class="note-icon mb-3 bg-danger-light rounded-circle p-3 d-inline-block">
                        <i class="fas fa-award fa-2x text-danger"></i>
                    </div>
                    <h5 class="text-danger">Scholarships</h5>
                    <p class="mb-0">Available for exceptional and financially needy students</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="admission-contact py-5">
    <div class="container">
        <!-- Header Row -->
        <div class="row align-items-center mb-5">
            <div class="col-lg-8">
                <h2 class="fw-bold mb-2">Need Help with Admission?</h2>
                <p class="mb-0 text-muted">We're here to guide you throughout the process</p>
            </div>
            <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                <a href="/contact" class="btn btn-contact-custom btn-lg px-4 rounded-pill">
                    <i class="fas fa-headset me-2"></i>Contact Admission Office
                </a>
            </div>
        </div>

        <!-- Contact Cards -->
        <div class="row g-4">
            
            <!-- Phone -->
            <div class="col-md-4">
                <div class="contact-card">
                    <div class="contact-icon-box bg-primary">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <h5 class="fw-bold mt-3">Call Us</h5>
                    <a href="tel:+923023652519" class="contact-link">
                        <i class="fas fa-phone text-primary me-2"></i>+92 302 3652519
                    </a>
                    <a href="tel:+923230344306" class="contact-link">
                        <i class="fas fa-phone text-primary me-2"></i>+92 323 0344306
                    </a>
                    <p class="contact-info-text">
                        <i class="fas fa-clock me-1"></i> Mon–Sat • 8:00 AM – 3:00 PM
                    </p>
                </div>
            </div>

            <!-- WhatsApp -->
            <div class="col-md-4">
                <div class="contact-card">
                    <div class="contact-icon-box bg-success">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <h5 class="fw-bold mt-3">WhatsApp</h5>
                    <a href="https://wa.me/923023652519" target="_blank" class="contact-link">
                        <i class="fab fa-whatsapp text-success me-2"></i>+92 302 3652519
                    </a>
                    <a href="https://wa.me/923230344306" target="_blank" class="contact-link">
                        <i class="fab fa-whatsapp text-success me-2"></i>+92 323 0344306
                    </a>
                    <p class="contact-info-text">
                        <i class="fas fa-clock me-1"></i> 24/7 • Admission Support
                    </p>
                </div>
            </div>

            <!-- Email -->
            <div class="col-md-4">
                <div class="contact-card">
                    <div class="contact-icon-box bg-danger">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h5 class="fw-bold mt-3">Email Us</h5>
                    <a href="mailto:hms.mehrabpur@gmail.com" class="contact-link">
                        <i class="fas fa-envelope text-danger me-2"></i>hms.mehrabpur@gmail.com
                    </a>
                    <p class="contact-info-text">
                        <i class="fas fa-clock me-1"></i> Reply within 24 hours
                    </p>
                </div>
            </div>

        </div>

        <!-- Visit Section -->
        <div class="row mt-5">
            <div class="col-12 text-center">
                <div class="visit-box">
                    <h5 class="fw-bold mb-2">
                        <i class="fas fa-map-marker-alt text-primary me-1"></i>Visit Our Campus
                    </h5>
                    <p class="mb-1">Hira Model High School, Near Police Station, Mehrabpur</p>
                    <p class="text-muted mb-0">Office: Mon–Sat • 8:00 AM – 3:00 PM</p>
                </div>
            </div>
        </div>
    </div>
</section>


<style>
    /* Custom Colors and Gradients */
    :root {
        --primary-color: #0a4d68;
        --secondary-color: #088395;
        --success-color: #198754;
        --warning-color: #ffc107;
        --danger-color: #dc3545;
        --info-color: #0dcaf0;
        --purple-color: #6f42c1;
        --pink-color: #d63384;
        --indigo-color: #6610f2;
        --teal-color: #20c997;
        --orange-color: #fd7e14;
        --cyan-color: #0dcaf0;
    }
    
    .bg-primary-light { background-color: rgba(10, 77, 104, 0.1); }
    .bg-success-light { background-color: rgba(25, 135, 84, 0.1); }
    .bg-warning-light { background-color: rgba(255, 193, 7, 0.1); }
    .bg-danger-light { background-color: rgba(220, 53, 69, 0.1); }
    .bg-info-light { background-color: rgba(13, 202, 240, 0.1); }
    .bg-purple-light { background-color: rgba(111, 66, 193, 0.1); }
    .bg-pink-light { background-color: rgba(214, 51, 132, 0.1); }
    .bg-indigo-light { background-color: rgba(102, 16, 242, 0.1); }
    .bg-teal-light { background-color: rgba(32, 201, 151, 0.1); }
    .bg-orange-light { background-color: rgba(253, 126, 20, 0.1); }
    .bg-cyan-light { background-color: rgba(13, 202, 240, 0.1); }
    
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
    
    /* Admission Process Timeline */
    .process-timeline {
        display: flex;
        justify-content: space-between;
        position: relative;
        padding: 20px 0;
    }
    
    .process-timeline::before {
        content: '';
        position: absolute;
        top: 60px;
        left: 10%;
        right: 10%;
        height: 3px;
        background: linear-gradient(90deg, var(--primary-color), var(--success-color), var(--warning-color), var(--danger-color));
        z-index: 1;
    }
    
    .process-step {
        position: relative;
        z-index: 2;
        text-align: center;
        flex: 1;
        padding: 0 15px;
    }
    
    .step-number {
        width: 40px;
        height: 40px;
        background: white;
        border: 3px solid var(--primary-color);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        color: var(--primary-color);
        margin: 0 auto 15px;
        position: relative;
        z-index: 2;
    }
    
    .step-content {
        background: white;
        padding: 15px;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        transition: transform 0.3s ease;
    }
    
    .step-content:hover {
        transform: translateY(-5px);
    }
    
    .step-icon {
        margin-bottom: 10px;
    }
    
    /* Classes Offered */
    .class-card {
        border: 2px solid transparent;
        transition: all 0.3s ease;
    }
    
    .class-card:hover {
        transform: translateY(-5px) scale(1.05);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }
    
    .class-icon {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
    }
    
    /* Admission Form */
    .admission-form-section .card {
        border-radius: 20px;
        overflow: hidden;
        border: none;
    }
    
    .form-control-lg.rounded-pill {
        padding-left: 20px;
        padding-right: 20px;
    }
    
    .rounded-start-pill {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
        border-top-left-radius: 50rem;
        border-bottom-left-radius: 50rem;
    }
    
    .rounded-end-pill {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
        border-top-right-radius: 50rem;
        border-bottom-right-radius: 50rem;
    }
    
    /* Documents Required */
    .doc-category {
        transition: transform 0.3s ease;
    }
    
    .doc-category:hover {
        transform: translateY(-5px);
    }
    
    .doc-icon {
        width: 45px;
        height: 45px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    /* Important Notes */
    .note-card {
        transition: all 0.3s ease;
        background: white;
    }
    
    .note-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }
    
    .note-icon {
        transition: transform 0.3s ease;
    }
    
    .note-card:hover .note-icon {
        transform: scale(1.1);
    }
    
    /* Contact Main Button */
    .btn-contact-custom {
        background: linear-gradient(45deg, #0061ff, #60a5fa);
        border: none;
        color: white;
        transition: 0.3s ease;
    }
    .btn-contact-custom:hover {
        transform: translateY(-3px);
        opacity: 0.9;
    }

    /* Cards */
    .contact-card {
        background: #ffffff;
        padding: 30px;
        text-align: center;
        border-radius: 20px;
        transition: 0.3s ease;
        border: 1px solid #eee;
        box-shadow: 0 6px 18px rgba(0,0,0,0.05);
    }
    .contact-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.12);
    }

    /* Icon Circle */
    .contact-icon-box {
        width: 70px;
        height: 70px;
        margin: auto;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white !important;
        font-size: 28px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.15);
        animation: pop 0.4s ease;
    }

    /* Links */
    .contact-link {
        display: block;
        margin-top: 10px;
        text-decoration: none;
        color: #333;
        font-weight: 500;
    }
    .contact-link:hover {
        color: #0d6efd;
    }

    /* Text */
    .contact-info-text {
        margin-top: 15px;
        font-size: 14px;
        color: #777;
    }

    /* Visit Box */
    .visit-box {
        background: #f8f9fa;
        padding: 25px;
        border-radius: 16px;
        border: 1px solid #e4e4e4;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
    }

    /* Subtle Icon Animation */
    @keyframes pop {
        from { transform: scale(0.8); }
        to   { transform: scale(1); }
    }

    
    /* Gradients */
    .bg-gradient-primary {
        background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)) !important;
    }
    
    .bg-gradient-success {
        background: linear-gradient(135deg, var(--success-color), #20c997) !important;
    }
    
    .bg-gradient-warning {
        background: linear-gradient(135deg, var(--warning-color), #fd7e14) !important;
    }
    
    .bg-gradient-danger {
        background: linear-gradient(135deg, var(--danger-color), #d63384) !important;
    }
    
    .btn-gradient-primary {
        background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        border: none;
        color: white;
        transition: all 0.3s ease;
    }
    
    .btn-gradient-primary:hover {
        background: linear-gradient(135deg, var(--secondary-color), var(--primary-color));
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(10, 77, 104, 0.3);
    }
    
    /* Responsive Design */
    @media (max-width: 992px) {
        .process-timeline {
            flex-wrap: wrap;
        }
        
        .process-step {
            flex: 0 0 50%;
            margin-bottom: 30px;
        }
        
        .process-timeline::before {
            display: none;
        }
    }
    
    @media (max-width: 768px) {
        .admission-header {
            padding-top: 80px !important;
        }
        
        .admission-header h1 {
            font-size: 2.2rem;
        }
        
        .process-step {
            flex: 0 0 100%;
        }
        
        .class-card {
            padding: 15px 10px;
        }
        
        .class-icon {
            width: 40px;
            height: 40px;
        }
        
        .class-icon i {
            font-size: 1.2rem;
        }
        
        .form-control-lg {
            font-size: 1rem;
        }
        
        .contact-info-1 {
            padding: 20px;
        }
        
        .note-icon {
            padding: 15px;
        }
        
        .note-icon i {
            font-size: 1.5rem;
        }
    }
    
    @media (max-width: 576px) {
        .admission-header {
            padding-top: 60px !important;
        }
        
        .admission-header h1 {
            font-size: 1.8rem;
        }
        
        .class-card h6 {
            font-size: 0.9rem;
        }
        
        .btn-lg {
            padding: 12px 20px;
            font-size: 1rem;
        }
        
        .contact-info-1 {
            padding: 15px;
        }
        
        .doc-icon {
            width: 40px;
            height: 40px;
        }
        
        .doc-icon i {
            font-size: 1rem;
        }
    }
</style>

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Form validation
        const admissionForm = document.getElementById('admissionForm');
        
        admissionForm.addEventListener('submit', function(e) {
            // Simple validation
            const contact = document.getElementById('contact').value;
            const contactPattern = /^03\d{9}$/;
            
            if (!contactPattern.test(contact)) {
                e.preventDefault();
                alert('Please enter a valid 11-digit contact number starting with 03');
                document.getElementById('contact').focus();
                return false;
            }
        });
        
        // Contact number formatting
        const contactInput = document.getElementById('contact');
        contactInput.addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            
            if (value.length > 0 && !value.startsWith('03')) {
                value = '03' + value.substring(2);
            }
            
            if (value.length > 11) {
                value = value.substring(0, 11);
            }
            
            e.target.value = value;
        });
        
        // Add focus effects to form inputs
        const formInputs = document.querySelectorAll('.form-control, .form-select');
        formInputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('input-focused');
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.classList.remove('input-focused');
            });
        });
        
        // Success message auto-dismiss
        @if(session('success'))
        setTimeout(() => {
            const successAlert = document.querySelector('.alert-success');
            if (successAlert) {
                successAlert.style.transition = 'opacity 0.5s';
                successAlert.style.opacity = '0';
                
                setTimeout(() => {
                    successAlert.remove();
                }, 500);
            }
        }, 5000);
        @endif
        
        // Animate process steps on scroll
        const observerOptions = {
            threshold: 0.5
        };
        
        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);
        
        // Observe elements for animation
        const animatedElements = document.querySelectorAll('.process-step, .class-card, .note-card, .contact-info-1');
        animatedElements.forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(20px)';
            el.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
            observer.observe(el);
        });
    });
</script>
@endsection
@endsection