<section id="about-section">
  <h2 class="about-title">
    <span class="about-icon"><i class="fas fa-user-astronaut"></i></span>
    About Me
  </h2>
  <div class="about-desc">
    Passionate developer with a love for building, learning, and sharing. Here’s a glimpse of my journey so far.
    Click to know more
  </div>
  <div class="timeline-container">
    <div class="timeline-item">
      <div class="card">
        <h3>Born and Raised</h3>
        <span class="date">01//03//2005</span>
        <div class="card-detail">
          <p>Born in [City], where my passion for technology began early.</p>
        </div>
      </div>
    </div>
    <div class="timeline-item">
      <div class="card">
        <h3>First “Hello World”</h3>
        <span class="date">15//08//2017</span>
        <div class="card-detail">
          <p>Wrote my first program in HTML/CSS at age 12, sparking my journey in web development.</p>
        </div>
      </div>
    </div>
    <div class="timeline-item">
      <div class="card">
        <h3>High School Projects</h3>
        <span class="date">10//05//2020</span>
        <div class="card-detail">
          <p>Built small websites and scripts, refining skills in JavaScript and PHP.</p>
        </div>
      </div>
    </div>
    <div class="timeline-item timeline-end">
      <div class="card lock-card">
        <i class="fas fa-lock"></i>
      </div>
    </div>
  </div>
</section>
<div id="timeline-modal" class="timeline-modal">
  <div class="modal-content">
    <button class="modal-close" aria-label="Close"><i class="fas fa-times"></i></button>
    <h3 class="modal-title"></h3>
    <span class="modal-date"></span>
    <div class="modal-detail"></div>
    <button class="modal-ok">That's Good</button>
  </div>
</div>
<style>
#about-section {
  position: relative;
  padding: 4rem 1rem;
  background: linear-gradient(-45deg, #11213a, #0a0f2f, #11213a, #0a0f2f);
  background-size: 400% 400%;
  animation: darkGradient 20s ease infinite;
  color: #eef2f7;
  overflow: hidden;
}
#about-section::before,
#about-section::after {
  content: "";
  position: absolute;
  z-index: 0;
  pointer-events: none;
}
#about-section::before {
  top: 10%;
  left: 5%;
  width: 180px;
  height: 180px;
  background: radial-gradient(circle at 30% 30%, #64ffda55 0%, transparent 80%);
  filter: blur(12px);
  opacity: 0.7;
}
#about-section::after {
  bottom: 8%;
  right: 8%;
  width: 220px;
  height: 220px;
  background: radial-gradient(circle at 70% 70%, #a3a1ff44 0%, transparent 80%);
  filter: blur(18px);
  opacity: 0.6;
}

#about-section .material-shape {
  position: absolute;
  z-index: 1;
  opacity: 0.13;
  filter: blur(2px);
  pointer-events: none;
  animation: floatShape 18s ease-in-out infinite alternate;
}
#about-section .material-shape.shape1 {
  top: 18%; left: 18%; width: 90px; height: 90px;
  background: linear-gradient(135deg, #64ffda 0%, #a3a1ff 100%);
  border-radius: 32% 68% 70% 30% / 30% 30% 70% 70%;
  animation-delay: 0s;
}
#about-section .material-shape.shape2 {
  bottom: 12%; right: 20%; width: 120px; height: 120px;
  background: linear-gradient(135deg, #a3a1ff 0%, #64ffda 100%);
  border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%;
  animation-delay: 4s;
}
@keyframes floatShape {
  0% { transform: translateY(0) scale(1) rotate(0deg);}
  100% { transform: translateY(-40px) scale(1.08) rotate(18deg);}
}

