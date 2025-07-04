<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insolvency | Aayati Legal</title>
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
        <h1>Insolvency</h1>
        {{-- <p>Expert legal guidance for complex competition regulations and antitrust matters</p> --}}
    </section>

    <div class="breadcrumb">
        <a href="{{url('/')}}">Home</a> > <a href="{{url('Practice-Area')}}">Practice Areas</a> > Insolvency
    </div>

    <div class="service-container">
        <main class="service-content">
            <h1>Best Insolvency Law Firm in Delhi – Expert Legal Solutions</h1>
            <p><strong>Facing Insolvency?</strong> Aayati Legal is Here to Help. In today’s unpredictable economic environment, insolvency has become a significant concern for both businesses and individuals. Whether you’re dealing with overwhelming debt or navigating legal obligations as a creditor, it’s essential to have the right legal support. At Aayati Legal, one of the best insolvency law firms in Delhi, we provide end-to-end legal assistance to help you manage financial distress effectively.</p>

            <h2>Comprehensive Insolvency and Bankruptcy Services</h2>
            <p>We offer expert guidance under the <strong>Insolvency and Bankruptcy Code, 2016</strong>, and are committed to helping clients restructure finances and resolve debt disputes efficiently. Our legal services include:</p>
        
            <h3>Debt Restructuring & Recovery</h3>
            <p>Our team assists clients in exploring options for restructuring debt, negotiating with creditors, and preparing repayment strategies to avoid bankruptcy when possible.</p>
        
            <h3>Filing for Insolvency</h3>
            <p>If insolvency becomes inevitable, we help you with the filing process, ensuring that every legal step is compliant with IBC regulations and that your rights are protected throughout.</p>
        
            <h3>Creditor Representation</h3>
            <p>We advocate for creditors seeking recovery of outstanding dues, using proven legal tactics to maximize recoveries while adhering to legal norms.</p>

            <h2>Why Choose Aayati Legal for Insolvency Cases?</h2>
            <p>As a registered insolvency professional agency under the IBBI, Aayati Legal has a deep understanding of the law and years of experience managing complex financial matters. Our tailored approach ensures:</p>
            <ul>
                <li>Personalized legal strategies</li>
                <li>Expert negotiation and litigation support</li>
                <li>Full compliance with all regulatory requirements</li>
                <li>Confidential handling of sensitive financial data</li>
            </ul>

            <h2>Trusted Legal Partner in Insolvency Matters</h2>
            <p>Whether you’re a business owner facing insolvency or a creditor seeking debt recovery, our firm ensures efficient resolution with minimal stress. <strong>Trust Aayati Legal – the best insolvency law firm in Delhi</strong> – for legal clarity, strategy, and results.</p>
        </main>
        
        @include('frontend.includes.sidebar')
    </div>
    @include('frontend.includes.footer')
</body>
</html>