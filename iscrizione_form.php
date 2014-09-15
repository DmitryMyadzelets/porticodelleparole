

<form method="POST" action="<?php $_PHP_SELF ?>">

<p>Nome, Cognome<br>
	<input type="text" name="name" style="width:100%" value="<?php echo $_POST['name']?>">
</p>

<p>Età (opzionale)<br>
	<input type="text" name="age" value="<?php echo $_POST['age']?>">
</p>

<p>Giorni e ora preferiti per frequentare lezioni (scegliere più varianti possibili)<br>
	<input type="text" name="schedule" style="width:100%" value="<?php echo $_POST['schedule']?>">
</p>

<p>Indirizzo e-mail<br>
	<input type="text" name="email" style="width:100%" value="<?php echo $_POST['email']?>">
</p>

<p>Numero di telefono (opzionale)<br>
	<input type="text" name="phone" size="15em" value="<?php echo $_POST['phone']?>">
</p>


<p>
	<input type="checkbox" name="learned" value="yes"
	<?php 
		if (isset($_POST['learned'])) { echo 'checked'; } 
	?> 
	>
	Si, già studiato il russo. Per quanto tempo? <input type="text" name="time_learned" value="<?php echo $_POST['time_learned']?>">
</p>

<input type="submit" value="Invia">

</form>
