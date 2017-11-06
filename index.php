<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<title>Сайт-презентация</title>
	<meta name="description" content="Site-portfolio">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="img/f.ico" type="image/x-icon">
	<style>body { opacity: 0; overflow-x: hidden; } html { background-color: #fff; }</style>
	<link rel="stylesheet" href="css/main.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
	
	<!-- Плавный переход от кнопки до портфолио-->
	<script>
		$(document).ready(function(){
		 
		  $('a[href^="#portfolio"]').click(function() {
		        elementClick = $(this).attr("href");
		        destination = $(elementClick).offset().top;
		        // if($.browser.safari){
		        //     $('body').animate({scrollTop: destination},1500);
		        // }else{
		            $('body').animate({scrollTop: destination},1500);
		            $('html').animate( {scrollTop: destination},1500);
		        // }
		        return false;
		    });
 		});
	</script>

</head>

<body>
    <?php include 'db.php'; ?>

	<header class="main-header grid" style="background-image: url(img/f.jpg);">
			<div class="ready-left">
				<h2>Здравствуйте!</h2>
				<p>Меня зовут Анатолий, я учусь веб-разработке, мои работы вы можете посмотреть здесь, а также скачать на гитхабе.</p>
			</div>
			<div class="ready-right">
				<div class="header-buttons">
					<a href="#" class="button">Github</a>
					<a href="#portfolio" class="button button-gray scroll">Посмотреть здесь</a>
				</div>
			</div>
	</header>

	<section id="portfolio" class="portfolio-section">
		<div class="container">
			<h2>Мои работы</h2>
			<div class="portfolio-home grid">
			    <?php foreach ($data2 as $number): ?>
				<a href="<?php echo $number['url']; ?>" target="blank" class="portfolio-item grid">
					<span class="portfolio-item-img" style="background-image: url(img/<?php echo $number['number'].'.jpg'; ?>);"></span>
					<span class="portfolio-item-content grid">
						<h4><?php echo $number['title']; ?></h4>
						<p><?php echo $number['declaration']; ?></p>
					</span>
				</a>
				<?php endforeach;?>
			</div>
		</div>
	</section>

	<section class="container-skill">
			<h2>Технологии и средства, применяемые в работе</h2>
		<div class="skill-section grid">
            <?php foreach ($data1 as $id) : ?>
			<div class="skill-item grid" style="background-image: url(img/<?php echo $id['name'].'.jpg'; ?>)">
			    <span><?php echo $id['name']; ?></span>
			</div>
			<?php endforeach;?>
		</div>
	</section>

	<section class="formsection">
		<div class="container">
			<form class="grid" name="MyForm" id="callbacks" action="" method="post">
				<div><input type="text" name="name" placeholder="Ваше имя:"></div>
				<div><input type="text" name="email" placeholder="Ваш e-mail:"></div>
				<div><input type="text" name="body" placeholder="Текст сообщения:"></div>
				<div><input type="submit" class="button" id="btncontcall" />Написать мне</div>
			</form>
			<div class="answer" id="erconts"></div>
		</div>
	</section>

	<footer class="main-footer">
		<div class="container">
			<div class="footer-logo">
				<?php echo date('Y').' г. © Все права защищены.'?>
			</div>
		</div>
	</footer>

</body>

<script>
$(document).ready(function() {
$("#btncontcall").click(function(){ 
     $.ajax({
        type: "POST",
        url:"action.php", // Адрес обработчика
        data:$("#callbacks").serialize(),
        error:function(){$("#erconts").html("Произошла ошибка!");},
		beforeSend: function() {
            $("#erconts").html("Отправляем данные...");
        },
		success: function(result){
			$("#erconts").html(result);
			checkThis();
		}
    });
    return false;
});
});
</script>

</html>
