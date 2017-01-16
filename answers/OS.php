<?php

namespace answers;

class OS {

	public $windows;

	public $linux;

	public $mac;

	public function __construct($w ="", $l = "", $m = "") 
	{
		$this->windows = $w;
		$this->linux= $l;
		$this->mac= $m;
	}

	public function show()
	{
		echo "За Windows: " . $this->windows  . "<br />";
		echo "За Linux: " . $this->linux  . "<br />";
		echo "За Mac: " . $this->mac . "<br />";
		
	}

	public function getGolosForWindows()
	{
		return $this->windows;
	}

	public function getGolosForLinux()
	{
		return $this->linux;
	}

	public function getGolosForMac()
	{
		return $this->mac;
	}



}