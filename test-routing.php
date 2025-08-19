<?php
// Test file to verify routing system
include_once 'components/routes.php';

echo "<h1>Routing System Test</h1>";
echo "<p>Current PHP_SELF: " . $_SERVER['PHP_SELF'] . "</p>";
echo "<p>Base URL: " . getBaseUrl() . "</p>";

echo "<h2>URL Functions Test:</h2>";
echo "<ul>";
echo "<li>Home: <a href='" . url('index.php') . "'>" . url('index.php') . "</a></li>";
echo "<li>About Page: <a href='" . page('about.php') . "'>" . page('about.php') . "</a></li>";
echo "<li>SEO Service: <a href='" . service('seo.php') . "'>" . service('seo.php') . "</a></li>";
echo "<li>B2B Industry: <a href='" . industry('b2b-saas.php') . "'>" . industry('b2b-saas.php') . "</a></li>";
echo "<li>Tools Resource: <a href='" . resource('tools.php') . "'>" . resource('tools.php') . "</a></li>";
echo "<li>Style CSS: <a href='" . asset('style.css') . "'>" . asset('style.css') . "</a></li>";
echo "</ul>";

echo "<h2>Navigation Test:</h2>";
echo "<p>Click the links above to test if routing works correctly from root directory.</p>";
?>
