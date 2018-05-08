<nav class="navbar is-info">
	<div class="navbar-brand">
		<a class="navbar-item" href="index.php">
			<h6 class="title is-4">
				Ciphers
			</h6>
		</a>
		<div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	
	<div id="navbarExampleTransparentExample" class="navbar-menu">
		<div class="navbar-start is-centered container is-fluid">
			<a class="navbar-item <?php if ($_GET['type'] == 'docs') echo "is-active"; ?>" href="index.php?type=docs">
				Docs
			</a>
			<a class="navbar-item <?php if ($_GET['type'] == 'caesar') echo "is-active"; ?>" href="index.php?type=caesar">
				Caesar
			</a>
			<a class="navbar-item <?php if ($_GET['type'] == 'vigenere') echo "is-active"; ?>" href="index.php?type=vigenere">
				Viginere
			</a>
			<a class="navbar-item <?php if ($_GET['type'] == 'mauborgne') echo "is-active"; ?>" href="index.php?type=mauborgne">
				Mauborgne
			</a>
		</div>
	</div>
</nav>
<?php
if (isset($_GET['type']) && !empty($_GET['type']) && $_GET['type'] != "docs")
{
?>
	<div class="tabs is-centered">
		<ul>
			<li class="<?php if (isset($_GET['option'])) if ($_GET['option'] == "encrypt") echo "is-active";?>"><a href="index.php?option=encrypt&type=<?php echo $_GET['type'] ?>">Encrypt</a></li>
			<li class="<?php if (isset($_GET['option'])) if ($_GET['option'] == "decrypt") echo "is-active";?>"><a href="index.php?option=decrypt&type=<?php echo $_GET['type'] ?>">Decrypt</a></li>
		</ul>
	</div>
	<?php
}
?>
