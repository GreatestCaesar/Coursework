<html>
	<head>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script>
			var names = [ "", "Аладдин", "Стражи Арктики", "Стекло", 
				"Мстители: Финал", "Дамбо", "Убрать из друзей", "Хеллбой", 
				"Потерянное звено", "Шазам", "Джон Уик 3" ];
				
			var image = [ "", "image/aladdin.jpg", "image/arctic.jpg", "image/glass.jpg", 
				"image/avengers.jpg", "image/dambo.jpg", "image/dark.jpg", "image/hellboy.jpg", 
				"image/poter.jpg", "image/shazam.jpg", "image/uik.jpg" ];
				
			var price = [ '', 6, 11, 5.5, 4.5, 7, 4.5, 5, 6, 5, 11 ];
		</script>
	</head>
	<title>
		Фильмы
	</title>
	<link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon">
	<body>
		<div class="main">
			<div class="film">
				<div class="ris">
					<script>
						document.write("<img src="+""+image[1]+""+" width="+"166"+" height="+"250"+">");
					</script>
					<div class="desc-right">
						Молодой воришка по имени Аладдин хочет стать принцем, 
						чтобы жениться на принцессе Жасмин. Тем временем визирь Аграбы Джафар, 
						намеревается захватить власть над Аграбой, а для этого он стремится 
						заполучить волшебную лампу, хранящуюся в пещере чудес, доступ к 
						которой разрешен лишь тому, кого называют «алмаз неограненный», 
						и этим человеком является никто иной как сам Аладдин.
					</div>
				</div>
				<div class="text2">
					<script>
						document.write(names[1]);
					</script>
					</div>
				<div class="dyn">
					<input class="btn" type="submit" name="button" value="Заказать" id=1>
					<script>
						document.write("<input class='text3' type='text' value="+price[1]+" disabled>руб");
					</script>
				</div>
			</div>
				
			<div class="film">
				<div class="ris">
					<script>
						document.write("<img src="+""+image[2]+""+" width="+"166"+" height="+"250"+">");
					</script>
					<div class="desc-right">
						Полнометражный мультик "Стражи Арктики" рассказывает 
						о судьбе полярного лиса - Свифти, работающего в компании 
						по доставке почты. Его главная мечта - вступить в команду 
						курьеров, работающих "на высоких скоростях". Он даже, 
						чтобы доказать, что справится не хуже северных собак, 
						угоняет упряжку, в которой находится важная посылка, 
						привозя ее к условленному месту, 
						а точнее, к супер-злодею, хитроумному моржу.
					</div>
				</div>
				<div class="text2">
					<script>
						document.write(names[2]);
					</script>
					</div>
				<div class="dyn">
					<input class="btn" type="submit" name="button" value="Заказать" id=2>
					<script>
						document.write("<input class='text3' type='text' value="+price[2]+" disabled>руб");
					</script>
				</div>
			</div>
			
			<div class="film">
				<div class="ris">
					<script>
						document.write("<img src="+""+image[3]+""+" width="+"166"+" height="+"250"+">");
					</script>
					<div class="desc-left">
						В поисках встречи с обладающим фантастическими способностями 
						и 
						снова убивающем девушек Зверем Дэвид Данн выходит на след 
						Кевина 
						Крамба. Но решающая схватка не успевает состояться, 
						наших героев ловят и отправляют в психиатрическую больницу. 
					</div>
				</div>
				<div class="text2">
					<script>
						document.write(names[3]);
					</script>
					</div>
				<div class="dyn">
					<input class="btn" type="submit" name="button" value="Заказать" id=3>
					<script>
						document.write("<input class='text3' type='text' value="+price[3]+" disabled>руб");
					</script>
				</div>
				
			</div>
			
			<div class="film">
				<div class="ris">
					<script>
						document.write("<img src="+""+image[4]+""+" width="+"166"+" height="+"250"+">");
					</script>
					<div class="desc-left">
						Оставшиеся в живых члены команды Мстителей и 
						их 
						союзники должны разработать новый план, 
						который 
						поможет противостоять разрушительным 
						действиям 
						могущественного титана Таноса. После 
						наиболее 
						масштабной и трагической битвы 
						в истории они не могут допустить 
						ошибку.
					</div>
				</div>
				<div class="text2">
					<script>
						document.write(names[4]);
					</script>
					</div>
				<div class="dyn">
					<input class="btn" type="submit" name="button" value="Заказать" id=4>
					<script>
						document.write("<input class='text3' type='text' value="+price[4]+" disabled>руб");
					</script>
				</div>
			</div>
			
			<div class="film">
				<div class="ris">
					<script>
						document.write("<img src="+""+image[5]+""+" width="+"166"+" height="+"250"+">");
					</script>
					<div class="desc-right">
						Цирковой импресарио Марк Медичи назначает бывшую 
						звезду цирка Холта Фэрриера и его детей Милли и 
						Джо опекунами новорожденного слонёнка, чьи невероятно 
						большие уши сразу становятся предметом для 
						постоянных шуток и насмешек коллег Холта по цеху. 
						Внезапно узнав, что Дамбо умеет летать, 
						владелец цирка решает нажиться на необычных 
						способностях слонёнка.
					</div>
				</div>
				<div class="text2">
					<script>
						document.write(names[5]);
					</script>
					</div>
				<div class="dyn">
					<input class="btn" type="submit" name="button" value="Заказать" id=5>
					<script>
						document.write("<input class='text3' type='text' value="+price[5]+" disabled>руб");
					</script>
				</div>
			</div>
			
			<div class="film">
				<div class="ris">
					<script>
						document.write("<img src="+""+image[6]+""+" width="+"166"+" height="+"250"+">");
					</script>
					<div class="desc-right">
						В только что купленном ноутбуке Матиас обнаруживает 
						страшные видеофайлы из даркнета. Во время 
						коллективного чата он показывает их друзьям. 
						Компьютер заражен новым, неопознанным вирусом, 
						и кто-то неизвестный начинает смертельную игру в прямом эфире, 
						которую никто не может покинуть просто так.
					</div>
				</div>
				<div class="text2">
					<script>
						document.write(names[6]);
					</script>
					</div>
				<div class="dyn">
					<input class="btn" type="submit" name="button" value="Заказать" id=6>
					<script>
						document.write("<input class='text3' type='text' value="+price[6]+" disabled>руб");
					</script>
				</div>
			</div>
			
			<div class="film">
				<div class="ris">
					<script>
						document.write("<img src="+""+image[7]+""+" width="+"166"+" height="+"250"+">");
					</script>
					<div class="desc-left">
						Близится час битвы Хеллбоя с Кровавой королевой, 
						жаждущей отомстить всему человечеству за века 
						в заточении. Оказавшись в эпицентре 
						столкновения мира людей и монстров, 
						Хеллбою придется пройти через ад, 
						чтобы предотвратить надвигающийся апокалипсис
					</div>
				</div>
				<div class="text2">
					<script>
						document.write(names[7]);
					</script>
					</div>
				<div class="dyn">
					<input class="btn" type="submit" name="button" value="Заказать" id=7>
					<script>
						document.write("<input class='text3' type='text' value="+price[7]+" disabled>руб");
					</script>
				</div>
			</div>
			
			<div class="film">
				<div class="ris">
					<script>
						document.write("<img src="+""+image[8]+""+" width="+"166"+" height="+"250"+">");
					</script>
					<div class="desc-left">
						Бесстрашный натуралист и 
						исследователь Лайонел Фрост 
						поставил перед собой задачу 
						рассказать миру о 
						существовании разных 
						созданий, о которых 
						говорят только в легендах. 
						Его новым открытием 
						становится Линк, так 
						называемое «недостающее 
						звено», связывающее человечество с его 
						предками по эволюционной лестнице.
					</div>
				</div>
				<div class="text2">
					<script>
						document.write(names[8]);
					</script>
					</div>
				<div class="dyn">
					<input class="btn" type="submit" name="button" value="Заказать" id=8>
					<script>
						document.write("<input class='text3' type='text' value="+price[8]+" disabled>руб");
					</script>
				</div>
			</div>
			
			<div class="film">
				<div class="ris">
					<script>
						document.write("<img src="+""+image[9]+""+" width="+"166"+" height="+"250"+">");
					</script>
					<div class="desc-right">
						Юный главный герой обретает способность в 
						критические моменты с помощью одного магического слова 
						превращаться во взрослого супергероя...
					</div>
				</div>
				<div class="text2">
					<script>
						document.write(names[9]);
					</script>
					</div>
				<div class="dyn">
					<input class="btn" type="submit" name="button" value="Заказать" id=9>
					<script>
						document.write("<input class='text3' type='text' value="+price[9]+" disabled>руб");
					</script>
				</div>
			</div>
			
			<div class="film">
				<div class="ris">
					<script>
						document.write("<img src="+""+image[10]+""+" width="+"166"+" height="+"250"+">");
					</script>
					<div class="desc-right">
						Суперкиллер Джон Уик после нарушения кодекса тайной гильдии ассасинов 
						получает статус изгоя — экскомьюникадо. За его голову назначена цена 
						в 14 миллионов долларов, и армия самых жестоких профессиональных 
						убийц со всего мира открывает на него кровавую охоту.
					</div>
				</div>
				<div class="text2">
					<script>
							document.write(names[10]);
					</script>
					</div>
				<div class="dyn">
					<input class="btn" type="submit" name="button" value="Заказать" id=10>
					<script>
						document.write("<input class='text3' type='text' value="+price[10] +" disabled>руб");
					</script>
				</div>
			</div>
		</div>
		
		<a class="cart" href="cart.php"><i class="fas fa-shopping-cart"></i><div class="circle">
		0
		</div></a>
				
		
		
		<script>
			var cart = {};
			var qu = 0;
			$('.btn').on('click', function () {
				var id = $(this).attr('id');
				if(cart[id] == undefined){
					cart[id] = 1;
				}else{
					cart[id]++;
				}
				save();
				location = location;
			});	

			function save(){
				localStorage.setItem('cart', JSON.stringify(cart));
				localStorage.setItem('names', JSON.stringify(names));
				localStorage.setItem('images', JSON.stringify(image));
				localStorage.setItem('price', JSON.stringify(price));
			}
			
			function loadCart(){
				if(localStorage.getItem('cart')){
					cart = JSON.parse(localStorage.getItem('cart'));
					var qu = sum( cart );
					$('.circle').html(qu);
				}
			}
			
			function sum( obj ) {
				var sum = 0;
				for( var el in obj ) {
					if( obj.hasOwnProperty( el ) ) {
						sum += parseFloat( obj[el] );
					}
				}
				return sum;
			}
			
			window.onload = loadCart;
		</script>
	</body>
