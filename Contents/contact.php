<section id="contact-section">
  <h2 class="contact-title"><i class="material-icons">mail_outline</i> Get In Touch</h2>
  <div class="contact-container">
    <form id="contact-form" novalidate>
      <div class="form-field">
        <i class="material-icons field-icon">person</i>
        <input type="text" id="name" name="name" required placeholder=" " />
        <label for="name">Your Name</label>
        <span class="error-message" id="error-name"></span>
      </div>
      <div class="form-field">
        <i class="material-icons field-icon">email</i>
        <input type="email" id="email" name="email" required placeholder=" " />
        <label for="email">Your Email</label>
        <span class="error-message" id="error-email"></span>
      </div>
      <div class="form-field">
        <i class="material-icons field-icon">phone</i>
        <input type="tel" id="phone" name="phone" placeholder=" " />
        <label for="phone">Phone Number (optional)</label>
        <span class="error-message" id="error-phone"></span>
      </div>
      <div class="form-field">
        <i class="material-icons field-icon">subject</i>
        <select id="subject" name="subject" required>
          <option value="" disabled selected></option>
          <option>General Inquiry</option>
          <option>Project Quote</option>
          <option>Collaboration</option>
          <option>Other</option>
        </select>
        <label for="subject">Subject</label>
        <span class="error-message" id="error-subject"></span>
      </div>
      <div class="form-field">
        <i class="material-icons field-icon">message</i>
        <textarea id="message" name="message" rows="4" required placeholder=" "></textarea>
        <label for="message">Your Message</label>
        <span class="error-message" id="error-message"></span>
      </div>
      <button type="submit" class="submit-btn">Send Message</button>
      <div id="form-success" class="form-success-message"></div>
    </form>
  </div>
