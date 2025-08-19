<?php include_once __DIR__ . '/routes.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title . ' - 24x7ads.info' : '24x7ads.info - Digital Marketing Agency'; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<?php echo url('style.css'); ?>">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
  <div class="container">
    <a class="navbar-brand fw-bold" href="<?php echo url('index.php'); ?>">24x7ads.info</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainNavbar">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" href="<?php echo url('index.php'); ?>">Home</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Services</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo page('services.php'); ?>">All Services</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="<?php echo service('seo.php'); ?>">SEO Optimization</a></li>
            <li><a class="dropdown-item" href="<?php echo service('paid-media.php'); ?>">Paid Media</a></li>
            <li><a class="dropdown-item" href="<?php echo service('creative-cro.php'); ?>">Creative & CRO</a></li>
            <li><a class="dropdown-item" href="<?php echo service('web-design.php'); ?>">Web Design & Dev</a></li>
            <li><a class="dropdown-item" href="<?php echo service('analytics.php'); ?>">Data & Analytics</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Industries</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo industry('b2b-saas.php'); ?>">B2B/SaaS</a></li>
            <li><a class="dropdown-item" href="<?php echo industry('ecommerce.php'); ?>">eCommerce</a></li>
            <li><a class="dropdown-item" href="<?php echo industry('healthcare.php'); ?>">Healthcare</a></li>
            <li><a class="dropdown-item" href="<?php echo industry('finance.php'); ?>">Finance</a></li>
            <li><a class="dropdown-item" href="<?php echo industry('cpg-food.php'); ?>">CPG/Food & Beverage</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="<?php echo page('portfolio-new.php'); ?>">Results</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Resources</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo page('blog.php'); ?>">Blog</a></li>
            <li><a class="dropdown-item" href="<?php echo resource('tools.php'); ?>">Free Tools</a></li>
            <li><a class="dropdown-item" href="<?php echo resource('guides.php'); ?>">Guides & Templates</a></li>
            <li><a class="dropdown-item" href="<?php echo resource('webinars.php'); ?>">Webinars</a></li>
            <li><a class="dropdown-item" href="<?php echo resource('benchmarks.php'); ?>">Industry Reports</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="<?php echo page('about.php'); ?>">About</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo page('pricing.php'); ?>">Pricing</a></li>
        <li class="nav-item"><a class="nav-link btn btn-outline-light ms-2" href="<?php echo page('contact-new.php'); ?>">Book Call</a></li>
      </ul>
    </div>
  </div>
</nav>
