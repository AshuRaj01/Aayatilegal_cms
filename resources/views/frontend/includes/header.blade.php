<style>
    :root {
        --primary: #1a237e;
        --secondary: #e53935;
        --text: #333;
        --text-light: #777;
        --white: #fff;
        --bg-overlay: rgba(0, 0, 0, 0.6);
    }
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    html {
        scroll-behavior: smooth;
    }

    body {
        overflow-x: hidden;
        background-color: #f8f9fa;
    }
    /* ===== NAVBAR ===== */
    .navbar {
        background: #1C2F4B;
        backdrop-filter: blur(10px);
        padding: 1rem 5%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: fixed;
        width: 100%;
        z-index: 1000;
        box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .logo {
        font-size: clamp(1.5rem, 4vw, 1.8rem);
        font-weight: 700;
        color: var(--primary);
        display: flex;
        align-items: center;
        width: 90px;
    }

    .logo span {
        color: var(--secondary);
        margin-left: 0.3rem;
    }

    .nav-links {
        display: flex;
        gap: 1.5rem;
        align-items: center;
    }

    .nav-links a {
        text-decoration: none;
        color: white;
        font-weight: 600;
        font-size: clamp(0.9rem, 2vw, 1rem);
        transition: color 0.3s;
        position: relative;
    }

    .nav-links a:hover {
        color: #e2b979;
    }

    .nav-links a::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        background: var(--secondary);
        bottom: -5px;
        left: 0;
        transition: width 0.3s;
        display: none;
    }

    .nav-links a:hover::after {
        width: 100%;
    }

    .dropdown {
        position: relative;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background: var(--white);
        min-width: 220px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        z-index: 10;
        top: 100%;
        left: 0;
        animation: fadeIn 0.3s;
        overflow-x: hidden;
        height: 300px;
        scrollbar-width: thin;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown-content a {
        padding: 0.8rem 1rem;
        display: block;
        color: var(--text-light);
        border-bottom: 1px solid #eee;
        font-size: 11px;
    }

    .dropdown-content a:hover {
        color: var(--primary);
        background: #f9f9f9;
    }

    .dropdown-content a:last-child {
        border-bottom: none;
    }

    .enquiry-btn {
        background: #cba557;
        /* color: var(--white) !important; */
        padding: 0.6rem 1.2rem;
        border-radius: 6px;
        transition: all 0.3s;
    }

    /* Mobile Menu */
    .menu-toggle {
        display: none;
        cursor: pointer;
        font-size: 1.5rem;
        color: white;
    }

    /* Mobile Menu */
    .menu-toggle {
        display: none;
        cursor: pointer;
        font-size: 1.5rem;
        color: white;
    }

    /* ===== MOBILE RESPONSIVE ===== */
    @media (max-width: 992px) {
        .nav-links {
            position: fixed;
            top: 99px;
            left: -100%;
            width: 80%;
            height: calc(100vh - 70px);
            background: white;
            flex-direction: column;
            align-items: flex-start;
            padding: 2rem;
            gap: 1.5rem;
            transition: left 0.3s;
            box-shadow: 5px 0 15px rgba(0, 0, 0, 0.1);
        }
        .nav-links a {
            color: black !important;
        }

        .nav-links.active {
            left: 0;
        }

        .dropdown-content {
            position: static;
            box-shadow: none;
            display: none;
            width: 100%;
            margin-top: 0.5rem;
            animation: none;
        }

        .dropdown:hover .dropdown-content {
            display: none;
        }

        .dropdown.active .dropdown-content {
            display: block;
            animation: fadeIn 0.3s;
        }

        .menu-toggle {
            display: block;
        }
    }
</style>
<!-- Navbar -->
<nav class="navbar">
    <div class="logo">
        <a href="{{url('/')}}">
            <img src="{{url('public/frontend/images/aayatilegal-logo.webp')}}" style="width: 100%;" alt="Aayati Legal Logo">
        </a>
    </div>

    <!-- Mobile Menu Toggle -->
    <div class="menu-toggle" id="mobile-menu">
        <i class="fas fa-bars"></i>
    </div>

    <div class="nav-links" id="nav-links">
        <a href="{{url('/')}}">Home</a>
        <a href="{{url('/About-us')}}">About Us</a>
        <div class="dropdown" id="dropdown">
            <a href="{{url('/Practice-Area')}}" class="dropdown-toggle">Practice Areas <i class="fas fa-chevron-down"></i></a>
            <div class="dropdown-content">
                <a href="{{ url('Practice-Area/antitrust-competition') }}">ANTITRUST/COMPETITION</a>
                <a href="{{ url('Practice-Area/banking-and-finance') }}">BANKING & FINANCE</a>
                <a href="{{ url('Practice-Area/consumer-protection') }}">CONSUMER PROTECTION</a>
                <a href="{{ url('Practice-Area/corporate-and-commercial-matters') }}">CORPORATE</a>
                <a href="{{ url('Practice-Area/criminal-litigation') }}">CRIMINAL LITIGATION</a>
                <a href="{{ url('Practice-Area/dispute-resolution') }}">DISPUTE RESOLUTION</a>
                <a href="{{ url('Practice-Area/financial-services-regulatory') }}">FINANCIAL SERVICES REGULATORY</a>
                <a href="{{ url('Practice-Area/insolvency') }}">INSOLVENCY</a>
                <a href="{{ url('Practice-Area/infrastructure-and-energy') }}">INFRASTRUCTURE & ENERGY</a>
                <a href="{{ url('Practice-Area/intellectual-property') }}">INTELLECTUAL PROPERTY</a>
                <a href="{{ url('Practice-Area/labour-and-employment') }}">LABOUR & EMPLOYMENT</a>
                <a href="{{ url('Practice-Area/private-equity-and-venture-capital') }}">PRIVATE EQUITY & VENTURE CAPITAL</a>
                <a href="{{ url('Practice-Area/real-estate-and-property') }}">REAL ESTATE & PROPERTY</a>
                <a href="{{ url('Practice-Area/taxation') }}">TAXATION</a>
                <a href="{{ url('Practice-Area/white-collar-crimes') }}">WHITE COLLAR CRIMES</a>
                <a href="{{ url('Practice-Area/private-client') }}">Private Client</a>
                <a href="{{ url('Practice-Area/technology-media-and-telecommunications') }}"> Technology, Media, and Telecommunications</a>
                <a href="{{ url('Practice-Area/insurance') }}">Insurance</a>
            </div>
        </div>
        <a href="{{url('/Contact-us')}}">Contact Us</a>
        <a href="tel:+918800184922" class="enquiry-btn" style="color: white !important;">Enquiry</a>
    </div>
</nav>

@include('frontend.includes.FloatingComponents')

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- JavaScript -->
<script>
    // Mobile Menu Toggle
    const mobileMenu = document.getElementById('mobile-menu');
    const navLinks = document.getElementById('nav-links');
    const dropdown = document.getElementById('dropdown');

    mobileMenu.addEventListener('click', () => {
        navLinks.classList.toggle('active');
        mobileMenu.innerHTML = navLinks.classList.contains('active') ?
            '<i class="fas fa-times"></i>' :
            '<i class="fas fa-bars"></i>';
    });

    // Dropdown for Mobile
    if (window.innerWidth <= 992) {
        const dropdownToggle = document.querySelector('.dropdown-toggle');
        dropdownToggle.addEventListener('click', (e) => {
            e.preventDefault();
            dropdown.classList.toggle('active');
        });
    }

    // Sticky Navbar Color Change
    window.addEventListener('scroll', () => {
        const navbar = document.querySelector('.navbar');
        const navLinks = document.querySelector('.nav-links a');
        const enquiryBtn = document.querySelector('.enquiry-btn');
        if (window.scrollY > 50) {
            navbar.style.background = '#1C2F4B';
            navbar.style.boxShadow = '0 4px 30px rgba(0, 0, 0, 0.2)';
        } else {
            navbar.style.background = '#1C2F4B';
            navbar.style.boxShadow = '0 2px 20px rgba(0, 0, 0, 0.1)';
        }
    });
</script>