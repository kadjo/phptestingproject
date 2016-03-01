<?php

namespace Shapes;

include_once('Circle.php');
include_once('ShapeInterface3D.php');

class Sphere extends Circle implements ShapeInterface3D{


	/**
	 * Get the surface area
	 *
	 * @return int
	 */
	public function surface_area()
	{
		return 4 * ($this->area());
	}

	/**
	 * Get the volume of sphere
	 *
	 * @return int
	 */
	public function volume()
	{
		return ( 4/3 * ($this->area()* $this->radius ));
	}

}
