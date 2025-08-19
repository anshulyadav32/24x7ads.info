<?php include '../components/header.php'; ?>

<!-- Hero Section -->
<section class="bg-light py-5">
  <div class="container text-center">
    <h1 class="display-4 fw-bold mb-3">Our Results & Case Studies</h1>
    <p class="lead">Real businesses, measurable growth, proven strategies</p>
  </div>
</section>

<!-- Filter Navigation -->
<section class="py-3 bg-white shadow-sm sticky-top">
  <div class="container">
    <div class="d-flex justify-content-center">
      <div class="btn-group" role="group">
        <button type="button" class="btn btn-outline-primary active" data-filter="all">All Results</button>
        <button type="button" class="btn btn-outline-primary" data-filter="seo">SEO</button>
        <button type="button" class="btn btn-outline-primary" data-filter="ppc">PPC</button>
        <button type="button" class="btn btn-outline-primary" data-filter="social">Social Media</button>
        <button type="button" class="btn btn-outline-primary" data-filter="ecommerce">E-commerce</button>
        <button type="button" class="btn btn-outline-primary" data-filter="b2b">B2B</button>
        <button type="button" class="btn btn-outline-primary" data-filter="local">Local Business</button>
      </div>
    </div>
  </div>
</section>

<!-- Results Overview -->
<section class="py-5 bg-primary text-white">
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
        <h2 class="fw-bold mb-2">200+</h2>
        <p class="mb-0">Successful Campaigns</p>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
        <h2 class="fw-bold mb-2">₹50Cr+</h2>
        <p class="mb-0">Revenue Generated</p>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
        <h2 class="fw-bold mb-2">350%</h2>
        <p class="mb-0">Average ROI</p>
      </div>
      <div class="col-lg-3 col-md-6">
        <h2 class="fw-bold mb-2">95%</h2>
        <p class="mb-0">Client Retention Rate</p>
      </div>
    </div>
  </div>
</section>

