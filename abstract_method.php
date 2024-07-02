<?php 

	abstract class Shape
	{
		public $base;
		public $height;
		public $width;

		public function __construct($param1, $param2)
		{
			$this->base = $param1;
			$this->height = $param2;
			$this->width = $param1;
		}

		abstract public function calculateArea();

	}

	class Triangle  extends Shape
	{
		public function calculateArea()
		{	
			$result = .5 * $this->base * $this->height;
			echo "$result <br>";
		}
	}
	class Rectangle extends Shape
	{
		public function calculateArea()
		{
			$result = $this->width * $this->height;
			echo "$result";
		}
	}

	$triangle = new Triangle(10,10);
	$triangle->calculateArea();

	$rectangle = new Rectangle(10,10);
	$rectangle->calculateArea();

 ?>