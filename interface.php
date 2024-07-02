<?php 
	
	 interface resizable
	 {
	 	public function resize();
	 }

	 class square implements resizable
	 {
	 	public $length;
	 	
	 	public function __construct($param1)
	 	{
	 		$this->length = $param1;
	 	}

	 	public function resize()
	 	{
	 		return $this->length * $this->length;
	 	}	
	 }

	 $square = new square(15);
	 echo $square->resize();
?>