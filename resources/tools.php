<?php include '../components/header.php'; ?>

<!-- Hero Section -->
<section class="bg-gradient text-white py-5" style="background: linear-gradient(135deg, #17a2b8 0%, #6f42c1 100%);">
  <div class="container">
    <div class="text-center">
      <h1 class="display-4 fw-bold mb-3">Free Digital Marketing Tools</h1>
      <p class="lead mb-4">Powerful, free tools to audit, optimize, and grow your digital marketing efforts</p>
      <div class="d-flex flex-wrap justify-content-center gap-3 mb-4">
        <div class="d-flex align-items-center text-white-50">
          <i class="fas fa-check-circle me-2 text-warning"></i>
          <span>No Registration Required</span>
        </div>
        <div class="d-flex align-items-center text-white-50">
          <i class="fas fa-check-circle me-2 text-warning"></i>
          <span>Instant Results</span>
        </div>
        <div class="d-flex align-items-center text-white-50">
          <i class="fas fa-check-circle me-2 text-warning"></i>
          <span>Professional Reports</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Featured Tool - Website Audit -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="text-center mb-4">
          <i class="fas fa-search-plus text-primary mb-3" style="font-size: 64px;"></i>
          <h2 class="mb-3">Free Website Audit Tool</h2>
          <p class="lead">Get a comprehensive analysis of your website's SEO, performance, and conversion optimization opportunities.</p>
        </div>
        <div class="bg-white p-4 rounded shadow-sm">
          <h5 class="mb-3">What You'll Get:</h5>
          <div class="row">
            <div class="col-md-6">
              <ul class="list-unstyled">
                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>SEO Score & Analysis</li>
                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Page Speed Report</li>
                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Mobile Responsiveness</li>
                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Security Check</li>
              </ul>
            </div>
            <div class="col-md-6">
              <ul class="list-unstyled">
                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Technical Issues</li>
                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Content Analysis</li>
                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Competitor Comparison</li>
                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Action Plan</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="bg-white p-4 rounded shadow">
          <h4 class="mb-4">Analyze Your Website</h4>
          <form id="websiteAuditForm">
            <div class="mb-3">
              <label for="websiteUrl" class="form-label">Website URL *</label>
              <input type="url" class="form-control" id="websiteUrl" placeholder="https://yourwebsite.com" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email Address (Optional)</label>
              <input type="email" class="form-control" id="email" placeholder="your@email.com">
              <small class="text-muted">Get detailed report via email</small>
            </div>
            <div class="mb-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="includeCompetitors">
                <label class="form-check-label" for="includeCompetitors">
                  Include competitor analysis
                </label>
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-lg w-100">
              <i class="fas fa-search me-2"></i>Analyze Website
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Marketing Tools Grid -->
<section class="py-5">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="mb-3">Free Marketing Tools</h2>
      <p class="lead text-muted">Essential tools for digital marketing success</p>
    </div>
    <div class="row g-4">
      <!-- SEO Tools -->
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 border-0 shadow-sm">
          <div class="card-body text-center">
            <i class="fas fa-search text-success mb-3" style="font-size: 48px;"></i>
            <h5 class="card-title">SEO Keyword Analyzer</h5>
            <p class="card-text">Find profitable keywords with search volume, difficulty, and competition data.</p>
            <div class="mb-3">
              <input type="text" class="form-control mb-2" placeholder="Enter keyword or phrase">
              <button class="btn btn-success w-100">Analyze Keywords</button>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Page Speed Tool -->
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 border-0 shadow-sm">
          <div class="card-body text-center">
            <i class="fas fa-tachometer-alt text-warning mb-3" style="font-size: 48px;"></i>
            <h5 class="card-title">Page Speed Checker</h5>
            <p class="card-text">Test your website speed and get optimization recommendations.</p>
            <div class="mb-3">
              <input type="url" class="form-control mb-2" placeholder="https://yoursite.com">
              <button class="btn btn-warning w-100">Check Speed</button>
            </div>
          </div>
        </div>
      </div>
      
      <!-- ROI Calculator -->
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 border-0 shadow-sm">
          <div class="card-body text-center">
            <i class="fas fa-calculator text-info mb-3" style="font-size: 48px;"></i>
            <h5 class="card-title">PPC ROI Calculator</h5>
            <p class="card-text">Calculate potential return on investment for your advertising campaigns.</p>
            <div class="mb-3">
              <input type="number" class="form-control mb-2" placeholder="Monthly ad spend">
              <button class="btn btn-info w-100">Calculate ROI</button>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Social Media Audit -->
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 border-0 shadow-sm">
          <div class="card-body text-center">
            <i class="fab fa-facebook text-primary mb-3" style="font-size: 48px;"></i>
            <h5 class="card-title">Social Media Audit</h5>
            <p class="card-text">Analyze your social media presence and get improvement suggestions.</p>
            <div class="mb-3">
              <input type="text" class="form-control mb-2" placeholder="Facebook page URL">
              <button class="btn btn-primary w-100">Audit Social</button>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Email Subject Line Tester -->
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 border-0 shadow-sm">
          <div class="card-body text-center">
            <i class="fas fa-envelope text-danger mb-3" style="font-size: 48px;"></i>
            <h5 class="card-title">Email Subject Tester</h5>
            <p class="card-text">Test email subject lines for spam triggers and engagement potential.</p>
            <div class="mb-3">
              <input type="text" class="form-control mb-2" placeholder="Your subject line">
              <button class="btn btn-danger w-100">Test Subject</button>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Competition Analyzer -->
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 border-0 shadow-sm">
          <div class="card-body text-center">
            <i class="fas fa-users text-secondary mb-3" style="font-size: 48px;"></i>
            <h5 class="card-title">Competitor Analyzer</h5>
            <p class="card-text">Compare your website against competitors for SEO and performance.</p>
            <div class="mb-3">
              <input type="url" class="form-control mb-2" placeholder="Competitor website">
              <button class="btn btn-secondary w-100">Analyze Competition</button>
            </div>
          </div>
        </card>
      </div>
    </div>
  </div>
