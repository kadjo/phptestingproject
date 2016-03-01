<?php

namespace Shapes;

include_once('Square.php');
include_once('ShapeInterface3D.php');

class Cube extends Square implements ShapeInterface3D{


	/**
	 * Get the surface area
	 *
	 * @return int
	 */
	public function surface_area()
	{
		return 6 * ($this->area());
	}

	/**
	 * Get the volume of cube
	 *
	 * @return int
	 */
	public function volume()
	{
		return (pow($this->side,3));
	}

}
