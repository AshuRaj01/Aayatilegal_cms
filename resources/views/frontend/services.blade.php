<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice Areas | Aayati Legal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --primary: #1a365d;
            --secondary: #e2b979;
            --light: #f8f9fa;
            --dark: #343a40;
            --gray: #6c757d;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f5f5f5;
            color: #333;
            line-height: 1.6;
        }
        
        .services-hero {
            background: linear-gradient(rgba(26, 54, 93, 0.9), rgba(26, 54, 93, 0.9)), url('https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') no-repeat center center/cover;
            color: white;
            padding: 13rem 1rem 6rem 1rem;
            text-align: center;
            height: 60vh;
        }
        
        .services-hero h1 {
            font-size: 2.8rem;
            margin-bottom: 1rem;
        }
        
        .services-hero p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto;
        }
        
        .services-container {
            max-width: 1200px;
            margin: 3rem auto;
            padding: 0 1rem;
        }
        
        .services-intro {
            text-align: center;
            margin-bottom: 3rem;
        }
        
        .services-intro h2 {
            color: var(--primary);
            font-size: 2rem;
            margin-bottom: 1rem;
        }
        
        .services-intro p {
            color: var(--gray);
            max-width: 800px;
            margin: 0 auto;
        }

        .service-content > p {
            text-align: justify;
        }
        
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 2rem;
        }
        
        .service-card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }
        
        .service-image {
            height: 200px;
            background-size: cover;
            background-position: center;
        }
        
        .service-content {
            padding: 2rem;
        }
        
        .service-content h3 {
            color: var(--primary);
            margin-bottom: 1rem;
            font-size: 1.5rem;
        }
        
        .service-content p {
            color: var(--gray);
            margin-bottom: 1.5rem;
        }
        
        .learn-more {
            display: inline-block;
            color: var(--secondary);
            font-weight: 600;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .learn-more:hover {
            color: var(--primary);
        }
        
        @media (max-width: 768px) {
            .services-hero h1 {
                font-size: 2.2rem;
            }
            
            .services-hero p {
                font-size: 1rem;
            }
            
            .services-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body> 
    @include('frontend.includes.header')

        <section class="services-hero">
        <h1>Our Legal Services</h1>
        <p>Comprehensive legal solutions tailored to meet your specific needs across diverse practice areas</p>
    </section>

    <div class="services-container">
        <div class="services-intro">
            <h2>Our Practice Areas</h2>
            <p>A brief overview of the key legal fields our team works within, representing the diverse scope of our legal practice.</p>
        </div>
        
        <div class="services-grid">
            <!-- Service 1 -->
            <div class="service-card">
                <div class="service-image" style="background-image: url('{{url('public/frontend/images/PracticesAreas/Antitrust-Competition.webp')}}');"></div>
                <div class="service-content">
                    <h3>Antitrust/Competition</h3>
                    <p>Aayati Legal is a leader in competition law and antitrust issues, providing comprehensive legal services to clients navigating the complex landscape of antitrust and competition regulations in India and internationally.</p>
                    <a href="{{ url('Practice-Area/antitrust-competition') }}" class="learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            
            <!-- Service 2 -->
            <div class="service-card">
                <div class="service-image" style="background-image: url('{{url('public/frontend/images/PracticesAreas/BANKING-and-FINANCE.webp')}}');"></div>
                <div class="service-content">
                    <h3>Banking & Finance</h3>
                    <p>In today's complex and ever-evolving financial landscape, businesses and individuals alike require expert legal guidance to navigate the intricacies of banking and financial regulations.</p>
                    <a href="{{ url('Practice-Area/banking-and-finance') }}" class="learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            
            <!-- Service 3 -->
            <div class="service-card">
                <div class="service-image" style="background-image: url('{{url('public/frontend/images/PracticesAreas/CONSUMER-PROTECTION.webp')}}');"></div>
                <div class="service-content">
                    <h3>Consumer Protection</h3>
                    <p>We, at Aayati Legal, offer comprehensive legal counsel and representation to both consumers and businesses, helping them understand and comply with India's consumer regulations.</p>
                    <a href="{{ url('Practice-Area/consumer-protection') }}" class="learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            
            <!-- Service 4 -->
            <div class="service-card">
                <div class="service-image" style="background-image: url('{{url('public/frontend/images/PracticesAreas/CORPORATE.webp')}}');"></div>
                <div class="service-content">
                    <h3>Corporate</h3>
                    <p>At Aayati Legal, our general corporate practice is dedicated to providing comprehensive legal solutions that empower businesses at every stage of growth and development.</p>
                    <a href="{{ url('Practice-Area/corporate-and-commercial-matters') }}" class="learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            
            <!-- Service 5 -->
            <div class="service-card">
                <div class="service-image" style="background-image: url('{{url('public/frontend/images/PracticesAreas/CRIMINAL-LITIGATION.webp')}}');"></div>
                <div class="service-content">
                    <h3>Criminal Litigation</h3>
                    <p>We, at Aayati Legal, are dedicated to safeguarding the rights and liberties of accused individuals and entities. We provide robust defence strategies and unwavering advocacy to ensure justice is served.</p>
                    <a href="{{ url('Practice-Area/criminal-litigation') }}" class="learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            
            <!-- Service 6 -->
            <div class="service-card">
                <div class="service-image" style="background-image: url('{{url('public/frontend/images/PracticesAreas/DISPUTE-RESOLUTION.webp')}}');"></div>
                <div class="service-content">
                    <h3>Dispute Resolution</h3>
                    <p>In this intricate landscape of legal disputes, finding effective and efficient resolution is paramount. At Aayati Legal, we understand that disputes can arise in various aspects of life and business, often causing significant stress and uncertainty.</p>
                    <a href="{{ url('Practice-Area/dispute-resolution') }}" class="learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            
            <!-- Service 7 -->
            <div class="service-card">
                <div class="service-image" style="background-image: url('{{url('public/frontend/images/PracticesAreas/FINANCIAL-SERVICES-REGULATORY.webp')}}');"></div>
                <div class="service-content">
                    <h3>Financial Services Regulatory</h3>
                    <p>The financial technology (Fintech) sector is revolutionizing how we interact with money, investments, and financial services.</p>
                    <a href="{{ url('Practice-Area/financial-services-regulatory') }}" class="learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            
            <!-- Service 8 -->
            <div class="service-card">
                <div class="service-image" style="background-image: url('{{url('public/frontend/images/PracticesAreas/INSOLVENCY.webp')}}');"></div>
                <div class="service-content">
                    <h3>Insolvency</h3>
                    <p>Insolvency regulations offer a structured framework to address financial distress, providing solutions for both debtors and creditors in today's complex economic landscape.</p>
                    <a href="{{ url('Practice-Area/insolvency') }}" class="learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            
            <!-- Service 9 -->
            <div class="service-card">
                <div class="service-image" style="background-image: url('{{url('public/frontend/images/PracticesAreas/INFRASTRUCTURE-and-ENERGY.webp')}}');"></div>
                <div class="service-content">
                    <h3>Infrastructure & Energy</h3>
                    <p>Robust infrastructure and sustainable energy solutions are critical for driving economic growth and enhancing quality of life in modern societies</p>
                    <a href="{{ url('Practice-Area/infrastructure-and-energy') }}" class="learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            
            <!-- Service 10 -->
            <div class="service-card">
                <div class="service-image" style="background-image: url('{{url('public/frontend/images/PracticesAreas/INFRASTRUCTURE-and-ENERGY.webp')}}');"></div>
                <div class="service-content">
                    <h3>Intellectual Property</h3>
                    <p>We, at Aayati Legal, provide a comprehensive range of services to help you protect, manage, and enforce your intellectual property rights:</p>
                    <a href="{{ url('Practice-Area/intellectual-property') }}" class="learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            
            <!-- Service 11 -->
            <div class="service-card">
                <div class="service-image" style="background-image: url('{{url('public/frontend/images/PracticesAreas/LABOUR-and-EMPLOYMENT.webp')}}');"></div>
                <div class="service-content">
                    <h3>Labour & Employment</h3>
                    <p>In the evolving landscape of labor practices, expert legal counsel is essential foroster productive workplace relationships.</p>
                    <a href="{{ url('Practice-Area/labour-and-employment') }}" class="learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            
            <!-- Service 12 -->
            <div class="service-card">
                <div class="service-image" style="background-image: url('{{url('public/frontend/images/PracticesAreas/PRIVATE-EQUITY-and-VENTURE-CAPITAL.webp')}}');"></div>
                <div class="service-content">
                    <h3>Private Equity & Venture Capital</h3>
                    <p>In today's dynamic financial landscape, private equity (PE) and venture capital (VC) investments are pivotal in driving innovation and growth.</p>
                    <a href="{{ url('Practice-Area/private-equity-and-venture-capital') }}" class="learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            
            <!-- Service 13 -->
            <div class="service-card">
                <div class="service-image" style="background-image: url('{{url('public/frontend/images/PracticesAreas/REAL-ESTATE-and-PROPERTY.webp')}}');"></div>
                <div class="service-content">
                    <h3>Real Estate & Property</h3>
                    <p>We, at Aayati Legal, provide a comprehensive range of services to help you protect, manage, and enforce your intellectual property rights:</p>
                    <a href="{{ url('Practice-Area/real-estate-and-property') }}" class="learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            
            <!-- Service 14 -->
            <div class="service-card">
                <div class="service-image" style="background-image: url('{{url('public/frontend/images/PracticesAreas/TAXATION.webp')}}');"></div>
                <div class="service-content">
                    <h3>Taxation</h3>
                    <p>Navigating the intricate landscape of tax law can be a daunting challenge for individuals and businesses alike.</p>
                    <a href="{{ url('Practice-Area/taxation') }}" class="learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            
            <!-- Service 15 -->
            <div class="service-card">
                <div class="service-image" style="background-image: url('{{url('public/frontend/images/PracticesAreas/WHITE-COLLAR-CRIMES.webp')}}');"></div>
                <div class="service-content">
                    <h3>White Collar Crimes</h3>
                    <p>We understand the intricacies of white-collar crime allegations and are dedicated to providing robust legal representation to those facing such charges.</p>
                    <a href="{{ url('Practice-Area/white-collar-crimes') }}" class="learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>

    @include('frontend.includes.footer')
</body>
</html>