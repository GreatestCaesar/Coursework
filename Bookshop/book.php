<html>
	<head>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script>
			var names = [ "", "50 оттенков серого", "Бойцовский клуб", "451 градус по Фаренгейту", 
				"Мартин Иден", "100 лет одиночества", "Чапаев и пустота", "Колыбель для кошки",
				"Убить пересмешника", "Учение Дона Хуана", "Алиса в Стране чудес", "Приключения Тома Сойера", 
				"Питер Пэн и Венди", "Книга джунглей", "Приключения Пиноккио", "Алиса в Зазеркалье", 
				"Приключения Гекльберри Финна", "Принц и нищий", "Хоббит, или Туда и обратно", 
				"Маленькие женщины", "Четыре письма о любви", "Доктор Паскаль", "Странник по звездам", 
				"Пожиратели звезд", "Фауст", "Спаси меня, вальс", "Портрет Дориана Грея", "Гость Дракулы", 
				"1984", "Пикник на обочине", "Дюна", "Марсианские хроники", "О дивный новый мир", "Гиперион", 
				"Солярис", "Трудно быть богом", "Конец Вечности", "Выбери себя", "Эссенциализм. Путь к простоте",
				"Сила настоящего", "Сделай себя сам", "Большое волшебство", "Важные годы", "Разожги огонь", 
				"Думай и богатей", "Инсайт" ];
				
			var image = [ "", "image/50os.jpg", "image/fight.jpg", "image/451.jpg", "image/mart.jpg",
				"image/100.jpg", "image/chap.jpg", "image/kurt.jpg", "image/peres.jpg", "image/uch.jpg",
				"image/alisa.jpg", "image/tom.jpg", "image/piter.jpg", "image/boo.jpg", "image/pin.jpg",
				"image/alisazaz.jpg", "image/adv.jpg", "image/princ.jpg", "image/hobbit.jpg", "image/little.jpg", 
				"image/four.jpg", "image/emil.jpg", "image/adven.jpg", "image/star.jpg", "image/faust.jpg", 
				"image/save.jpg", "image/port.jpg", "image/visitor.jpg", "image/1984.jpg", "image/strug.jpg", 
				"image/dyna.jpg", "image/mars.jpg", "image/world.jpg", "image/gip.jpg", "image/sol.jpg", 
				"image/god.jpg", "image/end.jpg", "image/select.jpg", "image/way.jpg", "image/now.jpg", 
				"image/make.jpg", "image/big.jpg", "image/important.jpg", "image/fire.jpg", "image/think.jpg", 
				"image/insite.jpg" ];
				
			var price = [ '', 1111.2, 3567.5,  3567.5, 3567.5, 3567.5, 3567.5, 3567.5, 3567.5, 3567.5, 3567.5,
				3567.5, 3567.5, 3567.5, 3567.5, 3567.5, 3567.5, 3567.5, 3567.5, 3567.5, 3567.5, 3567.5, 3567.5,
				3567.5, 3567.5, 3567.5, 3567.5, 3567.5, 3567.5, 3567.5, 3567.5, 3567.5, 3567.5, 3567.5, 3567.5,
				3567.5, 3567.5, 3567.5, 3567.5, 3567.5, 3567.5, 3567.5, 3567.5, 3567.5, 3567.5, 3567.5 ];
		</script>
		<title>
		BookShop
		</title>
		<link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon">
	</head>
	<body>
		<div class="frame">
			<div class="basket">
				<a href="basket.php"><span class="text"><i class="fas fa-shopping-basket"></i>Корзина</span>
				</a>
			</div>
			<div class="se">
				<input type="search" name="query" placeholder="Поиск по сайту...">
				<br><button type="submit">Поиск</button> 
			</div>
			<div class="logo">
			Книжный магазин
			</div>
		</div>
		
		<div class="window">
			<div class="tabs">
				<label class="tab active" title="Вкладка 1">Новинки</label>
				<label class="tab " title="Вкладка 2">Детская литература</label>
				<label class="tab " title="Вкладка 3">Художественная литература</label>
				<label class="tab " title="Вкладка 4">Фантастика</label>
				<label class="tab " title="Вкладка 5">Саморазвитие</label>
			</div>
		</div>
		
		<div class="dws-form">			
			<div class="New active">
				<div class="Book1">
					<div class="ris">
						<script>
							document.write("<img src="+""+image[1]+""+" width="+"166"+" height="+"250"+">");
						</script>
					</div>
					<div class="text2">
						<script>
							document.write(names[1]);
						</script>
					</div>
					<div class="dyn">
						<input class="btn" type="submit" name="button" value="Добавить" id=1>
						<script>
							document.write("<input class='text3' type='text' value="+price[1]+" readonly>");
						</script>
					</div>
					<div class="inf">
						США, наши дни. Брать интервью у молодого президента корпорации, Кристиана Грея, должна была подруга Анастейши, 
						Кейт. Но Кейт заболела, и судьба столкнула Анастейшу с этим привлекательным, но очень закрытым бизнесменом. 
						Короткое и острое интервью, пара постановочных снимков - и кажется, они больше не встретятся никогда.
					</div>
				</div>
					
				<div class="Book1">
					<div class="ris">
						<script>
							document.write("<img src="+""+image[2]+""+" width="+"166"+" height="+"250"+">");
						</script>
					</div>
					<div class="text2">
						<script>
							document.write(names[2]);
						</script>
					</div>
					<div class="dyn">
						<input class="btn" type="submit" name="button" value="Добавить" id=2>
						<script>
							document.write("<input class='text3' type='text' value="+price[2]+" readonly>");
						</script>
					</div>
					<div class="inf">
						"Бойцовский клуб" - самый знаменитый роман Чака Паланика. 
						Все помнят фильм режиссера Дэвида Финчера с Брэдом Питтом в главной роли? 
						Он именно по этой книге. Это роман-вызов, роман, созданный всем назло и вопреки всему, 
						в нем описывается поколение озлобившихся людей, потерявших представление о том, 
						что можно и чего нельзя, 
						где добро и зло, кто они сами и кто их окружает
					</div>
				</div>		

				<div class="Book1">
					<div class="ris">
						<script>
							document.write("<img src="+""+image[3]+""+" width="+"166"+" height="+"230"+">");
						</script>
					</div>
					<div class="text2">
						<script>
							document.write(names[3]);
						</script>
					</div>
					<div class="dyn">
						<input class="btn" type="submit" name="button" value="Добавить" id=3>
						<script>
							document.write("<input class='text3' type='text' value="+price[3]+" readonly>");
						</script>
					</div>
					<div class="inf">
						В мире не слишком отдаленного будущего главный герой, Гай Монтэг, служит пожарником. 
						Однако его работа вовсе не в том, чтобы тушить пожары, а в том, чтобы разжигать их и уничтожать книги, 
						от которых в идеальном обществе будущего одни проблемы. 
						Но однажды Монтэг встречает странную девушку и впервые задумывается о том, 
						почему он должен уничтожать книги и что же в них написано.
					</div>
				</div>	
					
				<div class="Book1">
					<div class="ris">
						<script>
							document.write("<img src="+""+image[4]+""+" width="+"166"+" height="+"250"+">");
						</script>
					</div>
					<div class="text2">
						<script>
							document.write(names[4]);
						</script>
					</div>
					<div class="dyn">
						<input class="btn" type="submit" name="button" value="Добавить" id=4>
						<script>
							document.write("<input class='text3' type='text' value="+price[4]+" readonly>");
						</script>
					</div>
					<div class="inf">
						Волею случая оказавшийся в светском обществе, Мартин Иден вдвойне счастлив и удивлен... 
						и пробудившимся в нем творческим даром, и божественным образом юной Руфи Морз 
						("хрупкий золотистый цветок"), так не похожей на всех людей, которых он знал прежде... 
						Отныне две цели неотступно стоят перед ним: слава писателя и обладание любимой женщиной. 
						Но мечты непредсказуемы и коварны: неизвестно, 
						когда они сбудутся и принесет ли это долгожданную радость...
					</div>
				</div>	
					
				<div class="Book1">
					<div class="ris">
						<script>
							document.write("<img src="+""+image[5]+""+" width="+"166"+" height="+"230"+">");
						</script>
					</div>
					<div class="text2">
						<script>
							document.write(names[5]);
						</script>
					</div>
					<div class="dyn">
						<input class="btn" type="submit" name="button" value="Добавить" id=5>
						<script>
							document.write("<input class='text3' type='text' value="+price[5]+" readonly>");
						</script>
					</div>
					<div class="inf">
						Одна из величайших книг ХХ века. Странная, поэтичная, причудливая история города Макондо, 
						затерянного где-то в джунглях, - от сотворения до упадка. История рода Буэндиа - семьи, 
						в которой чудеса столь повседневны, что на них даже не обращают внимания. 
						Клан Буэндиа порождает святых и грешников, революционеров, героев и предателей, 
						лихих авантюристов - и женщин, слишком прекрасных для обычной жизни. 
					</div>
				</div>	
				
				<div class="Book1">
					<div class="ris">
						<script>
							document.write("<img src="+""+image[6]+""+" width="+"166"+" height="+"250"+">");
						</script>
					</div>
					<div class="text2">
						<script>
							document.write(names[6]);
						</script>
					</div>
					<div class="dyn">
						<input class="btn" type="submit" name="button" value="Добавить" id=6>
						<script>
							document.write("<input class='text3' type='text' value="+price[6]+" readonly>");
						</script>
					</div>
					<div class="inf">
						Герой романа "Чапаев и Пустота" - вообразивший себя поэтом-декадентом пациент психиатрической больницы Петр Пустота. 
						Он живет в двух разных эпохах: в 1919 году знакомится с Чапаевым, служит в его дивизии комиссаром, 
						влюбляется в Анку и даже чуть не гибнет в бою; а в другой реальности встречается с Кавабатой, 
						Шварценеггером и "просто Марией"...
					</div>
				</div>	
					
				<div class="Book1">
					<div class="ris">
						<script>
							document.write("<img src="+""+image[7]+""+" width="+"166"+" height="+"250"+">");
						</script>
					</div>
					<div class="text2">
						<script>
							document.write(names[7]);
						</script>
					</div>
					<div class="dyn">
						<input class="btn" type="submit" name="button" value="Добавить" id=7>
						<script>
							document.write("<input class='text3' type='text' value="+price[7]+" readonly>");
						</script>
					</div>
					<div class="inf">
						Послушайте - когда-то, две жены тому назад, двести пятьдесят тысяч сигарет тому назад, 
						три тысячи литров спиртного тому назад... Тогда, когда все были молоды...
						Послушайте - мир вращался, богатые изнывали от глупости и скуки, 
						бедным оставалось только одно - быть свободными и умными. 
						Правда была неправдоподобнее всякого вымысла. Женщины были злы и красивы, 
						а мужчины - несчастны и полны глупых надежд.
					</div>				
				</div>

				<div class="Book1">
					<div class="ris">
						<script>
							document.write("<img src="+""+image[8]+""+" width="+"166"+" height="+"250"+">");
						</script>
					</div>
					<div class="text2">
						<script>
							document.write(names[8]);
						</script>
					</div>
					<div class="dyn">
						<input class="btn" type="submit" name="button" value="Добавить" id=8>
						<script>
							document.write("<input class='text3' type='text' value="+price[8]+" readonly>");
						</script>
					</div>
					<div class="inf">
						История маленького сонного городка на юге Америки, поведанная маленькой девочкой.
						История ее брата Джима, друга Дилла и ее отца - честного, принципиального адвоката Аттикуса Финча, 
						одного из последних и лучших представителей старой "южной аристократии".
						История судебного процесса по делу чернокожего парня, обвиненного в насилии над белой девушкой.
					</div>
				</div>
				
				<div class="Book1">
					<div class="ris">
						<script>
							document.write("<img src="+""+image[9]+""+" width="+"166"+" height="+"250"+">");
						</script>
					</div>
					<div class="text2">
						<script>
							document.write(names[9]);
						</script>
					</div>
					<div class="dyn">
						<input class="btn" type="submit" name="button" value="Добавить" id=9>
						<script>
							document.write("<input class='text3' type='text' value="+price[9]+" readonly>");
						</script>
					</div>
					<div class="inf">
						Это история калифорнийского антрополога с научным складом ума, 
						знакомства и долгое общение которого с мексиканским индейским знахарем в итоге 
						приводит его к приобретению глубокого метафизического опыта.
					</div>
				</div>
			</div>
			
			<div class="New">
				<div class="Book1">
					<div class="ris">
						<script>
							document.write("<img src="+""+image[10]+""+" width="+"166"+" height="+"230"+">");
						</script>
					</div>
					<div class="text2">
						<script>
							document.write(names[10]);
						</script>
					</div>
					<div class="dyn">
						<input class="btn" type="submit" name="button" value="Добавить" id=10>
						<script>
							document.write("<input class='text3' type='text' value="+price[10]+" readonly>");
						</script>
					</div>
					<div class="inf">
							"Алиса в Стране Чудес", бессмертное произведение классика английской литературы Льюиса Кэрролла, - это сказка, 
							написанная для детей и повествующая о чудесных приключениях главной героини. Но тем удивительнее, что это, пожалуй, 
							единственная сказка, которую с не меньшим удовольствием читают и взрослые
					</div>
				</div>
				
				<div class="Book1">
					<div class="ris">
						<script>
							document.write("<img src="+""+image[11]+""+" width="+"166"+" height="+"230"+">");
						</script>
					</div>
					<div class="text2">
						<script>
							document.write(names[11]);
						</script>
					</div>
					<div class="dyn">
						<input class="btn" type="submit" name="button" value="Добавить" id=11>
						<script>
							document.write("<input class='text3' type='text' value="+price[11]+" readonly>");
						</script>
					</div>
					<div class="inf">
						В книге рассказывается о хитрых проделках двух обычных американских мальчишек. 
						Писатель с большим мастерством рисует жизнь провинциального городка в Америке 40-х годов XIX века. 
						Увлекательной повестью М.Твена зачитывались несколько поколений.
					</div>
				</div>		

				<div class="Book1">
					<div class="ris">
						<script>
							document.write("<img src="+""+image[12]+""+" width="+"166"+" height="+"250"+">");
						</script>
					</div>
					<div class="text2">
						<script>
							document.write(names[12]);
						</script>
					</div>
					<div class="dyn">
						<input class="btn" type="submit" name="button" value="Добавить" id=12>
						<script>
							document.write("<input class='text3' type='text' value="+price[12]+" readonly>");
						</script>
					</div>
					<div class="inf">
						Шотландский писатель Джеймс Барри прославился созданием книг о сказочном мальчике по имени Питер Пэн, 
						который никак не хотел взрослеть. История начинается с того, 
						что однажды Питер Пэн влетел в окно детской в доме, где жили девочка Венди и двое ее братьев. 
						Вместе с Питером они отправились на далёкий волшебный остров. Там им встретились русалки, 
						храбрые индейцы, озорная фея и даже пираты с их злобным главарём капитаном Крюком.
					</div>
				</div>	
				
				<div class="Book1">
					<div class="ris">
						<script>
							document.write("<img src="+""+image[13]+""+" width="+"166"+" height="+"250"+">");
						</script>
					</div>
					<div class="text2">
						<script>
							document.write(names[13]);
						</script>
					</div>
					<div class="dyn">
						<input class="btn" type="submit" name="button" value="Добавить" id=13>
						<script>
							document.write("<input class='text3' type='text' value="+price[13]+" readonly>");
						</script>
					</div>
					<div class="inf">
						В этом издании наиболее полно передан перевод "Книги джунглей". 
						В нем содержатся не только известные нашим читателям рассказы и сказки, 
						но и редко издававшиеся на русском языке стихотворные произведения Киплинга, 
						которые являются неотъемлемой частью этой знаменитой книги. 
						Особую ценность издания составляют замечательные иллюстрации всемирно известного художника.
					</div>
				</div>	
				
				<div class="Book1">
					<div class="ris">
						<script>
							document.write("<img src="+""+image[14]+""+" width="+"166"+" height="+"230"+">");
						</script>
					</div>
					<div class="text2">
						<script>
							document.write(names[14]);
						</script>
					</div>
					<div class="dyn">
						<input class="btn" type="submit" name="button" value="Добавить" id=14>
						<script>
							document.write("<input class='text3' type='text' value="+price[14]+" readonly>");
						</script>
					</div>
					<div class="inf">
						Лучшая классика иллюстрирования. Те, кто увидел эти рисунки однажды, запомнят их на всю жизнь. 
						Книги для всех поколений.
					</div>
				</div>	
				
				<div class="Book1">
					<div class="ris">
						<script>
							document.write("<img src="+""+image[15]+""+" width="+"166"+" height="+"250"+">");
						</script>
					</div>
					<div class="text2">
						<script>
							document.write(names[15]);
						</script>
					</div>
					<div class="dyn">
						<input class="btn" type="submit" name="button" value="Добавить" id=15>
						<script>
							document.write("<input class='text3' type='text' value="+price[15]+" readonly>");
						</script>
					</div>
					<div class="inf">
						В этой книге вы встретитесь с девочкой Алисой и попадете вместе с ней в удивительный, 
						загадочный мир Зазеркалья. Пересказ Л.Яхнина.
					</div>
				</div>	
				
				<div class="Book1">
					<div class="ris">
						<script>
							document.write("<img src="+""+image[16]+""+" width="+"166"+" height="+"230"+">");
						</script>
					</div>
					<div class="text2">
						<script>
							document.write(names[16]);
						</script>
					</div>
					<div class="dyn">
						<input class="btn" type="submit" name="button" value="Добавить" id=16>
						<script>
							document.write("<input class='text3' type='text' value="+price[16]+" readonly>");
						</script>
					</div>
					<div class="inf">
						Эта книга о незабываемых приключениях Гекльберри Финна, храброго, неунывающего, 
						очень доброго беспризорного мальчишки и его верного друга Тома Сойера.
						Вместе ребята попадают в самые трудные ситуации, где проявляют свою находчивость, 
						благородство и идут против всех на защиту обиженных.
					</div>
				</div>

				<div class="Book1">
					<div class="ris">
						<script>
							document.write("<img src="+""+image[17]+""+" width="+"166"+" height="+"250"+">");
						</script>
					</div>
					<div class="text2">
						<script>
							document.write(names[17]);
						</script>
					</div>
					<div class="dyn">
						<input class="btn" type="submit" name="button" value="Добавить" id=17>
						<script>
							document.write("<input class='text3' type='text' value="+price[17]+" readonly>");
						</script>
					</div>
					<div class="inf">
						«Принц и нищий» - первый и самый известный исторический роман американского писателя Марка Твена. 
						В нем рассказывается о приключениях английского принца юного Эдуарда Тюдора и маленького оборвыша 
						Тома Кенти, как две капли воды похожих друг на друга, и на время поменявшихся местами.
					</div>
				</div>
				
				<div class="Book1">
					<div class="ris">
						<script>
							document.write("<img src="+""+image[18]+""+" width="+"166"+" height="+"230"+">");
						</script>
					</div>
					<div class="text2">
						<script>
							document.write(names[18]);
						</script>
					</div>
					<div class="dyn">
						<input class="btn" type="submit" name="button" value="Добавить" id=18>
						<script>
							document.write("<input class='text3' type='text' value="+price[18]+" readonly>");
						</script>
					</div>
					<div class="inf">
						Перед вами - самая любимая волшебная сказка для детей в самом любимом оформлении, 
						знакомом каждому. Именно с нее начинается знакомство с чудесным миром Средиземья. 
						Но величественная трилогия о Кольце Всевластья случится чуть позже, 
						а сейчас в уютную норку хоббита Бильбо вот-вот постучится Приключение, 
						и он в компании гномов и волшебника Гэндальфа отправится в дальнее путешествие на поиски 
						пропавших сокровищ.
					</div>
				</div>
			</div>
			
			<div class="New">
				<div class="Book1">
					<div class="ris">
						<script>
							document.write("<img src="+""+image[19]+""+" width="+"166"+" height="+"230"+">");
						</script>
					</div>
					<div class="text2">
						<script>
							document.write(names[19]);
						</script>
					</div>
					<div class="dyn">
						<input class="btn" type="submit" name="button" value="Добавить" id=19>
						<script>
							document.write("<input class='text3' type='text' value="+price[19]+" readonly>");
						</script>
					</div>
					<div class="inf">
						Это трогательная история четырех сестер, которые вместе с матерью переживают далеко не лучшие времена: 
						в стране идет Гражданская война, глава семьи где-то воюет, средств к существованию не хватает. 
						Но как бы ни было трудно, героини книги стараются не унывать и во всем «любовью служить друг другу». 
						Они верят: только любовь поможет человеку преодолеть все невзгоды и обрести истинное счастье.
					</div>
				</div>
				
				<div class="Book1">
					<div class="ris">
						<script>
							document.write("<img src="+""+image[20]+""+" width="+"166"+" height="+"230"+">");
						</script>
					</div>
					<div class="text2">
						<script>
							document.write(names[20]);
						</script>
					</div>
					<div class="dyn">
						<input class="btn" type="submit" name="button" value="Добавить" id=20>
						<script>
							document.write("<input class='text3' type='text' value="+price[20]+" readonly>");
						</script>
					</div>
					<div class="inf">
						Никласу Килану было двенадцать лет, когда его отец объявил, что получил божественный знак и 
						должен стать художником. Но его картины мрачны, они не пользуются спросом, и семья оказывается в 
						бедственном положении. С каждым днем отец Никласа все больше ощущает вину перед родными... 
						Исабель Гор - дочь поэта. У нее было замечательное детство, но оно закончилось в один миг, когда 
						ее брат, талантливый музыкант, утратил враз здоровье и свой дар.
					</div>
				</div>	
					
				<div class="Book1">
					<div class="ris">
						<script>
							document.write("<img src="+""+image[21]+""+" width="+"166"+" height="+"250"+">");
						</script>
					</div>
					<div class="text2">
						<script>
							document.write(names[21]);
						</script>
					</div>
					<div class="dyn">
						<input class="btn" type="submit" name="button" value="Добавить" id=21>
						<script>
							document.write("<input class='text3' type='text' value="+price[21]+" readonly>");
						</script>
					</div>
					<div class="inf">
						"Доктор Паскаль" - история любви, которая связала двух очень разных людей и сделала их счастливыми. 
						Доктор Паскаль - ученый, отдавший себя науке и не замечавший ничего и никого вокруг себя. 
						Так продолжалось до тех пор, пока в его жизни не появилась Клотильда - юная, наивная девушка, 
						которая полюбила его всем сердцем. Ее любовь стала для Паскаля ценным даром. 
						Благодаря Клотильде он наконец узнал, что значит настоящее счастье.
					</div>
				</div>	
				
				<div class="Book1">
					<div class="ris">
						<script>
							document.write("<img src="+""+image[22]+""+" width="+"166"+" height="+"230"+">");
						</script>
					</div>
					<div class="text2">
						<script>
							document.write(names[22]);
						</script>
					</div>
					<div class="dyn">
						<input class="btn" type="submit" name="button" value="Добавить" id=22>
						<script>
							document.write("<input class='text3' type='text' value="+price[22]+" readonly>");
						</script>
					</div>
					<div class="inf">
						Даррел Стендинг отбывает срок в одиночной камере калифорнийской тюрьмы. 
						Надзиратели в ней применяют нечеловеческие пытки: заключенных одевают в смирительные рубашки, 
						затягивая ремни до крови и треска костей, и весь этот ад продолжается не минуты и часы, 
						а дни и даже недели. Даррел узнает секрет перемещения духа во времени и пространстве и, 
						чтобы заглушить боль от пыток и одиночества, превращается в межзвездного скитальца, 
						устремляясь в прошлое...
					</div>
				</div>	
				
				<div class="Book1">
					<div class="ris">
						<script>
							document.write("<img src="+""+image[23]+""+" width="+"166"+" height="+"250"+">");
						</script>
					</div>
					<div class="text2">
						<script>
							document.write(names[23]);
						</script>
					</div>
					<div class="dyn">
						<input class="btn" type="submit" name="button" value="Добавить" id=23>
						<script>
							document.write("<input class='text3' type='text' value="+price[23]+" readonly>");
						</script>
					</div>
					<div class="inf">
						Латиноамериканский диктатор старается сделать все, чтобы продать свою душу. 
						Он совершает самые страшные преступления, чтобы Дьявол его заметил. Кровожадный и свирепый, 
						он боится только одного – искренней, самозабвенной любви женщины, 
						которая хочет спасти возлюбленного и замолить его грехи. Он не может убить ее – она точно 
						попадет на небеса и выторгует ему спасение, и тогда Дьявол отвернется от него?
					</div>
				</div>	
				
				<div class="Book1">
					<div class="ris">
						<script>
							document.write("<img src="+""+image[24]+""+" width="+"166"+" height="+"250"+">");
						</script>
					</div>
					<div class="text2">
						<script>
							document.write(names[24]);
						</script>
					</div>
					<div class="dyn">
						<input class="btn" type="submit" name="button" value="Добавить" id=24>
						<script>
							document.write("<input class='text3' type='text' value="+price[24]+" readonly>");
						</script>
					</div>
					<div class="inf">
						Поиски смысла бытия, вечное стремление человека постигнуть тайны мироздания, 
						коллизия созерцательного и действительного отношения к жизни расширяются здесь до "рокового" 
						вопроса о возможностях и пределах человеческого разума и духа.
					</div>
				</div>	
				
				<div class="Book1">
					<div class="ris">
						<script>
							document.write("<img src="+""+image[25]+""+" width="+"166"+" height="+"250"+">");
						</script>
					</div>
					<div class="text2">
						<script>
							document.write(names[25]);
						</script>
					</div>
					<div class="dyn">
						<input class="btn" type="submit" name="button" value="Добавить" id=25>
						<script>
							document.write("<input class='text3' type='text' value="+price[25]+" readonly>");
						</script>
					</div>
					<div class="inf">
						На фоне артистических кругов Нью-Йорка и Парижа иногда абсолютно точно, 
						а иногда с точностью до наоборот отображена жизнь легендарной четы, и, словно на авансцене, 
						любит, мучается, набирается мудрости легкомысленная и взбалмошная красавица Алабама Найт. 
						Тяжелое балетное искусство, описанное детально и реалистично, помогает ей обрести мир в душе 
						и найти себя.
					</div>
				</div>
				
				<div class="Book1">
					<div class="ris">
						<script>
							document.write("<img src="+""+image[26]+""+" width="+"166"+" height="+"230"+">");
						</script>
					</div>
					<div class="text2">
						<script>
							document.write(names[26]);
						</script>
					</div>
					<div class="dyn">
						<input class="btn" type="submit" name="button" value="Добавить" id=26>
						<script>
							document.write("<input class='text3' type='text' value="+price[26]+" readonly>");
						</script>
					</div>
					<div class="inf">
						Один из самых известных романов мировой литературы, публикация которого в 1891 году стала 
						причиной скандала в английском обществе. Критика осудила его как аморальное произведение, 
						однако обычными читателями роман был принят восторженно.
						В нем поставлены вечные вопросы человечества - о смысле жизни, об ответственности за содеянное, 
						о величии красоты, о смысле любви и губящей власти греха.
					</div>
				</div>	
				
				<div class="Book1">
					<div class="ris">
						<script>
							document.write("<img src="+""+image[27]+""+" width="+"166"+" height="+"250"+">");
						</script>
					</div>
					<div class="text2">
						<script>
							document.write(names[27]);
						</script>
					</div>
					<div class="dyn">
						<input class="btn" type="submit" name="button" value="Добавить" id=27>
						<script>
							document.write("<input class='text3' type='text' value="+price[27]+" readonly>");
						</script>
					</div>
					<div class="inf">
						Смертельно опасные приключения в Вальпургиеву ночь, встречи с жуткими призраками и демоническими 
						существами, предательство и возмездие судьбы... Только не читайте на ночь!
					</div>
				</div>
			</div>
			
			<div class="New">
				<div class="Book1">
					<div class="ris">
						<script>
							document.write("<img src="+""+image[28]+""+" width="+"166"+" height="+"250"+">");
						</script>
					</div>
					<div class="text2">
						<script>
							document.write(names[28]);
						</script>
					</div>
					<div class="dyn">
						<input class="btn" type="submit" name="button" value="Добавить" id=28>
						<script>
							document.write("<input class='text3' type='text' value="+price[28]+" readonly>");
						</script>
					</div>
					<div class="inf">
						Своеобразный антипод второй великой антиутопии XX века "О дивный новый мир" Олдоса Хаксли. 
						Что, в сущности, страшнее: доведенное до абсурда "общество появления" или доведенное до абсолюта 
						"общество идеи"?
					</div>
				</div>
				
				<div class="Book1">
					<div class="ris">
						<script>
							document.write("<img src="+""+image[29]+""+" width="+"166"+" height="+"250"+">");
						</script>
					</div>
					<div class="text2">
						<script>
							document.write(names[29]);
						</script>
					</div>
					<div class="dyn">
						<input class="btn" type="submit" name="button" value="Добавить" id=29>
						<script>
							document.write("<input class='text3' type='text' value="+price[29]+" readonly>");
						</script>
					</div>
					<div class="inf">
						Человеческое общество столкнулось с чрезвычайными обстоятельствами глобального масштаба. 
						После посещения пришельцами Земли появились... Зоны. Однако общество не готово к "подаркам" пришельцев.
					</div>
				</div>
				
				<div class="Book1">
					<div class="ris">
						<script>
							document.write("<img src="+""+image[30]+""+" width="+"166"+" height="+"250"+">");
						</script>
					</div>
					<div class="text2">
						<script>
							document.write(names[30]);
						</script>
					</div>
					<div class="dyn">
						<input class="btn" type="submit" name="button" value="Добавить" id=30>
						<script>
							document.write("<input class='text3' type='text' value="+price[30]+" readonly>");
						</script>
					</div>
					<div class="inf">
						В "Дюне" Фрэнку Герберту удалось совершить невозможное - создать своеобразную "хронику 
						далекого будущего". 
						И не было за всю историю мировой фантастики картины грядущего более яркой, более зримой, 
						более мощной и оригинальной.
					</div>
				</div>	
				
				<div class="Book1">
					<div class="ris">
						<script>
							document.write("<img src="+""+image[31]+""+" width="+"166"+" height="+"230"+">");
						</script>
					</div>
					<div class="text2">
						<script>
							document.write(names[31]);
						</script>
					</div>
					<div class="dyn">
						<input class="btn" type="submit" name="button" value="Добавить" id=31>
						<script>
							document.write("<input class='text3' type='text' value="+price[31]+" readonly>");
						</script>
					</div>
					<div class="inf">
						Хотите покорить Марс, этот странный изменчивый мир, населенный загадочными, неуловимыми 
						обитателями и не такой уж добрый 
						к человеку? Дерзайте. Но только приготовьтесь в полной мере испить чашу сожалений и тоски - 
						тоски по зеленой планете Земля, 
						на которой навсегда останется ваше сердце. 
						Цикл удивительных марсианских историй Рэя Брэдбери - классическое произведение, вошедшее в золотой 
						фонд мировой литературы.
					</div>
				</div>	
				
				<div class="Book1">
					<div class="ris">
						<script>
							document.write("<img src="+""+image[32]+""+" width="+"166"+" height="+"230"+">");
						</script>
					</div>
					<div class="text2">
						<script>
							document.write(names[32]);
						</script>
					</div>
					<div class="dyn">
						<input class="btn" type="submit" name="button" value="Добавить" id=32>
						<script>
							document.write("<input class='text3' type='text' value="+price[32]+" readonly>");
						</script>
					</div>
					<div class="inf">
						"О дивный новый мир" - изысканная и остроумная антиутопия о генетически программируемом обществе 
						потребления, в котором разворачивается трагическая история Дикаря - "Гамлета" этого мира...
					</div>
				</div>
				
				<div class="Book1">
					<div class="ris">
						<script>
							document.write("<img src="+""+image[33]+""+" width="+"166"+" height="+"250"+">");
						</script>
					</div>
					<div class="text2">
						<script>
							document.write(names[33]);
						</script>
					</div>
					<div class="dyn">
						<input class="btn" type="submit" name="button" value="Добавить" id=33>
						<script>
							document.write("<input class='text3' type='text' value="+price[33]+" readonly>");
						</script>
					</div>
					<div class="inf">
						Священник, Солат, Поэт, Ученый, Детектив, Консул отправляются на планету Гиперион в паломничество 
						к таинственным Гробницам Времени, охраняемым кровавым убийцей Шрайком, мистическим полубожеством, 
						святым непризнанного культа.
						Именно там могут исполниться их сокровенные желания, ставшие смыслом их жизни...
					</div>
				</div>	
				
				<div class="Book1">
					<div class="ris">
						<script>
							document.write("<img src="+""+image[34]+""+" width="+"166"+" height="+"250"+">");
						</script>
					</div>
					<div class="text2">
						<script>
							document.write(names[34]);
						</script>
					</div>
					<div class="dyn">
						<input class="btn" type="submit" name="button" value="Добавить" id=34>
						<script>
							document.write("<input class='text3' type='text' value="+price[34]+" readonly>");
						</script>
					</div>
					<div class="inf">
						"Солярис" - бесспорная вершина творчества Станислава Лема, произведение, повлиявшее на развитие 
						научной фантастики XX века, 
						в том числе и на русскую фантастику. Роман дважды экранизирован, по нему были поставлены радиопьесы, 
						спектакли - 
						и даже балет! Итак, что же такое - Солярис? Бескрайний мыслящий океан, преследующий непонятные 
						человеку цели, 
						тончайший камертон, преобразующий людские чувства в материальную форму? 
					</div>
				</div>
				
				<div class="Book1">
					<div class="ris">
						<script>
							document.write("<img src="+""+image[35]+""+" width="+"166"+" height="+"250"+">");
						</script>
					</div>
					<div class="text2">
						<script>
							document.write(names[35]);
						</script>
					</div>
					<div class="dyn">
						<input class="btn" type="submit" name="button" value="Добавить" id=35>
						<script>
							document.write("<input class='text3' type='text' value="+price[35]+" readonly>");
						</script>
					</div>
					<div class="inf">
						История землянина, ставшего "наблюдателем" на планете, застрявшей в эпохе позднего средневековья, 
						и принужденного 
						"не вмешиваться" в происходящее, экранизирована 
						уже несколько раз однако даже лучший фильм не в силах передать всего таланта книги, основе которой 
						он снят! ..
					</div>
				</div>	
				
				<div class="Book1">
					<div class="ris">
						<script>
							document.write("<img src="+""+image[36]+""+" width="+"166"+" height="+"250"+">");
						</script>
					</div>
					<div class="text2">
						<script>
							document.write(names[36]);
						</script>
					</div>
					<div class="dyn">
						<input class="btn" type="submit" name="button" value="Добавить" id=36>
						<script>
							document.write("<input class='text3' type='text' value="+price[36]+" readonly>");
						</script>
					</div>
					<div class="inf">
						Чтобы управлять временем, они создали "Вечность". Возможность перемещаться из прошлого в будущее 
						и обратно сделала 
						вечных не только практически бессмертными, но и безмерно жестокими. Судьбы людей разных эпох - 
						лишь игрушки в их руках. 
						Но ничто не может длиться по-настоящему вечно. 
						Рядовой техник Эндрю Харлан становится на пути могущественной организации...
					</div>
				</div>
			</div>
			
			<div class="New">
				<div class="Book1">
					<div class="ris">
						<script>
							document.write("<img src="+""+image[37]+""+" width="+"166"+" height="+"250"+">");
						</script>
					</div>
					<div class="text2">
						<script>
							document.write(names[37]);
						</script>
					</div>
					<div class="dyn">
						<input class="btn" type="submit" name="button" value="Добавить" id=37>
						<script>
							document.write("<input class='text3' type='text' value="+price[37]+" readonly>");
						</script>
					</div>
					<div class="inf">
						Жизнь состоит из череды взлетов и падений, черных и белых полос. Эта книга о том, как, подобно 
						барону Мюнхгаузену, 
						вытянуть себя из трясины жизненных неурядиц, 
						обрести уверенность в себе, в своих силах и вновь выйти на дорогу, ведущую к успеху.
					</div>
				</div>
				
				<div class="Book1">
					<div class="ris">
						<script>
							document.write("<img src="+""+image[38]+""+" width="+"166"+" height="+"230"+">");
						</script>
					</div>
					<div class="text2">
						<script>
							document.write(names[38]);
						</script>
					</div>
					<div class="dyn">
						<input class="btn" type="submit" name="button" value="Добавить" id=38>
						<script>
							document.write("<input class='text3' type='text' value="+price[38]+" readonly>");
						</script>
					</div>
					<div class="inf">
						Книга поможет расставить приоритеты в жизни и расскажет, как делать меньше, а добиваться большего.
						Вам кажется, что вы работаете слишком долго, а успеваете слишком мало? 
						Вы постоянно заняты, но совсем не продуктивны? 
						Вы чувствуете, что ваше время расходуется на чужие дела?
						Если на такие вопросы вы отвечаете "да", вам поможет эссенциализм.
					</div>
				</div>		
				
				<div class="Book1">
					<div class="ris">
						<script>
							document.write("<img src="+""+image[39]+""+" width="+"166"+" height="+"250"+">");
						</script>
					</div>
					<div class="text2">
						<script>
							document.write(names[39]);
						</script>
					</div>
					<div class="dyn">
						<input class="btn" type="submit" name="button" value="Добавить" id=39>
						<script>
							document.write("<input class='text3' type='text' value="+price[39]+" readonly>");
						</script>
					</div>
					<div class="inf">
						Все проблемы, страдания и боль порождаются нашим эгоистичным умом, цепляющимся за свое ложное "я". 
						Вырваться из его плена можно только через абсолютное присутствие в Настоящем - 
						единственно реальном моменте жизни. 
						Именно в Настоящем мы обретаем свою истинную суть, а также радость и понимание того, 
						что целостность и совершенство есть не цель, а реальность, доступная нам уже Сейчас.
					</div>
				</div>	
				
				<div class="Book1">
					<div class="ris">
						<script>
							document.write("<img src="+""+image[40]+""+" width="+"166"+" height="+"250"+">");
						</script>
					</div>
					<div class="text2">
						<script>
							document.write(names[40]);
						</script>
					</div>
					<div class="dyn">
						<input class="btn" type="submit" name="button" value="Добавить" id=40>
						<script>
							document.write("<input class='text3' type='text' value="+price[40]+" readonly>");
						</script>
					</div>
					<div class="inf">
						С чего начинать собственное дело? Где найти прибыльную идею? Как научиться решать проблемы? 
						Над чем лучше работать и на что тратить свои силы и время? 
						Рецепт и история успеха каждого человека уникальны, как отпечатки пальцев. 
						Единственное правило состоит в том, что люди ограничены лишь своей энергией и воображением, 
						ведь можно каждый день испытывать свои силы, 
						самостоятельно выбирать новую точку зрения...
					</div>
				</div>	
				
				<div class="Book1">
					<div class="ris">
						<script>
							document.write("<img src="+""+image[41]+""+" width="+"166"+" height="+"230"+">");
						</script>
					</div>
					<div class="text2">
						<script>
							document.write(names[41]);
						</script>
					</div>
					<div class="dyn">
						<input class="btn" type="submit" name="button" value="Добавить" id=41>
						<script>
							document.write("<input class='text3' type='text' value="+price[41]+" readonly>");
						</script>
					</div>
					<div class="inf">
						"Большое волшебство" - исследование на тему творчества: какова его природа, 
						какую роль оно играет в нашей повседневной жизни, откуда берутся идеи, 
						как преодолеть страх и начать творить. По мнению автора, внутри каждого из нас таятся 
						необычные сокровища, 
						которыми нас наградила природа. И наша задача - вытащить их на свет. А что для этого нужно сделать, 
						объяснит эта практичная книга, полная ярких примеров и удивительных открытий.
					</div>
				</div>	
				
				<div class="Book1">
					<div class="ris">
						<script>
							document.write("<img src="+""+image[42]+""+" width="+"166"+" height="+"250"+">");
						</script>
					</div>
					<div class="text2">
						<script>
							document.write(names[42]);
						</script>
					</div>
					<div class="dyn">
						<input class="btn" type="submit" name="button" value="Добавить" id=42>
						<script>
							document.write("<input class='text3' type='text' value="+price[42]+" readonly>");
						</script>
					</div>
					<div class="inf">
						Книга основана на десятилетней работе с сотнями студентов и клиентов, сочетая в себе 
						актуальные научные исследования и реальные истории тех, кто вступил в третий десяток.
						Книга содержит все необходимые инструменты для максимально результативного использования 
						самых важных десяти лет. 
						Автор делится тем, что знают о критической важности этого периода психологи, 
						социологи, неврологи...
					</div>
				</div>	
				
				<div class="Book1">
					<div class="ris">
						<script>
							document.write("<img src="+""+image[43]+""+" width="+"166"+" height="+"250"+">");
						</script>
					</div>
					<div class="text2">
						<script>
							document.write(names[43]);
						</script>
					</div>
					<div class="dyn">
						<input class="btn" type="submit" name="button" value="Добавить" id=43>
						<script>
							document.write("<input class='text3' type='text' value="+price[43]+" readonly>");
						</script>
					</div>
					<div class="inf">
						Эта книга о том, как разжечь в своей душе огонь истинных желаний и достичь внутренней свободы. 
						О том, как оставаться верной самой себе и заниматься тем, к чему есть призвание. 
						О поиске себя и постановке целей, о провалах и ошибках, о балансе в жизни и психологии 
						взаимоотношений, о преодолении страха и достижении гармонии, о карьере и успехе.
					</div>
				</div>
				
				<div class="Book1">
					<div class="ris">
						<script>
							document.write("<img src="+""+image[44]+""+" width="+"166"+" height="+"250"+">");
						</script>
					</div>
					<div class="text2">
						<script>
							document.write(names[44]);
						</script>
					</div>
					<div class="dyn">
						<input class="btn" type="submit" name="button" value="Добавить" id=44>
						<script>
							document.write("<input class='text3' type='text' value="+price[44]+" readonly>");
						</script>
					</div>
					<div class="inf">
						Книга Наполеона Хилла "Думай и богатей" получила статус непревзойденного классического учебника 
						по достижению богатства. В каждой главе автор упоминает о секрете добывания денег, 
						пользуясь которым тысячи людей приобрели, преумножили и продолжают преумножать свое состояние. 
						В качестве классического учебника книга содержит "Руководство к действию", 
						которое станет личным проводником к достижению цели.
					</div>
				</div>	
				
				<div class="Book1">
					<div class="ris">
						<script>
							document.write("<img src="+""+image[45]+""+" width="+"166"+" height="+"250"+">");
						</script>
					</div>
					<div class="text2">
						<script>
							document.write(names[45]);
						</script>
					</div>
					<div class="dyn">
						<input class="btn" type="submit" name="button" value="Добавить" id=45>
						<script>
							document.write("<input class='text3' type='text' value="+price[45]+" readonly>");
						</script>
					</div>
					<div class="inf">
						Почему мы не осознаем себя так, как нам кажется, и почему отчетливое 
						представление о себе помогает добиться успеха в работе и в жизни
					</div>
				</div>
			</div>
			
			<div class="bottom">
				<a href="#"><img src="image/vk.png" width="48" height="48">
				</a>
				<a href="#"><img src="image/instagram.png" width="48" height="48">
				</a>
				<a href="#"><img src="image/twitter.png" width="48" height="48">
				</a>
			</div>
		</div>
		
		<script>
			var cart = {};
			$('.btn').on('click', function () {
				var id = $(this).attr('id');
				if(cart[id] == undefined){
					cart[id] = 1;
				}else{
					cart[id]++;
				}
				save();
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
				}
			}				
			
			$(".tabs").on("click", ".tab", function () {
				$(".tabs .tab").removeClass("active");
				$(".dws-form").find(".active").removeClass("active");
				$(this).addClass("active");
				$(".New").eq($(this).index()).addClass("active");
			});
			
			window.onload = loadCart;
		</script>
	</body>
