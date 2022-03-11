<html>
	<head>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
		<title>
		Заказ
		</title>
		<link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon">
	</head>
	<body>
		<div class="frame">
			<div class="home">
				<a href="main.php"><i class="fas fa-igloo"></i>На главную
				</a>
			</div>
			<div class="tc">
				Заказ
			</div>
		</div>
		<div class="of">
			<div class="box">
				<input required class="surname" type="text">
				<label>Имя</label>
			</div>
			
			<div class="box">
				<input required class="name" type="text">
				<label>Фамилия</label>
			</div>
			
			<div class="box">
				<input required class="otch" type="text">
				<label>Отчество</label>
			</div>
			
			<div class="box">
				<select required name="season">
						<option value="">
						<option value="0">1
						<option value="1">2
						<option value="2">3
						<option value="3">4
						<option value="4">5
						<option value="5">6
						<option value="6">7
				</select>
				<label>Ряд</label>
			</div>
			
			<div class="box">
				<select required name="season">
						<option value="">
						<option value="0">1
						<option value="1">2
						<option value="2">3
						<option value="3">4
						<option value="4">5
						<option value="5">6
						<option value="6">7
				</select>
				<label>Место</label>
			</div>
			
			<div class="box">
				<input required class="otch" type="text">
				<label>Email</label>
			</div>
			
			<div class="box">
				<input required class="otch" type="text" value="(+375) ">
				<label>Номер телефона</label>
			</div>
			
			<div class="box">
				<input required class="otch" type="text">
				<label>Номер банковской карты</label>
			</div>
			
			<div class="but">
				<a class="thank" href="thank.php">Заказать</a>
			</div>
		</div>
	</body>
</html>

<style>
	
	.but
		{
		display: inline-block;
		margin: 0px 0px 0px 15px;
		overflow: hidden;
		}
	
	.but a.thank
		{
		color: #0000FF;		
		text-decoration: none;
		position: relative;
		font-size: 25px;
		margin: 0px 0px 0px 0px;
		padding: 3px;
		}
		
	
	.but a.thank::before,
	.but a.thank::after
		{
		content: "Заказать";
		display: block;
		width: 133%;
		height: 100%;
		color: #FFFF00;
		position: absolute;
		top: 3;
		left: -150%;
		transition: 1.0s;
		}
	
	.but a.thank::after
		{
		color: #FF0000;
		top: 100%;
		left: 0%;
		transition-delay: .2s;
		}
	
	.but a:hover::before
		{
		left: 150%;
		}
		
	.but a:hover::after
		{
		top: -100%;
		}
	
	a:active.button 
		{
		color: #FFFFFF;
		}
	
	.box
		{
		margin: 0px 0px 0px 10px;
		position: relative;
		}
		
	.box select
		{
		width: 140px;
		border: 1px solid #00FFFF;
		padding: 5px 0px 5px 4px;
		margin: 10px 0px 10px 4px;
		}
	
	.box input
		{
		border: none;
		border-bottom: 2px solid #00FFFF;
		padding: 5px 110px 5px 7px;
		margin: 10px 0px 10px 4px;
		}
		
	.box label
		{
		font-size: 15px;
		position: absolute;
		top: 0;
		left: 0;
		padding-top: 10;
		margin: 0px 0px 0px 7.6px;
		color: gray;
		transition: .5s;
		pointer-events: none;
		}
	
	.box select:focus ~ label,
	.box input:focus ~ label,
	.box input:valid ~ label 	
		{
		top: -20px;
		}
	
	.of
		{
		position: absolute;
		margin: 50px 0px 0px 600px;
		background: rgb(255, 255, 255, 0.5);
		padding: 15px 0px 15px 0px;
		width: 300px;
		}
	
	.tc
		{
		padding: 5px 30px 5px 30px;
		border: 4px ridge #FF69B4;
		position: absolute;
		top: -10;
		left: 300;
		color: #FF69B4;
		font-size: 50px;
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
	
	body 
		{
		background-image: url(image/back3.jpg);
		background-size: cover;
		}
		
</style>