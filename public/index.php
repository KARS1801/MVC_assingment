<?php 

	require_once __DIR__ ."/../vendor/autoload.php";
	ToroHook::add("404", function(){
		echo "404 its a Error";
		http_response_code(404);
	});
	Toro::serve([
		'/' => Links\Controllers\HomeControllers::class,
		'/home' => Links\Controllers\HomeControllers::class,
		'/loginpage' => Links\Controllers\HomeControllers::class,
		'/registerpage' => Links\Controllers\HomeControllers::class,
		'/login' => Links\Controllers\LoginControllers::class,
		'/register' => Links\Controllers\RegisterControllers::class,
		'/dashboard' => Links\Controllers\DashboardControllers::class,
		'/logout' => Links\Controllers\LogoutControllers::class
	]);

?>
