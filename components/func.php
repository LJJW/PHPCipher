<?php
function cipherAlph($letter)
{
	for ($i = ord($letter); $i < 27 + ord($letter); $i++)
	{
		if ($i < 26 + 65)
			echo "<div class='column'>".chr($i)."</div>";
		else if ($i > 26 + 65)
			echo "<div class='column'>".chr($i - 27)."</div>";
	}
}
