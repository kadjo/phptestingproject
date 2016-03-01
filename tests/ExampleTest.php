<?php
include_once('src/Cube.php');
include_once('src/Square.php');
include_once('src/Circle.php');
include_once('src/Sphere.php');

class ExampleTest extends\PHPUnit_Framework_TestCase {

	//public function testPushAndPop()
	//{
		//$stack = array();
		//$this->assertEquals(0, count($stack));

		//array_push($stack, 'foo');
		//$this->assertEquals('foo', $stack[count($stack)-1]);
		//$this->assertEquals(1, count($stack));

		//$this->assertEquals('foo', array_pop($stack));
		//$this->assertEquals(0, count($stack));
	//}

    public function testShapes()
    {


        $cube = new Shapes\Cube(24);
        // using the google calculator for cube using the link below, width is 24
        //https://www.google.com.ph/webhp?sourceid=chrome-instant&ion=1&espv=2&ie=UTF-8#q=cube+calc:+find+A+a%3D24
        //
        // result for volume is 13824
        // result for surface area is   3456
         // Lets test  and confirm   
        $this->assertEquals($cube->volume(),13824);
        $this->assertEquals($cube->surface_area(),3456);


        // using the google calculator for sphere using the link below
        // https://www.google.com.ph/webhp?sourceid=chrome-instant&ion=1&espv=2&ie=UTF-8#q=sphere+calculator
        //

        $sphere = new Shapes\Sphere(4);
        // result for volume is 268.08257310633
        // result for surface area is 201.06192982975
         // Lets test  and confirm   
        $this->assertEquals($sphere->volume(),268.08257310633);
        $this->assertEquals($sphere->surface_area(), 201.06192982975);
        


        //

        $square = new Shapes\Square(4);
        $this->assertEquals($square->area(),16);
        $this->assertEquals($square->perimeter(), 16);        


        $circle = new Shapes\Circle(3);
        $this->assertEquals($circle->area(),28.274333882308);
        $this->assertEquals($circle->perimeter(),18.849555921539);        

    }

}
