<div class="container is-narrow-container is-fluid section">
	<form action="" method="post">
		<div class="columns">
			<textarea class="textarea" placeholder="Plaintext" rows="10" id="text" onkeyup="countChar(this)" name="text"></textarea>
		</div>
		<div class="columns">
			<div class="column">
				<input type="range" max="25" min="0" value="13" class="input" id="shift" name="shift">
			</div>
			<div class="column is-narrow" id="shiftdisplay">
				<script>
					let slider = document.getElementById("shift");
					let output = document.getElementById("shiftdisplay");
					output.innerHTML = slider.value;


					slider.oninput = function() {
						output.innerHTML = this.value;
					}
				</script>
			</div>
		</div>
		<div class="columns">
			<div>
				<span class="title is-3">
					Characters to be removed from text.
				</span>
				<p>
					Here you can choose which characters you want to eliminate. The more special characters that are removed from the text, the more secure it becomes.
				</p>
			</div>
		</div>
		
		<div class="columns">
			<div class="column control">
				<label class="checkbox">
					<input type="checkbox" name="stripSpecChar" value="true" id="remDot" checked>
					&nbsp;&nbsp;.
				</label>
			</div>
			<div class="column">
				<label class="checkbox">
					<input type="checkbox" name="stripSpecChar" value="true" id="remComma" checked>
					&nbsp;&nbsp;,
				</label>
			</div>
			<div class="column">
				<label class="checkbox">
					<input type="checkbox" name="stripSpecChar" value="true" id="remQuestMark" checked>
					&nbsp;&nbsp;?
				</label>
			</div>
			<div class="column">
				<label class="checkbox">
					<input type="checkbox" name="stripSpecChar" value="true" id="remExMark" checked>
					&nbsp;&nbsp;!
				</label>
			</div>
			<div class="column">
				<label class="checkbox">
					<input type="checkbox" name="stripSpecChar" value="true" id="remExMark" checked>
					&nbsp;&nbsp;;
				</label>
			</div>
			<div class="column">
				<label class="checkbox">
					<input type="checkbox" name="stripSpecChar" value="true" id="remExMark" checked>
					&nbsp;&nbsp;:
				</label>
			</div>
			<div class="column">
				<label class="checkbox">
					<input type="checkbox" name="stripSpecChar" value="true" id="remExMark" checked>
					&nbsp;&nbsp;"
				</label>
			</div>
			<div class="column">
				<label class="checkbox">
					<input type="checkbox" name="stripSpecChar" value="true" id="remExMark" checked>
					&nbsp;&nbsp;'
				</label>
			</div>
			<div class="column">
				<label class="checkbox">
					<input type="checkbox" name="stripSpecChar" value="true" id="remExMark" checked>
					&nbsp;&nbsp;-
				</label>
			</div>
		</div>
		<div class="columns">
			<div class="column">
				<label class="checkbox">
					<input type="checkbox" name="stripSpecChar" value="true" id="remExMark" checked>
					&nbsp;&nbsp;<code>'</code>
				</label>
			</div>
			<div class="column">
				<label class="checkbox">
					<input type="checkbox" name="stripSpecChar" value="true" id="remExMark" checked>
					&nbsp;&nbsp;<code>"</code>
				</label>
			</div>
		</div>
		
		<div class="columns">
			<div class="column">
				<input class="button" type="submit" value="Encrypt">
			</div>
		</div>
		
	</form>
	
	<?php
	function encrypt($text, $shift, $stripSpecChar)
	{
		if (isset($stripSpecChar))
			$text = preg_replace("/[^a-zA-Z0-9\|\/\(\)\*]+/u", '', strtoupper($text));
		else
			$text = strtoupper($text);
		
		$textArray = str_split($text, 1);
		
		foreach ($textArray as &$letter)
		{
			if (ctype_alpha($letter))
				$letter = chr((((ord($letter) - 65) + $shift) % 26) + 65);
		}
		
		return implode($textArray);
	}
	if (isset($_POST['text']) && !empty($_POST['text']) && isset($_POST['shift']) && !empty($_POST['shift']))
	{
		$text = $_POST['text'];
		$shift = $_POST['shift'];
		if (isset($_POST['stripSpecChar']))
			$stripSpecChar = $_POST['stripSpecChar'];
		else
			$stripSpecChar = null;
		
		echo "<div class='columns section'><div class='column is-8 is-offset-2'><div class='card'><header class='card-header'><p class='card-header-title'>Encrypted text</p></header><div class='card-content'><div class='content' id='output'>";
		echo encrypt($text, $shift, $stripSpecChar);
		echo "</div></div></div></div></div>";
	}
	?>
</div>