<!doctype html>
<html lang="en-AU">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
<title>The One Person Bottleneck — ACS Consulting</title>
<meta name="description" content="A confidential operational risk assessment for Perth business owners whose companies depend on one indispensable person. Find the bottleneck before it breaks the business." />
<meta name="theme-color" content="#1E3663" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,300;0,9..144,400;0,9..144,500;0,9..144,600;0,9..144,700;1,9..144,300;1,9..144,400;1,9..144,500&family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<style>
/* ============================================================
   ACS CONSULTING · THE ONE PERSON BOTTLENECK
   Executive Editorial · Navy · Crimson · White Paper
   ============================================================ */

:root{
  /* Brand-aligned palette */
  --ink:        #0E1A35;
  --navy:       #1E3663;
  --navy-soft:  #2B4276;
  --navy-mist:  #EEF1F8;

  --crimson:    #C8282C;
  --crimson-deep: #9B1D20;
  --crimson-mist: #FBEBEB;

  --paper:      #FFFFFF;
  --bone:       #F7F4EE;
  --bone-deep:  #EFEAE0;
  --rule:       #E6E1D6;
  --rule-soft:  #F0EDE5;

  --text:       #1B1717;
  --text-soft:  #4A4A4A;
  --mute:       #7B7773;
  --gold:       #B08A3E;

  /* Typography */
  --serif:  "Fraunces", "Times New Roman", Georgia, serif;
  --sans:   "Montserrat", -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif;

  /* Layout */
  --max:    1280px;
  --gutter: clamp(20px, 4vw, 56px);
  --radius: 4px;

  /* Easing */
  --ease:   cubic-bezier(.22,.61,.36,1);
  --ease-emp: cubic-bezier(.6,.05,.05,1);
}

*{box-sizing:border-box;margin:0;padding:0;}
html{scroll-behavior:smooth;-webkit-text-size-adjust:100%;}
body{
  font-family:var(--sans);
  font-size:17px;
  line-height:1.65;
  color:var(--text);
  background:var(--paper);
  font-weight:400;
  -webkit-font-smoothing:antialiased;
  text-rendering:optimizeLegibility;
  overflow-x:hidden;
}
img{max-width:100%;display:block;}
a{color:inherit;text-decoration:none;}
button{font-family:inherit;cursor:pointer;border:0;background:none;color:inherit;}
input,textarea,select{font-family:inherit;font-size:inherit;color:inherit;}

/* ───── Editorial typography ───── */
.eyebrow{
  font-family:var(--sans);
  font-weight:600;
  font-size:11px;
  letter-spacing:.22em;
  text-transform:uppercase;
  color:var(--crimson);
  display:inline-flex;
  align-items:center;
  gap:.6em;
}
.eyebrow::before{
  content:"";
  width:28px;height:1px;background:var(--crimson);
  display:inline-block;
}
.eyebrow.muted{color:var(--mute);}
.eyebrow.muted::before{background:var(--mute);}

h1,h2,h3,h4{
  font-family:var(--serif);
  font-weight:400;
  letter-spacing:-.015em;
  color:var(--ink);
  line-height:1.05;
  font-variation-settings:"opsz" 144;
}
.display{
  font-size:clamp(44px, 6.6vw, 96px);
  font-weight:300;
  letter-spacing:-.025em;
  line-height:.98;
}
.h2{
  font-size:clamp(34px, 4.4vw, 64px);
  font-weight:400;
  line-height:1.04;
  letter-spacing:-.02em;
}
.h3{
  font-size:clamp(24px, 2.6vw, 36px);
  font-weight:500;
  line-height:1.15;
  letter-spacing:-.01em;
}
.h4{
  font-size:clamp(18px, 1.4vw, 22px);
  font-weight:500;
  line-height:1.3;
  letter-spacing:-.005em;
}
em.it,.italic{font-style:italic;}
.serif{font-family:var(--serif);}

p{margin-bottom:1.1em;}
p.lead{
  font-size:clamp(18px, 1.5vw, 22px);
  line-height:1.55;
  color:var(--text-soft);
  font-weight:400;
}
p.lead.serif{
  font-family:var(--serif);
  font-weight:300;
  line-height:1.4;
  color:var(--ink);
  font-style:italic;
}

/* ───── Layout helpers ───── */
.wrap{
  width:100%;
  max-width:var(--max);
  margin:0 auto;
  padding:0 var(--gutter);
}
.wrap-narrow{max-width:880px;margin:0 auto;padding:0 var(--gutter);}
.section{padding:clamp(80px, 10vw, 160px) 0;position:relative;}
.section-tight{padding:clamp(60px, 7vw, 100px) 0;}
.split{
  display:grid;
  grid-template-columns:1fr 1fr;
  gap:clamp(40px, 6vw, 96px);
  align-items:center;
}
@media (max-width:880px){
  .split{grid-template-columns:1fr;gap:48px;}
}

/* ───── Buttons ───── */
.btn{
  display:inline-flex;
  align-items:center;
  justify-content:center;
  gap:10px;
  padding:18px 32px;
  font-family:var(--sans);
  font-weight:600;
  font-size:13px;
  letter-spacing:.14em;
  text-transform:uppercase;
  border-radius:var(--radius);
  transition:all .35s var(--ease);
  position:relative;
  overflow:hidden;
  white-space:nowrap;
  cursor:pointer;
  border:1px solid transparent;
}
.btn-primary{
  background:var(--crimson);
  color:#fff;
}
.btn-primary:hover{
  background:var(--crimson-deep);
  transform:translateY(-2px);
  box-shadow:0 18px 36px -16px rgba(155,29,32,.55);
}
.btn-ghost{
  background:transparent;
  color:var(--ink);
  border-color:var(--ink);
}
.btn-ghost:hover{
  background:var(--ink);
  color:#fff;
  transform:translateY(-2px);
}
.btn-light{
  background:#fff;
  color:var(--ink);
  border-color:var(--rule);
}
.btn-light:hover{
  border-color:var(--ink);
  transform:translateY(-2px);
}
.btn-arrow{
  display:inline-flex;
  align-items:center;
  gap:.6em;
  font-weight:500;
  letter-spacing:.04em;
  font-size:14px;
  color:var(--crimson);
  border-bottom:1px solid currentColor;
  padding-bottom:4px;
  transition:gap .25s var(--ease);
}
.btn-arrow:hover{gap:1.1em;}
.btn-arrow svg{width:14px;height:14px;}

/* ───── NAV ───── */
.nav{
  position:fixed;
  top:0;left:0;right:0;
  z-index:90;
  padding:18px var(--gutter);
  display:flex;
  align-items:center;
  justify-content:space-between;
  background:rgba(255,255,255,.85);
  backdrop-filter:blur(20px) saturate(1.2);
  -webkit-backdrop-filter:blur(20px) saturate(1.2);
  border-bottom:1px solid transparent;
  transition:all .35s var(--ease);
}
.nav.scrolled{
  background:rgba(255,255,255,.95);
  border-bottom-color:var(--rule);
  padding:12px var(--gutter);
}
.brand{
  display:flex;
  align-items:center;
  gap:12px;
  font-family:var(--sans);
  font-weight:700;
  font-size:13px;
  letter-spacing:.18em;
  text-transform:uppercase;
  color:var(--ink);
}
.brand .mark{
  width:34px;height:34px;
  background:var(--ink);
  color:#fff;
  display:grid;
  place-items:center;
  font-family:var(--serif);
  font-weight:600;
  font-style:italic;
  font-size:18px;
  letter-spacing:0;
  border-radius:2px;
  position:relative;
}
.brand .mark::after{
  content:"";
  position:absolute;
  top:6px;right:5px;
  width:6px;height:6px;border-radius:50%;
  background:var(--crimson);
}
.brand .name span{color:var(--mute);font-weight:500;letter-spacing:.14em;}
.nav-cta{
  font-size:12px;
  letter-spacing:.16em;
  font-weight:600;
  text-transform:uppercase;
  padding:11px 22px;
  border-radius:2px;
  background:var(--crimson);
  color:#fff;
  transition:all .3s var(--ease);
}
.nav-cta:hover{background:var(--crimson-deep);}

/* ───── HERO ───── */
.hero{
  padding-top:140px;
  padding-bottom:0;
  position:relative;
  overflow:hidden;
}
.hero::before{
  content:"";
  position:absolute;
  top:0;left:0;right:0;height:140px;
  background:linear-gradient(to bottom, var(--bone) 0%, transparent 100%);
  opacity:.4;
}
.hero-grid{
  display:grid;
  grid-template-columns:1.1fr .95fr;
  gap:clamp(40px, 6vw, 96px);
  align-items:end;
  position:relative;
}
@media (max-width:980px){.hero-grid{grid-template-columns:1fr;}}

.hero-meta{
  display:flex;
  align-items:center;
  gap:24px;
  font-family:var(--sans);
  font-size:11px;
  font-weight:500;
  letter-spacing:.22em;
  text-transform:uppercase;
  color:var(--mute);
  margin-bottom:42px;
}
.hero-meta .dot{width:6px;height:6px;border-radius:50%;background:var(--crimson);}
.hero-meta time{color:var(--crimson);}

.hero h1{
  margin-bottom:36px;
}
.hero h1 .softline{
  display:block;
  font-style:italic;
  font-weight:300;
  color:var(--text-soft);
  font-size:.45em;
  letter-spacing:.02em;
  line-height:1.4;
  margin-bottom:24px;
}
.hero h1 .crimson{color:var(--crimson);}
.hero h1 .underlined{
  position:relative;
  display:inline-block;
  isolation:isolate;
}
.hero h1 .underlined::after{
  content:"";
  position:absolute;
  left:-.04em;right:-.04em;bottom:.04em;
  height:.22em;
  background:var(--crimson);
  opacity:.22;
  z-index:-1;
  transform:skewX(-8deg);
}

.hero-lede{
  max-width:520px;
  font-size:18px;
  line-height:1.6;
  color:var(--text-soft);
  margin-bottom:44px;
}
.hero-cta{
  display:flex;
  flex-wrap:wrap;
  gap:16px;
  margin-bottom:48px;
}
.hero-trust{
  display:flex;
  align-items:center;
  gap:18px;
  padding-top:28px;
  border-top:1px solid var(--rule);
  font-size:13px;
  color:var(--mute);
  letter-spacing:.02em;
}
.hero-trust strong{color:var(--ink);font-weight:600;}
.hero-trust .stars{display:inline-flex;gap:2px;color:var(--crimson);}