<!-- Case Studies Grid -->
<section class="py-5">
  <div class="container">
    <div class="row g-4" id="portfolio-grid">
      
      <!-- Case Study 1: Local Restaurant SEO -->
      <div class="col-lg-6 portfolio-item" data-category="seo local">
        <div class="card border-0 shadow-sm h-100">
          <div class="card-body">
            <div class="d-flex align-items-center mb-3">
              <div class="bg-success text-white p-3 rounded-circle me-3">
                <i class="fas fa-utensils"></i>
              </div>
              <div>
                <h5 class="mb-0">Local Restaurant Chain</h5>
                <small class="text-muted">Food & Beverage • Local SEO</small>
              </div>
            </div>
            
            <div class="mb-3">
              <span class="badge bg-success mb-2">300% Sales Increase</span>
              <span class="badge bg-info mb-2">6 Months</span>
            </div>
            
            <h6 class="text-primary">Challenge:</h6>
            <p class="small mb-3">Multiple restaurant locations struggling with online visibility and declining foot traffic during COVID-19.</p>
            
            <h6 class="text-primary">Strategy:</h6>
            <ul class="small mb-3">
              <li>Local SEO optimization for all locations</li>
              <li>Google My Business management</li>
              <li>Location-specific content creation</li>
              <li>Online ordering optimization</li>
            </ul>
            
            <div class="row text-center mb-3">
              <div class="col-4">
                <h4 class="text-success fw-bold">300%</h4>
                <small class="text-muted">Online Orders</small>
              </div>
              <div class="col-4">
                <h4 class="text-success fw-bold">#1</h4>
                <small class="text-muted">Local Rankings</small>
              </div>
              <div class="col-4">
                <h4 class="text-success fw-bold">150%</h4>
                <small class="text-muted">Foot Traffic</small>
              </div>
            </div>
            
            <blockquote class="blockquote-footer small">
              "24x7ads transformed our online presence completely. We now dominate local searches." - <cite>Restaurant Owner</cite>
            </blockquote>
          </div>
        </div>
      </div>
      
      <!-- Case Study 2: E-commerce Fashion PPC -->
      <div class="col-lg-6 portfolio-item" data-category="ppc ecommerce">
        <div class="card border-0 shadow-sm h-100">
          <div class="card-body">
            <div class="d-flex align-items-center mb-3">
              <div class="bg-primary text-white p-3 rounded-circle me-3">
                <i class="fas fa-shopping-cart"></i>
              </div>
              <div>
                <h5 class="mb-0">Fashion E-commerce Brand</h5>
                <small class="text-muted">Fashion & Apparel • Google Ads</small>
              </div>
            </div>
            
            <div class="mb-3">
              <span class="badge bg-primary mb-2">420% ROAS</span>
              <span class="badge bg-warning mb-2">3 Months</span>
            </div>
            
            <h6 class="text-primary">Challenge:</h6>
            <p class="small mb-3">New fashion brand with high customer acquisition costs and low return on ad spend.</p>
            
            <h6 class="text-primary">Strategy:</h6>
            <ul class="small mb-3">
              <li>Google Shopping campaign optimization</li>
              <li>Dynamic remarketing setup</li>
              <li>Product feed optimization</li>
              <li>Landing page conversion optimization</li>
            </ul>
            
            <div class="row text-center mb-3">
              <div class="col-4">
                <h4 class="text-primary fw-bold">420%</h4>
                <small class="text-muted">ROAS</small>
              </div>
              <div class="col-4">
                <h4 class="text-primary fw-bold">-65%</h4>
                <small class="text-muted">Cost Per Sale</small>
              </div>
              <div class="col-4">
                <h4 class="text-primary fw-bold">₹18L</h4>
                <small class="text-muted">Monthly Revenue</small>
              </div>
            </div>
            
            <blockquote class="blockquote-footer small">
              "Our ad spend finally makes sense. ROI has never been better!" - <cite>Brand Manager</cite>
            </blockquote>
          </div>
        </div>
      </div>
      
      <!-- Case Study 3: B2B SaaS Lead Generation -->
      <div class="col-lg-6 portfolio-item" data-category="b2b seo">
        <div class="card border-0 shadow-sm h-100">
          <div class="card-body">
            <div class="d-flex align-items-center mb-3">
              <div class="bg-info text-white p-3 rounded-circle me-3">
                <i class="fas fa-laptop-code"></i>
              </div>
              <div>
                <h5 class="mb-0">B2B SaaS Platform</h5>
                <small class="text-muted">Technology • Inbound Marketing</small>
              </div>
            </div>
            
            <div class="mb-3">
              <span class="badge bg-info mb-2">450% Traffic Growth</span>
              <span class="badge bg-success mb-2">8 Months</span>
            </div>
            
            <h6 class="text-primary">Challenge:</h6>
            <p class="small mb-3">New SaaS platform with zero organic visibility competing in a saturated market.</p>
            
            <h6 class="text-primary">Strategy:</h6>
            <ul class="small mb-3">
              <li>Technical SEO foundation building</li>
              <li>Content marketing strategy</li>
              <li>Strategic link building campaign</li>
              <li>Lead nurturing automation</li>
            </ul>
            
            <div class="row text-center mb-3">
              <div class="col-4">
                <h4 class="text-info fw-bold">450%</h4>
                <small class="text-muted">Organic Traffic</small>
              </div>
              <div class="col-4">
                <h4 class="text-info fw-bold">85</h4>
                <small class="text-muted">Top 10 Keywords</small>
              </div>
              <div class="col-4">
                <h4 class="text-info fw-bold">₹2.5Cr</h4>
                <small class="text-muted">ARR Growth</small>
              </div>
            </div>
            
            <blockquote class="blockquote-footer small">
              "Incredible results in just 6 months. Our lead generation tripled." - <cite>Founder & CEO</cite>
            </blockquote>
          </div>
        </div>
      </div>
      
      <!-- Case Study 4: Healthcare Social Media -->
      <div class="col-lg-6 portfolio-item" data-category="social local">
        <div class="card border-0 shadow-sm h-100">
          <div class="card-body">
            <div class="d-flex align-items-center mb-3">
              <div class="bg-danger text-white p-3 rounded-circle me-3">
                <i class="fas fa-heartbeat"></i>
              </div>
              <div>
                <h5 class="mb-0">Dental Clinic Chain</h5>
                <small class="text-muted">Healthcare • Social Media Marketing</small>
              </div>
            </div>
            
            <div class="mb-3">
              <span class="badge bg-danger mb-2">280% Appointment Bookings</span>
              <span class="badge bg-info mb-2">4 Months</span>
            </div>
            
            <h6 class="text-primary">Challenge:</h6>
            <p class="small mb-3">Dental clinic struggling to attract younger demographics and build trust through digital channels.</p>
            
            <h6 class="text-primary">Strategy:</h6>
            <ul class="small mb-3">
              <li>Instagram & Facebook content strategy</li>
              <li>Patient success stories & testimonials</li>
              <li>Educational content creation</li>
              <li>Social media advertising campaigns</li>
            </ul>
            
            <div class="row text-center mb-3">
              <div class="col-4">
                <h4 class="text-danger fw-bold">280%</h4>
                <small class="text-muted">Bookings</small>
              </div>
              <div class="col-4">
                <h4 class="text-danger fw-bold">50K</h4>
                <small class="text-muted">Followers</small>
              </div>
              <div class="col-4">
                <h4 class="text-danger fw-bold">25%</h4>
                <small class="text-muted">Engagement Rate</small>
              </div>
            </div>
            
            <blockquote class="blockquote-footer small">
              "Our Instagram became our biggest lead source. Patients love our content." - <cite>Practice Manager</cite>
            </blockquote>
          </div>
        </div>
      </div>
      
      <!-- Case Study 5: Manufacturing B2B -->
      <div class="col-lg-6 portfolio-item" data-category="b2b ppc">
        <div class="card border-0 shadow-sm h-100">
          <div class="card-body">
            <div class="d-flex align-items-center mb-3">
              <div class="bg-secondary text-white p-3 rounded-circle me-3">
                <i class="fas fa-industry"></i>
              </div>
              <div>
                <h5 class="mb-0">Industrial Equipment Manufacturer</h5>
                <small class="text-muted">Manufacturing • B2B Lead Generation</small>
              </div>
            </div>
            
            <div class="mb-3">
              <span class="badge bg-secondary mb-2">125% Pipeline Growth</span>
              <span class="badge bg-warning mb-2">12 Months</span>
            </div>
            
            <h6 class="text-primary">Challenge:</h6>
            <p class="small mb-3">Traditional manufacturer needing digital transformation with complex B2B sales cycles.</p>
            
            <h6 class="text-primary">Strategy:</h6>
            <ul class="small mb-3">
              <li>LinkedIn advertising campaigns</li>
              <li>Technical content marketing</li>
              <li>Trade show digital integration</li>
              <li>Account-based marketing</li>
            </ul>
            
            <div class="row text-center mb-3">
              <div class="col-4">
                <h4 class="text-secondary fw-bold">125%</h4>
                <small class="text-muted">Pipeline Growth</small>
              </div>
              <div class="col-4">
                <h4 class="text-secondary fw-bold">-35%</h4>
                <small class="text-muted">Sales Cycle</small>
              </div>
              <div class="col-4">
                <h4 class="text-secondary fw-bold">22</h4>
                <small class="text-muted">Enterprise Deals</small>
              </div>
            </div>
            
            <blockquote class="blockquote-footer small">
              "Finally a marketing partner who understands B2B complexity." - <cite>Chief Revenue Officer</cite>
            </blockquote>
          </div>
        </div>
      </div>
      
      <!-- Case Study 6: E-learning Platform -->
      <div class="col-lg-6 portfolio-item" data-category="ecommerce social">
        <div class="card border-0 shadow-sm h-100">
          <div class="card-body">
            <div class="d-flex align-items-center mb-3">
              <div class="bg-warning text-white p-3 rounded-circle me-3">
                <i class="fas fa-graduation-cap"></i>
              </div>
              <div>
                <h5 class="mb-0">Online Education Platform</h5>
                <small class="text-muted">EdTech • Multi-Channel Marketing</small>
              </div>
            </div>
            
            <div class="mb-3">
              <span class="badge bg-warning mb-2">200% Student Enrollment</span>
              <span class="badge bg-success mb-2">6 Months</span>
            </div>
            
            <h6 class="text-primary">Challenge:</h6>
            <p class="small mb-3">Online course platform competing with established players and high customer acquisition costs.</p>
            
            <h6 class="text-primary">Strategy:</h6>
            <ul class="small mb-3">
              <li>Content marketing & SEO strategy</li>
              <li>YouTube channel optimization</li>
              <li>Facebook & Instagram advertising</li>
              <li>Email marketing automation</li>
            </ul>
            
            <div class="row text-center mb-3">
              <div class="col-4">
                <h4 class="text-warning fw-bold">200%</h4>
                <small class="text-muted">Enrollments</small>
              </div>
              <div class="col-4">
                <h4 class="text-warning fw-bold">-40%</h4>
                <small class="text-muted">CAC</small>
              </div>
              <div class="col-4">
                <h4 class="text-warning fw-bold">₹1.2Cr</h4>
                <small class="text-muted">Revenue</small>
              </div>
            </div>
            
            <blockquote class="blockquote-footer small">
              "Our marketing ROI improved dramatically. Best investment we made." - <cite>Co-Founder</cite>
            </blockquote>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</section>

