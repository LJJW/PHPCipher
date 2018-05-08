<div class="container is-fluid section">
	<form action="" method="post">
		<div class="tile is-ancestor">
			<div class="tile is-vertical is-10">
				<textarea class="textarea" placeholder="Plaintext" rows="5" id="text" onkeyup="countChar(this)" name="text"></textarea>
				<div id="charCount"></div>
			</div>
			<div class="tile is-vertical is-2">
				<div class="tile">
					<div class="tile is-parent is-vertical">
						<div class="tile is-child">
							<input type="checkbox" name="stripSpecChar" value="true" id="stripSpecChar" checked>
							<label for="stripSpecChar">Strip special characters (compromises security of cipher significantly)</label>
						</div>
						<div class="tile is-child">
							<input class="button" type="submit" value="Encrypt">
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
	<?php
	function encrypt($text, $stripSpecChar)
	{
		if (isset($stripSpecChar))
			$text = preg_replace("/[^a-zA-Z0-9\|\/\(\)\*]+/u", '', strtoupper($text));
		else
			$text = strtoupper($text);
		
		$textArray = str_split($text, 1);
		$shifts = array();
		
		foreach ($textArray as &$letter)
		{
			$shift = rand(0, 25);
			array_push($shifts, chr($shift + 65));
			if (ctype_alpha($letter))
				$letter = chr((((ord($letter) - 65) + $shift) % 26) + 65);
		}
		
		return "<article><h6 class='title'>Encrypted Text</h6>".implode($textArray)."</article><article style='margin-top: 2em;'><h6 class='title'>Key</h6>".implode($shifts)."</article>";
	}
	if (isset($_POST['text']) && !empty($_POST['text']))
	{
		$text = $_POST['text'];
		if (isset($_POST['stripSpecChar']))
			$stripSpecChar = $_POST['stripSpecChar'];
		else
			$stripSpecChar = null;
		
		echo "<div class=\"columns section\"><div class=\"column is-8 is-offset-2\"><div class=\"card\"><header class=\"card-header\"><p class=\"card-header-title\">Encrypted text</p></header><div class=\"card-content\"><div class=\"content\" id=\"output\">";
		echo encrypt($text, $stripSpecChar);
		echo "</div></div></div></div></div>";
	}
	?>
</div>
