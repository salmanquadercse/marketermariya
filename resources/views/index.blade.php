<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Mariya Hero Section</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"/>
</head>
<body>

<!-- ===== TOP NAVBAR ===== -->
<nav class="custom-nav" id="mainNav">
  <div class="nav-inner">

    <!-- Logo -->
    <a href="#" class="nav-logo">
      <div class="nav-logo-icon">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
          <path d="M3 18l4-8 4 4 4-6 4 10" stroke="white" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
          <circle cx="19" cy="5" r="2.5" fill="rgba(255,255,255,0.9)"/>
          <path d="M19 5 L3 18" stroke="rgba(255,255,255,0.35)" stroke-width="1" stroke-dasharray="2,3"/>
        </svg>
      </div>
      <div class="nav-logo-text">
        <span class="nl-top">Marketer</span>
        <span class="nl-bot">Mariya</span>
      </div>
    </a>

    <!-- Nav links -->
    <ul class="nav-links" id="navLinks">
      <li><a href="#" class="active">Home</a></li>
      <li><a href="#about">About Me</a></li>
      <li><a href="#services">Services</a></li>
      <li><a href="#portfolio">Portfolio</a></li>
      <li><a href="#contact">Contact</a></li>
      <li><a href="#contact" class="nav-cta">Hire Me</a></li>
    </ul>

    <!-- Hamburger -->
    <button class="nav-hamburger" id="navHamburger" onclick="toggleNav()" aria-label="Toggle menu">
      <span></span>
      <span></span>
      <span></span>
    </button>

  </div>
</nav>

<section class="custom-hero">
  <span class="deco-plus p1">+</span>
  <span class="deco-plus p2">+</span>
  <span class="deco-plus p3">+</span>

  <div class="hero-inner">

    <!-- LEFT: Avatar + Icons -->
    <div class="hero-left">

      <!-- Floating Social Icons -->
      <div class="float-icon icon-fb">
        <svg width="30" height="30" viewBox="0 0 24 24" fill="white"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
      </div>
      <div class="float-icon icon-wa">
        <svg width="30" height="30" viewBox="0 0 24 24" fill="white"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a13 13 0 0 0-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413Z"/></svg>
      </div>
      <div class="float-icon icon-sc" style="border-radius:14px;">
        <svg width="30" height="30" viewBox="0 0 24 24" fill="white"><path d="M12.206.793c.99 0 4.347.276 6.052 3.99.053.126.09.266.09.398v5.808l.002.06c.01.135.108.24.24.26l.003.001c.217.04.427-.08.527-.27l.007-.012.003-.006.004-.006a3.17 3.17 0 0 1 2.762-1.617 3.18 3.18 0 0 1 3.18 3.18 3.18 3.18 0 0 1-3.18 3.18c-.176 0-.35-.016-.52-.047l-.03-.006a.49.49 0 0 0-.55.353l-.001.004c-.208.684-.787 2.397-2.108 3.94-1.33 1.55-3.222 2.96-6.19 2.96-2.967 0-4.857-1.408-6.186-2.96-1.321-1.543-1.9-3.256-2.108-3.94l-.001-.004a.49.49 0 0 0-.55-.353l-.03.006a3.161 3.161 0 0 1-.52.047A3.18 3.18 0 0 1 0 14.362a3.18 3.18 0 0 1 3.18-3.18c1.116 0 2.094.575 2.662 1.442l.007.012.003.005.004.006c.1.19.31.31.527.27l.003-.001a.273.273 0 0 0 .24-.26l.002-.06V5.181c0-.132.037-.272.09-.398C8.522 1.07 11.218.793 12.206.793z"/></svg>
      </div>
      <div class="float-icon icon-ga" style="border-radius:14px; padding: 4px;">
        <svg width="34" height="34" viewBox="0 0 192 192" fill="none"><path d="M96 176c-44.183 0-80-35.817-80-80s35.817-80 80-80 80 35.817 80 80-35.817 80-80 80z" fill="#FBBC04"/><path d="M137.31 66.2L111.63 91.88l-16.38-16.38L121 49.82A55.79 55.79 0 0 1 137.31 66.2z" fill="#EA4335"/><path d="M54.69 125.8L80.37 100.12l16.38 16.38L71 142.18A55.79 55.79 0 0 1 54.69 125.8z" fill="#34A853"/><path d="M96 40a56 56 0 0 1 41 17.89l-50.62 50.62-16.38-16.38L116.38 46A55.52 55.52 0 0 0 96 40z" fill="#4285F4"/><path d="M96 152a56 56 0 0 1-41-17.89l50.62-50.62 16.38 16.38L75.62 146A55.52 55.52 0 0 0 96 152z" fill="#34A853"/></svg>
      </div>
      <div class="float-icon icon-pi">
        <svg width="28" height="28" viewBox="0 0 24 24" fill="white"><path d="M12 0C5.373 0 0 5.373 0 12c0 5.084 3.163 9.426 7.627 11.174-.105-.949-.2-2.405.042-3.441.218-.937 1.407-5.965 1.407-5.965s-.359-.719-.359-1.782c0-1.668.967-2.914 2.171-2.914 1.023 0 1.518.769 1.518 1.69 0 1.029-.655 2.568-.994 3.995-.283 1.194.599 2.169 1.777 2.169 2.133 0 3.772-2.249 3.772-5.495 0-2.873-2.064-4.882-5.012-4.882-3.414 0-5.418 2.561-5.418 5.207 0 1.031.397 2.138.893 2.738a.36.36 0 0 1 .083.345l-.333 1.36c-.053.22-.174.267-.402.161-1.499-.698-2.436-2.889-2.436-4.649 0-3.785 2.75-7.262 7.929-7.262 4.163 0 7.398 2.967 7.398 6.931 0 4.136-2.607 7.464-6.227 7.464-1.216 0-2.359-.632-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0z"/></svg>
      </div>
      <div class="float-icon icon-ig" style="border-radius:14px; width:60px; height:60px; background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);">
        <svg width="30" height="30" viewBox="0 0 24 24" fill="white"><rect x="2" y="2" width="20" height="20" rx="5" ry="5" stroke="white" stroke-width="2" fill="none"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" stroke="white" stroke-width="2" fill="none"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5" stroke="white" stroke-width="2.5" stroke-linecap="round"/></svg>
      </div>
      <div class="float-icon icon-tw" style="border-radius:50%;">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="white"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.746l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
      </div>
      <div class="float-icon icon-sh" style="border-radius:14px; background: transparent; width:65px; height:65px;">
        <svg width="44" height="44" viewBox="0 0 109 124" fill="none"><path d="M74.7 14.8c-.1-.6-.6-1-1.2-1-.5 0-10.1-.2-10.1-.2s-8-7.8-8.9-8.6c-.9-.9-2.6-.6-3.3-.4-.1 0-1.7.5-4.4 1.4C44.3 2.3 41.1 0 37.2 0 28 0 23.5 11.2 22.1 16.9c-3.7 1.1-6.3 2-6.6 2.1-2 .6-2.1.7-2.4 2.6-.2 1.4-5.4 41.7-5.4 41.7L57.5 72l24.8-5.4S75.3 15.4 74.7 14.8zm-19.5-7.5c-2.1.7-4.5 1.4-7.1 2.2.2-3.1.7-6.5 2.1-9.2.8 1.7 1.7 4.1 2.5 6.3.9.3 1.7.5 2.5.7z" fill="#95BF47"/><path d="M73.5 13.8c-.5 0-10.1-.2-10.1-.2s-8-7.8-8.9-8.6c-.3-.3-.7-.5-1.1-.5v67.6l24.8-5.4S75.3 15.4 74.7 14.8c-.1-.6-.6-1-1.2-1z" fill="#5E8E3E"/><path d="M45.2 25.3L42.7 34s-2.7-1.3-6-.1c-4.8 1.5-4.8 4.9-4.8 5.7.3 3.8 10 4.6 10.6 13.4.4 7-3.7 11.7-9.7 12.1-7.2.4-10.8-3.8-10.8-3.8l1.5-6.3s3.7 2.8 6.7 2.6c1.9-.1 2.7-1.7 2.6-2.8-.4-5-8.2-4.7-8.7-12.8-.5-6.9 4.1-13.8 14-14.4 3.9-.3 5.9.7 5.9.7z" fill="white"/></svg>
      </div>

      <!-- Avatar Circle -->
      <div class="hero-avatar-circle">
        <div class="hero-avatar-circle">
          <img src="{{ asset('assets/img/prof_about_pic.png') }}" alt="Mariya's Avatar">
        </div>
        <!-- Replace with your actual image: <img src="your-photo.jpg" alt="Mariya"> -->
        <!-- <svg width="220" height="260" viewBox="0 0 220 260" fill="none">
          <ellipse cx="110" cy="200" rx="80" ry="90" fill="#c8956c" opacity="0.5"/>
          <circle cx="110" cy="100" r="50" fill="#c8956c"/>
          <rect x="60" y="140" width="100" height="120" rx="20" fill="#2c2c2c"/>
          <ellipse cx="110" cy="105" rx="35" ry="40" fill="#d4a574"/>
        </svg> -->
      </div>
    </div>

    <!-- RIGHT: Text -->
    <div class="hero-right">
      <h1>I'm Mariya</h1>
      <p class="hero-label">Professional</p>
      <div class="typed-wrapper">
        <span id="typed-text"></span><span class="typed-cursor"></span>
      </div>
      <p class="hero-desc">
        I help businesses grow with precise <strong>Conversion tracking</strong> and high-performing
        <strong>Google &amp; Facebook Ads campaigns</strong>. From Facebook, TikTok, LinkedIn, and Pinterest to GA4
        and <strong>server-side tracking</strong>—everything is tracked end-to-end and reported with crystal-clear clarity.
        <br><br>
        With my <strong>Google Ads expertise</strong>, your budget will reach the right audience at the right
        time—turning clicks into measurable conversions.
      </p>
      <a href="#contact" class="hire-btn">Hire Me Today!</a>
    </div>

  </div>
