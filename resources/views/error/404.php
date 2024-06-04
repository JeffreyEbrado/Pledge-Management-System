<?php
$title = 'Page Not Found';
ob_start();
?>

<h1>404 - Page Not Found</h1>
<p>The page you are looking for could not be found.</p>

<?php
$content = ob_get_clean();
include __DIR__ . '/../layouts/main.php';
