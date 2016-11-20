<?php
	/*
	*This is a calculator class which calculates various banking calculatuions
	*
	*This class has menthods which calculate Total Interest, Total emi, 
	*Total amount etc. on the basis of amount , interest and duration.
	*/
	class Calculator{
		private $amount;
		private $interest;
		private $duration;

		/**
		*This is the constructor function of class Calculator
		*
		*It initializes the $amount,$interest,$duration.
		*
		*@param $amount float it is the principle amount.
		*@param $interest float It is the interest per annum applied .
		*@param $duration float It is the duration of loan.
		*@return void
		*/
		function __construct($amount,$interest,$duration){
			$this->amount = $amount;
			$this->interest = $interest;
			$this->duration = $duration;
		}
		/**
		* This function calculates total interest 
		*
		* This function uses formula for calculating the total interest.
		*
		*@return float
		*/
		function totalInterest() {
			return ($this->amount*$this->interest*$this->duration)/100;	
		}
		/**
		* This function calculates the total amount 
		*
		* This function addes the total interest with the amount given.
		*
		* @return float
		*/

		function totalAmount() {
			return $this->amount+$this->totalInterest();
		}
		/**
		*This function calciulates total emi using the formula
		*
		*@return float
		*/

		function totalEmi() {
			return $this->amount* ( $this->interest*pow( (1+$this->interest) ,$this->duration ) )/( pow( ($this->interest+1) , $this->duration )-1);

		}
		/**
		*This function calculates interest per emi
		*
		*This function users amount interest and duration to calculate the interest per emi.
		*
		*@return float
		*/
		function interestPerEmi(){
			return ($this->amount*$this->interest*$this->duration)/100;
		}
	}
?>