</section>

<!-- ===== SERVICES SECTION ===== -->
<section class="custom-services" id="services">
  <div class="services-inner">

    <!-- Left: Intro -->
    <div class="services-intro">
      <p class="services-tag">Services</p>
      <h2>Increase your Business Growth</h2>
      <p>I have good experience in Digital marketing work including Facebook Ads, Instagram Ads &amp; Google Ads. Having 4 years+ experience in Digital marketing services. I have done Digital marketing for many similar websites to enhance business goals.</p>

      <div class="contact-item">
        <div class="contact-icon">
          <!-- WhatsApp icon -->
          <svg width="20" height="20" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a13 13 0 0 0-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413Z"/></svg>
        </div>
        <span>+880 1575606191</span>
      </div>

      <div class="contact-item">
        <div class="contact-icon">
          <!-- Email icon -->
          <svg width="20" height="20" viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6" stroke="white" stroke-width="2" fill="none"/></svg>
        </div>
        <span><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4b2d392e2e272a25282e39382a29292239797b7a730b2c262a222765282426">[email&#160;protected]</a></span>
      </div>
    </div>

    <!-- Card 1: Google Ads -->
    <div class="service-card">
      <div class="service-icon-wrap">
        <svg width="32" height="32" viewBox="0 0 24 24" fill="none">
          <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
          <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
          <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
          <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
        </svg>
      </div>
      <h3>Google Ads</h3>
      <p><em>"I specialize in Google Ads audit, optimization, and management — delivering stronger performance, maximize ROI, and measurable conversion growth."</em></p>
    </div>

    <!-- Card 2: Facebook Ads -->
    <div class="service-card">
      <div class="service-icon-wrap">
        <svg width="32" height="32" viewBox="0 0 24 24" fill="#1877F2">
          <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
        </svg>
      </div>
      <h3>Facebook Ads</h3>
      <p><em>"I specialize in Facebook Ads audit, optimization, and management — helping brands achieve stronger performance, maximize ROI, and measurable growth."</em></p>
    </div>

    <!-- Card 3: Web Analytics -->
    <div class="service-card">
      <div class="service-icon-wrap">
        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#5b4fcf" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
          <circle cx="12" cy="12" r="3"/>
        </svg>
      </div>
      <h3>Web Analytics</h3>
      <p>I offer web analytics services using Google Analytics4 to help you track user behavior, optimize performance, and boost ROI.</p>
    </div>

    <!-- Card 4: Conversion Tracking -->
    <div class="service-card">
      <div class="service-icon-wrap">
        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#5b4fcf" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
        </svg>
      </div>
      <h3>Conversion Tracking</h3>
      <p>I provide conversion tracking for Google Ads, Facebook, TikTok, LinkedIn, and more to optimize ROI and boost conversions across all platforms.</p>
    </div>

  </div>
</section>

<!-- ===== ABOUT ME SECTION ===== -->
<section class="custom-about" id="about">
  <div class="about-inner">

    <!-- LEFT: Diamond photo collage -->
    <div class="about-left">
      <!-- Colored background diamonds -->
      <div class="diamond-shape d-yellow"></div>
      <div class="diamond-shape d-orange"></div>
      <div class="diamond-shape d-blue"></div>
      <div class="diamond-shape d-red"></div>

      <!-- Main photo diamond -->
      <div class="diamond-shape d-photo">
        <div class="d-photo-inner">
          <img src="{{ asset('assets/img/prof_about_pic.png') }}" alt="Mariya's Avatar">
          <!-- Replace src with your actual photo -->
          <!-- <svg class="person-svg" viewBox="0 0 300 400" xmlns="http://www.w3.org/2000/svg">
            <rect width="300" height="400" fill="#c8956c"/>
            <ellipse cx="150" cy="130" rx="60" ry="70" fill="#d4a574"/>
            <rect x="70" y="190" width="160" height="210" rx="30" fill="#1a1a2e"/>
            <rect x="90" y="175" width="120" height="60" rx="10" fill="#d4a574"/>
            <polygon points="150,195 120,230 150,240 180,230" fill="#c8bfe8"/>
          </svg> -->
        </div>
      </div>
    </div>

    <!-- RIGHT: Content -->
    <div class="about-right">
      <span class="about-tag">About Me</span>

      <p class="about-bio">
        As a seasoned Google Ads strategist and Digital Analytics expert, I specialize in implementing advanced conversion tracking with GA4, GTM, and server-side tagging. I partner with agencies and advertisers to build and manage powerful ad campaigns backed by precise, data-driven insights. With deep expertise in campaign setup, bid optimization, and analytics interpretation, I ensure accurate tracking, meaningful conversions, and clear, measurable ROI. My mission: to empower businesses with clarity, performance, and scalable growth—while offering personal support and strategic guidance every step of the way.
      </p>

      <div class="about-contacts">
        <div class="about-contact-item">
          <label>Email:</label>
          <span>potfolio78@gmail.com</span>
        </div>
        <div class="about-contact-item">
          <label>WhatsApp:</label>
          <span>+8801628048539</span>
        </div>
      </div>

      <a href="#contact" class="connect-btn">Let's Connect 1:1</a>
    </div>

  </div>
