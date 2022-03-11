<html>
	<head>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
		<title>
		Корзина
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
			Корзина
			</div>
		</div>
		<div class="msg">
		</div>
		<div class="main">
			<script>
			if(localStorage.getItem('cart')){
					var cart = {};
					var names = JSON.parse(localStorage.getItem('names'));
					var image = JSON.parse(localStorage.getItem('images'));
					var price = JSON.parse(localStorage.getItem('price'));
					cart = JSON.parse(localStorage.getItem('cart'));
					var count = 0;
					if(!isEmpty(cart)){
						$('.msg').html('<p class="text" align=center>Корзина пуста  <i class="fas fa-sad-tear"></i></p>');
					}else{
						for(var id in cart){
							if(cart[id] == 0){
								continue;
							}else{
								document.write("<div class='film'>");
									document.write("<div class='ris'>");
										document.write("<img src="+""+image[id]+""+" width="+"166"+" height="+"250"+">");
									document.write("</div>");
									document.write("<div class='text2'>");
										document.write(names[id]);
									document.write("</div>");
									document.write("<input class='del' type='submit' name='button' value='-' id="+id+">");
									document.write("<input class='koli' type='text' value="+cart[id]+" disabled >");
									document.write("<input class='add' type='submit' name='button' value='+' id="+id+">");
								document.write("</div>");
								count +=  price[id];
							}
						}
						if(count == 0){
						
						}else{
							document.write("<div class='sum'>");
								document.write("<p class='textsum'>Сумма заказа "+count+"</p>");
							document.write("</div>");
							document.write("<form name='form' action='http://localhost/vik/payment.php' method='POST'>");
								document.write("<input class='issue' type='submit' name='button' value='Оформить'>");
							document.write("</form>"); 
						}
					}
				}else{
					$('.msg').html('<p class="text" align=center>Корзина пуста  <i class="fas fa-sad-tear"></i></p>');
				}
					
				$('.del').on('click', function () {
					var id = $(this).attr('id');
					cart = JSON.parse(localStorage.getItem('cart'));
					cart[id] = cart[id]-1;
					for(var id in cart){
							if(cart[id] == 0){
								delete cart[id];
							}
						}
					localStorage.setItem('cart', JSON.stringify(cart));
					cart = JSON.parse(localStorage.getItem('cart'));
					location = location;
				});
				
				$('.add').on('click', function () {
					var id = $(this).attr('id');
					cart = JSON.parse(localStorage.getItem('cart'));
					cart[id] = cart[id]+1;
					localStorage.setItem('cart', JSON.stringify(cart));
					location = location;
				});
					
				function isEmpty(object){
					for(var n in object)
						if(object.hasOwnProperty(n)) return true;
					return false;
				}
				
				function loadCart(){
					if(localStorage.getItem('cart')){
						cart = JSON.parse(localStorage.getItem('cart'));
					}
				}	
			
				window.onload = loadCart;
			</script>
		</div>
	</body>
</html>

<style>
	
	.tc
		{
		padding: 5px 30px 5px 30px;
		border: 4px dashed #FF00FF;
		position: absolute;
		top: -10;
		left: 300;
		color: #FF00FF;
		font-size: 50px;
		}
	
	.koli
		{
		text-align: center;
		border: 0;
		width: 30px;
		border-radius: 5px;
		background: white;
		color: black;
		margin: -281.5px 0px 0px 208.5px;
		}
		
	.del
		{
		margin: -283.5px 0px 0px 187px;
		}
		
	.add
		{
		margin: -283.5px 0px 0px 240px;
		}
	
	.home a
		{
		font-family: 'Lobster', cursive;
		text-decoration: none;
		font-size: 130%;
		color: #FF00FF;
		position: absolute;
		top: 15;
		left: 50;
		z-index: -1;
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
		left: -200%;
		transition: .3s;
		z-index: 1;
		}
		
	.home a:hover::before
		{
		left: 0;
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
		
	.film
		{
		display: block;
		background: white;
		width: 165px;
		padding: 15px 15px 3px 15px;
		margin: 15px 0px 15px 0px;
		}
		
	.main
		{
		display: block;
		margin: -110px 15px 80px 85px;
		}
	
	.msg
		{
		font-size: 70px;
		color: white;
		width: 500px;
		margin: 230px 0px 0px 250px;
		}
		
	.textsum
		{
		color: #000000;
		background: #FFFFFF;
		font-size: 20px;
		padding: 3px 0px 3px 3px;
		margin: 50px 0px 0px 0px;
		width: 160px;
		}	
	
	.text2
		{
		color: #0000CD;
		font-size: 80%;
		margin: auto;
		position: relative;
		bottom: 1;
		}
		
	.sum	
		{
		position: absolute;
		margin: -35px 0px 0px 0px;
		}
	
	.issue
		{
		position: absolute;
		font-size: 15px;
		width: 150px;
		height: 32px;
		margin: 13px 0px 0px 165px;
		}
	
</style>