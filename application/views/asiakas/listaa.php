<H1>Asiakkaat</H1>


<TABLE border=2>
	<TR><TH>Etunimi</TH><TH>Sukunimi</TH><TH>Email</TH><TR>
	<?php
	foreach ($asiakkaat as $rivi){
	echo '<tr><td>' .$rivi['etunimi']. '</td><td>' .$rivi['sukunimi']. 
	'</td><td>'.$rivi['email'].'</td></td>';
	}
	?>
</TABLE>