</section>

<!-- ===== SKILLS SECTION ===== -->
<section class="custom-skills" id="skills">
  <div class="skills-inner">

    <!-- LEFT: Phone mockup -->
    <div class="skills-left">
      <div class="teal-blob"></div>

      <!-- Back green card -->
      <div class="back-card">
        <div class="bc-name">Mariya Ahmed</div>
        <div class="bc-sub">Digital Marketer</div>
        <div class="bc-stars">★★★★★</div>
      </div>

      <!-- Phone -->
      <div class="phone-mockup">
        <div class="phone-frame">
          <div class="phone-notch"></div>
          <div class="phone-screen">
            <div class="phone-header">
              <div class="phone-avatar">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="white"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
              </div>
              <div class="phone-header-text">
                <div class="name">Mariya Ahmed</div>
                <div class="loc">Dhaka, BD</div>
              </div>
            </div>
            <div class="phone-stats">
              <div class="phone-stat"><div class="val">210</div><div class="lbl">Campaigns</div></div>
              <div class="phone-stat"><div class="val">7000</div><div class="lbl">Leads</div></div>
              <div class="phone-stat"><div class="val">4+</div><div class="lbl">Years</div></div>
            </div>
            <div class="phone-chart">
              <div class="chart-bar" style="height:40%;background:#4285F4;animation-delay:0.1s"></div>
              <div class="chart-bar" style="height:65%;background:#ff6b35;animation-delay:0.2s"></div>
              <div class="chart-bar" style="height:50%;background:#34A853;animation-delay:0.3s"></div>
              <div class="chart-bar" style="height:80%;background:#FBBC04;animation-delay:0.4s"></div>
              <div class="chart-bar" style="height:55%;background:#EA4335;animation-delay:0.5s"></div>
              <div class="chart-bar" style="height:90%;background:#ff6b35;animation-delay:0.6s"></div>
              <div class="chart-bar" style="height:70%;background:#4285F4;animation-delay:0.7s"></div>
            </div>
            <div class="phone-ring-row">
              <div class="ring-item">
                <div class="ring-circle" style="background: conic-gradient(#ff6b35 150deg, rgba(255,255,255,0.15) 0deg);">42%</div>
                <div class="ring-lbl">Reach</div>
              </div>
              <div class="ring-item">
                <div class="ring-circle" style="background: conic-gradient(#34A853 190deg, rgba(255,255,255,0.15) 0deg);">53%</div>
                <div class="ring-lbl">Conv.</div>
              </div>
              <div class="ring-item">
                <div class="ring-circle" style="background: conic-gradient(#4285F4 280deg, rgba(255,255,255,0.15) 0deg);">78%</div>
                <div class="ring-lbl">ROI</div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Floating project card -->
      <div class="project-card">
        <div class="pj-icon">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="white"><rect x="3" y="3" width="18" height="18" rx="3"/><path d="M3 9h18M9 21V9" stroke="rgba(0,0,0,0.3)" stroke-width="1.5" fill="none"/></svg>
        </div>
        <div class="pj-title">Campaign Report</div>
        <div class="pj-sub">Google Ads</div>
        <div class="pj-date">Feb 2026</div>
      </div>
    </div>

    <!-- RIGHT: Skill bars -->
    <div class="skills-right">
      <h2>My Skills</h2>

      <div class="skill-item">
        <div class="skill-label">Google Ads</div>
        <div class="skill-track"><div class="skill-fill" data-width="92"></div></div>
      </div>
      <div class="skill-item">
        <div class="skill-label">Social Media Ads</div>
        <div class="skill-track"><div class="skill-fill" data-width="85"></div></div>
      </div>
      <div class="skill-item">
        <div class="skill-label">Ads Optimization</div>
        <div class="skill-track"><div class="skill-fill" data-width="88"></div></div>
      </div>
      <div class="skill-item">
        <div class="skill-label">Web Analytics</div>
        <div class="skill-track"><div class="skill-fill" data-width="80"></div></div>
      </div>
      <div class="skill-item">
        <div class="skill-label">SEO Audit</div>
        <div class="skill-track"><div class="skill-fill" data-width="75"></div></div>
      </div>
    </div>

  </div>
</section>

<!-- ===== STATS SECTION ===== -->
<section class="custom-stats" id="stats">
  <span class="stats-deco sd1">+</span>
  <span class="stats-deco sd2">✕</span>

  <h2 class="stats-title">My Completed Projects</h2>

  <div class="stats-grid">
    <div class="stat-card">
      <span class="stat-number" data-target="85" data-suffix="+">0+</span>
      <span class="stat-label">Happy Clients</span>
    </div>
    <div class="stat-card">
      <span class="stat-number" data-target="235" data-suffix="+">0+</span>
      <span class="stat-label">Project Completed</span>
    </div>
    <div class="stat-card">
      <span class="stat-number" data-target="4" data-suffix="+">0+</span>
      <span class="stat-label">Years Experience</span>
    </div>
    <div class="stat-card">
      <span class="stat-number" data-target="4.1" data-suffix="M">0M</span>
      <span class="stat-label">Ad Spend</span>
    </div>
  </div>
</section>

