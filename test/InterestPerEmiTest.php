<?php

	require ('../src/Calculator.php');

	class InterestPerEmiTest extends \PHPUnit_Framework_TestCase{
	
		public function testInterestPerEmi() {
			$a = new Calculator(100,10,1);
			$result = $a->interestPerEmi();
			$this->assertEquals(10,$result);
		}
	}
?>