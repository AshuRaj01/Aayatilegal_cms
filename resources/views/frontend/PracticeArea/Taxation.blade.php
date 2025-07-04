<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAXATION | Aayati Legal</title>
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
        <h1>TAXATION</h1>
    </section>

    <div class="breadcrumb">
        <a href="{{url('/')}}">Home</a> > <a href="{{url('Practice-Area')}}">Practice Areas</a> > TAXATION
    </div>

    <div class="service-container">
        <main class="service-content">
            <p>Navigating the intricate landscape of tax law can be a daunting challenge for individuals and businesses alike. At Aayati Legal, a trusted tax law firm in Delhi, we understand the complexities and nuances of tax regulations, and we are committed to providing comprehensive legal solutions to help you achieve tax compliance, minimize liabilities, and optimize your financial strategies. We are well-versed in handling a wide range of tax matters, including:</p>
            
            <ul>
                <li>Corporate Taxation: As a leading tax law firm in Delhi, we assist businesses of all sizes in managing their corporate tax obligations, including income tax, GST, custom duties, and transfer pricing.</li>
                <li>International Taxation: At Aayati Legal, a trusted tax law firm in Delhi, we advise clients on cross-border tax issues, including double taxation treaties, foreign tax credits, and international tax structures.</li>
                <li>Tax Litigation: We represent clients in tax disputes before tax authorities and courts, including audits, appeals, and litigation, ensuring effective legal strategies as a prominent tax law firm in Delhi.</li>
                <li>Tax Advisory: We offer strategic tax planning and advisory services to help clients minimize tax liabilities and optimize their financial positions, backed by the expertise of our tax law firm in Delhi</li>
            </ul>
        </main>
        
        @include('frontend.includes.sidebar')
    </div>
    @include('frontend.includes.footer')
</body>
</html>