<!-- ===== CREATIVE WORKS SECTION ===== -->
<section class="custom-portfolio" id="portfolio">
  <h2 class="portfolio-title">My Creative Works</h2>

  <div class="carousel-outer">
    <button class="carousel-btn prev" onclick="moveCarousel(-1)">&#8592;</button>
    <button class="carousel-btn next" onclick="moveCarousel(1)">&#8594;</button>

    <div class="carousel-track" id="carouselTrack">

      <!-- Slide 1: GTM Debug View -->
      <div class="carousel-slide">
        <div class="slide-inner">
          <div class="slide-placeholder">
            <div class="sp-header">
              <div class="sp-dot" style="background:#ff5f57"></div>
              <div class="sp-dot" style="background:#febc2e"></div>
              <div class="sp-dot" style="background:#28c840"></div>
              <div class="sp-url"></div>
            </div>
            <div class="sp-body">
              <div style="font-size:9px;font-weight:700;color:#1a1a2e;margin-bottom:8px;">The Dental Shaman - Tag Debug</div>
              <table class="sp-table">
                <tr><th>Event</th><th>Status</th><th>Setup</th></tr>
                <tr><td>View content</td><td><span class="sp-badge green">Processed</span></td><td>Browser</td></tr>
                <tr><td>View content</td><td><span class="sp-badge green">Processed</span></td><td>Server</td></tr>
                <tr><td>PageView</td><td><span class="sp-badge blue">Deduplicated</span></td><td>Server</td></tr>
                <tr><td>user_engagement</td><td><span class="sp-badge green">Processed</span></td><td>Server</td></tr>
                <tr><td>PageView</td><td><span class="sp-badge green">Processed</span></td><td>Browser</td></tr>
                <tr><td>PageView</td><td><span class="sp-badge blue">Deduplicated</span></td><td>Server</td></tr>
                <tr><td>user_engagement</td><td><span class="sp-badge green">Processed</span></td><td>Server</td></tr>
                <tr><td>PageView</td><td><span class="sp-badge green">Processed</span></td><td>Browser</td></tr>
                <tr><td>PageView</td><td><span class="sp-badge blue">Deduplicated</span></td><td>Server</td></tr>
              </table>
            </div>
          </div>
        </div>
      </div>

      <!-- Slide 2: GTM Container Setup -->
      <div class="carousel-slide">
        <div class="slide-inner">
          <div class="slide-placeholder">
            <div class="sp-gtm-header">
              <div class="gtm-icon"></div>
              <span>GTM Container — Server Side Tracking</span>
            </div>
            <div style="padding:10px 12px;">
              <div style="font-size:8px;color:#666;margin-bottom:6px;">Container: <strong>GTM-K98FCNL</strong> &nbsp; Version: Preview</div>
              <div class="sp-row dark" style="margin-bottom:8px;border-radius:6px;display:flex;align-items:center;padding:0 8px;">
                <span style="color:#fff;font-size:8px;font-weight:600;">Variables &nbsp;|&nbsp; Data Layer &nbsp;|&nbsp; Consent</span>
              </div>
              <div class="sp-tag-row">
                <div class="sp-tag">FB-Purchase-Tag</div>
                <div class="sp-tag">GA4-SST: Viewcontent</div>
                <div class="sp-tag">FB-Add to cart Tag</div>
                <div class="sp-tag">FB base code</div>
                <div class="sp-tag">FB-Checkout-Tag</div>
                <div class="sp-tag">GA4-SST: add to cart</div>
                <div class="sp-tag">GA4-Config Tag</div>
                <div class="sp-tag">Google Tag</div>
              </div>
              <div style="margin-top:10px;">
                <div class="sp-row medium" style="height:8px;"></div>
                <div class="sp-row short" style="height:8px;"></div>
                <div class="sp-row" style="height:8px;width:90%"></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Slide 3: Shopify Analytics Dashboard -->
      <div class="carousel-slide">
        <div class="slide-inner">
          <div class="sp-analytics">
            <div class="sp-analytics-header">
              <span style="font-size:8px;color:#999;"><span class="live-dot"></span>0 live visitors</span>
              <span style="font-size:8px;color:#333;font-weight:600;">Shopify Analytics</span>
            </div>
            <div class="sp-metrics">
              <div class="sp-metric">
                <div class="m-val">$10,689</div>
                <div class="m-chg">↑ 1.1K%</div>
                <div class="m-lbl">Total Sales</div>
              </div>
              <div class="sp-metric">
                <div class="m-val">187</div>
                <div class="m-chg">↑ 648%</div>
                <div class="m-lbl">Orders</div>
              </div>
              <div class="sp-metric">
                <div class="m-val">0.71%</div>
                <div class="m-chg" style="color:#ff6b35;">→</div>
                <div class="m-lbl">Conv. Rate</div>
              </div>
            </div>
            <div class="sp-chart-area">
              <svg class="sparkline" viewBox="0 0 260 70" preserveAspectRatio="none">
                <defs>
                  <linearGradient id="lineGrad" x1="0" y1="0" x2="0" y2="1">
                    <stop offset="0%" stop-color="#4dd9c0" stop-opacity="0.3"/>
                    <stop offset="100%" stop-color="#4dd9c0" stop-opacity="0"/>
                  </linearGradient>
                </defs>
                <path d="M0,60 C20,58 40,55 60,50 C80,45 90,40 110,30 C130,20 140,25 160,20 C180,15 200,22 220,18 C240,14 250,16 260,12" fill="none" stroke="#4dd9c0" stroke-width="2.5"/>
                <path d="M0,60 C20,58 40,55 60,50 C80,45 90,40 110,30 C130,20 140,25 160,20 C180,15 200,22 220,18 C240,14 250,16 260,12 L260,70 L0,70 Z" fill="url(#lineGrad)"/>
                <!-- Comparison line -->
                <path d="M0,65 C30,63 60,62 90,61 C120,60 150,59 180,58 C210,57 240,56 260,55" fill="none" stroke="#4dd9c0" stroke-width="1.5" stroke-dasharray="4,3" opacity="0.5"/>
              </svg>
              <div style="display:flex;gap:14px;justify-content:center;margin-top:4px;">
                <span style="font-size:7px;color:#999;"><span style="display:inline-block;width:10px;height:2px;background:#4dd9c0;vertical-align:middle;margin-right:3px;"></span>Nov 3–Dec 3, 2025</span>
                <span style="font-size:7px;color:#999;"><span style="display:inline-block;width:10px;height:2px;background:#4dd9c0;vertical-align:middle;margin-right:3px;border-top:2px dashed #4dd9c0;background:none;"></span>Oct 3–Nov 2, 2025</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Slide 4: Facebook Ads Manager -->
      <div class="carousel-slide">
        <div class="slide-inner">
          <div class="slide-placeholder">
            <div class="sp-header">
              <div class="sp-dot" style="background:#ff5f57"></div>
              <div class="sp-dot" style="background:#febc2e"></div>
              <div class="sp-dot" style="background:#28c840"></div>
              <div class="sp-url"></div>
            </div>
            <div class="sp-body">
              <div style="font-size:9px;font-weight:700;color:#1877F2;margin-bottom:8px;">Facebook Ads Manager</div>
              <table class="sp-table">
                <tr><th>Campaign</th><th>Results</th><th>ROAS</th><th>Status</th></tr>
                <tr><td>Purchase-Retarget</td><td>142</td><td>4.2x</td><td><span class="sp-badge green">Active</span></td></tr>
                <tr><td>Cold-Audience</td><td>89</td><td>2.8x</td><td><span class="sp-badge green">Active</span></td></tr>
                <tr><td>Lookalike-30d</td><td>63</td><td>3.5x</td><td><span class="sp-badge blue">Learning</span></td></tr>
                <tr><td>DPA-Catalog</td><td>211</td><td>5.1x</td><td><span class="sp-badge green">Active</span></td></tr>
                <tr><td>Lead-Gen</td><td>54</td><td>—</td><td><span class="sp-badge orange">Paused</span></td></tr>
              </table>
              <div style="margin-top:8px;display:flex;gap:8px;">
                <div style="flex:1;background:#e3f2fd;border-radius:6px;padding:6px;text-align:center;">
                  <div style="font-size:12px;font-weight:700;color:#1877F2;">$4.1M</div>
                  <div style="font-size:7px;color:#666;">Total Spend</div>
                </div>
                <div style="flex:1;background:#e8f5e9;border-radius:6px;padding:6px;text-align:center;">
                  <div style="font-size:12px;font-weight:700;color:#43a047;">559</div>
                  <div style="font-size:7px;color:#666;">Conversions</div>
                </div>
                <div style="flex:1;background:#fff3e0;border-radius:6px;padding:6px;text-align:center;">
                  <div style="font-size:12px;font-weight:700;color:#ff6b35;">3.9x</div>
                  <div style="font-size:7px;color:#666;">Avg ROAS</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Slide 5: Google Ads Dashboard -->
      <div class="carousel-slide">
        <div class="slide-inner">
          <div class="slide-placeholder">
            <div class="sp-header">
              <div class="sp-dot" style="background:#ff5f57"></div>
              <div class="sp-dot" style="background:#febc2e"></div>
              <div class="sp-dot" style="background:#28c840"></div>
              <div class="sp-url"></div>
            </div>
            <div class="sp-body">
              <div style="font-size:9px;font-weight:700;color:#4285F4;margin-bottom:8px;">Google Ads — Campaign Overview</div>
              <table class="sp-table">
                <tr><th>Campaign</th><th>Clicks</th><th>Conv.</th><th>CPA</th></tr>
                <tr><td>Search-Brand</td><td>1.2K</td><td>98</td><td>$8.40</td></tr>
                <tr><td>Shopping-All</td><td>3.4K</td><td>214</td><td>$6.20</td></tr>
                <tr><td>PMAX-Retarget</td><td>2.1K</td><td>176</td><td>$7.10</td></tr>
                <tr><td>Display-Aware</td><td>8.7K</td><td>43</td><td>$18.50</td></tr>
              </table>
              <div style="margin-top:8px;">
                <div style="font-size:8px;font-weight:600;color:#555;margin-bottom:4px;">Conversion Rate Trend</div>
                <svg viewBox="0 0 220 40" width="100%" height="40">
                  <path d="M0,35 C30,30 50,25 80,18 C110,12 140,15 170,10 C190,7 210,8 220,6" fill="none" stroke="#4285F4" stroke-width="2"/>
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Slide 6: GA4 Report -->
      <div class="carousel-slide">
        <div class="slide-inner">
          <div class="slide-placeholder">
            <div class="sp-header">
              <div class="sp-dot" style="background:#ff5f57"></div>
              <div class="sp-dot" style="background:#febc2e"></div>
              <div class="sp-dot" style="background:#28c840"></div>
              <div class="sp-url"></div>
            </div>
            <div class="sp-body">
              <div style="font-size:9px;font-weight:700;color:#E37400;margin-bottom:8px;">Google Analytics 4 — Acquisition</div>
              <div style="display:flex;gap:6px;margin-bottom:8px;">
                <div style="flex:1;background:#fff8e1;border-radius:6px;padding:6px;text-align:center;">
                  <div style="font-size:13px;font-weight:700;color:#E37400;">24.6K</div>
                  <div style="font-size:7px;color:#888;">Users</div>
                </div>
                <div style="flex:1;background:#f3e5f5;border-radius:6px;padding:6px;text-align:center;">
                  <div style="font-size:13px;font-weight:700;color:#8e24aa;">38.2K</div>
                  <div style="font-size:7px;color:#888;">Sessions</div>
                </div>
                <div style="flex:1;background:#e8f5e9;border-radius:6px;padding:6px;text-align:center;">
                  <div style="font-size:13px;font-weight:700;color:#43a047;">3.8%</div>
                  <div style="font-size:7px;color:#888;">Conv. Rate</div>
                </div>
              </div>
              <table class="sp-table">
                <tr><th>Channel</th><th>Users</th><th>Conv.</th></tr>
                <tr><td>Paid Search</td><td>9,240</td><td>312</td></tr>
                <tr><td>Organic</td><td>6,810</td><td>198</td></tr>
                <tr><td>Social</td><td>4,320</td><td>145</td></tr>
                <tr><td>Direct</td><td>4,230</td><td>280</td></tr>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div><!-- end track -->
  </div><!-- end carousel-outer -->

  <!-- Dots -->
  <div class="carousel-dots" id="carouselDots"></div>

  <!-- CTA -->
  <a href="#contact" class="portfolio-hire-btn">Hire Me Today!</a>
