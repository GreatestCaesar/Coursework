<html>
	<head>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<title>
		Order
		</title>
		<link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon">
	</head>
	<body>
		<div class="frame">
			<div class="home">
				<a href="book.php"><i class="fas fa-home"></i>На главную
				</a>
			</div>
			<div class="logo">
			</div>
			<div class="textfr">
				<h2>Оформление заказа</h2>
			</div>
		</div>
		<div class="dws-form">	
			<form action="http://localhost/ver1/last.php" method="POST">
				<p>Имя <input required class="log" type="text">
				<p>Фамилия <input required class="last" type="text">
				<p>Адрес <input required class="adress" type="text">
				<p>Способ оплаты <select required name="season">
									<option value="">
									<option value="0">Электронный кошелек
									<option value="1">Банковская карта
									<option value="2">Безналичное перечисление денежных средств
									<option value="3">Оплата наличными при получении товара
									<option value="4">Доставка покупок по почте наложенным платежо
								</select>
				<p>Сохранить адрес<input class="ch" type="checkbox">
				<input	class="btn" type="submit" value="Заказать">
			</form>
		</div>
	</body>
</html>

<style>
	
	body 
		{
		background-image: url(image/background-first.jpg);
		-webkit-background-size: cover;
		background-size: cover;
		}
			
	.home a
		{
		position: absolute;
		padding: 22px 41px 22px 59px;
		margin: 2px 0px 0px 0px;
		transition: all 0.3s ease;
		}
		
	.home a:link
		{
		text-decoration: none;
		font-family: Avantgarde, sans-serif;
		font-size: 30px;
		color: black;
		} 
		
	.home a:visited
		{
		color: black;
		}
		
	.home a:hover
		{
		background: #000000;
		color: #FFFFFF;
		transition: all 0.3s ease;
		}
		
	.frame
		{
		background-color: RGB(255, 255, 255);
		margin: -10 -8 -5 -8;
		height: 80px;
		}
		
	.logo
		{
		content: url(image/logo.png);
		position: absolute;
		margin: 10px 0px 0px 600px;
		height: 65px;
		}
	
	.frame .home > a i.fas
		{
		position: absolute;
		left: 23px;
		}
	
		
	.dws-form
		{
		position: absolute;
		background: white;
		color: black;
		margin: 25px 100px 0px 100px;
		padding: 20px 30px 20px 30px;
		}
		
	.log
		{
		position: relative;
		left: 95px;
		}
		
	.last
		{
		position: relative;
		left: 53.5px;
		}
		
	.adress
		{
		position: relative;
		left: 78.5px;
		} 
	
	.ch
		{
		position: relative;
		top: 2px;
		}
		
	.btn
		{
		position: relative;
		left: 100px;
		top: 20px;
		}
		
	.textfr
		{
		position: absolute;
		left: 260px;
		top: -6px;
		border-left: 1px solid gray;
		border-right: 1px solid gray;
		padding: 3px 15px 0px 15px;
		}

</style>