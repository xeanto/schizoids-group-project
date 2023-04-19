<?php 
	$title = "Home";
	$path = "./";
	$secondCSSFileName = ""; //Insert filename here, if no second css page is needed leave like ""
	include($path . "assets/inc/header.php"); 
	include($path . "assets/inc/nav.php");
?>


<main>
    <h2>Basic navigation</h2>
    <img id="" src="" alt="">
    <h3>Inserting text: </h3>
	<ul>
		<li><p>To insert text in Nano, simply start typing at the location where you want to insert the text. The text will be inserted at the cursor position.</p></li>
    </ul>
    <h3>Deleting text: </h3>
		<li><p>To delete text in Nano, use the <b>Backspace<b> or <b>Delete<b> key to remove characters to the left or right of the cursor, respectively. You can also use the <b>Ctrl+K<b> keyboard shortcut to delete the entire line the cursor is on.</p></li>
	</ul>

	<h3>Cutting, copying, and pasting text: </h3>
	<ul>
		<li><p>To cut text in Nano, first use the arrow keys to move the cursor to the beginning of the text you want to cut. Then, use the <br>Ctrl+K<br> keyboard shortcut to delete the text. The text will be stored in Nano's internal buffer.</p></li>
		<br>
		<li><p>To copy text in Nano, first use the arrow keys to move the cursor to the beginning of the text you want to copy. Then, use the <br>Alt+A<br> keyboard shortcut to mark the beginning of the text, and use the arrow keys to move the cursor to the end of the text. Then, use the <br>Ctrl+K<br> keyboard shortcut to copy the text to Nano's internal buffer.</p></li>
        <br>
        <li><p>To paste text in Nano, use the <br>Ctrl+U<br> keyboard shortcut. The text in Nano's internal buffer will be inserted at the cursor position.</p></li>
	</ul>

	<h3>Scrolling the screen: </h3>
	<ul>
		<li><p>To scroll the screen in Nano, use the <b>Ctrl<b> key in combination with the arrow keys. The <b>Ctrl<b> key and <b>Up<b> arrow key scrolls the screen up one line, the <b>Ctrl<b> key and <b>Down<b> arrow key scrolls the screen down one line, the <b>Ctrl<b> key and <b>Left<b> arrow key scrolls the screen left, and the <b>Ctrl<b> key and <b>Right<b> arrow key scrolls the screen right.</p></li>
		<br>
	</ul>
    <h3>Searching and replacing text: </h3>
	<ul>
		<li><p>To search for text in Nano, use the keyboard shortcut <b>Ctrl+W<b>. This will open the search prompt, where you can enter the text you want to search for. Press <b>Enter<b> to start the search.</p></li>
		<br>
        <li><p>To replace text in Nano, use the keyboard shortcut <b>Ctrl+\<b>. This will open the replace prompt, where you can enter the text you want to replace and the text you want to replace it with. Press <b>Enter<b> to replace the text.</p></li>
	</ul>
	<h3>Exiting Nano: </h3>
	<ul>
		<li><p>To exit Nano, use the keyboard shortcut <b>Ctrl+X<b>. If you have made changes to the file, Nano will prompt you to save the changes before exiting.</p></li>
	</ul>
</main>

<?php 
	//assets/inc/footer.php needs to be finished
	include($path . "assets/inc/footer.php");
?>