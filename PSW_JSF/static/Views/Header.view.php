<nav class="navbar navbar-expand-md navbar-dark bg-dark">
	<?php if (isset($_SESSION['login'])) : ?>
		<div class="mr-auto order-0">
			<a class="navbar-brand mx-auto" href="#"><?= $_SESSION['login'] ?></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
				<span class="navbar-toggler-icon"></span>
			</button>
		</div>
	<?php endif; ?>
	<div class="mx-auto order-0">
		<a class="navbar-brand mx-auto" href="/psw/index.php">Menu</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
			<span class="navbar-toggler-icon"></span>
		</button>
	</div>
	<ul class="navbar-nav ml-auto">
		<li class="nav-item">
			<?php if (isset($_SESSION['login'])) : ?>
				<a class="nav-link" href="display.php">Ustawienia widoku</a>
			<?php endif; ?>

		</li>
		<li class="nav-item">
			<?php if (isset($_SESSION['login'])) : ?>
				<a class="nav-link" href="/psw/index.php?action=logout">Wyloguj się</a>
			<?php else : ?>
				<a class="nav-link" href="login.php">Zaloguj się</a>
			<?php endif; ?>

		</li>
	</ul>
</nav>
<input type="hidden" name="page-color" value="<?= $pageColor ?>">
<input type="hidden" name="font-color" value="<?= $fontColor ?>">
<input type="hidden" name="font-type" value="<?= $fontType ?>">
<script src="js/global.js"></script>