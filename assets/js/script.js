/* ── LOADER ── */
window.addEventListener("load", () => {
  setTimeout(
    () => document.getElementById("loader").classList.add("hidden"),
    1100,
  );
});

/* ── NAV SCROLL SHADOW ── */
const nav = document.getElementById("nav");
window.addEventListener(
  "scroll",
  () => {
    nav.classList.toggle("scrolled", window.scrollY > 20);
  },
  { passive: true },
);

/* ── HERO IMAGE ENTRANCE ── */
const heroImg = document.getElementById("heroImg");
setTimeout(() => heroImg && heroImg.classList.add("loaded"), 80);

/* ── CURSOR ── */
const cursor = document.getElementById("cursor");
document.addEventListener("mousemove", (e) => {
  cursor.style.left = e.clientX + "px";
  cursor.style.top = e.clientY + "px";
});
document.querySelectorAll("a, button, .program-card, .pillar").forEach((el) => {
  el.addEventListener("mouseenter", () => cursor.classList.add("expand"));
  el.addEventListener("mouseleave", () => cursor.classList.remove("expand"));
});

/* ── SCROLL REVEAL ── */
const io = new IntersectionObserver(
  (entries) => {
    entries.forEach((e) => {
      if (e.isIntersecting) {
        e.target.classList.add("visible");
        io.unobserve(e.target);
      }
    });
  },
  { threshold: 0.1 },
);
document.querySelectorAll(".reveal").forEach((el) => io.observe(el));

/* ── HERO HEADING STAGGER ── */
document.querySelectorAll(".hero-heading .line span").forEach((el, i) => {
  el.style.transitionDelay = 0.85 + i * 0.1 + "s";
  el.classList.add("reveal", "visible");
});

/* ── HERO PARALLAX ── */
window.addEventListener(
  "scroll",
  () => {
    if (heroImg)
      heroImg.style.transform = `scale(1) translateY(${window.scrollY * 0.12}px)`;
  },
  { passive: true },
);

/* ── COUNTER ANIMATION ── */
const targets = [12, 38, 97];
const statEls = document.querySelectorAll(".stat-num");
const counterObserver = new IntersectionObserver(
  (entries) => {
    entries.forEach((e) => {
      if (e.isIntersecting) {
        statEls.forEach((el, i) => {
          const sup = el.querySelector("sup").cloneNode(true);
          el.textContent = "0";
          el.appendChild(sup);
          let val = 0;
          const step = targets[i] / 50;
          const timer = setInterval(() => {
            val = Math.min(val + step, targets[i]);
            el.childNodes[0].textContent = Math.floor(val);
            if (val >= targets[i]) clearInterval(timer);
          }, 28);
        });
        counterObserver.disconnect();
      }
    });
  },
  { threshold: 0.6 },
);
const statsEl = document.querySelector(".hero-stats");
if (statsEl) counterObserver.observe(statsEl);