</section>

<!-- Advanced Tools -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="mb-3">Advanced Marketing Calculators</h2>
      <p class="lead text-muted">Data-driven tools for strategic planning</p>
    </div>
    <div class="row g-4">
      <!-- Customer Lifetime Value Calculator -->
      <div class="col-lg-6">
        <div class="card border-0 shadow-sm">
          <div class="card-body">
            <div class="d-flex align-items-center mb-3">
              <i class="fas fa-chart-line text-success me-3" style="font-size: 36px;"></i>
              <div>
                <h5 class="mb-0">Customer Lifetime Value Calculator</h5>
                <small class="text-muted">Calculate CLV to optimize acquisition costs</small>
              </div>
            </div>
            <form class="clv-calculator">
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label class="form-label">Average Order Value (₹)</label>
                  <input type="number" class="form-control" placeholder="5000">
                </div>
                <div class="col-md-6 mb-3">
                  <label class="form-label">Purchase Frequency (per year)</label>
                  <input type="number" class="form-control" placeholder="4">
                </div>
                <div class="col-md-6 mb-3">
                  <label class="form-label">Customer Lifespan (years)</label>
                  <input type="number" class="form-control" placeholder="3">
                </div>
                <div class="col-md-6 mb-3">
                  <label class="form-label">Gross Margin (%)</label>
                  <input type="number" class="form-control" placeholder="30">
                </div>
              </div>
              <button type="button" class="btn btn-success w-100">Calculate CLV</button>
              <div class="mt-3 p-3 bg-light rounded" id="clv-result" style="display: none;">
                <h6 class="text-success">Customer Lifetime Value: <span id="clv-value">₹0</span></h6>
                <p class="small mb-0">You can spend up to this amount to acquire each customer profitably.</p>
              </div>
            </form>
          </div>
        </div>
      </div>
      
      <!-- Marketing Budget Planner -->
      <div class="col-lg-6">
        <div class="card border-0 shadow-sm">
          <div class="card-body">
            <div class="d-flex align-items-center mb-3">
              <i class="fas fa-piggy-bank text-primary me-3" style="font-size: 36px;"></i>
              <div>
                <h5 class="mb-0">Marketing Budget Planner</h5>
                <small class="text-muted">Optimal budget allocation across channels</small>
              </div>
            </div>
            <form class="budget-planner">
              <div class="mb-3">
                <label class="form-label">Total Monthly Marketing Budget (₹)</label>
                <input type="number" class="form-control" id="totalBudget" placeholder="100000">
              </div>
              <div class="mb-3">
                <label class="form-label">Business Type</label>
                <select class="form-control" id="businessType">
                  <option value="">Select business type</option>
                  <option value="b2b">B2B/SaaS</option>
                  <option value="ecommerce">E-commerce</option>
                  <option value="local">Local Business</option>
                  <option value="service">Service Business</option>
                </select>
              </div>
              <button type="button" class="btn btn-primary w-100" onclick="calculateBudgetAllocation()">Generate Budget Plan</button>
              <div class="mt-3" id="budget-result" style="display: none;">
                <h6 class="text-primary">Recommended Allocation:</h6>
                <div class="budget-breakdown"></div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Lead Generation Tools -->
