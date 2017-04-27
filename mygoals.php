<?php
	include "main.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My goals</title>
	<meta name="description" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="scss/style.css">
	<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
	<script src="js/script.js"></script>
</head>
<body>
	<header class="bg-4">
		<?php
			include "navigation_menu.php";
		?>
		<div class="header-text">
			<h2>Давай зробимо щось класне <span>класне</span></h2>
			<a href="create_goal.php">Створити нову ціль</a>
		</div>
	</header>
	<section class="my_goals">
		<div class="my_goals_cont">
			<h2>Список цілей</h2>
			<div class="mg-border"></div>
			<div class="goals-list">
				<div class="my_all_goals goal_1">
					<div class="goal-name">
						<p><span><img src="scss/images/arrow-1.png" alt=""></span>Скинути 5 кілограм до літа</p>
					</div>
					<div class="subgoal-name">
						<p>Бігати кожного для по 3 км</p>
					</div>
					<div class="subgoal-name">
						<p>Дотримуватись дієти</p>
					</div>
				</div>
				<div class="my_all_goals goal_2">
					<div class="goal-name"><p><span><img src="scss/images/arrow-1.png" alt=""></span>Заробити багато грошей</p></div>
					<div class="subgoal-name"><p>
						Відкладати по 100грн зі стипендії
					</p></div>
					<div class="subgoal-name">
						<p>Знайти підробіток</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php
		include "modal-window.php";
	?>
</body>
</html>