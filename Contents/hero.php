<head>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-metro.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-win8.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    html {
      scroll-behavior: smooth;
    }
    a { 
        text-decoration: none;
    }
    body, html {
      width: 100%;
      height: 100%;
      cursor: auto; 
    }
    body {
      font-family: 'Poppins', sans-serif;
      color: #eef2f7;
      overflow-x: hidden;
      background: #0a0f2f;
      position: relative;
    }
    .sparkle {
      position: fixed;
      pointer-events: none;
      font-size: 1.2rem;
      opacity: 0.85;
      animation: sparkle-fade 0.8s forwards;
      z-index: 9999;
      will-change: transform, opacity;
      filter: drop-shadow(0 0 8px #fff);
    }
    @keyframes sparkle-fade {
      0% {
        opacity: 1;
        transform: scale(0.7) rotate(-10deg);
        filter: drop-shadow(0 0 8px #fff);
      }
      60% {
        opacity: 1;
        transform: scale(1.2) rotate(10deg);
        filter: drop-shadow(0 0 16px #64ffda);
      }
      100% {
        opacity: 0;
        transform: scale(1.8) translateY(-18px) rotate(30deg);
        filter: drop-shadow(0 0 0px #fff);
      }
    }

    .hero {
      position: relative;
      width: 100%;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      text-align: center;
      overflow: hidden;
    }

    @keyframes darkGradient {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }
    .hero::before {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(-45deg, #0a0f2f, #11254b, #0d1b3a, #0a0f2f);
      background-size: 400% 400%;
      animation: darkGradient 20s ease infinite;
      z-index: -3;
    }
    .hero::after {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0,0,0,0.4);
      z-index: -1; 
    }

    .scene {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      perspective: 800px;
      pointer-events: none;
      overflow: visible;
      z-index: -2; 
    }
    .cube {
      position: absolute;
      transform-style: preserve-3d;
      animation: rotateCube 10s linear infinite;
      opacity: 0.25;
    }
    .cube-face {
      position: absolute;
      width: 100%;
      height: 100%;
      background: linear-gradient(135deg, rgba(255,255,255,0.13) 0%, rgba(255,255,255,0.04) 100%);
      border: 1px solid rgba(255,255,255,0.18);
      box-shadow: 0 0 16px 2px rgba(100,255,218,0.08) inset;
      backdrop-filter: blur(1.5px);
      will-change: transform;
      transition: background 0.3s;
    }
    .face-front  { transform: rotateY(   0deg) translateZ(calc(var(--size)/2)); }
    .face-back   { transform: rotateY( 180deg) translateZ(calc(var(--size)/2)); }
    .face-right  { transform: rotateY(  90deg) translateZ(calc(var(--size)/2)); }
    .face-left   { transform: rotateY( -90deg) translateZ(calc(var(--size)/2)); }
    .face-top    { transform: rotateX(  90deg) translateZ(calc(var(--size)/2)); }
    .face-bottom { transform: rotateX( -90deg) translateZ(calc(var(--size)/2)); }
    @keyframes rotateCube {
      from { transform: rotateX(0deg) rotateY(0deg) translateZ(0); }
      to   { transform: rotateX(360deg) rotateY(360deg) translateZ(0); }
    }

    .profile-container {
      perspective: 800px;
      margin-bottom: 2.5rem;
      opacity: 0;
      transform: rotateY(90deg) scale(0.8);
      animation: profileFlipIn 1.2s cubic-bezier(.23,1.02,.67,1.01) forwards 0.3s;
      z-index: 1;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .profile-pic {
      width: 140px;
      height: 140px;
      border-radius: 50%;
      overflow: hidden;
      box-shadow: 0 8px 32px 0 #00ffe733, 0 2px 8px 0 #0008;
      border: 4px solid #11254b;
      background: #101a3a;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .profile-pic img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
      border-radius: 50%;
      transition: transform 0.5s cubic-bezier(.23,1.02,.67,1.01);
    }
    .profile-pic img:hover {
      transform: scale(1.07) rotate(-3deg);
    }
    @keyframes profileFlipIn {
      0% { opacity: 0; transform: rotateY(90deg) scale(0.8);}
      60% { opacity: 1; transform: rotateY(-10deg) scale(1.05);}
      80% { transform: rotateY(5deg) scale(0.98);}
      100% { opacity: 1; transform: rotateY(0deg) scale(1);}
    }

    .hero-text {
      opacity: 0;
      transform: rotateY(60deg) scale(0.8);
      animation: heroText3D 1.2s cubic-bezier(.23,1.02,.67,1.01) forwards 0.7s;
      z-index: 1;
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    @keyframes heroText3D {
      0% { opacity: 0; transform: rotateY(60deg) scale(0.8);}
      60% { opacity: 1; transform: rotateY(-10deg) scale(1.05);}
      80% { transform: rotateY(5deg) scale(0.98);}
      100% { opacity: 1; transform: rotateY(0deg) scale(1);}
    }
    .hero-text h1 {
      font-size: 2.5rem;
      font-weight: 700;
      color: #eef2f7;
      text-shadow: 2px 2px 8px rgba(0,0,0,0.6);
      margin-bottom: 0.75rem;
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }
    .hero-text h1 .name {
      font-weight: 900;
      letter-spacing: 1px;
      display: inline-block;
      cursor: pointer;
      position: relative;
    }
    .hero-text h1 .first {
      color: #00ffe7;
      text-shadow: 0 0 10px #00ffe7, 0 0 20px #00ffe744;
      transition: text-shadow 0.3s, color 0.3s;
    }
    .hero-text h1 .last {
      color: #a3a1ff;
      text-shadow: 0 0 10px #a3a1ff, 0 0 20px #a3a1ff44;
      transition: text-shadow 0.3s, color 0.3s;
    }
    .hero-text h1 .name:hover .first {
      text-shadow: 0 0 24px #00ffe7, 0 0 48px #00ffe7;
    }
    .hero-text h1 .name:hover .last {
      text-shadow: 0 0 24px #a3a1ff, 0 0 48px #a3a1ff;
    }

    .hero-text p {
      margin-top: 1.2rem;
      margin-bottom: 2.5rem;
      opacity: 0;
      transform: translateY(30px) scale(0.95);
      animation: subtitleFadeUp 1.1s cubic-bezier(.23,1.02,.67,1.01) forwards 1.2s;
      text-shadow: 1px 1px 6px rgba(0,0,0,0.5);
    }
    @keyframes subtitleFadeUp {
      0% { opacity: 0; transform: translateY(30px) scale(0.95);}
      100% { opacity: 1; transform: translateY(0) scale(1);}
    }


    .skills {
      display: flex;
      flex-wrap: wrap;
      gap: 1.2rem;
      justify-content: center;
      opacity: 1;
      margin-top: 0.5rem;
    }
    .skill-pill {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      padding: 0.5rem 1.2rem;
      border-radius: 999px;
      font-size: 0.95rem;
      font-weight: 600;
      cursor: default;
      background: linear-gradient(135deg, rgba(30,39,73,0.95) 60%, rgba(100,255,218,0.10) 100%);
      color: #eef2f7;
      box-shadow:
          0 2px 8px 0 rgba(0,255,231,0.10),
          0 1.5px 8px 0 rgba(163,161,255,0.10),
          0 0.5px 0.5px 0 #fff2 inset;
      border: 1.5px solid rgba(100,255,218,0.18);
      position: relative;
      transition:
          transform 0.45s cubic-bezier(.23,1.02,.67,1.01),
          box-shadow 0.45s cubic-bezier(.23,1.02,.67,1.01),
          filter 0.45s;
      transform-style: preserve-3d;
      perspective: 400px;
      opacity: 0;
      transform: scale3d(0.7,0.7,0.7) rotateY(60deg) rotateX(-30deg);
      animation: skillPop3D 0.9s cubic-bezier(.23,1.02,.67,1.01) forwards;
      will-change: transform, box-shadow, filter;
      overflow: hidden;
    }
    .skill-pill:nth-child(1) { animation-delay: 1.5s;}
    .skill-pill:nth-child(2) { animation-delay: 1.65s;}
    .skill-pill:nth-child(3) { animation-delay: 1.8s;}
    .skill-pill:nth-child(4) { animation-delay: 1.95s;}
    .skill-pill:nth-child(5) { animation-delay: 2.1s;}
    @keyframes skillPop3D {
      0% {
        opacity: 0;
        transform: scale3d(0.7,0.7,0.7) rotateY(60deg) rotateX(-30deg);
        filter: blur(4px);
      }
      60% {
        opacity: 1;
        transform: scale3d(1.08,1.08,1.08) rotateY(-10deg) rotateX(5deg);
        filter: blur(0);
      }
      80% {
        transform: scale3d(0.98,0.98,0.98) rotateY(5deg) rotateX(-2deg);
      }
      100% {
        opacity: 1;
        transform: scale3d(1,1,1) rotateY(0deg) rotateX(0deg);
        filter: blur(0);
      }
    }
    .skill-pill::before {
      content: "";
      position: absolute;
      left: 18%;
      top: 10%;
      width: 60%;
      height: 40%;
      background: linear-gradient(120deg, rgba(255,255,255,0.25) 0%, rgba(255,255,255,0.02) 100%);
      border-radius: 999px;
      filter: blur(2px);
      pointer-events: none;
      z-index: 1;
      opacity: 0.7;
      transform: rotate(-8deg);
      transition: opacity 0.4s;
    }
    .skill-pill:hover {
      transform: translateY(-8px) rotateY(-8deg) rotateX(4deg) scale(1.05);
      box-shadow:
          0 8px 24px 0 rgba(0,255,231,0.20),
          0 3px 12px 0 rgba(163,161,255,0.15),
          0 0 0 1px #fff3 inset,
          0 0 16px 6px rgba(100,255,218,0.3);
      filter: brightness(1.05) saturate(1.1) drop-shadow(0 0 8px #64ffda55);
      z-index: 2;
    }
    .skill-pill:hover::before {
      opacity: 1;
    }
    .skill-pill:active {
      transform: scale(0.97) rotateY(-2deg) rotateX(1deg);
      filter: brightness(0.98);
    }

    .skill-html i { color: #e44d26; }
    .skill-css i { color: #1572b6; }
    .skill-js i { color: #f7df1e; }
    .skill-php i { color: #7377ad; }
    .skill-mysql i { color: #00758f; }

    .skill-html {
      border-color: #e44d26cc;
      background: linear-gradient(135deg, #2d1e13 60%, #e44d2615 100%);
    }
    .skill-css {
      border-color: #1572b6cc;
      background: linear-gradient(135deg, #16213e 60%, #1572b615 100%);
    }
    .skill-js {
      border-color: #f7df1ecc;
      background: linear-gradient(135deg, #2d2a13 60%, #f7df1e15 100%);
    }
    .skill-php {
      border-color: #7377adcc;
      background: linear-gradient(135deg, #23243a 60%, #7377ad15 100%);
    }
    .skill-mysql {
      border-color: #00758fcc;
      background: linear-gradient(135deg, #13282d 60%, #00758f15 100%);
    }

    @keyframes fadeInUp {
      0% { opacity: 0; transform: translateY(20px); }
      100% { opacity: 1; transform: translateY(0); }
    }

    .scroll-icon {
      position: absolute;
      bottom: 20px;
      right: 20px;
      width: 40px;
      height: 40px;
      cursor: pointer;
      animation: bounce 2s infinite;
      z-index: 1;
    }
    .scroll-icon svg {
      width: 100%;
      height: 100%;
      fill: rgba(255,255,255,0.8);
    }
    @keyframes bounce {
      0%,20%,50%,80%,100% { transform: translateY(0); }
      40% { transform: translateY(-10px); }
      60% { transform: translateY(-5px); }
    }

    .socials {
      display: flex;
      justify-content: center;
      gap: 2.2rem;
      margin-top: 2.5rem;
      margin-bottom: 0.5rem;
      z-index: 2;
      position: relative;
    }

    .social-icon {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 54px;
      height: 54px;
      border-radius: 50%;
      font-size: 2rem;
      background: linear-gradient(135deg, #101a3a 60%, #23243a 100%);
      box-shadow: 0 4px 24px 0 #00ffe733, 0 1.5px 8px 0 #0008;
      color: #fff;
      transition:
        transform 0.35s cubic-bezier(.23,1.02,.67,1.01),
        box-shadow 0.35s cubic-bezier(.23,1.02,.67,1.01),
        background 0.35s,
        filter 0.35s;
      transform-style: preserve-3d;
      perspective: 400px;
      opacity: 0;
      transform: scale3d(0.7,0.7,0.7) rotateY(60deg) rotateX(-30deg);
      animation: socialPop3D 1s cubic-bezier(.23,1.02,.67,1.01) forwards;
      will-change: transform, box-shadow, filter;
      cursor: pointer;
      outline: none;
      border: none;
    }

    .social-icon:nth-child(1) { animation-delay: 2.3s; }
    .social-icon:nth-child(2) { animation-delay: 2.45s; }
    .social-icon:nth-child(3) { animation-delay: 2.6s; }
    @keyframes socialPop3D {
      0% {
        opacity: 0;
        transform: scale3d(0.7,0.7,0.7) rotateY(60deg) rotateX(-30deg);
        filter: blur(4px);
      }
      60% {
        opacity: 1;
        transform: scale3d(1.08,1.08,1.08) rotateY(-10deg) rotateX(5deg);
        filter: blur(0);
      }
      80% {
        transform: scale3d(0.98,0.98,0.98) rotateY(5deg) rotateX(-2deg);
      }
      100% {
        opacity: 1;
        transform: scale3d(1,1,1) rotateY(0deg) rotateX(0deg);
        filter: blur(0);
      }
    }
    .social-icon:hover, .social-icon:focus {
      transform: translateY(-10px) scale(1.13) rotateY(-12deg) rotateX(6deg);
      box-shadow:
        0 12px 32px 0 #00ffe755,
        0 4px 16px 0 #a3a1ff44,
        0 0 0 2px #fff3 inset,
        0 0 24px 8px #64ffda33;
      filter: brightness(1.12) saturate(1.2) drop-shadow(0 0 12px #64ffda88);
      z-index: 2;
    }

    .social-icon:active {
      transform: scale(0.97) rotateY(-2deg) rotateX(1deg);
      filter: brightness(0.98);
    }

    .social-icon.instagram i { color: #e1306c; }
    .social-icon.github i { color: #fff; }
    .social-icon.linkedin i { color: #0a66c2; }

    html, body {
      scrollbar-width: thin;
      scrollbar-color: #64ffda #101a3a;
    }

    ::-webkit-scrollbar {
      width: 13px;
      background: #101a3a;
      border-radius: 8px;
    }
    ::-webkit-scrollbar-thumb {
      background: linear-gradient(135deg, #64ffda 0%, #a3a1ff 100%);
      border-radius: 8px;
      min-height: 40px;
      box-shadow: 0 2px 8px #64ffda44;
      transition: background 0.3s, box-shadow 0.3s;
      border: 3px solid #101a3a;
      position: relative;
    }
    ::-webkit-scrollbar-thumb:hover {
      background: linear-gradient(135deg, #ffb347 0%, #64ffda 100%);
      box-shadow: 0 0 16px #ffb34788, 0 0 8px #64ffda88;
    }
    ::-webkit-scrollbar-thumb:active {
      background: linear-gradient(135deg, #a3a1ff 0%, #64ffda 100%);
      box-shadow: 0 0 24px #a3a1ff88, 0 0 12px #64ffda88;
    }
    ::-webkit-scrollbar-track {
      background: #101a3a;
      border-radius: 8px;
      box-shadow: inset 0 0 8px #0a0f2f;
    }

    @keyframes scrollbarShimmer {
      0% { box-shadow: 0 0 16px #64ffda44, 0 0 0 #fff0; }
      50% { box-shadow: 0 0 32px #64ffda99, 0 0 8px #fff4; }
      100% { box-shadow: 0 0 16px #64ffda44, 0 0 0 #fff0; }
    }
    ::-webkit-scrollbar-thumb {
      animation: scrollbarShimmer 2.2s infinite;
    }

    ::-webkit-scrollbar-thumb:hover {
      transform: scaleX(1.12);
    }

    html, body {
      scrollbar-width: thin;
      scrollbar-color: #64ffda #101a3a;
    }
  </style>
</head>
<body>
  <header class="hero">
    <div class="scene" id="scene">
      <div class="cube" style="--size: 60px;"></div>
      <div class="cube" style="--size: 80px;"></div>
      <div class="cube" style="--size: 100px;"></div>
      <div class="cube" style="--size: 50px;"></div>
      <div class="cube" style="--size: 70px;"></div>
      <div class="cube" style="--size: 90px;"></div>
      <div class="cube" style="--size: 40px;"></div>
      <div class="cube" style="--size: 110px;"></div>
    </div>

    <div class="profile-container">
      <div class="profile-pic">
        <img src="https://vedahaven.shop/Assets/Gallery/68485d17bdad2.jpg" alt="Vedant Padhiyar">
      </div>
    </div>
    <div class="hero-text">
      <h1>
        Hello, I am
        <span class="name">
          <span class="first">Vedant</span>
          <span class="last">Padhiyar</span>
        </span>
      </h1>
      <p>Full Stack Developer & Tech Enthusiast</p>
    </div>
    <section id="skills-section">
      <div class="skills">
        <div class="skill-pill skill-html">
          <i class="fab fa-html5"></i><span>HTML</span>
        </div>
        <div class="skill-pill skill-css">
          <i class="fab fa-css3-alt"></i><span>CSS</span>
        </div>
        <div class="skill-pill skill-js">
          <i class="fab fa-js-square"></i><span>JavaScript</span>
        </div>
        <div class="skill-pill skill-php">
          <i class="fab fa-php"></i><span>PHP</span>
        </div>
        <div class="skill-pill skill-mysql">
          <i class="fas fa-database"></i><span>MySQL</span>
        </div>
      </div>
      <div class="socials">
        <a href="https://instagram.com/" class="social-icon instagram" target="_blank" aria-label="Instagram">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="https://github.com/" class="social-icon github" target="_blank" aria-label="GitHub">
          <i class="fab fa-github"></i>
        </a>
        <a href="https://linkedin.com/" class="social-icon linkedin" target="_blank" aria-label="LinkedIn">
          <i class="fab fa-linkedin-in"></i>
        </a>
      </div>
    </section>

  </header>

<script>
    (function() {
      function placeCubes() {
        const cubes = document.querySelectorAll('.cube');
        const vw = window.innerWidth;
        const vh = window.innerHeight;
        cubes.forEach(cube => {
          const sizeRaw = cube.style.getPropertyValue('--size') || '60px';
          const size = parseInt(sizeRaw);
          if (cube.children.length === 0) {
            ['face-front','face-back','face-right','face-left','face-top','face-bottom'].forEach(cls => {
              const f = document.createElement('div');
              f.classList.add('cube-face', cls);
              cube.appendChild(f);
            });
          }
          const top = Math.random() * (vh - size);
          const left = Math.random() * (vw - size);
          cube.style.top = `${top}px`;
          cube.style.left = `${left}px`;
          cube.style.width = `${size}px`;
          cube.style.height = `${size}px`;
        });
      }
      window.addEventListener('DOMContentLoaded', placeCubes);
      window.addEventListener('resize', placeCubes);
    })();

    (function() {
      const profilePic = document.querySelector('.profile-pic img');
      if (profilePic) {
        profilePic.addEventListener('load', () => {
          document.querySelector('.profile-container').style.opacity = '1';
          document.querySelector('.profile-container').style.transform = 'rotateY(0deg) scale(1)';
        });
      }
    })();

    (function() {
      document.addEventListener('mousemove', function(e) {
        const sparkle = document.createElement('div');
        sparkle.className = 'sparkle';
        sparkle.style.left = (e.clientX) + 'px';
        sparkle.style.top = (e.clientY) + 'px';
        sparkle.textContent = '.'; // YAHA GOD VII LIKH SQTA HAI :)
        sparkle.style.transform = `translate(-50%, -50%) scale(${Math.random() * 0.5 + 0.5})`;
        document.body.appendChild(sparkle);
        setTimeout(() => sparkle.remove(), 1000);
      });
    })();

   
</script>
</body>
