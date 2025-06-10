<section id="projects-section">
  <h2 class="projects-title">
    <span class="projects-icon"><i class="fas fa-laptop-code"></i></span>
    <span class="projects-title-text">My Projects</span>
  </h2>
  <div class="projects-desc">
    Explore some of my favorite works.<br>
    <span class="projects-desc-note">Click any project to view more.</span>
  </div>
  <div class="projects-grid">
    <div class="project-card" 
      data-title="Project A"
      data-desc="A modern web dashboard for analytics and reporting."
      data-tech="HTML, CSS, JavaScript, Chart.js"
      data-type="Personal"
      data-link="https://example.com">
      <div class="card-inner">
        <img src="Gamma.png" alt="Project A screenshot">
        <div class="card-overlay">
          <h3>Project A</h3>
        </div>
      </div>
    </div>
    <div class="project-card" 
      data-title="Project B"
      data-desc="A portfolio website for a creative agency."
      data-tech="React, SCSS, GSAP"
      data-type="Client"
      data-link="https://example.com">
      <div class="card-inner">
        <img src="Gamma.png" alt="Project B screenshot">
        <div class="card-overlay">
          <h3>Project B</h3>
        </div>
      </div>
    </div>
    <div class="project-card" 
      data-title="Project C"
      data-desc="A real-time chat application with authentication."
      data-tech="Node.js, Socket.io, MongoDB"
      data-type="Personal"
      data-link="https://example.com">
      <div class="card-inner">
        <img src="Gamma.png" alt="Project C screenshot">
        <div class="card-overlay">
          <h3>Project C</h3>
        </div>
      </div>
    </div>
    <div class="project-card" 
      data-title="Project D"
      data-desc="E-commerce platform with payment integration."
      data-tech="PHP, MySQL, Stripe API"
      data-type="Client"
      data-link="https://example.com">
      <div class="card-inner">
        <img src="Gamma.png" alt="Project D screenshot">
        <div class="card-overlay">
          <h3>Project D</h3>
        </div>
      </div>
    </div>
    <div class="project-card" 
      data-title="Project E"
      data-desc="A productivity app for task and habit tracking."
      data-tech="Vue.js, Firebase"
      data-type="Personal"
      data-link="https://example.com">
      <div class="card-inner">
        <img src="Gamma.png" alt="Project E screenshot">
        <div class="card-overlay">
          <h3>Project E</h3>
        </div>
      </div>
    </div>
    <div class="project-card" 
      data-title="Project F"
      data-desc="Landing page for a SaaS startup."
      data-tech="Next.js, Tailwind CSS"
      data-type="Client"
      data-link="https://example.com">
      <div class="card-inner">
        <img src="Gamma.png" alt="Project F screenshot">
        <div class="card-overlay">
          <h3>Project F</h3>
        </div>
      </div>
    </div>
  </div>
  <div class="projects-cta-wrap">
    <button class="projects-cta">View More</button>
  </div>
</section>

<div id="project-modal" class="modal">
  <div class="modal-content">
    <button class="modal-close" aria-label="Close"><i class="fas fa-times"></i></button>
    <div class="modal-header">
      <h3 id="modal-title"></h3>
      <span id="modal-type" class="modal-type-label"></span>
    </div>
    <div id="modal-desc" class="modal-desc"></div>
    <div class="modal-meta">
      <div class="modal-tech-label">Tech Stack:</div>
      <div id="modal-tech" class="modal-tech-pills"></div>
    </div>
    <a id="modal-link" href="#" target="_blank" class="modal-link-btn">View Project</a>
  </div>
</div>

<style>
#projects-section {
  padding: 4rem 1rem;
  background: linear-gradient(-45deg, #11213a, #0a0f2f, #11213a, #0a0f2f);
  background-size: 400% 400%;
  animation: darkGradient 20s ease infinite;
  color: #eef2f7;
  position: relative;
  overflow: hidden;
}
@keyframes darkGradient {
  0% { background-position: 0% 50%; }
  50% { background-position: 100% 50%; }
  100% { background-position: 0% 50%; }
}