/* Hero image stage */
.hero-stage{
  position:relative;
  aspect-ratio: 4/5;
}
.hero-stage .stage-clip{
  position:absolute;
  inset:0;
  border-radius:2px;
  overflow:hidden;
  background:linear-gradient(135deg, #2B4276 0%, #0E1A35 100%);
}
.hero-stage .stage-clip img{
  position:absolute;inset:0;
  width:100%;height:100%;
  object-fit:cover;
  filter:saturate(.9) contrast(1.05);
}
.hero-stage .stage-clip::after{
  content:"";
  position:absolute;inset:0;
  background:
    linear-gradient(180deg, rgba(14,26,53,0) 30%, rgba(14,26,53,.55) 100%),
    linear-gradient(115deg, rgba(200,40,44,.0) 60%, rgba(200,40,44,.18) 100%);
}
.hero-stage .stage-tag{
  position:absolute;
  top:24px;left:24px;
  display:inline-flex;
  align-items:center;
  gap:10px;
  padding:8px 14px;
  background:rgba(255,255,255,.92);
  backdrop-filter:blur(10px);
  border-radius:2px;
  font-size:11px;
  letter-spacing:.18em;
  text-transform:uppercase;
  font-weight:600;
  color:var(--ink);
  z-index:2;
}
.hero-stage .stage-tag .pulse{
  width:8px;height:8px;border-radius:50%;
  background:var(--crimson);
  position:relative;
}
.hero-stage .stage-tag .pulse::before{
  content:"";position:absolute;inset:-3px;
  border-radius:50%;border:1.5px solid var(--crimson);
  animation:ping 2s infinite;
}
@keyframes ping{0%{transform:scale(1);opacity:.8;}100%{transform:scale(2.2);opacity:0;}}

.hero-stage .name-card{
  position:absolute;
  bottom:24px;left:24px;right:24px;
  z-index:2;
  color:#fff;
}
.hero-stage .name-card .label{
  font-size:11px;
  letter-spacing:.22em;
  text-transform:uppercase;
  opacity:.7;
  margin-bottom:8px;
}
.hero-stage .name-card .quote{
  font-family:var(--serif);
  font-style:italic;
  font-weight:300;
  font-size:clamp(20px, 2vw, 26px);
  line-height:1.25;
  letter-spacing:-.01em;
}

/* Floating numerical accent */
.hero-stage .float-stat{
  position:absolute;
  bottom:-30px; left:-30px;
  z-index:3;
  background:#fff;
  padding:22px 28px;
  border:1px solid var(--rule);
  box-shadow:0 24px 60px -22px rgba(14,26,53,.18);
  display:flex;
  flex-direction:column;
  gap:4px;
  min-width:240px;
  max-width:280px;
}
@media (max-width:980px){
  .hero-stage .float-stat{bottom:-20px;left:16px;}
}
@media (max-width:480px){
  .hero-stage .float-stat{
    position:static;
    margin-top:16px;
    max-width:none;
  }
}
.hero-stage .float-stat .num{
  font-family:var(--serif);
  font-weight:300;
  font-size:48px;
  letter-spacing:-.03em;
  line-height:1;
  color:var(--ink);
}
.hero-stage .float-stat .num em{
  color:var(--crimson);
  font-style:italic;
  font-weight:400;
}
.hero-stage .float-stat .lab{
  font-size:11px;
  letter-spacing:.16em;
  text-transform:uppercase;
  font-weight:600;
  color:var(--mute);
}

/* Hero ticker bar */
.hero-ticker{
  margin-top:96px;
  border-top:1px solid var(--rule);
  border-bottom:1px solid var(--rule);
  background:var(--bone);
  overflow:hidden;
}
.ticker-track{
  display:flex;
  gap:64px;
  padding:18px 0;
  animation:tick 38s linear infinite;
  white-space:nowrap;
  width:max-content;
}
.ticker-track span{
  display:inline-flex;
  align-items:center;
  gap:14px;
  font-size:12px;
  letter-spacing:.2em;
  text-transform:uppercase;
  font-weight:500;
  color:var(--text-soft);
}
.ticker-track span::before{
  content:"●";
  color:var(--crimson);
  font-size:8px;
}
@keyframes tick{from{transform:translateX(0);}to{transform:translateX(-50%);}}

/* ───── Editorial section: 7:12 AM ───── */
.morning{
  background:var(--paper);
  position:relative;
}
.morning .wrap-narrow{position:relative;}
.morning-time{
  font-family:var(--serif);
  font-weight:300;
  font-style:italic;
  font-size:clamp(60px, 11vw, 156px);
  line-height:1;
  letter-spacing:-.03em;
  color:var(--bone-deep);
  position:absolute;
  top:-50px;left:0;
  z-index:0;
  user-select:none;
  pointer-events:none;
}
.morning .text-col{position:relative;z-index:1;}
.morning .text-col .label{
  font-size:11px;
  letter-spacing:.22em;
  text-transform:uppercase;
  font-weight:600;
  color:var(--crimson);
  margin-bottom:24px;
}
.morning h2{margin-bottom:32px;}
.morning .quotes{
  margin:48px 0;
  border-left:2px solid var(--crimson);
  padding-left:32px;
  display:flex;flex-direction:column;
  gap:18px;
}
.morning .quotes blockquote{
  font-family:var(--serif);
  font-weight:300;
  font-style:italic;
  font-size:clamp(20px, 2.2vw, 28px);
  line-height:1.35;
  color:var(--ink);
  letter-spacing:-.005em;
  position:relative;
}
.morning .quotes blockquote::before{
  content:"";
  position:absolute;
  left:-33px;top:.8em;
  width:8px;height:8px;
  background:var(--crimson);
  border-radius:50%;
}
.morning .punch{
  margin-top:48px;
  font-family:var(--serif);
  font-size:clamp(24px, 2.7vw, 34px);
  font-weight:400;
  line-height:1.3;
  color:var(--ink);
  letter-spacing:-.01em;
}
.morning .punch strong{color:var(--crimson);font-style:italic;font-weight:500;}

/* ───── Pain section ───── */
.pain{
  background:var(--bone);
  position:relative;
}
.pain::before{
  content:"";
  position:absolute;left:0;right:0;top:0;height:1px;
  background:linear-gradient(90deg,transparent,var(--rule),transparent);
}
.pain-grid{
  display:grid;
  grid-template-columns:1fr 1fr;
  gap:clamp(40px,6vw,96px);
  align-items:start;
}
@media (max-width:880px){.pain-grid{grid-template-columns:1fr;}}

.pain-list{
  display:grid;
  gap:1px;
  background:var(--rule);
  border:1px solid var(--rule);
  margin-top:48px;
}
.pain-list li{
  list-style:none;
  background:#fff;
  padding:28px 32px;
  display:flex;
  align-items:flex-start;
  gap:24px;
  font-size:16px;
  line-height:1.5;
  transition:all .3s var(--ease);
  cursor:default;
}
.pain-list li:hover{
  background:var(--crimson-mist);
  padding-left:38px;
}
.pain-list li .num{
  font-family:var(--serif);
  font-weight:400;
  font-size:14px;
  font-style:italic;
  color:var(--crimson);
  letter-spacing:.04em;
  flex-shrink:0;
  width:32px;
}

.aside-card{
  background:#fff;
  border:1px solid var(--rule);
  padding:48px;
  position:relative;
}
.aside-card .stat-label{
  font-size:11px;letter-spacing:.22em;text-transform:uppercase;
  font-weight:600;color:var(--mute);
}
.aside-card .stat-num{
  font-family:var(--serif);
  font-weight:300;
  font-size:clamp(72px, 10vw, 140px);
  line-height:.9;
  letter-spacing:-.04em;
  color:var(--ink);
  margin:16px 0 12px;
}
.aside-card .stat-num em{color:var(--crimson);font-style:italic;font-weight:400;}
.aside-card .stat-meta{
  font-size:13px;
  color:var(--text-soft);
  line-height:1.5;
  padding-top:24px;
  border-top:1px solid var(--rule);
  margin-top:8px;
}
.aside-card .img-frame{
  margin-top:32px;
  aspect-ratio: 16/10;
  background:linear-gradient(135deg,#1E3663,#0E1A35);
  position:relative;
  overflow:hidden;
}
.aside-card .img-frame img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;}

/* ───── Resignation story section ───── */
.story{
  position:relative;
  background:#fff;
  padding-top:clamp(100px,12vw,180px);
  padding-bottom:clamp(100px,12vw,180px);
  overflow:hidden;
}
.story::before{
  content:"";
  position:absolute;
  top:80px; right:-220px;
  width:520px;height:520px;
  background:radial-gradient(circle, var(--crimson-mist) 0%, transparent 70%);
  z-index:0;
  pointer-events:none;
}
.story .wrap{position:relative;z-index:1;}
.story-head{
  max-width:760px;
  margin-bottom:80px;
}
.story-head .eyebrow{margin-bottom:24px;}
.story-frame{
  display:grid;
  grid-template-columns:1.05fr .95fr;
  gap:clamp(40px,6vw,96px);
  align-items:start;
}
@media (max-width:880px){.story-frame{grid-template-columns:1fr;}}

.story-img{
  position:relative;
  aspect-ratio:5/6;
  overflow:hidden;
  background:linear-gradient(160deg,#2B4276,#0E1A35);
  border-radius:2px;
}
.story-img img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;filter:contrast(1.05) saturate(.9);}
.story-img::after{
  content:"";
  position:absolute;inset:0;
  background:linear-gradient(190deg, transparent 50%, rgba(14,26,53,.55) 100%);
}
.story-img .caption{
  position:absolute;
  bottom:24px;left:24px;right:24px;
  z-index:2;
  color:#fff;
}
.story-img .caption .tag{
  display:inline-block;
  background:rgba(255,255,255,.18);
  backdrop-filter:blur(8px);
  padding:6px 12px;
  font-size:10px;
  letter-spacing:.2em;
  text-transform:uppercase;
  font-weight:600;
  margin-bottom:14px;
}
.story-img .caption .quote{
  font-family:var(--serif);
  font-style:italic;
  font-weight:300;
  font-size:clamp(20px,2vw,26px);
  line-height:1.3;
  letter-spacing:-.01em;
}

.story-body p{font-size:17px;line-height:1.65;color:var(--text-soft);}
.story-body h3{margin-bottom:24px;}
.story-body .checklist{
  margin:32px 0;
  list-style:none;
  display:grid;
  gap:14px;
}
.story-body .checklist li{
  font-family:var(--serif);
  font-weight:400;
  font-size:18px;
  line-height:1.45;
  color:var(--ink);
  padding-left:32px;
  position:relative;
}
.story-body .checklist li::before{
  content:"✕";
  position:absolute;
  left:0;top:0;
  font-family:var(--sans);
  font-weight:600;
  color:var(--crimson);
  font-size:14px;
  width:20px;height:20px;
  border:1.5px solid var(--crimson);
  border-radius:50%;
  display:grid;
  place-items:center;
  font-size:10px;
}
.story-body .gut-quote{
  font-family:var(--serif);
  font-style:italic;
  font-weight:400;
  font-size:clamp(22px,2.4vw,30px);
  line-height:1.35;
  color:var(--crimson-deep);
  margin:36px 0;
  letter-spacing:-.005em;
  border-left:2px solid var(--crimson);
  padding-left:24px;
}

/* ───── Cost grid ───── */
.cost{
  background:var(--ink);
  color:#fff;
  position:relative;
  overflow:hidden;
}
.cost::before{
  content:"";
  position:absolute;
  top:0;left:0;right:0;bottom:0;
  background-image:
    radial-gradient(circle at 80% 20%, rgba(200,40,44,.15) 0%, transparent 40%),
    radial-gradient(circle at 20% 80%, rgba(43,66,118,.4) 0%, transparent 50%);
  pointer-events:none;
}
.cost::after{
  content:"";
  position:absolute;
  inset:0;
  background-image:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='200' height='200'><filter id='n'><feTurbulence type='fractalNoise' baseFrequency='.9' numOctaves='2'/><feColorMatrix values='0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 .035 0'/></filter><rect width='100%' height='100%' filter='url(%23n)'/></svg>");
  opacity:.6;
  mix-blend-mode:overlay;
  pointer-events:none;
}
.cost .wrap{position:relative;z-index:1;}
.cost h2{color:#fff;}
.cost .eyebrow{color:#FBC8C9;}
.cost .eyebrow::before{background:#FBC8C9;}

.cost-head{max-width:760px;margin-bottom:72px;}
.cost-head p.lead{color:rgba(255,255,255,.75);}

.cost-grid{
  display:grid;
  grid-template-columns:repeat(2,1fr);
  gap:1px;
  background:rgba(255,255,255,.1);
  border:1px solid rgba(255,255,255,.1);
}
@media (max-width:760px){.cost-grid{grid-template-columns:1fr;}}

.cost-card{
  padding:48px 40px;
  background:var(--ink);
  position:relative;
  transition:all .4s var(--ease);
  cursor:default;
  overflow:hidden;
}
.cost-card:hover{background:#0a1428;}
.cost-card .num{
  font-family:var(--serif);
  font-weight:300;
  font-style:italic;
  font-size:14px;
  color:var(--crimson);
  letter-spacing:.04em;
  margin-bottom:18px;
  display:block;
}
.cost-card h3{
  color:#fff;
  font-size:28px;
  margin-bottom:16px;
  font-weight:400;
  letter-spacing:-.01em;
}
.cost-card p{
  color:rgba(255,255,255,.7);
  font-size:15px;
  line-height:1.6;
  margin:0;
}
.cost-card .icon-line{
  position:absolute;
  top:48px;right:40px;
  width:36px;height:36px;
  border:1px solid rgba(255,255,255,.18);
  border-radius:50%;
  display:grid;
  place-items:center;
  color:rgba(255,255,255,.5);
  transition:all .3s var(--ease);
}
.cost-card:hover .icon-line{border-color:var(--crimson);color:var(--crimson);transform:rotate(45deg);}

.cost-cta{
  margin-top:80px;
  display:flex;
  flex-direction:column;
  align-items:center;
  text-align:center;
  gap:24px;
}
.cost-cta .gut{
  font-family:var(--serif);
  font-weight:300;
  font-style:italic;
  font-size:clamp(24px,2.6vw,32px);
  color:#fff;
  max-width:660px;
  line-height:1.3;
  letter-spacing:-.005em;
}
.cost-cta .gut strong{color:var(--crimson);font-weight:400;}

/* ───── Assessment section ───── */
.assessment{
  background:var(--bone);
  position:relative;
  padding:clamp(80px,10vw,140px) 0 clamp(120px,14vw,200px);
}
.assessment-head{
  max-width:780px;
  margin:0 auto;
  text-align:center;
  margin-bottom:64px;
}
.assessment-head h2{margin:24px 0 24px;}

.qz{
  max-width:880px;
  margin:0 auto;
  background:#fff;
  border:1px solid var(--rule);
  border-radius:4px;
  box-shadow:
    0 1px 0 rgba(14,26,53,.04),
    0 30px 80px -30px rgba(14,26,53,.18);
  position:relative;
  overflow:hidden;
}
.qz-top{
  display:flex;
  align-items:center;
  justify-content:space-between;
  padding:20px 36px;
  background:var(--ink);
  color:#fff;
}
.qz-top .qz-tag{
  font-family:var(--sans);
  font-size:11px;
  letter-spacing:.22em;
  text-transform:uppercase;
  font-weight:600;
  display:inline-flex;
  align-items:center;
  gap:10px;
}
.qz-top .qz-tag .pulse{
  width:8px;height:8px;border-radius:50%;
  background:var(--crimson);position:relative;
}
.qz-top .qz-tag .pulse::before{
  content:"";position:absolute;inset:-3px;
  border-radius:50%;border:1.5px solid var(--crimson);
  animation:ping 2s infinite;
}
.qz-step-counter{
  font-family:var(--serif);
  font-style:italic;
  font-weight:300;
  font-size:14px;
  color:rgba(255,255,255,.7);
}
.qz-step-counter strong{
  color:#fff;font-weight:500;font-size:18px;font-style:normal;
  font-family:var(--sans);
  letter-spacing:.02em;
}

.qz-progress{
  height:3px;
  background:rgba(255,255,255,.12);
  position:relative;
  overflow:hidden;
}
.qz-progress-bar{
  position:absolute;
  top:0;left:0;bottom:0;
  width:0%;
  background:var(--crimson);
  transition:width .55s var(--ease);
}

.qz-stage{
  padding:clamp(40px,5vw,72px);
  min-height:480px;
  display:flex;
  flex-direction:column;
  position:relative;
}
.qz-panel{
  display:none;
  flex-direction:column;
  gap:24px;
  animation:panel-in .55s var(--ease) both;
}
.qz-panel.active{display:flex;}
@keyframes panel-in{
  from{opacity:0;transform:translateY(14px);}
  to{opacity:1;transform:translateY(0);}
}

/* Intro panel */
.qz-intro h3{
  font-size:clamp(28px,3.4vw,42px);
  margin-bottom:18px;
}
.qz-intro p.lead{font-size:17px;color:var(--text-soft);}
.qz-intro .meta-row{
  display:flex;
  flex-wrap:wrap;
  gap:24px;
  padding-top:24px;
  border-top:1px solid var(--rule);
  margin-top:16px;
}
.qz-intro .meta-row .meta-item{
  display:flex;align-items:center;gap:10px;
  font-size:13px;color:var(--text-soft);
}
.qz-intro .meta-row .meta-item svg{
  width:18px;height:18px;color:var(--crimson);flex-shrink:0;
}

/* Question panel */
.qz-question .q-num{
  display:inline-block;
  font-family:var(--serif);
  font-style:italic;
  font-weight:300;
  font-size:14px;
  color:var(--crimson);
  letter-spacing:.06em;
}
.qz-question h4{
  font-size:clamp(22px,2.6vw,30px);
  font-weight:500;
  line-height:1.3;
  letter-spacing:-.01em;
  color:var(--ink);
  margin-bottom:8px;
}
.qz-question .q-sub{
  font-size:14px;
  color:var(--mute);
  margin-bottom:16px;
}
.qz-options{
  display:flex;
  flex-direction:column;
  gap:10px;
  margin-top:8px;
}
.qz-option{
  display:flex;
  align-items:flex-start;
  gap:16px;
  padding:18px 22px;
  border:1px solid var(--rule);
  background:#fff;
  border-radius:3px;
  text-align:left;
  font-size:15px;
  line-height:1.45;
  color:var(--text);
  cursor:pointer;
  transition:all .25s var(--ease);
  position:relative;
}
.qz-option:hover{
  border-color:var(--ink);
  background:var(--bone);
  transform:translateX(4px);
}
.qz-option .marker{
  width:20px;height:20px;
  border:1.5px solid var(--rule);
  border-radius:50%;
  flex-shrink:0;
  transition:all .25s var(--ease);
  margin-top:2px;
  position:relative;
}
.qz-option:hover .marker{border-color:var(--ink);}
.qz-option.selected{
  border-color:var(--crimson);
  background:var(--crimson-mist);
}
.qz-option.selected .marker{
  border-color:var(--crimson);
  background:var(--crimson);
}
.qz-option.selected .marker::after{
  content:"";
  position:absolute;
  inset:4px;
  background:#fff;
  border-radius:50%;
}

/* Form panel */
.qz-form h3{
  font-size:clamp(26px,3.2vw,38px);
  margin-bottom:8px;
}
.qz-form .form-lede{
  color:var(--text-soft);
  font-size:16px;
  margin-bottom:8px;
}
.qz-form .form-grid{
  display:grid;
  grid-template-columns:1fr 1fr;
  gap:20px 24px;
  margin-top:16px;
}
@media (max-width:640px){.qz-form .form-grid{grid-template-columns:1fr;}}
.qz-form .field{display:flex;flex-direction:column;gap:6px;}
.qz-form .field.full{grid-column:1/-1;}
.qz-form label{
  font-size:11px;
  letter-spacing:.18em;
  text-transform:uppercase;
  font-weight:600;
  color:var(--mute);
}
.qz-form label .req{color:var(--crimson);}
.qz-form input{
  border:0;
  border-bottom:1.5px solid var(--rule);
  padding:10px 0;
  font-size:16px;
  background:transparent;
  outline:none;
  color:var(--ink);
  transition:border-color .25s var(--ease);
}
.qz-form input:focus{border-bottom-color:var(--crimson);}
.qz-form .privacy{
  font-size:12px;
  color:var(--mute);
  display:flex;
  align-items:flex-start;
  gap:10px;
  padding-top:18px;
  border-top:1px solid var(--rule);
  margin-top:12px;
  line-height:1.5;
}
.qz-form .privacy svg{
  flex-shrink:0;
  width:14px;height:14px;
  color:var(--crimson);
  margin-top:2px;
}

/* Loader panel */
.qz-loading{
  align-items:center;
  text-align:center;
  justify-content:center;
  min-height:480px;
}
.qz-loading h3{
  font-size:clamp(26px,3vw,36px);
  margin-bottom:12px;
}
.qz-loading p.lead{
  color:var(--text-soft);
  margin-bottom:36px;
  font-size:15px;
}
.qz-loading .ring{
  width:64px;height:64px;
  border-radius:50%;
  border:2px solid var(--rule);
  border-top-color:var(--crimson);
  animation:spin 1s linear infinite;
  margin-bottom:36px;
}
@keyframes spin{to{transform:rotate(360deg);}}
.qz-loading .steps{
  list-style:none;
  display:flex;
  flex-direction:column;
  gap:10px;
  text-align:left;
  max-width:380px;
  margin:0 auto;
}
.qz-loading .steps li{
  display:flex;
  align-items:center;
  gap:14px;
  font-size:14px;
  color:var(--mute);
  transition:color .3s var(--ease);
}
.qz-loading .steps li.done{color:var(--ink);}
.qz-loading .steps li .check{
  width:18px;height:18px;
  border:1.5px solid var(--rule);
  border-radius:50%;
  display:grid;place-items:center;
  flex-shrink:0;
  font-size:10px;
  color:transparent;
  transition:all .3s var(--ease);
}
.qz-loading .steps li.done .check{
  background:var(--crimson);
  border-color:var(--crimson);
  color:#fff;
}

/* Result panel */
.qz-result{padding:0;}
.result-head{
  background:var(--ink);
  color:#fff;
  padding:48px;
  text-align:center;
  position:relative;
  overflow:hidden;
}
.result-head::before{
  content:"";
  position:absolute;inset:0;
  background-image:
    radial-gradient(circle at 50% 0%, rgba(200,40,44,.25) 0%, transparent 60%);
  pointer-events:none;
}
.result-head .label{
  font-size:11px;letter-spacing:.22em;text-transform:uppercase;font-weight:600;
  color:#FBC8C9;margin-bottom:12px;
  position:relative;z-index:1;
}
.result-head h3{
  color:#fff;
  font-family:var(--serif);
  font-weight:300;
  font-style:italic;
  font-size:clamp(36px,4.5vw,56px);
  letter-spacing:-.02em;
  margin-bottom:0;
  position:relative;z-index:1;
}
.result-head h3 .level{font-style:normal;font-weight:500;}
.result-head .scoreline{
  margin-top:28px;
  display:flex;align-items:center;justify-content:center;gap:16px;
  position:relative;z-index:1;
}

/* Score gauge */
.gauge{
  position:relative;
  width:220px;height:120px;
  margin:24px auto 0;
}
.gauge svg{width:100%;height:100%;overflow:visible;}
.gauge .track{stroke:rgba(255,255,255,.15);stroke-width:14;fill:none;stroke-linecap:round;}
.gauge .progress{
  stroke:var(--crimson);
  stroke-width:14;
  fill:none;
  stroke-linecap:round;
  stroke-dasharray:283;
  stroke-dashoffset:283;
  transition:stroke-dashoffset 1.4s var(--ease-emp);
}
.gauge .gnum{
  position:absolute;
  bottom:8px;left:0;right:0;
  text-align:center;
  font-family:var(--serif);
  font-weight:300;
  font-size:46px;
  color:#fff;
  line-height:1;
  letter-spacing:-.02em;
}
.gauge .gnum em{color:var(--crimson);font-style:normal;font-weight:500;font-family:var(--sans);font-size:18px;letter-spacing:.04em;}

.result-body{
  padding:48px;
  display:grid;
  grid-template-columns:1fr 1fr;
  gap:36px 48px;
}
@media (max-width:760px){.result-body{grid-template-columns:1fr;padding:36px;}}
.result-body h4{
  font-family:var(--serif);
  font-weight:400;
  font-size:22px;
  margin-bottom:8px;
  color:var(--ink);
}
.result-body p{font-size:15px;line-height:1.6;color:var(--text-soft);}
.result-body .impact-list{
  list-style:none;
  display:flex;flex-direction:column;
  gap:12px;
}
.result-body .impact-list li{
  font-size:14px;
  line-height:1.5;
  padding-left:22px;
  position:relative;
  color:var(--text-soft);
}
.result-body .impact-list li::before{
  content:"";
  position:absolute;
  left:0;top:.55em;
  width:8px;height:1.5px;
  background:var(--crimson);
}

.result-cta{
  padding:0 48px 48px;
  display:flex;flex-wrap:wrap;gap:16px;
  align-items:center;
  border-top:1px solid var(--rule);
  padding-top:36px;
  margin:0 48px;
}
@media (max-width:760px){.result-cta{padding:24px 36px 36px;margin:0;}}
.result-cta .secondary{
  font-size:13px;
  color:var(--mute);
  margin-left:auto;
}
@media (max-width:760px){.result-cta .secondary{margin-left:0;}}
.result-cta .secondary strong{color:var(--ink);}

/* Quiz nav buttons */
.qz-nav{
  display:flex;
  justify-content:space-between;
  align-items:center;
  padding:24px 36px;
  border-top:1px solid var(--rule);
  background:#fdfcf9;
}
.qz-nav .back{
  font-size:13px;
  color:var(--mute);
  letter-spacing:.04em;
  display:inline-flex;align-items:center;gap:8px;
  transition:color .25s var(--ease);
}
.qz-nav .back:hover{color:var(--ink);}
.qz-nav .back[disabled]{opacity:0;pointer-events:none;}
.qz-nav .next{
  background:var(--crimson);
  color:#fff;
  padding:14px 28px;
  font-size:12px;
  letter-spacing:.18em;
  text-transform:uppercase;
  font-weight:600;
  border-radius:2px;
  transition:all .3s var(--ease);
  display:inline-flex;align-items:center;gap:10px;
}
.qz-nav .next:hover:not([disabled]){background:var(--crimson-deep);transform:translateX(2px);}
.qz-nav .next[disabled]{opacity:.35;cursor:not-allowed;}

/* ───── Solution ───── */
.solution{
  padding:clamp(100px,12vw,180px) 0;
  background:#fff;
  position:relative;
  overflow:hidden;
}
.solution-head{
  display:grid;
  grid-template-columns:1fr 1fr;
  gap:clamp(40px,6vw,96px);
  align-items:end;
  margin-bottom:80px;
}
@media (max-width:880px){.solution-head{grid-template-columns:1fr;}}
.solution-head .right p{font-size:18px;line-height:1.6;color:var(--text-soft);}
.solution-head h2 .strike{
  text-decoration:line-through;
  text-decoration-color:var(--crimson);
  text-decoration-thickness:3px;
  color:var(--mute);
  font-style:italic;
}

.sol-grid{
  display:grid;
  grid-template-columns:repeat(3,1fr);
  gap:1px;
  background:var(--rule);
  border:1px solid var(--rule);
}
@media (max-width:880px){.sol-grid{grid-template-columns:1fr;}}
.sol-card{
  background:#fff;
  padding:42px 36px;
  display:flex;
  flex-direction:column;
  gap:18px;
  transition:all .35s var(--ease);
  position:relative;
}
.sol-card:hover{background:var(--bone);}
.sol-card .icon-w{
  width:44px;height:44px;
  border:1px solid var(--ink);
  display:grid;
  place-items:center;
  color:var(--ink);
  transition:all .35s var(--ease);
}
.sol-card:hover .icon-w{
  background:var(--ink);
  color:#fff;
  transform:rotate(-4deg);
}
.sol-card h4{font-size:20px;font-weight:500;line-height:1.25;}
.sol-card p{font-size:14px;color:var(--text-soft);line-height:1.55;margin:0;}

.sol-visual{
  margin-top:80px;
  display:grid;
  grid-template-columns:1fr 1fr 1fr;
  gap:24px;
  align-items:center;
}
@media (max-width:880px){.sol-visual{grid-template-columns:1fr;}}
.sol-visual .img-cell{
  aspect-ratio:4/5;
  position:relative;
  overflow:hidden;
  border-radius:2px;
  background:linear-gradient(160deg,#1E3663,#0E1A35);
}
.sol-visual .img-cell img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;}
.sol-visual .img-cell:nth-child(2){
  aspect-ratio:4/5;
  transform:scale(1.06);
}
.sol-visual .img-cell .layer{
  position:absolute;inset:0;
  background:linear-gradient(180deg,transparent 50%,rgba(14,26,53,.5));
}
.sol-visual .img-cell .label{
  position:absolute;
  bottom:18px;left:20px;right:20px;
  z-index:2;
  color:#fff;
  font-size:13px;
  font-weight:500;
  letter-spacing:.04em;
}
.sol-visual .img-cell .label span{
  display:block;
  font-size:10px;
  letter-spacing:.22em;
  text-transform:uppercase;
  opacity:.7;margin-bottom:4px;
}

/* ───── Trust band ───── */
.trust{
  background:var(--bone);
  padding:clamp(60px,7vw,100px) 0;
  border-top:1px solid var(--rule);
  border-bottom:1px solid var(--rule);
}
.trust-grid{
  display:grid;
  grid-template-columns:1.4fr 1fr;
  gap:64px;
  align-items:center;
}
@media (max-width:880px){.trust-grid{grid-template-columns:1fr;}}
.trust-stats{
  display:grid;
  grid-template-columns:repeat(3,1fr);
  gap:48px;
  margin-top:24px;
}
@media (max-width:560px){.trust-stats{grid-template-columns:repeat(2,1fr);gap:32px;}}
.trust-stats .stat .n{
  font-family:var(--serif);
  font-weight:300;
  font-size:48px;
  letter-spacing:-.02em;
  line-height:1;
  color:var(--ink);
}
.trust-stats .stat .n em{color:var(--crimson);font-style:italic;font-weight:400;}
.trust-stats .stat .l{
  font-size:11px;
  letter-spacing:.18em;
  text-transform:uppercase;
  font-weight:600;
  color:var(--mute);
  margin-top:8px;
  line-height:1.4;
}

.trust-img{
  aspect-ratio:5/4;
  position:relative;
  overflow:hidden;
  background:linear-gradient(135deg,#1E3663,#0E1A35);
  border-radius:2px;
}
.trust-img img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;}

/* ───── Testimonial / pull-quote ───── */
.tlquote{
  padding:clamp(80px,10vw,140px) 0;
  background:#fff;
}
.tlquote-card{
  max-width:880px;
  margin:0 auto;
  text-align:center;
}
.tlquote-card .quote-mark{
  font-family:var(--serif);
  font-style:italic;
  font-weight:300;
  font-size:120px;
  line-height:1;
  color:var(--crimson);
  margin-bottom:-20px;
}
.tlquote-card blockquote{
  font-family:var(--serif);
  font-weight:300;
  font-size:clamp(26px,3.4vw,44px);
  line-height:1.3;
  letter-spacing:-.015em;
  color:var(--ink);
  font-style:italic;
}
.tlquote-card blockquote em{color:var(--crimson);font-style:italic;font-weight:500;}
.tlquote-card .attribution{
  margin-top:36px;
  display:inline-flex;
  align-items:center;
  gap:14px;
  padding-top:24px;
  border-top:1px solid var(--rule);
}
.tlquote-card .attribution .av{
  width:48px;height:48px;border-radius:50%;
  background:linear-gradient(135deg,#1E3663,#0E1A35);
  color:#fff;display:grid;place-items:center;
  font-family:var(--serif);font-weight:500;font-size:18px;
}
.tlquote-card .attribution .meta{
  text-align:left;font-size:13px;
}
.tlquote-card .attribution .meta strong{color:var(--ink);font-weight:600;}
.tlquote-card .attribution .meta span{color:var(--mute);}

/* ───── Final CTA / close ───── */
.close{
  background:var(--ink);
  color:#fff;
  padding:clamp(100px,12vw,180px) 0;
  position:relative;
  overflow:hidden;
}
.close::before{
  content:"";
  position:absolute;
  top:-200px;right:-200px;
  width:700px;height:700px;
  background:radial-gradient(circle, rgba(200,40,44,.25) 0%, transparent 60%);
  pointer-events:none;
}
.close::after{
  content:"";
  position:absolute;
  bottom:-300px;left:-200px;
  width:700px;height:700px;
  background:radial-gradient(circle, rgba(43,66,118,.5) 0%, transparent 60%);
  pointer-events:none;
}
.close .wrap{position:relative;z-index:1;}
.close-grid{
  display:grid;
  grid-template-columns:1.2fr 1fr;
  gap:80px;
  align-items:end;
}
@media (max-width:880px){.close-grid{grid-template-columns:1fr;}}
.close h2{color:#fff;margin-bottom:32px;}
.close .subline{
  color:rgba(255,255,255,.7);
  font-size:18px;
  line-height:1.6;
  margin-bottom:48px;
  max-width:540px;
}
.close .em-list{
  list-style:none;
  display:flex;
  flex-direction:column;
  gap:12px;
  margin-bottom:48px;
}
.close .em-list li{
  font-family:var(--serif);
  font-style:italic;
  font-weight:300;
  font-size:clamp(20px,2vw,26px);
  color:rgba(255,255,255,.85);
  line-height:1.3;
  padding-left:32px;
  position:relative;
}
.close .em-list li::before{
  content:"";
  position:absolute;
  left:0;top:.6em;
  width:18px;height:1px;
  background:var(--crimson);
}
.close-cta{display:flex;flex-wrap:wrap;gap:16px;}
.close-cta .btn-primary{padding:20px 36px;}
.close-cta .btn-light-on-dark{
  background:transparent;
  color:#fff;
  border:1px solid rgba(255,255,255,.3);
  padding:20px 36px;
}
.close-cta .btn-light-on-dark:hover{
  background:#fff;
  color:var(--ink);
  border-color:#fff;
}

.close-card{
  background:rgba(255,255,255,.04);
  border:1px solid rgba(255,255,255,.1);
  padding:36px;
  position:relative;
  backdrop-filter:blur(12px);
}
.close-card .meta{
  font-size:11px;letter-spacing:.22em;text-transform:uppercase;font-weight:600;
  color:#FBC8C9;margin-bottom:16px;
}
.close-card h4{
  color:#fff;
  font-family:var(--serif);
  font-style:italic;
  font-weight:300;
  font-size:24px;
  line-height:1.3;
  margin-bottom:24px;
}
.close-card .info-row{
  display:flex;
  align-items:center;
  gap:14px;
  padding:16px 0;
  border-top:1px solid rgba(255,255,255,.1);
  font-size:14px;
  color:rgba(255,255,255,.75);
}
.close-card .info-row:last-child{border-bottom:1px solid rgba(255,255,255,.1);}
.close-card .info-row svg{
  width:18px;height:18px;color:var(--crimson);flex-shrink:0;
}

/* ───── Footer ───── */
footer{
  background:#0a1428;
  color:rgba(255,255,255,.6);
  padding:48px 0 32px;
  font-size:13px;
}
footer .wrap{display:flex;align-items:center;justify-content:space-between;gap:24px;flex-wrap:wrap;}
footer .brand{color:#fff;}
footer .brand .mark{background:#fff;color:var(--ink);}
footer .legal{display:flex;gap:24px;flex-wrap:wrap;}
footer a:hover{color:#fff;}

/* ───── Sticky CTA bar (mobile) ───── */
.sticky-cta{
  position:fixed;
  bottom:0;left:0;right:0;
  z-index:80;
  padding:14px 18px;
  background:var(--ink);
  color:#fff;
  display:none;
  align-items:center;
  gap:12px;
  border-top:2px solid var(--crimson);
  transform:translateY(100%);
  transition:transform .4s var(--ease);
}
.sticky-cta.show{transform:translateY(0);}
.sticky-cta .label{font-size:13px;line-height:1.3;flex:1;}
.sticky-cta .label strong{display:block;font-weight:600;}
.sticky-cta .label span{font-size:11px;color:rgba(255,255,255,.6);}
.sticky-cta a{
  background:var(--crimson);
  padding:12px 18px;
  font-size:11px;letter-spacing:.18em;text-transform:uppercase;
  font-weight:600;border-radius:2px;
  white-space:nowrap;
}
@media (max-width:680px){.sticky-cta{display:flex;}}

/* ───── Reveal-on-scroll ───── */
.reveal{
  opacity:0;
  transform:translateY(28px);
  transition:opacity .8s var(--ease), transform .8s var(--ease);
}
.reveal.in{opacity:1;transform:translateY(0);}
.reveal-d2{transition-delay:.12s;}
.reveal-d3{transition-delay:.24s;}
.reveal-d4{transition-delay:.36s;}

/* ───── Image placeholders ───── */
.ph{
  background:linear-gradient(135deg,#1E3663,#0E1A35);
  position:relative;
}
.ph::before{
  content:attr(data-label);
  position:absolute;
  inset:0;
  display:grid;place-items:center;
  font-family:var(--serif);font-style:italic;font-weight:300;
  color:rgba(255,255,255,.35);
  font-size:14px;
  letter-spacing:.04em;
  padding:24px;
  text-align:center;
}

/* ───── Selection ───── */
::selection{background:var(--crimson);color:#fff;}


</style>
</head>
<body>

<!-- ═══════════════ NAV ═══════════════ -->
<header class="nav" id="nav">
  <a href="#" class="brand">
    <span class="mark">A</span>
    <span class="name">ACS <span>CONSULTING</span></span>
  </a>
  <a href="#assessment" class="nav-cta">Take The Assessment</a>
</header>

<!-- ═══════════════ HERO ═══════════════ -->
<section class="hero">
  <div class="wrap">
    <div class="hero-grid">

      <!-- LEFT -->
      <div class="hero-text">
        <div class="hero-meta reveal">
          <span class="dot"></span>
          <span>A Confidential Briefing for Perth Business Owners</span>
        </div>

        <h1 class="display reveal">
          <span class="softline">It's 7:12&nbsp;AM. Your phone won't stop vibrating.</span>
          The day your business
          <span class="underlined">stops</span>
          working,
          <em class="it" style="font-weight:400;color:var(--crimson)">one&nbsp;person</em>
          wasn't there.
        </h1>

        <p class="hero-lede reveal reveal-d2">
          You didn't lose a client. You didn't lose a deal. You lost the one human
          inside your company who quietly knew everything &mdash; and now
          your team, your projects, and your peace of mind are all on hold.
        </p>

        <div class="hero-cta reveal reveal-d3">
          <a href="#assessment" class="btn btn-primary">
            Find your bottleneck
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M5 12h14M13 5l7 7-7 7"/></svg>
          </a>
          <a href="#solution" class="btn btn-ghost">How we fix it</a>
        </div>

        <div class="hero-trust reveal reveal-d4">
          <span class="stars">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3 7h7l-5.5 4.5L18 21l-6-4-6 4 1.5-7.5L2 9h7z"/></svg>
            <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3 7h7l-5.5 4.5L18 21l-6-4-6 4 1.5-7.5L2 9h7z"/></svg>
            <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3 7h7l-5.5 4.5L18 21l-6-4-6 4 1.5-7.5L2 9h7z"/></svg>
            <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3 7h7l-5.5 4.5L18 21l-6-4-6 4 1.5-7.5L2 9h7z"/></svg>
            <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3 7h7l-5.5 4.5L18 21l-6-4-6 4 1.5-7.5L2 9h7z"/></svg>
          </span>
          <span><strong>Trusted by 80+ Perth SMEs</strong> &mdash; operations, scale, and clarity, since 2014.</span>
        </div>
      </div>

      <!-- RIGHT -->
      <div class="hero-stage reveal reveal-d2">
        <div class="stage-clip">
          <img src="images/hero-team.jpg" alt="The moment a business depends on one person" onerror="this.style.display='none'">

          <div class="stage-tag">
            <span class="pulse"></span>
            <span>LIVE · the bottleneck</span>
          </div>

          <div class="name-card">
            <div class="label">07:12 AM &nbsp;·&nbsp; PERTH, WA</div>
            <p class="quote">"Sorry to bother you &mdash; nobody knows how to do this except&nbsp;Sarah."</p>
          </div>
        </div>

        <div class="float-stat">
          <div class="num">47<em>×</em></div>
          <div class="lab">Daily interruptions to your one indispensable person</div>
        </div>
      </div>

    </div>
  </div>

  <!-- ticker -->
  <div class="hero-ticker">
    <div class="ticker-track">
      <span>Operational dependency</span>
      <span>Single points of failure</span>
      <span>Undocumented workflows</span>
      <span>Approval bottlenecks</span>
      <span>Owner burnout</span>
      <span>Knowledge silos</span>
      <span>Scalability ceilings</span>
      <span>Operational dependency</span>
      <span>Single points of failure</span>
      <span>Undocumented workflows</span>
      <span>Approval bottlenecks</span>
      <span>Owner burnout</span>
      <span>Knowledge silos</span>
      <span>Scalability ceilings</span>
    </div>
  </div>
</section>

<!-- ═══════════════ MORNING ═══════════════ -->
<section class="section morning">
  <div class="morning-time">07&hairsp;:&hairsp;12</div>
  <div class="wrap-narrow">
    <div class="text-col">
      <div class="label reveal">CHAPTER ONE &nbsp;/&nbsp; THE MORNING IT BREAKS</div>
      <h2 class="h2 reveal">The day your business
        <em class="it" style="color:var(--crimson)">stops working</em>
        is the day one person doesn't show up.</h2>

      <p class="lead reveal reveal-d2">Your phone starts vibrating before you even get out of bed. By 7:30 the
        questions stack up faster than you can answer them.</p>

      <div class="quotes reveal reveal-d3">
        <blockquote>"Hey&hellip; do you know where the client files are?"</blockquote>
        <blockquote>"Quick question &mdash; how do we process this order again?"</blockquote>
        <blockquote>"Do you know the password for the supplier portal?"</blockquote>
        <blockquote>"Sorry to bother you, but nobody knows how to do this except Sarah."</blockquote>
      </div>

      <p class="lead reveal">And just like that, the entire day changes. <em class="it">Not</em> because sales dropped.
        Not because clients disappeared. Not because your business failed.
        Because <em class="it">one person wasn't there.</em></p>

      <p class="punch reveal reveal-d2">You realise something most owners never want to admit: your business was never
        really running smoothly.<br>It was <strong>surviving</strong> because one person kept holding everything together.</p>
    </div>
  </div>
</section>

<!-- ═══════════════ PAIN ═══════════════ -->
<section class="section pain">
  <div class="wrap">
    <div class="pain-grid">

      <div class="pain-text">
        <div class="eyebrow reveal">Chapter Two &nbsp;/&nbsp; The Hidden Bottleneck</div>
        <h2 class="h2 reveal" style="margin:24px 0 24px;">You're not running a team anymore.<br>
          <em class="it" style="color:var(--crimson)">You're running around one person.</em></h2>
        <p class="lead reveal reveal-d2">Across Perth, business owners are unknowingly building companies around
          dependency &mdash; not systems. One person knows everything. Everyone else?
          Waiting. Asking. Following. Depending.</p>

        <ul class="pain-list reveal reveal-d3">
          <li><span class="num">i.</span><span>The same employee is interrupted <strong>47 times a day</strong> &mdash; nothing moves until they answer.</span></li>
          <li><span class="num">ii.</span><span>Tasks pile up the moment they're busy, sick, or on leave.</span></li>
          <li><span class="num">iii.</span><span>Your team avoids making decisions without them.</span></li>
          <li><span class="num">iv.</span><span>Even <em>you</em> hesitate to take a holiday &mdash; because deep down, you know what happens when you disconnect.</span></li>
          <li><span class="num">v.</span><span>The business that was supposed to give you freedom now controls your entire life.</span></li>
        </ul>
      </div>

      <aside class="aside-card reveal reveal-d2">
        <div class="stat-label">A typical week, audited</div>
        <div class="stat-num">23<em>%</em></div>
        <div class="stat-meta">of every working day is lost to <strong>one person being asked the same five things</strong> &mdash; while everything else waits.</div>
        <div class="img-frame">
          <img src="images/monitors-workflow.jpg" alt="Operational complexity visualised on screens" onerror="this.parentElement.dataset.label='monitors-workflow.jpg';this.style.display='none';">
        </div>
      </aside>

    </div>
  </div>
</section>

<!-- ═══════════════ STORY ═══════════════ -->
<section class="section story">
  <div class="wrap">
    <div class="story-head">
      <div class="eyebrow reveal">Chapter Three &nbsp;/&nbsp; The Resignation</div>
      <h2 class="h2 reveal" style="margin-top:24px;">It usually happens
        <em class="it" style="color:var(--crimson)">without warning.</em></h2>
    </div>

    <div class="story-frame">
      <div class="story-img reveal">
        <img src="images/team-laptop-stress.jpg" alt="The team realising the bottleneck has resigned" onerror="this.parentElement.dataset.label='team-laptop-stress.jpg';this.style.display='none';">
        <div class="caption">
          <span class="tag">THE MOMENT IT HITS</span>
          <p class="quote">"How did we let the business become this dependent on one person?"</p>
        </div>
      </div>

      <div class="story-body reveal reveal-d2">
        <h3 class="h3">A short email. A quick meeting. A quiet
          <em class="it" style="color:var(--crimson-deep)">"I think it's time for me to move on."</em></h3>

        <p>Then panic. Because you suddenly realise &mdash;</p>

        <ul class="checklist">
          <li>Nobody else knows the process.</li>
          <li>Critical information lives only inside one head.</li>
          <li>Your "systems" aren't actually systems.</li>
          <li>Operations depend on memory, habit, and constant hand-holding.</li>
        </ul>

        <p class="gut-quote">Externally, you stay calm. Internally, you're calculating
          how many weeks you have before clients start to notice.</p>

        <p>This happens to growing businesses every day &mdash; especially Perth SMEs scaling
          without operational structure. The truth is:
          <strong style="color:var(--ink);">resignation isn't the disaster &mdash; dependency is.</strong>
          The resignation just turns on the lights.</p>

        <a href="#assessment" class="btn-arrow" style="margin-top:24px;">
          See if your business is at risk
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 5l7 7-7 7"/></svg>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════ COST ═══════════════ -->
<section class="section cost">
  <div class="wrap">
    <div class="cost-head">
      <div class="eyebrow reveal">Chapter Four &nbsp;/&nbsp; The Cost</div>
      <h2 class="h2 reveal" style="margin-top:24px;color:#fff;">Most owners think the problem is
        <em class="it" style="color:var(--crimson)">inefficiency.</em>
        It's <span style="text-decoration:underline;text-decoration-color:var(--crimson);text-decoration-thickness:3px;text-underline-offset:8px;">bigger</span> than that.</h2>
      <p class="lead reveal reveal-d2" style="margin-top:24px;">Operational dependency quietly affects everything: the people you employ,
        the clients you serve, the growth you're capable of, and the life you actually live.</p>
    </div>

    <div class="cost-grid">

      <div class="cost-card reveal">
        <span class="num">/ 01 Your Team</span>
        <div class="icon-line">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><circle cx="9" cy="8" r="3"/><circle cx="17" cy="10" r="2.5"/><path d="M3 19c0-3 3-5 6-5s6 2 6 5M14 18c0-2 2-3.5 4-3.5s4 1.5 4 3.5"/></svg>
        </div>
        <h3>Frustration that quietly leaves.</h3>
        <p>Good employees stop bringing ideas because they can't move without constant approvals or answers. The best ones leave first.</p>
      </div>

      <div class="cost-card reveal reveal-d2">
        <span class="num">/ 02 Your Clients</span>
        <div class="icon-line">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8z"/></svg>
        </div>
        <h3>Trust that erodes one delay at a time.</h3>
        <p>Inconsistencies, late replies, and broken promises don't generate complaints &mdash; they generate quiet exits and missing referrals.</p>
      </div>

      <div class="cost-card reveal reveal-d3">
        <span class="num">/ 03 Your Growth</span>
        <div class="icon-line">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M3 17l6-6 4 4 8-8M14 7h7v7"/></svg>
        </div>
        <h3>A ceiling you can feel but can't see.</h3>
        <p>You can't scale when knowledge lives inside one person instead of inside the business. Every hire just adds more weight to the same neck.</p>
      </div>

      <div class="cost-card reveal reveal-d4">
        <span class="num">/ 04 Your Mental Load</span>
        <div class="icon-line">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M9 21h6M12 17v4M5 14a7 7 0 1114 0c0 4-3 5-3 7H8c0-2-3-3-3-7z"/></svg>
        </div>
        <h3>The weekend that never starts.</h3>
        <p>You stop switching off. Even at dinner. Even on holiday. Because somewhere inside, you know: <em>if that person leaves tomorrow, we're in trouble.</em></p>
      </div>

    </div>

    <div class="cost-cta reveal">
      <p class="gut">Until exhaustion becomes <strong>normal</strong>, and you forget what running a business
        was actually supposed to feel like.</p>
      <a href="#assessment" class="btn btn-primary">
        Reveal your bottleneck risk
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M5 12h14M13 5l7 7-7 7"/></svg>
      </a>
    </div>

  </div>
</section>

<!-- ═══════════════ ASSESSMENT ═══════════════ -->
<section class="section assessment" id="assessment">
  <div class="wrap">
    <div class="assessment-head">
      <div class="eyebrow reveal">The One Person Bottleneck Assessment</div>
      <h2 class="h2 reveal">How vulnerable is your business,
        <em class="it" style="color:var(--crimson)">really?</em></h2>
      <p class="lead reveal reveal-d2">Most businesses don't realise how dependent they are until something breaks.
        Eight honest questions will reveal the hidden risks inside your operations.
        Confidential. No spam. Two minutes.</p>
    </div>

    <div class="qz reveal reveal-d2" id="qz">

      <div class="qz-top">
        <span class="qz-tag"><span class="pulse"></span> CONFIDENTIAL ASSESSMENT</span>
        <div class="qz-step-counter"><strong id="stepNow">01</strong> &nbsp;/&nbsp; <span id="stepTotal">09</span></div>
      </div>
      <div class="qz-progress"><div class="qz-progress-bar" id="qzBar"></div></div>

      <div class="qz-stage" id="qzStage">

        <!-- INTRO -->
        <div class="qz-panel qz-intro active" data-panel="intro">
          <div class="eyebrow muted" style="color:var(--crimson)">Step 0 &nbsp;·&nbsp; Begin</div>
          <h3>Eight honest questions. One uncomfortable mirror.</h3>
          <p class="lead">This isn't a generic personality test. It's an operational stress-test built from
            14 years of helping Perth SMEs find what's actually holding them back.</p>
          <div class="meta-row">
            <div class="meta-item">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 22s8-4 8-12V4l-8-2-8 2v6c0 8 8 12 8 12z"/></svg>
              100% confidential
            </div>
            <div class="meta-item">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
              Approx. 2 minutes
            </div>
            <div class="meta-item">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><path d="M22 4L12 14.01l-3-3"/></svg>
              Personalised report by email
            </div>
          </div>
        </div>

        <!-- QUESTION PANELS injected by JS template below -->
        <!-- LEAD CAPTURE -->
        <div class="qz-panel qz-form" data-panel="form">
          <div class="eyebrow muted" style="color:var(--crimson)">Step 09 &nbsp;·&nbsp; Almost there</div>
          <h3>Your bottleneck risk score is <em class="it" style="color:var(--crimson);font-weight:500">ready.</em></h3>
          <p class="form-lede">We're preparing your personalised operational risk report. Tell us where to send it.</p>
          <form class="form-grid" id="leadForm" novalidate>
            <div class="field">
              <label>Full Name <span class="req">*</span></label>
              <input type="text" name="name" required autocomplete="name">
            </div>
            <div class="field">
              <label>Business Name <span class="req">*</span></label>
              <input type="text" name="business" required autocomplete="organization">
            </div>
            <div class="field">
              <label>Email Address <span class="req">*</span></label>
              <input type="email" name="email" required autocomplete="email">
            </div>
            <div class="field">
              <label>Phone (optional)</label>
              <input type="tel" name="phone" autocomplete="tel">
            </div>
            <div class="privacy full">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>
              Your details are stored securely and only used to send your personalised report and an
              optional one-off follow-up. No marketing lists. No spam. Ever.
            </div>
          </form>
        </div>

        <!-- LOADING -->
        <div class="qz-panel qz-loading" data-panel="loading">
          <div class="ring"></div>
          <h3>Building your operational risk report&hellip;</h3>
          <p class="lead">Cross-referencing your answers against 14 years of Perth SME data.</p>
          <ul class="steps" id="loadSteps">
            <li><span class="check">✓</span><span>Mapping single-points-of-failure</span></li>
            <li><span class="check">✓</span><span>Calculating dependency exposure</span></li>
            <li><span class="check">✓</span><span>Modelling resignation impact</span></li>
            <li><span class="check">✓</span><span>Generating your risk band</span></li>
          </ul>
        </div>

        <!-- RESULT -->
        <div class="qz-panel qz-result" data-panel="result" style="padding:0;">
          <div class="result-head">
            <div class="label">Your bottleneck risk score</div>
            <h3>You're at <span class="level" id="rLevel">Moderate</span> risk.</h3>
            <div class="gauge">
              <svg viewBox="0 0 200 110">
                <path class="track" d="M 20 100 A 80 80 0 0 1 180 100" />
                <path class="progress" id="gaugePath" d="M 20 100 A 80 80 0 0 1 180 100" pathLength="283" />
              </svg>
              <div class="gnum"><span id="rScore">14</span><em>&thinsp;/&thinsp;24</em></div>
            </div>
          </div>

          <div class="result-body">
            <div>
              <h4 id="rTitle">Your workflows rely on key people more than you realise.</h4>
              <p id="rBody">Productivity, growth, and team performance are quietly being capped by a small number
                of indispensable individuals. The good news: this is the easiest stage to fix &mdash;
                before a resignation, illness, or burnout forces your hand.</p>
            </div>
            <div>
              <h4 style="font-family:var(--sans);font-size:11px;letter-spacing:.22em;text-transform:uppercase;font-weight:600;color:var(--mute);">If left unaddressed</h4>
              <ul class="impact-list" id="rImpact">
                <li>Project velocity drops 20&ndash;40% during any key absence.</li>
                <li>Onboarding new staff takes 3&times; longer than it should.</li>
                <li>Owner exhaustion compounds &mdash; usually before it's diagnosed.</li>
                <li>One resignation = 6&ndash;12 weeks of operational drag.</li>
              </ul>
            </div>
          </div>

          <div class="result-cta">
            <a href="#close" class="btn btn-primary">Book A Strategy Call</a>
            <span class="secondary"><strong>A copy of your full report</strong> has been sent to your email.</span>
          </div>
        </div>

      </div>

      <div class="qz-nav">
        <button class="back" id="qzBack" disabled>
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
          Back
        </button>
        <button class="next" id="qzNext">
          Begin Assessment
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 5l7 7-7 7"/></svg>
        </button>
      </div>

    </div>
  </div>
</section>

<!-- ═══════════════ SOLUTION ═══════════════ -->
<section class="section solution" id="solution">
  <div class="wrap">

    <div class="solution-head">
      <div class="left">
        <div class="eyebrow reveal">Chapter Five &nbsp;/&nbsp; The Way Out</div>
        <h2 class="h2 reveal" style="margin-top:24px;">Businesses grow faster when knowledge stops
          <span class="strike">living inside people</span>
          and starts living inside <em class="it" style="color:var(--crimson);font-weight:500;">systems.</em></h2>
      </div>
      <div class="right">
        <p class="reveal reveal-d2">At ACS Consulting, we don't sell theory. We map the dependency hiding inside
          your day-to-day, then quietly remove it &mdash; one workflow, one approval, one document at a time.
          Until your business runs on structure, not memory.</p>
      </div>
    </div>

    <div class="sol-grid">

      <div class="sol-card reveal">
        <div class="icon-w">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><circle cx="12" cy="12" r="3"/><circle cx="12" cy="12" r="9"/><path d="M12 3v3M12 18v3M3 12h3M18 12h3"/></svg>
        </div>
        <h4>Bottleneck mapping</h4>
        <p>We trace every workflow, approval and information path until your operational dependency map is in front of you on a single page.</p>
      </div>

      <div class="sol-card reveal reveal-d2">
        <div class="icon-w">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M9 11l3 3 8-8M20 12v6a2 2 0 01-2 2H6a2 2 0 01-2-2V6a2 2 0 012-2h9"/></svg>
        </div>
        <h4>Process documentation</h4>
        <p>Critical workflows extracted from people's heads into clean, repeatable systems your team can actually follow on a Tuesday afternoon.</p>
      </div>

      <div class="sol-card reveal reveal-d3">
        <div class="icon-w">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><circle cx="9" cy="7" r="3"/><circle cx="17" cy="9" r="2.5"/><path d="M3 19c0-3 2.7-5 6-5s6 2 6 5M14 18c0-2 1.7-3.5 4-3.5s4 1.5 4 3.5"/></svg>
        </div>
        <h4>Cross-training &amp; redundancy</h4>
        <p>We rebuild the operational floor so that no single absence &mdash; sick day, leave, or resignation &mdash; can stop the business moving.</p>
      </div>

      <div class="sol-card reveal">
        <div class="icon-w">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M3 12l2-2 4 4 8-8 4 4M3 18h18"/></svg>
        </div>
        <h4>Approval &amp; decision design</h4>
        <p>We strip out the bottleneck approvals quietly draining productivity and replace them with rules-based delegation your people trust.</p>
      </div>

      <div class="sol-card reveal reveal-d2">
        <div class="icon-w">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 10h18M8 4v16"/></svg>
        </div>
        <h4>Knowledge architecture</h4>
        <p>A single source of truth for SOPs, suppliers, passwords, client history &mdash; so when someone walks out the door, the knowledge stays.</p>
      </div>

      <div class="sol-card reveal reveal-d3">
        <div class="icon-w">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M12 2v4M12 18v4M2 12h4M18 12h4M5 5l3 3M16 16l3 3M5 19l3-3M16 8l3-3"/></svg>
        </div>
        <h4>Owner-extraction plan</h4>
        <p>The most quiet relief of all: a structured plan to take you out of the daily firing line, without anything breaking when you do.</p>
      </div>

    </div>

    <div class="sol-visual">
      <div class="img-cell reveal">
        <img src="images/gears-hands.jpg" alt="Hands building systems together" onerror="this.parentElement.dataset.label='gears-hands.jpg';this.style.display='none';">
        <div class="layer"></div>
        <div class="label"><span>Phase 01</span>Map</div>
      </div>
      <div class="img-cell reveal reveal-d2">
        <img src="images/compass-business.jpg" alt="Strategic direction" onerror="this.parentElement.dataset.label='compass-business.jpg';this.style.display='none';">
        <div class="layer"></div>
        <div class="label"><span>Phase 02</span>Strip &amp; rebuild</div>
      </div>
      <div class="img-cell reveal reveal-d3">
        <img src="images/team-celebrate.jpg" alt="Team aligned and operating" onerror="this.parentElement.dataset.label='team-celebrate.jpg';this.style.display='none';">
        <div class="layer"></div>
        <div class="label"><span>Phase 03</span>Operate</div>
      </div>
    </div>

  </div>
</section>

<!-- ═══════════════ TRUST ═══════════════ -->
<section class="trust">
  <div class="wrap">
    <div class="trust-grid">
      <div class="reveal">
        <div class="eyebrow">Outcomes, not opinions</div>
        <h3 class="h3" style="margin-top:18px;">Numbers that show up <em class="it" style="color:var(--crimson)">six&nbsp;weeks</em> after we start.</h3>
        <div class="trust-stats">
          <div class="stat"><div class="n">80<em>+</em></div><div class="l">Perth SMEs<br>de-risked since 2014</div></div>
          <div class="stat"><div class="n">2.4<em>×</em></div><div class="l">Avg. owner<br>time recovered</div></div>
          <div class="stat"><div class="n">40<em>%</em></div><div class="l">Reduction in<br>approval delays</div></div>
        </div>
      </div>
      <div class="trust-img reveal reveal-d2">
        <img src="images/growth-chart-2026.jpg" alt="Growth trajectory" onerror="this.parentElement.dataset.label='growth-chart-2026.jpg';this.style.display='none';">
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════ TESTIMONIAL ═══════════════ -->
<section class="tlquote">
  <div class="wrap">
    <div class="tlquote-card reveal">
      <div class="quote-mark">&ldquo;</div>
      <blockquote>We didn't realise how exposed we were. ACS quietly extracted six years of
        knowledge from one person's head &mdash; <em>without him even noticing</em> &mdash;
        and built the structure we always told ourselves we already had.</blockquote>
      <div class="attribution">
        <div class="av">M</div>
        <div class="meta">
          <strong>Marcus T.</strong>
          <span>Managing Director, $14M Perth-based services firm</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════ CLOSE ═══════════════ -->
<section class="close" id="close">
  <div class="wrap">
    <div class="close-grid">

      <div>
        <div class="eyebrow reveal" style="color:#FBC8C9;">Final word</div>
        <h2 class="h2 reveal" style="margin-top:24px;color:#fff;">You built the business to create
          <em class="it" style="color:var(--crimson)">freedom</em> &mdash;
          not to become its emergency contact.</h2>
        <p class="subline reveal reveal-d2">Right now, someone inside your business is carrying too much. Maybe it's
          your operations manager. Maybe it's your senior admin. Maybe it's you.</p>

        <ul class="em-list reveal reveal-d3">
          <li>Before the resignation.</li>
          <li>Before the burnout.</li>
          <li>Before the operational chaos.</li>
          <li>Before clients start to notice.</li>
        </ul>

        <div class="close-cta reveal reveal-d4">
          <a href="#assessment" class="btn btn-primary">
            Take The Assessment
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M5 12h14M13 5l7 7-7 7"/></svg>
          </a>
          <a href="mailto:hello@acsconsulting.com.au" class="btn btn-light-on-dark">Book A Strategy Call</a>
        </div>
      </div>

      <aside class="close-card reveal reveal-d2">
        <div class="meta">A confidential conversation</div>
        <h4>30 minutes. One Perth-based operations strategist. No deck. No pitch.</h4>
        <div class="info-row">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
          30-min discovery, your calendar
        </div>
        <div class="info-row">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
          Perth, Western Australia
        </div>
        <div class="info-row">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/></svg>
          (08) — direct line provided post-assessment
        </div>
      </aside>

    </div>
  </div>
</section>

<!-- ═══════════════ FOOTER ═══════════════ -->
<footer>
  <div class="wrap">
    <a href="#" class="brand">
      <span class="mark">A</span>
      <span class="name">ACS <span>CONSULTING</span></span>
    </a>
    <div class="legal">
      <span>&copy; 2026 ACS Consulting Pty Ltd</span>
      <a href="#">Privacy</a>
      <a href="#">Terms</a>
      <a href="https://acsconsulting.com.au">Main site &rarr;</a>
    </div>
  </div>
</footer>

<!-- ═══════════════ STICKY MOBILE CTA ═══════════════ -->
<div class="sticky-cta" id="stickyCta">
  <div class="label">
    <strong>Find your bottleneck</strong>
    <span>2-min confidential assessment</span>
  </div>
  <a href="#assessment">Start →</a>
</div>

<script>
/* ============================================================
   1. NAV behaviour & sticky CTA
   ============================================================ */
const nav = document.getElementById('nav');
const stickyCta = document.getElementById('stickyCta');
window.addEventListener('scroll', () => {
  const y = window.scrollY;
  nav.classList.toggle('scrolled', y > 24);
  stickyCta.classList.toggle('show', y > 600);
}, {passive:true});

/* ============================================================
   2. Reveal-on-scroll
   ============================================================ */
const io = new IntersectionObserver((entries)=>{
  entries.forEach(e=>{
    if(e.isIntersecting){
      e.target.classList.add('in');
      io.unobserve(e.target);
    }
  });
},{threshold:.12, rootMargin:'0px 0px -40px 0px'});
document.querySelectorAll('.reveal').forEach(el=>io.observe(el));

/* ============================================================
   3. Bottleneck Assessment State Machine
   ============================================================ */
const QUESTIONS = [
  {
    cat: 'Continuity',
    q: 'If one of your key people disappeared for two weeks tomorrow, what would actually happen?',
    sub: 'Be honest. Not what you tell investors — what would really happen.',
    options: [
      {t:'Work would continue smoothly. We have full coverage.', s:0},
      {t:'Some friction, but we\'d adapt within a few days.', s:1},
      {t:'Significant disruption — we\'d be in firefighting mode.', s:2},
      {t:'It would be a full-blown crisis. Things would break.', s:3},
    ]
  },
  {
    cat: 'Documentation',
    q: 'How are your critical workflows currently documented?',
    sub: 'SOPs, processes, the actual "how we do things" knowledge.',
    options: [
      {t:'Fully documented, version-controlled, accessible to the team.', s:0},
      {t:'Mostly documented, but inconsistent and out of date.', s:1},
      {t:'A few key things are written down. Most isn\'t.', s:2},
      {t:'Almost nothing is documented — it lives in people\'s heads.', s:3},
    ]
  },
  {
    cat: 'Decision flow',
    q: 'When your team needs to make a meaningful decision, where does it usually land?',
    options: [
      {t:'Within the team — they\'re empowered with clear rules.', s:0},
      {t:'With one or two senior people, but it moves quickly.', s:1},
      {t:'On one person\'s plate — and there\'s usually a queue.', s:2},
      {t:'On my plate. Almost always. Even small things.', s:3},
    ]
  },
  {
    cat: 'Backup capability',
    q: 'Could another employee confidently take over a critical role tomorrow?',
    options: [
      {t:'Yes — we cross-train deliberately.', s:0},
      {t:'For some roles, but not the most critical ones.', s:1},
      {t:'Honestly? Not really. They\'d struggle.', s:2},
      {t:'No. Some roles only one person can do, full stop.', s:3},
    ]
  },
  {
    cat: 'Approval bottleneck',
    q: 'Are approvals slowing your business down right now?',
    options: [
      {t:'No — approval rules are clear and delegated.', s:0},
      {t:'Occasionally — usually for higher-value items only.', s:1},
      {t:'Yes — work waits in queues for someone\'s sign-off regularly.', s:2},
      {t:'Constantly. Approvals are the single biggest source of delay.', s:3},
    ]
  },
  {
    cat: 'Client impact',
    q: 'Do clients ever experience delays when certain staff are unavailable?',
    options: [
      {t:'Never. Coverage is genuinely seamless.', s:0},
      {t:'Occasionally — minor and short.', s:1},
      {t:'Yes — and we\'ve had to apologise for it more than once.', s:2},
      {t:'Yes, and I suspect it\'s costing us repeat business.', s:3},
    ]
  },
  {
    cat: 'Knowledge centralisation',
    q: 'Where does most of the critical business knowledge actually live?',
    options: [
      {t:'In our systems — anyone with access can find it.', s:0},
      {t:'Half in systems, half in people\'s heads.', s:1},
      {t:'Mostly in people\'s heads. We talk about fixing it.', s:2},
      {t:'Almost entirely in one or two people. We are exposed.', s:3},
    ]
  },
  {
    cat: 'Owner detachment',
    q: 'Can you personally step away from the business for two weeks without anxiety?',
    sub: 'A real holiday. Phone off. No "quick checks."',
    options: [
      {t:'Yes — it actually runs better when I disconnect.', s:0},
      {t:'Mostly, but I\'ll still check in once a day.', s:1},
      {t:'Not really. I haven\'t had a clean break in a long time.', s:2},
      {t:'No. The thought alone makes my chest tight.', s:3},
    ]
  },
];

const RESULTS = {
  low: {
    threshold: 7,
    level: 'Low',
    title: 'Your operational foundations are healthy.',
    body: 'You\'ve avoided the most dangerous trap: total dependency on one person. There may still be areas quietly limiting how fast you can scale &mdash; but you\'re working from a position of structural strength, not exposure.',
    impact: [
      'Your business can absorb a key absence without collapsing.',
      'Knowledge transfer happens by design, not by accident.',
      'The next bottleneck is likely growth-related, not survival-related.',
      'A small refinement could unlock noticeably more capacity.'
    ]
  },
  mod: {
    threshold: 15,
    level: 'Moderate',
    title: 'Your workflows depend on key people more than you realise.',
    body: 'You\'re past the danger zone but not yet in the clear. Productivity, growth, and team performance are quietly being capped by a small number of indispensable individuals. The good news: this is the easiest stage to fix &mdash; before a resignation, illness, or burnout forces your hand.',
    impact: [
      'Project velocity drops 20&ndash;40% during any key absence.',
      'Onboarding new staff takes 3&times; longer than it should.',
      'Owner exhaustion compounds &mdash; usually before it\'s diagnosed.',
      'One resignation = 6&ndash;12 weeks of operational drag.'
    ]
  },
  high: {
    threshold: 24,
    level: 'High',
    title: 'Your business is dangerously dependent on specific people.',
    body: 'One absence, resignation, or burnout event would create major operational disruption. The cracks are real, even if revenue is hiding them. This is the stage where most owners stay silent &mdash; and where the most expensive damage gets done. Acting now is exponentially cheaper than acting later.',
    impact: [
      'A single resignation could trigger 3&ndash;6 months of operational chaos.',
      'Your best people are likely already considering their options.',
      'Owner burnout is no longer a risk &mdash; it\'s an active condition.',
      'Growth is structurally capped until the dependency is removed.'
    ]
  }
};

let state = { idx: 0, answers: new Array(QUESTIONS.length).fill(null), score:0 };

const stage    = document.getElementById('qzStage');
const stepNow  = document.getElementById('stepNow');
const stepTotal= document.getElementById('stepTotal');
const bar      = document.getElementById('qzBar');
const nextBtn  = document.getElementById('qzNext');
const backBtn  = document.getElementById('qzBack');

const TOTAL_STEPS = QUESTIONS.length + 2;     // intro + Q's + form (loading & result are post-form)
stepTotal.textContent = String(TOTAL_STEPS).padStart(2,'0');

// Build question panels dynamically
QUESTIONS.forEach((q, i) => {
  const panel = document.createElement('div');
  panel.className = 'qz-panel qz-question';
  panel.dataset.panel = `q${i}`;
  panel.innerHTML = `
    <span class="q-num">Question ${String(i+1).padStart(2,'0')} &middot; ${q.cat}</span>
    <h4>${q.q}</h4>
    ${q.sub ? `<p class="q-sub">${q.sub}</p>` : ''}
    <div class="qz-options">
      ${q.options.map((o,oi)=>`
        <button class="qz-option" data-q="${i}" data-s="${o.s}" data-oi="${oi}">
          <span class="marker"></span>
          <span>${o.t}</span>
        </button>`).join('')}
    </div>
  `;
  stage.insertBefore(panel, stage.querySelector('[data-panel="form"]'));
});

// Option click handler
stage.addEventListener('click', e => {
  const opt = e.target.closest('.qz-option');
  if(!opt) return;
  const q  = +opt.dataset.q;
  const s  = +opt.dataset.s;
  const oi = +opt.dataset.oi;

  // mark
  opt.parentElement.querySelectorAll('.qz-option').forEach(b => b.classList.remove('selected'));
  opt.classList.add('selected');

  state.answers[q] = {s, oi};
  syncNext();
});

function syncNext(){
  const cur = currentPanelKey();
  // For question panels, require an answer
  if(cur.startsWith('q')){
    const idx = +cur.slice(1);
    nextBtn.disabled = state.answers[idx] === null;
  } else {
    nextBtn.disabled = false;
  }
}

function currentPanelKey(){
  return [...stage.children].find(p=>p.classList.contains('active')).dataset.panel;
}

function setPanel(key){
  stage.querySelectorAll('.qz-panel').forEach(p=>p.classList.remove('active'));
  const target = stage.querySelector(`[data-panel="${key}"]`);
  if(target) target.classList.add('active');
}

function updateUI(){
  // step counter & bar based on logical step
  let logical = 1;
  const k = currentPanelKey();
  if(k === 'intro') logical = 1;
  else if(k.startsWith('q')) logical = 2 + (+k.slice(1));   // q0 -> 2, q7 -> 9
  else if(k === 'form') logical = TOTAL_STEPS + 1;         // 10
  else if(k === 'loading') logical = TOTAL_STEPS + 2;
  else if(k === 'result') logical = TOTAL_STEPS + 2;

  // Display 01..09 then "—" for form/loading/result
  const visualMax = TOTAL_STEPS;
  if (k === 'form' || k === 'loading' || k === 'result') {
    stepNow.textContent = '—';
    bar.style.width = '100%';
  } else {
    stepNow.textContent = String(Math.min(logical, visualMax)).padStart(2,'0');
    bar.style.width = ((logical-1)/(visualMax-1)*100) + '%';
  }

  // Buttons
  if(k==='intro'){
    nextBtn.innerHTML = `Begin Assessment <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 5l7 7-7 7"/></svg>`;
    nextBtn.style.display='inline-flex';
    backBtn.disabled = true;
  } else if(k==='form'){
    nextBtn.innerHTML = `Reveal My Score <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 5l7 7-7 7"/></svg>`;
    nextBtn.style.display='inline-flex';
    backBtn.disabled = false;
  } else if(k==='loading' || k==='result'){
    nextBtn.style.display='none';
    backBtn.disabled = (k==='result');   // result hides back
    if(k==='result') backBtn.style.visibility='hidden';
  } else {
    // question
    nextBtn.innerHTML = `Continue <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 5l7 7-7 7"/></svg>`;
    nextBtn.style.display='inline-flex';
    backBtn.disabled = false;
  }
  syncNext();
}

const ORDER = ['intro', ...QUESTIONS.map((_,i)=>`q${i}`), 'form', 'loading', 'result'];

function go(delta){
  const k = currentPanelKey();
  let idx = ORDER.indexOf(k);
  idx = Math.max(0, Math.min(ORDER.length-1, idx+delta));

  // Special handling for transitions
  if(ORDER[idx] === 'loading') {
    setPanel('loading'); updateUI();
    runLoadingSequence().then(()=>{ setPanel('result'); updateUI(); reveal();});
    return;
  }
  setPanel(ORDER[idx]);
  updateUI();
}

backBtn.addEventListener('click', ()=>go(-1));
nextBtn.addEventListener('click', ()=>{
  const k = currentPanelKey();
  if(k==='form'){
    // validate
    const f = document.getElementById('leadForm');
    const required = ['name','business','email'];
    let ok = true;
    required.forEach(name=>{
      const el = f.elements[name];
      if(!el.value.trim() || (name==='email' && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(el.value))){
        el.style.borderBottomColor = 'var(--crimson)';
        el.addEventListener('input',()=>el.style.borderBottomColor='', {once:true});
        ok = false;
      }
    });
    if(!ok) return;
    // compute score
    state.score = state.answers.reduce((a,b)=>a + (b ? b.s : 0), 0);
  }
  go(1);
});

function runLoadingSequence(){
  const steps = document.querySelectorAll('#loadSteps li');
  steps.forEach(s=>s.classList.remove('done'));
  return new Promise(res=>{
    let i = 0;
    const tick = () => {
      if(i>=steps.length){ setTimeout(res, 380); return; }
      steps[i].classList.add('done');
      i++;
      setTimeout(tick, 620);
    };
    tick();
  });
}

function reveal(){
  // determine band
  const score = state.score;
  let band;
  if(score <= RESULTS.low.threshold) band = RESULTS.low;
  else if(score <= RESULTS.mod.threshold) band = RESULTS.mod;
  else band = RESULTS.high;

  document.getElementById('rLevel').textContent = band.level;
  document.getElementById('rScore').textContent = String(score);
  document.getElementById('rTitle').textContent = band.title;
  document.getElementById('rBody').innerHTML    = band.body;
  const ul = document.getElementById('rImpact');
  ul.innerHTML = band.impact.map(i=>`<li>${i}</li>`).join('');

  // gauge animation
  const path = document.getElementById('gaugePath');
  const max = 24;
  const ratio = Math.min(1, score / max);
  // dasharray of the half-circle path is ~283 (we set pathLength=283)
  // dashoffset goes from 283 (empty) to 283 - 283*ratio (filled)
  setTimeout(()=>{
    path.style.strokeDashoffset = (283 - 283*ratio).toString();
  }, 220);

  // colour gauge by band
  if(band === RESULTS.low) path.style.stroke = '#2D8F3F';
  else if(band === RESULTS.mod) path.style.stroke = '#D98C16';
  else path.style.stroke = 'var(--crimson)';
}

updateUI();

/* ============================================================
   4. Smooth scroll for in-page links (skip default for hash="#")
   ============================================================ */
document.querySelectorAll('a[href^="#"]').forEach(a=>{
  a.addEventListener('click', e=>{
    const href = a.getAttribute('href');
    if(href.length<2) return;
    const t = document.querySelector(href);
    if(t){
      e.preventDefault();
      window.scrollTo({ top: t.getBoundingClientRect().top + window.scrollY - 60, behavior:'smooth' });
    }
  });
});
</script>
</body>
</html>










<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>Elegant Typography Layout</title>

<!-- Luxury Serif Font -->
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600&display=swap" rel="stylesheet">

<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }

    :root{

        /* Typography */
        --serif: "Cormorant Garamond", "Fraunces", "Times New Roman", Georgia, serif;
        --sans: "Montserrat", -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif;

        /* Colors */
        --text-soft:#2d2d2d;
        --highlight:#f5d8de;
        --accent:#d92a2a;
    }

    body{
        font-family: var(--serif);
       
       
    }

    .hero-text{
        display:block;
        font-style:italic;
        font-weight:400;
        color:var(--text-soft);
        font-size:.45em;
        letter-spacing:.02em;
        line-height:0.8;
        margin-bottom:24px;
    }

    .hero-text p{
        font-family: var(--serif);
        font-size:clamp(3.2rem, 5vw, 5rem);
    }

    .highlight-box{
        position:relative;
        display:inline-block;
        z-index:1;
    }

    .highlight-box::before{
        content:"";
        position:absolute;
        left:-5%;
        right:-5%;
        bottom:0%;
        height:25%;
        background:var(--highlight);
        z-index:-1;
    }

    .accent{
        color:var(--accent);
        font-style:italic;
    }

    /* ========= Responsive ========= */

    /* Large Desktop */
    @media (min-width:1440px){
        .hero-text{
            max-width:1400px;
        }
    }

    /* Laptop */
    @media (max-width:1200px){
        .hero-text p{
            font-size:clamp(3rem, 9vw, 7rem);
        }
    }

    /* Tablet Landscape */
    @media (max-width:992px){
        body{
            padding:30px;
        }

        .hero-text{
            line-height:0.9;
        }

        .hero-text p{
            font-size:clamp(2.8rem, 8vw, 6rem);
        }
    }

    /* Tablet Portrait */
    @media (max-width:768px){
        body{
            padding:25px;
        }

        .hero-text{
            letter-spacing:-1px;
        }

        .hero-text p{
            font-size:clamp(2.5rem, 9vw, 5rem);
        }
    }

    /* Mobile Landscape */
    @media (max-width:600px){
        body{
            padding:20px;
        }

        .hero-text{
            line-height:0.92;
        }

        .hero-text p{
            font-size:clamp(2rem, 10vw, 4rem);
        }

        .highlight-box::before{
            height:24%;
        }
    }

    /* Mobile Portrait */
    @media (max-width:480px){
        body{
            padding:16px;
        }

        .hero-text{
            line-height:0.95;
            letter-spacing:-0.5px;
        }

        .hero-text p{
            font-size:clamp(1.8rem, 11vw, 3.3rem);
        }

        .highlight-box::before{
            bottom:10%;
            height:22%;
        }
    }
</style>
</head>

<body>

<div class="hero-text">
    <p>The day your</p>

    <p>
        business
        <span class="highlight-box">stops</span>
    </p>

    <p>working,</p>

    <p>
        <span class="accent">one person</span>
        wasn't
    </p>

    <p>there.</p>
</div>

</body>
</html>









<div class="luxury-hero">

    <div class="hero-text">
        The day your business
        <span class="accent">stops <br> working</span>
        is the day one person<br>
        doesn't show up.
    </div>
	
	


</div>

<style>

    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }

    :root{

        /* Typography */
        --serif: "Cormorant Garamond", "Fraunces", "Times New Roman", Georgia, serif;
        --sans: "Montserrat", -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif;

        /* Colors */
   
        --text:#0d1735;
        --accent:#d92a2a;
    }

    /* Google Font Import */
    @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600;700&display=swap');

    .luxury-hero{
        width:100%;
        background:var(--bg);

        display:flex;
        align-items:center;
        justify-content:center;

       
        overflow:hidden;
    }

    .hero-text{
        width:100%;
        max-width:1400px;

        font-family:var(--serif);
        font-weight:400;
        font-style:normal;

        color:var(--text);

        font-size:clamp(3rem, 8vw, 7.5rem);
        line-height:0.92;
        letter-spacing:-2px;
    }

    .hero-text .accent{
        color:var(--accent);
        font-style:italic;
        font-weight:500;
    }

    /* ========= Large Desktop ========= */
    @media (min-width:1600px){

        .hero-text{
            max-width:1600px;
            font-size:4rem;
        }

    }

    /* ========= Laptop ========= */
    @media (max-width:1200px){

        .luxury-hero{
            padding:35px;
        }

        .hero-text{
            font-size:clamp(2.8rem, 8vw, 6rem);
        }

    }

    /* ========= Tablet Landscape ========= */
    @media (max-width:992px){

        .luxury-hero{
            padding:30px;
        }

        .hero-text{
            font-size:clamp(2.5rem, 8vw, 5rem);
            line-height:0.95;
            letter-spacing:-1.5px;
        }

    }

    /* ========= Tablet Portrait ========= */
    @media (max-width:768px){

        .luxury-hero{
            padding:24px;
        }

        .hero-text{
            font-size:clamp(2.2rem, 9vw, 4.5rem);
            line-height:1;
            letter-spacing:-1px;
        }

    }

    /* ========= Mobile Landscape ========= */
    @media (max-width:600px){

        .luxury-hero{
            padding:22px;
        }

        .hero-text{
            font-size:clamp(2rem, 10vw, 3.8rem);
            line-height:1;
            letter-spacing:-0.8px;
        }

    }

    /* ========= Mobile Portrait ========= */
    @media (max-width:480px){

        .luxury-hero{
            padding:18px;
        }

        .hero-text{
            font-size:clamp(1.8rem, 11vw, 3rem);
            line-height:1.02;
            letter-spacing:-0.5px;
        }

    }

</style>






<div class="luxury-hero1">

    <div class="hero-text1">
        You realise something most owners never want to<br> admit: your business was never really running<br> smoothly.<br>
It was
        <span class="accent1">surviving</span>
        because one person kept holding<br>
        everything together.
    </div>
	
	


</div>

<style>

    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }

    :root{

        /* Typography */
        --serif: "Cormorant Garamond", "Fraunces", "Times New Roman", Georgia, serif;
        --sans: "Montserrat", -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif;

        /* Colors */
   
        --text:#0d1735;
        --accent1:#d92a2a;
    }

    /* Google Font Import */
    @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600;700&display=swap');

    .luxury-hero1{
        width:100%;
        background:var(--bg);

        display:flex;
        align-items:center;
        justify-content:center;

       
        overflow:hidden;
    }

    .hero-text1{
        width:100%;
        max-width:1400px;

        font-family:var(--serif);
        font-weight:400;
        font-style:normal;

        color:var(--text);

        font-size:clamp(3rem, 8vw, 7.5rem);
        line-height:0.92;
        letter-spacing:-2px;
    }

    .hero-text1 .accent1{
        color:var(--accent1);
        font-style:italic;
        font-weight:500;
    }

    /* ========= Large Desktop ========= */
    @media (min-width:1600px){

        .hero-text1{
            max-width:1600px;
            font-size:3rem;
        }

    }

    /* ========= Laptop ========= */
    @media (max-width:1200px){

        .luxury-hero1{
            padding:35px;
        }

        .hero-text1{
            font-size:clamp(2.8rem, 8vw, 6rem);
        }

    }

    /* ========= Tablet Landscape ========= */
    @media (max-width:992px){

        .luxury-hero1{
            padding:30px;
        }

        .hero-text1{
            font-size:clamp(2.5rem, 8vw, 5rem);
            line-height:0.95;
            letter-spacing:-1.5px;
        }

    }

    /* ========= Tablet Portrait ========= */
    @media (max-width:768px){

        .luxury-hero1{
            padding:24px;
        }

        .hero-text1{
            font-size:clamp(2.2rem, 9vw, 4.5rem);
            line-height:1;
            letter-spacing:-1px;
        }

    }

    /* ========= Mobile Landscape ========= */
    @media (max-width:600px){

        .luxury-hero1{
            padding:22px;
        }

        .hero-text1{
            font-size:clamp(2rem, 10vw, 3.8rem);
            line-height:1;
            letter-spacing:-0.8px;
        }

    }

    /* ========= Mobile Portrait ========= */
    @media (max-width:480px){

        .luxury-hero1{
            padding:18px;
        }

        .hero-text1{
            font-size:clamp(1.8rem, 11vw, 3rem);
            line-height:1.02;
            letter-spacing:-0.5px;
        }

    }

</style>







<div class="luxury-hero2">

    <div class="hero-text2">
        You're not running a<br> team anymore.<br>
        <span class="accent2">You're running around <br> one person.</span>
      
    </div>
	
	


</div>

<style>

    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }

    :root{

        /* Typography */
        --serif: "Cormorant Garamond", "Fraunces", "Times New Roman", Georgia, serif;
        --sans: "Montserrat", -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif;

        /* Colors */
   
        --text:#0d1735;
        --accent2:#d92a2a;
    }

    /* Google Font Import */
    @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600;700&display=swap');

    .luxury-hero2{
        width:100%;
        background:var(--bg);

        display:flex;
        align-items:center;
        justify-content:center;

       
        overflow:hidden;
    }

    .hero-text2{
        width:100%;
        max-width:1400px;

        font-family:var(--serif);
        font-weight:400;
        font-style:normal;

        color:var(--text);

        font-size:clamp(3rem, 8vw, 7.5rem);
        line-height:0.92;
        letter-spacing:-2px;
    }

    .hero-text2 .accent2{
        color:var(--accent2);
        font-style:italic;
        font-weight:500;
    }

    /* ========= Large Desktop ========= */
    @media (min-width:1600px){

        .hero-text2{
            max-width:1600px;
            font-size:4rem;
        }

    }

    /* ========= Laptop ========= */
    @media (max-width:1200px){

        .luxury-hero2{
            padding:35px;
        }

        .hero-text2{
            font-size:clamp(2.8rem, 8vw, 6rem);
        }

    }

    /* ========= Tablet Landscape ========= */
    @media (max-width:992px){

        .luxury-hero2{
            padding:30px;
        }

        .hero-text2{
            font-size:clamp(2.5rem, 8vw, 5rem);
            line-height:0.95;
            letter-spacing:-1.5px;
        }

    }

    /* ========= Tablet Portrait ========= */
    @media (max-width:768px){

        .luxury-hero2{
            padding:24px;
        }

        .hero-text2{
            font-size:clamp(2.2rem, 9vw, 4.5rem);
            line-height:1;
            letter-spacing:-1px;
        }

    }

    /* ========= Mobile Landscape ========= */
    @media (max-width:600px){

        .luxury-hero2{
            padding:22px;
        }

        .hero-text2{
            font-size:clamp(2rem, 10vw, 3.8rem);
            line-height:1;
            letter-spacing:-0.8px;
        }

    }

    /* ========= Mobile Portrait ========= */
    @media (max-width:480px){

        .luxury-hero2{
            padding:18px;
        }

        .hero-text2{
            font-size:clamp(1.8rem, 11vw, 3rem);
            line-height:1.02;
            letter-spacing:-0.5px;
        }

    }

</style>














<div class="luxury-hero3">

    <div class="hero-text3">
        It usually happens
        <span class="accent3"> without <br> warning.</span>
      
    </div>
	
	


</div>

<style>

    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }

    :root{

        /* Typography */
        --serif: "Cormorant Garamond", "Fraunces", "Times New Roman", Georgia, serif;
        --sans: "Montserrat", -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif;

        /* Colors */
   
        --text:#0d1735;
        --accent3:#d92a2a;
    }

    /* Google Font Import */
    @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600;700&display=swap');

    .luxury-hero3{
        width:100%;
        background:var(--bg);

        display:flex;
        align-items:center;
        justify-content:center;

       
        overflow:hidden;
    }

    .hero-text3{
        width:100%;
        max-width:1400px;

        font-family:var(--serif);
        font-weight:400;
        font-style:normal;

        color:var(--text);

        font-size:clamp(3rem, 8vw, 7.5rem);
        line-height:0.92;
        letter-spacing:-2px;
    }

    .hero-text3 .accent3{
        color:var(--accent3);
        font-style:italic;
        font-weight:500;
    }

    /* ========= Large Desktop ========= */
    @media (min-width:1600px){

        .hero-text3{
            max-width:1600px;
            font-size:4rem;
        }

    }

    /* ========= Laptop ========= */
    @media (max-width:1200px){

        .luxury-hero3{
            padding:35px;
        }

        .hero-text3{
            font-size:clamp(2.8rem, 8vw, 6rem);
        }

    }

    /* ========= Tablet Landscape ========= */
    @media (max-width:992px){

        .luxury-hero3{
            padding:30px;
        }

        .hero-text3{
            font-size:clamp(2.5rem, 8vw, 5rem);
            line-height:0.95;
            letter-spacing:-1.5px;
        }

    }

    /* ========= Tablet Portrait ========= */
    @media (max-width:768px){

        .luxury-hero3{
            padding:24px;
        }

        .hero-text3{
            font-size:clamp(2.2rem, 9vw, 4.5rem);
            line-height:1;
            letter-spacing:-1px;
        }

    }

    /* ========= Mobile Landscape ========= */
    @media (max-width:600px){

        .luxury-hero3{
            padding:22px;
        }

        .hero-text3{
            font-size:clamp(2rem, 10vw, 3.8rem);
            line-height:1;
            letter-spacing:-0.8px;
        }

    }

    /* ========= Mobile Portrait ========= */
    @media (max-width:480px){

        .luxury-hero3{
            padding:18px;
        }

        .hero-text3{
            font-size:clamp(1.8rem, 11vw, 3rem);
            line-height:1.02;
            letter-spacing:-0.5px;
        }

    }

</style>








 





<div class="headline-wrap">
  <h1>
    Most owners think the problem<br>
    is <span class="red italic">inefficiency.</span>
    It's <span class="underline">bigger</span> than that.
  </h1>
</div>
<style>
  body{
    font-family: "Times New Roman", Georgia, serif;
	
  }

  .headline-wrap{
    width:100%;
    max-width:1200px;
   
  }

  .headline-wrap h1{
    margin:0;
    color:#ffffff;
    font-size:68px;
    line-height:1;
    font-weight:400;
    letter-spacing:-2px;
  }

  .red{
    color:#e52323;
	 font-family: Fraunces, "Times New Roman", Georgia, serif;
  }

  .italic{
    font-style:italic;
  }

  .underline{
    position:relative;
    display:inline-block;
  }

  .underline::after{
    content:"";
    position:absolute;
    left:0;
    bottom:4px;
    width:100%;
    height:3px;
    background:#e52323;
  }

  /* ========== Desktop (Large Screens) ========== */
  @media (min-width:1400px){
    .headline-wrap h1{
      font-size:45px;
    }
  }

  /* ========== Laptop ========== */
  @media (max-width:1399px){
    .headline-wrap h1{
      font-size:40px;
    }
  }

  /* ========== Tablet Landscape ========== */
  @media (max-width:1024px){
    .headline-wrap{
      padding:30px;
    }

    .headline-wrap h1{
      font-size:50px;
      line-height:1.05;
    }
  }

  /* ========== Tablet Portrait ========== */
  @media (max-width:768px){
    .headline-wrap{
      padding:25px;
    }

    .headline-wrap h1{
      font-size:42px;
      line-height:1.1;
      letter-spacing:-1px;
    }
  }

  /* ========== Mobile Landscape ========== */
  @media (max-width:600px){
    .headline-wrap{
      padding:20px;
    }

    .headline-wrap h1{
      font-size:34px;
      line-height:1.15;
    }
  }

  /* ========== Mobile Portrait ========== */
  @media (max-width:420px){
    .headline-wrap{
      padding:15px;
    }

    .headline-wrap h1{
      font-size:28px;
      line-height:1.2;
      letter-spacing:-0.5px;
    }
  }
</style>








<div class="luxury-hero5">

    <div class="hero-text5">
        Until exhaustion becomes 
        <span class="accent5"> normal</span>
      , and you forget<br>
	  what running a business was actually supposed to<br>
	  feel like.
    </div>
	
	


</div>

<style>

    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }

    :root{

        /* Typography */
        --serif: "Cormorant Garamond", "Fraunces", "Times New Roman", Georgia, serif;
        --sans: "Montserrat", -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif;

        /* Colors */
   
        --text5:white;
        --accent5:#d92a2a;
    }

    /* Google Font Import */
    @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600;700&display=swap');

    .luxury-hero5{
        width:100%;
        background:var(--bg);

        display:flex;
        align-items:center;
        justify-content:center;

       
        overflow:hidden;
    }

    .hero-text5{
        width:100%;
        max-width:1400px;

        font-family:var(--serif);
        font-weight:500;
        font-style:normal;

        color:var(--text5);

        font-size:clamp(3rem, 8vw, 7.5rem);
        line-height:0.92;
        letter-spacing:-2px;
    }

    .hero-text5 .accent5{
        color:var(--accent5);
        font-style:italic;
        font-weight:500;
    }

    /* ========= Large Desktop ========= */
    @media (min-width:1600px){

        .hero-text5{
            max-width:1600px;
            font-size:2.5rem;
			text-align:center;
        }

    }

    /* ========= Laptop ========= */
    @media (max-width:1200px){

        .luxury-hero5{
            padding:35px;
        }

        .hero-text5{
            font-size:clamp(2.8rem, 8vw, 6rem);
				text-align:center;
        }

    }

    /* ========= Tablet Landscape ========= */
    @media (max-width:992px){

        .luxury-hero5{
            padding:30px;
        }

        .hero-text5{
            font-size:clamp(2.5rem, 8vw, 5rem);
            line-height:0.95;
            letter-spacing:-1.5px;
				text-align:center;
        }

    }

    /* ========= Tablet Portrait ========= */
    @media (max-width:768px){

        .luxury-hero5{
            padding:24px;
        }

        .hero-text5{
            font-size:clamp(2.2rem, 9vw, 4.5rem);
            line-height:1;
            letter-spacing:-1px;
				text-align:center;
        }

    }

    /* ========= Mobile Landscape ========= */
    @media (max-width:600px){

        .luxury-hero5{
            padding:22px;
        }

        .hero-text5{
            font-size:clamp(2rem, 10vw, 3.8rem);
            line-height:1;
            letter-spacing:-0.8px;
				text-align:center;
        }

    }

    /* ========= Mobile Portrait ========= */
    @media (max-width:480px){

        .luxury-hero5{
            padding:18px;
        }

        .hero-text5{
            font-size:clamp(1.8rem, 11vw, 3rem);
            line-height:1.02;
            letter-spacing:-0.5px;
				text-align:center;
        }

    }

</style>






<div class="luxury-hero6">

    <div class="hero-text6">
        How vulnerable is your business,<br>
        <span class="accent6"> really?</span>
      
    </div>
	
	


</div>

<style>

    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }

    :root{

        /* Typography */
        --serif: "Cormorant Garamond", "Fraunces", "Times New Roman", Georgia, serif;
        --sans: "Montserrat", -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif;

        /* Colors */
   
        --text:#0d1735;
        --accent6:#d92a2a;
    }

    /* Google Font Import */
    @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600;700&display=swap');

    .luxury-hero6{
        width:100%;
        background:var(--bg);

        display:flex;
        align-items:center;
        justify-content:center;

       
        overflow:hidden;
    }

    .hero-text6{
        width:100%;
        max-width:1400px;

        font-family:var(--serif);
        font-weight:400;
        font-style:normal;

        color:var(--text);

        font-size:clamp(3rem, 8vw, 7.5rem);
        line-height:0.92;
        letter-spacing:-2px;
    }

    .hero-text6 .accent6{
        color:var(--accent6);
        font-style:italic;
        font-weight:500;
    }

    /* ========= Large Desktop ========= */
    @media (min-width:1600px){

        .hero-text6{
            max-width:1600px;
            font-size:4rem;
			text-align:center;
        }

    }

    /* ========= Laptop ========= */
    @media (max-width:1200px){

        .luxury-hero6{
            padding:35px;
        }

        .hero-text6{
            font-size:clamp(2.8rem, 8vw, 6rem);
			text-align:center;
        }

    }

    /* ========= Tablet Landscape ========= */
    @media (max-width:992px){

        .luxury-hero6{
            padding:30px;
        }

        .hero-text6{
            font-size:clamp(2.5rem, 8vw, 5rem);
            line-height:0.95;
            letter-spacing:-1.5px;
			text-align:center;
        }

    }

    /* ========= Tablet Portrait ========= */
    @media (max-width:768px){

        .luxury-hero6{
            padding:24px;
        }

        .hero-text6{
            font-size:clamp(2.2rem, 9vw, 4.5rem);
            line-height:1;
            letter-spacing:-1px;
			text-align:center;
        }

    }

    /* ========= Mobile Landscape ========= */
    @media (max-width:600px){

        .luxury-hero6{
            padding:22px;
        }

        .hero-text6{
            font-size:clamp(2rem, 10vw, 3.8rem);
            line-height:1;
            letter-spacing:-0.8px;
			text-align:center;
        }

    }

    /* ========= Mobile Portrait ========= */
    @media (max-width:480px){

        .luxury-hero6{
            padding:18px;
        }

        .hero-text6{
            font-size:clamp(1.8rem, 11vw, 3rem);
            line-height:1.02;
            letter-spacing:-0.5px;
			text-align:center;
        }

    }

</style>








<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;1,400;1,500&display=swap" rel="stylesheet">

<div class="headline-wrap">
  <div class="headline">
    Businesses grow faster<br>
    when knowledge stops<br>

    <span class="strike-wrap">
      <span class="italic-grey">living inside people</span>
    </span>

    and<br>
    starts living inside<br>

    <span class="red-italic">systems.</span>
  </div>
</div>

<style>

/* MAIN TEXT */
.headline{
  font-family: "Playfair Display", serif;
  font-size: clamp(28px, 5vw, 50px);
  line-height:1.1;
  color:#1f2a44;
  max-width:1100px;
}

/* ITALIC GREY TEXT */
.italic-grey{
  font-style: italic;
  color:#7a7a7a;
  position:relative;
}

/* STRIKE LINE */
.strike-wrap{
  position:relative;
  display:inline-block;
}

.strike-wrap::after{
  content:"";
  position:absolute;
  left:0;
  top:50%;
  width:100%;
  height:3px;
  background:#c62828;
  transform:translateY(-50%);
}

/* RED ITALIC */
.red-italic{
  color:#c62828;
  font-style: italic;
}

/* RESPONSIVE TUNING */
@media (max-width:1024px){
  .headline-wrap{
    padding:50px 30px;
  }
}

@media (max-width:768px){
  .headline{
    line-height:1.15;
  }
}

@media (max-width:480px){
  .headline-wrap{
    padding:40px 20px;
  }
}
</style>








-----------------------------------------------------------------------------------
<!-- ═══════════════ Bottleneck Risk Assessment ═══════════════ -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <title>Bottleneck Risk Assessment | Confidential</title>
  <style>
    /* ---------- RESET & BASE ---------- */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    :root {
      --bone: #F8F7F4;
      --ink: #1A1E2C;
      --crimson: #C8282C;
      --crimson-mist: #FFF2F2;
      --rule: #E6E8EC;
      --text: #2F3A4B;
      --text-soft: #5B6A7E;
      --mute: #8D9AAC;
      --ease: cubic-bezier(0.2, 0.9, 0.4, 1.1);
      --ease-emp: cubic-bezier(0.25, 0.46, 0.45, 0.94);
      --sans: 'Inter', system-ui, -apple-system, 'Segoe UI', Roboto, Helvetica, sans-serif;
     
    }



    body {
      font-family: var(--sans);
    
      line-height: 1.4;
      scroll-behavior: smooth;
    }

    .wrap {
      max-width: 1280px;
      margin: 0 auto;
      padding: 0 24px;
    }

    /* section spacing */
    .section {
      padding: 0 0 60px 0;
    }

    /* typography */
    .eyebrow {
      font-size: 11px;
      letter-spacing: 0.22em;
      text-transform: uppercase;
      font-weight: 600;
      color: var(--crimson);
      margin-bottom: 16px;
    }

    .eyebrow.muted {
      color: var(--mute);
    }

    .h2 {
      font-family: var(--serif);
      font-size: clamp(32px, 5vw, 52px);
      font-weight: 400;
      line-height: 1.2;
      letter-spacing: -0.02em;
      color: var(--ink);
    }

    .lead {
      font-size: 17px;
      line-height: 1.5;
      color: var(--text-soft);
      max-width: 780px;
      margin-top: 12px;
    }

    .it {
      font-style: italic;
      font-family: var(--serif);
    }

    /* buttons & interactive */
    .btn {
      display: inline-flex;
      align-items: center;
      gap: 12px;
      padding: 12px 28px;
      font-weight: 500;
      font-size: 15px;
      border-radius: 40px;
      text-decoration: none;
      transition: all 0.25s var(--ease);
      cursor: pointer;
      border: none;
      font-family: var(--sans);
      background: transparent;
    }

    .btn-primary {
      background: var(--crimson);
      color: white;
      box-shadow: 0 2px 6px rgba(200,40,44,0.2);
    }

    .btn-primary:hover {
      background: #b01f23;
      transform: translateY(-2px);
      box-shadow: 0 10px 20px -8px rgba(200,40,44,0.4);
    }

    /* assessment card */
    .assessment {
      background: var(--bone);
      position: relative;
      padding: clamp(40px, 6vw, 80px) 0 clamp(80px, 10vw, 140px);
    }

    .assessment-head {
      max-width: 860px;
      margin: 0 auto 48px;
      text-align: center;
    }

    .qz {
      max-width: 980px;
      margin: 0 auto;
      background: #fff;
      border: 1px solid var(--rule);
      border-radius: 28px;
      box-shadow: 0 20px 50px -20px rgba(14, 26, 53, 0.12);
      position: relative;
      overflow: hidden;
      transition: all 0.2s;
    }

    .qz-top {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 20px 32px;
      background: var(--ink);
      color: #fff;
      flex-wrap: wrap;
      gap: 12px;
    }

    .qz-tag {
      font-family: var(--sans);
      font-size: 11px;
      letter-spacing: 0.22em;
      text-transform: uppercase;
      font-weight: 600;
      display: inline-flex;
      align-items: center;
      gap: 10px;
    }

    .pulse {
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background: var(--crimson);
      position: relative;
    }

    .pulse::before {
      content: "";
      position: absolute;
      inset: -3px;
      border-radius: 50%;
      border: 1.5px solid var(--crimson);
      animation: ping 2s infinite;
    }

    @keyframes ping {
      0% { transform: scale(0.8); opacity: 0.8; }
      70% { transform: scale(1.5); opacity: 0; }
      100% { transform: scale(2); opacity: 0; }
    }

    .qz-step-counter {
      font-family: var(--serif);
      font-style: italic;
      font-weight: 300;
      font-size: 14px;
      color: rgba(255, 255, 255, 0.7);
    }

    .qz-step-counter strong {
      color: #fff;
      font-weight: 500;
      font-size: 20px;
      font-style: normal;
      font-family: var(--sans);
      letter-spacing: 0.02em;
    }

    .qz-progress {
      height: 3px;
      background: rgba(255, 255, 255, 0.12);
      position: relative;
      overflow: hidden;
    }

    .qz-progress-bar {
      position: absolute;
      top: 0;
      left: 0;
      bottom: 0;
      width: 0%;
      background: var(--crimson);
      transition: width 0.5s var(--ease);
    }

    .qz-stage {
      padding: clamp(36px, 5vw, 64px);
      min-height: 520px;
      display: flex;
      flex-direction: column;
    }

    .qz-panel {
      display: none;
      flex-direction: column;
      gap: 28px;
      animation: panel-in 0.5s var(--ease) both;
    }

    .qz-panel.active {
      display: flex;
    }

    @keyframes panel-in {
      from {
        opacity: 0;
        transform: translateY(16px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* intro meta row */
    .meta-row {
      display: flex;
      flex-wrap: wrap;
      gap: 28px;
      padding-top: 28px;
      border-top: 1px solid var(--rule);
      margin-top: 16px;
    }

    .meta-item {
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 13px;
      color: var(--text-soft);
    }

    .meta-item svg {
      width: 18px;
      height: 18px;
      color: var(--crimson);
      flex-shrink: 0;
    }

    /* question options */
    .qz-options {
      display: flex;
      flex-direction: column;
      gap: 12px;
      margin-top: 12px;
    }

    .qz-option {
      display: flex;
      align-items: flex-start;
      gap: 16px;
      padding: 18px 24px;
      border: 1px solid var(--rule);
      background: #fff;
      border-radius: 20px;
      text-align: left;
      font-size: 15px;
      line-height: 1.45;
      color: var(--text);
      cursor: pointer;
      transition: all 0.2s var(--ease);
    }

    .qz-option:hover {
      border-color: var(--ink);
      background: var(--bone);
      transform: translateX(6px);
    }

    .marker {
      width: 22px;
      height: 22px;
      border: 1.8px solid var(--rule);
      border-radius: 50%;
      flex-shrink: 0;
      transition: all 0.2s;
      margin-top: 2px;
    }

    .qz-option.selected {
      border-color: var(--crimson);
      background: var(--crimson-mist);
    }

    .qz-option.selected .marker {
      border-color: var(--crimson);
      background: var(--crimson);
      position: relative;
    }

    .qz-option.selected .marker::after {
      content: "";
      position: absolute;
      inset: 5px;
      background: white;
      border-radius: 50%;
    }

    /* form grid */
    .form-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 28px 32px;
      margin-top: 16px;
    }

    .field {
      display: flex;
      flex-direction: column;
      gap: 6px;
    }

    .field.full {
      grid-column: 1/-1;
    }

    .field label {
      font-size: 11px;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      font-weight: 600;
      color: var(--mute);
    }

    .field input {
      border: 0;
      border-bottom: 1.5px solid var(--rule);
      padding: 12px 0 8px;
      font-size: 16px;
      background: transparent;
      outline: none;
      color: var(--ink);
      transition: border 0.2s;
      width: 100%;
    }

    .field input:focus {
      border-bottom-color: var(--crimson);
    }

    .privacy {
      font-size: 12px;
      color: var(--mute);
      display: flex;
      align-items: flex-start;
      gap: 12px;
      padding-top: 18px;
      border-top: 1px solid var(--rule);
      margin-top: 8px;
    }

    /* loading ring */
    .qz-loading {
      align-items: center;
      text-align: center;
      justify-content: center;
    }

    .ring {
      width: 64px;
      height: 64px;
      border-radius: 50%;
      border: 2px solid var(--rule);
      border-top-color: var(--crimson);
      animation: spin 1s linear infinite;
      margin-bottom: 32px;
    }

    @keyframes spin {
      to {
        transform: rotate(360deg);
      }
    }

    .steps {
      list-style: none;
      display: flex;
      flex-direction: column;
      gap: 14px;
      text-align: left;
      max-width: 380px;
      margin: 28px auto 0;
    }

    .steps li {
      display: flex;
      align-items: center;
      gap: 12px;
      font-size: 14px;
      color: var(--mute);
    }

    .steps li.done {
      color: var(--ink);
    }

    .steps li .check {
      width: 20px;
      height: 20px;
      border: 1.5px solid var(--rule);
      border-radius: 50%;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-size: 10px;
      color: transparent;
    }

    .steps li.done .check {
      background: var(--crimson);
      border-color: var(--crimson);
      color: white;
    }

    /* result panel */
    .qz-result {
      padding: 0 !important;
    }

    .result-head {
      background: var(--ink);
      color: white;
      padding: 48px 32px;
      text-align: center;
      position: relative;
    }

    .gauge {
      position: relative;
      width: 220px;
      height: 120px;
      margin: 24px auto 0;
    }

    .gauge svg {
      width: 100%;
      height: 100%;
      overflow: visible;
    }

    .track {
      stroke: rgba(255, 255, 255, 0.2);
      stroke-width: 14;
      fill: none;
      stroke-linecap: round;
    }

    .progress {
      stroke: var(--crimson);
      stroke-width: 14;
      fill: none;
      stroke-linecap: round;
      stroke-dasharray: 283;
      stroke-dashoffset: 283;
      transition: stroke-dashoffset 1.2s var(--ease-emp);
    }

    .gnum {
      position: absolute;
      bottom: 12px;
      left: 0;
      right: 0;
      font-family: var(--serif);
      font-weight: 300;
      font-size: 44px;
      color: white;
    }

    .result-body {
      padding: 40px 40px 24px;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 40px;
    }

    .impact-list {
      list-style: none;
      display: flex;
      flex-direction: column;
      gap: 12px;
    }

    .impact-list li {
      font-size: 14px;
      padding-left: 22px;
      position: relative;
    }

    .impact-list li::before {
      content: "";
      position: absolute;
      left: 0;
      top: 0.65em;
      width: 8px;
      height: 1.5px;
      background: var(--crimson);
    }

    .result-cta {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
      gap: 20px;
      padding: 28px 40px 48px;
      border-top: 1px solid var(--rule);
    }

    .secondary {
      font-size: 13px;
      color: var(--mute);
    }

    /* navigation */
    .qz-nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 16px 32px 32px;
      background: white;
      border-top: 1px solid var(--rule);
    }

    .qz-nav button {
      background: transparent;
      border: none;
      font-family: var(--sans);
      font-weight: 500;
      font-size: 14px;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      cursor: pointer;
      padding: 10px 18px;
      transition: all 0.2s;
      color: var(--ink);
    }

    .qz-nav .next {
      background: var(--crimson);
      color: white;
      box-shadow: 0 2px 6px rgba(0,0,0,0.05);
    }

    .qz-nav .next:hover:not(:disabled) {
      background: #b01f23;
      transform: scale(1.02);
    }

    .qz-nav .back {
      border: 1px solid var(--rule);
      background: white;
    }

    .qz-nav .back:hover:not(:disabled) {
      border-color: var(--ink);
      background: var(--bone);
    }

    button:disabled {
      opacity: 0.5;
      cursor: not-allowed;
    }

    /* responsive breakpoints */
    @media (max-width: 780px) {
      .qz-stage {
        padding: 32px 24px;
      }
      .qz-top {
        padding: 16px 24px;
      }
      .result-body {
        grid-template-columns: 1fr;
        padding: 32px 28px;
        gap: 28px;
      }
      .result-cta {
        flex-direction: column;
        align-items: flex-start;
        padding: 24px 28px 40px;
      }
      .qz-nav {
        padding: 16px 24px 28px;
      }
      .qz-option {
        padding: 14px 20px;
      }
    }

    @media (max-width: 640px) {
      .wrap {
        padding: 0 20px;
      }
      .form-grid {
        grid-template-columns: 1fr;
        gap: 20px;
      }
      .meta-row {
        gap: 16px;
      }
      .qz-nav {
        flex-direction: column-reverse;
        gap: 14px;
        align-items: stretch;
      }
      .qz-nav button {
        justify-content: center;
      }
      .gauge {
        width: 180px;
        height: 100px;
      }
      .gnum {
        font-size: 36px;
        bottom: 4px;
      }
    }

    @media (max-width: 480px) {
      .qz-stage {
        padding: 24px 18px;
      }
      .qz-option {
        padding: 12px 16px;
        font-size: 14px;
      }
      .result-head {
        padding: 32px 20px;
      }
      .qz-top {
        flex-direction: column;
        align-items: flex-start;
      }
    }
	
	h3{
		color:#C8282C !important;
	}
	.btn.btn-primary {
  color: white !important;
}
  </style>
</head>
<body>
<section class="section assessment" id="assessment">
  <div class="wrap">
   

    <div class="qz" id="qz">
      <div class="qz-top">
        <span class="qz-tag"><span class="pulse"></span> CONFIDENTIAL ASSESSMENT</span>
        <div class="qz-step-counter"><strong id="stepNow">01</strong> &nbsp;/&nbsp; <span id="stepTotal">09</span></div>
      </div>
      <div class="qz-progress"><div class="qz-progress-bar" id="qzBar"></div></div>

      <div class="qz-stage" id="qzStage">
        <!-- INTRO panel -->
        <div class="qz-panel qz-intro active" data-panel="intro">
          <div class="eyebrow muted" style="color:var(--crimson)">Step 0 &nbsp;·&nbsp; Begin</div>
          <h3>Eight honest questions. One uncomfortable mirror.</h3>
          <p class="lead">This isn't a generic personality test. It's an operational stress-test built from
            14 years of helping Perth SMEs find what's actually holding them back.</p>
          <div class="meta-row">
            <div class="meta-item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 22s8-4 8-12V4l-8-2-8 2v6c0 8 8 12 8 12z"/></svg>100% confidential</div>
            <div class="meta-item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>Approx. 2 minutes</div>
            <div class="meta-item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><path d="M22 4L12 14.01l-3-3"/></svg>Personalised report by email</div>
          </div>
        </div>

        <!-- FORM panel -->
        <div class="qz-panel qz-form" data-panel="form">
          <div class="eyebrow muted" style="color:var(--crimson)">Step 09 &nbsp;·&nbsp; Almost there</div>
          <h3>Your bottleneck risk score is <em class="it" style="color:var(--crimson);font-weight:500">ready.</em></h3>
          <p class="form-lede">We're preparing your personalised operational risk report. Tell us where to send it.</p>
          <form class="form-grid" id="leadForm" novalidate>
            <div class="field"><label>Full Name <span class="req">*</span></label><input type="text" name="name" required autocomplete="name"></div>
            <div class="field"><label>Business Name <span class="req">*</span></label><input type="text" name="business" required autocomplete="organization"></div>
            <div class="field"><label>Email Address <span class="req">*</span></label><input type="email" name="email" required autocomplete="email"></div>
            <div class="field"><label>Phone (optional)</label><input type="tel" name="phone" autocomplete="tel"></div>
            <div class="privacy full"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>Your details are stored securely and only used to send your personalised report and an optional one-off follow-up. No marketing lists. No spam. Ever.</div>
          </form>
        </div>

        <!-- LOADING panel -->
        <div class="qz-panel qz-loading" data-panel="loading">
          <div class="ring"></div>
          <h3>Building your operational risk report&hellip;</h3>
          <p class="lead">Cross-referencing your answers against 14 years of Perth SME data.</p>
          <ul class="steps" id="loadSteps"><li><span class="check">✓</span><span>Mapping single-points-of-failure</span></li><li><span class="check">✓</span><span>Calculating dependency exposure</span></li><li><span class="check">✓</span><span>Modelling resignation impact</span></li><li><span class="check">✓</span><span>Generating your risk band</span></li></ul>
        </div>

        <!-- RESULT panel -->
        <div class="qz-panel qz-result" data-panel="result" style="padding:0;">
          <div class="result-head"><div class="label">Your bottleneck risk score</div><h3>You're at <span class="level" id="rLevel">Moderate</span> risk.</h3>
            <div class="gauge"><svg viewBox="0 0 200 110"><path class="track" d="M 20 100 A 80 80 0 0 1 180 100" /><path class="progress" id="gaugePath" d="M 20 100 A 80 80 0 0 1 180 100" pathLength="283" /></svg><div class="gnum"><span id="rScore">14</span><em>&thinsp;/&thinsp;24</em></div></div></div>
          <div class="result-body"><div><h4 id="rTitle">Your workflows rely on key people more than you realise.</h4><p id="rBody">Productivity, growth, and team performance are quietly being capped by a small number of indispensable individuals. The good news: this is the easiest stage to fix — before a resignation, illness, or burnout forces your hand.</p></div><div><h4 style="font-family: var(--sans); font-size: 11px; letter-spacing: .22em;">If left unaddressed</h4><ul class="impact-list" id="rImpact"><li>Project velocity drops 20–40% during any key absence.</li></ul></div></div>
          <div class="result-cta"><a href="" class="btn btn-primary">Book A Strategy Call</a><span class="secondary"><strong>A copy of your full report</strong> has been sent to your email.</span></div>
        </div>
      </div>

      <div class="qz-nav"><button class="back" id="qzBack" disabled><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>Back</button><button class="next" id="qzNext">Begin Assessment <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 5l7 7-7 7"/></svg></button></div>
    </div>
  </div>
</section>

<script>
  (function() {
    // ---------- QUESTION BANK ----------
    const QUESTIONS = [
      { cat:'Continuity', q:'If one of your key people disappeared for two weeks tomorrow, what would actually happen?', sub:'Be honest. Not what you tell investors — what would really happen.', options:[{t:'Work would continue smoothly. We have full coverage.', s:0},{t:'Some friction, but we\'d adapt within a few days.', s:1},{t:'Significant disruption — we\'d be in firefighting mode.', s:2},{t:'It would be a full-blown crisis. Things would break.', s:3}] },
      { cat:'Documentation', q:'How are your critical workflows currently documented?', sub:'SOPs, processes, the actual "how we do things" knowledge.', options:[{t:'Fully documented, version-controlled, accessible to the team.', s:0},{t:'Mostly documented, but inconsistent and out of date.', s:1},{t:'A few key things are written down. Most isn\'t.', s:2},{t:'Almost nothing is documented — it lives in people\'s heads.', s:3}] },
      { cat:'Decision flow', q:'When your team needs to make a meaningful decision, where does it usually land?', options:[{t:'Within the team — they\'re empowered with clear rules.', s:0},{t:'With one or two senior people, but it moves quickly.', s:1},{t:'On one person\'s plate — and there\'s usually a queue.', s:2},{t:'On my plate. Almost always. Even small things.', s:3}] },
      { cat:'Backup capability', q:'Could another employee confidently take over a critical role tomorrow?', options:[{t:'Yes — we cross-train deliberately.', s:0},{t:'For some roles, but not the most critical ones.', s:1},{t:'Honestly? Not really. They\'d struggle.', s:2},{t:'No. Some roles only one person can do, full stop.', s:3}] },
      { cat:'Approval bottleneck', q:'Are approvals slowing your business down right now?', options:[{t:'No — approval rules are clear and delegated.', s:0},{t:'Occasionally — usually for higher-value items only.', s:1},{t:'Yes — work waits in queues for someone\'s sign-off regularly.', s:2},{t:'Constantly. Approvals are the single biggest source of delay.', s:3}] },
      { cat:'Client impact', q:'Do clients ever experience delays when certain staff are unavailable?', options:[{t:'Never. Coverage is genuinely seamless.', s:0},{t:'Occasionally — minor and short.', s:1},{t:'Yes — and we\'ve had to apologise for it more than once.', s:2},{t:'Yes, and I suspect it\'s costing us repeat business.', s:3}] },
      { cat:'Knowledge centralisation', q:'Where does most of the critical business knowledge actually live?', options:[{t:'In our systems — anyone with access can find it.', s:0},{t:'Half in systems, half in people\'s heads.', s:1},{t:'Mostly in people\'s heads. We talk about fixing it.', s:2},{t:'Almost entirely in one or two people. We are exposed.', s:3}] },
      { cat:'Owner detachment', q:'Can you personally step away from the business for two weeks without anxiety?', sub:'A real holiday. Phone off. No "quick checks."', options:[{t:'Yes — it actually runs better when I disconnect.', s:0},{t:'Mostly, but I\'ll still check in once a day.', s:1},{t:'Not really. I haven\'t had a clean break in a long time.', s:2},{t:'No. The thought alone makes my chest tight.', s:3}] }
    ];

    const RESULTS = {
      low:{ threshold:7, level:'Low', title:'Your operational foundations are healthy.', body:'You\'ve avoided the most dangerous trap: total dependency on one person. There may still be areas quietly limiting how fast you can scale — but you\'re working from a position of structural strength, not exposure.', impact:['Your business can absorb a key absence without collapsing.','Knowledge transfer happens by design.','The next bottleneck is likely growth-related.','A small refinement could unlock noticeably more capacity.'] },
      mod:{ threshold:15, level:'Moderate', title:'Your workflows depend on key people more than you realise.', body:'You\'re past the danger zone but not yet in the clear. Productivity, growth, and team performance are quietly being capped by a small number of indispensable individuals. The good news: this is the easiest stage to fix — before a resignation, illness, or burnout forces your hand.', impact:['Project velocity drops 20–40% during any key absence.','Onboarding new staff takes 3× longer than it should.','Owner exhaustion compounds — usually before it\'s diagnosed.','One resignation = 6–12 weeks of operational drag.'] },
      high:{ threshold:24, level:'High', title:'Your business is dangerously dependent on specific people.', body:'One absence, resignation, or burnout event would create major operational disruption. The cracks are real, even if revenue is hiding them. This is the stage where the most expensive damage gets done. Acting now is exponentially cheaper than acting later.', impact:['A single resignation could trigger 3–6 months of operational chaos.','Your best people are likely already considering options.','Owner burnout is no longer a risk — it\'s an active condition.','Growth is structurally capped until dependency is removed.'] }
    };

    // ----- state -----
    let state = { idx: 0, answers: new Array(QUESTIONS.length).fill(null), score: 0 };
    const stage = document.getElementById('qzStage');
    const stepNow = document.getElementById('stepNow');
    const stepTotalSpan = document.getElementById('stepTotal');
    const bar = document.getElementById('qzBar');
    const nextBtn = document.getElementById('qzNext');
    const backBtn = document.getElementById('qzBack');

    const TOTAL_STEPS = QUESTIONS.length + 2; // intro + 8Qs + form (loading/result excluded)
    stepTotalSpan.textContent = String(TOTAL_STEPS).padStart(2,'0');

    // Inject question panels if missing
    if (!stage.querySelector('.qz-question')) {
      QUESTIONS.forEach((q, i) => {
        const panel = document.createElement('div');
        panel.className = 'qz-panel qz-question';
        panel.dataset.panel = `q${i}`;
        panel.innerHTML = `<span class="q-num">Question ${String(i+1).padStart(2,'0')} · ${q.cat}</span>
          <h4>${q.q}</h4>${q.sub ? `<p class="q-sub">${q.sub}</p>` : ''}
          <div class="qz-options">${q.options.map((o, oi) => `<button class="qz-option" data-q="${i}" data-s="${o.s}" data-oi="${oi}"><span class="marker"></span><span>${o.t}</span></button>`).join('')}</div>`;
        stage.insertBefore(panel, stage.querySelector('[data-panel="form"]'));
      });
    }

    // selection highlighting & update state
    function refreshSelectionForActive() {
      const active = document.querySelector('.qz-panel.active');
      if (!active || !active.classList.contains('qz-question')) return;
      const qIdx = parseInt(active.dataset.panel.slice(1), 10);
      const stored = state.answers[qIdx];
      if (stored !== null) {
        const btns = active.querySelectorAll('.qz-option');
        btns.forEach((btn, idx) => {
          if (idx === stored.oi) btn.classList.add('selected');
          else btn.classList.remove('selected');
        });
      } else {
        active.querySelectorAll('.qz-option').forEach(btn => btn.classList.remove('selected'));
      }
    }

    function syncNextButton() {
      const activeKey = currentPanelKey();
      if (activeKey.startsWith('q')) {
        const qIdx = parseInt(activeKey.slice(1), 10);
        nextBtn.disabled = state.answers[qIdx] === null;
      } else {
        nextBtn.disabled = false;
      }
    }

    function currentPanelKey() {
      return [...stage.children].find(p => p.classList.contains('active')).dataset.panel;
    }

    function setPanel(key) {
      stage.querySelectorAll('.qz-panel').forEach(p => p.classList.remove('active'));
      const target = stage.querySelector(`[data-panel="${key}"]`);
      if (target) target.classList.add('active');
      refreshSelectionForActive();
      updateHeaderAndBar();
      syncNextButton();
    }

    function updateHeaderAndBar() {
      const key = currentPanelKey();
      let stepNum = 1;
      if (key === 'intro') stepNum = 1;
      else if (key.startsWith('q')) stepNum = 2 + parseInt(key.slice(1), 10);
      else if (key === 'form') { stepNow.textContent = '—'; bar.style.width = '100%'; return; }
      else if (key === 'loading' || key === 'result') { stepNow.textContent = '—'; bar.style.width = '100%'; return; }
      stepNow.textContent = String(Math.min(stepNum, TOTAL_STEPS)).padStart(2,'0');
      const percent = ((stepNum - 1) / (TOTAL_STEPS - 1)) * 100;
      bar.style.width = `${percent}%`;
    }

    // event: option select
    stage.addEventListener('click', (e) => {
      const opt = e.target.closest('.qz-option');
      if (!opt) return;
      const q = parseInt(opt.dataset.q, 10);
      const s = parseInt(opt.dataset.s, 10);
      const oi = parseInt(opt.dataset.oi, 10);
      const parentOptions = opt.closest('.qz-options');
      parentOptions.querySelectorAll('.qz-option').forEach(b => b.classList.remove('selected'));
      opt.classList.add('selected');
      state.answers[q] = { s, oi };
      syncNextButton();
    });

    const ORDER = ['intro', ...QUESTIONS.map((_, i) => `q${i}`), 'form', 'loading', 'result'];

    async function runLoadingAndReveal() {
      const stepsLi = document.querySelectorAll('#loadSteps li');
      stepsLi.forEach(li => li.classList.remove('done'));
      for (let i = 0; i < stepsLi.length; i++) {
        await new Promise(r => setTimeout(r, 620));
        stepsLi[i].classList.add('done');
      }
      await new Promise(r => setTimeout(r, 380));
      // compute final score
      state.score = state.answers.reduce((acc, a) => acc + (a ? a.s : 0), 0);
      const scoreVal = state.score;
      let band;
      if (scoreVal <= RESULTS.low.threshold) band = RESULTS.low;
      else if (scoreVal <= RESULTS.mod.threshold) band = RESULTS.mod;
      else band = RESULTS.high;

      document.getElementById('rLevel').innerHTML = band.level;
      document.getElementById('rScore').innerText = scoreVal;
      document.getElementById('rTitle').innerText = band.title;
      document.getElementById('rBody').innerHTML = band.body;
      const impactUl = document.getElementById('rImpact');
      impactUl.innerHTML = band.impact.map(i => `<li>${i}</li>`).join('');

      const gaugePath = document.getElementById('gaugePath');
      const maxScore = 24;
      const ratio = Math.min(1, scoreVal / maxScore);
      const dashOffset = 283 - (283 * ratio);
      setTimeout(() => { gaugePath.style.strokeDashoffset = dashOffset; }, 100);
      if (band === RESULTS.low) gaugePath.style.stroke = '#2D8F3F';
      else if (band === RESULTS.mod) gaugePath.style.stroke = '#D98C16';
      else gaugePath.style.stroke = '#C8282C';
    }

    async function go(delta) {
      const curKey = currentPanelKey();
      let idx = ORDER.indexOf(curKey);
      const newIdx = Math.min(ORDER.length-1, Math.max(0, idx + delta));
      const nextKey = ORDER[newIdx];
      if (nextKey === 'loading') {
        setPanel('loading');
        await runLoadingAndReveal();
        setPanel('result');
        updateHeaderAndBar();
        backBtn.disabled = true;
        nextBtn.style.display = 'none';
        backBtn.style.visibility = 'hidden';
        return;
      }
      if (curKey === 'form' && delta === 1) {
        // validate lead form
        const form = document.getElementById('leadForm');
        const name = form.elements['name']?.value.trim();
        const business = form.elements['business']?.value.trim();
        const email = form.elements['email']?.value.trim();
        if (!name || !business || !email || !/^\S+@\S+\.\S+$/.test(email)) {
          ['name','business','email'].forEach(f => { const inp = form.elements[f]; if(!inp.value.trim()) inp.style.borderBottomColor = '#C8282C'; inp.addEventListener('input',()=> inp.style.borderBottomColor = '', {once:true}); });
          return;
        }
        // all good, compute score and continue to loading
      }
      setPanel(nextKey);
      if (nextKey === 'result') {
        nextBtn.style.display = 'none';
        backBtn.style.visibility = 'hidden';
      } else {
        nextBtn.style.display = 'inline-flex';
        if (nextKey !== 'intro') backBtn.style.visibility = 'visible';
      }
      if (nextKey === 'intro') backBtn.disabled = true;
      else backBtn.disabled = false;
      updateHeaderAndBar();
      syncNextButton();
    }

    nextBtn.addEventListener('click', () => go(1));
    backBtn.addEventListener('click', () => go(-1));

    function init() {
      setPanel('intro');
      backBtn.disabled = true;
      nextBtn.disabled = false;
      nextBtn.style.display = 'inline-flex';
      backBtn.style.visibility = 'visible';
    }
    init();
  })();
</script>
</body>
</html>










----------------------------------------------------------

<!-- ═══════════════ SOLUTION ═══════════════ -->


<section class="section solution" id="solution">
  <div class="wrap">


    <div class="sol-grid">

      <div class="sol-card reveal">
        <div class="icon-w">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><circle cx="12" cy="12" r="3"/><circle cx="12" cy="12" r="9"/><path d="M12 3v3M12 18v3M3 12h3M18 12h3"/></svg>
        </div>
        <h4>Bottleneck mapping</h4>
        <p>We trace every workflow, approval and information path until your operational dependency map is in front of you on a single page.</p>
      </div>

      <div class="sol-card reveal reveal-d2">
        <div class="icon-w">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M9 11l3 3 8-8M20 12v6a2 2 0 01-2 2H6a2 2 0 01-2-2V6a2 2 0 012-2h9"/></svg>
        </div>
        <h4>Process documentation</h4>
        <p>Critical workflows extracted from people's heads into clean, repeatable systems your team can actually follow on a Tuesday afternoon.</p>
      </div>

      <div class="sol-card reveal reveal-d3">
        <div class="icon-w">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><circle cx="9" cy="7" r="3"/><circle cx="17" cy="9" r="2.5"/><path d="M3 19c0-3 2.7-5 6-5s6 2 6 5M14 18c0-2 1.7-3.5 4-3.5s4 1.5 4 3.5"/></svg>
        </div>
        <h4>Cross-training &amp; redundancy</h4>
        <p>We rebuild the operational floor so that no single absence &mdash; sick day, leave, or resignation &mdash; can stop the business moving.</p>
      </div>

      <div class="sol-card reveal">
        <div class="icon-w">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M3 12l2-2 4 4 8-8 4 4M3 18h18"/></svg>
        </div>
        <h4>Approval &amp; decision design</h4>
        <p>We strip out the bottleneck approvals quietly draining productivity and replace them with rules-based delegation your people trust.</p>
      </div>

      <div class="sol-card reveal reveal-d2">
        <div class="icon-w">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 10h18M8 4v16"/></svg>
        </div>
        <h4>Knowledge architecture</h4>
        <p>A single source of truth for SOPs, suppliers, passwords, client history &mdash; so when someone walks out the door, the knowledge stays.</p>
      </div>

      <div class="sol-card reveal reveal-d3">
        <div class="icon-w">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M12 2v4M12 18v4M2 12h4M18 12h4M5 5l3 3M16 16l3 3M5 19l3-3M16 8l3-3"/></svg>
        </div>
        <h4>Owner-extraction plan</h4>
        <p>The most quiet relief of all: a structured plan to take you out of the daily firing line, without anything breaking when you do.</p>
      </div>

    </div>

    

  </div>
</section>


<style>
/* ═══════════════ SOLUTION SECTION ═══════════════ */

:root{
 
  --card:#FBFBFB;
  --hover:#F7F4EE;
  --border:#D8D3CB;
  --text:#1D1D1D;
  --muted:#6B6B6B;
  --navy:#192D55;
  --transition:.45s cubic-bezier(.22,.61,.36,1);
}

*{
  margin:0;
  padding:0;
  box-sizing:border-box;
}

body{
  font-family: "Inter", sans-serif;

}

/* SECTION */

.solution{
  width:100%;
  padding:80px 0;
  overflow:hidden;
}

.wrap{
  width:min(100%, 1400px);
  margin:auto;
  padding:0 20px;
}

/* GRID */

.sol-grid{
  display:grid;
  grid-template-columns:repeat(3,1fr);
  border-top:1px solid var(--border);
  border-left:1px solid var(--border);
}

/* CARD */

.sol-card{
  position:relative;
  padding:42px 38px;
  min-height:275px;
  background:var(--card);
  border-right:1px solid var(--border);
  border-bottom:1px solid var(--border);
  transition:background var(--transition),
             transform var(--transition),
             box-shadow var(--transition);
  overflow:hidden;
}

/* HOVER BACKGROUND */

.sol-card:hover{
  background:var(--hover);
}

/* ICON WRAPPER */

.icon-w{
  width:46px;
  height:46px;
  border:1.5px solid var(--navy);
  display:flex;
  align-items:center;
  justify-content:center;
  color:var(--navy);
  background:transparent;
  margin-bottom:28px;
  position:relative;
  overflow:hidden;
  transition:
    background var(--transition),
    border-radius var(--transition),
    transform var(--transition),
    color var(--transition);
}

/* ICON */

.icon-w svg{
  width:20px;
  height:20px;
  transition:
    transform .5s cubic-bezier(.22,.61,.36,1),
    stroke var(--transition);
  position:relative;
  z-index:2;
}

/* ICON HOVER */

.sol-card:hover .icon-w{
  background:var(--navy);
  border-radius:50%;
  transform:rotate(8deg) scale(1.06);
  color:#fff;
}

.sol-card:hover .icon-w svg{
  transform:scale(1.12) rotate(-8deg);
  stroke:#fff;
}

/* TITLE */

.sol-card h4{
  font-size:32px;
  line-height:1.2;
  font-weight:500;
  margin-bottom:20px;
  color:var(--text);
  font-family: "Cormorant Garamond", serif;
}

/* TEXT */

.sol-card p{
  font-size:17px;
  line-height:1.7;
  color:var(--muted);
  max-width:95%;
}

/* SUBTLE HOVER LINE */

.sol-card::before{
  content:"";
  position:absolute;
  top:0;
  left:0;
  width:0%;
  height:3px;
  background:var(--navy);
  transition:width .55s ease;
}

.sol-card:hover::before{
  width:100%;
}

/* REVEAL ANIMATION */

.reveal{
  opacity:0;
  transform:translateY(50px);
  transition:
    opacity .8s ease,
    transform .8s ease;
}

.reveal.active{
  opacity:1;
  transform:translateY(0);
}

/* STAGGER */

.reveal-d2{
  transition-delay:.15s;
}

.reveal-d3{
  transition-delay:.3s;
}

/* ═══════════════ RESPONSIVE ═══════════════ */

/* LARGE DESKTOP */

@media (max-width:1400px){

  .sol-card{
    min-height:260px;
  }

}

/* LAPTOP */

@media (max-width:1200px){

  .sol-card{
    padding:36px 30px;
  }

  .sol-card h4{
    font-size:28px;
  }

  .sol-card p{
    font-size:16px;
  }

}

/* TABLET LANDSCAPE */

@media (max-width:991px){

  .sol-grid{
    grid-template-columns:repeat(2,1fr);
  }

  .sol-card{
    min-height:auto;
  }

}

/* TABLET PORTRAIT */

@media (max-width:768px){

  .solution{
    padding:60px 0;
  }

  .wrap{
    padding:0 16px;
  }

  .sol-card{
    padding:34px 26px;
  }

  .sol-card h4{
    font-size:25px;
  }

  .sol-card p{
    font-size:15.5px;
    line-height:1.65;
  }

  .icon-w{
    width:44px;
    height:44px;
    margin-bottom:22px;
  }

}

/* MOBILE LANDSCAPE */

@media (max-width:640px){

  .sol-grid{
    grid-template-columns:1fr;
  }

}

/* MOBILE PORTRAIT */

@media (max-width:480px){

  .solution{
    padding:50px 0;
  }

  .sol-card{
    padding:30px 22px;
  }

  .sol-card h4{
    font-size:22px;
    margin-bottom:16px;
  }

  .sol-card p{
    font-size:15px;
  }

  .icon-w{
    width:42px;
    height:42px;
  }

}

</style>


<script>
/* ═══════════════ REVEAL ON SCROLL ═══════════════ */

const reveals = document.querySelectorAll('.reveal');

const revealOnScroll = () => {

  const triggerBottom = window.innerHeight * 0.88;

  reveals.forEach((item) => {

    const top = item.getBoundingClientRect().top;

    if(top < triggerBottom){
      item.classList.add('active');
    }

  });

};

window.addEventListener('scroll', revealOnScroll);
window.addEventListener('load', revealOnScroll);

/* ═══════════════ OPTIONAL HOVER SOUND-LIKE FEEL ═══════════════ */

const cards = document.querySelectorAll('.sol-card');

cards.forEach(card => {

  card.addEventListener('mouseenter', () => {
    card.style.transform = 'translateY(-4px)';
    card.style.boxShadow = '0 18px 35px rgba(0,0,0,0.05)';
  });

  card.addEventListener('mouseleave', () => {
    card.style.transform = 'translateY(0)';
    card.style.boxShadow = 'none';
  });

});
</script>