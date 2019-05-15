<?php

class Garage{
	
	public $basicInspection = 50;
	public $oilChange = 85;
	public $tireRotation = 23.5;
	
	
	function basic(){
		return $this->basicInspection;
		}
		
	function oilbasic(){
		return ($this->basicInspection + $this->oilChange);
		}
		
	function oiltire(){
		return ($this->basicInspection + $this->tireRotation);
		}
		
	function fullservice(){
		return ($this->basicInspection + $this->tireRotation + $this->oilChange);
		}
	
	}

//instantiates a new garage object

$object = new Garage;

// A menu to capture user input
echo " Select the number to know the cost
		1. Basic
		2. Oil Change
		3. Oil and Change and Tire Rotation
		4. Full Service
		--------";
		//Capture user input from the command line
 $input = trim(fgets(STDIN));
 
 if ($input == 1){
//returns the cost of basic inspection
echo "Costs $".$object->basic()."\n";
}elseif($input == 2){
//returns the cost of basic inspection and oil change
echo "Costs $".$object->oilbasic()."\n";
}elseif($input == 3){
//returns the cost of  basic inspection and tire rotation
echo "Costs $".$object->oiltire()."\n";
}elseif($input == 4){
//returns the cost of full service
echo "Costs $".$object->fullservice()."\n";
}