#floating-nav {
  z-index: 2000 !important;
}

.modal {
  z-index: 3000 !important;
  position: fixed;
  top: 0; left: 0;
  width: 100vw; height: 100vh;
  overflow-y: auto;
  pointer-events: auto;
}

#projects-section {
  position: relative;
  z-index: 1;
  padding-top: 6.5rem; 
}

.projects-title {
  text-align: center;
  font-size: 2.7rem;
  font-weight: 900;
  letter-spacing: 0.04em;
  margin-bottom: 0.5rem;
  background: linear-gradient(90deg, #ffb347 0%, #64ffda 40%, #a3a1ff 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  text-shadow: 0 4px 32px #64ffda33, 0 2px 8px #0a0f2f;
  opacity: 0;
  transform: translateY(40px) scale(0.92) rotateX(30deg);
  animation: projectsTitleIn 1.1s cubic-bezier(.23,1.02,.67,1.01) forwards 0.2s;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 1rem;
}
.projects-title .projects-icon {
  font-size: 2.2rem;
  color: #ffb347;
  filter: drop-shadow(0 0 12px #ffb34788);
  animation: iconPop 1.2s cubic-bezier(.23,1.02,.67,1.01) forwards 0.5s;
}
.projects-title-text {
  display: inline-block;
  background: inherit;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}
@keyframes projectsTitleIn {
  0% { opacity: 0; transform: translateY(40px) scale(0.92) rotateX(30deg);}
  70% { opacity: 1; transform: translateY(-8px) scale(1.04) rotateX(-8deg);}
  100% { opacity: 1; transform: translateY(0) scale(1) rotateX(0);}
}
@keyframes iconPop {
  0% { transform: scale(0.7) rotate(-30deg);}
  80% { transform: scale(1.15) rotate(10deg);}
  100% { transform: scale(1) rotate(0);}
}
.projects-desc {
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
.projects-desc-note {
  color: #a3a1ff;
  font-size: 1rem;
  display: block;
  margin-top: 0.5rem;
}
@keyframes fadeInUp {
  0% { opacity: 0; transform: translateY(20px);}
  100% { opacity: 1; transform: translateY(0);}
}

.projects-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 2.2rem;
  max-width: 1200px;
  margin: 0 auto;
  perspective: 1200px;
  perspective-origin: 50% 30%;
}
.project-card {
  perspective: 1000px;
  cursor: pointer;
  opacity: 0;
  transform: translateY(40px) scale(0.92) rotateX(30deg);
  animation: none;
  will-change: transform, box-shadow;
}
.project-card.in-view {
  animation: projectCardPopIn 0.9s cubic-bezier(.23,1.02,.67,1.01) forwards;
}
@keyframes projectCardPopIn {
  0% {
    opacity: 0;
    transform: translateY(40px) rotateX(20deg) scale(0.8);
  }
  60% {
    opacity: 1;
    transform: translateY(-8px) rotateX(-5deg) scale(1.05);
  }
  100% {
    opacity: 1;
    transform: translateY(0) rotateX(0deg) scale(1);
  }
}
.card-inner {
  position: relative;
  overflow: hidden;
  border-radius: 16px;
  box-shadow: 0 8px 24px rgba(0,0,0,0.4), 0 0 0 2px #64ffda33;
  transform-style: preserve-3d;
  transition: 
    transform 0.35s cubic-bezier(.23,1.02,.67,1.01),
    box-shadow 0.35s cubic-bezier(.23,1.02,.67,1.01);
  background: linear-gradient(135deg, #1e2749 80%, #64ffda22 100%);
}
.card-inner img {
  display: block;
  width: 100%;
  height: 200px;
  object-fit: cover;
  filter: brightness(0.98) contrast(1.08);
  transition: filter 0.3s;
}
.card-overlay {
  position: absolute;
  bottom: 0;
  width: 100%;
  background: linear-gradient(0deg, rgba(10,15,47,0.92) 80%, rgba(100,255,218,0.05) 100%);
  color: #eef2f7;
  padding: 0.85rem 1.2rem;
  transform: translateY(100%);
  transition: transform 0.35s cubic-bezier(.23,1.02,.67,1.01);
  text-align: left;
}
.project-card:hover .card-inner,
.project-card:focus .card-inner {
  box-shadow: 0 16px 48px rgba(0,0,0,0.7), 0 0 24px #64ffda55;
  transform: rotateY(8deg) scale(1.04);
}
.project-card:hover .card-overlay,
.project-card:focus .card-overlay {
  transform: translateY(0);
}
.project-card:active .card-inner {
  transform: scale(0.97) rotateY(-2deg);
}
.project-card:hover .card-inner img {
  filter: brightness(1.05) contrast(1.15);
}

.projects-cta-wrap {
  display: flex;
  justify-content: center;
  margin-top: 2.5rem;
}
.projects-cta {
  padding: 0.9rem 2.5rem;
  font-size: 1.25rem;
  font-weight: 800;
  border: none;
  border-radius: 999px;
  background: linear-gradient(90deg, #64ffda 0%, #a3a1ff 100%);
  color: #0a0f2f;
  box-shadow: 0 4px 24px #64ffda44, 0 0 0 2px #a3a1ff33;
  cursor: pointer;
  transition: background 0.25s, color 0.25s, transform 0.18s;
  letter-spacing: 0.04em;
  text-shadow: 0 2px 8px #fff8;
  position: relative;
  overflow: hidden;
}
.projects-cta:hover {
  background: linear-gradient(90deg, #ffb347 0%, #64ffda 100%);
  color: #fff;
  transform: scale(1.07) translateY(-2px);
  box-shadow: 0 8px 32px #ffb34744, 0 0 0 2px #64ffda33;
}
.projects-cta:active {
  transform: scale(0.97);
}

.modal {
  display: none;
  position: fixed;
  top: 0; left: 0;
  width: 100vw; height: 100vh;
  background: rgba(10,15,47,0.92);
  align-items: center;
  justify-content: center;
  z-index: 1000;
  perspective: 1200px;
  transition: background 0.3s;
}
.modal.show {
  display: flex;
  animation: modalIn 0.7s cubic-bezier(.23,1.02,.67,1.01) forwards;
}
@keyframes modalIn {
  0% { opacity: 0; transform: scale(0.8) rotateY(-180deg);}
  60% { opacity: 1; transform: scale(1.05) rotateY(20deg);}
  100% { opacity: 1; transform: scale(1) rotateY(0);}
}
.modal.closing {
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
  min-width: 340px;
  max-width: 95vw;
  min-height: 220px;
  position: relative;
  color: #fff;
  transform-style: preserve-3d;
  animation: modalContentIn 0.7s cubic-bezier(.23,1.02,.67,1.01) forwards;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}
@keyframes modalContentIn {
  0% { opacity: 0; transform: rotateY(-180deg);}
  100% { opacity: 1; transform: rotateY(0);}
}
.modal-header {
  display: flex;
  align-items: center;
  gap: 1.2rem;
  width: 100%;
  margin-bottom: 0.7rem;
}
#modal-title {
  font-size: 1.6rem;
  font-weight: 800;
  color: #ffb347;
  margin: 0;
  flex: 1;
  text-align: left;
  letter-spacing: 0.03em;
}
.modal-type-label {
  display: inline-block;
  padding: 0.32em 1.1em;
  font-size: 1rem;
  font-weight: 700;
  border-radius: 999px;
  margin-left: 0.5rem;
  background: linear-gradient(90deg, #64ffda 0%, #a3a1ff 100%);
  color: #0a0f2f;
  box-shadow: 0 2px 8px #64ffda33;
  letter-spacing: 0.03em;
  text-transform: uppercase;
}
.modal-type-label[data-type="Personal"] {
  background: linear-gradient(90deg, #ffb347 0%, #64ffda 100%);
  color: #0a0f2f;
}
.modal-type-label[data-type="Client"] {
  background: linear-gradient(90deg, #a3a1ff 0%, #64ffda 100%);
  color: #fff;
}
.modal-desc {
  font-size: 1.18rem;
  color: #fff;
  margin-bottom: 1.3rem;
  text-align: left;
  line-height: 1.6;
  font-weight: 500;
  letter-spacing: 0.01em;
  width: 100%;
}
.modal-meta {
  margin-bottom: 1.7rem;
  color: #a3a1ff;
  font-size: 1.08rem;
  line-height: 1.5;
  width: 100%;
}
.modal-tech-label {
  font-weight: 700;
  color: #64ffda;
  margin-bottom: 0.3rem;
}
.modal-tech-pills {
  display: flex;
  flex-wrap: wrap;
  gap: 0.6em;
  margin-top: 0.2em;
}
.modal-tech-pill {
  display: inline-block;
  padding: 0.32em 1.1em;
  font-size: 1rem;
  font-weight: 700;
  border-radius: 999px;
  background: linear-gradient(90deg, #1e2749 0%, #64ffda 100%);
  color: #64ffda;
  box-shadow: 0 2px 8px #64ffda33;
  letter-spacing: 0.03em;
  border: 1.5px solid #64ffda;
  transition: background 0.2s, color 0.2s;
}
.modal-tech-pill[data-tech*="HTML"] { background: linear-gradient(90deg, #e44d26 0%, #fff 100%); color: #fff; border-color: #e44d26;}
.modal-tech-pill[data-tech*="CSS"] { background: linear-gradient(90deg, #1572b6 0%, #fff 100%); color: #fff; border-color: #1572b6;}
.modal-tech-pill[data-tech*="JavaScript"] { background: linear-gradient(90deg, #f7df1e 0%, #fff 100%); color: #222; border-color: #f7df1e;}
.modal-tech-pill[data-tech*="React"] { background: linear-gradient(90deg, #61dafb 0%, #222 100%); color: #222; border-color: #61dafb;}
.modal-tech-pill[data-tech*="Node"] { background: linear-gradient(90deg, #3c873a 0%, #fff 100%); color: #fff; border-color: #3c873a;}
.modal-tech-pill[data-tech*="PHP"] { background: linear-gradient(90deg, #7377ad 0%, #fff 100%); color: #fff; border-color: #7377ad;}
.modal-tech-pill[data-tech*="MongoDB"] { background: linear-gradient(90deg, #13aa52 0%, #fff 100%); color: #fff; border-color: #13aa52;}
.modal-tech-pill[data-tech*="MySQL"] { background: linear-gradient(90deg, #00758f 0%, #fff 100%); color: #fff; border-color: #00758f;}
.modal-tech-pill[data-tech*="Vue"] { background: linear-gradient(90deg, #42b883 0%, #fff 100%); color: #fff; border-color: #42b883;}
.modal-tech-pill[data-tech*="Next"] { background: linear-gradient(90deg, #000 0%, #fff 100%); color: #fff; border-color: #000;}
.modal-tech-pill[data-tech*="Tailwind"] { background: linear-gradient(90deg, #38bdf8 0%, #fff 100%); color: #222; border-color: #38bdf8;}
.modal-tech-pill[data-tech*="SCSS"] { background: linear-gradient(90deg, #c6538c 0%, #fff 100%); color: #fff; border-color: #c6538c;}
.modal-tech-pill[data-tech*="GSAP"] { background: linear-gradient(90deg, #88ce02 0%, #fff 100%); color: #222; border-color: #88ce02;}
.modal-tech-pill[data-tech*="Firebase"] { background: linear-gradient(90deg, #ffcb2b 0%, #fff 100%); color: #222; border-color: #ffcb2b;}
.modal-tech-pill[data-tech*="Socket"] { background: linear-gradient(90deg, #010101 0%, #fff 100%); color: #fff; border-color: #010101;}
.modal-tech-pill[data-tech*="Stripe"] { background: linear-gradient(90deg, #635bff 0%, #fff 100%); color: #fff; border-color: #635bff;}

.modal-link-btn {
  display: inline-block;
  padding: 0.7rem 2.2rem;
  background: linear-gradient(90deg, #64ffda 0%, #a3a1ff 100%);
  color: #0a0f2f;
  border: none;
  border-radius: 999px;
  font-weight: 800;
  font-size: 1.08rem;
  cursor: pointer;
  box-shadow: 0 2px 12px #64ffda44, 0 0 0 2px #a3a1ff33;
  transition: background 0.22s, color 0.22s, transform 0.18s;
  letter-spacing: 0.04em;
  margin-top: 0.7rem;
  text-align: center;
  text-decoration: none;
}
.modal-link-btn:hover {
  background: linear-gradient(90deg, #ffb347 0%, #64ffda 100%);
  color: #fff;
  transform: scale(1.07) translateY(-2px);
  box-shadow: 0 8px 32px #ffb34744, 0 0 0 2px #64ffda33;
}
.modal-link-btn:active {
  transform: scale(0.97);
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

@media (max-width: 700px) {
  .projects-title {
    font-size: 2rem;
  }
  .projects-grid {
    grid-template-columns: 1fr;
    gap: 1.2rem;
  }
  .card-inner img {
    height: 140px;
  }
  .modal-content {
    padding: 1.2rem 0.7rem 1.2rem 0.7rem;
    min-width: 0;
  }
}
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
<script>
gsap.registerPlugin(ScrollTrigger);
gsap.utils.toArray(".project-card").forEach((card, i) => {
  ScrollTrigger.create({
    trigger: card,
    start: "top 85%",
    onEnter: () => card.classList.add("in-view")
  });
});

document.querySelectorAll(".project-card").forEach(card => {
  const inner = card.querySelector(".card-inner");
  card.addEventListener("mousemove", e => {
    const rect = card.getBoundingClientRect();
    const dx = (e.clientX - rect.left) / rect.width - 0.5;
    const dy = (e.clientY - rect.top) / rect.height - 0.5;
    const tiltX = dy * 15;
    const tiltY = dx * -15;
    inner.style.transform = `rotateX(${tiltX}deg) rotateY(${tiltY}deg) scale(1.05)`;
  });
  card.addEventListener("mouseleave", () => {
    inner.style.transform = `rotateX(0deg) rotateY(0deg) scale(1)`;
  });
  card.addEventListener("click", () => {
    const title = card.dataset.title;
    const desc = card.dataset.desc;
    const tech = card.dataset.tech;
    const type = card.dataset.type;
    const link = card.dataset.link;
    document.getElementById("modal-title").textContent = title;
    document.getElementById("modal-desc").textContent = desc;

    const techPills = tech.split(",").map(t => {
      const techName = t.trim();
      return `<span class="modal-tech-pill" data-tech="${techName}">${techName}</span>`;
    }).join("");
    document.getElementById("modal-tech").innerHTML = techPills;

    const typeLabel = document.getElementById("modal-type");
    typeLabel.textContent = type;
    typeLabel.setAttribute("data-type", type);

    const modalLink = document.getElementById("modal-link");
    modalLink.href = link;

    const modal = document.getElementById("project-modal");
    modal.style.display = "flex";
    modal.classList.remove("closing");
    requestAnimationFrame(() => modal.classList.add("show"));
  });
});

const modal = document.getElementById("project-modal");
modal.addEventListener("click", e => {
  if (
    e.target.classList.contains("modal") ||
    e.target.classList.contains("modal-close")
  ) {
    modal.classList.add("closing");
    setTimeout(() => {
      modal.classList.remove("show", "closing");
      modal.style.display = "none";
    }, 600);
  }
});
document.addEventListener("keydown", function(e) {
  if (modal.classList.contains("show") && (e.key === "Escape" || e.key === "Esc")) {
    modal.classList.add("closing");
    setTimeout(() => {
      modal.classList.remove("show", "closing");
      modal.style.display = "none";
    }, 600);
  }
});
</script>
