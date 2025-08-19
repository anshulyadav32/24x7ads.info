<?php include '../components/header.php'; ?>

<!-- Hero Section -->
<section class="bg-light py-5">
  <div class="container text-center">
    <h1 class="display-4 fw-bold mb-3">Affordable Plans for Every Business</h1>
    <p class="lead">Choose the perfect package to grow your business online</p>
  </div>
</section>

<!-- Pricing Section -->
<section class="py-5">
  <div class="container">
    <div class="row g-4 justify-content-center">
      
      <!-- Basic Plan -->
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 border-0 shadow-sm">
          <div class="card-body text-center p-4">
            <h3 class="card-title mb-3">Basic Plan</h3>
            <div class="display-6 fw-bold text-primary mb-3">₹15,000<small class="fs-6 text-muted">/month</small></div>
            <p class="text-muted mb-4">Perfect for small businesses getting started</p>
            <ul class="list-unstyled mb-4">
              <li class="mb-2">✓ Google Ads Setup & Management</li>
              <li class="mb-2">✓ 1 Social Media Platform</li>
              <li class="mb-2">✓ Monthly Performance Reports</li>
              <li class="mb-2">✓ Email Support</li>
              <li class="mb-2">✓ Basic Analytics Setup</li>
            </ul>
            <a href="contact.php" class="btn btn-outline-primary btn-lg w-100">Choose Plan</a>
          </div>
        </div>
      </div>

      <!-- Standard Plan -->
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 border-primary shadow-lg position-relative">
          <div class="badge bg-primary position-absolute top-0 start-50 translate-middle px-3 py-2">MOST POPULAR</div>
          <div class="card-body text-center p-4">
            <h3 class="card-title mb-3">Standard Plan</h3>
            <div class="display-6 fw-bold text-primary mb-3">₹30,000<small class="fs-6 text-muted">/month</small></div>
            <p class="text-muted mb-4">Best value for growing businesses</p>
            <ul class="list-unstyled mb-4">
              <li class="mb-2">✓ SEO + Google Ads</li>
              <li class="mb-2">✓ 2 Social Media Platforms</li>
              <li class="mb-2">✓ Website Optimization</li>
              <li class="mb-2">✓ Weekly Performance Reports</li>
              <li class="mb-2">✓ Phone & Email Support</li>
              <li class="mb-2">✓ Competitor Analysis</li>
              <li class="mb-2">✓ Lead Generation Setup</li>
            </ul>
            <a href="contact.php" class="btn btn-primary btn-lg w-100">Choose Plan</a>
          </div>
        </div>
      </div>

      <!-- Premium Plan -->
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 border-0 shadow-sm">
          <div class="card-body text-center p-4">
            <h3 class="card-title mb-3">Premium Plan</h3>
            <div class="display-6 fw-bold text-primary mb-3">₹50,000<small class="fs-6 text-muted">/month</small></div>
            <p class="text-muted mb-4">Complete digital marketing solution</p>
            <ul class="list-unstyled mb-4">
              <li class="mb-2">✓ Full Digital Marketing Suite</li>
              <li class="mb-2">✓ SEO + Google Ads + Social Media</li>
              <li class="mb-2">✓ Website Design & Management</li>
              <li class="mb-2">✓ WhatsApp & SMS Marketing</li>
              <li class="mb-2">✓ Dedicated Account Manager</li>
              <li class="mb-2">✓ Daily Performance Tracking</li>
              <li class="mb-2">✓ Priority Support (24x7)</li>
              <li class="mb-2">✓ Advanced Analytics & Reporting</li>
            </ul>
            <a href="contact.php" class="btn btn-outline-primary btn-lg w-100">Choose Plan</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Custom Solutions -->
    <div class="row mt-5">
      <div class="col-12">
        <div class="bg-light p-5 rounded text-center">
          <h3 class="mb-3">Need a Custom Solution?</h3>
          <p class="lead mb-4">We also offer custom packages tailored to your specific business needs and budget.</p>
          <a href="contact.php" class="btn btn-primary btn-lg">Request Custom Quote</a>
        </div>
      </div>
    </div>

    <!-- FAQ -->
    <div class="row mt-5">
      <div class="col-12">
        <h3 class="text-center mb-4">Frequently Asked Questions</h3>
        <div class="accordion" id="pricingFAQ">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                Can I change my plan anytime?
              </button>
            </h2>
            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#pricingFAQ">
              <div class="accordion-body">
                Yes, you can upgrade or downgrade your plan anytime. Changes take effect from the next billing cycle.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                Do you offer any discounts?
              </button>
            </h2>
            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#pricingFAQ">
              <div class="accordion-body">
                Yes, we offer 10% discount for annual payments and special rates for startups and non-profits.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                What's included in the setup?
              </button>
            </h2>
            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#pricingFAQ">
              <div class="accordion-body">
                All plans include initial setup, strategy development, and onboarding. No hidden fees or setup charges.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="py-5 bg-primary text-white">
  <div class="container text-center">
    <h2 class="mb-4">Ready to Get Started?</h2>
    <p class="lead mb-4">Choose your plan and start growing your business today!</p>
    <a href="contact.php" class="btn btn-light btn-lg">Get Free Consultation</a>
  </div>
</section>

<?php include '../components/footer.php'; ?>
