<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aayati Legal - Trusted Law Firm</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{url('public/frontend/css/style.css')}}">
</head>
<body>
    @include('frontend.includes.header')

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Committed to Helping Our Clients Succeed</h1>
            <p>You Need A Reliable Law Firm That Helps Deal With Your Legal Matters.</p>
            <button class="cta-btn">Get Legal Advice</button>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="about-section">
        <div class="container">
            <div class="row g-5 align-items-center" style="width: 100%;">
                <!-- Image Column -->
                <div class="col-12 col-md-6">
                    <div class="about-image">
                        <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f" 
                            class="img-fluid" 
                            alt="Aayati Legal Office">
                    </div>
                </div>

                <!-- Content Column -->
                <div class="col-12 col-md-6">
                    <h2 class="brand-primary mb-4">
                        About <span class="brand-accent">Aayati Legal</span>
                    </h2>
                    
                    <p class="text-secondary mb-4">
                        Aayati Legal, a full-service new-age law firm based in New Delhi, India, is committed to providing 
                        comprehensive legal assistance and representation to businesses, corporations, start-ups, and 
                        governmental bodies across India before all judicial and quasi-judicial forums.
                    </p>

                    <div class="highlight-quote">
                        <p class="fst-italic mb-0">
                            "Recognized as one of the best legal firms in Delhi and counted among the top ten law firms 
                            in Delhi, we have earned a reputation for delivering sophisticated and pragmatic solutions 
                            to even the most complex legal challenges."
                        </p>
                    </div>

                    <ul class="list-unstyled feature-list">
                        <li class="d-flex align-items-center">
                            <i class="fas fa-gavel brand-accent me-3 fs-5"></i>
                            Trusted tax law specialists in Delhi
                        </li>
                        <li class="d-flex align-items-center">
                            <i class="fas fa-award brand-accent me-3 fs-5"></i>
                            Top 10 law firm in Delhi NCR
                        </li>
                        <li class="d-flex align-items-center">
                            <i class="fas fa-users brand-accent me-3 fs-5"></i>
                            Serving businesses & government bodies
                        </li>
                    </ul>

                    <button class="btn btn-brand">
                        Read More <i class="fas fa-arrow-right ms-2"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="services-section">
        <div class="container"> 
            <div class="section-header">
                <h2 style="color: #cba557;">Our Practice Areas</h2>
                <p style="color: white;">Comprehensive legal solutions tailored to your specific needs</p>
            </div>
            
            <div class="services-grid">
                <!-- Service 1 -->
                <div class="service-card">
                    <div class="service-image" style="background-image: url('https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80');">
                        <!-- Image Credit: Unsplash - Scales of Justice -->
                    </div>
                    <div class="service-content">
                        <h3>Antitrust/Competition</h3>
                        <p>Aayati Legal is a leader in competition law and antitrust issues, providing comprehensive legal services to clients navigating the complex landscape of antitrust and competition regulations in India and internationally.</p>
                        <a href="{{ url('Practice-Area/antitrust-competition') }}" class="read-more">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                
                <!-- Service 2 -->
                <div class="service-card">
                    <div class="service-image" style="background-image: url('https://images.unsplash.com/photo-1535320903710-d993d3d77d29?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80');">
                        <!-- Image Credit: Unsplash - Banking -->
                    </div>
                    <div class="service-content">
                        <h3>Banking & Finance</h3>
                        <p>In today's complex and ever-evolving financial landscape, businesses and individuals alike require expert legal guidance to navigate the intricacies of banking and financial regulations.</p>
                        <a href="{{ url('Practice-Area/banking-and-finance') }}" class="read-more">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                
                <!-- Service 3 -->
                <div class="service-card">
                    <div class="service-image" style="background-image: url('https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80');">
                        <!-- Image Credit: Unsplash - Consumer Protection -->
                    </div>
                    <div class="service-content">
                        <h3>Consumer Protection</h3>
                        <p>We offer comprehensive legal counsel and representation to both consumers and businesses, helping them understand and comply with India's consumer regulations.</p>
                        <a href="{{ url('Practice-Area/consumer-protection') }}" class="read-more">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                
                <!-- Service 4 -->
                <div class="service-card">
                    <div class="service-image" style="background-image: url('https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80');">
                        <!-- Image Credit: Unsplash - Corporate -->
                    </div>
                    <div class="service-content">
                        <h3>Corporate</h3>
                        <p>Our general corporate practice is dedicated to providing comprehensive legal solutions that empower businesses at every stage of growth and development.</p>
                        <a href="{{ url('Practice-Area/corporate-and-commercial-matters') }}" class="read-more">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                
                <!-- Service 5 -->
                <div class="service-card">
                    <div class="service-image" style="background-image: url('https://images.unsplash.com/photo-1589391886645-d51941baf7fb?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80');">
                        <!-- Image Credit: Unsplash - Courtroom -->
                    </div>
                    <div class="service-content">
                        <h3>Criminal Litigation</h3>
                        <p>We are dedicated to safeguarding the rights and liberties of accused individuals and entities. We provide robust defence strategies and unwavering advocacy to ensure justice is served.</p>
                        <a href="{{ url('Practice-Area/criminal-litigation') }}" class="read-more">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                
                <!-- Service 6 - Best Firm -->
                <div class="service-card"> <!-- Class="best-firm-card" for showing a populor Card -->
                    <div class="best-firm">Best Legal Firm</div>
                    <div class="service-image" style="background-image: url('https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80');">
                        <!-- Image Credit: Unsplash - Handshake -->
                    </div>
                    <div class="service-content">
                        <h3>Dispute Resolution</h3>
                        <p>In this intricate landscape of legal disputes, finding effective and efficient resolution is paramount. We understand that disputes can arise in various aspects of life and business, often causing significant stress and uncertainty.</p>
                        <a href="{{ url('Practice-Area/dispute-resolution') }}" class="read-more">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <button class="btn btn-brand" style="margin-top: 30px; background: #cba557;">
                Explore Our Expertise <i class="fas fa-arrow-right ms-2"></i>
            </button>   
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="why-choose-section">
        <div class="container">
            <div class="section-header">
                <h2>Why Choose Us</h2>
            </div>
            
            <div class="benefits-grid">
                <!-- Benefit 1 -->
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <div class="benefit-content">
                        <h3>Proactive and Solution-Oriented</h3>
                        <p>We take a forward-thinking approach to contentious legal problems, focusing on practical solutions rather than just identifying issues.</p>
                    </div>
                </div>
                
                <!-- Benefit 2 -->
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="benefit-content">
                        <h3>Deep Business Understanding</h3>
                        <p>Our team possesses unparalleled understanding of business realities, ensuring our legal advice aligns with your commercial objectives.</p>
                    </div>
                </div>
                
                <!-- Benefit 3 -->
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="benefit-content">
                        <h3>Quick Turnaround & Efficiency</h3>
                        <p>We pride ourselves on delivering timely, efficient legal services without compromising on quality or attention to detail.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Banner -->
    <section class="compact-banner">
        <div class="banner-content">
            <h1>Trustworthy Legal Support: A Law Firm You Can Rely On</h1>
            <p>Need Legal Help? Consult the Best Arbitration Criminal, Corporate, and Property Lawyer in Delhi – NCR Today!</p>
            <a href="#contact" class="cta-button">Get Free Consultation</a>
        </div>
    </section>

    <!-- Contact Us Section -->
    <section class="contact-section" id="contact">
        <div class="section-header">
            <h2>Contact Us</h2>
        </div>
        
        <div class="contact-container">
            <div class="contact-info">
                <h3>Get in Touch</h3>
                
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="contact-details">
                        <h4>Office Address</h4>
                        <p>B-1/9, 2nd Floor, Safdarjung Enclave, Africa Avenue, New Delhi-110029</p>
                    </div>
                </div>
                
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="contact-details">
                        <h4>Phone Number</h4>
                        <p><a href="tel:+918800184922">+91 880 018 4922</a></p>
                    </div>
                </div>
                
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="contact-details">
                        <h4>Email Address</h4>
                        <p><a href="mailto:info@aayatilegal.com">info@aayatilegal.com</a></p>
                    </div>
                </div>
                
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="contact-details">
                        <h4>Working Hours</h4>
                        <p>Monday to Friday: 9:00 AM - 7:00 PM</p>
                        <p>Saturday: 10:00 AM - 4:00 PM</p>
                    </div>
                </div>
            </div>
            
            <div class="contact-form">
                <h3>Send Us a Message</h3>
                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>
                    
                    <div style="display: flex; gap: 10px">
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>                    
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Your Message</label>
                        <textarea id="message" name="message" class="form-control" required></textarea>
                    </div>
                    
                    <button type="submit" class="submit-btn">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('frontend.includes.footer')
</body>
</html>