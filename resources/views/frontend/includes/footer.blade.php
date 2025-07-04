<style>
    /* ===== FOOTER SECTION ===== */
    :root {
        --primary: #1a365d;
        --secondary: #e2b979;
        --light: #f8f9fa;
        --dark: #212529;
        --gray: #6c757d;
    }

    .footer {
        background-color: var(--dark);
        color: white;
        padding: 3rem 1rem 1rem 1rem;
    }

    .footer-container {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 2rem;
    }

    .footer-logo {
        margin-bottom: 1.5rem;
    }

    .footer-logo h2 {
        color: var(--secondary);
        font-size: 1.8rem;
        margin-bottom: 0.5rem;
    }

    .footer-logo p {
        color: var(--gray);
        line-height: 1.6;
    }

    .footer-links h3 {
        color: var(--secondary);
        font-size: 1.3rem;
        margin-bottom: 1.5rem;
        position: relative;
        padding-bottom: 0.5rem;
    }

    .footer-links h3:after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 40px;
        height: 2px;
        background: var(--secondary);
    }

    .footer-links ul {
        list-style: none;
    }

    .footer-links li {
        margin-bottom: 0.8rem;
    }

    .footer-links a {
        color: var(--gray);
        text-decoration: none;
        transition: color 0.3s ease;
        display: block;
    }

    .footer-links a:hover {
        color: var(--secondary);
        padding-left: 5px;
    }

    .footer-contact h3 {
        color: var(--secondary);
        font-size: 1.3rem;
        margin-bottom: 1.5rem;
        position: relative;
        padding-bottom: 0.5rem;
    }

    .footer-contact h3:after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 40px;
        height: 2px;
        background: var(--secondary);
    }

    .contact-item {
        display: flex;
        align-items: flex-start;
        margin-bottom: 1rem;
    }

    .contact-icon {
        color: var(--secondary);
        margin-right: 1rem;
        margin-top: 3px;
    }

    .footer-contact .contact-item p, .footer-contact .contact-item  a {
        color: var(--gray);
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .contact-info a:hover {
        color: var(--secondary);
    }

    .footer-bottom {
        max-width: 1200px;
        margin: 2rem auto 0;
        padding-top: 2rem;
        border-top: 1px solid rgba(255,255,255,0.1);
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .social-links {
        margin-bottom: 1.5rem;
    }

    .social-links a {
        color: white;
        background: rgba(255,255,255,0.1);
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        margin: 0 0.5rem;
        transition: all 0.3s ease;
        text-decoration: none;
    }

    .social-links a:hover {
        background: #cba557;
        color: white;
        transform: translateY(-3px);
    }

    .copyright {
        color: var(--gray);
        font-size: 0.9rem;
    }

    @media (max-width: 768px) {
        .footer-container {
            grid-template-columns: 1fr;
            gap: 2.5rem;
        }
        
        .footer-links, .footer-contact {
            margin-top: 1rem;
        }
    }
</style>
<footer class="footer">
    <div class="footer-container">
        <div class="footer-about">
            <div class="footer-logo">
                <a href="index.php">
                    <img src="{{url('public/frontend/images/aayatilegal-footer-logo.png')}}" alt="Aayati Legal Logo">
                </a>
                <p>Providing exceptional legal services with integrity and dedication. Your trusted partner for all legal matters in Delhi-NCR and beyond.</p>
            </div>
        </div>
        
        <div class="footer-links">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/About-us') }}">About Us</a></li>
                <li><a href="{{ url('/Practice-Area') }}">Practice Areas</a></li>
                <li><a href="{{ url('/Contact-us') }}">Contact Us</a></li>
            </ul>
        </div>
        
        <div class="footer-links">
            <h3>Services</h3>
            <ul>
                <li><a href="{{ url('Practice-Area/antitrust-competition') }}">Antitrust/Competition</a></li>
                <li><a href="{{ url('Practice-Area/banking-and-finance') }}">Banking & Finance</a></li>
                <li><a href="{{ url('Practice-Area/consumer-protection') }}">Consumer Protection</a></li>
                <li><a href="{{ url('Practice-Area/corporate-and-commercial-matters') }}">Corporate Law</a></li>
                <li><a href="{{ url('Practice-Area/criminal-litigation') }}">Criminal Litigation</a></li>
                <li><a href="{{ url('Practice-Area/dispute-resolution') }}">Dispute Resolution</a></li>
                <li><a href="{{ url('/Practice-Area') }}">More</a></li>
            </ul>
        </div>
        
        <div class="footer-contact">
            <h3>Contact Info</h3>
            <div class="contact-item">
                <div class="contact-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="contact-info">
                    <p>B-1/9, 2nd Floor, Safdarjung Enclave, Africa Avenue, New Delhi-110029</p>
                </div>
            </div>
            
            <div class="contact-item">
                <div class="contact-icon">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <div class="contact-info">
                    <a href="tel:+918800184922">+91 880 018 4922</a><br>
                </div>
            </div>
            
            <div class="contact-item">
                <div class="contact-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="contact-info">
                    <a href="mailto:info@aayatilegal.com">info@aayatilegal.com</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="footer-bottom">
        <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="copyright">
            <p>&copy; 2023 Aayati Legal. All Rights Reserved. | <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
        </div>
    </div>
</footer>