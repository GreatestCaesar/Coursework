<html>
	<head>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	</head>
	<title>
		CinemaTickets
	</title>
	<link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon">
	<body>
		<div class="se">
				<input type="search" name="query" placeholder="œÓËÒÍ ÙËÎ¸ÏÓ‚"><a href="#" class="button">œÓËÒÍ</a>
		</div>
		<div class="cal">
		<embed src="http://chasikov.net.ru/flash/calendar/0/mini_calendar3.swf" width="128" height="128" wmode="transparent" type="application/x-shockwave-flash"></embed>			
		</div>
		<a href="films.php" class="link-moscow"> »ÕŒ“≈¿“– ÃŒ— ¬¿</a>
		<a href="#" class="ins"><img src="image/ins.png" width="48" height="48"></a>
		<a href="#" class="fc"><img src="image/fc.png" width="54" height="54"></a>
		<a href="#" class="tw"><img src="image/tw.png" width="48" height="48"></a>
	</body>
<html>

<style>
	
	.tw
		{
		position: absolute;
		bottom: 16;
		right: 135;
		}
	
	.fc
		{
		position: absolute;
		bottom: 13;
		right: 75;
		}
	.ins
		{
		position: absolute;
		bottom: 15;
		right: 15;
		}
	a
		{
		text-decoration: none;		
		}
		
	.link-moscow
		{
		z-index: 1;
		display: block;
		font-size: 60px;
		position: relative;
		background: rgb(255, 255, 255, 0.5);
		top: 180;
		left: 200;
		padding: 20px 15px 20px 15px;
		color: #006400;
		overflow: hidden;
		width: 652;
		}
	
	.link-moscow::before, .link-moscow::after
		{
		content: "";
		display: block;
		width: 100%;
		height: 100%;
		background: #778899;
		position: absolute;
		top: 0;
		left: -100%;
		transition: .3s;
		z-index: -1;
		}
		
	.link-moscow::after
		{
		background: #D3D3D3;
		top: 100%;
		left: 0;
		transition-delay: .2s;
		}
	
	.link-moscow:hover::before
		{
		left: 0;
		}
		
	.link-moscow:hover::after
		{
		top: 0;
		}
	
	.link-moscow:active
		{
		color: #006400;
		}
	
	.link-moscow:hover
		{
		color: #006400;
		}
	
	body 
		{
		background-image: url(image/back3.jpg);
		-webkit-background-size: cover;
		background-size: cover;
		}
		
	.logo
		{
		content: url(image/logo3.png);
		position: absolute;
		bottom: 0;
		}
		
	.cal
		{
		position: absolute;
		top: 15px;
		left: 25px;
		}
		
	.se
		{
		position: absolute;
		top: 15px;
		right: 40px;
		display: flex;
		}
		
	a.button 
		{
		background: #40E0D0;
		color: #000000;
		display: block;
		width: 80px;
		text-align: center;
		line-height: 25px;
		margin-top: 0px;
		margin-left: 3px;
		}
		
	a:active.button 
		{
		color: #FFFFFF;
		background: #0000FF;
		}
		
</style>
