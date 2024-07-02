

<?php
	class Rectangle
	{	
		public $length;
		public $width;

		public function __construct($length, $width)
		{
			$this->length = $length;+
			$this->width = $width;
		}
		public function area()
		{
			$area = $this->length * $this->width;
			echo "area is : $area <br>";
		}

		public function perimeter()
		{
			$perimeter = 2 * ($this->length + $this->width);
			echo "perimeter is : $perimeter <br>";
		}
	}

	$rec = new Rectangle(10, 10);
	$rec->area();
	$rec->perimeter();

	$rec2 = new Rectangle(12, 12);
	$rec2->area();
	$rec2->perimeter();
?>