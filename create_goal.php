<?php
	include "main.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create new goal</title>
	<meta name="description" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="scss/style.css">
	<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
	<script src="js/script.js"></script>
</head>
<body>
	<header class="bg-3">
		<?php
			include "navigation_menu.php";
		?>
		<div class="header-text">
			<h2><span>Сформулюй</span> свою ціль</h2>
			<p>
				Для того щоб виконати заплановане потрібно точно описати чого ти хочеш. <br>
Як зрозуміти, що ціль виконана? Опиши критерій завершення цілі. <br>
Як виконати ціль вчасно? Визнач дату завершення цілі.

			</p>
		</div>
	</header>
	<section class="new_goal">
		<div class="new_goal_cont">
			<h2>Моя нова <span>ціль</span></h2>
			<div class="ng-border"></div>
			<div class="create_goal_cont">
				<p>Сформулюйте свою ціль</p>
				<textarea name="" id="" cols="30" rows="10" placeholder="Я хочу пробігти 10 км."></textarea>
				<p>Опишіть одним реченням коли вашаціль буде завершена</p>
				<textarea name="" id="" cols="30" rows="10" placeholder="Я пробіжу 20 кіл по 500 м. кожне"></textarea>
				<p>Дайте короткий опис своєї цілі</p>
				<textarea name="" id="" cols="30" rows="10" placeholder="Для того щоб підготуватися до півмарафону, я маю спочатку пробігти дану дистанцію"></textarea>
				<div class="photo-cont clearfix">
					<div class="goal-photo">
					<img src="scss/images/goal-img.png" alt="">
					<img class="photo-butt" src="scss/images/photo-icon.png" alt="">
				</div>
				<div class="rewand">
					<p>Напишіть свою винагороду</p>
					<textarea name="" id="" cols="30" rows="10"></textarea>
				</div>
				</div>
				<div class="calendar">
					
				</div>
				<div class="goal-buttons">
					<div class="show-goal"><img src="scss/images/show.png" alt=""><span>Показати всім</span></div>
					<div class="hide-goal"><img src="scss/images/hide.png" alt=""><span>Приховати</span></div>
					<button>Підціль</button>
					<button>Завершити</button>
				</div>
			</div>
		</div>
		<div class="goal-border"></div>
		<div class="new_subgoal_cont">
			<h2>Моя нова <span>підціль</span></h2>
			<div class="ng-border"></div>
			<div class="create_subgoal_cont">
				<p>Сформулюйте свою підціль</p>
				<textarea name="" id="" cols="30" rows="10" placeholder="Я хочу пробігти 10 км."></textarea>
				<p>Дайте короткий опис своєї підцілі</p>
				<textarea name="" id="" cols="30" rows="10" placeholder="Для того щоб підготуватися до півмарафону, я маю спочатку пробігти дану дистанцію"></textarea>
				<div class="calendar_cont clearfix">
					<div class="rewand">
						<p>Напишіть свою винагороду</p>
						<textarea name="" id="" cols="30" rows="10"></textarea>
					</div>
					<div class="calendar">
						
					</div>
				</div>
				<div class="goal-buttons">
					<div class="show-goal"><img src="scss/images/show.png" alt=""><span>Показати всім</span></div>
					<div class="hide-goal"><img src="scss/images/hide.png" alt=""><span>Приховати</span></div>
					<button>Підціль</button>
					<button>Завершити</button>
				</div>
			</div>
		</div>
	</section>
	<?php
		include "modal-window.php";
	?>
</body>
</html>