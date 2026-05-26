<!DOCTYPE html>
<html lang="id" data-theme="dark">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>✈️ Maskapai — Panduan Instalasi</title>
<link href="https://api.fontshare.com/v2/css?f[]=satoshi@400,500,700&f[]=cabinet-grotesk@400,500,700,800&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;700&display=swap" rel="stylesheet"/>
<style>
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
:root,[data-theme="dark"]{
  --color-bg:#0d0f14;
  --color-surface:#131720;
  --color-surface-2:#181d27;
  --color-surface-3:#1e2535;
  --color-border:#2a3347;
  --color-text:#e8eaf0;
  --color-text-muted:#8a94ab;
  --color-text-faint:#4a5470;
  --color-primary:#4f9cf9;
  --color-primary-glow:rgba(79,156,249,0.18);
  --color-accent:#a78bfa;
  --color-accent-glow:rgba(167,139,250,0.15);
  --color-success:#34d399;
  --color-success-glow:rgba(52,211,153,0.15);
  --color-warning:#fbbf24;
  --color-warning-glow:rgba(251,191,36,0.15);
  --color-error:#f87171;
  --color-orange:#fb923c;
  --font-display:'Cabinet Grotesk','Satoshi',sans-serif;
  --font-body:'Satoshi','Inter',sans-serif;
  --font-mono:'JetBrains Mono','Fira Code',monospace;
  --radius-sm:6px;--radius-md:10px;--radius-lg:16px;--radius-xl:24px;
  --space-1:4px;--space-2:8px;--space-3:12px;--space-4:16px;--space-5:20px;
  --space-6:24px;--space-8:32px;--space-10:40px;--space-12:48px;--space-16:64px;
}
[data-theme="light"]{
  --color-bg:#f5f7ff;
  --color-surface:#ffffff;
  --color-surface-2:#f0f4ff;
  --color-surface-3:#e8eeff;
  --color-border:#d4daf0;
  --color-text:#1a1e2e;
  --color-text-muted:#5a6480;
  --color-text-faint:#9aa0bc;
  --color-primary:#2563eb;
  --color-primary-glow:rgba(37,99,235,0.12);
  --color-accent:#7c3aed;
  --color-accent-glow:rgba(124,58,237,0.1);
  --color-success:#059669;
  --color-success-glow:rgba(5,150,105,0.1);
  --color-warning:#d97706;
  --color-warning-glow:rgba(217,119,6,0.1);
  --color-error:#dc2626;
  --color-orange:#ea580c;
  --color-border:#d4daf0;
}
html{scroll-behavior:smooth;-webkit-font-smoothing:antialiased}
body{
  background:var(--color-bg);
  color:var(--color-text);
  font-family:var(--font-body);
  font-size:clamp(0.95rem,1vw+0.5rem,1.05rem);
  line-height:1.7;
  min-height:100vh;
  overflow-x:hidden;
}

/* ─── ANIMATED BG ─── */
.bg-grid{
  position:fixed;inset:0;z-index:0;
  background-image:
    linear-gradient(rgba(79,156,249,0.03) 1px,transparent 1px),
    linear-gradient(90deg,rgba(79,156,249,0.03) 1px,transparent 1px);
  background-size:40px 40px;
  pointer-events:none;
}
.bg-orb{
  position:fixed;border-radius:50%;filter:blur(100px);
  pointer-events:none;z-index:0;animation:drift 12s ease-in-out infinite alternate;
}
.bg-orb-1{width:500px;height:500px;top:-100px;right:-100px;background:radial-gradient(circle,rgba(79,156,249,0.08),transparent 70%)}
.bg-orb-2{width:400px;height:400px;bottom:-80px;left:-80px;background:radial-gradient(circle,rgba(167,139,250,0.07),transparent 70%);animation-delay:-4s}
@keyframes drift{from{transform:translate(0,0) scale(1)}to{transform:translate(30px,20px) scale(1.05)}}

/* ─── CONTAINER ─── */
.wrap{max-width:800px;margin:0 auto;padding:var(--space-8) var(--space-6);position:relative;z-index:1}

