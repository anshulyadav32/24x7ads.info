<?php include '../components/header.php'; ?>

<!-- Hero Section -->
<section class="bg-light py-5">
  <div class="container text-center">
    <h1 class="display-4 fw-bold mb-3">Let's Talk About Growing Your Business</h1>
    <p class="lead">Get in touch for a free consultation and discover how we can help you succeed online</p>
  </div>
</section>

<!-- Contact Section -->
<section class="py-5">
  <div class="container">
    <div class="row g-4">
      
      <!-- Contact Info -->
      <div class="col-lg-4">
        <div class="bg-light p-4 rounded h-100">
          <h3 class="mb-4">Get In Touch</h3>
          
          <div class="d-flex align-items-center mb-3">
            <i class="fas fa-phone text-primary me-3"></i>
            <div>
              <strong>Phone</strong><br>
              <a href="tel:+91-9876543210" class="text-decoration-none">+91-9876543210</a>
            </div>
          </div>
          
          <div class="d-flex align-items-center mb-3">
            <i class="fas fa-envelope text-primary me-3"></i>
            <div>
              <strong>Email</strong><br>
              <a href="mailto:info@24x7ads.info" class="text-decoration-none">info@24x7ads.info</a>
            </div>
          </div>
          
          <div class="d-flex align-items-center mb-3">
            <i class="fab fa-whatsapp text-primary me-3"></i>
            <div>
              <strong>WhatsApp</strong><br>
              <a href="https://wa.me/919876543210" class="text-decoration-none">Chat with us</a>
            </div>
          </div>
          
          <div class="d-flex align-items-start mb-4">
            <i class="fas fa-clock text-primary me-3 mt-1"></i>
            <div>
              <strong>Business Hours</strong><br>
              24x7 Support Available<br>
              <small class="text-muted">We're always here for you!</small>
            </div>
          </div>

          <div class="bg-primary text-white p-3 rounded">
            <h5 class="mb-2">FREE Consultation</h5>
            <p class="mb-0">Get a FREE digital marketing audit worth ₹5,000</p>
          </div>
        </div>
      </div>

      <!-- Contact Form -->
      <div class="col-lg-8">
        <div class="bg-white p-4 rounded shadow-sm">
          <h3 class="mb-4">Send Us a Message</h3>
          <form method="post" action="#">
            <div class="row g-3">
              <div class="col-md-6">
                <label for="name" class="form-label">Full Name *</label>
                <input type="text" class="form-control" id="name" name="name" required>
              </div>
              <div class="col-md-6">
                <label for="email" class="form-label">Email Address *</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>
              <div class="col-md-6">
                <label for="phone" class="form-label">Phone Number *</label>
                <input type="tel" class="form-control" id="phone" name="phone" required>
              </div>
              <div class="col-md-6">
                <label for="company" class="form-label">Company Name</label>
                <input type="text" class="form-control" id="company" name="company">
              </div>
              <div class="col-md-6">
                <label for="service" class="form-label">Service Interested In *</label>
                <select class="form-control" id="service" name="service" required>
                  <option value="">Select a Service</option>
                  <option value="seo">SEO Optimization</option>
                  <option value="google-ads">Google Ads (PPC)</option>
                  <option value="social-media">Social Media Marketing</option>
                  <option value="web-development">Web Development</option>
                  <option value="lead-generation">Lead Generation</option>
                  <option value="whatsapp-sms">WhatsApp & SMS Marketing</option>
                  <option value="all">All Services</option>
                </select>
              </div>
              <div class="col-md-6">
                <label for="budget" class="form-label">Monthly Budget</label>
                <select class="form-control" id="budget" name="budget">
                  <option value="">Select Budget Range</option>
                  <option value="under-15k">Under ₹15,000</option>
                  <option value="15k-30k">₹15,000 - ₹30,000</option>
                  <option value="30k-50k">₹30,000 - ₹50,000</option>
                  <option value="over-50k">Over ₹50,000</option>
                </select>
              </div>
              <div class="col-12">
                <label for="message" class="form-label">Tell Us About Your Business Goals</label>
                <textarea class="form-control" id="message" name="message" rows="4" placeholder="What are your main business objectives? What challenges are you facing? How can we help you grow?"></textarea>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-lg">Send Message & Get Free Audit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-5">Common Questions</h2>
    <div class="row">
      <div class="col-md-6">
        <div class="mb-4">
          <h5 class="text-primary">How quickly can I see results?</h5>
          <p>Google Ads can show results within 24-48 hours, while SEO typically takes 2-3 months for significant improvements.</p>
        </div>
        <div class="mb-4">
          <h5 class="text-primary">Do you work with small businesses?</h5>
          <p>Absolutely! We have affordable plans starting from ₹15,000/month specifically designed for small businesses.</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="mb-4">
          <h5 class="text-primary">What makes you different from other agencies?</h5>
          <p>Our 24x7 support, transparent reporting, and focus on ROI sets us apart. We're partners in your success, not just service providers.</p>
        </div>
        <div class="mb-4">
          <h5 class="text-primary">Do you provide reports?</h5>
          <p>Yes! We provide detailed monthly reports with all key metrics, insights, and recommendations for improvement.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include '../components/footer.php'; ?>
