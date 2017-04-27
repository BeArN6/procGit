<?php if( isset( $_SESSION['logged_user'] )) : ?>
	<div class="nav-menu-2 clearfix">
		<div class="logo">
			<img src="scss/images/logo.png" alt="">
			<h1>Procrastination</h1>
		</div>
		<nav>
			<ul>
				<li><a href="/">Головна</a></li>
				<li><a href="allgoals.php">Цілі</a></li>
				<li>
					<div class="user-logo">
						<img src="scss/images/user-face.png" alt="">
					</div>
					<nav class="user-nav">
						<ul>
							<li><a href="mygoals.php">Мої цілі</a></li>
							<li><a href="">Мій профіль</a></li>
							<li><a href="/logout.php">Вихід</a></li>
						</ul>
					</nav>
				</li>
			</ul>
		</nav>
	</div>
<?php else : ?>
	<div class="nav-menu clearfix">
		<div class="logo">
			<img src="scss/images/logo.png" alt="">
			<h1>Procrastination</h1>
		</div>
		<nav>
			<ul>
				<li><a href="index.php">Головна</a></li>
				<li><a href="allgoals.php">Цілі</a></li>
				<li><a href="#" class="modal-login">Вхід</a></li>
				<li><a href="#" class="modal-reg">Реєстрація</a></li>
			</ul>
		</nav>
	</div>
<?php endif ; ?>