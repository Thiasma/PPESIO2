<h1>Modification</h1>

<form action="./?action=modification" method="POST">
	<p>Choisissez un poste</p>
   <select id="cbxPoste" name="ComboBox" onChange="document.getElementById['frmCodeAliments'].submit();">
		<?php
			$c = mysqli_connect("localhost","root","root","ppe");
			$r = mysqli_query($c,"select * from Poste");
			while($a =  mysqli_fetch_row($r)){
				echo"<option value ='$a[0]'>$a[1]</option>";
			}
		?>	
	</select>

</form>
