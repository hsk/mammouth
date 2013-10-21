<?php 
class A {	
	function b() {
		$this->a();
	}
	function a() {
		echo($this->a.'test'.$this->c().$this->b->c());
	}
	var $h = 'a';
	function c() {
		return('555');
	}
}
?>
