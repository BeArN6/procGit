	<div class="reg-modal-form">
		<span class="modal-close">X</span>
		<div class="modal-header">
			<h1>Реєстрація</h1>
		</div>
		<div class="modal-main clearfix">
			<form action="/index.php" method="post">
			<div class="main">
				<div class="clearfix">
					<label for="">Логін</label>
					<input name="login" type="text" placeholder="Enter login" value="<?php echo @$data['login']; ?>">
				</div>
				<div class="clearfix">
					<label for="">Email</label>
					<input name="email" type="text" placeholder="example@gmail.com" value="<?php echo @$data['email']; ?>">
				</div>
				<div class="clearfix">
					<label for="">Пароль</label>
					<input name="password" type="password" placeholder="Enter password">
				</div>
				<div class="clearfix">
					<label for="">Повторіть</label>
					<input name="re-password" type="password" placeholder=" Re-enter password">
				</div>
			</div>
			<input type="submit" name="to_register" value="Зареєструватися">
			</form>
		</div>
	</div>
	<div class="overlay"></div>
	<div class="enter-modal-form">
		<span class="modal-close">X</span>
		<div class="modal-header">
			<h1>Вхід</h1>
		</div>
		<div class="modal-main clearfix">
			<form action="/index.php" method="post">
			<div class="main">
				<div class="clearfix">
					<label for="">Логін</label>
					<input name="login" type="text" placeholder="Enter login">
				</div>
				<div class="clearfix">
					<label for="">Пароль</label>
					<input name="password" type="password" placeholder="Enter password">
				</div>
			</div>
			<input type="submit" name="to-login" value="Увійти">
			</form>
		</div>
	</div>
	<div class="overlay"></div>