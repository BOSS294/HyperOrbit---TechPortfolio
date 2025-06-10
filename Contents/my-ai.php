<head>

  <script type="module" src="https://unpkg.com/three@0.154.0/build/three.module.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
  <style>
    :root {
      --glass-bg: rgba(255,255,255,0.05);
      --glass-border: rgba(255,255,255,0.2);
      --neon: #08f7fe;
      --text-light: #f0f0f0;
      --font-primary: 'Poppins', sans-serif;
      --font-secondary: 'Roboto', sans-serif;
    }
    body { margin: 0; }
    .my-ai { position: fixed; bottom: 1.5rem; right: 1.5rem; z-index: 2000; }
    .chat-icon {
      width: 64px; height: 64px; cursor: pointer; display: block;
    }
    .chat-popup {
      display: none;
      width: 320px; max-height: 420px; height: 420px;
      position: fixed; bottom: 1.5rem; right: 1.5rem;
      background: var(--glass-bg); backdrop-filter: blur(12px);
      border: 1px solid var(--glass-border); border-radius: 1rem;
      flex-direction: column; overflow: hidden;
      transform: translateY(100%) scale(0.8); opacity: 0;
      transition: transform 0.4s ease, opacity 0.4s ease;
      display: flex;
    }
    .chat-popup.open {
      transform: translateY(0) scale(1); opacity: 1;
    }
    .robot-canvas {
      position: absolute; top: -60px; left: calc(50% - 40px);
      width: 80px; height: 80px; pointer-events: none;
    }
    .chat-header {
      display: flex; align-items: center; padding: 0.75rem 1rem;
      background: var(--glass-bg); border-bottom: 1px solid var(--glass-border);
    }
    .chat-header .avatar-small {
      width: 40px; height: 40px; border-radius: 50%;
      margin-right: 0.75rem; border: 2px solid var(--neon);
    }
    .chat-header .user-info {
      flex: 1; color: var(--text-light); font-family: var(--font-secondary);
    }
    .chat-header .name {
      font-family: var(--font-primary); font-weight: bold;
    }
    .chat-header .status {
      font-size: .85rem; color: rgb(77,242,82); font-weight: bolder;
    }
    .chat-header .version {
      font-size: .75rem; color: var(--text-light); opacity: .8;
    }
    .chat-header .close-btn {
      background: none; border: none; color: var(--text-light);
      font-size: 1.2rem; cursor: pointer;
    }
    .chat-messages {
      flex: 1; padding: 0.75rem; overflow-y: auto;
    }
    .msg { display: flex; margin-bottom: .75rem; }
    .msg.ai { justify-content: flex-start; }
    .msg.user { justify-content: flex-end; }
    .bubble {
      max-width: 70%; padding: .6rem .9rem; border-radius: 1rem;
      font-family: var(--font-secondary); font-size: .9rem; line-height: 1.4;
      position: relative;
    }
    .msg.ai .bubble {
      background: var(--glass-bg); border: 1px solid var(--glass-border);
      color: var(--text-light); border-top-left-radius: 0;
    }
    .msg.user .bubble {
      background: var(--neon); color: #050505; border-top-right-radius: 0;
    }
    .typing {
      display: flex; gap: 5px; margin: .5rem 0;
    }
    .typing .dot {
      width: 6px; height: 6px; background: var(--neon);
      border-radius: 50%; opacity: 0.3; animation: blink 1s infinite both;
    }
    @keyframes blink {
      0%, 80%, 100% { opacity: 0.3; }
      40% { opacity: 1; }
    }
    .bubble.typing-text {
      white-space: pre-wrap; overflow: hidden;
    }
    .chat-input {
      display: flex; padding: .5rem;
      border-top: 1px solid var(--glass-border);
      background: var(--glass-bg);
    }
    .chat-input input {
      flex: 1; padding: .6rem .8rem; border: 1px solid var(--glass-border);
      border-radius: 1rem; background: rgba(255,255,255,0.03);
      color: var(--text-light); font-family: var(--font-secondary);
      outline: none;
    }
    .chat-input button {
      margin-left: .5rem; padding: 0 1rem;
      background: var(--neon); border: none; border-radius: 1rem;
      color: #050505; font-family: var(--font-primary);
      cursor: pointer; transition: transform .2s;
    }
    .chat-input button:hover {
      transform: translateY(-2px) scale(1.05);
    }
  </style>
</head>

