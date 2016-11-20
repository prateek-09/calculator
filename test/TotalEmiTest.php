<?php

	require('../src/Calculator.php');
	class TotalEmiTest extends \PHPUnit_Framework_TestCase {

		public function testTotalEmi(){
			$a = new Calculator(100,10,1);
			$result = $a->totalEmi();
			$this->assertEquals(1100,$result);

		}
	}
?>