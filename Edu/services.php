<?php
// skills-path.php
// Paste this file in your project (e.g. C:/xampp/htdocs/edu/skills-path.php)
// Make sure header.php and footer.php exist in your project and include FontAwesome & Bootstrap (your template already has them)
?>
<!DOCTYPE html>
<html lang="en">
<?php require_once('header.php') ?>

<style>
/* --- Simple, clean styling for the large Skills Path page --- */
#skills-banner {
  background: linear-gradient(90deg,#2b6df6 0%,#7b4ef5 100%);
  color:#fff; padding:48px 0; text-align:center;
}
.logo-box { display:inline-flex; align-items:center; gap:14px; }
.logo-svg { width:72px; height:72px; border-radius:8px; background:#b6e0ff; display:inline-flex; align-items:center; justify-content:center; }
.logo-title { font-size:28px; font-weight:800; letter-spacing:1px; color:#05204a; }
.container-wide { max-width:1200px; margin:0 auto; padding:30px 15px; }

/* Two-column layout */
.skills-layout { display:flex; gap:30px; align-items:flex-start; margin-top:30px; }
@media(max-width:991px){ .skills-layout { flex-direction:column; } }

/* left nav */
.skills-nav { width:260px; background:#fff; border-radius:10px; box-shadow:0 8px 24px rgba(15,20,30,0.06); padding:18px; position:sticky; top:20px; height:fit-content; }
.skills-nav a { display:block; padding:10px 12px; margin-bottom:8px; color:#223; text-decoration:none; border-radius:6px; }
.skills-nav a.active, .skills-nav a:hover { background:linear-gradient(90deg,#f0f8ff,#e9f2ff); color:#0b4bd8; box-shadow:0 6px 18px rgba(11,75,216,0.06); }

/* right content */
.skills-content { flex:1; background:transparent; }
.skill-section { background:#ffffff; padding:24px; border-radius:10px; box-shadow:0 8px 20px rgba(10,10,20,0.03); margin-bottom:18px; }
.skill-header { display:flex; gap:20px; align-items:center; }
.skill-header h2 { margin:0; font-size:22px; }
.skill-meta { color:#666; font-size:14px; margin-top:6px; }
.skill-columns { display:flex; gap:20px; margin-top:14px; }
@media(max-width:767px){ .skill-columns { flex-direction:column; } }
.skill-column { flex:1; }

/* badges & list */
.badge-skill { display:inline-block; padding:6px 10px; border-radius:999px; background:#eef6ff; color:#0b4bd8; font-weight:600; margin-right:6px; margin-bottom:8px; font-size:13px; }
.skill-list li { margin:8px 0; }

/* CTA row */
.cta-row { display:flex; gap:12px; margin-top:16px; align-items:center; }
.btn-primary { background:#0b4bd8; border-color:#0b4bd8; color:#fff; padding:8px 14px; border-radius:8px; }
.btn-ghost { background:transparent; border:1px solid #ddd; color:#333; padding:8px 12px; border-radius:8px; }

/* smooth anchor spacing */
.section-anchor { scroll-margin-top:100px; }

/* small helpers */
.small-muted { color:#666; font-size:14px; }
</style>

<body>

<!-- Banner with logo -->
<section id="skills-banner">
  <div class="container-wide">
    <div class="logo-box">
      <div class="logo-svg" aria-hidden="true">
        <!-- simple code icon SVG (blue terminal) -->
        <svg width="44" height="44" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect x="1" y="4" width="22" height="16" rx="2" fill="#0b4bd8"/>
          <path d="M7 9L9 11L7 13" stroke="#bfe1ff" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M11 15H17" stroke="#bfe1ff" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      <div>
        <div class="logo-title" style="color:#fff;">CSE ROADMAP</div>
        <div style="color:#dce9ff; font-weight:600; margin-top:6px;">Interactive Curriculum Guide</div>
      </div>
    </div>
  </div>
</section>

<!-- main container -->
<div class="container-wide">

  <!-- brief intro -->
  <div style="margin-top:26px; text-align:center;">
    <h1 style="font-size:30px; margin-bottom:8px;">Skills Path</h1>
    <p class="small-muted">Five specialization tracks — each track contains carefully ordered skills, suggested courses, mini-project ideas and a downloadable curriculum.</p>
  </div>

  <!-- two column layout: left nav + content -->
  <div class="skills-layout">

    <!-- LEFT NAV -->
    <nav class="skills-nav" id="skillsNav" aria-label="Skills navigation">
      <a href="#track-web" class="active" data-target="track-web">Web Development</a>
      <a href="#track-app" data-target="track-app">App Development</a>
      <a href="#track-ai" data-target="track-ai">AI & Machine Learning</a>
      <a href="#track-cyber" data-target="track-cyber">Cyber Security</a>
      <a href="#track-iot" data-target="track-iot">Robotics & IoT</a>
    </nav>

    <!-- RIGHT CONTENT -->
    <div class="skills-content">

      <!-- TRACK: WEB -->
      <section id="track-web" class="skill-section section-anchor">
        <div class="skill-header">
          <div style="font-size:36px; color:#0b4bd8; margin-right:12px;">
            <i class="fa fa-code" aria-hidden="true"></i>
          </div>
          <div>
            <h2>Web Development</h2>
            <div class="skill-meta">Frontend → Backend → Full-Stack. Build production-ready web apps and deploy.</div>
          </div>
        </div>

        <div class="skill-columns">
          <div class="skill-column">
            <div style="margin-top:10px;">
              <span class="badge-skill">HTML & CSS</span>
              <span class="badge-skill">JavaScript</span>
              <span class="badge-skill">React</span>
              <span class="badge-skill">Node.js</span>
            </div>

            <h4 style="margin-top:14px;">Core Topics</h4>
            <ul class="skill-list">
              <li>Semantic HTML, Responsive CSS, Flexbox & Grid</li>
              <li>Modern JavaScript (ES6+), DOM, Fetch / Async</li>
              <li>React / Vue basics, state management</li>
              <li>Backend with Node.js, Express, REST APIs</li>
              <li>Databases: MySQL, PostgreSQL, MongoDB</li>
              <li>Authentication, Authorization, JWT</li>
            </ul>

            <h4 style="margin-top:12px;">Mini Project Ideas</h4>
            <ul class="skill-list">
              <li>Personal Portfolio + Blog (React)</li>
              <li>E-commerce mini app with cart and orders</li>
              <li>CRUD Dashboard + API integration</li>
            </ul>
          </div>

          <div class="skill-column">
            <h4>Suggested Course Sequence</h4>
            <ol class="small-muted">
              <li>HTML & CSS Fundamentals → Build landing pages</li>
              <li>JavaScript Essentials → DOM & AJAX</li>
              <li>React/SPA → State & Routing</li>
              <li>Node.js & Databases → REST API</li>
              <li>Deployment → Docker + Netlify / Heroku / VPS</li>
            </ol>

            <div class="cta-row" style="margin-top:16px;">
              <a class="btn-primary" href="assets/curriculum/web.pdf" download>Download Curriculum</a>
<a class="btn-ghost" href="javascript:void(0)" onclick="toggleProjects('web-projects')">
    See Projects
</a>
            </div>

            <div style="margin-top:16px;">
              <strong>Resources:</strong>
              <ul class="skill-list small-muted">
                <li>MDN Web Docs, freeCodeCamp</li>
                <li>React docs, Node.js docs</li>
                <li>GitHub repo + Git basics</li>
              </ul>
            </div>
          </div>
        </div>
      </section>
<div id="web-projects" class="project-box" style="display:none;">
    <h3 style="margin-bottom:12px; color:#0b4bd8;">Web Development Projects</h3>
    <ul style="line-height:1.9; font-size:16px;">
    <li>Personal Portfolio Website</li>
    <li>React Blog Application</li>
    <li>E-commerce Site (Cart + Orders)</li>
    <li>CRUD Dashboard + API Integration</li>
    <li>Authentication System (JWT)</li>
  </ul>
</div>

      <!-- TRACK: APP -->
      <section id="track-app" class="skill-section section-anchor">
        <div class="skill-header">
          <div style="font-size:36px; color:#0b4bd8; margin-right:12px;">
            <i class="fa fa-mobile" aria-hidden="true"></i>
          </div>
          <div>
            <h2>App Development</h2>
            <div class="skill-meta">Build native & cross-platform mobile applications for real users.</div>
          </div>
        </div>

        <div class="skill-columns">
          <div class="skill-column">
            <div style="margin-top:10px;">
              <span class="badge-skill">Kotlin / Java</span>
              <span class="badge-skill">Flutter</span>
              <span class="badge-skill">Firebase</span>
            </div>

            <h4 style="margin-top:14px;">Core Topics</h4>
            <ul class="skill-list">
              <li>Mobile UI fundamentals, layouts & navigation</li>
              <li>State management (Provider / Bloc / Redux)</li>
              <li>Networking, REST API & local storage</li>
              <li>Push notifications & background tasks</li>
            </ul>

            <h4 style="margin-top:12px;">Mini Project Ideas</h4>
            <ul class="skill-list">
              <li>To-do app with cloud sync</li>
              <li>Weather app using public APIs</li>
              <li>Simple social feed with auth (Firebase)</li>
            </ul>
          </div>

          <div class="skill-column">
            <h4>Suggested Course Sequence</h4>
            <ol class="small-muted">
              <li>Mobile basics → Kotlin / Flutter intro</li>
              <li>State management & API integration</li>
              <li>Offline-first apps & local DB</li>
              <li>Publish to Play Store / App Store</li>
            </ol>

            <div class="cta-row" style="margin-top:16px;">
              <a class="btn-primary" href="assets/curriculum/app.pdf" download>Download Curriculum</a>
<a class="btn-ghost" href="javascript:void(0)" onclick="toggleProjects('app-projects')">
    See Projects
</a>            </div>

            <div style="margin-top:16px;">
              <strong>Resources:</strong>
              <ul class="skill-list small-muted">
                <li>Android docs, Flutter docs</li>
                <li>Firebase guides</li>
              </ul>
            </div>
          </div>
        </div>
      </section>
<div id="app-projects" class="project-box" style="display:none;">
    <h3 style="margin-bottom:12px; color:#0b4bd8;">Mobile App Development Projects</h3>
    <ul style="line-height:1.9; font-size:16px;">
    <li>Expense Tracker App</li>
    <li>React Blog Application</li>
    <li>Food Delivery UI Clone</li>
    <li>Chat App (Firebase Auth + Realtime DB)</li>
    <li>Notes App with Local Storage</li>
  </ul>
</div>
      <!-- TRACK: AI -->
         <section id="track-ai" class="skill-section section-anchor">
        <div class="skill-header">
          <div style="font-size:36px; color:#0b4bd8; margin-right:12px;">
            <i class="fa fa-brain" aria-hidden="true"></i>
          </div>
          <div>
            <h2>AI & Machine Learning</h2>
            <div class="skill-meta">From data cleaning to production ML systems.</div>
          </div>
        </div>

        <div class="skill-columns">
          <div class="skill-column">
            <div style="margin-top:10px;">
              <span class="badge-skill">Python</span>
              <span class="badge-skill">Pandas</span>
              <span class="badge-skill">TensorFlow</span>
            </div>

            <h4 style="margin-top:14px;">Core Topics</h4>
            <ul class="skill-list">
              <li>Data preprocessing, EDA & visualization</li>
              <li>Supervised & unsupervised learning</li>
              <li>Neural networks & deep learning</li>
              <li>Model deployment (Flask/Gunicorn/Docker)</li>
            </ul>

            <h4 style="margin-top:12px;">Mini Project Ideas</h4>
            <ul class="skill-list">
              <li>House price predictor</li>
              <li>Image classifier (CNN)</li>
              <li>Chatbot with basic NLP</li>
            </ul>
          </div>

          <div class="skill-column">
            <h4>Suggested Course Sequence</h4>
            <ol class="small-muted">
              <li>Python fundamentals → NumPy & Pandas</li>
              <li>Statistics & Probability basics</li>
              <li>ML models → Evaluation & tuning</li>
              <li>Deep Learning → Deployment</li>
            </ol>

            <div class="cta-row" style="margin-top:16px;">
              <a class="btn-primary" href="assets/curriculum/ai.pdf" download>Download Curriculum</a>
<a class="btn-ghost" href="javascript:void(0)" onclick="toggleProjects('ai-projects')">
    See Projects
</a>             </div>

            <div style="margin-top:16px;">
              <strong>Resources:</strong>
              <ul class="skill-list small-muted">
                <li>Kaggle, Scikit-learn docs, TensorFlow tutorials</li>
              </ul>
            </div>
          </div>
        </div>
      </section>
<div id="ai-projects" class="project-box" style="display:none;">
    <h3 style="margin-bottom:12px; color:#0b4bd8;">AI & Machine Learning Projects</h3>
    <ul style="line-height:1.9; font-size:16px;">
<li>Image Classification (CNN)</li>
    <li>Diabetes Prediction (ML Logistic Regression)</li>
    <li>Sentiment Analysis on Tweets</li>
    <li>Face Recognition System</li>
    <li>Chatbot using NLP</li>
  </ul>
</div>
      <!-- TRACK: CYBER -->
      <section id="track-cyber" class="skill-section section-anchor">
        <div class="skill-header">
          <div style="font-size:36px; color:#0b4bd8; margin-right:12px;">
            <i class="fa fa-shield-alt" aria-hidden="true"></i>
          </div>
          <div>
            <h2>Cyber Security</h2>
            <div class="skill-meta">Learn to identify and fix vulnerabilities.</div>
          </div>
        </div>

        <div class="skill-columns">
          <div class="skill-column">
            <div style="margin-top:10px;">
              <span class="badge-skill">Kali Linux</span>
              <span class="badge-skill">Networking</span>
              <span class="badge-skill">Pentesting</span>
            </div>

            <h4 style="margin-top:14px;">Core Topics</h4>
            <ul class="skill-list">
              <li>TCP/IP, common protocols, packet analysis</li>
              <li>Vulnerability scanning & exploitation basics</li>
              <li>Web app security (OWASP Top 10)</li>
              <li>Secure coding & cryptography basics</li>
            </ul>

            <h4 style="margin-top:12px;">Mini Project Ideas</h4>
            <ul class="skill-list">
              <li>Vuln assessment of a safe lab app</li>
              <li>Simple secure login & audit tool</li>
            </ul>
          </div>

          <div class="skill-column">
            <h4>Suggested Course Sequence</h4>
            <ol class="small-muted">
              <li>Networking basics → Linux basics</li>
              <li>Intro to Pentesting → Tools & labs</li>
              <li>Secure coding & defense techniques</li>
            </ol>

            <div class="cta-row" style="margin-top:16px;">
              <a class="btn-primary" href="assets/curriculum/cyber.pdf" download>Download Curriculum</a>
<a class="btn-ghost" href="javascript:void(0)" onclick="toggleProjects('cyber-projects')">
    See Projects
</a>            </div>

            <div style="margin-top:16px;">
              <strong>Resources:</strong>
              <ul class="skill-list small-muted">
                <li>OWASP, HacktheBox (labs)</li>
              </ul>
            </div>
          </div>
        </div>
      </section>
<div id="cyber-projects" class="project-box" style="display:none;">
    <h3 style="margin-bottom:12px; color:#0b4bd8;">Cyber Security Projects</h3>
    <ul style="line-height:1.9; font-size:16px;">
<li>Password Strength Analyzer</li>
    <li>Network Packet Sniffer (Python Scapy)</li>
    <li>Port Scanner Tool</li>
    <li>XSS Detection Demo</li>
    <li>Secure Login System + Encryption</li>
  </ul>
</div>
      <!-- TRACK: IOT -->
      <section id="track-iot" class="skill-section section-anchor">
        <div class="skill-header">
          <div style="font-size:36px; color:#0b4bd8; margin-right:12px;">
            <i class="fa fa-robot" aria-hidden="true"></i>
          </div>
          <div>
            <h2>Robotics & IoT</h2>
            <div class="skill-meta">Embedded systems, sensors & automation projects.</div>
          </div>
        </div>

        <div class="skill-columns">
          <div class="skill-column">
            <div style="margin-top:10px;">
              <span class="badge-skill">Arduino</span>
              <span class="badge-skill">ESP32</span>
              <span class="badge-skill">Sensors</span>
            </div>

            <h4 style="margin-top:14px;">Core Topics</h4>
            <ul class="skill-list">
              <li>Microcontrollers & interfacing</li>
              <li>Sensor reading & data logging</li>
              <li>Wireless & MQTT basics</li>
              <li>Edge computing & low-power design</li>
            </ul>

            <h4 style="margin-top:12px;">Mini Project Ideas</h4>
            <ul class="skill-list">
              <li>Weather station with ESP32</li>
              <li>Home automation prototype</li>
            </ul>
          </div>

          <div class="skill-column">
            <h4>Suggested Course Sequence</h4>
            <ol class="small-muted">
              <li>Electronics basics → Arduino programming</li>
              <li>Sensors & ADC → Communication protocols</li>
              <li>IoT cloud integration → Real-time dashboards</li>
            </ol>

            <div class="cta-row" style="margin-top:16px;">
              <a class="btn-primary" href="assets/curriculum/iot.pdf" download>Download Curriculum</a>
<a class="btn-ghost" href="javascript:void(0)" onclick="toggleProjects('iot-projects')">
    See Projects
</a>            </div>

            <div style="margin-top:16px;">
              <strong>Resources:</strong>
              <ul class="skill-list small-muted">
                <li>Arduino docs, ESP32 examples</li>
              </ul>
            </div>
          </div>
        </div>
      </section>
<!-- IOT PROJECT LIST (Expandable) -->
<div id="iot-projects" class="project-box" style="display:none;">
    <h3 style="margin-bottom:12px; color:#0b4bd8;">IoT Project List</h3>
    <ul style="line-height:1.9; font-size:16px;">
        <li>Smart Home Automation System (ESP32 + Relays)</li>
        <li>IoT Weather Station (DHT11/22 + ESP8266)</li>
        <li>Health Monitoring System (MAX30100 + DS18B20)</li>
        <li>Water Quality System (pH + Turbidity + ESP32)</li>
        <li>Smart Irrigation (Soil Sensor + ESP32)</li>
        <li>Gas Leakage Detection (MQ-2 + ESP8266)</li>
        <li>RFID Smart Lock (Servo + ESP32)</li>
        <li>MQTT Based IoT Dashboard</li>
    </ul>
</div>

    </div><!-- end skills-content -->
	

  </div><!-- end layout -->
</div><!-- end container-wide -->

<script>
  // smooth highlight nav & open fragment targets
  document.querySelectorAll('.skills-nav a').forEach(a=>{
    a.addEventListener('click', function(e){
      document.querySelectorAll('.skills-nav a').forEach(x=>x.classList.remove('active'));
      this.classList.add('active');
    });
  });

  // open anchor if hash present on load
  window.addEventListener('load', ()=>{
    if(location.hash){
      const id = location.hash.substring(1);
      const el = document.getElementById(id);
      if(el) el.scrollIntoView({behavior:'smooth', block:'start'});
    }
  });
</script>

<?php require_once('footer.php') ?>
<script>
function toggleProjects(id) {
    var box = document.getElementById(id);
    if (box.style.display === "none") {
        box.style.display = "block";
        box.scrollIntoView({ behavior: "smooth" });
    } else {
        box.style.display = "none";
    }
}
</script>

</body>
</html>
