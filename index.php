<!DOCTYPE html>
<html>
<head>
	<title>Narcos Premiere</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta name="description" content="See and share the photos of the premiere of season tree.">
	<meta name="keywords" content="Narcos, Netflix, premiere, photo">
	<meta name="author" content="Claudio Lacerda">
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Narcos Premiere" />
	<meta property="og:description" content="See and share the photos of the premiere of season tree." />
	<meta property="og:url" content="https://www.narcos3.com/" />
	<meta property="og:image" content="https://www.narcos3.com/assets/img/share.png" />
	<meta property="og:site_name" content="Narcos premiere season 3"/>
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@netflixlat">
	<meta name="twitter:creator" content="@netflixlat">
	<meta name="twitter:title" content="Narcos premiere season 3">
	<meta name="twitter:image" content="https://www.narcos3.com/assets/img/share.png">
	<link href="assets/featherlight.min.css" type="text/css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="assets/style.css">
	<link rel="shortcut icon" href="https://assets.nflxext.com/us/ffe/siteui/common/icons/nficon2016.ico">
</head>
<body>
	<img src="assets/img/logo-header.png" class="netflix">
	<img src="assets/img/narcos.png" class="narcos">
	<h1>Global premiere season 3</h1>
	<hr class="line">
<div class="container">
	<?
	$files = glob("pic/*.*");
	for ($i=0; $i<count($files); $i++)
	{
		$num = $files[$i];
		echo '
		<figure class="pic">
		<a href="'.$num.'" data-featherlight="'.$num.'" >
		<img src="'.$num.'"></a>
		<a href="'.$num.'" download="narcos_premiere">
		<div class="download-btn"></a></div>
		</figure>
		';
	}
	?>
</div>
<hr class="line">
		<a href="https://www.instagram.com/netflixlat" target="_blank">
			<img src="assets/img/instagram.png" class="instagram">
		<p>@netflixlat</p></a>
</body>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/featherlight.min.js" type="text/javascript" charset="utf-8"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-67130886-3', 'auto');
  ga('send', 'pageview');

</script>
</html>
