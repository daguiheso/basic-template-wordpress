<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo(title); ?></title>
</head>
<body>
	<h1><?php bloginfo(name); ?></h1>

	<ul>
		<li><?php bloginfo(description); ?></li>
		<li><?php bloginfo(stylesheet_url); ?></li>
		<li><?php bloginfo(language); ?></li>
		<li><?php bloginfo(url); ?></li>
		<li><?php bloginfo(stylesheet_directory); ?></li>
	</ul>
</body>
</html>