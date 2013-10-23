<?php 
$happy = true;
$knowsIt = true;
function clapsHands() {	
	echo('claps'."\n".'');
}
function chaChaCha() {	
	echo('cha cha cha'."\n".'');
}
function showIt() {	
	echo('show it'."\n".'');
}
if($happy && $knowsIt) {
	clapsHands();
	chaChaCha();
} else {
	showIt();
}
function a($happy, $knowsIt) {	
	if($happy && $knowsIt) {
		clapsHands();
	} else {
		showIt();
	}
}
a(false, false);
class A {	
	function a1($happy) {
		if($happy) {		echo('hoge');	}}
}
$a = new A();
$a->a1(true);
?>
