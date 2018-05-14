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
					<input type="checkbox" name="remComma" value="true" id="remComma" checked>
					&nbsp;&nbsp;<code>,</code>
				</label>
			</div>
			<div class="column control">
				<label class="checkbox">
					<input type="checkbox" name="remSemiCol" value="true" id="remExMark" checked>
					&nbsp;&nbsp;<code>;</code>
				</label>
			</div>
			<div class="column control">
				<label class="checkbox">
					<input type="checkbox" name="remDot" value="true" id="remDot" checked>
					&nbsp;&nbsp;<code>.</code>
				</label>
			</div>
			<div class="column control">
				<label class="checkbox">
					<input type="checkbox" name="remExMark" value="true" id="remExMark" checked>
					&nbsp;&nbsp;<code>!</code>
				</label>
			</div>
			<div class="column control">
				<label class="checkbox">
					<input type="checkbox" name="remQuestMark" value="true" id="remQuestMark" checked>
					&nbsp;&nbsp;<code>?</code>
				</label>
			</div>
			<div class="column control">
				<label class="checkbox">
					<input type="checkbox" name="remColon" value="true" id="remExMark" checked>
					&nbsp;&nbsp;<code>:</code>
				</label>
			</div>
			<div class="column control">
				<label class="checkbox">
					<input type="checkbox" name="remSingQuotMark" value="true" id="remExMark" checked>
					&nbsp;&nbsp;<code>'</code>
				</label>
			</div>
			<div class="column control">
				<label class="checkbox">
					<input type="checkbox" name="remDoubQuotMark" value="true" id="remExMark" checked>
					&nbsp;&nbsp;<code>"</code>
				</label>
			</div>
			<div class="column control">
				<label class="checkbox">
					<input type="checkbox" name="remHyphen" value="true" id="remExMark" checked>
					&nbsp;&nbsp;<code>-</code>
				</label>
			</div>
			<div class="column control">
				<label class="checkbox">
					<input type="checkbox" name="remUnderScore" value="true" id="remExMark" checked>
					&nbsp;&nbsp;<code>_</code>
				</label>
			</div>
		</div>
		
		<div class="columns">
			<div class="column control">
				<label class="checkbox">
					<input type="checkbox" name="remEqual" value="true" id="remExMark" checked>
					&nbsp;&nbsp;<code>=</code>
				</label>
			</div>
			<div class="column control">
				<label class="checkbox">
					<input type="checkbox" name="remPlus" value="true" id="remExMark" checked>
					&nbsp;&nbsp;<code>+</code>
				</label>
			</div>
			<div class="column control"></div>
			<div class="column control"></div>
			<div class="column control"></div>
			<div class="column control"></div>
			<div class="column control"></div>
			<div class="column control"></div>
			<div class="column control"></div>
			<div class="column control"></div>
		</div>
		
		<div class="columns">
			<div class="column control">
				<label class="checkbox">
					<input type="checkbox" name="remOpenBracket" value="true" id="remExMark" checked>
					&nbsp;&nbsp;<code>(</code>
				</label>
			</div>
			<div class="column control">
				<label class="checkbox">
					<input type="checkbox" name="remCloseBracket" value="true" id="remExMark" checked>
					&nbsp;&nbsp;<code>)</code>
				</label>
			</div>
			<div class="column control">
				<label class="checkbox">
					<input type="checkbox" name="remOpenCurlyBracket" value="true" id="remExMark" checked>
					&nbsp;&nbsp;<code>{</code>
				</label>
			</div>
			<div class="column control">
				<label class="checkbox">
					<input type="checkbox" name="remCloseCurlyBrackets" value="true" id="remExMark" checked>
					&nbsp;&nbsp;<code>}</code>
				</label>
			</div>
			<div class="column control">
				<label class="checkbox">
					<input type="checkbox" name="remOpenSquareBrackets" value="true" id="remExMark" checked>
					&nbsp;&nbsp;<code>[</code>
				</label>
			</div>
			<div class="column control">
				<label class="checkbox">
					<input type="checkbox" name="remCloseSquareBrackets" value="true" id="remExMark" checked>
					&nbsp;&nbsp;<code>]</code>
				</label>
			</div>
			<div class="column control">
				<label class="checkbox">
					<input type="checkbox" name="remSmallerThan" value="true" id="remExMark" checked>
					&nbsp;&nbsp;<code>&lt;</code>
				</label>
			</div>
			<div class="column control">
				<label class="checkbox">
					<input type="checkbox" name="remBiggerThan" value="true" id="remExMark" checked>
					&nbsp;&nbsp;<code>&gt;</code>
				</label>
			</div>
			<div class="column control">
				<label class="checkbox">
					<input type="checkbox" name="remSlash" value="true" id="remExMark" checked>
					&nbsp;&nbsp;<code>/</code>
				</label>
			</div>
			<div class="column control">
				<label class="checkbox">
					<input type="checkbox" name="remBackSlash" value="true" id="remExMark" checked>
					&nbsp;&nbsp;<code>\</code>
				</label>
			</div>
		</div>
		
		<div class="columns">
			<div class="column control">
				<label class="checkbox">
					<input type="checkbox" name="remAsterisk" value="true" id="remExMark" checked>
					&nbsp;&nbsp;<code>*</code>
				</label>
			</div>
			<div class="column control">
				<label class="checkbox">
					<input type="checkbox" name="remAnd" value="true" id="remExMark" checked>
					&nbsp;&nbsp;<code>&</code>
				</label>
			</div>
			<div class="column control">
				<label class="checkbox">
					<input type="checkbox" name="remCirconflexe" value="true" id="remExMark" checked>
					&nbsp;&nbsp;<code>^</code>
				</label>
			</div>
			<div class="column control">
				<label class="checkbox">
					<input type="checkbox" name="remPercent" value="true" id="remExMark" checked>
					&nbsp;&nbsp;<code>%</code>
				</label>
			</div>
			<div class="column control">
				<label class="checkbox">
					<input type="checkbox" name="remDollarSign" value="true" id="remExMark" checked>
					&nbsp;&nbsp;<code>$</code>
				</label>
			</div>
			<div class="column control">
				<label class="checkbox">
					<input type="checkbox" name="remHashTag" value="true" id="remExMark" checked>
					&nbsp;&nbsp;<code>#</code>
				</label>
			</div>
			<div class="column control">
				<label class="checkbox">
					<input type="checkbox" name="remAt" value="true" id="remExMark" checked>
					&nbsp;&nbsp;<code>@</code>
				</label>
			</div>
			<div class="column control">
				<label class="checkbox">
					<input type="checkbox" name="remGravis" value="true" id="remExMark" checked>
					&nbsp;&nbsp;<code>`</code>
				</label>
			</div>
			<div class="column control">
				<label class="checkbox">
					<input type="checkbox" name="remTild" value="true" id="remExMark" checked>
					&nbsp;&nbsp;<code>~</code>
				</label>
			</div>
			<div class="column control"></div>
		</div>
		
		<div class="columns">
			<div class="column">
				<input class="button" type="submit" value="Encrypt">
			</div>
		</div>
		
	</form>
	
	<?php
	function remChar($text)
	{
		$text = strtoupper($text);
		if (isset($_POST['remComma']))
			$text = preg_replace('/[,]+/u', '', $text);
		if (isset($_POST['remSemiCol']))
			$text = preg_replace('/[;]+/u', '', $text);
		if (isset($_POST['remDot']))
			$text = preg_replace('/[\.]+/u', '', $text);
		if (isset($_POST['remExMark']))
			$text = preg_replace('/[!]+/u', '', $text);
		if (isset($_POST['remQuestMark']))
			$text = preg_replace('/[?]+/u', '', $text);
		if (isset($_POST['remColon']))
			$text = preg_replace('/[:]+/u', '', $text);
		if (isset($_POST['remSingQuotMark']))
			$text = preg_replace('/[\']+/u', '', $text);
		if (isset($_POST['remDoubQuotMark']))
			$text = preg_replace('/["]+/u', '', $text);
		if (isset($_POST['remHyphen']))
			$text = preg_replace('/[-]+/u', '', $text);
		if (isset($_POST['remUnderScore']))
			$text = preg_replace('/[_]+/u', '', $text);
		if (isset($_POST['remEquals']))
			$text = preg_replace('/[=]+/u', '', $text);
		if (isset($_POST['remPlus']))
			$text = preg_replace('/[+]+/u', '', $text);
		
		
		return $text;
	}
	
	if (isset($_POST['text']) && !empty($_POST['text']) && isset($_POST['shift']) && !empty($_POST['shift']))
	{
		$text = $_POST['text'];
		$shift = $_POST['shift'];
		
		echo "<div class='columns section'><div class='column is-8 is-offset-2'><div class='card'><header class='card-header'><p class='card-header-title'>Encrypted text</p></header><div class='card-content'><div class='content' id='output'>";
		$text = remChar($text);
		
		$textArray = str_split($text, 1);
		
		foreach ($textArray as &$letter)
			if (ctype_alpha($letter))
				$letter = chr((((ord($letter) - 65) + $shift) % 26) + 65);
		
		echo implode($textArray);
		echo "</div></div></div></div></div>";
	}
	?>
</div>