</section>

<!-- ===== WHY CHOOSE ME SECTION ===== -->
<section class="custom-why" id="why">
  <h2 class="why-title">Why Choose Me</h2>

  <div class="why-inner">

    <!-- LEFT: Description -->
    <div class="why-left">
      <p>With over four years of experience in <strong>Google Ads and Digital Analytics</strong>, I deliver tailored tracking and campaign solutions aligned with your business goals. My expertise includes <strong>Google Ads setup &amp; optimization, GA4, GTM, Facebook Conversion API, and server-side tracking</strong>—ensuring every interaction—clicks, conversions, and events—is captured accurately for maximum ROI.</p>

      <p>I partner closely with each client, managing full-funnel Google Ads campaigns and providing strategic insights through custom dashboards that visualize performance across the ad journey. These dashboards show where conversions happen and highlight optimization opportunities—whether you're targeting eCommerce sales or lead-generation funnels across multiple platforms.</p>

      <p><strong>To support your success</strong>, I offer continuous campaign and tracking support—from fine-tuning bid strategies and ad creatives to troubleshooting tracking issues and monitoring performance metrics. <strong>My mission</strong> is to help you extract <strong>maximum value</strong> from your Google Ads and analytics, so you feel fully supported and confident in your marketing investments.</p>
    </div>

    <!-- RIGHT: Feature cards -->
    <div class="why-right">

      <div class="why-card">
        <div class="why-card-icon">
          <!-- Hourglass / timely -->
          <svg viewBox="0 0 24 24"><path d="M6 2v6l4 4-4 4v6h12v-6l-4-4 4-4V2H6zm10 14.5V20H8v-3.5l4-4 4 4zM8 4h8v3.5l-4 4-4-4V4z"/></svg>
        </div>
        <div class="why-card-text">
          <h4>Timely Work</h4>
          <p>Without wasting time we work quickly with the value of time.</p>
        </div>
      </div>

      <div class="why-card">
        <div class="why-card-icon">
          <!-- Badge / professional -->
          <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 14H9V8h2v8zm4 0h-2V8h2v8z"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-1-5h2v2h-2zm0-8h2v6h-2z"/></svg>
        </div>
        <div class="why-card-text">
          <h4>Professional Working Skill</h4>
          <p>I'm professionally very efficient and always do a nice clean job.</p>
        </div>
      </div>

      <div class="why-card">
        <div class="why-card-icon">
          <!-- Refresh / revisions -->
          <svg viewBox="0 0 24 24"><path d="M17.65 6.35A7.958 7.958 0 0 0 12 4C7.58 4 4.01 7.58 4.01 12S7.58 20 12 20c3.73 0 6.84-2.55 7.73-6h-2.08A5.99 5.99 0 0 1 12 18c-3.31 0-6-2.69-6-6s2.69-6 6-6c1.66 0 3.14.69 4.22 1.78L13 11h7V4l-2.35 2.35z"/></svg>
        </div>
        <div class="why-card-text">
          <h4>Unlimited Revisions</h4>
          <p>I will modify the work and work until you are happy with the work.</p>
        </div>
      </div>

      <div class="why-card">
        <div class="why-card-icon">
          <!-- Smiley / satisfaction -->
          <svg viewBox="0 0 24 24"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm3.5-9c.83 0 1.5-.67 1.5-1.5S16.33 8 15.5 8 14 8.67 14 9.5s.67 1.5 1.5 1.5zm-7 0c.83 0 1.5-.67 1.5-1.5S9.33 8 8.5 8 7 8.67 7 9.5 7.67 11 8.5 11zm3.5 6.5c2.33 0 4.31-1.46 5.11-3.5H6.89c.8 2.04 2.78 3.5 5.11 3.5z"/></svg>
        </div>
        <div class="why-card-text">
          <h4>100% Customer Satisfaction</h4>
          <p>If you're not happy, I'll rework or provide a full refund.</p>
        </div>
      </div>

      <div class="why-card">
        <div class="why-card-icon">
          <!-- Headset / support -->
          <svg viewBox="0 0 24 24"><path d="M12 1C7.03 1 3 5.03 3 10v3c0 1.1.9 2 2 2h1c.55 0 1-.45 1-1v-4c0-.55-.45-1-1-1H5.07C5.56 5.87 8.47 3 12 3s6.44 2.87 6.93 6H17c-.55 0-1 .45-1 1v4c0 .55.45 1 1 1h1v1c0 1.1-.9 2-2 2h-2c0-.55-.45-1-1-1h-2c-.55 0-1 .45-1 1s.45 1 1 1h2c.55 0 1-.45 1-1h2c2.21 0 4-1.79 4-4v-6c0-4.97-4.03-9-9-9z"/></svg>
        </div>
        <div class="why-card-text">
          <h4>Fast and Responsive Support</h4>
          <p>I aim to reply to all messages within 1 hour. Also provide Call Support.</p>
        </div>
      </div>

    </div>
  </div>

  <!-- CTA -->
  <div class="why-cta-wrap">
    <a href="#contact" class="why-cta-btn">Get Your Free Ads &amp; Analytics Audit</a>
  </div>