/* ─── NAV ─── */
nav{
  display:flex;align-items:center;justify-content:space-between;
  padding:var(--space-3) var(--space-5);
  background:rgba(19,23,32,0.8);
  border:1px solid var(--color-border);
  border-radius:var(--radius-xl);
  backdrop-filter:blur(16px);
  margin-bottom:var(--space-12);
  position:sticky;top:var(--space-4);z-index:100;
}
[data-theme="light"] nav{background:rgba(255,255,255,0.85)}
.nav-brand{
  display:flex;align-items:center;gap:var(--space-3);
  font-family:var(--font-display);font-weight:800;font-size:1.1rem;
  color:var(--color-text);
}
.nav-brand svg{color:var(--color-primary)}
.nav-links{display:flex;gap:var(--space-2);align-items:center}
.nav-link{
  padding:var(--space-1) var(--space-3);
  font-size:0.85rem;font-weight:500;
  color:var(--color-text-muted);
  background:none;border:none;cursor:pointer;
  border-radius:var(--radius-md);
  transition:all 180ms cubic-bezier(.16,1,.3,1);
  text-decoration:none;
}
.nav-link:hover{color:var(--color-text);background:var(--color-surface-2)}
.btn-theme{
  width:36px;height:36px;display:flex;align-items:center;justify-content:center;
  border-radius:var(--radius-md);border:1px solid var(--color-border);
  background:var(--color-surface-2);color:var(--color-text-muted);
  cursor:pointer;transition:all 180ms cubic-bezier(.16,1,.3,1);
  font-size:16px;
}
.btn-theme:hover{color:var(--color-text);background:var(--color-surface-3)}

