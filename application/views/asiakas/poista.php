<h1> Poista asiakas</h1>
<table border=1>
<TR><TH>Etunimi</TH><TH>Sukunimi</TH><TH>Valitsin</TH></TR>
<?php 
foreach ($asiakkaat as $rivi) {
	echo '<tr><td>'.$rivi['etunimi'].'</td><td>'.$rivi['sukunimi'].'</td><td>';
	echo '<a href="poista/';
	echo $rivi['id_asiakas'].'">Poista</a>';
	echo '</td></tr>';

}
?>
</table>