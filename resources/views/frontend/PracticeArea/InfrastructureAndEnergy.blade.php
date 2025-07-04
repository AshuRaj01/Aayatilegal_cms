<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infrastructure & Energy | Aayati Legal</title>
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
        <h1>Infrastructure & Energy</h1>
        {{-- <p>Expert legal guidance for complex competition regulations and antitrust matters</p> --}}
    </section>

    <div class="breadcrumb">
        <a href="{{url('/')}}">Home</a> > <a href="{{url('Practice-Area')}}">Practice Areas</a> > Infrastructure & Energy
    </div>

    <div class="service-container">
        <main class="service-content">
            <h2>Comprehensive Antitrust Legal Solutions</h2>
            <p>Infrastructure & Energy projects in India present both opportunities and legal challenges due to evolving regulations and compliance requirements. At Aayati Legal, we provide strategic legal solutions to businesses engaged in these sectors, helping them navigate regulatory approvals, secure financing, and resolve disputes efficiently.</p>
            
            <h2>Our Legal Services</h2>
            <ul>
                <li>Project Development and Structuring: We assist in infrastructure & energy project conceptualization, feasibility studies, and financial modeling. Our expertise includes advising on project structuring, public-private partnerships (PPPs), engineering, procurement, and construction (EPC) contracts, and build-operate-transfer (BOT) models. We also draft and negotiate essential agreements such as concession agreements, power purchase agreements (PPAs), and fuel supply agreements (FSAs).</li>
                <li>Regulatory Approvals and Compliance: We help clients obtain necessary regulatory approvals from central and state agencies, ensuring full compliance with environmental laws, land acquisition regulations, and other legal mandates. Our team represents clients in regulatory proceedings and disputes, mitigating risks for infrastructure & energy businesses.</li>
                <li>Financing and Investment Solutions: We advise on infrastructure & energy financing, including debt and equity financing, project bonds, and infrastructure investment trusts (InvITs). Our team helps businesses secure investments from both domestic and international investors to drive successful project execution.</li>
                <li>Dispute Resolution in Infrastructure & Energy Projects: We specialize in dispute resolution by drafting and negotiating EPC contracts and turnkey contracts, advising on project management, contract administration, and claims management. Our legal representation before courts, tribunals, and regulatory authorities ensures effective resolution of disputes in the infrastructure & energy sector.</li>
            </ul>
        </main>
        
        @include('frontend.includes.sidebar')
    </div>
    @include('frontend.includes.footer')
</body>
</html>