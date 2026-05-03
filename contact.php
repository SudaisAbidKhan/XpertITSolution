<?php
$page_title = "Contact Us — Xpert IT Solution";
$current_page = "contact";

/* ── Simple form handler ── */
$formSent    = false;
$formError   = false;
$formMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cont_submit'])) {
  $name    = htmlspecialchars(trim($_POST['cont_name']    ?? ''));
  $email   = htmlspecialchars(trim($_POST['cont_email']   ?? ''));
  $phone   = htmlspecialchars(trim($_POST['cont_phone']   ?? ''));
  $subject = htmlspecialchars(trim($_POST['cont_subject'] ?? ''));
  $message = htmlspecialchars(trim($_POST['cont_message'] ?? ''));
  $program = htmlspecialchars(trim($_POST['cont_program'] ?? ''));

  if ($name && $email && $message && filter_var($email, FILTER_VALIDATE_EMAIL)) {
    /* ── Replace with your own mail logic / SMTP / database insert ── */
    $to      = 'info@xpertitsolution.edu.pk';
    $headers = "From: $email\r\nReply-To: $email\r\nContent-Type: text/plain; charset=UTF-8";
    $body    = "Name: $name\nEmail: $email\nPhone: $phone\nProgram: $program\nSubject: $subject\n\n$message";
    // mail($to, "New Enquiry — $subject", $body, $headers);

    $formSent    = true;
    $formMessage = "Thank you, $name! We'll be in touch within one working day.";
  } else {
    $formError   = true;
    $formMessage = 'Please fill in all required fields with a valid email address.';
  }
}
?>
<?php include 'includes/header.php'; ?>
<link rel="stylesheet" href="assets/css/contact.css">

  <?php include 'includes/navbar.php'; ?>

  <!-- ══════════════════════════ PAGE HERO ═══════════════════════════ -->
  <section class="contHero">
    <div class="contHero-overlay"></div>
    <img
      src="assets/images/2.webp"
      alt="Xpert IT Solution campus"
      class="contHero-img"
      id="contHeroImg"
    />
    <div class="container contHero-inner">
      <span class="eyebrow contHero-eyebrow reveal">Get In Touch</span>
      <h1 class="contHero-heading reveal d1">
        We'd love to<br/>hear from <em>you</em>
      </h1>
      <p class="contHero-sub reveal d2">
        Whether you're ready to enrol, have questions about a program, or just want to visit the campus — our team is here to help, every step of the way.
      </p>
      <div class="contHero-chips reveal d3">
        <a href="#contForm"    class="contChip">&#x1F4DD; Send a Message</a>
        <a href="#contOffice"  class="contChip">&#x1F4CD; Find Us</a>
        <a href="tel:+919150001234" class="contChip">&#x1F4DE; Call Us</a>
      </div>
    </div>
  </section>

  <!-- ══════════════════════════ QUICK INFO BAR ══════════════════════ -->
  <div class="contInfoBar">
    <div class="container contInfoBar-inner">

      <div class="contInfoItem">
        <span class="contInfoItem-icon">&#x1F4CD;</span>
        <div>
          <p class="contInfoItem-label">Address</p>
          <p class="contInfoItem-value">University Road, Peshawar, KPK, Pakistan</p>
        </div>
      </div>

      <div class="contInfoDivider"></div>

      <div class="contInfoItem">
        <span class="contInfoItem-icon">&#x1F4DE;</span>
        <div>
          <p class="contInfoItem-label">Phone</p>
          <a href="tel:+919150001234" class="contInfoItem-value contInfoItem-link">+91 91 5000 1234</a>
        </div>
      </div>

      <div class="contInfoDivider"></div>

      <div class="contInfoItem">
        <span class="contInfoItem-icon">&#x2709;&#xFE0F;</span>
        <div>
          <p class="contInfoItem-label">Email</p>
          <a href="mailto:info@xpertitsolution.edu.pk" class="contInfoItem-value contInfoItem-link">info@xpertitsolution.edu.pk</a>
        </div>
      </div>

      <div class="contInfoDivider"></div>

      <div class="contInfoItem">
        <span class="contInfoItem-icon">&#x23F0;</span>
        <div>
          <p class="contInfoItem-label">Office Hours</p>
          <p class="contInfoItem-value">Mon – Sat &nbsp;·&nbsp; 9:00 AM – 7:00 PM</p>
        </div>
      </div>

    </div>
  </div>

  <!-- ══════════════════════════ FORM + SIDEBAR ══════════════════════ -->
  <section class="contMain" id="contForm">
    <div class="container contMain-inner">

      <!-- ── LEFT: FORM ── -->
      <div class="contForm-wrap">
        <span class="eyebrow reveal">Send a Message</span>
        <h2 class="section-heading reveal d1">Tell us how we can <em>help</em></h2>

        <?php if ($formSent): ?>
          <div class="contAlert contAlert--success reveal">
            <span class="contAlert-icon">&#10003;</span>
            <p><?php echo $formMessage; ?></p>
          </div>
        <?php elseif ($formError): ?>
          <div class="contAlert contAlert--error reveal">
            <span class="contAlert-icon">&#x26A0;</span>
            <p><?php echo $formMessage; ?></p>
          </div>
        <?php endif; ?>

        <form class="contForm reveal d2" method="POST" action="#contForm" novalidate>

          <div class="contForm-row">
            <div class="contField">
              <label class="contField-label" for="cont_name">Full Name <span class="contField-req">*</span></label>
              <input
                class="contField-input"
                type="text"
                id="cont_name"
                name="cont_name"
                placeholder="e.g. Ahmad Raza"
                value="<?php echo htmlspecialchars($_POST['cont_name'] ?? ''); ?>"
                required
              />
            </div>
            <div class="contField">
              <label class="contField-label" for="cont_email">Email Address <span class="contField-req">*</span></label>
              <input
                class="contField-input"
                type="email"
                id="cont_email"
                name="cont_email"
                placeholder="e.g. ahmad@email.com"
                value="<?php echo htmlspecialchars($_POST['cont_email'] ?? ''); ?>"
                required
              />
            </div>
          </div>

          <div class="contForm-row">
            <div class="contField">
              <label class="contField-label" for="cont_phone">Phone Number</label>
              <input
                class="contField-input"
                type="tel"
                id="cont_phone"
                name="cont_phone"
                placeholder="e.g. 0300 1234567"
                value="<?php echo htmlspecialchars($_POST['cont_phone'] ?? ''); ?>"
              />
            </div>
            <div class="contField">
              <label class="contField-label" for="cont_program">Interested Program</label>
              <select class="contField-input contField-select" id="cont_program" name="cont_program">
                <option value="" disabled <?php echo empty($_POST['cont_program']) ? 'selected' : ''; ?>>Select a program…</option>
                <option value="web-dev"       <?php echo (($_POST['cont_program'] ?? '') === 'web-dev')       ? 'selected' : ''; ?>>Web &amp; App Development</option>
                <option value="cyber"         <?php echo (($_POST['cont_program'] ?? '') === 'cyber')         ? 'selected' : ''; ?>>Cyber Security</option>
                <option value="data-ai"       <?php echo (($_POST['cont_program'] ?? '') === 'data-ai')       ? 'selected' : ''; ?>>Data Science &amp; AI</option>
                <option value="ui-ux"         <?php echo (($_POST['cont_program'] ?? '') === 'ui-ux')         ? 'selected' : ''; ?>>UI / UX Design</option>
                <option value="mobile"        <?php echo (($_POST['cont_program'] ?? '') === 'mobile')        ? 'selected' : ''; ?>>Mobile App Development</option>
                <option value="cloud"         <?php echo (($_POST['cont_program'] ?? '') === 'cloud')         ? 'selected' : ''; ?>>Cloud &amp; Networking</option>
                <option value="graphic"       <?php echo (($_POST['cont_program'] ?? '') === 'graphic')       ? 'selected' : ''; ?>>Graphic Design</option>
                <option value="bi"            <?php echo (($_POST['cont_program'] ?? '') === 'bi')            ? 'selected' : ''; ?>>Business Intelligence</option>
                <option value="forensics"     <?php echo (($_POST['cont_program'] ?? '') === 'forensics')     ? 'selected' : ''; ?>>Digital Forensics</option>
                <option value="other"         <?php echo (($_POST['cont_program'] ?? '') === 'other')         ? 'selected' : ''; ?>>Other / General Enquiry</option>
              </select>
            </div>
          </div>

          <div class="contField">
            <label class="contField-label" for="cont_subject">Subject <span class="contField-req">*</span></label>
            <input
              class="contField-input"
              type="text"
              id="cont_subject"
              name="cont_subject"
              placeholder="e.g. Enrolment enquiry for January batch"
              value="<?php echo htmlspecialchars($_POST['cont_subject'] ?? ''); ?>"
              required
            />
          </div>

          <div class="contField">
            <label class="contField-label" for="cont_message">Message <span class="contField-req">*</span></label>
            <textarea
              class="contField-input contField-textarea"
              id="cont_message"
              name="cont_message"
              rows="5"
              placeholder="Tell us a bit about yourself and what you're looking for…"
              required
            ><?php echo htmlspecialchars($_POST['cont_message'] ?? ''); ?></textarea>
          </div>

          <!-- Enquiry type radio -->
          <fieldset class="contRadioGroup">
            <legend class="contField-label">Enquiry Type</legend>
            <div class="contRadio-options">
              <label class="contRadio">
                <input type="radio" name="cont_type" value="enrolment" checked />
                <span class="contRadio-box"></span>
                Enrolment
              </label>
              <label class="contRadio">
                <input type="radio" name="cont_type" value="information" />
                <span class="contRadio-box"></span>
                General Information
              </label>
              <label class="contRadio">
                <input type="radio" name="cont_type" value="visit" />
                <span class="contRadio-box"></span>
                Campus Visit
              </label>
              <label class="contRadio">
                <input type="radio" name="cont_type" value="corporate" />
                <span class="contRadio-box"></span>
                Corporate / Partnership
              </label>
            </div>
          </fieldset>

          <div class="contForm-footer">
            <button class="contSubmit" type="submit" name="cont_submit">
              <span class="contSubmit-text">Send Message</span>
              <span class="contSubmit-arrow">&#8594;</span>
              <span class="contSubmit-loader" aria-hidden="true"></span>
            </button>
            <p class="contForm-note">We reply within one working day. No spam, ever.</p>
          </div>

        </form>
      </div>

      <!-- ── RIGHT: SIDEBAR ── -->
      <aside class="contSidebar">

        <!-- Visit card -->
        <div class="contSidebar-card reveal d1">
          <div class="contSidebar-cardIcon">&#x1F3EB;</div>
          <h4 class="contSidebar-cardTitle">Visit Our Campus</h4>
          <p class="contSidebar-cardText">
            Book a free campus tour. See our labs, meet faculty, and get a feel for student life at Xpert IT Solution.
          </p>
          <a href="tel:+919150001234" class="contSidebar-cardLink">Call to Book &#8594;</a>
        </div>

        <!-- Whatsapp card -->
        <div class="contSidebar-card contSidebar-card--green reveal d2">
          <div class="contSidebar-cardIcon">&#x1F4AC;</div>
          <h4 class="contSidebar-cardTitle">Chat on WhatsApp</h4>
          <p class="contSidebar-cardText">
            Prefer a quick chat? Message us on WhatsApp and get answers from our admissions team in minutes.
          </p>
          <a href="https://wa.me/919150001234" target="_blank" rel="noopener" class="contSidebar-cardLink">Open WhatsApp &#8594;</a>
        </div>

        <!-- Office hours -->
        <div class="contSidebar-card reveal d3">
          <div class="contSidebar-cardIcon">&#x23F0;</div>
          <h4 class="contSidebar-cardTitle">Office Hours</h4>
          <ul class="contHours-list">
            <li class="contHours-item">
              <span class="contHours-day">Monday – Thursday</span>
              <span class="contHours-time">9:00 AM – 7:00 PM</span>
            </li>
            <li class="contHours-item">
              <span class="contHours-day">Friday</span>
              <span class="contHours-time">9:00 AM – 1:00 PM</span>
            </li>
            <li class="contHours-item">
              <span class="contHours-day">Saturday</span>
              <span class="contHours-time">10:00 AM – 4:00 PM</span>
            </li>
            <li class="contHours-item contHours-item--closed">
              <span class="contHours-day">Sunday</span>
              <span class="contHours-time">Closed</span>
            </li>
          </ul>
        </div>

        <!-- Social links -->
        <div class="contSidebar-card reveal d4">
          <div class="contSidebar-cardIcon">&#x1F310;</div>
          <h4 class="contSidebar-cardTitle">Follow Us</h4>
          <div class="contSocials">
            <a href="#" class="contSocial" aria-label="Facebook">
              <span class="contSocial-icon">f</span>
              <span>Facebook</span>
            </a>
            <a href="#" class="contSocial" aria-label="Instagram">
              <span class="contSocial-icon">&#x1F4F7;</span>
              <span>Instagram</span>
            </a>
            <a href="#" class="contSocial" aria-label="LinkedIn">
              <span class="contSocial-icon">in</span>
              <span>LinkedIn</span>
            </a>
            <a href="#" class="contSocial" aria-label="YouTube">
              <span class="contSocial-icon">&#x25B6;</span>
              <span>YouTube</span>
            </a>
          </div>
        </div>

      </aside>

    </div>
  </section>

  <!-- ══════════════════════════ MAP SECTION ══════════════════════════ -->
  <section class="contMap" id="contOffice">
    <div class="contMap-embed">
      <!-- Replace src with your actual Google Maps embed URL -->
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3306.0!2d71.5249!3d34.0151!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzTCsDAwJzU0LjMiTiA3McKwMzEnMjkuNiJF!5e0!3m2!1sen!2spk!4v1234567890"
        width="100%"
        height="100%"
        style="border:0;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
        title="Xpert IT Solution — University Road, Peshawar"
      ></iframe>
    </div>
    <div class="contMap-card">
      <div class="contMap-cardIcon">&#x1F4CD;</div>
      <h3 class="contMap-cardTitle">Find Us Here</h3>
      <p class="contMap-cardAddress">
        Xpert IT Solution<br/>
        University Road, Peshawar<br/>
        Khyber Pakhtunkhwa, Pakistan
      </p>
      <div class="contMap-cardMeta">
        <span class="contMap-badge">&#x1F697; Parking Available</span>
        <span class="contMap-badge">&#x1F68C; Bus Route 7 &amp; 12</span>
      </div>
      <a
        href="https://www.google.com/maps/dir/?api=1&destination=University+Road+Peshawar"
        target="_blank"
        rel="noopener"
        class="btn btn-solid contMap-btn"
      >
        Get Directions
        <span class="btn-arrow">&#8594;</span>
      </a>
    </div>
  </section>

  <!-- ══════════════════════════ FAQ STRIP ═══════════════════════════ -->
  <section class="contFaq">
    <div class="container">
      <div class="contFaq-header">
        <span class="eyebrow reveal">Before You Write</span>
        <h2 class="section-heading reveal d1">Quick <em>answers</em></h2>
      </div>
      <div class="contFaq-grid">

        <div class="contFaqItem reveal">
          <div class="contFaqItem-q">How quickly will you reply?</div>
          <p class="contFaqItem-a">We aim to reply to all enquiries within one working day. WhatsApp responses are usually much faster — often within a few hours.</p>
        </div>

        <div class="contFaqItem reveal d1">
          <div class="contFaqItem-q">Can I visit without an appointment?</div>
          <p class="contFaqItem-a">Yes, you're welcome to drop by during office hours. For a dedicated tour and meeting with a counsellor, we recommend booking in advance.</p>
        </div>

        <div class="contFaqItem reveal d2">
          <div class="contFaqItem-q">Is there parking at the campus?</div>
          <p class="contFaqItem-a">Yes. We have free parking available on-site for visitors and students on University Road.</p>
        </div>

        <div class="contFaqItem reveal d3">
          <div class="contFaqItem-q">Who should I contact for corporate training?</div>
          <p class="contFaqItem-a">Select "Corporate / Partnership" as your enquiry type in the form above, or email us directly at corporate@xpertitsolution.edu.pk.</p>
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
            Still thinking?<br/>Let's talk <em>today</em>.
          </h2>
          <p class="cta-sub reveal d1">Our admissions counsellors are available 6 days a week. No pressure, no obligation — just answers.</p>
        </div>
        <div class="cta-actions reveal d2">
          <a href="tel:+919150001234" class="btn btn-white">
            Call Now
            <span class="btn-arrow">&#8594;</span>
          </a>
          <a href="https://wa.me/919150001234" target="_blank" rel="noopener" class="btn-outline-white">
            WhatsApp Us
          </a>
          <p class="cta-note">Mon – Sat &nbsp;·&nbsp; 9:00 AM – 7:00 PM</p>
        </div>
      </div>
    </div>
  </section>

  <?php include 'includes/footer.php'; ?>

  <script>
    /* ── HERO IMAGE ENTRANCE ── */
    const contHeroImg = document.getElementById('contHeroImg');
    setTimeout(() => contHeroImg && contHeroImg.classList.add('loaded'), 80);

    /* ── SUBMIT BUTTON LOADING STATE ── */
    const contForm = document.querySelector('.contForm');
    const contBtn  = document.querySelector('.contSubmit');
    if (contForm && contBtn) {
      contForm.addEventListener('submit', () => {
        contBtn.classList.add('contSubmit--loading');
        contBtn.disabled = true;
      });
    }

    /* ── SMOOTH SCROLL FOR HERO CHIP LINKS ── */
    document.querySelectorAll('.contChip[href^="#"]').forEach(chip => {
      chip.addEventListener('click', e => {
        e.preventDefault();
        const target = document.querySelector(chip.getAttribute('href'));
        if (target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      });
    });

    /* ── FIELD FOCUS ANIMATION ── */
    document.querySelectorAll('.contField-input').forEach(input => {
      input.addEventListener('focus',  () => input.closest('.contField')?.classList.add('contField--focused'));
      input.addEventListener('blur',   () => input.closest('.contField')?.classList.remove('contField--focused'));
    });
  </script>

</body>
</html>