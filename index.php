<!DOCTYPE html>
<html>
	<head>
		<?php require_once "components/header.php" ?>
	</head>
	<body>
		<?php
		
		if (!isset($_GET['type']) && empty($_GET['type']))
			require_once "components/notype.php";
		else if ($_GET['type'] == "docs")
		{
			require_once "components/error.php";
			require_once "components/nav.php";
			require_once "components/docs.php";
		}
		else if (isset($_GET['type']) && !empty($_GET['type']) && $_GET['type'] == "caesar")
		{
			require_once "components/nav.php";
			require_once "components/error.php";
			if (!isset($_GET['option']) && empty($_GET['option']) || isset($_GET['option']) && !empty($_GET['option']) && $_GET['option'] == "encrypt")
			{
				require_once "cipher/caesar/encrypt.php";
			}
			else if (isset($_GET['option']) && !empty($_GET['option']) && $_GET['option'] == "decrypt")
			{
				require_once "cipher/caesar/decrypt.php";
			}
			else
				danger("warning", "Could not find option", "You might have entered a wrong option argument in the adress.<br>Valid options are \"encrypt\", \"decrypt\" and no option at all.<br>To return to a site click on either of the tabs on top, or <a class='is-link' href='index.php?option=encrypt&type=".$_GET['type']."'>here</a>.");
		}
		else if (isset($_GET['type']) && !empty($_GET['type']) && $_GET['type'] == "vigenere")
		{
			require_once "components/nav.php";
			require_once "components/error.php";
			if (!isset($_GET['option']) && empty($_GET['option']) || isset($_GET['option']) && !empty($_GET['option']) && $_GET['option'] == "encrypt")
			{
				require_once "cipher/vigenere/encrypt.php";
			}
			else if (isset($_GET['option']) && !empty($_GET['option']) && $_GET['option'] == "decrypt")
			{
				require_once "cipher/vigenere/decrypt.php";
			}
			else
				danger("warning", "Could not find option", "You might have entered a wrong option argument in the adress.<br>Valid options are \"encrypt\", \"decrypt\" and no option at all.<br>To return to a site click on either of the tabs on top, or <a class='is-link' href='index.php?option=encrypt&type=".$_GET['type']."'>here</a>.");
		}
		else if (isset($_GET['type']) && !empty($_GET['type']) && $_GET['type'] == "mauborgne")
		{
			require_once "components/nav.php";
			require_once "components/error.php";
			if (!isset($_GET['option']) && empty($_GET['option']) || isset($_GET['option']) && !empty($_GET['option']) && $_GET['option'] == "encrypt")
			{
				require_once "cipher/mauborgne/encrypt.php";
			}
			else if (isset($_GET['option']) && !empty($_GET['option']) && $_GET['option'] == "decrypt")
			{
				require_once "cipher/vigenere/decrypt.php";
			}
			else
				danger("warning", "Could not find option", "You might have entered a wrong option argument in the adress.<br>Valid options are \"encrypt\", \"decrypt\" and no option at all.<br>To return to a site click on either of the tabs on top, or <a class='is-link' href='index.php?option=encrypt&type=".$_GET['type']."'>here</a>.");
		}
		else
		{
			require_once "components/error.php";
			danger("danger", "You sneaky little bitch!", "Don't you try and inject my PHP Server! Get back <a href='index.php?type=docs'>here</a>!");
		}
		
		?>
		<?php require_once "components/js.php"?>
	</body>
</html>