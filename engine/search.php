<?php
	if(empty($_REQUEST['search'])){
		$keyword='';
	}
	else if($_REQUEST['search'] == 'manual'){
		$keyword='MT';
	}
	else if($_REQUEST['search'] == 'matic'){
		$keyword='AT';
	}
	else{
		$keyword=$_REQUEST['search'];
	}
?>
