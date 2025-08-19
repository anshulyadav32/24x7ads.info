<?php include '../components/header.php'; ?>
<div class="container py-5">
  <h1 class="mb-4 text-primary">Frequently Asked Questions</h1>
  <div class="accordion" id="faqAccordion">
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          What services do you offer?
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          We offer SEO, Social Media Marketing, and PPC Advertising.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          How can I contact you?
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Use our contact form or email us at <a href="mailto:support@24x7ads.info">support@24x7ads.info</a>.
        </div>
      </div>
    </div>
  </div>
</div>
<?php include '../components/footer.php'; ?>