<section class="py-5">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="mb-3">Lead Generation & Conversion Tools</h2>
      <p class="lead text-muted">Optimize your conversion funnel</p>
    </div>
    <div class="row g-4">
      <!-- A/B Test Significance Calculator -->
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 border-0 shadow-sm">
          <div class="card-body text-center">
            <i class="fas fa-flask text-info mb-3" style="font-size: 48px;"></i>
            <h5 class="card-title">A/B Test Calculator</h5>
            <p class="card-text">Determine if your test results are statistically significant.</p>
            <div class="mb-3">
              <input type="number" class="form-control mb-2" placeholder="Control conversions">
              <input type="number" class="form-control mb-2" placeholder="Variant conversions">
              <button class="btn btn-info w-100">Check Significance</button>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Landing Page Grader -->
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 border-0 shadow-sm">
          <div class="card-body text-center">
            <i class="fas fa-file-alt text-warning mb-3" style="font-size: 48px;"></i>
            <h5 class="card-title">Landing Page Grader</h5>
            <p class="card-text">Grade your landing page for conversion best practices.</p>
            <div class="mb-3">
              <input type="url" class="form-control mb-2" placeholder="Landing page URL">
              <button class="btn btn-warning w-100">Grade Page</button>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Conversion Rate Optimizer -->
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 border-0 shadow-sm">
          <div class="card-body text-center">
            <i class="fas fa-chart-bar text-success mb-3" style="font-size: 48px;"></i>
            <h5 class="card-title">Conversion Optimizer</h5>
            <p class="card-text">Get actionable tips to improve your conversion rates.</p>
            <div class="mb-3">
              <input type="number" class="form-control mb-2" placeholder="Current conversion rate %">
              <button class="btn btn-success w-100">Get Optimization Tips</button>
            </div>
          </div>
        </card>
      </div>
    </div>
  </div>
</section>

<!-- Call-to-Action -->
<section class="py-5 bg-primary text-white">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8">
        <h2 class="mb-3">Need More Advanced Analysis?</h2>
        <p class="lead mb-0">Get a comprehensive marketing audit with personalized recommendations from our experts.</p>
      </div>
      <div class="col-lg-4 text-lg-end">
        <a href="../contact.php" class="btn btn-light btn-lg">Get Professional Audit</a>
      </div>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="mb-3">Tool FAQ</h2>
      <p class="lead text-muted">Common questions about our free tools</p>
    </div>
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <div class="accordion" id="toolsFAQ">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#toolsfaq1">
                Are these tools really free?
              </button>
            </h2>
            <div id="toolsfaq1" class="accordion-collapse collapse show" data-bs-parent="#toolsFAQ">
              <div class="accordion-body">
                <p>Yes! All our basic tools are completely free to use with no hidden charges. Some tools offer optional premium features, but the core functionality is always free.</p>
                <ul>
                  <li>No credit card required</li>
                  <li>No registration needed for basic tools</li>
                  <li>Unlimited usage within fair use limits</li>
                  <li>Professional-grade results</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#toolsfaq2">
                How accurate are the tool results?
              </button>
            </h2>
            <div id="toolsfaq2" class="accordion-collapse collapse" data-bs-parent="#toolsFAQ">
              <div class="accordion-body">
                <p>Our tools use the same data sources and methodologies that we use for client work:</p>
                <ul>
                  <li><strong>SEO Tools:</strong> Data from Google APIs, Ahrefs, and SEMrush</li>
                  <li><strong>Speed Tests:</strong> Google PageSpeed Insights integration</li>
                  <li><strong>Calculators:</strong> Industry-standard formulas and benchmarks</li>
                  <li><strong>Audits:</strong> Professional-grade analysis algorithms</li>
                </ul>
                <p>While free tools provide excellent insights, our professional audits offer deeper analysis with manual review.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#toolsfaq3">
                Can I use these tools for client work?
              </button>
            </h2>
            <div id="toolsfaq3" class="accordion-collapse collapse" data-bs-parent="#toolsFAQ">
              <div class="accordion-body">
                <p>Absolutely! These tools are designed for marketing professionals, agencies, and consultants:</p>
                <ul>
                  <li>White-label reports available for premium users</li>
                  <li>API access for high-volume usage</li>
                  <li>Bulk analysis capabilities</li>
                  <li>Custom branding options</li>
                </ul>
                <p>Contact us if you need enterprise features or higher usage limits.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- JavaScript for Interactive Tools -->
