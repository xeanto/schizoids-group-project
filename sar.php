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
		<li><p>To search for text in Nano, use the keyboard shortcut <b>Ctrl+W</b>. This will open the search prompt at the bottom of the screen. Type the text you want to search for and press <b>Enter</b>. Nano will search for the text and highlight the first occurrence.</p></li>
        <br>
        <li><p>To find the next occurrence of the search term, press <b>Ctrl+W</b> again. If you want to search for the same term again, press <b>Alt+W</b> to repeat the search.<p></li>
    </ul>
    <h3>Replacing text: </h3>
		<li><p>To replace text in Nano, use the keyboard shortcut <b>Ctrl+\</b>. This will open the replace prompt at the bottom of the screen. Type the text you want to replace in the "Find" field and the replacement text in the "Replace with" field. Press <b>Enter</b> to start the replacement.</p></li>
        <b>
		<li><p>Nano will replace the first occurrence of the search term. If you want to replace all occurrences of the search term, press <b>A</b> for "All". If you want to replace occurrences one by one, press <b>Y</b> for "Yes".</p></li>
	</ul>

	<h3>Cutting, copying, and pasting text: </h3>
	<ul>
		<li><p>To cut text in Nano, first use the arrow keys to move the cursor to the beginning of the text you want to cut. Then, use the <b>Ctrl+K</b> keyboard shortcut to delete the text. The text will be stored in Nano's internal buffer.</p></li>
		<br>
		<li><p>To copy text in Nano, first use the arrow keys to move the cursor to the beginning of the text you want to copy. Then, use the <b>Alt+A</b> keyboard shortcut to mark the beginning of the text, and use the arrow keys to move the cursor to the end of the text. Then, use the <b>Ctrl+K</b> keyboard shortcut to copy the text to Nano's internal buffer.</p></li>
        <br>
        <li><p>To paste text in Nano, use the <b>Ctrl+U</b> keyboard shortcut. The text in Nano's internal buffer will be inserted at the cursor position.</p></li>
	</ul>

	<h3>Using regular expressions: </h3>
	<ul>
		<li><p>Nano supports regular expressions for searching and replacing text. To use regular expressions, use the <b>‘-r’<b> option when opening a file. For example, to open a file for editing with regular expressions enabled, type:</p>
            <li><b>‘nano -r filename.txt‘</b></li>
        </li>
		<br>
        <li><p>To use regular expressions in a search, prefix the search term with <b>‘^’</b> to match the beginning of a line, <b>‘$’</b> to match the end of a line, <b>‘.’</b> to match any character, <b>‘*’</b> to match zero or more of the previous character, and <b>‘+’</b> to match one or more of the previous character. For example, to search for any line that starts with the word "apple", type:</p>
            <li><b>‘^apple’</b></li>
        </li>
        <li><p>To use regular expressions in a replacement, use the <b>‘&’</b> character to represent the matched text. For example, to replace any occurrence of the word "apple" with the word "orange", type:</p>
            <li><b>‘s/apple/orange/g’</b></li>
        </li>
	</ul>
</main>

<br>

<form>
	<p>Which key combination is used to search for text in Nano?</p>
	  <input type="radio" id="sara1" name="sar" value="1">
	  <label for="1">Ctrl+S</label>
	<br>
	  <input type="radio" id="sara2" name="sar" value="2">
	  <label for="2">Ctrl+T</label>
	<br>
	  <input type="radio" id="sara3" name="sar" value="3">
	  <label for="3">Ctrl+C</label>
	<br>
	  <input type="radio" id="sara4" name="sar" value="4">
	  <label for="4">Ctrl+G</label>
	<br>  
</form>
<?php 
	//assets/inc/footer.php needs to be finished
	include($path . "assets/inc/footer.php");
?>