<body>
  <div class="my-ai">
    <canvas id="chatIconCanvas" class="chat-icon"></canvas>

    <div id="chatPopup" class="chat-popup">
      <canvas id="robotCanvas" class="robot-canvas"></canvas>
      <div class="chat-header">
        <img
          src="https://avatars.dicebear.com/api/bottts/cosmo.svg"
          class="avatar-small"
          alt="CosmoAI"
        />
        <div class="user-info">
          <div class="name">CosmoAI</div>
          <div class="version">Active | v2.0.0</div>
        </div>
        <button class="close-btn" id="chatClose">✕</button>
      </div>
      <div class="chat-messages" id="chatMessages">
        <div class="msg ai"><div class="bubble">Hello! I’m CosmoAI. How can I help you today?</div></div>
      </div>
      <div class="chat-input">
        <input type="text" id="chatInput" placeholder="Ask me anything..." />
        <button id="chatSend">Send</button>
      </div>
    </div>
  </div>

  <script type="module">
    import * as THREE from 'https://unpkg.com/three@0.154.0/build/three.module.js';

    (function(){
      const canvas = document.getElementById('chatIconCanvas');
      const renderer = new THREE.WebGLRenderer({ canvas, alpha:true });
      renderer.setSize(64,64);
      const scene = new THREE.Scene();
      const camera = new THREE.PerspectiveCamera(50,1,0.1,10);
      camera.position.z = 2;
      const sphere = new THREE.Mesh(
        new THREE.IcosahedronGeometry(0.8,0),
        new THREE.MeshBasicMaterial({ color: 0x08f7fe, wireframe:true })
      );
      scene.add(sphere);
      (function animate(){
        requestAnimationFrame(animate);
        sphere.rotation.x += 0.01;
        sphere.rotation.y += 0.015;
        renderer.render(scene, camera);
      })();
    })();

    (function(){
      const canvas = document.getElementById('robotCanvas');
      const renderer = new THREE.WebGLRenderer({ canvas, alpha:true });
      renderer.setSize(80,80);
      const scene = new THREE.Scene();
      const camera = new THREE.PerspectiveCamera(50,1,0.1,10);
      camera.position.z = 2;
      const cone = new THREE.Mesh(
        new THREE.ConeGeometry(0.7,1.2,16),
        new THREE.MeshBasicMaterial({ color:0x08f7fe, wireframe:true, transparent:true, opacity:0.5 })
      );
      scene.add(cone);
      (function animate(){
        requestAnimationFrame(animate);
        cone.rotation.y += 0.01;
        renderer.render(scene, camera);
      })();
    })();
  </script>

  <script>
    const icon    = document.getElementById('chatIconCanvas'),
          popup   = document.getElementById('chatPopup'),
          closeBtn= document.getElementById('chatClose'),
          messages= document.getElementById('chatMessages'),
          input   = document.getElementById('chatInput'),
          sendBtn = document.getElementById('chatSend');

    // Open/close
    icon.addEventListener('click', () => {
      popup.classList.add('open');
      icon.style.display = 'none';
    });
    closeBtn.addEventListener('click', () => {
      popup.classList.remove('open');
      icon.style.display = 'block';
    });

    function addBubble(text, cls){
      const msg = document.createElement('div');
      msg.className = `msg ${cls}`;
      msg.innerHTML = `<div class="bubble">${text}</div>`;
      messages.appendChild(msg);
      messages.scrollTop = messages.scrollHeight;
    }

    function showTyping(){
      const t = document.createElement('div');
      t.className = 'typing';
      t.innerHTML = '<div class="dot"></div><div class="dot"></div><div class="dot"></div>';
      messages.appendChild(t);
      messages.scrollTop = messages.scrollHeight;
      return t;
    }

    function sendUser(text){
      if(!text.trim()) return;
      addBubble(text, 'user');
      input.value = '';
      const typingEl = showTyping();
      fetch('Processors/chat.php', {
        method: 'POST',
        headers: {'Content-Type':'application/json'},
        body: JSON.stringify({ message: text })
      })
      .then(res => res.json())
      .then(data => {
        typingEl.remove();
        const bubble = document.createElement('div');
        bubble.className = 'msg ai';
        const txt = document.createElement('div');
        txt.className = 'bubble typing-text';
        bubble.appendChild(txt);
        messages.appendChild(bubble);
        messages.scrollTop = messages.scrollHeight;
        let i=0, reply = data.reply;
        const interval = setInterval(()=>{
          txt.textContent += reply[i++];
          messages.scrollTop = messages.scrollHeight;
          if(i>=reply.length) clearInterval(interval);
        },30);
      })
      .catch(()=>{
        typingEl.remove();
        addBubble('Sorry, an error occurred.', 'ai');
      });
    }

    sendBtn.addEventListener('click', ()=> sendUser(input.value));
    input.addEventListener('keydown', e=>{
      if(e.key==='Enter'){ e.preventDefault(); sendUser(input.value); }
    });

    document.querySelectorAll('.suggestion').forEach(el=>{
      el.addEventListener('click', ()=> sendUser(el.textContent));
    });
  </script>
</body>
</html>
