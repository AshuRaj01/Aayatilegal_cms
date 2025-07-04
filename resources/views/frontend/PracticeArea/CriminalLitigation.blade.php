<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criminal Litigation | Aayati Legal</title>
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
        <h1>Criminal Litigation</h1>
        {{-- <p>Expert legal guidance for complex competition regulations and antitrust matters</p> --}}
    </section>

    <div class="breadcrumb">
        <a href="{{url('/')}}">Home</a> > <a href="{{url('Practice-Area')}}">Practice Areas</a> > Criminal Litigation
    </div>

    <div class="service-container">
        <main class="service-content">
            <h2>Best Criminal Lawyer in Delhi | Trusted Criminal Defense Experts</h2>
            <h3>Need the Best Criminal Lawyer in Delhi?</h3>
            <p>Aayati Legal is a leading criminal law firm known for expert defense strategies and courtroom excellence. Whether you’re facing charges of fraud, cybercrime, assault, or white-collar offenses, our top criminal lawyers in Delhi are ready to protect your rights and reputation. We specialize in criminal litigation, bail applications, appeals, and legal consultation for individuals and businesses alike.</p>

            <h2>Why Aayati Legal – Best Criminal Defense Lawyers in Delhi</h2>
            <p>If you’re searching for a criminal defense lawyer in Delhi NCR who can take swift and effective action, Aayati Legal offers:</p>
            <ul>
                <li>Proven results in complex and high-profile criminal cases.</li>
                <li>Immediate assistance for anticipatory bail and regular bail.</li>
                <li>Strong courtroom representation by top criminal advocates in Delhi.</li>
                <li>Confidential, client-focused service across all criminal matters.</li>
                <li>Expertise in both trial defense and post-conviction relief.</li>
            </ul>
            <p>We’re known for our bold legal representation, in-depth case analysis, and strategic defense tailored to your specific charges.</p>
            

            <h2>Our Criminal Law Services</h2>
            <h3>Pre-Arrest Legal Support & Anticipatory Bail</h3>
            <p>Our expert criminal bail lawyers in Delhi move fast to secure anticipatory bail and prevent arrest. We offer urgent legal support to safeguard your liberty from day one.</p>

            <h3>Criminal Trial Representation</h3>
            <p>As a reputed criminal litigation expert in Delhi, we deliver solid courtroom advocacy. We handle:</p>
            <ul>
                <li>White-collar crime & financial fraud.</li>
                <li>NDPS Act violations (drug-related offenses).</li>
                <li>Assault, battery, and bodily harm.</li>
                <li>Cybercrime and digital fraud.</li>
                <li>Sexual harassment and stalking.</li>
                <li>Criminal intimidation and threats.</li>
            </ul>

            <h3>Appeals & Post-Conviction Legal Help</h3>
            <p>Convicted unjustly? Our top criminal law firm in Delhi challenges unfair verdicts through appeals and petitions in higher courts. We work for sentence reduction, acquittal, or retrial based on legal grounds.</p>

            <h3>Why We’re Among the Top Criminal Law Firms in Delhi</h3>
            <ul>
                <li>Decades of collective courtroom experience.</li>
                <li>Trusted by clients across corporate and individual sectors.</li>
                <li>Transparent process with complete confidentiality.</li>
                <li>Recognized as Delhi’s best criminal law advocates for defense & litigation.</li>
            </ul>

            <h3>Your Legal Rights Deserve Protection – Act Now</h3>
            <p>When your freedom is at stake, experience matters. Aayati Legal brings you the Best Criminal Lawyer in Delhi, backed by a results-driven team and a reputation built on trust, skill, and dedication.</p>
            <p>👉 Connect today for a free consultation with Delhi’s best criminal law team.</p>
        </main>
        
        @include('frontend.includes.sidebar')
    </div>
    @include('frontend.includes.footer')
</body>
</html>