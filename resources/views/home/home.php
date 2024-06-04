<?php
$title = __('home', 'en'); 
$lang = 'en'; 
ob_start();
?>

<h1><?php echo __('welcome', $lang); ?></h1>
<p><?php echo __('home', $lang); ?></p>

<?php
$content = ob_get_clean();
include __DIR__ . '/../layouts/main.php';
