<?php
$host = $_SERVER['HTTP_HOST'];

// Manually set project folder path
$project_folder = '/wordpress_projects/kareok/';

$base_url = "http://" . $host . $project_folder;



define('SITE_URL', $base_url);

// define('SITE_URL', 'http://localhost/wordpress_projects/mfel/');

define('SITE_NAME', 'MFEL');
define('ADMIN_EMAIL', 'support@mfive.com');


?>
