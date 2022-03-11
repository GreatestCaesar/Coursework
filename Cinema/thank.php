<html>
	<head>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
		<title>
			Благодарим
		</title>
		<link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon">
	</head>
	<body>
		<div class="frame">
			<div class="home">
				<a href="main.php"><i class="fas fa-igloo"></i>На главную
				</a>
			</div>
		</div>
		<div class="msg">
			Билет успешно забронирован! Благодарим за то, что воспользовались нашим сервисом, расскажите о нас друзьям)
		</div>
		<div class="pr">
			<a href=""><i class="fas fa-print"></i>Распечатать билет
			</a>
		</div>
	</body>
</html>

<style>

	.msg
		{
		font-size: 40px;
		color: black;
		background: rgb(255, 255, 255, 0.6);
		width: 500px;
		margin: 130px 0px 0px 500px;
		padding: 10px;
		}
	
	.home a
		{
		font-family: 'Lobster', cursive;
		text-decoration: none;
		font-size: 130%;
		color: #FF00FF;
		position: absolute;
		top: 10;
		left: 50;
		
		}
	
	.home a::before
		{
		content: "На главную";
		display: block;
		width: 133%;
		height: 100%;
		color: #FFFF00;
		position: absolute;
		top: 0;
		left: -150%;
		transition: .3s;
		}
		
	.home a:hover::before
		{
		left: 0%;
		}
	
	.frame .home > a i.fas
		{
		position: absolute;
		top: 2.5;
		left: -35px;
		color: #FF00FF;
		padding: 0px 15px 0px 0px;
		}
	
	.pr a
		{
		position: absolute;
		left: 0;
		text-decoration: none;
		font-size: 30px;
		color: white;
		margin: 100px 0px 0px 650px;
		}
	
	.pr > a i.fas
		{
		position: relative;
		top: 0;
		left: 35px;
		color: white;
		padding: 0px 25px 0px 0px;
		margin: 0px 15px 0px 0px;
		}
	
	body 
		{
		background-image: url(image/back3.jpg);
		background-size: cover;
		}
		
</style>