<!-- Industry Success Metrics -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="mb-3">Success Across Industries</h2>
      <p class="lead text-muted">Proven results in every vertical</p>
    </div>
    <div class="row g-4">
      <div class="col-lg-3 col-md-6">
        <div class="card border-0 shadow-sm h-100 text-center">
          <div class="card-body">
            <i class="fas fa-store text-primary mb-3" style="font-size: 48px;"></i>
            <h5 class="card-title">E-commerce</h5>
            <h3 class="text-primary fw-bold">385%</h3>
            <p class="text-muted">Average ROAS</p>
            <small class="text-muted">Based on 50+ campaigns</small>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="card border-0 shadow-sm h-100 text-center">
          <div class="card-body">
            <i class="fas fa-laptop-code text-success mb-3" style="font-size: 48px;"></i>
            <h5 class="card-title">B2B/SaaS</h5>
            <h3 class="text-success fw-bold">-45%</h3>
            <p class="text-muted">CAC Reduction</p>
            <small class="text-muted">Based on 30+ clients</small>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="card border-0 shadow-sm h-100 text-center">
          <div class="card-body">
            <i class="fas fa-map-marker-alt text-warning mb-3" style="font-size: 48px;"></i>
            <h5 class="card-title">Local Business</h5>
            <h3 class="text-warning fw-bold">250%</h3>
            <p class="text-muted">Lead Increase</p>
            <small class="text-muted">Based on 75+ businesses</small>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="card border-0 shadow-sm h-100 text-center">
          <div class="card-body">
            <i class="fas fa-heartbeat text-danger mb-3" style="font-size: 48px;"></i>
            <h5 class="card-title">Healthcare</h5>
            <h3 class="text-danger fw-bold">180%</h3>
            <p class="text-muted">Patient Growth</p>
            <small class="text-muted">Based on 25+ clinics</small>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Client Testimonials -->