.about-title {
  text-align: center;
  font-size: 2.8rem;
  font-weight: 900;
  letter-spacing: 0.04em;
  margin-bottom: 0.5rem;
  color: #fff;
  background: linear-gradient(90deg, #ffb347 0%, #64ffda 40%, #a3a1ff 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  text-shadow: 0 4px 32px #64ffda33, 0 2px 8px #0a0f2f;
  position: relative;
  opacity: 0;
  transform: translateY(40px) scale(0.92) rotateX(30deg);
  animation: aboutTitleIn 1.1s cubic-bezier(.23,1.02,.67,1.01) forwards 0.2s;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 1rem;
}
.about-title .about-icon {
  font-size: 2.2rem;
  color: #ffb347;
  filter: drop-shadow(0 0 12px #ffb34788);
  animation: iconPop 1.2s cubic-bezier(.23,1.02,.67,1.01) forwards 0.5s;
}
.about-title-text {
  display: inline-block;
  background: linear-gradient(90deg, #ffb347 0%, #64ffda 40%, #a3a1ff 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}
@keyframes aboutTitleIn {
  0% { opacity: 0; transform: translateY(40px) scale(0.92) rotateX(30deg);}
  70% { opacity: 1; transform: translateY(-8px) scale(1.04) rotateX(-8deg);}
  100% { opacity: 1; transform: translateY(0) scale(1) rotateX(0);}
}
@keyframes iconPop {
  0% { transform: scale(0.7) rotate(-30deg);}
  80% { transform: scale(1.15) rotate(10deg);}
  100% { transform: scale(1) rotate(0);}
}
.about-desc {
  text-align: center;
  font-size: 1.18rem;
  color: #ffb347;
  margin-bottom: 2.2rem;
  opacity: 0;
  transform: translateY(20px);
  animation: fadeInUp 1s ease forwards 0.7s;
  max-width: 520px;
  margin-left: auto;
  margin-right: auto;
  letter-spacing: 0.01em;
}

.timeline-container {
  position: relative;
  margin: 0 auto;
  padding: 2rem 0;
  width: 90%;
  max-width: 800px;
  z-index: 2;
}
.timeline-container::before {
  content: "";
  position: absolute;
  top: 0;
  left: 50%;
  width: 4px;
  height: 100%;
  background: rgba(100,255,218,0.4);
  transform: translateX(-50%);
  z-index: 0;
}
.timeline-item {
  position: relative;
  width: 50%;
  padding: 1rem 2rem;
  box-sizing: border-box;
  opacity: 0;
  perspective: 800px;
  z-index: 1;
}
.timeline-item:nth-child(odd) {
  left: 0;
  text-align: right;
}
.timeline-item:nth-child(even) {
  left: 50%;
  text-align: left;
}
.timeline-item::after {
  content: "";
  position: absolute;
  top: 1.2rem;
  width: 16px;
  height: 16px;
  border-radius: 50%;
  background: #64ffda;
  border: 4px solid #0a0f2f;
  box-shadow: 0 0 8px rgba(100,255,218,0.6);
  z-index: 2;
}
.timeline-item:nth-child(odd)::after {
  right: -8px;
}
.timeline-item:nth-child(even)::after {
  left: -8px;
}

.timeline-item .card {
  display: inline-block;
  background: rgba(30,39,73,0.85);
  border: 1px solid rgba(100,255,218,0.3);
  border-radius: 12px;
  padding: 1.2rem;
  max-width: 100%;
  box-shadow: 0 8px 24px rgba(0,0,0,0.4);
  transform: rotateY(15deg) translateY(20px);
  transform-origin: center;
  transition: transform 0.3s cubic-bezier(.23,1.02,.67,1.01), box-shadow 0.3s cubic-bezier(.23,1.02,.67,1.01);
  cursor: pointer;
  position: relative;
  min-width: 220px;
}
.timeline-item .card h3 {
  font-size: 1.25rem;
  margin-bottom: 0.2rem;
  color: #00ffe7;
  text-shadow: 1px 1px 6px rgba(0,0,0,0.6);
  pointer-events: none;
}
.timeline-item .card .date {
  display: block;
  font-size: 0.95rem;
  color: #a3a1ff;
  text-shadow: 1px 1px 4px rgba(0,0,0,0.5);
  margin-bottom: 0.2rem;
  pointer-events: none;
}
.timeline-item .card .card-detail {
  display: block;
  opacity: 1;
  margin-top: 0.7rem;
  color: #d0d8e8;
  font-size: 1rem;
  line-height: 1.4;
  transition: opacity 0.3s;
  animation: fadeInUp 0.5s;
}

.timeline-item .card:hover ~ .timeline-dot,
.timeline-item .card:focus ~ .timeline-dot,
.timeline-item .card:active ~ .timeline-dot {
  box-shadow: 0 0 24px 8px #ffb347cc, 0 0 16px 4px #64ffda99, 0 0 0 4px #fff2;
  background: #fff;
  border-color: #ffb347;
}
.timeline-item:hover::after,
.timeline-item:focus-within::after {
  box-shadow: 0 0 24px 8px #ffb347cc, 0 0 16px 4px #64ffda99, 0 0 0 4px #fff2;
  background: #fff;
  border-color: #ffb347;
}


.timeline-item.in-view {
  opacity: 1;
}
.timeline-item.in-view .card {
  animation: slideIn 0.8s cubic-bezier(.23,1.02,.67,1.01) forwards;
}
@keyframes slideInLeft {
  0% {
    opacity: 0;
    transform: rotateY(15deg) translateX(-50px) translateY(20px);
  }
  100% {
    opacity: 1;
    transform: rotateY(0deg) translateX(0) translateY(0);
  }
}
@keyframes slideInRight {
  0% {
    opacity: 0;
    transform: rotateY(-15deg) translateX(50px) translateY(20px);
  }
  100% {
    opacity: 1;
    transform: rotateY(0deg) translateX(0) translateY(0);
  }
}
.timeline-item:nth-child(odd).in-view .card {
  animation-name: slideInLeft;
}
.timeline-item:nth-child(even).in-view .card {
  animation-name: slideInRight;
}
@keyframes fadeInUp {
  0% { opacity: 0; transform: translateY(20px);}
  100% { opacity: 1; transform: translateY(0);}
}

.timeline-item.timeline-end {
  left: 50% !important;
  text-align: center !important;
  margin-top: 2.5rem;
  z-index: 3;
}
.timeline-item.timeline-end .card.lock-card {
  background: rgba(30,39,73,0.95);
  border: 2px solid #a3a1ff;
  box-shadow: 0 0 24px #a3a1ff55, 0 0 8px #64ffda55;
  display: flex;
  align-items: center;
  justify-content: center;
  min-width: 80px;
  min-height: 80px;
  font-size: 2.5rem;
  color: #a3a1ff;
  cursor: default;
  pointer-events: none;
  animation: lockPop 1.2s cubic-bezier(.23,1.02,.67,1.01) forwards 1.1s;
}
.timeline-modal {
  display: none;
  position: fixed;
  z-index: 9999;
  left: 0; top: 0; width: 100vw; height: 100vh;
  align-items: center;
  justify-content: center;
  perspective: 1200px;
  transition: background 0.3s;
}
.timeline-modal.open {
  display: flex;
  animation: modalIn 0.7s cubic-bezier(.23,1.02,.67,1.01) forwards;
}
@keyframes modalIn {
  0% { opacity: 0; transform: scale(0.8) rotateY(-180deg);}
  60% { opacity: 1; transform: scale(1.05) rotateY(20deg);}
  100% { opacity: 1; transform: scale(1) rotateY(0);}
}
.timeline-modal.closing {
  animation: modalOut 0.6s cubic-bezier(.23,1.02,.67,1.01) forwards;
}
@keyframes modalOut {
  0% { opacity: 1; transform: scale(1) rotateY(0);}
  100% { opacity: 0; transform: scale(0.8) rotateY(180deg);}
}
.modal-content {
  background: linear-gradient(135deg, #1e2749 80%, #64ffda22 100%);
  border-radius: 18px;
  box-shadow: 0 8px 48px #0a0f2f99, 0 0 0 2px #ffb34744;
  padding: 2.2rem 2.5rem 1.5rem 2.5rem;
  min-width: 320px;
  max-width: 95vw;
  min-height: 180px;
  position: relative;
  color: #fff;
  transform-style: preserve-3d;
  animation: modalContentIn 0.7s cubic-bezier(.23,1.02,.67,1.01) forwards;
}
@keyframes modalContentIn {
  0% { opacity: 0; transform: rotateY(-180deg);}
  100% { opacity: 1; transform: rotateY(0);}
}
.modal-title {
  font-size: 1.5rem;
  font-weight: 700;
  color: #ffb347;
  margin-bottom: 0.3rem;
}
.modal-date {
  display: block;
  color: #a3a1ff;
  font-size: 1.05rem;
  margin-bottom: 1.1rem;
}
.modal-detail {
  color: #d0d8e8;
  font-size: 1.08rem;
  margin-bottom: 1.7rem;
  line-height: 1.5;
}
.modal-close {
  position: absolute;
  top: 1.1rem;
  right: 1.1rem;
  background: none;
  border: none;
  color: #a3a1ff;
  font-size: 1.4rem;
  cursor: pointer;
  transition: color 0.2s;
  z-index: 2;
}
.modal-close:hover {
  color: #ffb347;
}
.modal-ok {
  display: inline-block;
  margin: 0 auto;
  padding: 0.6rem 1.6rem;
  background: linear-gradient(90deg, #64ffda 0%, #a3a1ff 100%);
  color: #0a0f2f;
  border: none;
  border-radius: 999px;
  font-weight: 700;
  font-size: 1.08rem;
  cursor: pointer;
  box-shadow: 0 2px 12px #64ffda44;
  transition: background 0.2s, color 0.2s;
}
.modal-ok:hover {
  background: linear-gradient(90deg, #ffb347 0%, #64ffda 100%);
  color: #fff;
}
.timeline-item::after {
  content: "";
  position: absolute;
  top: 1.2rem;
  width: 16px;
  height: 16px;
  border-radius: 50%;
  background: #64ffda;
  border: 4px solid #0a0f2f;
  box-shadow: 0 0 8px rgba(100,255,218,0.6);
  z-index: 2;
  transition: box-shadow 0.3s, background 0.3s, border-color 0.3s;
}
.timeline-item:nth-child(odd)::after {
  right: -8px;
}
.timeline-item:nth-child(even)::after {
  left: -8px;
}

@keyframes lockPop {
  0% { opacity: 0; transform: scale(0.7) rotate(-30deg);}
  80% { opacity: 1; transform: scale(1.15) rotate(10deg);}
  100% { opacity: 1; transform: scale(1) rotate(0);}
}

@media (max-width: 700px) {
  .timeline-item,
  .timeline-item:nth-child(odd),
  .timeline-item:nth-child(even) {
    width: 100%;
    left: 0 !important;
    text-align: left !important;
    padding-left: 1rem;
    padding-right: 1rem;
  }
  .timeline-container::before {
    left: 18px;
    transform: none;
  }
  .timeline-item::after {
    left: 0;
    right: auto;
  }
}
</style>

<div class="material-shape shape1"></div>
<div class="material-shape shape2"></div>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const items = document.querySelectorAll('#about-section .timeline-item');
    const options = {
      root: null,
      rootMargin: '0px',
      threshold: 0.3
    };
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('in-view');
        }
      });
    }, options);
    items.forEach(item => observer.observe(item));

    const modal = document.getElementById('timeline-modal');
    const modalTitle = modal.querySelector('.modal-title');
    const modalDate = modal.querySelector('.modal-date');
    const modalDetail = modal.querySelector('.modal-detail');
    const closeModal = () => {
      modal.classList.add('closing');
      setTimeout(() => {
        modal.classList.remove('open', 'closing');
      }, 600);
    };

    document.querySelectorAll('.timeline-item .card').forEach(card => {
      card.addEventListener('click', function(e) {
        if (card.classList.contains('lock-card')) return;
        const parent = card.closest('.timeline-item');
        modalTitle.textContent = parent.getAttribute('data-title') || card.querySelector('h3').textContent;
        modalDate.textContent = parent.getAttribute('data-date') || card.querySelector('.date').textContent;
        modalDetail.textContent = parent.getAttribute('data-detail') || card.querySelector('.card-detail').textContent;
        modal.classList.add('open');
        modal.classList.remove('closing');
      });
    });
    modal.querySelector('.modal-close').onclick = closeModal;
    modal.querySelector('.modal-ok').onclick = closeModal;
    modal.addEventListener('click', function(e) {
      if (e.target === modal) closeModal();
    });
    document.addEventListener('keydown', function(e) {
      if (modal.classList.contains('open') && (e.key === "Escape" || e.key === "Esc")) closeModal();
    });
  });
</script>
