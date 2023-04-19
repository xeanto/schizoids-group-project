<?php 
	$title = "Home";
	$path = "./";
	$secondCSSFileName = ""; //Insert filename here, if no second css page is needed leave like ""
	include($path . "assets/inc/header.php"); 
	include($path . "assets/inc/nav.php");
?>


<main>
    <h2>Spell-checking</h2>
    <img id="" src="" alt="">

    <h3>Install the spell-checking tool:</h3>
	<ul>
		<li><p>Before you can use the spell-checking feature in Nano, you need to make sure that the appropriate spell-checking tool is installed on your system. For example, if you are using Ubuntu, you can install the "aspell" tool by typing:</p>
            <li><b>sudo apt-get install aspell <b></li>
        </li>
	</ul>

    <h3>Enable spell-checking:</h3>
	<ul>
		<li><p>To enable spell-checking in Nano, you need to add the following line to your ".nanorc" configuration file:</p>
            <li><b>set autoSpellCheck  <b></li>
        </li>
        <li>This will enable spell-checking for all files that you edit with Nano.</li>
	</ul>

    <h3>Use spell-checking:</h3>
	<ul>
        <li><p>Once you have enabled spell-checking, you can start using it by typing text in Nano. As you type, any misspelled words will be highlighted in red. To correct a misspelled word, position the cursor on the word and press "Ctrl + ]". Nano will display a list of suggested corrections. Use the arrow keys to select the correct spelling and press "Enter" to replace the misspelled word.</p></li>
        <li><p>You can also add words to a personal dictionary by pressing "Ctrl + K" when the cursor is on a word that you want to add. This will add the word to a personal dictionary file, which is stored in your home directory.</p></li>
        <li><p>Spell-checking can be a very useful tool for catching spelling errors as you type. By highlighting misspelled words and suggesting corrections, it can help you write more accurately and professionally.</p></li>
    </ul>
</main>

<br>

<form>
	<p>What command can be used to start spell-checking in Nano?</p>
	  <input type="radio" id="spchka1" name="spchk" value="1">
	  <label for="1">Ctrl+S</label>
	<br>
	  <input type="radio" id="spchka2" name="spchk" value="2">
	  <label for="2">Ctrl+Y</label>
	<br>
	  <input type="radio" id="spchka3" name="spchk" value="3">
	  <label for="3">Ctrl+T</label>
	<br>
	  <input type="radio" id="spchka4" name="spchk" value="4">
	  <label for="4">Ctrl+C</label>
	<br>  
</form>
<?php 
	//assets/inc/footer.php needs to be finished
	include($path . "assets/inc/footer.php");
?>