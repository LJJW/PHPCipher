<div class="container is-fluid section">
	<div class="content">
		<div class="block">
			<a name="about">
				<h1 class="title">
					About
				</h1>
			</a>
			<p class="has-text-justified">
				This tool allows you to encrypt a message with the <a href="#caesar">Caesar Cipher</a>, <a href="#vigenere">Vigenere Cipher</a> or <a href="#mauborgne">Mauborgne System</a>. This documentation should serve to understand the encryption methods. None of the information that is entered will ever be stored on the server. I'm not trying to steal your data. This is an encryption website which should also be used to encrypt secure data that might not want anybody to acquire.
			</p>
		</div>
		<div class="block">
			<a name="goodtoknow">
				<h1 class="title">
					Good To Know
				</h1>
			</a>
			<p class="has-text-justified">
				There are some things you might want to know, or example why some features exist.
			</p>
			<h2 class="title">
				Removing special characters
			</h2>
			<p class="has-text-justified">
				The reason why the encrypted text doesn't contain any more spaces, dots, dashes and so on is because they've been eliminated from the string to ensure more security. If one could identify where a word starts and ends, it would be possible to guess the rest of a word after getting a part of it.
			</p>
			<h3>
				Characters that aren't deleted
			</h3>
			<ul>
				<li>
					Letters (case-insensitive)
				</li>
				<li>
					Numbers
				</li>
				<li>
					Following special characters: "|/()*"
				</li>
			</ul>
			<p>
				All other characters not listed, are being deleted. If you want to keep the special characters when the text is encrypted, you can remove the tick of the checkbox before encrypting.
			</p>
		</div>
		<div class="block">
			<a name="shift">
				<h2 class="title">
					Shift
				</h2>
			</a>
			<p class="has-text-justified">
				The shift is a very important part of the following three encryption methods. They all shift the letters in a specific way. The shift is the amount of places a letter is shifted in the alphabet when encrypting a text.<br>
				<a name="caesarExample"></a>So lets make an example. I'll be using the same shift to encrypt every letter of "Hello World". We will be using a shift of three.<br>
				In the following table you can see that the bottom alphabet is is shifted to the left three times. That means that a letter of the plain text encrypted through a shift of three will result in the letter positioned three positions to the right of the current letter. Which means that if one encrypts 'A' with a shift of three the result letter is 'D'. The table at the bottom facilitates the encryption of letters with a shift of three.
			</p>
			<table class="table">
				<tbody>
					<tr>
						<td style="font-family: monospace;" class="has-text-centered">
							<?php cipherAlph('A', "&emsp;&emsp;&emsp;"); ?>
						</td>
					</tr>
					<tr>
						<td style="font-family: monospace;" class="has-text-centered">
							<?php cipherAlph('D', "&emsp;&emsp;&emsp;"); ?>
						</td>
					</tr>
				</tbody>
			</table>
			<p class="has-text-justified">
				If I now was to encrypt the text "Hello World", as an example, with a consistent shift of three, the resulting text would be "KHOORZRUOG".<br>
				I hope this was an understandable explanation of the shift.
			</p>
		</div>
		<div class="block">
			<a name="caesar">
				<h1 class="title">
					Caesar Cipher
				</h1>
			</a>
			<p>
				The Caesar Cipher uses a monoalphabetic cipher. That means that for the encryption of the whole text, you will be using the same
				<a href="#shift">shift</a>. The example used in shift shows how the Caesar Cipher works. Just click
				<a href="#caesarExample">here</a> to find out.<br>
				Incase you were asking yourself what that range ist you can select when encrypting and decrypting with the Caesar Cpher, it's the shift.
			</p>
		</div>
		<div class="block">
			<a name="vigenere"></a>
			<h1 class="title">
				Vigenere Cipher
			</h1>
			<p class="has-text-justified">
				We've already looked at the <a href="#caesar">Caesar Cipher</a>. The Vigenere Cipher is a polyalphabetic cipher which means that instead of using one cipher alphabet to encrypt the whole text, you use multiple cipher alphabets in alternation. The cipher alphabets are defined by a keyword. I'll make an example to show how the encryption works.
			</p>
			<p class="has-text-justified">
				We'll be encrypting the text "lorem ipsum dolor sit amet" with the keyword "latin". First we'll find out what kind of shifts and according to that what cipher alphabets will be used to encrypt the text.
			</p>
			<table class="table">
				<thead>
					<tr>
						<td>
							Letter
						</td>
						<td>
							Shift
						</td>
						<td>
							cipher alphabet
						</td>
					</tr>
					<tr>
						<td colspan="2">
							Basic alphabet
						</td>
						<td class="is-strong" style="font-family: monospace">
							<?php cipherAlph('A', "&emsp;&emsp;") ?>
						</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							l
						</td>
						<td>
							11
						</td>
						<td style="font-family: monospace;">
							<?php
							cipherAlph('L', "&emsp;&emsp;");
							?>
						</td>
					</tr>
					<tr>
						<td>
							a
						</td>
						<td>
							0
						</td>
						<td style="font-family: monospace;">
							<?php
							cipherAlph('A', "&emsp;&emsp;");
							?>
						</td>
					</tr>
					<tr>
						<td>
							t
						</td>
						<td>
							19
						</td>
						<td style="font-family: monospace;">
							<?php
							cipherAlph('T', "&emsp;&emsp;");
							?>
						</td>
					</tr>
					<tr>
						<td>
							i
						</td>
						<td>
							8
						</td>
						<td style="font-family: monospace;">
							<?php
							cipherAlph('I', "&emsp;&emsp;");
							?>
						</td>
					</tr>
					<tr>
						<td>
							n
						</td>
						<td>
							13
						</td>
						<td style="font-family: monospace;">
							<?php
							cipherAlph('N', "&emsp;&emsp;");
							?>
						</td>
					</tr>
				</tbody>
			</table>
			<p>
				The letter 'l' from the example text will be encrypted with the cipher alphabet that starts with the first letter of the keyword which is 'l'. So if you look at the table on the top, you'll find out that the letter in the row of the cipher alphabet that starts with 'l' that is in the same column as the 'l' from the Basic alphabet is the 'W'. This will be the first letter of the encrypted text.<br>
				The letter 'o' from the example text will be encrypted with the cipher alphabet that starts with the first letter of the keyword which is 'a'. So if you look at the table on the top, you'll find out that the letter in the row of the cipher alphabet that starts with 'a' that is in the same column as the 'o' from the Basic alphabet is the 'O'. You might be wondering why the origin letter is the same as the encrypted letter. That's because the letter of the key which is a results in a shift of 0. That doesn't mean it's less secure. It's as secure as it would be with any other keyword that doesn't contain an 'a'. This will be the first letter of the encrypted text.<br>
				This procedure is repeated until the whole text is encrypted. A space is not encrypted. but the iterator does move forward. When the end of the keyword is reached, you start again at the beginning.
			</p>
		</div>
		<div class="block">
			<a name="mauborgne">
				<h1 class="title">
					Mauborgne System
				</h1>
			</a>
			<p>
				The Mauborgne System is based on the <a href="#vigenere">Vigenere Cipher</a>. But unlike the Vigenere Cipher, the encrypter doesn't think of a key himself, but the key is generated. The generated key is as long as the text entered and completely random so no frequency analysis is possible. Once the key has been generated, the message will be encrypted with the same procedure as used with the Vigenere Cipher.
			</p>
		</div>
	</div>
</div>