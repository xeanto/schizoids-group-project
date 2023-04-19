<?php 
	$title = "Home";
	$path = "./";
	$secondCSSFileName = ""; //Insert filename here, if no second css page is needed leave like ""
	include($path . "assets/inc/header.php"); 
	include($path . "assets/inc/nav.php");
?>


<main>
    <h2>Searching and replacing</h2>
    <img id="" src="" alt="">
    <h3>Searching for text:</h3>
	<ul>
		<li><p>To search for text in Nano, use the keyboard shortcut <br>Ctrl+W<br>. This will open the search prompt at the bottom of the screen. Type the text you want to search for and press <br>Enter<br>. Nano will search for the text and highlight the first occurrence.</p></li>
        <br>
        <li><p>To find the next occurrence of the search term, press <br>Ctrl+W<br> again. If you want to search for the same term again, press <br>Alt+W<br> to repeat the search.<p></li>
    </ul>
    <h3>Replacing text: </h3>
		<li><p>To replace text in Nano, use the keyboard shortcut <br>Ctrl+\<br>. This will open the replace prompt at the bottom of the screen. Type the text you want to replace in the "Find" field and the replacement text in the "Replace with" field. Press <br>Enter<br> to start the replacement.</p></li>
        <br>
		<li><p>Nano will replace the first occurrence of the search term. If you want to replace all occurrences of the search term, press <br>A<br> for "All". If you want to replace occurrences one by one, press <br>Y<br> for "Yes".</p></li>
	</ul>

	<h3>Cutting, copying, and pasting text: </h3>
	<ul>
		<li><p>To cut text in Nano, first use the arrow keys to move the cursor to the beginning of the text you want to cut. Then, use the <br>Ctrl+K<br> keyboard shortcut to delete the text. The text will be stored in Nano's internal buffer.</p></li>
		<br>
		<li><p>To copy text in Nano, first use the arrow keys to move the cursor to the beginning of the text you want to copy. Then, use the <br>Alt+A<br> keyboard shortcut to mark the beginning of the text, and use the arrow keys to move the cursor to the end of the text. Then, use the <br>Ctrl+K<br> keyboard shortcut to copy the text to Nano's internal buffer.</p></li>
        <br>
        <li><p>To paste text in Nano, use the <br>Ctrl+U<br> keyboard shortcut. The text in Nano's internal buffer will be inserted at the cursor position.</p></li>
	</ul>

	<h3>Using regular expressions: </h3>
	<ul>
		<li><p>Nano supports regular expressions for searching and replacing text. To use regular expressions, use the <br>‘-r’<br> option when opening a file. For example, to open a file for editing with regular expressions enabled, type:</p>
            <li><b>‘nano -r filename.txt‘<b></li>
        </li>
		<br>
        <li><p>To use regular expressions in a search, prefix the search term with <b>‘^’<b> to match the beginning of a line, <b>‘$’<b> to match the end of a line, <b>‘.’<b> to match any character, <b>‘*’<b> to match zero or more of the previous character, and <b>‘+’<b> to match one or more of the previous character. For example, to search for any line that starts with the word "apple", type:</p>
            <li><b>‘^apple’<b></li>
        </li>
        <li><p>To use regular expressions in a replacement, use the <b>‘&’<b> character to represent the matched text. For example, to replace any occurrence of the word "apple" with the word "orange", type:</p>
            <li><b>‘s/apple/orange/g’<b></li>
        </li>
	</ul>
</main>

<?php 
	//assets/inc/footer.php needs to be finished
	include($path . "assets/inc/footer.php");
?>