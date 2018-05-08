<div class="container is-fluid section">
	<form action="" method="post">
		<div class="tile is-ancestor">
			<div class="tile is-vertical is-7">
				<textarea class="textarea" placeholder="Cipher text" rows="5" id="text" onkeyup="countChar(this)" name="text"></textarea>
				<div id="charCount"></div>
			</div>
			<div class="tile is-vertical is-5">
				<div class="tile">
					<div class="tile is-parent is-vertical">
						<div class="tile is-child">
							<div class="columns">
								<div class="column is-12">
									<input type="text" class="input" autocomplete="off" placeholder="Key" pattern="^[A-Za-z]+$" title="Only letters" name="key">
								</div>
							</div>
						</div>
						<div class="tile is-child">
							<input class="button" type="submit" value="Decrypt">
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
	<?php
	function decrypt($text, $key)
	{
		$textArray = str_split(preg_replace("/[^a-zA-Z0-9\|\/\(\)\*]+/u", '', strtoupper($text)), 1);
		$shifts = getShift(str_split(strtoupper($key)));
		
		$i = 0;
		
		
		foreach ($textArray as &$letter)
		{
			if ($i == count($shifts))
				$i = 0;
			if (ctype_alpha($letter))
			{
				if (((((ord($letter) - 65) - $shifts[$i]) % 26) + 65) < 65)
					$letter = chr(((((ord($letter) - 65) - $shifts[$i]) % 26) + 65) + 26);
				else
					$letter = chr((((ord($letter) - 65) - $shifts[$i]) % 26) + 65);
			}
			$i++;
		}
		
		return implode($textArray);
	}
	function getShift($letters)
	{
		$shift = array();
		foreach ($letters as $letter)
			array_push($shift, (ord($letter) - 65));
		
		return $shift;
	}
	if (isset($_POST['text']) && !empty($_POST['text']) && isset($_POST['key']) && !empty($_POST['key']))
	{
		$text = $_POST['text'];
		$key = $_POST['key'];
		
		echo "<div class=\"columns section\"><div class=\"column is-8 is-offset-2\"><div class=\"card\"><header class=\"card-header\"><p class=\"card-header-title\">Decrypted text</p></header><div class=\"card-content\"><div class=\"content\" id=\"output\">";
		echo decrypt($text, $key);
		echo "</div></div></div></div></div>";
	}
	?>
</div>