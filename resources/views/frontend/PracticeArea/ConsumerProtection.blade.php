<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consumer Protection | Aayati Legal</title>
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
        <h1>Consumer Protection</h1>
        <!--<p>Expert legal guidance for complex competition regulations and antitrust matters</p>-->
    </section>

    <div class="breadcrumb">
        <a href="{{url('/')}}">Home</a> > <a href="{{url('Practice-Area')}}">Practice Areas</a> > Consumer Protection
    </div>

    <div class="service-container">
        <main class="service-content">
            <h2>Consumer Protection</h2>
            <p>Competition in today’s market demands not just innovation but also a firm commitment to <strong>Consumer Protection  </strong>. Upholding the rights of consumers is vital to maintaining trust and fairness in economic activities. At Aayati Legal, we provide comprehensive legal counsel and representation to both consumers and businesses, ensuring compliance with India’s consumer protection laws.</p>
            <p>Recognized as one of the <strong>best legal firms in Delhi</strong>, Aayati Legal specializes in a broad spectrum of consumer protection services:</p>
            
            <ul>
                <li><strong>Consumer Disputes:</strong> We represent clients in complaints regarding defective products, deficient services, unfair trade practices, and misleading advertisements. Our expertise spans representation before consumer courts and other relevant forums, ensuring swift and effective redressal.</li>
                <li><strong>Product Liability:</strong> Handling cases of injuries or damages caused by defective products is a core area of our practice.</li>
                <li><strong>Unfair Trade Practices:</strong> We combat practices like false advertising, bait-and-switch tactics, and restrictive trade behaviors that harm consumer interests.</li>
                <li><strong>Medical Negligence:</strong> Aayati Legal advocates for individuals in cases of medical malpractice, including misdiagnosis, surgical errors, and delayed treatments.</li>
                <li><strong>Consumer Awareness & Education:</strong> Beyond legal counsel, we actively educate consumers on their rights, conducting workshops and awareness programs to promote informed decision-making.</li>
                <li><strong>Compliance & Advisory Services:</strong> For businesses, we ensure adherence to consumer laws by developing compliance programs, conducting audits, and providing training to minimize disputes.</li>
            </ul>
            <p>Ranked among the top ten law firms in Delhi, Aayati Legal is also a leading tax law firm in Delhi, offering an integrated approach to address interrelated legal needs. Our dedication to delivering client-centric solutions has positioned us as one of the best law firms in Delhi NCR, setting benchmarks in quality legal services.</p>
            <p>As one of the top law firms in Delhi, we combine our consumer law expertise with a strategic approach, helping businesses maintain compliance while empowering consumers to assert their rights.</p>
            <p>Explore why Aayati Legal stands out as a reputed law firm in Delhi for all matters concerning Consumer Protection. Let us help you safeguard your rights and interests effectively.</p>
        </main>
        
        @include('frontend.includes.sidebar')
    </div>
    @include('frontend.includes.footer')
</body>
</html>