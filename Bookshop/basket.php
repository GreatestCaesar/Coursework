<html>
	<head>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<title>
		Cart
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
		</div>
		<div class="dws-form">			
			<div class="msg">
			</div>
			<div class="books">
				<script>
					if(localStorage.getItem('cart')){
						var cart = {};
						var names = JSON.parse(localStorage.getItem('names'));
						var image = JSON.parse(localStorage.getItem('images'));
						var price = JSON.parse(localStorage.getItem('price'));
						var count = 0;
						cart = JSON.parse(localStorage.getItem('cart'));
						if(!isEmpty(cart)){
							$('.msg').html('<p class="text" align=center>Корзина пуста</p>');
						}else{
							for(var id in cart){
								document.write("<div class='Book1'>");
									document.write("<div class='ris'>");
										document.write("<img src="+""+image[id]+""+" width="+"166"+" height="+"250"+">");
									document.write("</div>");
									document.write("<div class='text2'>");
										document.write(names[id]);
									document.write("</div>");
									document.write("<input class='del' type='submit' name='button' value='Удалить' id="+id+">");
								document.write("</div>");
								count +=  price[id];
							}
							if(count == 0){
							
							}else{
								document.write("<div class='sum'>");
									document.write("<p class='textsum'>Сумма заказа "+count+"</p>");
							document.write("</div>");
							document.write("<form name='form' action='http://localhost/ver1/order.php' method='POST'>");
								document.write("<input class='issue' type='submit' name='button' value='Оформить заказ'>");
							document.write("</form>");
						}
						}
					}else{
						$('.msg').html('<p class="text" align=center>Корзина пуста</p>');
					}
					
					$('.del').on('click', function () {
						var id = $(this).attr('id');
						delete cart[id];
						localStorage.setItem('cart', JSON.stringify(cart));
						location = location;
						//show();
					});
					
					function isEmpty(object){
						for(var n in object)
							if(object.hasOwnProperty(n)) return true;
						return false;
					}
				</script>
			</div>
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
		padding: 22px 41px 22px 47px;
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
		left: 7px;
		}
	
	.msg
		{
		width: 300px;
		margin: 200px 0px 0px -280px;
		}
	
	.text
		{
		color: #000000;
		background: #FFFFFF;
		font-size: 40px;
		padding: 0px 5px 2px 5px;
		}
	
	.Book1
		{
		width: 170;
		height: 100;
		display: block;
		margin: 250px -250px 30px;
		}
		
	.dws-form
		{
		margin: -190px 0px 0px 280px;
		}
		
	.text2
		{
		background: #FFFFFF;
		position: relative;
		margin: -250px 0px 0px 170px;
		width: 166px;
		}
	
	.books
		{
		display: block;
		}
		
	.del
		{
		width: 90px;
		height: 24px;
		margin: 2px 0px 0px 168px;
		}
	
	.issue
		{
		position: absolute;
		font-size: 15px;
		width: 150px;
		height: 32px;
		margin: 158px 0px 0px -60px;
		}
	
	.textsum
		{
		color: #000000;
		background: #FFFFFF;
		font-size: 20px;
		padding: 3px;
		margin: 200px 0px 0px -250px;
		width: 180px;
		}
		
	.sum	
		{
		position: absolute;
		margin: -40px 0px 0px 0px;
		padding: 0px 0px 5px 0px;
		}
		
</style>