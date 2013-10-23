<?php 
function go($a) {	
	echo($a.''."\n".'');
}
$day = 'Mon';
switch($day) {
	case 'Mon':
		go('work');
		break;
	case 'Tue':
		go('relax');
		break;
	default:	
		go('else');
}
function tes($a) {	
	switch($a) {
		case 1:
			go('one');
			break;
		default:	
			go('many');
	}
}
tes(2);
?>
