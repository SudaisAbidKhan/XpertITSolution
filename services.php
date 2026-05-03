<?php
$page_title = "Programs & Services — Xpert IT Solution";
$current_page = "services";
?>
<?php include 'includes/header.php'; ?>
<link rel="stylesheet" href="assets/css/services.css">

  <?php include 'includes/navbar.php'; ?>

  <!-- ══════════════════════════ PAGE HERO ═══════════════════════════ -->
  <section class="servHero">
    <div class="servHero-overlay"></div>
    <img
      src="assets/images/1.jpg"
      alt="Xpert IT Solution programs overview"
      class="servHero-img"
      id="servHeroImg"
    />
    <div class="container servHero-inner">
      <span class="eyebrow servHero-eyebrow reveal">What We Offer</span>
      <h1 class="servHero-heading reveal d1">
        Programs built for<br/>the <em>real world</em>
      </h1>
      <p class="servHero-sub reveal d2">
        38 industry-aligned courses across technology, design, and business — each one crafted with input from hiring partners and taught by working professionals.
      </p>
      <div class="servHero-pills reveal d3">
        <span class="servPill servPill--active" data-filter="all">All Programs</span>
        <span class="servPill" data-filter="tech">Technology</span>
        <span class="servPill" data-filter="design">Design</span>
        <span class="servPill" data-filter="data">Data &amp; AI</span>
        <span class="servPill" data-filter="security">Security</span>
      </div>
    </div>
  </section>

  <!-- ══════════════════════════ PROGRAMS GRID ═══════════════════════ -->
  <section class="servGrid-section">
    <div class="container">
      <div class="servGrid-header">
        <div>
          <span class="eyebrow reveal">All Courses</span>
          <h2 class="section-heading reveal d1">Our full program <em>catalogue</em></h2>
        </div>
        <p class="servGrid-count reveal d2"><span id="servVisibleCount">9</span> programs available</p>
      </div>

      <div class="servGrid" id="servGrid">

        <!-- Card 01 -->
        <div class="servCard reveal" data-category="tech">
          <div class="servCard-img-wrap">
            <img src="assets/images/1.jpg" alt="Web and App Development" />
            <span class="servCard-badge">Most Popular</span>
          </div>
          <div class="servCard-body">
            <div class="servCard-top">
              <span class="servCard-icon">&#x1F4BB;</span>
              <span class="servCard-cat">Technology</span>
            </div>
            <h3 class="servCard-title">Web &amp; App Development</h3>
            <p class="servCard-desc">Master the full stack — HTML, CSS, JavaScript, React, Node.js, and databases. Build and deploy real applications from day one.</p>
            <ul class="servCard-tags">
              <li>HTML / CSS</li>
              <li>JavaScript</li>
              <li>React</li>
              <li>Node.js</li>
            </ul>
          </div>
          <div class="servCard-footer">
            <div class="servCard-meta">
              <span class="servCard-duration">&#x23F1; 6 Months</span>
              <span class="servCard-level servCard-level--beginner">Beginner</span>
            </div>
            <a href="contact.php" class="servCard-link">Enroll &#8594;</a>
          </div>
        </div>

        <!-- Card 02 -->
        <div class="servCard reveal d1" data-category="security">
          <div class="servCard-img-wrap">
            <img src="assets/images/2.webp" alt="Cyber Security" />
          </div>
          <div class="servCard-body">
            <div class="servCard-top">
              <span class="servCard-icon">&#x1F510;</span>
              <span class="servCard-cat">Security</span>
            </div>
            <h3 class="servCard-title">Cyber Security</h3>
            <p class="servCard-desc">Ethical hacking, penetration testing, network forensics, and certified defence strategies used by industry professionals worldwide.</p>
            <ul class="servCard-tags">
              <li>Ethical Hacking</li>
              <li>Pen Testing</li>
              <li>CEH Prep</li>
              <li>Network Security</li>
            </ul>
          </div>
          <div class="servCard-footer">
            <div class="servCard-meta">
              <span class="servCard-duration">&#x23F1; 6 Months</span>
              <span class="servCard-level servCard-level--intermediate">Intermediate</span>
            </div>
            <a href="contact.php" class="servCard-link">Enroll &#8594;</a>
          </div>
        </div>

        <!-- Card 03 -->
        <div class="servCard reveal d2" data-category="data">
          <div class="servCard-img-wrap">
            <img src="assets/images/4.jpg" alt="Data Science and AI" />
          </div>
          <div class="servCard-body">
            <div class="servCard-top">
              <span class="servCard-icon">&#x1F4CA;</span>
              <span class="servCard-cat">Data &amp; AI</span>
            </div>
            <h3 class="servCard-title">Data Science &amp; AI</h3>
            <p class="servCard-desc">Python, machine learning, neural networks, and data visualisation. Learn to extract insight and build intelligent systems.</p>
            <ul class="servCard-tags">
              <li>Python</li>
              <li>Machine Learning</li>
              <li>TensorFlow</li>
              <li>Data Viz</li>
            </ul>
          </div>
          <div class="servCard-footer">
            <div class="servCard-meta">
              <span class="servCard-duration">&#x23F1; 8 Months</span>
              <span class="servCard-level servCard-level--intermediate">Intermediate</span>
            </div>
            <a href="contact.php" class="servCard-link">Enroll &#8594;</a>
          </div>
        </div>

        <!-- Card 04 -->
        <div class="servCard reveal" data-category="design">
          <div class="servCard-img-wrap">
            <img src="assets/images/5.jpg" alt="UI UX Design" />
          </div>
          <div class="servCard-body">
            <div class="servCard-top">
              <span class="servCard-icon">&#x1F3A8;</span>
              <span class="servCard-cat">Design</span>
            </div>
            <h3 class="servCard-title">UI / UX Design</h3>
            <p class="servCard-desc">User research, wireframing, prototyping in Figma, and design systems — build products that look great and feel effortless.</p>
            <ul class="servCard-tags">
              <li>Figma</li>
              <li>Prototyping</li>
              <li>User Research</li>
              <li>Design Systems</li>
            </ul>
          </div>
          <div class="servCard-footer">
            <div class="servCard-meta">
              <span class="servCard-duration">&#x23F1; 4 Months</span>
              <span class="servCard-level servCard-level--beginner">Beginner</span>
            </div>
            <a href="contact.php" class="servCard-link">Enroll &#8594;</a>
          </div>
        </div>

        <!-- Card 05 -->
        <div class="servCard reveal d1" data-category="tech">
          <div class="servCard-img-wrap">
            <img src="assets/images/2.webp" alt="Mobile App Development" />
          </div>
          <div class="servCard-body">
            <div class="servCard-top">
              <span class="servCard-icon">&#x1F4F1;</span>
              <span class="servCard-cat">Technology</span>
            </div>
            <h3 class="servCard-title">Mobile App Development</h3>
            <p class="servCard-desc">Build cross-platform iOS and Android apps using React Native and Flutter. From concept to app store submission.</p>
            <ul class="servCard-tags">
              <li>React Native</li>
              <li>Flutter</li>
              <li>Dart</li>
              <li>App Store</li>
            </ul>
          </div>
          <div class="servCard-footer">
            <div class="servCard-meta">
              <span class="servCard-duration">&#x23F1; 5 Months</span>
              <span class="servCard-level servCard-level--intermediate">Intermediate</span>
            </div>
            <a href="contact.php" class="servCard-link">Enroll &#8594;</a>
          </div>
        </div>

        <!-- Card 06 -->
        <div class="servCard reveal d2" data-category="tech">
          <div class="servCard-img-wrap">
            <img src="assets/images/5.jpg" alt="Cloud and Networking" />
          </div>
          <div class="servCard-body">
            <div class="servCard-top">
              <span class="servCard-icon">&#x2601;&#xFE0F;</span>
              <span class="servCard-cat">Technology</span>
            </div>
            <h3 class="servCard-title">Cloud &amp; Networking</h3>
            <p class="servCard-desc">AWS, Azure, and GCP fundamentals alongside Cisco networking and CCNA preparation. Build and manage enterprise-grade infrastructure.</p>
            <ul class="servCard-tags">
              <li>AWS</li>
              <li>Azure</li>
              <li>CCNA Prep</li>
              <li>DevOps</li>
            </ul>
          </div>
          <div class="servCard-footer">
            <div class="servCard-meta">
              <span class="servCard-duration">&#x23F1; 6 Months</span>
              <span class="servCard-level servCard-level--intermediate">Intermediate</span>
            </div>
            <a href="contact.php" class="servCard-link">Enroll &#8594;</a>
          </div>
        </div>

        <!-- Card 07 -->
        <div class="servCard reveal" data-category="design">
          <div class="servCard-img-wrap">
            <img src="assets/images/4.jpg" alt="Graphic Design" />
          </div>
          <div class="servCard-body">
            <div class="servCard-top">
              <span class="servCard-icon">&#x270D;&#xFE0F;</span>
              <span class="servCard-cat">Design</span>
            </div>
            <h3 class="servCard-title">Graphic Design</h3>
            <p class="servCard-desc">Adobe Photoshop, Illustrator, and InDesign — build a professional design toolkit and a portfolio that wins clients and jobs.</p>
            <ul class="servCard-tags">
              <li>Photoshop</li>
              <li>Illustrator</li>
              <li>InDesign</li>
              <li>Branding</li>
            </ul>
          </div>
          <div class="servCard-footer">
            <div class="servCard-meta">
              <span class="servCard-duration">&#x23F1; 4 Months</span>
              <span class="servCard-level servCard-level--beginner">Beginner</span>
            </div>
            <a href="contact.php" class="servCard-link">Enroll &#8594;</a>
          </div>
        </div>

        <!-- Card 08 -->
        <div class="servCard reveal d1" data-category="data">
          <div class="servCard-img-wrap">
            <img src="assets/images/1.jpg" alt="Business Intelligence" />
          </div>
          <div class="servCard-body">
            <div class="servCard-top">
              <span class="servCard-icon">&#x1F4C8;</span>
              <span class="servCard-cat">Data &amp; AI</span>
            </div>
            <h3 class="servCard-title">Business Intelligence</h3>
            <p class="servCard-desc">Power BI, SQL, and Excel advanced analytics. Turn raw business data into dashboards and reports that drive real decisions.</p>
            <ul class="servCard-tags">
              <li>Power BI</li>
              <li>SQL</li>
              <li>Excel Advanced</li>
              <li>Tableau</li>
            </ul>
          </div>
          <div class="servCard-footer">
            <div class="servCard-meta">
              <span class="servCard-duration">&#x23F1; 3 Months</span>
              <span class="servCard-level servCard-level--beginner">Beginner</span>
            </div>
            <a href="contact.php" class="servCard-link">Enroll &#8594;</a>
          </div>
        </div>

        <!-- Card 09 -->
        <div class="servCard reveal d2" data-category="security">
          <div class="servCard-img-wrap">
            <img src="assets/images/2.webp" alt="Digital Forensics" />
          </div>
          <div class="servCard-body">
            <div class="servCard-top">
              <span class="servCard-icon">&#x1F575;&#xFE0F;</span>
              <span class="servCard-cat">Security</span>
            </div>
            <h3 class="servCard-title">Digital Forensics</h3>
            <p class="servCard-desc">Incident response, malware analysis, and digital evidence gathering. Prepare for a career in cybercrime investigation and enterprise security.</p>
            <ul class="servCard-tags">
              <li>Incident Response</li>
              <li>Malware Analysis</li>
              <li>OSINT</li>
              <li>Evidence Recovery</li>
            </ul>
          </div>
          <div class="servCard-footer">
            <div class="servCard-meta">
              <span class="servCard-duration">&#x23F1; 5 Months</span>
              <span class="servCard-level servCard-level--advanced">Advanced</span>
            </div>
            <a href="contact.php" class="servCard-link">Enroll &#8594;</a>
          </div>
        </div>

      </div><!-- /servGrid -->
    </div>
  </section>

  <!-- ══════════════════════════ HOW IT WORKS ════════════════════════ -->
  <section class="servProcess">
    <div class="container">
      <div class="servProcess-header">
        <span class="eyebrow reveal">How It Works</span>
        <h2 class="section-heading reveal d1">From enrolment to <em>employment</em></h2>
      </div>
      <div class="servProcess-steps">

        <div class="servStep reveal">
          <div class="servStep-num">01</div>
          <div class="servStep-connector"></div>
          <div class="servStep-icon">&#x1F4CB;</div>
          <h4 class="servStep-title">Apply Online</h4>
          <p class="servStep-desc">Fill out a short form. No entrance exam, no application fee — just your interest and commitment.</p>
        </div>

        <div class="servStep reveal d1">
          <div class="servStep-num">02</div>
          <div class="servStep-connector"></div>
          <div class="servStep-icon">&#x1F4D6;</div>
          <h4 class="servStep-title">Choose Your Track</h4>
          <p class="servStep-desc">Meet with our counsellors to map the right program to your goals, background, and schedule.</p>
        </div>

        <div class="servStep reveal d2">
          <div class="servStep-num">03</div>
          <div class="servStep-connector"></div>
          <div class="servStep-icon">&#x1F6E0;&#xFE0F;</div>
          <h4 class="servStep-title">Learn by Doing</h4>
          <p class="servStep-desc">Attend hands-on classes, complete live projects, and build a portfolio over your programme duration.</p>
        </div>

        <div class="servStep reveal d3">
          <div class="servStep-num">04</div>
          <div class="servStep-connector"></div>
          <div class="servStep-icon">&#x1F3C6;</div>
          <h4 class="servStep-title">Get Certified</h4>
          <p class="servStep-desc">Graduate with an industry-recognised certificate and a portfolio that employers actually want to see.</p>
        </div>

        <div class="servStep reveal d4">
          <div class="servStep-num">05</div>
          <div class="servStep-icon">&#x1F91D;</div>
          <h4 class="servStep-title">Career Support</h4>
          <p class="servStep-desc">Our placement team connects you with hiring partners, prepares you for interviews, and follows up until you land the role.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- ══════════════════════════ COMPARISON TABLE ════════════════════ -->
  <section class="servCompare">
    <div class="container">
      <div class="servCompare-header">
        <span class="eyebrow reveal">Formats</span>
        <h2 class="section-heading reveal d1">Choose how you <em>want to learn</em></h2>
      </div>
      <div class="servCompare-grid">

        <div class="servCompare-card reveal">
          <div class="servCompare-top">
            <div class="servCompare-icon">&#x1F3EB;</div>
            <h3 class="servCompare-title">On-Campus</h3>
            <p class="servCompare-price">From <strong>PKR 25,000</strong> / month</p>
          </div>
          <ul class="servCompare-list">
            <li><span class="servCompare-check">&#10003;</span> In-person instruction 5 days a week</li>
            <li><span class="servCompare-check">&#10003;</span> Access to all IT labs &amp; equipment</li>
            <li><span class="servCompare-check">&#10003;</span> Peer collaboration &amp; group projects</li>
            <li><span class="servCompare-check">&#10003;</span> On-site career fairs &amp; employer visits</li>
            <li><span class="servCompare-cross">&#10007;</span> Remote access to sessions</li>
          </ul>
          <a href="contact.php" class="btn btn-outline-green servCompare-btn">Enquire Now</a>
        </div>

        <div class="servCompare-card servCompare-card--featured reveal d1">
          <div class="servCompare-popular">Most Chosen</div>
          <div class="servCompare-top">
            <div class="servCompare-icon">&#x1F4BB;</div>
            <h3 class="servCompare-title">Hybrid</h3>
            <p class="servCompare-price">From <strong>PKR 20,000</strong> / month</p>
          </div>
          <ul class="servCompare-list">
            <li><span class="servCompare-check">&#10003;</span> 3 days on-campus, 2 days online</li>
            <li><span class="servCompare-check">&#10003;</span> Full lab access on campus days</li>
            <li><span class="servCompare-check">&#10003;</span> Recorded sessions for review</li>
            <li><span class="servCompare-check">&#10003;</span> Live Q&amp;A with instructors online</li>
            <li><span class="servCompare-check">&#10003;</span> Career support included</li>
          </ul>
          <a href="contact.php" class="btn btn-solid servCompare-btn">Apply Now &#8594;</a>
        </div>

        <div class="servCompare-card reveal d2">
          <div class="servCompare-top">
            <div class="servCompare-icon">&#x1F30D;</div>
            <h3 class="servCompare-title">Online</h3>
            <p class="servCompare-price">From <strong>PKR 15,000</strong> / month</p>
          </div>
          <ul class="servCompare-list">
            <li><span class="servCompare-check">&#10003;</span> Fully remote, learn from anywhere</li>
            <li><span class="servCompare-check">&#10003;</span> Live and recorded class sessions</li>
            <li><span class="servCompare-check">&#10003;</span> Online community &amp; peer groups</li>
            <li><span class="servCompare-check">&#10003;</span> Digital certificate on graduation</li>
            <li><span class="servCompare-cross">&#10007;</span> Physical lab access</li>
          </ul>
          <a href="contact.php" class="btn btn-outline-green servCompare-btn">Enquire Now</a>
        </div>

      </div>
    </div>
  </section>

  <!-- ══════════════════════════ CERTIFICATIONS ══════════════════════ -->
  <section class="servCerts">
    <div class="container">
      <div class="servCerts-inner">
        <div class="servCerts-text">
          <span class="eyebrow reveal">Recognised Credentials</span>
          <h2 class="section-heading reveal d1">Certifications that <em>open doors</em></h2>
          <p class="body-text reveal d2">
            Our programs prepare you for globally recognised certifications from Microsoft, Cisco, AWS, Google, and Adobe — included in your tuition, not sold separately.
          </p>
        </div>
        <div class="servCerts-logos reveal d2">
          <div class="servCert-logo">Microsoft</div>
          <div class="servCert-logo">Cisco</div>
          <div class="servCert-logo">AWS</div>
          <div class="servCert-logo">Google</div>
          <div class="servCert-logo">Adobe</div>
          <div class="servCert-logo">CompTIA</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ══════════════════════════ FAQ ═════════════════════════════════ -->
  <section class="servFaq">
    <div class="container">
      <div class="servFaq-header">
        <span class="eyebrow reveal">FAQ</span>
        <h2 class="section-heading reveal d1">Common <em>questions</em></h2>
      </div>
      <div class="servFaq-list">

        <div class="servFaq-item reveal">
          <button class="servFaq-q" aria-expanded="false">
            Do I need prior IT experience to enrol?
            <span class="servFaq-icon">+</span>
          </button>
          <div class="servFaq-a">
            <p>No. Most of our programs start from absolute beginner level. Our counsellors will assess your background during enrolment and place you in the right starting track.</p>
          </div>
        </div>

        <div class="servFaq-item reveal d1">
          <button class="servFaq-q" aria-expanded="false">
            What are the class timings?
            <span class="servFaq-icon">+</span>
          </button>
          <div class="servFaq-a">
            <p>We offer morning (9am–1pm), evening (5pm–9pm), and weekend batches to accommodate students and working professionals.</p>
          </div>
        </div>

        <div class="servFaq-item reveal d2">
          <button class="servFaq-q" aria-expanded="false">
            Are the certificates internationally recognised?
            <span class="servFaq-icon">+</span>
          </button>
          <div class="servFaq-a">
            <p>Yes. All Xpert IT Solution certificates are accredited, and our programs prepare you for vendor certifications from Microsoft, Cisco, AWS, and others that are accepted globally.</p>
          </div>
        </div>

        <div class="servFaq-item reveal d3">
          <button class="servFaq-q" aria-expanded="false">
            Is there an instalment plan available?
            <span class="servFaq-icon">+</span>
          </button>
          <div class="servFaq-a">
            <p>Yes. We offer flexible monthly instalment plans with no interest. Contact our admissions team to discuss what works for your budget.</p>
          </div>
        </div>

        <div class="servFaq-item reveal d4">
          <button class="servFaq-q" aria-expanded="false">
            What is the job placement support like?
            <span class="servFaq-icon">+</span>
          </button>
          <div class="servFaq-a">
            <p>Our dedicated placement team works with 100+ hiring partners across Pakistan. We offer CV reviews, mock interviews, and direct referrals — and we follow up until you have an offer.</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ══════════════════════════ CTA ══════════════════════════════════ -->
  <section id="cta-band">
    <div class="container">
      <div class="cta-inner">
        <div class="cta-text">
          <h2 class="cta-heading reveal">
            Find the program<br/>that fits <em>your goals</em>
          </h2>
          <p class="cta-sub reveal d1">Speak with an admissions counsellor today — free, no obligation, and we'll help you find the right track.</p>
        </div>
        <div class="cta-actions reveal d2">
          <a href="contact.php" class="btn btn-white">
            Apply Now
            <span class="btn-arrow">&#8594;</span>
          </a>
          <a href="contact.php" class="btn-outline-white">Book a Free Consultation</a>
          <p class="cta-note">No application fee &middot; All backgrounds welcome</p>
        </div>
      </div>
    </div>
  </section>

  <?php include 'includes/footer.php'; ?>

  <script>
    /* ── FILTER PILLS ── */
    const pills   = document.querySelectorAll('.servPill');
    const cards   = document.querySelectorAll('.servCard');
    const counter = document.getElementById('servVisibleCount');

    pills.forEach(pill => {
      pill.addEventListener('click', () => {
        pills.forEach(p => p.classList.remove('servPill--active'));
        pill.classList.add('servPill--active');

        const filter = pill.dataset.filter;
        let visible = 0;

        cards.forEach(card => {
          const match = filter === 'all' || card.dataset.category === filter;
          card.style.display = match ? '' : 'none';
          if (match) visible++;
        });

        counter.textContent = visible;
      });
    });

    /* ── FAQ ACCORDION ── */
    document.querySelectorAll('.servFaq-q').forEach(btn => {
      btn.addEventListener('click', () => {
        const item     = btn.closest('.servFaq-item');
        const isOpen   = btn.getAttribute('aria-expanded') === 'true';
        const answer   = item.querySelector('.servFaq-a');
        const icon     = btn.querySelector('.servFaq-icon');

        /* close all */
        document.querySelectorAll('.servFaq-item').forEach(i => {
          i.querySelector('.servFaq-q').setAttribute('aria-expanded', 'false');
          i.querySelector('.servFaq-a').style.maxHeight = null;
          i.querySelector('.servFaq-icon').textContent = '+';
          i.classList.remove('servFaq-item--open');
        });

        if (!isOpen) {
          btn.setAttribute('aria-expanded', 'true');
          answer.style.maxHeight = answer.scrollHeight + 'px';
          icon.textContent = '−';
          item.classList.add('servFaq-item--open');
        }
      });
    });
  </script>

</body>
</html>