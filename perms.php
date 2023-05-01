<?php 
	$title = "Home";
	$path = "./";
    $id = "unix-fm";
	$secondCSSFileName = ""; //Insert filename here, if no second css page is needed leave like ""
	include($path . "assets/inc/header.php"); 
	include($path . "assets/inc/nav.php");
?>


<main>
    <h2>Permissions</h2>
    <img id="" src="" alt="">

    <h3>Viewing permissions: </h3>
    <ul><p>To view the permissions of a file or directory, use the command <b>‘ls -l’</b>. This will display a list of files and directories, along with their permissions, owner, group, size, and modification time.</p></ul>
    <br>
    <h3>Understanding permissions: </h3>
    <ul><p>Permissions are represented by a series of characters that specify who can read, write, and execute a file or directory. The characters are arranged in three groups, each consisting of three characters:</p></ul>
    <ul><p>The first group specifies the permissions for the owner of the file.</p></ul>
    <ul><p>The second group specifies the permissions for the group that the file belongs to.</p></ul>
    <ul><p>The third group specifies the permissions for everyone else.</p></ul>
    <ul><p>Each group consists of the following characters:</p></ul>
    <ul><p><b>‘r’</b> for read permission.</p></ul>
    <ul><p><b>‘w’</b> for write permission.</p></ul>
    <ul><p><b>‘x’</b> for execute permission.</p></ul>
    <ul><p><b>‘-’</b> for no permission.</p></ul>
    <br>
    <h3>Changing permissions: </h3>
    <ul><p>To change the permissions of a file or directory, use the command chmod, followed by the new permissions and the name of the file or directory. For example, to give the owner of a file read and write permissions, use the command <b>‘chmod u+rw filename’</b>.</p></ul>
    <ul><p>You can also use the following shortcuts to set permissions:</p></ul>
    <ul><p><b>‘u’</b> for the owner of the file.</p></ul>
    <ul><p><b>‘g’</b> for the group that the file belongs to.</p></ul>
    <ul><p><b>‘o’</b> for everyone else.</p></ul>
    <ul><p><b>‘a’</b> for all users.</p></ul>
    <ul><p>For example, <b>‘chmod a+r filename’</b> adds read permission for all users.</p></ul>
    <br>
    <h3>Changing ownership: </h3>
    <ul><p>To change the ownership of a file or directory, use the command <b>‘chown’</b>, followed by the new owner and the name of the file or directory. For example, to change the owner of a file to a user named <b>‘jdoe’</b>, use the command chown <b>‘jdoe filename’</b>.</p></ul>
    <ul><p>You can also change the group ownership of a file or directory using the command <b>‘chgrp’</b></p></ul>
    <br>
</main>

<br>

<h2>Unix Permissions Quiz</h2>
<form>
	<p>What command can you use to change the permissions of a file?</p>
	  
	  <label for="1"><input type="radio" id="permsa1" name="perms" value="1" onclick="answerCorrectly(this,'permsa1')>chmod</label>
	<br>
	  <label for="2"><input type="radio" id="permsa2" name="perms" value="2" onclick="answerCorrectly(this,'permsa2')>chown</label>
	<br>
	  
	  <label for="3"><input type="radio" id="permsa3" name="perms" value="3" onclick="answerCorrectly(this,'permsa3')>chgrp</label>
	<br>
	  
	  <label for="4"><input type="radio" id="permsa4" name="perms" value="4" onclick="answerCorrectly(this,'permsa4')>chmod +x</label>
	
    <br>  
    
    <p>What does the "r" permission represent in Unix file permissions?</p>
	  
	  <label for="5"><input type="radio" id="permsa5" name="perms" value="5" onclick="answerCorrectly(this,'permsa5')>Read permission</label>
	<br>
	  
	  <label for="6"><input type="radio" id="permsa6" name="perms" value="6" onclick="answerCorrectly(this,'permsa6')>Write permission</label>
	<br>
	  
	  <label for="7"><input type="radio" id="permsa7" name="perms" value="7" onclick="answerCorrectly(this,'permsa7')>Execute permission</label>
	<br>
	  
	  <label for="8"><input type="radio" id="permsa8" name="perms" value="8" onclick="answerCorrectly(this,'permsa8')>None of the above</label>
	<br>
</form>

<?php 
	//assets/inc/footer.php needs to be finished
	include($path . "assets/inc/footer.php");
?>