</section>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<style>
  #contact-section {
    padding: 4rem 1rem;
    background: linear-gradient(-45deg, #02102f, #04112f, #02102f, #04112f);
    background-size: 400% 400%;
    animation: gradientBG 15s ease infinite;
    perspective: 1000px;
    color: #eef2f7;
  }
  @keyframes gradientBG {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
  }
  .contact-title {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    text-align: center;
    font-size: 2.5rem;
    margin-bottom: 2rem;
    text-shadow: 2px 2px 8px rgba(0,0,0,0.6);
  }
  .contact-title .material-icons {
    font-size: 2.5rem;
    color: #64ffda;
  }

  .contact-container {
    display: flex;
    justify-content: center;
    perspective: 1200px;
  }
  #contact-form {
    background: rgba(30,39,73,0.85);
    border-radius: 16px;
    padding: 2rem;
    width: 100%;
    max-width: 500px;
    box-shadow: 0 12px 36px rgba(0,0,0,0.6);
    transform-style: preserve-3d;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }
  .form-field {
    position: relative;
    margin-bottom: 1.5rem;
  }
  .form-field .field-icon {
    position: absolute;
    top: 40%;
    left: 0.75rem;
    transform: translateY(-50%);
    color: #64ffda;
    pointer-events: none;
  }
  .form-field input,
  .form-field select,
  .form-field textarea {
    width: 100%;
    padding: 1rem 0.75rem 1rem 2.75rem;
    background: rgba(0,0,0,0.3);
    border: 1px solid rgba(100,255,218,0.3);
    border-radius: 8px;
    color: #eef2f7;
    font-size: 1rem;
    outline: none;
    transition: border 0.3s, background 0.3s;
  }
  .form-field select {
    appearance: none;
    cursor: pointer;
  }
  .form-field textarea {
    resize: vertical;
  }
  .form-field input:focus,
  .form-field select:focus,
  .form-field textarea:focus {
    border-color: #64ffda;
    background: rgba(0,0,0,0.5);
  }
  .form-field label {
    position: absolute;
    top: 40%;
    left: 2.75rem;
    transform: translateY(-50%);
    color: #a3a1ff;
    pointer-events: none;
    transition: all 0.3s ease;
  }
  .form-field input:focus + label,
  .form-field input:not(:placeholder-shown) + label,
  .form-field select:focus + label,
  .form-field select:not([value=""]) + label,
  .form-field textarea:focus + label,
  .form-field textarea:not(:placeholder-shown) + label {
    top: -0.5rem;
    font-size: 0.8rem;
    color: #64ffda;
  }

  .submit-btn {
    width: 100%;
    padding: 1rem;
    background: #64ffda;
    color: #0a0f2f;
    font-weight: bold;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    position: relative;
    overflow: hidden;
    transition: background 0.3s, transform 0.3s;
  }
  .submit-btn:hover {
    background: #52d9b0;
    transform: translateY(-2px);
  }
  .submit-btn:active {
    transform: translateY(0);
  }

  .error-message {
    display: block;
    color: #ff4d4f;
    font-size: 0.92rem;
    margin-top: 0.2rem;
    min-height: 1.1em;
    font-weight: 600;
    letter-spacing: 0.01em;
    transition: color 0.2s;
  }
  .form-success-message {
    display: none;
    margin-top: 1.5rem;
    background: linear-gradient(90deg, #64ffda 0%, #a3a1ff 100%);
    color: #0a0f2f;
    font-size: 1.15rem;
    font-weight: 700;
    border-radius: 8px;
    padding: 1.2rem 1rem;
    text-align: center;
    box-shadow: 0 4px 24px #64ffda44, 0 0 0 2px #a3a1ff33;
    animation: fadeInUp 0.7s;
  }
  .form-success-message.show {
    display: block;
  }
</style>

<script>
  const formEl = document.getElementById("contact-form");
  formEl.addEventListener("mousemove", e => {
    const rect = formEl.getBoundingClientRect();
    const dx = (e.clientX - rect.left) / rect.width - 0.5;
    const dy = (e.clientY - rect.top) / rect.height - 0.5;
    const tiltX = dy * 15;
    const tiltY = dx * -15;
    formEl.style.transform = `rotateX(${tiltX}deg) rotateY(${tiltY}deg)`;
    formEl.style.boxShadow = `${-dx*20}px ${dy*20}px 36px rgba(0,0,0,0.6)`;
  });
  formEl.addEventListener("mouseleave", () => {
    formEl.style.transform = `rotateX(0deg) rotateY(0deg)`;
    formEl.style.boxShadow = `0 12px 36px rgba(0,0,0,0.6)`;
  });

  document.querySelectorAll('.form-field input, .form-field textarea').forEach(el => {
    el.placeholder = " "; 
  });

  formEl.addEventListener("submit", function(e) {
    e.preventDefault();
    let valid = true;

    document.querySelectorAll('.error-message').forEach(el => el.textContent = "");

    const name = formEl.name.value.trim();
    if (!name) {
      valid = false;
      document.getElementById("error-name").textContent = "Please enter your name.";
    }

    const email = formEl.email.value.trim();
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!email) {
      valid = false;
      document.getElementById("error-email").textContent = "Please enter your email.";
    } else if (!emailPattern.test(email)) {
      valid = false;
      document.getElementById("error-email").textContent = "Please enter a valid email address.";
    }
    const phone = formEl.phone.value.trim();
    if (phone && !/^[\d\s\-\+\(\)]{7,}$/.test(phone)) {
      valid = false;
      document.getElementById("error-phone").textContent = "Please enter a valid phone number.";
    }

    const subject = formEl.subject.value;
    if (!subject) {
      valid = false;
      document.getElementById("error-subject").textContent = "Please select a subject.";
    }

    const message = formEl.message.value.trim();
    if (!message) {
      valid = false;
      document.getElementById("error-message").textContent = "Please enter your message.";
    }

    const successEl = document.getElementById("form-success");
    if (valid) {
      formEl.querySelector(".submit-btn").disabled = true;
      setTimeout(() => {
        formEl.reset();
        formEl.querySelector(".submit-btn").disabled = false;
        successEl.innerHTML = `
          <span style="font-size:2.2rem;display:block;margin-bottom:0.5rem;">&#10003;</span>
          <span>Your message was sent successfully.<br>We will contact you as soon as possible.</span>
        `;
        successEl.classList.add("show");
        setTimeout(() => { successEl.classList.remove("show"); }, 6000);
      }, 900);
    } else {
      successEl.classList.remove("show");
      successEl.innerHTML = "";
    }
  });
</script>
