<?php 
	$title = "Home";
	$path = "./";
    $id = "unix-fm";
	$secondCSSFileName = ""; //Insert filename here, if no second css page is needed leave like ""
	include($path . "assets/inc/header.php"); 
	include($path . "assets/inc/nav.php");
?>

<main>
    <h2>Process management</h2>
    <img id="" src="" alt="">

    <h3>Viewing processes: </h3>
    <ul><p>To view the list of processes running on your system, use the <b>‘ps’</b> command. By default, <b>‘ps’</b> shows only the processes that are running in the current terminal session. To see all processes on the system, use the <b>‘ps aux’</b> command.</p></ul>
    <br>
    <h3>Terminating processes: </h3>
    <ul><p>To terminate a process, use the <b>‘kill’</b> command followed by the process ID (PID) or the name of the process. For example, to terminate a process with PID 1234, use the command <b>‘kill 1234’</b>. To terminate a process by name, use the command <b>‘pkill processname’</b>.</p></ul>
    <br>
    <h3>Background processes: </h3>
    <ul><p>To run a process in the background, append an ampersand (<b>‘&’</b>) at the end of the command. For example, to run a process in the background, use the command <b>‘command &’</b>. To bring a background process to the foreground, use the <b>‘fg’</b> command.</p></ul>
    <br>
    <h3>Monitoring processes: </h3>
    <ul><p>To monitor the system performance, use the <b>‘top’</b> command. <b>‘top’</b> shows the system load, the list of processes, and the resources used by each process. You can also use other monitoring tools like <b>‘htop’</b> or <b>‘glances’</b>.</p></ul>
    <br>
    <h3>Prioritizing processes: </h3>
    <ul><p>To prioritize a process, use the <b>‘nice’</b> command followed by the process name or the PID. For example, to run a process with a lower priority, use the command <b>‘nice -n 10 command’.</b></p></ul>
    <br>
    <h3>Suspending and resuming processes: </h3>
    <ul><p>To suspend a process, use the <b>‘Ctrl-Z’</b> key combination. The process will be stopped, and you can resume it later with the <b>‘fg’</b> command. You can also use the <b>‘bg’</b> command to resume a suspended process in the background.</p></ul>
    <br>
    <h3>Killing unresponsive processes: </h3>
    <ul><p>To kill a process that is not responding, use the <b>‘kill -9’</b> command followed by the process ID or the name of the process. For example, to kill a process with PID 1234 that is not responding, use the command <b>‘kill -9 1234’</b>.</p></ul>
    <br>
</main>

<br>

<h2>Process management Quiz</h2>
<form>
	<p>What command can you use to display a list of all currently running processes?</p>
	  <input type="radio" id="txtmana1" name="pman" value="1">
	  <label for="1">ps</label>
	<br>
	  <input type="radio" id="txtmana2" name="pman" value="2">
	  <label for="2">kill</label>
	<br>
	  <input type="radio" id="txtmana3" name="pman" value="3">
	  <label for="3">top</label>
	<br>
	  <input type="radio" id="txtmana4" name="pman" value="4">
	  <label for="4">grep</label>

	<br>  

    <p>What command can you use to stop a running process?</p>
	  <input type="radio" id="txtmana1" name="pman" value="5">
	  <label for="5">ps</label>
	<br>
	  <input type="radio" id="txtmana2" name="pman" value="6">
	  <label for="6">kill</label>
	<br>
	  <input type="radio" id="txtmana3" name="pman" value="7">
	  <label for="7">top</label>
	<br>
	  <input type="radio" id="txtmana4" name="pman" value="8">
	  <label for="8">grep</label>
</form>
<?php 
	//assets/inc/footer.php needs to be finished
	include($path . "assets/inc/footer.php");
?>