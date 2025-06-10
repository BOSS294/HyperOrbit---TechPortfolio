<nav id="floating-nav">
  <ul>
    <li class="nav-item active" data-label="Home">
      <i class="fas fa-home"></i>
    </li>
    <li class="nav-item" data-label="Projects">
      <i class="fas fa-folder-open"></i>
    </li>
    <li class="nav-item" data-label="About">
      <i class="fas fa-user"></i>
    </li>
    <li class="nav-item" data-label="Contact">
      <i class="fas fa-envelope"></i>
    </li>
  </ul>
</nav>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

<style>
  #floating-nav {
    position: fixed;
    top: 1rem;
    left: 50%;
    transform: translate(-50%, -200%);
    background: rgba(30,39,73,0.5);
    backdrop-filter: blur(10px);
    border-radius: 50px;
    padding: 0.5rem 1rem;
     z-index: 2000 !important;
    opacity: 0;
    animation: navDrop 0.6s ease-out forwards 0.3s;
  }
  @keyframes navDrop {
    to {
      transform: translate(-50%, 0);
      opacity: 1;
    }
  }

  #floating-nav.hidden {
    transform: translate(-50%, -120px) scale(0.95);
    opacity: 0;
    pointer-events: none;
  }
  #floating-nav ul {
    display: flex;
    gap: 1.5rem;
    list-style: none;
    margin: 0;
    padding: 0;
  }
  .nav-item {
    position: relative;
    cursor: pointer;
    width: 44px;
    height: 44px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }
  .nav-item i {
    font-size: 1.25rem;
    color: #eef2f7;
    transition: color 0.3s;
  }
  .nav-item::before {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    background: rgba(100,255,218,0.2);
    border-radius: 50%;
    transform: scale(0);
    transition: transform 0.3s ease;
  }
  .nav-item:hover::before {
    transform: scale(1);
  }
  .nav-item:hover {
    transform: translateY(-4px) scale(1.1);
    box-shadow: 0 8px 16px rgba(100,255,218,0.4);
  }
  .nav-item:hover i {
    color: #64ffda;
  }
  .nav-item::after {
    content: attr(data-label);
    position: absolute;
    bottom: -2.4rem;
    left: 50%;
    transform: translateX(-50%);
    background: rgba(0,0,0,0.8);
    color: #64ffda;
    padding: 0.25rem 0.5rem;
    border-radius: 4px;
    font-size: 0.75rem;
    white-space: nowrap;
    opacity: 0;
    pointer-events: none;
    transition: opacity 0.2s ease, transform 0.2s ease;
  }
  .nav-item:hover::after,
  .nav-item.active::after {
    opacity: 1;
    transform: translateX(-50%) translateY(-4px);
  }
  .nav-item.active i {
    color: #64ffda;
  }
  .nav-item.active::before {
    transform: scale(1);
    background: rgba(100,255,218,0.3);
  }
  .nav-item.active::after {
    opacity: 0 !important;
    pointer-events: none;
    transition-delay: 0s;
  }

  #floating-nav {
    transition: 
      transform 0.5s cubic-bezier(.23,1.02,.67,1.01),
      opacity 0.4s cubic-bezier(.23,1.02,.67,1.01);
  }
  #floating-nav.hidden {
    transform: translate(-50%, -120px) scale(0.95);
    opacity: 0;
    pointer-events: none;
  }
</style>

<script>
    //BUG TO BE FIXED 
  document.addEventListener('DOMContentLoaded', function() {
    (function() {
      let lastY = window.pageYOffset;
      const nav = document.getElementById('floating-nav');
      if (!nav) return; 
      let ticking = false;
      window.addEventListener('scroll', () => {
        if (!ticking) {
          window.requestAnimationFrame(() => {
            const currentY = window.pageYOffset;
            if (currentY > lastY && currentY > 20) {
              nav.classList.add('hidden');
            } else if (currentY < lastY) {
              nav.classList.remove('hidden');
            }
            lastY = currentY;
            ticking = false;
          });
          ticking = true;
        }
      });
    })();

    document.querySelectorAll('.nav-item').forEach(item => {
      item.addEventListener('click', () => {
        const current = document.querySelector('.nav-item.active');
        if (current && current !== item) current.classList.remove('active');
        item.classList.add('active');
      });
    });
  });
</script>