/* ─── HERO ─── */
.hero{
  text-align:center;
  padding:var(--space-10) 0 var(--space-12);
  animation:fadeSlideUp 0.7s cubic-bezier(.16,1,.3,1) both;
}
@keyframes fadeSlideUp{from{opacity:0;transform:translateY(24px)}to{opacity:1;transform:translateY(0)}}
.hero-badge{
  display:inline-flex;align-items:center;gap:var(--space-2);
  padding:var(--space-2) var(--space-4);
  background:var(--color-primary-glow);
  border:1px solid rgba(79,156,249,0.3);
  border-radius:var(--radius-full,9999px);
  color:var(--color-primary);
  font-size:0.8rem;font-weight:600;letter-spacing:0.05em;text-transform:uppercase;
  margin-bottom:var(--space-6);
}
.plane-icon{display:inline-block;animation:flyIn 1s cubic-bezier(.16,1,.3,1) 0.3s both}
@keyframes flyIn{from{opacity:0;transform:translateX(-40px) rotate(-15deg)}to{opacity:1;transform:translateX(0) rotate(0)}}
.hero h1{
  font-family:var(--font-display);font-size:clamp(2.2rem,5vw,3.5rem);font-weight:800;
  line-height:1.1;letter-spacing:-0.03em;margin-bottom:var(--space-4);
  background:linear-gradient(135deg,var(--color-text) 0%,var(--color-primary) 60%,var(--color-accent) 100%);
  -webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;
}
.hero p{
  color:var(--color-text-muted);font-size:1.05rem;max-width:56ch;margin:0 auto var(--space-8);
}
.hero-tags{display:flex;flex-wrap:wrap;gap:var(--space-2);justify-content:center}
.tag{
  padding:var(--space-1) var(--space-3);
  border-radius:var(--radius-full,9999px);
  font-size:0.78rem;font-weight:600;
  border:1px solid;
}
.tag-php{color:#8b9cff;border-color:rgba(139,156,255,0.3);background:rgba(139,156,255,0.08)}
.tag-laravel{color:#f87171;border-color:rgba(248,113,113,0.3);background:rgba(248,113,113,0.08)}
.tag-mysql{color:#34d399;border-color:rgba(52,211,153,0.3);background:rgba(52,211,153,0.08)}
.tag-laragon{color:#fbbf24;border-color:rgba(251,191,36,0.3);background:rgba(251,191,36,0.08)}

/* ─── SECTION ─── */
.section{margin-bottom:var(--space-10);animation:fadeIn 0.5s ease both}
@keyframes fadeIn{from{opacity:0}to{opacity:1}}
.section-header{
  display:flex;align-items:center;gap:var(--space-3);
  margin-bottom:var(--space-5);padding-bottom:var(--space-4);
  border-bottom:1px solid var(--color-border);
}
.section-icon{
  width:38px;height:38px;display:flex;align-items:center;justify-content:center;
  border-radius:var(--radius-md);font-size:18px;flex-shrink:0;
}
.icon-blue{background:var(--color-primary-glow);border:1px solid rgba(79,156,249,0.25)}
.icon-purple{background:var(--color-accent-glow);border:1px solid rgba(167,139,250,0.25)}
.icon-green{background:var(--color-success-glow);border:1px solid rgba(52,211,153,0.25)}
.icon-orange{background:var(--color-warning-glow);border:1px solid rgba(251,191,36,0.25)}
.section-title{
  font-family:var(--font-display);font-size:1.3rem;font-weight:700;
}
.section-desc{color:var(--color-text-muted);font-size:0.9rem}

/* ─── PREREQ CARDS ─── */
.prereq-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(180px,1fr));gap:var(--space-3)}
.prereq-card{
  padding:var(--space-4);
  background:var(--color-surface);
  border:1px solid var(--color-border);
  border-radius:var(--radius-lg);
  transition:all 250ms cubic-bezier(.16,1,.3,1);
  cursor:default;
}
.prereq-card:hover{
  background:var(--color-surface-2);
  border-color:var(--color-primary);
  box-shadow:0 0 0 1px var(--color-primary),0 8px 24px var(--color-primary-glow);
  transform:translateY(-2px);
}
.prereq-card-icon{font-size:22px;margin-bottom:var(--space-2)}
.prereq-card-title{font-weight:600;font-size:0.9rem;margin-bottom:var(--space-1)}
.prereq-card-desc{font-size:0.78rem;color:var(--color-text-muted)}
.status-dot{
  display:inline-block;width:7px;height:7px;
  border-radius:50%;margin-right:5px;
  animation:pulse-dot 2s ease infinite;
}
.dot-green{background:var(--color-success)}
.dot-blue{background:var(--color-primary)}
@keyframes pulse-dot{0%,100%{opacity:1}50%{opacity:0.4}}

/* ─── STEPS ─── */
.steps{display:flex;flex-direction:column;gap:var(--space-4)}
.step{
  display:grid;grid-template-columns:48px 1fr;gap:var(--space-4);
  background:var(--color-surface);
  border:1px solid var(--color-border);
  border-radius:var(--radius-lg);
  padding:var(--space-5);
  transition:all 250ms cubic-bezier(.16,1,.3,1);
  position:relative;overflow:hidden;
}
.step::before{
  content:'';position:absolute;inset:0;opacity:0;
  background:linear-gradient(135deg,var(--color-primary-glow),transparent 60%);
  transition:opacity 300ms ease;pointer-events:none;
}
.step:hover{border-color:rgba(79,156,249,0.5);transform:translateX(4px)}
.step:hover::before{opacity:1}
.step-num{
  width:40px;height:40px;border-radius:var(--radius-md);
  background:var(--color-primary-glow);
  border:1px solid rgba(79,156,249,0.3);
  color:var(--color-primary);
  font-family:var(--font-mono);font-weight:700;font-size:0.9rem;
  display:flex;align-items:center;justify-content:center;flex-shrink:0;
}
.step-body{}
.step-title{font-weight:700;font-family:var(--font-display);margin-bottom:var(--space-2);font-size:1rem}
.step-desc{font-size:0.88rem;color:var(--color-text-muted);margin-bottom:var(--space-3)}

/* ─── CODE BLOCK ─── */
.code-block{
  background:#090c12;
  border:1px solid var(--color-border);
  border-radius:var(--radius-md);
  overflow:hidden;
}
[data-theme="light"] .code-block{background:#1e2535;border-color:#2a3347}
.code-header{
  display:flex;align-items:center;justify-content:space-between;
  padding:var(--space-2) var(--space-4);
  background:rgba(255,255,255,0.03);
  border-bottom:1px solid var(--color-border);
}
.code-dots{display:flex;gap:6px}
.code-dot{width:10px;height:10px;border-radius:50%}
.dot-r{background:#f87171}.dot-y{background:#fbbf24}.dot-g{background:#34d399}
.code-lang{font-size:0.72rem;color:var(--color-text-faint);font-family:var(--font-mono);letter-spacing:0.08em;text-transform:uppercase}
.copy-btn{
  padding:var(--space-1) var(--space-2);
  background:none;border:1px solid var(--color-border);
  border-radius:var(--radius-sm);
  color:var(--color-text-faint);cursor:pointer;font-size:0.72rem;
  display:flex;align-items:center;gap:4px;
  transition:all 180ms ease;font-family:var(--font-body);
}
.copy-btn:hover{color:var(--color-primary);border-color:var(--color-primary)}
.copy-btn.copied{color:var(--color-success);border-color:var(--color-success)}
pre{
  padding:var(--space-4) var(--space-5);
  overflow-x:auto;
  font-family:var(--font-mono);
  font-size:0.85rem;line-height:1.7;
}
code{color:#c9d1d9}
.kw{color:#ff79c6}.fn{color:#8be9fd}.str{color:#f1fa8c}.cmt{color:#6272a4}.punc{color:#f8f8f2}
.cmd{color:#50fa7b}.flag{color:#ffb86c}.var{color:#bd93f9}

/* ─── ENV BLOCK ─── */
.env-table{
  background:#090c12;
  border:1px solid var(--color-border);
  border-radius:var(--radius-md);
  overflow:hidden;
  font-family:var(--font-mono);font-size:0.85rem;
}
[data-theme="light"] .env-table{background:#1e2535}
.env-row{
  display:grid;grid-template-columns:160px 1fr;
  border-bottom:1px solid rgba(42,51,71,0.6);
  transition:background 180ms ease;
}
.env-row:last-child{border-bottom:none}
.env-row:hover{background:rgba(79,156,249,0.05)}
.env-key{padding:var(--space-3) var(--space-4);color:#bd93f9;border-right:1px solid rgba(42,51,71,0.6)}
.env-val{padding:var(--space-3) var(--space-4);color:#f1fa8c}
.env-val.empty::after{content:'(kosong)';color:var(--color-text-faint);font-style:italic;font-size:0.78rem}

/* ─── INFO BOX ─── */
.info-box{
  display:flex;gap:var(--space-3);
  padding:var(--space-4);
  border-radius:var(--radius-md);
  border:1px solid;
  margin-top:var(--space-3);
  font-size:0.88rem;
}
.info-warn{background:var(--color-warning-glow);border-color:rgba(251,191,36,0.3);color:var(--color-text)}
.info-tip{background:var(--color-success-glow);border-color:rgba(52,211,153,0.3);color:var(--color-text)}
.info-icon{font-size:1rem;flex-shrink:0;margin-top:2px}

/* ─── LINK CARDS ─── */
.link-cards{display:grid;grid-template-columns:repeat(auto-fill,minmax(280px,1fr));gap:var(--space-3)}
.link-card{
  display:flex;align-items:center;gap:var(--space-3);
  padding:var(--space-4) var(--space-5);
  background:var(--color-surface);
  border:1px solid var(--color-border);
  border-radius:var(--radius-lg);
  text-decoration:none;color:var(--color-text);
  transition:all 250ms cubic-bezier(.16,1,.3,1);
  cursor:pointer;position:relative;overflow:hidden;
}
.link-card::after{
  content:'';position:absolute;inset:0;
  background:linear-gradient(135deg,var(--color-primary-glow),transparent);
  opacity:0;transition:opacity 300ms ease;
}
.link-card:hover{
  border-color:rgba(79,156,249,0.5);
  transform:translateY(-3px);
  box-shadow:0 12px 32px var(--color-primary-glow);
}
.link-card:hover::after{opacity:1}
.link-card-icon{font-size:22px;flex-shrink:0}
.link-card-info{}
.link-card-label{font-size:0.75rem;color:var(--color-text-faint);text-transform:uppercase;letter-spacing:0.07em;font-weight:600}
.link-card-url{font-family:var(--font-mono);font-size:0.88rem;color:var(--color-primary);font-weight:500}

/* ─── SUCCESS BANNER ─── */
.success-banner{
  padding:var(--space-8);
  background:linear-gradient(135deg,rgba(52,211,153,0.08),rgba(79,156,249,0.06));
  border:1px solid rgba(52,211,153,0.3);
  border-radius:var(--radius-xl);
  text-align:center;
  position:relative;overflow:hidden;
}
.success-banner::before{
  content:'';position:absolute;top:-50%;left:-50%;width:200%;height:200%;
  background:conic-gradient(transparent,rgba(52,211,153,0.03),transparent 30%);
  animation:spin-slow 8s linear infinite;
}
@keyframes spin-slow{to{transform:rotate(360deg)}}
.success-banner h2{
  font-family:var(--font-display);font-size:1.8rem;font-weight:800;
  background:linear-gradient(135deg,var(--color-success),var(--color-primary));
  -webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;
  margin:var(--space-4) 0 var(--space-2);
}
.success-banner p{color:var(--color-text-muted);font-size:0.92rem;max-width:50ch;margin:0 auto}
.check-icon{font-size:3rem;animation:bounce-in 0.6s cubic-bezier(.16,1,.3,1) both}
@keyframes bounce-in{0%{transform:scale(0)}60%{transform:scale(1.15)}100%{transform:scale(1)}}
.error-pills{display:flex;flex-wrap:wrap;gap:var(--space-2);justify-content:center;margin-top:var(--space-5)}
.error-pill{
  padding:4px 12px;border-radius:var(--radius-full,9999px);
  font-size:0.75rem;font-family:var(--font-mono);font-weight:500;
  background:rgba(248,113,113,0.1);border:1px solid rgba(248,113,113,0.25);
  color:var(--color-error);text-decoration:line-through;opacity:0.7;
}

/* ─── FOOTER ─── */
footer{
  text-align:center;padding:var(--space-8);
  color:var(--color-text-faint);font-size:0.82rem;
  border-top:1px solid var(--color-border);
  margin-top:var(--space-12);
}

/* ─── SCROLL REVEAL ─── */
.reveal{opacity:1}
@supports(animation-timeline:scroll()){
  .reveal{
    opacity:0;
    animation:reveal-fade linear both;
    animation-timeline:view();
    animation-range:entry 0% entry 80%;
  }
  @keyframes reveal-fade{to{opacity:1}}
}

/* ─── PROGRESS BAR ─── */
.progress-bar{
  position:fixed;top:0;left:0;height:2px;
  background:linear-gradient(90deg,var(--color-primary),var(--color-accent));
  z-index:999;transition:width 100ms linear;width:0;
  box-shadow:0 0 8px var(--color-primary-glow);
}

@media(max-width:600px){
  .prereq-grid{grid-template-columns:1fr 1fr}
  .link-cards{grid-template-columns:1fr}
  nav .nav-links a{display:none}
  .env-row{grid-template-columns:130px 1fr}
}
</style>
</head>
<body>
<div class="bg-grid"></div>
<div class="bg-orb bg-orb-1"></div>
<div class="bg-orb bg-orb-2"></div>
<div class="progress-bar" id="progress"></div>

<div class="wrap">
  <!-- NAV -->
  <nav>
    <div class="nav-brand">
      <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M17.8 19.2L16 11l3.5-3.5C21 6 21 4 19.5 2.5S18 1 16.5 2.5L13 6 4.8 4.2C4.3 4.1 3.8 4.4 3.6 4.9l-.3.8c-.2.5 0 1.1.4 1.4L10 11l-1 2.5L7 15l.5 2L10 16.5l2.5 3.5 1.5-.5.5 2h1.8c.5 0 .9-.3 1.1-.8l.4-.9c.1-.5-.1-1-.5-1.2z"/>
      </svg>
      Maskapai
    </div>
    <div class="nav-links">
      <a href="#prasyarat" class="nav-link">Prasyarat</a>
      <a href="#instalasi" class="nav-link">Instalasi</a>
      <a href="#pengujian" class="nav-link">Pengujian</a>
      <button class="btn-theme" data-theme-toggle aria-label="Toggle theme">🌙</button>
    </div>
  </nav>

  <!-- HERO -->
  <div class="hero">
    <div class="hero-badge">
      <span class="plane-icon">✈️</span>
      Panduan Instalasi Lokal
    </div>
    <h1>Aplikasi Maskapai</h1>
    <p>Setup project Laravel di local environment dengan Laragon. Ikutin langkahnya biar ga error-error aneh yang bikin pusing.</p>
    <div class="hero-tags">
      <span class="tag tag-laravel">Laravel</span>
      <span class="tag tag-php">PHP</span>
      <span class="tag tag-mysql">MySQL</span>
      <span class="tag tag-laragon">Laragon</span>
    </div>
  </div>

  <!-- PRASYARAT -->
  <div class="section reveal" id="prasyarat">
    <div class="section-header">
      <div class="section-icon icon-blue">📋</div>
      <div>
        <div class="section-title">Prasyarat</div>
        <div class="section-desc">Pastiin semua ini udah ready sebelum mulai</div>
      </div>
    </div>
    <div class="prereq-grid">
      <div class="prereq-card">
        <div class="prereq-card-icon">🏠</div>
        <div class="prereq-card-title">Laragon</div>
        <div class="prereq-card-desc"><span class="status-dot dot-green"></span>Apache: Started<br><span class="status-dot dot-green"></span>MySQL: Started</div>
      </div>
      <div class="prereq-card">
        <div class="prereq-card-icon">📦</div>
        <div class="prereq-card-title">Composer</div>
        <div class="prereq-card-desc"><span class="status-dot dot-blue"></span>Terinstall global<br><code style="font-size:0.75rem;color:var(--color-primary)">composer --version</code></div>
      </div>
      <div class="prereq-card">
        <div class="prereq-card-icon">🐘</div>
        <div class="prereq-card-title">PHP</div>
        <div class="prereq-card-desc"><span class="status-dot dot-blue"></span>Via Laragon<br>Versi 8.x+</div>
      </div>
      <div class="prereq-card">
        <div class="prereq-card-icon">📁</div>
        <div class="prereq-card-title">Folder Project</div>
        <div class="prereq-card-desc">Sudah diekstrak<br>di direktori Laragon</div>
      </div>
    </div>
  </div>

  <!-- INSTALASI -->
  <div class="section reveal" id="instalasi">
    <div class="section-header">
      <div class="section-icon icon-purple">🛠️</div>
      <div>
        <div class="section-title">Langkah Instalasi</div>
        <div class="section-desc">9 langkah, satu-satu, jangan diskip</div>
      </div>
    </div>
    <div class="steps">

      <!-- Step 1 -->
      <div class="step">
        <div class="step-num">01</div>
        <div class="step-body">
          <div class="step-title">Letakkan Folder Project</div>
          <div class="step-desc">Folder project harus berada di direktori www Laragon:</div>
          <div class="code-block">
            <div class="code-header">
              <div class="code-dots"><div class="code-dot dot-r"></div><div class="code-dot dot-y"></div><div class="code-dot dot-g"></div></div>
              <span class="code-lang">path</span>
              <button class="copy-btn" onclick="copyCode(this,'C:\\laragon\\www\\maskapai')">📋 Copy</button>
            </div>
            <pre><code><span class="var">C:\laragon\www\maskapai</span></code></pre>
          </div>
        </div>
      </div>

      <!-- Step 2 -->
      <div class="step">
        <div class="step-num">02</div>
        <div class="step-body">
          <div class="step-title">Buka Terminal / CMD</div>
          <div class="step-desc">Masuk ke folder project:</div>
          <div class="code-block">
            <div class="code-header">
              <div class="code-dots"><div class="code-dot dot-r"></div><div class="code-dot dot-y"></div><div class="code-dot dot-g"></div></div>
              <span class="code-lang">bash</span>
              <button class="copy-btn" onclick="copyCode(this,'cd C:\\laragon\\www\\maskapai')">📋 Copy</button>
            </div>
            <pre><code><span class="cmd">cd</span> <span class="str">C:\laragon\www\maskapai</span></code></pre>
          </div>
        </div>
      </div>

      <!-- Step 3 -->
      <div class="step">
        <div class="step-num">03</div>
        <div class="step-body">
          <div class="step-title">Install Dependency Laravel</div>
          <div class="step-desc">Buat ulang folder <code style="color:var(--color-accent);font-family:var(--font-mono);font-size:0.85em">vendor</code> dengan Composer:</div>
          <div class="code-block">
            <div class="code-header">
              <div class="code-dots"><div class="code-dot dot-r"></div><div class="code-dot dot-y"></div><div class="code-dot dot-g"></div></div>
              <span class="code-lang">bash</span>
              <button class="copy-btn" onclick="copyCode(this,'composer install')">📋 Copy</button>
            </div>
            <pre><code><span class="cmd">composer</span> <span class="flag">install</span></code></pre>
          </div>
          <div class="info-box info-warn"><span class="info-icon">⏳</span><span>Tunggu sampai selesai. Jangan ditutup tengah jalan terus bingung kenapa Laravel ngamuk 😹</span></div>
        </div>
      </div>

      <!-- Step 4 -->
      <div class="step">
        <div class="step-num">04</div>
        <div class="step-body">
          <div class="step-title">Setup File Environment</div>
          <div class="step-desc">Duplikat file <code style="color:var(--color-accent);font-family:var(--font-mono);font-size:0.85em">.env.example</code> menjadi <code style="color:var(--color-success);font-family:var(--font-mono);font-size:0.85em">.env</code></div>
          <div style="display:grid;grid-template-columns:1fr 1fr;gap:var(--space-3);margin-top:var(--space-2)">
            <div>
              <div style="font-size:0.75rem;color:var(--color-text-faint);margin-bottom:var(--space-2);font-weight:600;letter-spacing:0.05em;text-transform:uppercase">Git Bash / Laragon</div>
              <div class="code-block">
                <div class="code-header">
                  <div class="code-dots"><div class="code-dot dot-r"></div><div class="code-dot dot-y"></div><div class="code-dot dot-g"></div></div>
                  <span class="code-lang">bash</span>
                  <button class="copy-btn" onclick="copyCode(this,'cp .env.example .env')">📋</button>
                </div>
                <pre><code><span class="cmd">cp</span> .env.example .env</code></pre>
              </div>
            </div>
            <div>
              <div style="font-size:0.75rem;color:var(--color-text-faint);margin-bottom:var(--space-2);font-weight:600;letter-spacing:0.05em;text-transform:uppercase">CMD Windows</div>
              <div class="code-block">
                <div class="code-header">
                  <div class="code-dots"><div class="code-dot dot-r"></div><div class="code-dot dot-y"></div><div class="code-dot dot-g"></div></div>
                  <span class="code-lang">cmd</span>
                  <button class="copy-btn" onclick="copyCode(this,'copy .env.example .env')">📋</button>
                </div>
                <pre><code><span class="cmd">copy</span> .env.example .env</code></pre>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Step 5 -->
      <div class="step">
        <div class="step-num">05</div>
        <div class="step-body">
          <div class="step-title">Generate Application Key</div>
          <div class="step-desc">Buat application key unik untuk enkripsi Laravel:</div>
          <div class="code-block">
            <div class="code-header">
              <div class="code-dots"><div class="code-dot dot-r"></div><div class="code-dot dot-y"></div><div class="code-dot dot-g"></div></div>
              <span class="code-lang">artisan</span>
              <button class="copy-btn" onclick="copyCode(this,'php artisan key:generate')">📋 Copy</button>
            </div>
            <pre><code><span class="kw">php</span> <span class="fn">artisan</span> <span class="cmd">key:generate</span></code></pre>
          </div>
        </div>
      </div>

      <!-- Step 6 -->
      <div class="step">
        <div class="step-num">06</div>
        <div class="step-body">
          <div class="step-title">Konfigurasi Database</div>
          <div class="step-desc">Buka file <code style="color:var(--color-success);font-family:var(--font-mono);font-size:0.85em">.env</code>, ubah konfigurasi database menjadi:</div>
          <div class="env-table" style="margin-top:var(--space-3)">
            <div class="env-row"><div class="env-key">DB_CONNECTION</div><div class="env-val">mysql</div></div>
            <div class="env-row"><div class="env-key">DB_HOST</div><div class="env-val">127.0.0.1</div></div>
            <div class="env-row"><div class="env-key">DB_PORT</div><div class="env-val">3306</div></div>
            <div class="env-row"><div class="env-key">DB_DATABASE</div><div class="env-val" style="color:#34d399">db_penerbangan</div></div>
            <div class="env-row"><div class="env-key">DB_USERNAME</div><div class="env-val">root</div></div>
            <div class="env-row"><div class="env-key">DB_PASSWORD</div><div class="env-val empty"></div></div>
          </div>
        </div>
      </div>

      <!-- Step 7 -->
      <div class="step">
        <div class="step-num">07</div>
        <div class="step-body">
          <div class="step-title">Import Database SQL</div>
          <div class="step-desc">Buka phpMyAdmin dan import file SQL:</div>
          <ol style="list-style:none;display:flex;flex-direction:column;gap:var(--space-2);font-size:0.88rem;margin-top:var(--space-2)">
            <li style="display:flex;gap:var(--space-3);align-items:flex-start">
              <span style="background:var(--color-primary-glow);color:var(--color-primary);border:1px solid rgba(79,156,249,0.3);width:22px;height:22px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:0.72rem;font-weight:700;flex-shrink:0;margin-top:2px">1</span>
              <span>Buka browser → <code style="font-family:var(--font-mono);font-size:0.83em;color:var(--color-primary)">http://localhost/phpmyadmin</code></span>
            </li>
            <li style="display:flex;gap:var(--space-3);align-items:flex-start">
              <span style="background:var(--color-primary-glow);color:var(--color-primary);border:1px solid rgba(79,156,249,0.3);width:22px;height:22px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:0.72rem;font-weight:700;flex-shrink:0;margin-top:2px">2</span>
              <span>Buat database baru → <code style="font-family:var(--font-mono);font-size:0.83em;color:var(--color-success)">db_penerbangan</code></span>
            </li>
            <li style="display:flex;gap:var(--space-3);align-items:flex-start">
              <span style="background:var(--color-primary-glow);color:var(--color-primary);border:1px solid rgba(79,156,249,0.3);width:22px;height:22px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:0.72rem;font-weight:700;flex-shrink:0;margin-top:2px">3</span>
              <span>Masuk ke database → Tab <strong>Import</strong> → <strong>Choose File</strong></span>
            </li>
            <li style="display:flex;gap:var(--space-3);align-items:flex-start">
              <span style="background:var(--color-primary-glow);color:var(--color-primary);border:1px solid rgba(79,156,249,0.3);width:22px;height:22px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:0.72rem;font-weight:700;flex-shrink:0;margin-top:2px">4</span>
              <span>Pilih file:</span>
            </li>
          </ol>
          <div class="code-block" style="margin-top:var(--space-2)">
            <div class="code-header">
              <div class="code-dots"><div class="code-dot dot-r"></div><div class="code-dot dot-y"></div><div class="code-dot dot-g"></div></div>
              <span class="code-lang">path</span>
              <button class="copy-btn" onclick="copyCode(this,'C:\\laragon\\www\\maskapai\\maskapai.sql')">📋 Copy</button>
            </div>
            <pre><code><span class="var">C:\laragon\www\maskapai\maskapai.sql</span></code></pre>
          </div>
          <div class="info-box info-tip" style="margin-top:var(--space-3)"><span class="info-icon">💡</span><span>Klik tombol <strong>Import / Go</strong> dan tunggu. Karena ngetik query manual satu-satu itu kegiatan kaum dongo 🤓</span></div>
        </div>
      </div>

      <!-- Step 8 -->
      <div class="step">
        <div class="step-num">08</div>
        <div class="step-body">
          <div class="step-title">Clear Cache Laravel</div>
          <div class="step-desc">Bersihkan cache konfigurasi biar ga nyangkut config lama:</div>
          <div class="code-block">
            <div class="code-header">
              <div class="code-dots"><div class="code-dot dot-r"></div><div class="code-dot dot-y"></div><div class="code-dot dot-g"></div></div>
              <span class="code-lang">artisan</span>
              <button class="copy-btn" onclick="copyCode(this,'php artisan config:clear')">📋 Copy</button>
            </div>
            <pre><code><span class="kw">php</span> <span class="fn">artisan</span> <span class="cmd">config:clear</span></code></pre>
          </div>
        </div>
      </div>

      <!-- Step 9 -->
      <div class="step">
        <div class="step-num">09</div>
        <div class="step-body">
          <div class="step-title">Jalankan Development Server</div>
          <div class="step-desc">Start server Laravel di localhost:</div>
          <div class="code-block">
            <div class="code-header">
              <div class="code-dots"><div class="code-dot dot-r"></div><div class="code-dot dot-y"></div><div class="code-dot dot-g"></div></div>
              <span class="code-lang">artisan</span>
              <button class="copy-btn" onclick="copyCode(this,'php artisan serve')">📋 Copy</button>
            </div>
            <pre><code><span class="kw">php</span> <span class="fn">artisan</span> <span class="cmd">serve</span></code></pre>
          </div>
          <div class="info-box info-tip" style="margin-top:var(--space-3)"><span class="info-icon">🚀</span><span>Server berjalan di <code style="font-family:var(--font-mono);font-size:0.85em">http://127.0.0.1:8000</code> — buka di browser!</span></div>
        </div>
      </div>

    </div>
  </div>

  <!-- PENGUJIAN -->
  <div class="section reveal" id="pengujian">
    <div class="section-header">
      <div class="section-icon icon-green">🌐</div>
      <div>
        <div class="section-title">Link Pengujian</div>
        <div class="section-desc">Akses fitur-fitur aplikasi di sini</div>
      </div>
    </div>
    <div class="link-cards">
      <div class="link-card" onclick="navigator.clipboard.writeText('http://127.0.0.1:8000/pesawat').then(()=>{this.querySelector('.link-card-label').textContent='✅ Disalin!'}).catch(()=>{})">
        <div class="link-card-icon">✈️</div>
        <div class="link-card-info">
          <div class="link-card-label">CRUD Data Pesawat</div>
          <div class="link-card-url">127.0.0.1:8000/pesawat</div>
        </div>
      </div>
      <div class="link-card" onclick="navigator.clipboard.writeText('http://127.0.0.1:8000/laporan-penerbangan').then(()=>{this.querySelector('.link-card-label').textContent='✅ Disalin!'}).catch(()=>{})">
        <div class="link-card-icon">📋</div>
        <div class="link-card-info">
          <div class="link-card-label">Laporan Manifes Penerbangan</div>
          <div class="link-card-url">127.0.0.1:8000/laporan-penerbangan</div>
        </div>
      </div>
    </div>
  </div>

  <!-- SUCCESS BANNER -->
  <div class="success-banner reveal">
    <div class="check-icon">✅</div>
    <h2>Selesai, Gaess!</h2>
    <p>Kalau semua langkah dilakukan dengan benar, aplikasi sudah bisa dijalankan secara lokal tanpa drama.</p>
    <div class="error-pills">
      <span class="error-pill">vendor missing</span>
      <span class="error-pill">.env not found</span>
      <span class="error-pill">MySQL not started</span>
    </div>
  </div>

  <footer>
    Made with ❤️ for Polibatam TRPL &nbsp;·&nbsp; Maskapai v1.0 &nbsp;·&nbsp; Laravel + Laragon
  </footer>
</div>

<script>
// Theme toggle
(function(){
  const t=document.querySelector('[data-theme-toggle]');
  const r=document.documentElement;
  let d=r.getAttribute('data-theme')||'dark';
  t&&t.addEventListener('click',()=>{
    d=d==='dark'?'light':'dark';
    r.setAttribute('data-theme',d);
    t.innerHTML=d==='dark'?'🌙':'☀️';
  });
})();

// Progress bar
window.addEventListener('scroll',()=>{
  const doc=document.documentElement;
  const pct=(doc.scrollTop/(doc.scrollHeight-doc.clientHeight))*100;
  document.getElementById('progress').style.width=pct+'%';
});

// Copy code
function copyCode(btn, text) {
  navigator.clipboard.writeText(text).then(()=>{
    const orig=btn.innerHTML;
    btn.innerHTML='✅ Disalin!';
    btn.classList.add('copied');
    setTimeout(()=>{btn.innerHTML=orig;btn.classList.remove('copied')},2000);
  }).catch(()=>{
    btn.innerHTML='❌ Gagal';
    setTimeout(()=>{btn.innerHTML='📋 Copy'},2000);
  });
}
</script>
</body>
</html>