<section class="py-5">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="mb-3">What Our Clients Say</h2>
      <p class="lead text-muted">Trusted by businesses across India</p>
    </div>
    <div class="row g-4">
      <div class="col-lg-4 col-md-6">
        <div class="card border-0 shadow-sm h-100">
          <div class="card-body text-center">
            <div class="mb-3">
              <i class="fas fa-quote-left text-primary fa-2x"></i>
            </div>
            <p class="mb-4">"24x7ads doesn't just run campaigns—they become an extension of your team. Their strategic thinking and execution is outstanding."</p>
            <div class="d-flex align-items-center justify-content-center">
              <div class="text-warning me-2">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <span class="small">5.0</span>
            </div>
            <div class="mt-3">
              <h6 class="mb-0">Priya Sharma</h6>
              <small class="text-muted">CEO, TechFlow Solutions</small>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="card border-0 shadow-sm h-100">
          <div class="card-body text-center">
            <div class="mb-3">
              <i class="fas fa-quote-left text-primary fa-2x"></i>
            </div>
            <p class="mb-4">"The ROI we achieved with 24x7ads exceeded all expectations. Their data-driven approach delivers real business results."</p>
            <div class="d-flex align-items-center justify-content-center">
              <div class="text-warning me-2">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <span class="small">5.0</span>
            </div>
            <div class="mt-3">
              <h6 class="mb-0">Rajesh Kumar</h6>
              <small class="text-muted">Marketing Director, GreenEarth Foods</small>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="card border-0 shadow-sm h-100">
          <div class="card-body text-center">
            <div class="mb-3">
              <i class="fas fa-quote-left text-primary fa-2x"></i>
            </div>
            <p class="mb-4">"Professional, responsive, and results-oriented. They transformed our digital presence completely within 6 months."</p>
            <div class="d-flex align-items-center justify-content-center">
              <div class="text-warning me-2">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <span class="small">5.0</span>
            </div>
            <div class="mt-3">
              <h6 class="mb-0">Dr. Anjali Mehta</h6>
              <small class="text-muted">Founder, WellCare Clinics</small>
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
    <h2 class="mb-4">Ready to Be Our Next Success Story?</h2>
    <p class="lead mb-4">Join 200+ businesses that have transformed their growth with our proven strategies.</p>
    <div class="d-flex flex-wrap justify-content-center gap-3">
      <a href="contact.php" class="btn btn-light btn-lg">Get Free Strategy Session</a>
      <a href="pricing.php" class="btn btn-outline-light btn-lg">View Packages</a>
    </div>
  </div>