</section>

<!-- ===== TESTIMONIALS SECTION ===== -->
<section class="custom-testimonials" id="testimonials">
  <div class="testimonials-inner">

    <!-- LEFT -->
    <div class="testi-left">
      <span class="testi-tag">Testimonials</span>
      <h2>What Our Clients Say</h2>
      <p>Here are share some work reviews by given my client's after getting my services.</p>

      <!-- Decorative chat bubbles -->
      <svg class="bubble-deco" width="220" height="200" viewBox="0 0 220 200" fill="none">
        <rect x="10" y="10" width="160" height="110" rx="18" fill="#1a1a2e"/>
        <polygon points="40,120 70,120 55,145" fill="#1a1a2e"/>
        <rect x="50" y="70" width="180" height="110" rx="18" fill="#1a1a2e"/>
        <polygon points="90,180 120,180 105,200" fill="#1a1a2e"/>
      </svg>
    </div>

    <!-- RIGHT: Testimonial carousel -->
    <div class="testi-right">
      <div class="testi-carousel-wrap">
        <button class="testi-nav t-prev" onclick="moveTesti(-1)">&#8592;</button>
        <button class="testi-nav t-next" onclick="moveTesti(1)">&#8594;</button>

        <div class="testi-track" id="testiTrack">

          <div class="testi-slide">
            <div class="testi-card">
              <div class="testi-stars">★★★★★</div>
              <p class="testi-quote">"We hired Mariya to handle our Google Ads campaigns, and the improvement was immediate. He set up professional search and display campaigns, improved our Quality Score, and significantly increased our ROI. His reporting and insights were always clear and data-driven."</p>
              <div class="testi-author">
                <div class="testi-avatar">D</div>
                <div class="testi-author-info">
                  <div class="name">Daniel R.</div>
                  <div class="role">Marketing Manager</div>
                </div>
              </div>
            </div>
          </div>

          <div class="testi-slide">
            <div class="testi-card">
              <div class="testi-stars">★★★★★</div>
              <p class="testi-quote">"Mariya completely transformed our Facebook Ads strategy. He rebuilt our pixel setup, implemented server-side tracking, and our conversion data accuracy jumped dramatically. We finally know exactly what's working."</p>
              <div class="testi-author">
                <div class="testi-avatar" style="background: linear-gradient(135deg, #5b4fcf, #3949ab);">S</div>
                <div class="testi-author-info">
                  <div class="name">Sarah M.</div>
                  <div class="role">eCommerce Store Owner</div>
                </div>
              </div>
            </div>
          </div>

          <div class="testi-slide">
            <div class="testi-card">
              <div class="testi-stars">★★★★★</div>
              <p class="testi-quote">"Outstanding work on our GA4 and GTM setup. Mariya is thorough, communicates every step clearly, and delivered everything on time. Our analytics are finally giving us the data we need to make real business decisions."</p>
              <div class="testi-author">
                <div class="testi-avatar" style="background: linear-gradient(135deg, #43a047, #1b5e20);">J</div>
                <div class="testi-author-info">
                  <div class="name">James T.</div>
                  <div class="role">Digital Agency Director</div>
                </div>
              </div>
            </div>
          </div>

          <div class="testi-slide">
            <div class="testi-card">
              <div class="testi-stars">★★★★★</div>
              <p class="testi-quote">"I hired Mariya for server-side tracking on my Shopify store and the results were incredible. My Facebook ROAS improved by over 40% just from having cleaner conversion data. Extremely knowledgeable and responsive."</p>
              <div class="testi-author">
                <div class="testi-avatar" style="background: linear-gradient(135deg, #e53935, #b71c1c);">A</div>
                <div class="testi-author-info">
                  <div class="name">Aisha K.</div>
                  <div class="role">Shopify Store Owner</div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

      <!-- Dots -->
      <div class="testi-dots" id="testiDots"></div>
    </div>

  </div>
</section>

<!-- ===== CONTACT SECTION ===== -->
<section class="custom-contact" id="contact">
  <div class="contact-inner">

    <!-- LEFT: Blob images -->
    <div class="contact-left">
        <img src="{{ asset('assets/img/contact.jpg') }}" alt="Contact">
        <!-- Decorative rings -->
        <!-- <div class="blob-ring blob-ring-1"></div>
        <div class="blob-ring blob-ring-2"></div>
        <div class="blob-ring blob-ring-3"></div> -->

        <!-- Main blob image -->
        <!-- <div class="blob-main"> -->
          <!-- Replace with your image: <img src="contact-photo.jpg" alt="Contact"> -->
          <!-- <svg viewBox="0 0 280 280" width="280" height="280" xmlns="http://www.w3.org/2000/svg">
            <rect width="280" height="280" fill="#c8dce8"/>
            <ellipse cx="140" cy="100" rx="45" ry="50" fill="#d4a574"/>
            <rect x="90" y="140" width="100" height="90" rx="20" fill="#3a5a8c"/>
            <rect x="60" y="180" width="160" height="20" rx="5" fill="#8ab4d4" opacity="0.4"/>
            <rect x="30" y="200" width="220" height="12" rx="4" fill="#a08060"/>
          </svg> -->
        <!-- </div> -->

        <!-- Secondary blob (meeting image) -->
        <!-- <div class="blob-secondary"> -->
          
          <!-- <svg viewBox="0 0 170 170" width="170" height="170" xmlns="http://www.w3.org/2000/svg">
            <rect width="170" height="170" fill="#b8cfe0"/>
            <circle cx="60" cy="70" r="28" fill="#d4a574"/>
            <rect x="35" y="92" width="50" height="78" rx="12" fill="#2c3e6e"/>
            <circle cx="120" cy="75" r="22" fill="#c8956c"/>
            <rect x="98" y="95" width="44" height="75" rx="10" fill="#3a5a8c"/>
          </svg> -->
        <!-- </div> -->
    </div>

    <!-- RIGHT: Contact form -->
    <div class="contact-right">
      <h2>Contact Me</h2>

      <form class="contact-form" id="contactForm" onsubmit="handleContactSubmit(event)">
        <div class="form-group">
          <label for="cf-name">Your name</label>
          <input type="text" id="cf-name" name="name" placeholder="" required>
        </div>
        <div class="form-group">
          <label for="cf-email">Your email</label>
          <input type="email" id="cf-email" name="email" placeholder="" required>
        </div>
        <div class="form-group">
          <label for="cf-subject">Subject</label>
          <input type="text" id="cf-subject" name="subject" placeholder="">
        </div>
        <div class="form-group">
          <label for="cf-message">Your message (optional)</label>
          <textarea id="cf-message" name="message" placeholder=""></textarea>
        </div>
        <button type="submit" class="contact-submit">Submit</button>
        <div class="form-success" id="formSuccess">✓ Thank you! Your message has been sent.</div>
      </form>
    </div>

  </div>
</section>

