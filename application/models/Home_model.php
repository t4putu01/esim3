<?php
class Home_model extends CI_Model {
public function getNames() {
	$names=array( 
		array('en'=>'Liisa', "sn"=>'Joki'),
		array('en'=>'Aino', "sn"=>'Joki'),
		array('en'=>'Laura', "sn"=>'Joki')
		);
	return $names;

}

}
