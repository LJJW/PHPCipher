<?php
function cipherAlph($letter, $space)
{
	for ($i = ord($letter); $i < 27 + ord($letter); $i++)
	{
		if ($i < 26 + 65)
			echo chr($i).$space;
		else if ($i > 26 + 65)
			echo chr($i - 27).$space;
	}
}
