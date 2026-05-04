<?php
$page_title = "Our Team — Xpert IT Solution";
$current_page = "team";
?>
<?php include 'includes/header.php'; ?>
<link rel="stylesheet" href="assets/css/team.css">

  <?php include 'includes/navbar.php'; ?>

  <!-- ══════════════════════════ PAGE HERO ═══════════════════════════ -->
  <section class="teamHero">
    <div class="teamHero-overlay"></div>
    <img
      src="assets/images/5.jpg"
      alt="Xpert IT Solution team"
      class="teamHero-img"
      id="teamHeroImg"
    />
    <div class="container teamHero-inner">
      <span class="eyebrow teamHero-eyebrow reveal">Our People</span>
      <h1 class="teamHero-heading reveal d1">
        The minds behind<br/><em>Xpert IT Solution</em>
      </h1>
      <p class="teamHero-sub reveal d2">
        Our faculty are not just teachers — they are practitioners, engineers, designers, and entrepreneurs who bring the real world into every classroom.
      </p>
      <div class="teamHero-stats reveal d3">
        <div class="teamHero-stat">
          <span class="teamHero-statNum">42<sup>+</sup></span>
          <span class="teamHero-statLabel">Faculty Members</span>
        </div>
        <div class="teamHero-statDivider"></div>
        <div class="teamHero-stat">
          <span class="teamHero-statNum">18<sup>+</sup></span>
          <span class="teamHero-statLabel">Years Avg. Experience</span>
        </div>
        <div class="teamHero-statDivider"></div>
        <div class="teamHero-stat">
          <span class="teamHero-statNum">12<sup>+</sup></span>
          <span class="teamHero-statLabel">Industry Partners</span>
        </div>
      </div>
    </div>
  </section>

  <!-- ══════════════════════════ LEADERSHIP ══════════════════════════ -->
  <section class="teamLeadership">
    <div class="container">
      <div class="teamLeadership-header">
        <span class="eyebrow reveal">Leadership</span>
        <h2 class="section-heading reveal d1">The founding <em>team</em></h2>
      </div>

      <div class="teamLeadership-grid">

        <div class="teamLeader-card reveal">
          <div class="teamLeader-imgWrap">
            <img src="assets/images/staff/wahab khan.jpeg" alt="Wahab Khan — Founder and Director" />
            <div class="teamLeader-socials">
              <a href="#" class="teamLeader-social" aria-label="LinkedIn">in</a>
              <a href="#" class="teamLeader-social" aria-label="Twitter">𝕏</a>
            </div>
          </div>
          <div class="teamLeader-info">
            <h3 class="teamLeader-name">Wahab Khan</h3>
            <p class="teamLeader-role">Founder &amp; Director</p>
            <p class="teamLeader-bio">
              A software engineer and educator with 20+ years of experience across Pakistan, the Gulf, and the UK. Wahab founded Xpert IT Solution after seeing first-hand the gap between what industry needed and what graduates could offer. He holds an MSc in Computer Science from the University of Manchester.
            </p>
            <div class="teamLeader-tags">
              <span>Software Engineering</span>
              <span>EdTech</span>
              <span>Leadership</span>
            </div>
          </div>
        </div>

        <div class="teamLeader-card reveal d1">
          <div class="teamLeader-imgWrap">
            <img src="assets/images/staff/bilal khan.jpeg" alt="Bilal Khan — Head of Curriculum" />
            <div class="teamLeader-socials">
              <a href="#" class="teamLeader-social" aria-label="LinkedIn">in</a>
              <a href="#" class="teamLeader-social" aria-label="Twitter">𝕏</a>
            </div>
          </div>
          <div class="teamLeader-info">
            <h3 class="teamLeader-name">Bilal Khan</h3>
            <p class="teamLeader-role">Head of Curriculum &amp; Academic Affairs</p>
            <p class="teamLeader-bio">
              PhD in Computer Science from NUST Islamabad. Bilal has spent 12 years designing programs that balance academic rigour with real-world relevance. He leads all curriculum development, faculty training, and quality assurance at Xpert IT Solution.
            </p>
            <div class="teamLeader-tags">
              <span>Curriculum Design</span>
              <span>AI &amp; ML</span>
              <span>Research</span>
            </div>
          </div>
        </div>

        <div class="teamLeader-card reveal d2">
          <div class="teamLeader-imgWrap">
            <img src="assets/images/staff/sarwar shah.jpeg" alt="Sarwar Shah — Operations Director" />
            <div class="teamLeader-socials">
              <a href="#" class="teamLeader-social" aria-label="LinkedIn">in</a>
              <a href="#" class="teamLeader-social" aria-label="Twitter">𝕏</a>
            </div>
          </div>
          <div class="teamLeader-info">
            <h3 class="teamLeader-name">Sarwar Shah</h3>
            <p class="teamLeader-role">Director of Operations</p>
            <p class="teamLeader-bio">
              With a background in business administration and 15 years in education management, Sarwar oversees daily operations, campus management, admissions, and student services — ensuring every student's experience runs seamlessly from day one.
            </p>
            <div class="teamLeader-tags">
              <span>Operations</span>
              <span>Admissions</span>
              <span>Student Services</span>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ══════════════════════════ DEPARTMENT TABS ═════════════════════ -->
  <section class="teamDepts">
    <div class="container">
      <div class="teamDepts-header">
        <span class="eyebrow reveal">Faculty</span>
        <h2 class="section-heading reveal d1">Meet our <em>instructors</em></h2>
      </div>

      <!-- Tab Nav -->
      <div class="teamTabs reveal d2">
        <button class="teamTab teamTab--active" data-dept="all">All</button>
        <button class="teamTab" data-dept="tech">Technology</button>
        <button class="teamTab" data-dept="design">Design</button>
        <button class="teamTab" data-dept="data">Data &amp; AI</button>
        <button class="teamTab" data-dept="security">Security</button>
        <button class="teamTab" data-dept="admin">Admin &amp; Support</button>
      </div>

      <!-- Faculty Grid -->
      <div class="teamFaculty-grid" id="teamFacultyGrid">

        <div class="teamMember-card reveal" data-dept="tech">
          <div class="teamMember-imgWrap">
            <img src="assets/images/staff/adnan khan.jpg" alt="Adnan Khan" />
          </div>
          <div class="teamMember-info">
            <span class="teamMember-dept teamMember-dept--tech">Technology</span>
            <h4 class="teamMember-name">Adnan Khan</h4>
            <p class="teamMember-role">Lead Instructor — Web Development</p>
            <p class="teamMember-exp">12 yrs experience</p>
          </div>
        </div>

        <div class="teamMember-card reveal d1" data-dept="security">
          <div class="teamMember-imgWrap">
            <img src="data:image/jpg;base64,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" alt="Muhammad Usman" />
          </div>
          <div class="teamMember-info">
            <span class="teamMember-dept teamMember-dept--security">Security</span>
            <h4 class="teamMember-name">Muhammad Usman</h4>
            <p class="teamMember-role">Lead Instructor — Cyber Security</p>
            <p class="teamMember-exp">15 yrs experience</p>
          </div>
        </div>

        <div class="teamMember-card reveal d2" data-dept="data">
          <div class="teamMember-imgWrap">
            <img src="assets/images/staff/aiman.png" alt="Ms. Aiman" />
          </div>
          <div class="teamMember-info">
            <span class="teamMember-dept teamMember-dept--data">Data &amp; AI</span>
            <h4 class="teamMember-name">Ms. Aiman</h4>
            <p class="teamMember-role">Lead Instructor — Data Science &amp; AI</p>
            <p class="teamMember-exp">10 yrs experience</p>
          </div>
        </div>

        <div class="teamMember-card reveal d3" data-dept="design">
          <div class="teamMember-imgWrap">
            <img src="assets/images/staff/alyan ahmed.png" alt="Alyan Ahmed" />
          </div>
          <div class="teamMember-info">
            <span class="teamMember-dept teamMember-dept--design">Design</span>
            <h4 class="teamMember-name">Alyan Ahmed</h4>
            <p class="teamMember-role">Lead Instructor — UI/UX Design</p>
            <p class="teamMember-exp">4 yrs experience</p>
          </div>
        </div>

        <div class="teamMember-card reveal" data-dept="tech">
          <div class="teamMember-imgWrap">
            <img src="assets/images/staff/tahir zaman.jpeg" alt="Tahir Zaman" />
          </div>
          <div class="teamMember-info">
            <span class="teamMember-dept teamMember-dept--tech">Technology</span>
            <h4 class="teamMember-name">Tahir Zaman</h4>
            <p class="teamMember-role">Instructor — Mobile Development</p>
            <p class="teamMember-exp">8 yrs experience</p>
          </div>
        </div>

        <div class="teamMember-card reveal d1" data-dept="tech">
          <div class="teamMember-imgWrap">
            <img src="assets/images/staff/muhammad arshad.jpg" alt="Muhammad Arshad" />
          </div>
          <div class="teamMember-info">
            <span class="teamMember-dept teamMember-dept--tech">Technology</span>
            <h4 class="teamMember-name">Muhammad Arshad</h4>
            <p class="teamMember-role">Instructor — Cloud &amp; Networking</p>
            <p class="teamMember-exp">11 yrs experience</p>
          </div>
        </div>

        <div class="teamMember-card reveal d2" data-dept="design">
          <div class="teamMember-imgWrap">
            <img src="assets/images/staff/fazal rahman afridi.jpg" alt="Fazal Rahman Afridi" />
          </div>
          <div class="teamMember-info">
            <span class="teamMember-dept teamMember-dept--design">Design</span>
            <h4 class="teamMember-name">Fazal Rahman Afridi</h4>
            <p class="teamMember-role">Instructor — Graphic Design</p>
            <p class="teamMember-exp">7 yrs experience</p>
          </div>
        </div>

        <div class="teamMember-card reveal d3" data-dept="admin">
          <div class="teamMember-imgWrap">
            <img src="assets/images/staff/aiman.png" alt="Shamsa" />
          </div>
          <div class="teamMember-info">
            <span class="teamMember-dept teamMember-dept--admin">Admin</span>
            <h4 class="teamMember-name">Shamsa</h4>
            <p class="teamMember-role">Career Placement Officer</p>
            <p class="teamMember-exp">6 yrs experience</p>
          </div>
        </div>

        <div class="teamMember-card reveal" data-dept="data">
          <div class="teamMember-imgWrap">
            <img src="assets/images/staff/wahab khan.jpeg" alt="Wahab Khan" />
          </div>
          <div class="teamMember-info">
            <span class="teamMember-dept teamMember-dept--data">Data &amp; AI</span>
            <h4 class="teamMember-name">Wahab Khan</h4>
            <p class="teamMember-role">Instructor — Business Intelligence</p>
            <p class="teamMember-exp">9 yrs experience</p>
          </div>
        </div>

        <div class="teamMember-card reveal d1" data-dept="security">
          <div class="teamMember-imgWrap">
            <img src="data:image/jpg;base64,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" alt="Muhammad Usman" />
          </div>
          <div class="teamMember-info">
            <span class="teamMember-dept teamMember-dept--security">Security</span>
            <h4 class="teamMember-name">Muhammad Usman</h4>
            <p class="teamMember-role">Instructor — Digital Forensics</p>
            <p class="teamMember-exp">6 yrs experience</p>
          </div>
        </div>

        <div class="teamMember-card reveal d2" data-dept="admin">
          <div class="teamMember-imgWrap">
            <img src="assets/images/staff/yousaf khan.jpg" alt="Yousaf Khan" />
          </div>
          <div class="teamMember-info">
            <span class="teamMember-dept teamMember-dept--admin">Admin</span>
            <h4 class="teamMember-name">Yousaf Khan</h4>
            <p class="teamMember-role">Admissions Coordinator</p>
            <p class="teamMember-exp">5 yrs experience</p>
          </div>
        </div>

        <div class="teamMember-card reveal d3" data-dept="tech">
          <div class="teamMember-imgWrap">
            <img src="assets/images/staff/adnan khan.jpg" alt="Omar Siddiqui" />
          </div>
          <div class="teamMember-info">
            <span class="teamMember-dept teamMember-dept--tech">Technology</span>
            <h4 class="teamMember-name">Adnan Khan</h4>
            <p class="teamMember-role">Instructor — Backend Development</p>
            <p class="teamMember-exp">10 yrs experience</p>
          </div>
        </div>

      </div><!-- /teamFaculty-grid -->
    </div>
  </section>

  <!-- ══════════════════════════ CULTURE BAND ════════════════════════ -->
  <section class="teamCulture">
    <div class="teamCulture-imgLeft">
      <img src="assets/images/4.jpg" alt="Xpert IT campus culture" />
    </div>
    <div class="teamCulture-text">
      <span class="eyebrow reveal">Life at Xpert IT</span>
      <h2 class="section-heading reveal d1">A culture of<br/><em>curiosity &amp; craft</em></h2>
      <p class="body-text reveal d2">
        We hire people who love what they do — and it shows. Our faculty meet weekly to share what's changing in industry, debate what should change in education, and collaborate on projects together. When teachers are still learning, students feel it.
      </p>
      <ul class="teamCulture-list reveal d3">
        <li>
          <span class="teamCulture-dot"></span>
          Weekly faculty development sessions
        </li>
        <li>
          <span class="teamCulture-dot"></span>
          Industry sabbaticals every 2 years
        </li>
        <li>
          <span class="teamCulture-dot"></span>
          Open-door culture for every student
        </li>
        <li>
          <span class="teamCulture-dot"></span>
          Collaborative research &amp; publications
        </li>
      </ul>
    </div>
    <div class="teamCulture-imgRight">
      <img src="assets/images/1.jpg" alt="Faculty collaborating at Xpert IT" />
    </div>
  </section>

  <!-- ══════════════════════════ TESTIMONIALS ════════════════════════ -->
  <section class="teamTestimonials">
    <div class="container">
      <div class="teamTestimonials-header">
        <span class="eyebrow reveal">Faculty Voices</span>
        <h2 class="section-heading reveal d1">Why our teachers <em>love it here</em></h2>
      </div>

      <div class="teamTestimonials-grid">

        <div class="teamTQuote reveal">
          <span class="teamTQuote-mark">&#8220;</span>
          <p class="teamTQuote-text">
            Teaching here keeps me sharp. The students ask questions that send me back to my laptop to test things — and that's exactly what great teaching should feel like.
          </p>
          <div class="teamTQuote-author">
            <div class="teamTQuote-avatar">
              <img src="assets/images/staff/adnan khan.jpg" alt="Adnan Khan" />
            </div>
            <div>
              <div class="teamTQuote-name">Adnan Khan</div>
              <div class="teamTQuote-role">Web Development Instructor</div>
            </div>
          </div>
        </div>

        <div class="teamTQuote reveal d1">
          <span class="teamTQuote-mark">&#8220;</span>
          <p class="teamTQuote-text">
            I've worked at three universities and two private academies. Nowhere else has the leadership trusted faculty to redesign curriculum from scratch every semester. That trust is rare.
          </p>
          <div class="teamTQuote-author">
            <div class="teamTQuote-avatar">
              <img src="assets/images/staff/aiman.png" alt="Ms. Aiman" />
            </div>
            <div>
              <div class="teamTQuote-name">Ms. Aiman</div>
              <div class="teamTQuote-role">Data Science Instructor</div>
            </div>
          </div>
        </div>

        <div class="teamTQuote reveal d2">
          <span class="teamTQuote-mark">&#8220;</span>
          <p class="teamTQuote-text">
            The students here are hungry. They come in early, they stay late, they message you at midnight with bugs they've found. It's exhausting in the best possible way.
          </p>
          <div class="teamTQuote-author">
            <div class="teamTQuote-avatar">
              <img src="data:image/jpg;base64,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" alt="Muhammad Usman" />
            </div>
            <div>
              <div class="teamTQuote-name">Muhammad Usman</div>
              <div class="teamTQuote-role">Cyber Security Instructor</div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ══════════════════════════ JOIN US ══════════════════════════════ -->
  <section class="teamJoin">
    <div class="container">
      <div class="teamJoin-inner">
        <div class="teamJoin-text">
          <span class="eyebrow reveal">Join the Team</span>
          <h2 class="section-heading reveal d1">
            Want to teach at<br/><em>Xpert IT Solution?</em>
          </h2>
          <p class="body-text reveal d2">
            We are always looking for experienced practitioners who want to give back, share their expertise, and help shape the next generation of Pakistan's tech talent. Part-time and full-time roles available.
          </p>
        </div>
        <div class="teamJoin-cards reveal d2">
          <div class="teamJoin-card">
            <div class="teamJoin-cardIcon">&#x1F4BC;</div>
            <h4 class="teamJoin-cardTitle">Full-Time Faculty</h4>
            <p class="teamJoin-cardDesc">Competitive salary, professional development budget, and research opportunities.</p>
            <a href="contact.php" class="teamJoin-cardLink">Apply &#8594;</a>
          </div>
          <div class="teamJoin-card">
            <div class="teamJoin-cardIcon">&#x23F0;</div>
            <h4 class="teamJoin-cardTitle">Part-Time Instructor</h4>
            <p class="teamJoin-cardDesc">Teach evenings or weekends while keeping your industry career. Flexible scheduling.</p>
            <a href="contact.php" class="teamJoin-cardLink">Apply &#8594;</a>
          </div>
          <div class="teamJoin-card">
            <div class="teamJoin-cardIcon">&#x1F91D;</div>
            <h4 class="teamJoin-cardTitle">Industry Guest Speaker</h4>
            <p class="teamJoin-cardDesc">Share a project, a lesson, or a career story. One session, lasting impact.</p>
            <a href="contact.php" class="teamJoin-cardLink">Get in Touch &#8594;</a>
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
            Learn from the<br/><em>best in the field</em>
          </h2>
          <p class="cta-sub reveal d1">Our faculty bring industry experience into every class. Enrol today and learn from people who are still doing it.</p>
        </div>
        <div class="cta-actions reveal d2">
          <a href="contact.php" class="btn btn-white">
            Apply Now
            <span class="btn-arrow">&#8594;</span>
          </a>
          <a href="services.php" class="btn-outline-white">View Programs</a>
          <p class="cta-note">No application fee &middot; Open to all backgrounds</p>
        </div>
      </div>
    </div>
  </section>

  <?php include 'includes/footer.php'; ?>

  <script>
    /* ── HERO IMAGE ENTRANCE ── */
    const teamHeroImg = document.getElementById('teamHeroImg');
    setTimeout(() => teamHeroImg && teamHeroImg.classList.add('loaded'), 80);

    /* ── DEPARTMENT TABS ── */
    const tabs    = document.querySelectorAll('.teamTab');
    const members = document.querySelectorAll('.teamMember-card');

    tabs.forEach(tab => {
      tab.addEventListener('click', () => {
        tabs.forEach(t => t.classList.remove('teamTab--active'));
        tab.classList.add('teamTab--active');

        const dept = tab.dataset.dept;
        members.forEach(card => {
          const match = dept === 'all' || card.dataset.dept === dept;
          card.style.display = match ? '' : 'none';
        });
      });
    });
  </script>

</body>
</html>