</html>

<style>
	
	label.tab.active
		{
		background: #DCDCDC;
		color: #000000;
		}
	
	.bottom
		{
		position: relative
		left: 25px;
		bottom: -750px;
		}
	
	.bottom a
		{
		padding: 0px 10px 0px 10px;
		text-decoration: none;
		}
	
	body 
		{
		background-image: url(image/background-first.jpg);
		-webkit-background-size: cover;
		background-size: cover;
		}
			
	.basket a
		{
		position: absolute;
		right: 0;
		padding: 22px 45px 24px 65px;
		margin: 0px;
		transition: all 0.3s ease;
		}
		
	.basket a:link
		{
		text-decoration: none;
		font-family: Avantgarde, sans-serif;
		font-size: 30px;
		color: black;
		} 
		
	.basket a:visited
		{
		color: black;
		}
		
	.basket a:hover
		{
		background: #000000;
		color: #FFFFFF;
		transition: all 0.3s ease;
		}
	
	.frame .basket > a i.fas
		{
		position: absolute;
		left: 29px;
		}
	
	.se
		{
		position: absolute;
		margin-left: 5px;
		margin-top: 25px;
		}	
		
	.frame
		{
		background-color: RGB(255, 255, 255);
		margin: -10 -8 -5 -8;
		height: 80px;
		border-bottom: 1px solid black;
		}
	
	.window 
		{
		display: flex;
		margin: 40px 30px 30px;
		}
		
	.logo
		{
		font-size: 250%;
		position: absolute;
		margin: 10px 0px 0px 300px;
		height: 65px;
		}
	
	.New
		{
		display: none;
		}
		
	.New.active
		{
		display: block;
		}
		
	.tab
		{
		border: 1px solid black;
		border-top: 1px solid white;
		font-size: 90%;
		font-family: Bradley Hand, cursive;
		display: block;
		padding: 3px 20px 3px 20px;
		}
		
	.tabs
		{
		display: flex;
		background-color: white;
		margin: -35px 0px 0px -39px;
		padding: 2px 10px -10px 10px;
		}
		
	.Book1
		{
		position: relative;
		width: 170;
		display: inline-block;
		margin: 40px 30px 30px;
		}
	
	.dws-form
		{
		margin: -10px 0px 60px 50px;
		}
		
	.text2
		{
		background: #FFFFFF;
		position: relative;
		margin: 5px 0px 0px 0px;
		width: 166px;
		
		}
		
	.dyn
		{
		margin: -3px 0px 0px 0px;
		}
	.btn
		{
		width: 90px;
		height: 24px;
		margin: 5px 0px 0px -1px;
		}
		
	.text3
		{
		width: 76px;
		margin: -3px 0px 0px -4px;
		}
		
	.inf
		{
		z-index: 2;
		height: 355px;
		width: 225px;
		font-size: 17px;
		position: absolute;
		left: 35px;
		bottom: 0;
		right: 0;
		top: 20px;
		background: rgba(255,255,255, 0.9);
		padding: 5px;
		display: none;
		}
		
	.Book1:hover .inf
		{
		display:block;
		}
</style>