<!-- ===== FOOTER ===== -->
<footer class="custom-footer">
  <div class="footer-main">

    <!-- Column 1: Brand -->
    <div class="footer-brand">
      <a href="#" class="footer-logo">
        <div class="footer-logo-icon">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="white">
            <path d="M3 3h18v2H3V3zm0 8h18v2H3v-2zm0 8h18v2H3v-2z"/>
            <path d="M7 7l5 4-5 4V7z" fill="rgba(255,255,255,0.7)"/>
          </svg>
        </div>
        <div class="footer-logo-text">
          <span class="brand-top">Marketer</span>
          <span class="brand-bot">Mariya</span>
        </div>
      </a>

      <p>I help businesses grow with precise Conversion tracking and high-performing Google &amp; Facebook Ads campaigns. From Facebook, TikTok, LinkedIn, and Pinterest to GA4 and server-side tracking—everything is tracked end-to-end and reported with crystal-clear clarity.</p>

      <div class="footer-socials">
        <!-- Facebook -->
        <a href="#" class="footer-social-btn" title="Facebook">
          <svg viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
        </a>
        <!-- YouTube -->
        <a href="#" class="footer-social-btn" title="YouTube">
          <svg viewBox="0 0 24 24"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.95-1.96C18.88 4 12 4 12 4s-6.88 0-8.59.46A2.78 2.78 0 0 0 1.46 6.42 29 29 0 0 0 1 12a29 29 0 0 0 .46 5.58 2.78 2.78 0 0 0 1.95 1.97C5.12 20 12 20 12 20s6.88 0 8.59-.45a2.78 2.78 0 0 0 1.95-1.97A29 29 0 0 0 23 12a29 29 0 0 0-.46-5.58z"/><polygon points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02" fill="#12121e"/></svg>
        </a>
        <!-- Instagram -->
        <a href="#" class="footer-social-btn" title="Instagram">
          <svg viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5" ry="5" stroke="rgba(255,255,255,0.7)" stroke-width="2" fill="none"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" stroke="rgba(255,255,255,0.7)" stroke-width="2" fill="none"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5" stroke="rgba(255,255,255,0.7)" stroke-width="2.5" stroke-linecap="round"/></svg>
        </a>
        <!-- LinkedIn -->
        <a href="#" class="footer-social-btn" title="LinkedIn">
          <svg viewBox="0 0 24 24"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/></svg>
        </a>
        <!-- WhatsApp -->
        <a href="https://wa.me/8801628048539" class="footer-social-btn" title="WhatsApp">
          <svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52C9.84 8.47 9.25 6.91 9 6.31c-.242-.579-.487-.5-.669-.51a13 13 0 0 0-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413z"/><path d="M12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.885 3.48 11.815 11.815 0 0 0 12.05 0z"/></svg>
        </a>
      </div>
    </div>

    <!-- Column 2: Navigation -->
    <div class="footer-col">
      <h4>Quick Links</h4>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#about">About Me</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#skills">My Skills</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div>

    <!-- Column 3: Services -->
    <div class="footer-col">
      <h4>Services</h4>
      <ul>
        <li><a href="#services">Google Ads</a></li>
        <li><a href="#services">Facebook Ads</a></li>
        <li><a href="#services">Web Analytics</a></li>
        <li><a href="#services">Conversion Tracking</a></li>
        <li><a href="#services">GA4 Setup</a></li>
        <li><a href="#services">Server-Side Tracking</a></li>
      </ul>
    </div>

    <!-- Column 4: Contact -->
    <div class="footer-col">
      <h4>Get In Touch</h4>

      <div class="footer-contact-item">
        <div class="footer-contact-icon">
          <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
        </div>
        <div class="footer-contact-text">
          <span class="fc-label">Location</span>
          <span class="fc-value">Dhaka, Bangladesh</span>
        </div>
      </div>

      <div class="footer-contact-item">
        <div class="footer-contact-icon">
          <svg viewBox="0 0 24 24"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
        </div>
        <div class="footer-contact-text">
          <span class="fc-label">Phone</span>
          <span class="fc-value">+8801628048539</span>
        </div>
      </div>

      <div class="footer-contact-item">
        <div class="footer-contact-icon">
          <svg viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
        </div>
        <div class="footer-contact-text">
          <span class="fc-label">E-mail</span>
          <span class="fc-value">potfolio78@gmail.com</span>
        </div>
      </div>
    </div>

  </div>

  <!-- Bottom bar -->
  <div class="footer-bottom">
    <p>© 2025 — All Rights Reserved by <strong>Marketer Mariya</strong>. Built with ❤️ for performance-driven growth.</p>
    <a href="#" class="footer-back-top" title="Back to top">↑</a>
  </div>
