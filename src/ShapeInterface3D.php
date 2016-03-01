<?php

namespace Shapes;

#interface for 3d objects

interface ShapeInterface3D {

	/**
	 * Get the volume
	 *
	 * @return float
	 */
	public function volume();

	/**
	 * Get the surface area
	 *
	 * @return float
	 */
	public function surface_area();

}
