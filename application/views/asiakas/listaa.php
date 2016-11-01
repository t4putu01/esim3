<H1>Asiakkaat</H1>
<?php 
print_r($asiakkaat);
?>

<TABLE border=2>
	<TR><TH>Etunimi</TH><TH>Sukunimi</TH></TR>
	<?php
	foreach ($asiakkaat as $rivi){
	echo '<tr><td>' .$rivi['en']. '</td><td>' .$rivi['sn']. '</td><td>' .$rivi['email']. '</td></td>';
	}
	?>
</TABLE>