</footer>

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
  // Typewriter Animation
  const words = [
    "Shopify Expert",
    "Digital Marketer",
    "Google Ads Specialist",
    "Facebook Ads Expert",
    "Conversion Tracker"
  ];

  let wordIndex = 0;
  let charIndex = 0;
  let isDeleting = false;
  const typedEl = document.getElementById('typed-text');

  function typeEffect() {
    const currentWord = words[wordIndex];

    if (!isDeleting) {
      typedEl.textContent = currentWord.substring(0, charIndex + 1);
      charIndex++;
      if (charIndex === currentWord.length) {
        isDeleting = true;
        setTimeout(typeEffect, 1800); // Pause before deleting
        return;
      }
    } else {
      typedEl.textContent = currentWord.substring(0, charIndex - 1);
      charIndex--;
      if (charIndex === 0) {
        isDeleting = false;
        wordIndex = (wordIndex + 1) % words.length;
      }
    }

    const speed = isDeleting ? 60 : 100;
    setTimeout(typeEffect, speed);
  }

  typeEffect();

  // Scroll-in animation for service cards
  const cards = document.querySelectorAll('.service-card');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry, i) => {
      if (entry.isIntersecting) {
        setTimeout(() => {
          entry.target.classList.add('visible');
        }, i * 120);
      }
    });
  }, { threshold: 0.15 });
  cards.forEach(card => observer.observe(card));

  // About section scroll animation
  const aboutEls = document.querySelectorAll('.about-left, .about-right');
  const aboutObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry, i) => {
      if (entry.isIntersecting) {
        setTimeout(() => entry.target.classList.add('visible'), i * 200);
      }
    });
  }, { threshold: 0.15 });
  aboutEls.forEach(el => aboutObserver.observe(el));

  // Skills scroll animation
  const skillsEls = document.querySelectorAll('.skills-left, .skills-right');
  const skillsObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry, i) => {
      if (entry.isIntersecting) {
        setTimeout(() => entry.target.classList.add('visible'), i * 200);
      }
    });
  }, { threshold: 0.15 });
  skillsEls.forEach(el => skillsObserver.observe(el));

  // Animate skill bars when in view
  const skillFills = document.querySelectorAll('.skill-fill');
  const barObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const target = entry.target;
        const width = target.getAttribute('data-width');
        setTimeout(() => { target.style.width = width + '%'; }, 300);
        barObserver.unobserve(target);
      }
    });
  }, { threshold: 0.5 });
  skillFills.forEach(bar => barObserver.observe(bar));

  // Stats counter animation
  function animateCounter(el, target, suffix) {
    const isDecimal = target % 1 !== 0;
    let start = 0;
    const duration = 1800;
    const step = 16;
    const totalSteps = duration / step;
    const increment = target / totalSteps;
    const timer = setInterval(() => {
      start += increment;
      if (start >= target) {
        start = target;
        clearInterval(timer);
      }
      el.textContent = isDecimal
        ? start.toFixed(1) + suffix
        : Math.floor(start) + suffix;
    }, step);
  }

  const statCards = document.querySelectorAll('.stat-card');
  const statsObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry, i) => {
      if (entry.isIntersecting) {
        setTimeout(() => {
          entry.target.classList.add('visible');
          const numEl = entry.target.querySelector('.stat-number');
          const raw = numEl.getAttribute('data-target');
          const suffix = numEl.getAttribute('data-suffix') || '';
          animateCounter(numEl, parseFloat(raw), suffix);
        }, i * 150);
        statsObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.3 });
  statCards.forEach(card => statsObserver.observe(card));

  // ===== CAROUSEL =====
  const track = document.getElementById('carouselTrack');
  const slides = track.querySelectorAll('.carousel-slide');
  const dotsContainer = document.getElementById('carouselDots');
  const totalSlides = slides.length;
  const visibleCount = window.innerWidth <= 700 ? 1 : 3;
  let currentIndex = 0;

  // Build dots
  const maxDots = totalSlides - visibleCount + 1;
  for (let i = 0; i < maxDots; i++) {
    const dot = document.createElement('button');
    dot.className = 'c-dot' + (i === 0 ? ' active' : '');
    dot.addEventListener('click', () => goTo(i));
    dotsContainer.appendChild(dot);
  }

  function goTo(index) {
    const max = totalSlides - visibleCount;
    currentIndex = Math.max(0, Math.min(index, max));
    const slideWidth = track.parentElement.offsetWidth / visibleCount;
    track.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
    dotsContainer.querySelectorAll('.c-dot').forEach((d, i) => {
      d.classList.toggle('active', i === currentIndex);
    });
  }

  function moveCarousel(dir) {
    goTo(currentIndex + dir);
  }

  // Auto-play
  let autoPlay = setInterval(() => moveCarousel(1), 3500);
  track.parentElement.addEventListener('mouseenter', () => clearInterval(autoPlay));
  track.parentElement.addEventListener('mouseleave', () => {
    autoPlay = setInterval(() => moveCarousel(1), 3500);
  });

  // Touch/swipe support
  let touchStartX = 0;
  track.addEventListener('touchstart', e => { touchStartX = e.touches[0].clientX; });
  track.addEventListener('touchend', e => {
    const diff = touchStartX - e.changedTouches[0].clientX;
    if (Math.abs(diff) > 50) moveCarousel(diff > 0 ? 1 : -1);
  });

  // Why Choose Me scroll animation
  const whyEls = document.querySelectorAll('.why-left, .why-right');
  const whyObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry, i) => {
      if (entry.isIntersecting) {
        setTimeout(() => entry.target.classList.add('visible'), i * 200);
      }
    });
  }, { threshold: 0.15 });
  whyEls.forEach(el => whyObserver.observe(el));

  // ===== TESTIMONIALS CAROUSEL =====
  const testiTrack = document.getElementById('testiTrack');
  const testiSlides = testiTrack.querySelectorAll('.testi-slide');
  const testiDotsWrap = document.getElementById('testiDots');
  let testiIndex = 0;

  // Build dots
  testiSlides.forEach((_, i) => {
    const d = document.createElement('button');
    d.className = 't-dot' + (i === 0 ? ' active' : '');
    d.addEventListener('click', () => goTesti(i));
    testiDotsWrap.appendChild(d);
  });

  function goTesti(index) {
    testiIndex = (index + testiSlides.length) % testiSlides.length;
    testiTrack.style.transform = `translateX(-${testiIndex * 100}%)`;
    testiDotsWrap.querySelectorAll('.t-dot').forEach((d, i) => {
      d.classList.toggle('active', i === testiIndex);
    });
  }

  function moveTesti(dir) { goTesti(testiIndex + dir); }

  // Auto-play
  let testiAuto = setInterval(() => moveTesti(1), 4500);
  testiTrack.parentElement.addEventListener('mouseenter', () => clearInterval(testiAuto));
  testiTrack.parentElement.addEventListener('mouseleave', () => {
    testiAuto = setInterval(() => moveTesti(1), 4500);
  });

  // Touch support
  let tStartX = 0;
  testiTrack.addEventListener('touchstart', e => { tStartX = e.touches[0].clientX; });
  testiTrack.addEventListener('touchend', e => {
    const diff = tStartX - e.changedTouches[0].clientX;
    if (Math.abs(diff) > 50) moveTesti(diff > 0 ? 1 : -1);
  });

  // Scroll reveal
  const testiEls = document.querySelectorAll('.testi-left, .testi-right');
  const testiReveal = new IntersectionObserver((entries) => {
    entries.forEach((entry, i) => {
      if (entry.isIntersecting) {
        setTimeout(() => entry.target.classList.add('visible'), i * 200);
      }
    });
  }, { threshold: 0.15 });
  testiEls.forEach(el => testiReveal.observe(el));

  // Contact section scroll animation
  const contactEls = document.querySelectorAll('.contact-left, .contact-right');
  const contactObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry, i) => {
      if (entry.isIntersecting) {
        setTimeout(() => entry.target.classList.add('visible'), i * 200);
      }
    });
  }, { threshold: 0.15 });
  contactEls.forEach(el => contactObserver.observe(el));

  // Contact form submit handler
  function handleContactSubmit(e) {
    e.preventDefault();
    const btn = e.target.querySelector('.contact-submit');
    btn.textContent = 'Sending...';
    btn.disabled = true;
    setTimeout(() => {
      btn.textContent = 'Submit';
      btn.disabled = false;
      document.getElementById('formSuccess').style.display = 'block';
      e.target.reset();
      setTimeout(() => {
        document.getElementById('formSuccess').style.display = 'none';
      }, 4000);
    }, 1200);
  }

  // ===== NAVBAR =====
  const mainNav = document.getElementById('mainNav');
  const navLinks = document.getElementById('navLinks');
  const hamburger = document.getElementById('navHamburger');

  // Scroll shadow
  window.addEventListener('scroll', () => {
    mainNav.classList.toggle('scrolled', window.scrollY > 20);
    updateActiveLink();
  });

  // Hamburger toggle
  function toggleNav() {
    navLinks.classList.toggle('open');
    hamburger.classList.toggle('open');
  }

  // Close menu on link click
  navLinks.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => {
      navLinks.classList.remove('open');
      hamburger.classList.remove('open');
    });
  });

  // Active link on scroll
  const navSections = [
    { id: '',          el: document.getElementById('mainNav'),     link: navLinks.querySelector('a[href="#"]') },
    { id: 'about',     el: document.getElementById('about'),       link: navLinks.querySelector('a[href="#about"]') },
    { id: 'services',  el: document.getElementById('services'),    link: navLinks.querySelector('a[href="#services"]') },
    { id: 'portfolio', el: document.getElementById('portfolio'),   link: navLinks.querySelector('a[href="#portfolio"]') },
    { id: 'contact',   el: document.getElementById('contact'),     link: navLinks.querySelector('a[href="#contact"]') },
  ];

  function updateActiveLink() {
    const scrollY = window.scrollY + 80;
    let current = navSections[0];
    navSections.forEach(sec => {
      if (sec.el && sec.el.offsetTop <= scrollY) current = sec;
    });
    navSections.forEach(sec => {
      if (sec.link) sec.link.classList.remove('active');
    });
    if (current.link) current.link.classList.add('active');
  }

  updateActiveLink();
</script>

</body>
</html>