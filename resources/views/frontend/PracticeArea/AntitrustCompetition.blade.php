<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antitrust & Competition | Aayati Legal</title>
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
        
        .service-hero {
            background: linear-gradient(rgba(26, 54, 93, 0.9), rgba(26, 54, 93, 0.9)), 
                        url('https://images.unsplash.com/photo-1558002038-1055907df827?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') no-repeat center center/cover;
            color: white;
            padding: 13rem 1rem 5rem 1rem;
            text-align: center;
            height: 60vh;
        }
        
        .service-hero h1 {
            font-size: 2.8rem;
            margin-bottom: 1rem;
        }
        
        .breadcrumb {
            max-width: 1200px;
            margin: 1rem auto;
            padding: 0 1rem;
        }
        
        .breadcrumb a {
            color: var(--primary);
            text-decoration: none;
        }
        
        .service-container {
            max-width: 1200px;
            margin: 3rem auto;
            padding: 0 1rem;
            display: grid;
            grid-template-columns: 1fr 300px;
            gap: 3rem;
        }
        
        .service-content h2 {
            color: var(--primary);
            font-size: 1.8rem;
            margin: 2rem 0 1rem;
            position: relative;
            padding-bottom: 0.5rem;
        }
        
        .service-content h2:after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 60px;
            height: 3px;
            background: var(--secondary);
        }
        
        .service-content p {
            color: var(--dark);
            line-height: 1.8;
            margin-bottom: 1.5rem;
        }
        
        .service-content ul {
            margin: 1.5rem 0;
            padding-left: 2rem;
        }
        
        .service-content li {
            margin-bottom: 0.8rem;
            line-height: 1.6;
        }
        
        .service-sidebar {
            background: var(--light);
            padding: 2rem;
            border-radius: 8px;
            height: fit-content;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .sidebar-widget {
            margin-bottom: 2rem;
        }
        
        .sidebar-widget h3 {
            color: #cba557;
            font-size: 1.3rem;
            margin-bottom: 1rem;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid var(--secondary);
        }
        
        .service-list li {
            margin-bottom: 0.5rem;
            list-style: none;
        }
        
        .service-list a {
            color: var(--dark);
            text-decoration: none;
            transition: color 0.3s ease;
            display: block;
            padding: 0.5rem 0;
        }
        
        .service-list a:hover {
            color: var(--secondary);
        }
        
        .service-list a.active {
            color: var(--secondary);
            font-weight: 600;
        }
        
        .cta-box {
            background: var(--primary);
            color: white;
            padding: 1.5rem;
            border-radius: 8px;
            text-align: center;
        }
        
        .cta-box h3 {
            margin-bottom: 1rem;
        }
        
        .cta-btn {
            display: inline-block;
            background: var(--secondary);
            color: var(--primary);
            padding: 0.8rem 1.5rem;
            border-radius: 4px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .cta-btn:hover {
            background: white;
        }
        
        @media (max-width: 900px) {
            .service-container {
                grid-template-columns: 1fr;
            }
            
            .service-hero h1 {
                font-size: 2.2rem;
            }
        }
    </style>
</head>
<body>
    @include('frontend.includes.header')
    <section class="service-hero">
        <h1>Antitrust & Competition Law</h1>
        <p>Expert legal guidance for complex competition regulations and antitrust matters</p>
    </section>

    <div class="breadcrumb">
        <a href="{{url('/')}}">Home</a> > <a href="{{url('Practice-Area')}}">Practice Areas</a> > Antitrust/Competition
    </div>

    <div class="service-container">
        <main class="service-content">
            <h2>Antitrust/Competition Law</h2>
            <p>Competition law is an essential element in fostering innovation, consumer choice, and economic growth. Antitrust law ensure that markets operate freely and fairly, preventing anti-competitive practices such as monopolies, abuse of dominance, and cartels. These laws are vital for maintaining a level playing field and encouraging healthy business practices.</p>
            <p>As one of the best legal firms in Delhi, Aayati Legal specializes in providing comprehensive legal solutions in the field of competition law. Our team of experienced professionals excels in addressing challenges related to mergers, acquisitions, abuse of market power, and anti-competitive agreements. With our expertise, clients gain a competitive edge while complying with regulatory frameworks.</p>
            <p>Among the top ten law firms in Delhi, we are recognized for our innovative approach to tackling complex competition issues. Our deep understanding of Antitrust/Competition laws enables us to deliver strategic advice tailored to each client’s needs. From assisting with regulatory filings to representing clients before the Competition Commission of India, Aayati Legal ensures seamless navigation through legal complexities.</p>
            <p>Our standing as a tax law firm in Delhi complements our competition law services, providing clients with holistic solutions across interrelated legal domains. This integrated approach has  solidified our reputation as one of the best law firms in Delhi NCR.</p>
            <p>Aayati Legal is proud to be counted among the top law firms in Delhi, with a proven track record of excellence in competition law. Our commitment to safeguarding clients’ interests while promoting compliance has made us a trusted partner for businesses across industries.</p>
            <p>Discover why Aayati Legal is one of the reputed law firms in Delhi and how we can support your business in navigating the complex landscape of Antitrust/Competition law.</p>
        </main>
        
        @include('frontend.includes.sidebar')
    </div>
    @include('frontend.includes.footer')
</body>
</html>