<html>

<style>
	
	.circle 
		{
		position: absolute;
		bottom: 30;
		left: 35;
		font-size: 40%;
		color: white;
		text-align: center;
		width: 20px;
		height: 20px;
		-webkit-border-radius: 10px;
		-moz-border-radius: 10px;
		border-radius: 10px;
		background: red;
		display: block;
		}
		
	.cart
		{
		color: white;
		position: absolute;
		font-size: 40px;
		left: 105;
		top: 30;
		}
		
	.cart:hover
		{
		font-size: 50px;
		}
		
	
	.cart:hover .circle
		{
		bottom: 40;
		left: 45;
		}	
	
	.desc-left
		{
		z-index: 2;
		height: 322px;
		width: 240px;
		font-size: 17px;
		position: absolute;
		left: 500%;
		top: 0;
		background: rgba(255,255,255, 0.9);
		padding: 5px;
		display: block;
		transition: 2.0s;
		}
		
	.ris:hover .desc-left
		{
		transition: 2.0s;
		left: -100%;
		}
	
	.desc-right
		{
		z-index: 2;
		height: 322px;
		width: 240px;
		font-size: 17px;
		position: absolute;
		left: -500%;
		bottom: 0;
		right: 0;
		top: 0;
		background: rgba(255,255,255, 0.9);
		padding: 5px;
		display: block;
		transition: 1.5s;
		}
		
	.ris:hover .desc-right
		{
		transition: 1.5s;
		left: 40%;
		}
		
	.text2
		{
		color: #0000CD;
		margin: 5px 0px 0px 0px;
		font-size: 80%;
		}
		
	.dyn
		{
		position: relative;
		margin: 5px 0px 2px 0px;
		font-size: 80%;
		}
		
	.film
		{
		position: relative;
		margin: 15px;
		background: white;
		}
		
	.text3
		{
		position: relative;
		color: black;
		background: white;
		border: 0;
		width: 20px;
		margin: 0px 0px 0px 2px;
		}
		
	body 
		{
		background-image: url(image/back2.jpg);
		background-position: center center;
		}
		
	.main
		{
		margin: 80px 15px 80px 65px;
		overflow: hidden;
		}
		
	.main > .film
		{
		padding: 15px 15px 15px 15px;
		position: relative;
		display: inline-block;
		}
</style>