<script>
// CLV Calculator
function calculateCLV() {
    const aov = parseFloat(document.querySelector('.clv-calculator input[placeholder="5000"]').value) || 0;
    const frequency = parseFloat(document.querySelector('.clv-calculator input[placeholder="4"]').value) || 0;
    const lifespan = parseFloat(document.querySelector('.clv-calculator input[placeholder="3"]').value) || 0;
    const margin = parseFloat(document.querySelector('.clv-calculator input[placeholder="30"]').value) || 0;
    
    const clv = (aov * frequency * lifespan * margin) / 100;
    
    if (clv > 0) {
        document.getElementById('clv-result').style.display = 'block';
        document.getElementById('clv-value').textContent = '₹' + clv.toLocaleString('en-IN');
    }
}

// Budget Allocation Calculator
function calculateBudgetAllocation() {
    const budget = parseFloat(document.getElementById('totalBudget').value) || 0;
    const businessType = document.getElementById('businessType').value;
    
    if (budget === 0 || !businessType) return;
    
    const allocations = {
        'b2b': {
            'Content Marketing': 30,
            'LinkedIn Ads': 25,
            'Google Ads': 20,
            'SEO': 15,
            'Marketing Automation': 10
        },
        'ecommerce': {
            'Google Ads': 35,
            'Facebook/Instagram Ads': 25,
            'SEO': 20,
            'Email Marketing': 15,
            'Influencer Marketing': 5
        },
        'local': {
            'Google Ads': 40,
            'Facebook Ads': 25,
            'SEO': 20,
            'Local Listings': 10,
            'Content Marketing': 5
        },
        'service': {
            'Google Ads': 30,
            'SEO': 25,
            'Content Marketing': 20,
            'Social Media': 15,
            'Email Marketing': 10
        }
    };
    
    const allocation = allocations[businessType];
    let html = '';
    
    for (const [channel, percentage] of Object.entries(allocation)) {
        const amount = (budget * percentage) / 100;
        html += `
            <div class="d-flex justify-content-between align-items-center mb-2">
                <span>${channel}:</span>
                <span class="fw-bold">₹${amount.toLocaleString('en-IN')} (${percentage}%)</span>
            </div>
        `;
    }
    
    document.querySelector('.budget-breakdown').innerHTML = html;
    document.getElementById('budget-result').style.display = 'block';
}

// Add event listeners
document.querySelector('.clv-calculator button').addEventListener('click', calculateCLV);

// Website Audit Form
document.getElementById('websiteAuditForm').addEventListener('submit', function(e) {
    e.preventDefault();
    const url = document.getElementById('websiteUrl').value;
    const email = document.getElementById('email').value;
    
    // Show loading state
    const button = this.querySelector('button');
    const originalText = button.innerHTML;
    button.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Analyzing...';
    button.disabled = true;
    
    // Simulate analysis (replace with actual API call)
    setTimeout(() => {
        alert('Analysis complete! ' + (email ? 'Report sent to your email.' : 'Check the results above.'));
        button.innerHTML = originalText;
        button.disabled = false;
    }, 3000);
});
</script>

<?php include '../components/footer.php'; ?>
