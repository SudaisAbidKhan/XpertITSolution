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
            <img src="assets/images/3.jpg" alt="Ahmad Raza — Founder and Director" />
            <div class="teamLeader-socials">
              <a href="#" class="teamLeader-social" aria-label="LinkedIn">in</a>
              <a href="#" class="teamLeader-social" aria-label="Twitter">𝕏</a>
            </div>
          </div>
          <div class="teamLeader-info">
            <h3 class="teamLeader-name">Ahmad Raza</h3>
            <p class="teamLeader-role">Founder &amp; Director</p>
            <p class="teamLeader-bio">
              A software engineer and educator with 20+ years of experience across Pakistan, the Gulf, and the UK. Ahmad founded Xpert IT Solution after seeing first-hand the gap between what industry needed and what graduates could offer. He holds an MSc in Computer Science from the University of Manchester.
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
            <img src="assets/images/3.jpg" alt="Sana Khalid — Head of Curriculum" />
            <div class="teamLeader-socials">
              <a href="#" class="teamLeader-social" aria-label="LinkedIn">in</a>
              <a href="#" class="teamLeader-social" aria-label="Twitter">𝕏</a>
            </div>
          </div>
          <div class="teamLeader-info">
            <h3 class="teamLeader-name">Sana Khalid</h3>
            <p class="teamLeader-role">Head of Curriculum &amp; Academic Affairs</p>
            <p class="teamLeader-bio">
              PhD in Computer Science from NUST Islamabad. Sana has spent 12 years designing programs that balance academic rigour with real-world relevance. She leads all curriculum development, faculty training, and quality assurance at Xpert IT Solution.
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
            <img src="assets/images/3.jpg" alt="Bilal Sheikh — Operations Director" />
            <div class="teamLeader-socials">
              <a href="#" class="teamLeader-social" aria-label="LinkedIn">in</a>
              <a href="#" class="teamLeader-social" aria-label="Twitter">𝕏</a>
            </div>
          </div>
          <div class="teamLeader-info">
            <h3 class="teamLeader-name">Bilal Sheikh</h3>
            <p class="teamLeader-role">Director of Operations</p>
            <p class="teamLeader-bio">
              With a background in business administration and 15 years in education management, Bilal oversees daily operations, campus management, admissions, and student services — ensuring every student's experience runs seamlessly from day one.
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
            <img src="assets/images/3.jpg" alt="Tariq Mahmood" />
          </div>
          <div class="teamMember-info">
            <span class="teamMember-dept teamMember-dept--tech">Technology</span>
            <h4 class="teamMember-name">Tariq Mahmood</h4>
            <p class="teamMember-role">Lead Instructor — Web Development</p>
            <p class="teamMember-exp">12 yrs experience</p>
          </div>
        </div>

        <div class="teamMember-card reveal d1" data-dept="security">
          <div class="teamMember-imgWrap">
            <img src="assets/images/3.jpg" alt="Usman Ali" />
          </div>
          <div class="teamMember-info">
            <span class="teamMember-dept teamMember-dept--security">Security</span>
            <h4 class="teamMember-name">Usman Ali</h4>
            <p class="teamMember-role">Lead Instructor — Cyber Security</p>
            <p class="teamMember-exp">15 yrs experience</p>
          </div>
        </div>

        <div class="teamMember-card reveal d2" data-dept="data">
          <div class="teamMember-imgWrap">
            <img src="assets/images/3.jpg" alt="Nadia Hussain" />
          </div>
          <div class="teamMember-info">
            <span class="teamMember-dept teamMember-dept--data">Data &amp; AI</span>
            <h4 class="teamMember-name">Nadia Hussain</h4>
            <p class="teamMember-role">Lead Instructor — Data Science &amp; AI</p>
            <p class="teamMember-exp">10 yrs experience</p>
          </div>
        </div>

        <div class="teamMember-card reveal d3" data-dept="design">
          <div class="teamMember-imgWrap">
            <img src="assets/images/3.jpg" alt="Zara Qureshi" />
          </div>
          <div class="teamMember-info">
            <span class="teamMember-dept teamMember-dept--design">Design</span>
            <h4 class="teamMember-name">Zara Qureshi</h4>
            <p class="teamMember-role">Lead Instructor — UI/UX Design</p>
            <p class="teamMember-exp">9 yrs experience</p>
          </div>
        </div>

        <div class="teamMember-card reveal" data-dept="tech">
          <div class="teamMember-imgWrap">
            <img src="assets/images/3.jpg" alt="Hassan Baig" />
          </div>
          <div class="teamMember-info">
            <span class="teamMember-dept teamMember-dept--tech">Technology</span>
            <h4 class="teamMember-name">Hassan Baig</h4>
            <p class="teamMember-role">Instructor — Mobile Development</p>
            <p class="teamMember-exp">8 yrs experience</p>
          </div>
        </div>

        <div class="teamMember-card reveal d1" data-dept="tech">
          <div class="teamMember-imgWrap">
            <img src="assets/images/3.jpg" alt="Faisal Nawaz" />
          </div>
          <div class="teamMember-info">
            <span class="teamMember-dept teamMember-dept--tech">Technology</span>
            <h4 class="teamMember-name">Faisal Nawaz</h4>
            <p class="teamMember-role">Instructor — Cloud &amp; Networking</p>
            <p class="teamMember-exp">11 yrs experience</p>
          </div>
        </div>

        <div class="teamMember-card reveal d2" data-dept="design">
          <div class="teamMember-imgWrap">
            <img src="assets/images/3.jpg" alt="Mariam Iqbal" />
          </div>
          <div class="teamMember-info">
            <span class="teamMember-dept teamMember-dept--design">Design</span>
            <h4 class="teamMember-name">Mariam Iqbal</h4>
            <p class="teamMember-role">Instructor — Graphic Design</p>
            <p class="teamMember-exp">7 yrs experience</p>
          </div>
        </div>

        <div class="teamMember-card reveal d3" data-dept="admin">
          <div class="teamMember-imgWrap">
            <img src="assets/images/3.jpg" alt="Ayesha Noor" />
          </div>
          <div class="teamMember-info">
            <span class="teamMember-dept teamMember-dept--admin">Admin</span>
            <h4 class="teamMember-name">Ayesha Noor</h4>
            <p class="teamMember-role">Career Placement Officer</p>
            <p class="teamMember-exp">6 yrs experience</p>
          </div>
        </div>

        <div class="teamMember-card reveal" data-dept="data">
          <div class="teamMember-imgWrap">
            <img src="assets/images/3.jpg" alt="Kamran Yusuf" />
          </div>
          <div class="teamMember-info">
            <span class="teamMember-dept teamMember-dept--data">Data &amp; AI</span>
            <h4 class="teamMember-name">Kamran Yusuf</h4>
            <p class="teamMember-role">Instructor — Business Intelligence</p>
            <p class="teamMember-exp">9 yrs experience</p>
          </div>
        </div>

        <div class="teamMember-card reveal d1" data-dept="security">
          <div class="teamMember-imgWrap">
            <img src="assets/images/3.jpg" alt="Junaid Shah" />
          </div>
          <div class="teamMember-info">
            <span class="teamMember-dept teamMember-dept--security">Security</span>
            <h4 class="teamMember-name">Junaid Shah</h4>
            <p class="teamMember-role">Instructor — Digital Forensics</p>
            <p class="teamMember-exp">13 yrs experience</p>
          </div>
        </div>

        <div class="teamMember-card reveal d2" data-dept="admin">
          <div class="teamMember-imgWrap">
            <img src="assets/images/3.jpg" alt="Rabia Farooq" />
          </div>
          <div class="teamMember-info">
            <span class="teamMember-dept teamMember-dept--admin">Admin</span>
            <h4 class="teamMember-name">Rabia Farooq</h4>
            <p class="teamMember-role">Admissions Coordinator</p>
            <p class="teamMember-exp">5 yrs experience</p>
          </div>
        </div>

        <div class="teamMember-card reveal d3" data-dept="tech">
          <div class="teamMember-imgWrap">
            <img src="assets/images/3.jpg" alt="Omar Siddiqui" />
          </div>
          <div class="teamMember-info">
            <span class="teamMember-dept teamMember-dept--tech">Technology</span>
            <h4 class="teamMember-name">Omar Siddiqui</h4>
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
              <img src="assets/images/3.jpg" alt="Tariq Mahmood" />
            </div>
            <div>
              <div class="teamTQuote-name">Tariq Mahmood</div>
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
              <img src="assets/images/3.jpg" alt="Nadia Hussain" />
            </div>
            <div>
              <div class="teamTQuote-name">Nadia Hussain</div>
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
              <img src="assets/images/3.jpg" alt="Usman Ali" />
            </div>
            <div>
              <div class="teamTQuote-name">Usman Ali</div>
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