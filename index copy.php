<?php
$page_title = "Xpert IT Solution — Education Reimagined";
$current_page = "home";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $page_title; ?></title>

  <!-- Google Fonts: Clean minimalist pairing -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;1,9..40,300&family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/style.css">

  
</head>
<body>

  <!-- CURSOR -->
  <div class="cursor" id="cursor"></div>

  <!-- LOADER -->
  <div id="loader">
    <div class="loader-inner">
      <p class="loader-mark">Xpert <em>IT Solution</em></p>
      <div class="loader-bar"></div>
    </div>
  </div>

  <!-- ══════════════════════════ NAVIGATION ══════════════════════════ -->
  <nav id="nav">
    <a href="index.php" class="nav-logo">Xpert <em>IT</em></a>
    <ul class="nav-links">
      <li><a href="index.php" class="active">Home</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="services.php">Programs</a></li>
      <li><a href="team.php">Team</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
    <a href="contact.php" class="nav-cta">Enroll Now &rarr;</a>
  </nav>

  <!-- ══════════════════════════ HERO ════════════════════════════════ -->
  <section id="hero">
    <div class="hero-left">
      <p class="hero-tag reveal">Peshawar · Est. 2009</p>

      <h1 class="hero-heading">
        <span class="line"><span class="reveal d1">Shape your</span></span>
        <span class="line"><span class="reveal d2"><em>future</em> in</span></span>
        <span class="line"><span class="reveal d3">technology</span></span>
      </h1>

      <p class="hero-sub reveal d3">
        Xpert IT Solution delivers rigorous, transformative IT education across disciplines — equipping students to lead, create, and innovate in a complex digital world.
      </p>

      <div class="hero-actions reveal d4">
        <a href="services.php" class="btn btn-solid">
          Explore Programs
          <span class="btn-arrow">&#8594;</span>
        </a>
        <a href="about.php" class="btn btn-ghost-ink">
          <span>Our Story</span>
        </a>
      </div>

      <div class="hero-stats reveal d5">
        <div class="stat">
          <div class="stat-num">12<sup>K+</sup></div>
          <div class="stat-label">Alumni</div>
        </div>
        <div class="stat">
          <div class="stat-num">38<sup>+</sup></div>
          <div class="stat-label">Programs</div>
        </div>
        <div class="stat">
          <div class="stat-num">97<sup>%</sup></div>
          <div class="stat-label">Placement</div>
        </div>
      </div>
    </div>

    <div class="hero-right">
      <img
        class="hero-img"
        src="assets/images/1.jpg"
        alt="Students in a modern classroom at Xpert IT Solution"
        id="heroImg"
      />
      <div class="hero-chip reveal d4">
        <span class="hero-chip-dot"></span>
        Peshawar Main Campus
      </div>
    </div>
  </section>

  <!-- ══════════════════════════ TICKER ══════════════════════════════ -->
  <div class="ticker-wrap">
    <div class="ticker">
      Web Development <span class="ticker-sep">·</span>
      Cyber Security <span class="ticker-sep">·</span>
      Data Science &amp; AI <span class="ticker-sep">·</span>
      Graphic Design <span class="ticker-sep">·</span>
      Networking &amp; Cloud <span class="ticker-sep">·</span>
      Mobile Development <span class="ticker-sep">·</span>
      UI / UX Design <span class="ticker-sep">·</span>
      Web Development <span class="ticker-sep">·</span>
      Cyber Security <span class="ticker-sep">·</span>
      Data Science &amp; AI <span class="ticker-sep">·</span>
      Graphic Design <span class="ticker-sep">·</span>
      Networking &amp; Cloud <span class="ticker-sep">·</span>
      Mobile Development <span class="ticker-sep">·</span>
      UI / UX Design <span class="ticker-sep">·</span>
    </div>
  </div>

  <!-- ══════════════════════════ ABOUT ═══════════════════════════════ -->
  <section id="about-strip">
    <div class="container">
      <div class="about-inner">

        <div class="about-left reveal">
          <span class="eyebrow">About Us</span>
          <div class="about-year">2009</div>
          <p class="about-tagline">Discipline. Craft.<br/>Purpose.</p>
        </div>

        <div class="about-right">
          <h2 class="section-heading reveal">
            Where structure<br/>meets <em>imagination</em>
          </h2>
          <p class="reveal d1">
            Founded in 2009 in the heart of Peshawar, Xpert IT Solution was built on a single conviction — that exceptional IT education transforms not just careers, but communities. Across 15 years, we have refined our curriculum, hired world-class faculty, and produced graduates who lead the tech industry globally.
          </p>

          <div class="about-pillars">
            <div class="pillar reveal d1">
              <div class="pillar-icon">&#x1F468;&#x200D;&#x1F3EB;</div>
              <h3>Expert Faculty</h3>
              <p>Industry practitioners and academic scholars — every course is led by the best in the field.</p>
            </div>
            <div class="pillar reveal d2">
              <div class="pillar-icon">&#x1F6E0;&#xFE0F;</div>
              <h3>Hands-On Learning</h3>
              <p>Project-based modules, live briefs, and real-world case studies drive every program.</p>
            </div>
            <div class="pillar reveal d3">
              <div class="pillar-icon">&#x1F310;</div>
              <h3>Career Network</h3>
              <p>A 12,000+ alumni network and industry partnerships that open doors the moment you graduate.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ══════════════════════════ PROGRAMS ════════════════════════════ -->
  <section id="programs">
    <div class="container">
      <div class="programs-header">
        <div>
          <span class="eyebrow reveal">What We Teach</span>
          <h2 class="section-heading reveal d1">Our Programs</h2>
        </div>
        <a href="services.php" class="btn btn-outline-green reveal d2">View All &rarr;</a>
      </div>

      <div class="programs-grid">
        <div class="program-card reveal">
          <div class="program-img-wrap">
            <img src="assets/images/program-web-dev.jpg" alt="Web and App Development Program" />
          </div>
          <div class="program-num">01</div>
          <div class="program-icon">&#x1F4BB;</div>
          <h3 class="program-title">Web &amp; App Development</h3>
          <p class="program-desc">From front-end interfaces to back-end systems — master the full stack and build production-ready applications used by real users.</p>
          <a href="services.php" class="program-link">Learn More &#8594;</a>
        </div>
        <div class="program-card reveal d1">
          <div class="program-img-wrap">
            <img src="assets/images/program-cyber-security.jpg" alt="Cyber Security Program" />
          </div>
          <div class="program-num">02</div>
          <div class="program-icon">&#x1F510;</div>
          <h3 class="program-title">Cyber Security</h3>
          <p class="program-desc">Ethical hacking, penetration testing, and network defence — learn to protect systems and become a certified security professional.</p>
          <a href="services.php" class="program-link">Learn More &#8594;</a>
        </div>
        <div class="program-card reveal d2">
          <div class="program-img-wrap">
            <img src="assets/images/program-data-science.jpg" alt="Data Science and AI Program" />
          </div>
          <div class="program-num">03</div>
          <div class="program-icon">&#x1F4CA;</div>
          <h3 class="program-title">Data Science &amp; AI</h3>
          <p class="program-desc">Machine learning, data analytics, and AI fundamentals — build the expertise to turn raw data into decisions that shape industries.</p>
          <a href="services.php" class="program-link">Learn More &#8594;</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ══════════════════════════ FEATURE BAND ════════════════════════ -->
  <section id="feature-band">
    <div class="feature-img-wrap">
      <img src="assets/images/2.webp" alt="Students collaborating in a workshop session" />
    </div>
    <div class="feature-text">
      <span class="eyebrow reveal">The Xpert Method</span>
      <h2 class="section-heading reveal d1">Learning<br/><em>by doing</em></h2>
      <p class="body-text reveal d2">
        Every module at Xpert IT Solution is built around active learning. Students work on real-world tech projects from partner organisations, present to industry panels, and graduate with a portfolio — not just a certificate.
      </p>
      <a href="about.php" class="btn btn-solid reveal d3">
        Discover Our Approach
        <span class="btn-arrow">&#8594;</span>
      </a>
    </div>
  </section>

  <!-- ══════════════════════════ DUAL IMAGE ══════════════════════════ -->
  <section id="dual-img-band">
    <div class="dual-img-item">
      <img src="assets/images/4.jpg" alt="Students in independent study session" />
      <div class="dual-img-caption"><strong>Campus Life</strong> Independent Study Sessions</div>
    </div>
    <div class="dual-img-item">
      <img src="assets/images/5.jpg" alt="University-level IT class in progress" />
      <div class="dual-img-caption"><strong>Classroom</strong> Advanced IT Programs</div>
    </div>
  </section>

  <!-- ══════════════════════════ TESTIMONIAL ═════════════════════════ -->
  <section id="testimonial">
    <div class="container">
      <div class="testimonial-inner">
        <div class="test-meta reveal">
          <div class="test-avatar">
            <img src="assets/images/3.jpg" alt="Sara Yousaf portrait" />
          </div>
          <div class="test-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
          <div class="test-name">Sara Yousaf</div>
          <div class="test-role">Software Engineer, Systems Ltd Peshawar<br/>Class of 2019</div>
        </div>
        <blockquote class="reveal d1">
          <span class="test-open-quote">&#8220;</span>
          <p class="test-body">
            Xpert IT Solution didn't just teach me to code — it taught me <em>how to think</em>. The structured rigour and the freedom to experiment in the same breath is something I've never found anywhere else.
          </p>
        </blockquote>
      </div>
    </div>
  </section>

  <!-- ══════════════════════════ CTA ══════════════════════════════════ -->
  <section id="cta-band">
    <div class="container">
      <div class="cta-inner">
        <div class="cta-text">
          <h2 class="cta-heading reveal">
            Ready to start<br/>your <em>journey?</em>
          </h2>
          <p class="cta-sub reveal d1">Applications for the 2025–26 cohort are now open. Limited seats available across all programs.</p>
        </div>
        <div class="cta-actions reveal d2">
          <a href="contact.php" class="btn btn-white">
            Apply Now
            <span class="btn-arrow">&#8594;</span>
          </a>
          <a href="contact.php" class="btn-outline-white">Schedule a Visit</a>
          <p class="cta-note">No application fee &middot; Open to all backgrounds</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ══════════════════════════ FOOTER ══════════════════════════════ -->
  <footer>
    <div class="container">
      <div class="footer-grid">
        <div>
          <p class="footer-brand-name">Xpert <em>IT Solution</em></p>
          <p class="footer-brand-desc">Shaping thinkers, makers, and leaders since 2009. Peshawar, Pakistan.</p>
        </div>
        <div class="footer-col">
          <h4>Programs</h4>
          <ul>
            <li><a href="services.php">Web &amp; App Development</a></li>
            <li><a href="services.php">Cyber Security</a></li>
            <li><a href="services.php">Data Science &amp; AI</a></li>
            <li><a href="services.php">UI / UX Design</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Academy</h4>
          <ul>
            <li><a href="about.php">About Us</a></li>
            <li><a href="team.php">Our Faculty</a></li>
            <li><a href="contact.php">Admissions</a></li>
            <li><a href="contact.php">Campus Tour</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Contact</h4>
          <ul>
            <li><a href="#">University Road, Peshawar</a></li>
            <li><a href="tel:+919150001234">+91 91 5000 1234</a></li>
            <li><a href="mailto:info@xpertitsolution.edu.pk">info@xpertitsolution.edu.pk</a></li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom">
        <p class="footer-copy">&copy; <?php echo date('Y'); ?> Xpert IT Solution. All rights reserved.</p>
        <div class="footer-badge">
          <span class="footer-badge-dot"></span>
          Peshawar, Pakistan
        </div>
      </div>
    </div>
  </footer>

  <!-- ══════════════════════════ SCRIPTS ══════════════════════════════ -->
  <script src="assets/js/script.js" defer></script>
  <
</body>
</html>