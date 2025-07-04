<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Reset and base styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        :root {
            --primary-color: #1a365d;
            --secondary-color: #e2b979;
            --accent-color: #4a6fa5;
            --light-color: #f8f9fa;
            --dark-color: #212529;
        }

        body {
            line-height: 1.6;
            color: var(--dark-color);
            background-color: #f5f5f5;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Hero Section */
        .about-hero {
            position: relative;
            height: 60vh;
            min-height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            overflow: hidden;
            margin-bottom: 60px;
        }

        .about-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(26, 54, 93, 0.7);
            z-index: 1;
        }

        .about-hero-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 0;
        }

        .about-hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            padding: 0 20px;
            margin-top: 60px;
        }

        .about-hero h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            font-weight: 700;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .about-hero p {
            font-size: 1.2rem;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }

        /* About Firm Section */
        .about-section {
            padding: 60px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
            color: var(--primary-color);
            font-size: 2.5rem;
        }

        .about-content {
            background-color: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 60px;
        }

        .about-content p {
            margin-bottom: 20px;
            font-size: 1.1rem;
            line-height: 1.8;
        }

        .highlight-box {
            background-color: rgba(226, 185, 121, 0.1);
            border-left: 4px solid var(--secondary-color);
            padding: 20px;
            margin: 30px 0;
        }

        .highlight-box p {
            margin-bottom: 0;
            font-style: italic;
            color: var(--primary-color);
            font-weight: 500;
        }

        /* Founder Section */
        .founder-section {
            padding: 60px 0;
            background-color: #fff;
        }

        .founder-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            align-items: start;
            background: white;
        }

        .founder-image {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            margin-left: 40px;
            margin-top: 40px;
        }

        .founder-image img {
            width: 100%;
            height: auto;
            display: block;
        }

        .founder-content {
            background-color: white;
            padding: 40px;
            border-radius: 8px 8px 0px 0px;
            /* box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1); */
        }

        .founder-name {
            color: var(--primary-color);
            font-size: 2rem;
            margin-bottom: 15px;
            position: relative;
            padding-bottom: 15px;
        }

        .founder-name::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 80px;
            height: 3px;
            background-color: var(--secondary-color);
        }

        .founder-title {
            color: var(--accent-color);
            font-size: 1.2rem;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .founder-bio p {
            margin-bottom: 15px;
            line-height: 1.8;
        }

        .founder-highlight {
            background-color: rgba(26, 54, 93, 0.05);
            padding: 20px;
            border-radius: 6px;
            margin: 25px 0;
            border-left: 3px solid var(--primary-color);
        }

        .founder-highlight p {
            margin-bottom: 0;
            font-weight: 500;
            color: var(--primary-color);
        }

        /* Values Section */
        .values-section {
            padding: 60px 0;
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }

        .value-card {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            text-align: center;
            transition: transform 0.3s ease;
        }

        .value-card:hover {
            transform: translateY(-10px);
        }

        .value-icon {
            font-size: 2.5rem;
            color: var(--secondary-color);
            margin-bottom: 20px;
        }

        .value-title {
            color: var(--primary-color);
            font-size: 1.3rem;
            margin-bottom: 15px;
        }

        .value-description {
            color: #555;
            font-size: 0.95rem;
        }

        /* Responsive Styles */
        @media (max-width: 992px) {
            .about-hero h1 {
                font-size: 2.5rem;
            }
            
            .about-hero p {
                font-size: 1.1rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
        }

        @media (max-width: 768px) {
            .about-hero {
                /*height: 40vh;*/
            }
            
            .founder-container {
                grid-template-columns: 1fr;
            }
            
            .founder-image {
                max-width: 400px;
                margin: 0 auto;
            }
        }

        @media (max-width: 576px) {
            .about-hero {
                /*height: 35vh;*/
                min-height: 300px;
            }
            
            .about-hero h1 {
                font-size: 2rem;
            }
            
            .about-content, .founder-content {
                padding: 30px;
            }
            
            .section-title {
                font-size: 1.8rem;
                margin-bottom: 30px;
            }
        }
    </style>
</head>
<body> 
    @include('frontend.includes.header')
    <!-- Hero Section -->
    <section class="about-hero">
        <!-- Background image - replace with your law-related image -->
        <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Law books and scales" class="about-hero-background">
        <div class="about-hero-content">
            <h1>About Aayati Legal</h1>
            <p>Delivering excellence in legal services with a modern approach</p>
        </div>
    </section>

    <!-- About Firm Section -->
    <section class="about-section">
        <div class="container">
            <h2 class="section-title">Our Firm</h2>
            <div class="about-content">
                <p>Aayati Legal is a reputed new-age law firm based in New Delhi, India, consistently ranked among the best law firms in Delhi NCR. We provide top-tier, end-to-end legal assistance and representation to businesses, corporations, start-ups, and governmental bodies across India before all judicial and quasi-judicial forums.</p>
                
                <div class="highlight-box">
                    <p>Our clients recognize us as a best legal firm in Delhi, known for our professional, methodical, and results-driven approach.</p>
                </div>
                
                <p>In our impactful journey, Aayati Legal has delivered pragmatic solutions for even the most intricate legal issues and has consistently earned favorable outcomes. As one of the top ten law firms in Delhi, we have successfully represented esteemed clientele in complex litigations and arbitrations.</p>
                
                <p>Our team comprises experienced individuals with exceptional academic and professional credentials, ensuring optimal results for our clients. We take pride in being a reputed law firm in Delhi, where client success is the top priority.</p>
            </div>
        </div>
    </section>

    <!-- Founder Section -->
    <section class="founder-section">
        <div class="container">
            <h2 class="section-title">Our Founder</h2>
            <div class="founder-container">
                <div class="founder-image">
                    <img src="{{url('public/frontend/images/harmeet-grover.webp')}}" alt="Harmeet Grover">
                </div>
                
                <div class="founder-content" style="padding: 40px 40px 0px 40px;">
                    <h3 class="founder-name">Harmeet Grover</h3>
                    <p class="founder-title">Founder &amp; Principal Attorney</p>
                    
                    <div class="founder-bio">
                        <p>Harmeet Grover is the founder of Aayati Legal and specializes in complex contentious litigations and commercial arbitrations. In a very small yet impactful career, Grover is recognized as one of the top lawyers in his practice area among his contemporaries and has achieved notable success for his clients in high-stakes disputes.</p>
                        
                        <p>Grover's passion for law started at a very young age, and he pursued his undergraduate degree at the University School of Law and Legal Studies, GGSIPU, Delhi. Upon graduation, Grover began his career at the Office of Hon'ble Mr. Justice Dipak Misra, Former Chief Justice of India. During his tenure, he assisted Hon'ble Justice Misra on a variety of domestic and international arbitration proceedings.</p>    
                    </div>
                </div>
            </div>
            <div class="founder-content" style="box-shadow: none;">
                <div class="founder-bio">
                    <div class="founder-highlight">
                        <p>It was here he honed his skills as a lawyer and a proficient arbitration practitioner and developed a reputation for his meticulous thoroughness and strategic thinking.</p>
                    </div>
                    <p>After completing his tenure, Grover launched his independent practice, quickly rising through the ranks by showcasing his exceptional legal acumen and an unmatched ability to manage complex litigation matters with ease. Recognized as one of the best corporate lawyers in Delhi, Grover has successfully advised and represented clients across diverse industries, including construction, finance, real estate, technology, and healthcare.</p>
                    <p>Beyond his thriving legal practice, Grover remains deeply committed to giving back to his community. He actively participates in several local charities that offer pro-bono legal services to low-income individuals and families. As one of the top lawyers for litigations Grover also serves as a mentor to aspiring lawyers, dedicating his time and expertise to helping the next generation of legal professionals achieve success.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="values-section">
        <div class="container">
            <h2 class="section-title">Our Core Values</h2>
            <div class="values-grid">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <h4 class="value-title">Integrity</h4>
                    <p class="value-description">We uphold the highest ethical standards in all our dealings, ensuring complete transparency with our clients.</p>
                </div>
                
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h4 class="value-title">Excellence</h4>
                    <p class="value-description">We strive for perfection in every case, combining deep legal knowledge with meticulous preparation.</p>
                </div>
                
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h4 class="value-title">Client Focus</h4>
                    <p class="value-description">Your success is our priority. We tailor our approach to meet your specific legal needs and business objectives.</p>
                </div>
                
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h4 class="value-title">Innovation</h4>
                    <p class="value-description">We combine traditional legal expertise with modern approaches to deliver cutting-edge solutions.</p>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.includes.footer')
</body>
</html>