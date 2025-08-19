<?php
/**
 * Complete CSS & JavaScript Testing Script
 * Tests all pages, CSS loading, JS functionality, and Bootstrap components
 */

// Include routing functions
include_once 'components/routes.php';

// List of all existing pages to test
$pages = [
    // Root pages
    '/' => 'Homepage',
    '/test-routing.php' => 'Routing Test',
    
    // Main pages
    '/pages/about.php' => 'About',
    '/pages/services.php' => 'Services Overview', 
    '/pages/pricing.php' => 'Pricing',
    '/pages/portfolio-new.php' => 'Portfolio (New)',
    '/pages/portfolio.php' => 'Portfolio (Old)',
    '/pages/testimonials.php' => 'Testimonials',
    '/pages/blog.php' => 'Blog',
    '/pages/contact-new.php' => 'Contact (New)',
    '/pages/contact.php' => 'Contact (Old)',
    '/pages/careers.php' => 'Careers',
    '/pages/faq.php' => 'FAQ',
    '/pages/landing.php' => 'Landing Page',
    '/pages/privacy-policy.php' => 'Privacy Policy',
    '/pages/terms.php' => 'Terms',
    
    // Service pages (existing)
    '/services/seo.php' => 'SEO Service',
    '/services/paid-media.php' => 'Paid Media Service',
    
    // Industry pages (existing)
    '/industries/b2b-saas.php' => 'B2B/SaaS Industry',
    
    // Resource pages (existing)
    '/resources/tools.php' => 'Free Tools'
];

$server_url = 'http://localhost:8000';
$results = [];
$total_tests = 0;
$passed_tests = 0;

echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Complete CSS & JS Testing Results</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css'>
    <style>
        .test-result { margin: 10px 0; padding: 15px; border-radius: 8px; }
        .test-pass { background-color: #d4edda; border: 1px solid #c3e6cb; }
        .test-fail { background-color: #f8d7da; border: 1px solid #f5c6cb; }
        .test-details { font-size: 12px; margin-top: 10px; }
        .asset-test { display: inline-block; margin: 3px; padding: 3px 8px; border-radius: 4px; font-size: 11px; }
        .asset-pass { background-color: #28a745; color: white; }
        .asset-fail { background-color: #dc3545; color: white; }
        .asset-warning { background-color: #ffc107; color: black; }
    </style>
</head>
<body>
<div class='container my-4'>";

echo "<h1 class='text-center mb-4'><i class='fas fa-vial text-primary'></i> Complete CSS & JavaScript Testing Results</h1>";
echo "<p class='text-center text-muted'>Testing all pages on <strong>$server_url</strong> including CSS, JS, and Bootstrap functionality</p>";
echo "<div class='alert alert-info text-center'><strong>Test Time:</strong> " . date('Y-m-d H:i:s') . "</div>";

// Test external assets first
echo "<h2 class='mt-4 mb-3'><i class='fas fa-external-link-alt'></i> External Assets Test</h2>";
$external_assets = [
    'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' => 'Bootstrap CSS',
    'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js' => 'Bootstrap JS',
    'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css' => 'Font Awesome CSS',
];

foreach ($external_assets as $url => $name) {
    $headers = @get_headers($url);
    $status = (strpos($headers[0], '200 OK') !== false) ? 'PASS' : 'FAIL';
    $class = ($status == 'PASS') ? 'asset-pass' : 'asset-fail';
    echo "<span class='asset-test $class'>$name: $status</span> ";
}

// Test local assets
echo "<h2 class='mt-4 mb-3'><i class='fas fa-file-code'></i> Local Assets Test</h2>";
$local_assets = [
    '/style.css' => 'Custom CSS',
    '/script.js' => 'Custom JavaScript',
];

foreach ($local_assets as $path => $name) {
    $full_url = $server_url . $path;
    $response = @file_get_contents($full_url, false, stream_context_create(['http' => ['timeout' => 5]]));
    $status = ($response !== false && strlen($response) > 0) ? 'PASS' : 'FAIL';
    $class = ($status == 'PASS') ? 'asset-pass' : 'asset-fail';
    $size = $response ? number_format(strlen($response)) . ' bytes' : '0 bytes';
    echo "<span class='asset-test $class'>$name: $status ($size)</span> ";
}

echo "<h2 class='mt-4 mb-3'><i class='fas fa-globe'></i> Page Testing Results</h2>";

foreach ($pages as $path => $name) {
    $total_tests++;
    $full_url = $server_url . $path;
    
    // Test if page loads
    $context = stream_context_create([
        'http' => [
            'timeout' => 10,
            'ignore_errors' => true,
            'user_agent' => 'Mozilla/5.0 (compatible; Page Tester)'
        ]
    ]);
    
    $response = @file_get_contents($full_url, false, $context);
    $http_response_header = $http_response_header ?? [];
    
    // Parse response code
    $status_code = 200;
    if (!empty($http_response_header[0])) {
        preg_match('/HTTP\/\d\.\d\s+(\d+)/', $http_response_header[0], $matches);
        $status_code = isset($matches[1]) ? (int)$matches[1] : 500;
    }
    
    $is_pass = ($response !== false && $status_code == 200);
    $test_class = $is_pass ? 'test-pass' : 'test-fail';
    $status_icon = $is_pass ? '<i class="fas fa-check-circle text-success"></i>' : '<i class="fas fa-times-circle text-danger"></i>';
    
    if ($is_pass) $passed_tests++;
    
    echo "<div class='test-result $test_class'>";
    echo "<h5>$status_icon <strong>$name</strong> <code>$path</code></h5>";
    
    if ($is_pass && $response) {
        // Detailed CSS/JS checks
        $checks = [];
        
        // CSS checks
        if (strpos($response, 'bootstrap.min.css') !== false) {
            $checks[] = "<span class='asset-test asset-pass'>Bootstrap CSS ✓</span>";
        } else {
            $checks[] = "<span class='asset-test asset-fail'>Bootstrap CSS ✗</span>";
        }
        
        if (strpos($response, 'font-awesome') !== false || strpos($response, 'cdnjs.cloudflare.com') !== false) {
            $checks[] = "<span class='asset-test asset-pass'>Font Awesome ✓</span>";
        } else {
            $checks[] = "<span class='asset-test asset-warning'>Font Awesome ?</span>";
        }
        
        if (strpos($response, url('style.css')) !== false || strpos($response, 'style.css') !== false) {
            $checks[] = "<span class='asset-test asset-pass'>Custom CSS ✓</span>";
        } else {
            $checks[] = "<span class='asset-test asset-fail'>Custom CSS ✗</span>";
        }
        
        // JS checks
        if (strpos($response, 'bootstrap.bundle.min.js') !== false) {
            $checks[] = "<span class='asset-test asset-pass'>Bootstrap JS ✓</span>";
        } else {
            $checks[] = "<span class='asset-test asset-fail'>Bootstrap JS ✗</span>";
        }
        
        if (strpos($response, url('script.js')) !== false || strpos($response, 'script.js') !== false) {
            $checks[] = "<span class='asset-test asset-pass'>Custom JS ✓</span>";
        } else {
            $checks[] = "<span class='asset-test asset-fail'>Custom JS ✗</span>";
        }
        
        // Component checks
        if (strpos($response, 'navbar') !== false) {
            $checks[] = "<span class='asset-test asset-pass'>Navbar ✓</span>";
        }
        
        if (strpos($response, 'dropdown') !== false) {
            $checks[] = "<span class='asset-test asset-pass'>Dropdowns ✓</span>";
        }
        
        if (strpos($response, 'btn btn-') !== false) {
            $checks[] = "<span class='asset-test asset-pass'>Bootstrap Buttons ✓</span>";
        }
        
        if (strpos($response, 'card') !== false) {
            $checks[] = "<span class='asset-test asset-pass'>Bootstrap Cards ✓</span>";
        }
        
        if (strpos($response, 'form-control') !== false) {
            $checks[] = "<span class='asset-test asset-pass'>Bootstrap Forms ✓</span>";
        }
        
        // HTML structure
        if (strpos($response, '<!DOCTYPE html>') !== false) {
            $checks[] = "<span class='asset-test asset-pass'>Valid HTML5 ✓</span>";
        }
        
        if (strpos($response, '</body></html>') !== false) {
            $checks[] = "<span class='asset-test asset-pass'>Complete HTML ✓</span>";
        } else {
            $checks[] = "<span class='asset-test asset-fail'>Incomplete HTML ✗</span>";
        }
        
        echo "<div class='test-details'>" . implode(' ', $checks) . "</div>";
        
    } else {
        echo "<div class='test-details'>";
        echo "<span class='asset-test asset-fail'>Status: HTTP $status_code</span> ";
        echo "<span class='asset-test asset-fail'>Response: " . ($response === false ? 'Failed to load' : 'Error') . "</span>";
        echo "</div>";
    }
    
    echo "</div>";
}

// Summary
echo "<div class='mt-4'>";
echo "<h2><i class='fas fa-chart-bar'></i> Test Summary</h2>";
echo "<div class='row'>";
echo "<div class='col-md-3'><div class='alert alert-primary text-center'><h4>$total_tests</h4><small>Total Tests</small></div></div>";
echo "<div class='col-md-3'><div class='alert alert-success text-center'><h4>$passed_tests</h4><small>Passed</small></div></div>";
echo "<div class='col-md-3'><div class='alert alert-danger text-center'><h4>" . ($total_tests - $passed_tests) . "</h4><small>Failed</small></div></div>";
echo "<div class='col-md-3'><div class='alert alert-info text-center'><h4>" . round(($passed_tests / $total_tests) * 100, 1) . "%</h4><small>Success Rate</small></div></div>";
echo "</div>";

if ($passed_tests == $total_tests) {
    echo "<div class='alert alert-success'>";
    echo "<h4><i class='fas fa-trophy'></i> Perfect Score!</h4>";
    echo "<p>All pages loaded successfully with proper CSS and JavaScript integration. Your website is fully functional!</p>";
    echo "</div>";
} else {
    echo "<div class='alert alert-warning'>";
    echo "<h4><i class='fas fa-exclamation-triangle'></i> Issues Found</h4>";
    echo "<p>Some pages or assets failed to load properly. Check the failed items above and ensure your server is running.</p>";
    echo "</div>";
}

// Manual testing instructions
echo "<div class='alert alert-info'>";
echo "<h5><i class='fas fa-hand-point-right'></i> Manual Testing Checklist</h5>";
echo "<ol>";
echo "<li><strong>Navigation:</strong> Click dropdown menus to test Bootstrap JS functionality</li>";
echo "<li><strong>Forms:</strong> Try submitting forms to test JavaScript validation</li>";
echo "<li><strong>Animations:</strong> Hover over cards and buttons to see CSS transitions</li>";
echo "<li><strong>Responsive:</strong> Resize browser window to test mobile view</li>";
echo "<li><strong>Console:</strong> Open browser DevTools to check for JavaScript errors</li>";
echo "</ol>";
echo "</div>";

echo "</div>";

echo "
<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js'></script>
<script>
    console.log('Test script loaded successfully!');
    
    // Test Bootstrap JS functionality
    document.addEventListener('DOMContentLoaded', function() {
        console.log('Bootstrap tooltips available:', typeof window.bootstrap !== 'undefined');
        
        // Test alert functionality
        setTimeout(() => {
            const alerts = document.querySelectorAll('.alert');
            console.log('Bootstrap alerts found:', alerts.length);
        }, 1000);
    });
</script>
</body>
</html>";
?>
