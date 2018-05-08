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
								<div class="column is-10">
									<input type="range" max="25" min="0" value="13" class="input" id="shift" name="shift">
								</div>
								<div class="column is-2" id="shiftdisplay">
									<script>
                                        var slider = document.getElementById("shift");
                                        var output = document.getElementById("shiftdisplay");
                                        output.innerHTML = slider.value;

                                        slider.oninput = function() {
                                            output.innerHTML = this.value;
                                        }
									</script>
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
	function decrypt($text, $shift)
	{
		$textArray = str_split(preg_replace("/[^a-zA-Z0-9\|\/\(\)\*]+/u", '', strtoupper($text)), 1);
		
		
		foreach ($textArray as &$letter)
		{
			if (ctype_alpha($letter))
			{
				if (((((ord($letter) - 65) - $shift) % 26) + 65) < 65)
					$letter = chr(((((ord($letter) - 65) - $shift) % 26) + 65) + 26);
				else
					$letter = chr((((ord($letter) - 65) - $shift) % 26) + 65);
			}
		}
		
		return implode($textArray);
	}
	if (isset($_POST['text']) && !empty($_POST['text']) && isset($_POST['shift']) && !empty($_POST['shift']))
	{
		$text = $_POST['text'];
		$shift = $_POST['shift'];
		
		echo "<div class=\"columns section\"><div class=\"column is-8 is-offset-2\"><div class=\"card\"><header class=\"card-header\"><p class=\"card-header-title\">Decrypted text</p></header><div class=\"card-content\"><div class=\"content\" id=\"output\">";
		echo decrypt($text, $shift);
		echo "</div></div></div></div></div>";
	}
	?>
</div>