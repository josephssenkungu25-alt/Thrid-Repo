<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pocket Pay - Secure cashless payment system for schools in Uganda.">
    <meta name="keywords" content="pocket pay, cashless school, uganda schools, student wallet, canteen payment">
    <meta name="author" content="Pocket Pay Uganda">
    <title>Pocket Pay - Cashless School Payment System</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Segoe UI', -apple-system, BlinkMacSystemFont, sans-serif;
            background: #fff;
            color: #333;
            font-size: 18px;
            line-height: 1.7;
            overflow-x: hidden;
        }

        nav {
            background: #000;
            padding: 18px 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .logo-img {
            height: 72px;
            width: auto;
            border-radius: 14px;
            object-fit: contain;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }

        .logo-img:hover {
            transform: scale(1.08);
            box-shadow: 0 10px 30px rgba(139,92,246,0.4);
        }

        .nav-links {
            display: flex;
            gap: 40px;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-size: 17px;
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-links a:hover { color: #a78bfa; }

        .hero {
            background: linear-gradient(135deg, #8b5cf6, #6d28d9);
            min-height: 100vh;
            padding: 140px 60px 60px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 600"><path d="M0,300 Q300,100 600,300 T1200,300" stroke="rgba(255,255,255,0.1)" stroke-width="2" fill="none"/></svg>');
            opacity: 0.3;
        }

        .hero-content { flex: 1; z-index: 1; }
        .hero-tag { color: #fff; font-size: 20px; margin-bottom: 20px; font-weight: 500; }
        .hero-title { font-size: 80px; font-weight: 900; color: white; line-height: 1.1; margin-bottom: 30px; }
        .hero-title .highlight {
            display: block;
            background: linear-gradient(90deg, #fbbf24, #f59e0b);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .cta-button {
            background: rgba(0,0,0,0.8);
            color: white;
            padding: 20px 45px;
            border-radius: 50px;
            font-size: 18px;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 12px;
            transition: all 0.3s;
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }

        .phone-mockup {
            background: white;
            border-radius: 35px;
            padding: 25px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            transform: rotate(-5deg);
            transition: transform 0.3s;
        }

        .phone-mockup:hover { transform: rotate(0) scale(1.05); }

        .phone-image {
            width: 140px; height: 140px;
            background: linear-gradient(135deg, #8b5cf6, #6d28d9);
            border-radius: 28px;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .phone-image img { height: 110px; width: auto; }

        section { padding: 120px 60px; }
        .section-title {
            font-size: 56px;
            font-weight: 900;
            text-align:  center;
            margin-bottom: 70px;
            color: #1f2937;
        }

        .features { background: #f9fafb; }
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 35px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .feature-card {
            background: white;
            padding: 45px;
            border-radius: 25px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            transition: all 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(139,92,246,0.2);
        }

        .feature-icon {
            width: 70px; height: 70px;
            background: linear-gradient(135deg, #8b5cf6, #6d28d9);
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 34px;
            margin-bottom: 25px;
            color: white;
        }

        .feature-title { font-size: 28px; font-weight: 700; color: #1f2937; margin-bottom: 18px; }
        .feature-text { color: #6b7280; line-height: 1.8; font-size: 17px; }

        ul, ol { max-width: 900px; margin: 0 auto 50px; line-height: 2; font-size: 18px; }
        ul li, ol li { margin-bottom: 18px; }
        ul li strong, ol li strong { color: #6d28d9; font-size: 19px; }

        .img-placeholder {
            width: 350px; height: 230px; background: #eee;
            border-radius: 15px; object-fit: cover;
            float: right; margin: 20px 0 20px 30px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        }

        .implementation-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .implementation-card {
            background: #86efac;
            border-radius: 18px;
            padding: 30px;
            width: 320px;
            text-align: center;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .implementation-card:hover { transform: translateY(-8px); }
        .implementation-card h3 { font-size: 24px; font-weight: 800; margin-bottom: 12px; color: #065f46; }
        .implementation-card h4 { font-size: 20px; font-weight: 700; margin-bottom: 18px; color: #15803d; }
        .implementation-card p { font-size: 17px; line-height: 1.7; color: #166534; }

        .contact-container {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 80px;
            max-width: 1000px;
            margin: 0 auto;
            flex-wrap: wrap;
        }

        .contact-text h3 { font-size: 32px; margin-bottom: 20px; color: #1f2937; }
        .contact-text p { font-size: 19px; margin-bottom: 15px; }

        .contact-logo-img {
            height: 280px;
            width: auto;
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(139,92,246,0.3);
        }

        .email-float {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 65px;
            height: 65px;
            background: #ea4335;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            color: white;
            box-shadow: 0 4px 15px rgba(234,67,53,0.4);
            text-decoration: none;
            z-index: 1000;
            transition: transform 0.3s;
        }

        .email-float:hover { transform: scale(1.1); }

        footer {
            background: #111;
            color: #ccc;
            text-align: center;
            padding: 40px;
            font-size: 16px;
        }

        @media (max-width: 768px) {
            nav { padding: 15px 20px; }
            .logo-img { height: 58px; }
            .nav-links { display: none; }
            .hero { flex-direction: column; padding: 110px 20px 60px; text-align: center; }
            .hero-title { font-size: 52px; }
            section { padding: 80px 20px; }
            .section-title { font-size: 42px; }
            .implementation-card { width: 100%; max-width: 380px; }
            .contact-container { gap: 40px; text-align: center; }
            .contact-logo-img { height: 200px; }
            .img-placeholder { float: none; margin: 20px auto; display: block; }
            .email-float { width: 60px; height: 60px; font-size: 28px; }
        }
    </style>
</head>
<body>

<?php
$about = ["Pocket Pay is an innovative cashless payment system designed specifically for schools to manage student pocket money and canteen transactions. Our system offers a secure, efficient, and user-friendly platform that benefits students, parents, and school administrators. With Pocket Pay, schools can ensure a smooth, cashless environment that enhances student convenience and promotes financial literacy."];

$benefits = [
    "Streamlined Operations" => "Reduces the burden of cash handling and reconciliation in school canteens and other facilities.",
    "Enhanced Security" => "Minimizes risks associated with carrying and managing school cash on school premises",
    "Parental Engagement" => "Involves parents in their child's financial education and spending activities",
    "Data-Driven Decisions" => "Provides valuable data to help schools make informed decisions about canteen operations and student preferences",
];

$key_features = [
    "Cashless Transactions" => "Students can make purchases in the school canteen using a prepaid digital wallet.",
    "Eliminates Cash Risks" => "No need for students to carry physical money, reducing theft risk.",
    "Parental Control & Monitoring" => "Parents can load money and set spending limits.",
    "Real-time Alerts" => "Parents receive instant notifications and can view transaction history."
];

$system_features = [
    "Secure and Efficient" => "Uses advanced security protocols to protect transactions.",
    "Reduces Administrative Work" => "Minimizes cash handling for school staff.",
    "User-Friendly Interface" => "Easy mobile app for students and parents.",
    "Admin Dashboard" => "Web dashboard for school staff to track and manage transactions.",
    "Financial Literacy" => "Students learn to manage money through insights and reports."
];

$security_features = [
    "Data encryption to protect sensitive information.",
    "Two-factor authentication for secure login.",
    "Access control with role-based permissions.",
    "System audits and 24/7 monitoring.",
    "Automatic session timeout."
];

$contact_email = "sobola.org@gmail.com";
$contact_phone = "+256 700 000 000";
$mailto_link = "mailto:$contact_email?subject=Pocket%20Pay%20Inquiry&body=Hello,%20I%20would%20like%20to%20learn%20more%20about%20Pocket%20Pay.";
?>

<!-- NAVIGATION -->
<nav>
    <a href="#"><img src="logo.png" alt="Pocket Pay" class="logo-img"></a>
    <div class="nav-links">
        <a href="#executive-summary">Summary</a>
        <a href="#benefits">Benefits</a>
        <a href="#features">Key Features</a>
        <a href="#security">Security</a>
        <a href="#implementation">Implementation</a>
        <a href="#contact">Contact</a>
    </div>
</nav>

<!-- HERO -->
<section class="hero">
    <div class="hero-content">
        <p class="hero-tag">Smart Cashless Payments</p>
        <h1 class="hero-title">
            Pocket Pay<br>
            <span class="highlight">Cashless School System</span>
        </h1>
        <a href="<?= $mailto_link ?>" class="cta-button">Get Started →</a>
    </div>
    <div class="phone-mockup">
        <div style="text-align:center; padding:25px;">
            <div class="phone-image">
                <img src="logo.png" alt="Pocket Pay">
            </div>
            <div style="font-size:28px; font-weight:900; color:#000;">Pocket Pay</div>
            <div style="font-size:52px; font-weight:900; color:#000; margin:8px 0;">UGX 10,000 <span style="font-size:22px; color:#666;">/mo</span></div>
            <div style="background:#f3f4f6; padding:18px; border-radius:18px; margin-top:25px;">
                <div style="font-size:40px; font-weight:900; color:#000;">Secure</div>
                <div style="color:#666; font-weight:600;">Modern School Payments</div>
            </div>
        </div>
    </div>
</section>

<!-- EXECUTIVE SUMMARY -->
<section id="executive-summary" style="background:#fff;">
    <h2 class="section-title">Executive Summary</h2>
    <?php foreach ($about as $text) { echo "<p style='max-width:900px;margin:0 auto 25px;line-height:1.9;text-align:center;font-size:19px;'>$text</p>"; } ?>
</section>

<!-- BENEFITS -->
<section id="benefits" class="features">
    <h2 class="section-title">Benefits to the School</h2>
    <div style="max-width:900px;margin:0 auto;">
        <ul>
            <?php foreach ($benefits as $title => $explanation) {
                echo "<li><strong>$title:</strong> $explanation</li>";
            } ?>
        </ul>
        <?php if (file_exists('1.jpg')): ?>
            <img src="1.jpg" alt="School canteen with Pocket Pay" class="img-placeholder">
        <?php else: ?>
            <div class="img-placeholder"></div>
        <?php endif; ?>
        <div style="clear:both;"></div>
    </div>
</section>

<!-- KEY FEATURES -->
<section id="features">
    <h2 class="section-title">Key Features</h2>
    <div class="features-grid">
        <?php foreach ($key_features as $title => $feature): ?>
        <div class="feature-card">
            <div class="feature-icon">★</div>
            <h3 class="feature-title"><?php echo htmlspecialchars($title); ?></h3>
            <p class="feature-text"><?php echo htmlspecialchars($feature); ?></p>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- SECURITY & SYSTEM FEATURES -->
<section id="security" class="features">
    <h2 class="section-title">System & Security Features</h2>
    <ul>
        <?php foreach ($system_features as $title => $feature) {
            echo "<li><strong>$title:</strong> $feature</li>";
        } ?>
    </ul>

    <h2 class="section-title">Security Features</h2>
    <ul>
        <?php foreach ($security_features as $feature) {
            echo "<li>$feature</li>";
        } ?>
    </ul>
</section>

<!-- IMPLEMENTATION -->
<section id="implementation" style="background:#f9fafb;">
    <h2 class="section-title">Implementation Plan</h2>
    <div class="implementation-grid">
        <div class="implementation-card">
            <h3>STEP 1</h3>
            <h4>Consultation and Customization</h4>
            <p>Initial meetings with school representatives to understand specific needs and customize the system accordingly.</p>
        </div>
        <div class="implementation-card">
            <h3>STEP 2</h3>
            <h4>System Setup</h4>
            <p>Installation of the Pocket Pay system, including necessary hardware and software. We shall also conduct training sessions for school staff and administrators.</p>
        </div>
        <div class="implementation-card">
            <h3>STEP 3</h3>
            <h4>Launch and Support</h4>
            <p>Launch event to introduce the system to students and parents. Ongoing technical support and customer service via phone call or physical visits.</p>
        </div>
    </div>
</section>

<!-- CONTACT -->
<section id="contact" style="background:#f9fafb;">
    <h2 class="section-title">Contact</h2>
    <div class="contact-container">
        <div class="contact-text">
            <h3>Get in Touch</h3>
            <p><strong>Email:</strong> <a href="mailto:<?= $contact_email ?>"><?= $contact_email ?></a></p>
            <p><strong>Phone:</strong> <?= $contact_phone ?></p>
            <p>We’re here to help your school go cashless. Reach out today!</p>
        </div>
        <img src="logo.png" alt="Pocket Pay Logo" class="contact-logo-img">
    </div>
</section>

<a href="<?= $mailto_link ?>" class="email-float" title="Email Us">Email</a>

<footer>
    <p>&copy; <?= date("Y"); ?> Pocket Pay. </p>
    <p>Email: sobola.org@gmail.com</p895>
    <p>
        Pocket Pay represents a forward-thinking solution for modern schhols looking to adopt
        cashless payment. By Implemeting this system, your school can enhance security, improve operational efficiency, and contibute to the financial
        education of their students. we are confident that  PocketPay will be a valuable addition to your school's infrastructure, making everyday transactions seemless and secure.
    </p>
</footer>

</body>
</html>