</section>

<!-- Portfolio Filter JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('[data-filter]');
    const portfolioItems = document.querySelectorAll('.portfolio-item');

    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const filter = this.getAttribute('data-filter');
            
            // Update active button
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            
            // Filter items
            portfolioItems.forEach(item => {
                if (filter === 'all' || item.getAttribute('data-category').includes(filter)) {
                    item.style.display = 'block';
                    item.style.animation = 'fadeIn 0.5s ease-in-out';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
});

// Add CSS animation
const style = document.createElement('style');
style.textContent = `
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .portfolio-item {
        transition: all 0.3s ease;
    }
    .sticky-top {
        z-index: 1020;
    }
`;
document.head.appendChild(style);
</script>

<?php include '../components/footer.php'; ?>

<!-- Hero Section -->
<section class="bg-light py-5">
  <div class="container text-center">
    <h1 class="display-4 fw-bold mb-3">Our Success Stories</h1>
    <p class="lead">Real results for real businesses - see how we've helped our clients grow</p>
  </div>
</section>

<!-- Case Studies Section -->
<section class="py-5">
  <div class="container">
    
    <!-- Case Study 1 -->
    <div class="row align-items-center mb-5 pb-5 border-bottom">
      <div class="col-lg-6">
        <div class="bg-success text-white p-4 rounded mb-3">
          <h3 class="mb-0">300% Sales Increase</h3>
        </div>
        <h2 class="mb-3">Local Restaurant Tripled Sales with SEO</h2>
        <p class="lead mb-3"><strong>Challenge:</strong> Local restaurant struggling with online visibility and foot traffic.</p>
        <p class="mb-3"><strong>Solution:</strong> Comprehensive local SEO strategy with Google My Business optimization and content marketing.</p>
        <p class="mb-4"><strong>Results:</strong> 300% increase in online orders, #1 ranking for local keywords, 150% more foot traffic.</p>
        <a href="contact.php" class="btn btn-primary">Start Your Success Story</a>
      </div>
      <div class="col-lg-6">
        <div class="bg-light p-4 rounded">
          <h5 class="mb-3">Key Metrics:</h5>
          <div class="row text-center">
            <div class="col-6 mb-3">
              <h4 class="text-primary fw-bold">300%</h4>
              <p class="mb-0">Sales Increase</p>
            </div>
            <div class="col-6 mb-3">
              <h4 class="text-primary fw-bold">#1</h4>
              <p class="mb-0">Google Ranking</p>
            </div>
            <div class="col-6">
              <h4 class="text-primary fw-bold">150%</h4>
              <p class="mb-0">More Foot Traffic</p>
            </div>
            <div class="col-6">
              <h4 class="text-primary fw-bold">90</h4>
              <p class="mb-0">Days to Results</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Case Study 2 -->
    <div class="row align-items-center mb-5 pb-5 border-bottom">
      <div class="col-lg-6">
        <div class="bg-warning text-dark p-4 rounded mb-3">
          <h3 class="mb-0">500% ROI on Google Ads</h3>
        </div>
        <h2 class="mb-3">E-commerce Store Boosted ROI with Google Ads</h2>
        <p class="lead mb-3"><strong>Challenge:</strong> Online store with low conversion rates and high ad costs.</p>
        <p class="mb-3"><strong>Solution:</strong> Strategic Google Ads campaign with landing page optimization and audience targeting.</p>
        <p class="mb-4"><strong>Results:</strong> 500% ROI improvement, 40% lower cost per acquisition, 200% increase in online sales.</p>
        <a href="contact.php" class="btn btn-primary">Get Similar Results</a>
      </div>
      <div class="col-lg-6">
        <div class="bg-light p-4 rounded">
          <h5 class="mb-3">Campaign Results:</h5>
          <div class="row text-center">
            <div class="col-6 mb-3">
              <h4 class="text-primary fw-bold">500%</h4>
              <p class="mb-0">ROI Increase</p>
            </div>
            <div class="col-6 mb-3">
              <h4 class="text-primary fw-bold">40%</h4>
              <p class="mb-0">Lower CPA</p>
            </div>
            <div class="col-6">
              <h4 class="text-primary fw-bold">200%</h4>
              <p class="mb-0">Sales Growth</p>
            </div>
            <div class="col-6">
              <h4 class="text-primary fw-bold">60</h4>
              <p class="mb-0">Days to Results</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Case Study 3 -->
    <div class="row align-items-center mb-5">
      <div class="col-lg-6">
        <div class="bg-info text-white p-4 rounded mb-3">
          <h3 class="mb-0">400% Follower Growth</h3>
        </div>
        <h2 class="mb-3">Tech Startup Grew Social Following by 400% in 2 Months</h2>
        <p class="lead mb-3"><strong>Challenge:</strong> New tech startup with zero social media presence.</p>
        <p class="mb-3"><strong>Solution:</strong> Comprehensive social media strategy with content creation, influencer partnerships, and paid campaigns.</p>
        <p class="mb-4"><strong>Results:</strong> 400% follower growth, 100+ qualified leads per month, 250% increase in website traffic from social.</p>
        <a href="contact.php" class="btn btn-primary">Grow Your Following</a>
      </div>
      <div class="col-lg-6">
        <div class="bg-light p-4 rounded">
          <h5 class="mb-3">Social Media Growth:</h5>
          <div class="row text-center">
            <div class="col-6 mb-3">
              <h4 class="text-primary fw-bold">400%</h4>
              <p class="mb-0">Follower Growth</p>
            </div>
            <div class="col-6 mb-3">
              <h4 class="text-primary fw-bold">100+</h4>
              <p class="mb-0">Monthly Leads</p>
            </div>
            <div class="col-6">
              <h4 class="text-primary fw-bold">250%</h4>
              <p class="mb-0">Traffic Increase</p>
            </div>
            <div class="col-6">
              <h4 class="text-primary fw-bold">60</h4>
              <p class="mb-0">Days Timeline</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Client Logos Section -->
<section class="py-5 bg-light">
  <div class="container">
    <h3 class="text-center mb-5">Some of Our Reputed Clients</h3>
    <div class="row text-center g-4">
      <div class="col-md-2 col-6">
        <div class="bg-white p-3 rounded shadow-sm h-100 d-flex align-items-center justify-content-center">
          <span class="fw-bold text-muted">Client A</span>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="bg-white p-3 rounded shadow-sm h-100 d-flex align-items-center justify-content-center">
          <span class="fw-bold text-muted">Client B</span>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="bg-white p-3 rounded shadow-sm h-100 d-flex align-items-center justify-content-center">
          <span class="fw-bold text-muted">Client C</span>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="bg-white p-3 rounded shadow-sm h-100 d-flex align-items-center justify-content-center">
          <span class="fw-bold text-muted">Client D</span>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="bg-white p-3 rounded shadow-sm h-100 d-flex align-items-center justify-content-center">
          <span class="fw-bold text-muted">Client E</span>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="bg-white p-3 rounded shadow-sm h-100 d-flex align-items-center justify-content-center">
          <span class="fw-bold text-muted">Client F</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="py-5 bg-primary text-white">
  <div class="container text-center">
    <h2 class="mb-4">Ready to Be Our Next Success Story?</h2>
    <p class="lead mb-4">Let's discuss how we can achieve similar results for your business.</p>
    <a href="contact.php" class="btn btn-light btn-lg">Get Free Consultation</a>
  </div>
</section>

<?php include '../components/footer.php'; ?>
