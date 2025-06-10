<footer id="site-footer">
  <div class="footer-content">
    <p>© 2025 <strong>Vedant Padhiyar</strong>. All rights reserved.</p>
    <p>Crafted with passion • Powered by innovation</p>
  </div>
</footer>

<style>
  #site-footer {
    background: #02102f;
    padding: 2rem 1rem;
    text-align: center;
    color: #a3a1ff;
    border-top: 1px solid rgba(100,255,218,0.2);
  }
  #site-footer .footer-content p {
    margin: 0.25rem 0;
    font-size: 0.9rem;
  }
  #site-footer .footer-content strong {
    color: #64ffda;
  }
  #site-footer {
    opacity: 0;
    transform: translateY(20px);
    animation: footerFadeIn 1s ease forwards 0.5s;
  }
  @keyframes footerFadeIn {
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }
</style>
