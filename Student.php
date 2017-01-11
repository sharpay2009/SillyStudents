<?php

class Student {
	funnction __construct() {
		$this->surname = "";
		$this->firstname = "";
		$this->emails = array();
		$this->grades = array();
	}
	
	function addEmail($which, $address) {
		$this->emails[$which] = $address;
	}
	
	function addGrades($grade) {
		$this->grades[] = $grade;
	}
	
	function average() {
		$total = 0;
		foreach ($this->grades as $value)
			$total += $value;
		return $total / count($this->grades);
	}
	
	function toString() {
		$result = $this->firstname . ' ' . $this->surname;
		$result .= ' ('.$this->average().")\n";
		foreach($this->emails as $which=>$what)
			$result .= $which . ': '. $what. "\n";
		$result .= "\n";
		return '<pre>'.$result.'</pre>';
	}
}