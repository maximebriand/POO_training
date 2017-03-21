<?php 
//Autoloader
require '../App/Autoloader.php';
App\Autoloader::register();

if (isset($_GET['p']))
{
	$p = $_GET['p'];
} else 
{
	$p = 'home';
}


ob_start();
if ($p === 'home')
{
	require  '../pages/home.php';
} else if ($p === 'article')
{
	require  '../pages/single.php';
} else if ($p === 'categorie')
{
    require  '../pages/categorie.php';
}

$content = ob_get_clean();

require '../pages/templates/default.php'


?>