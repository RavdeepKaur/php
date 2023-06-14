<?php
class Rectangle
{
    //Declaring variables
   public $length=20;
   public $width=5;
 
   //Defining methods
   public function getPerimeter()
   {
    $perimeter=2*($this->length+$this->width);
    return  $perimeter;
   }

   public function getArea()
   {
    $area=$this->length*$this->width;
    return $area;
   }
}

echo "Details of object 1<HR>";
$obj1=new Rectangle;
echo "Perimeter is ".$obj1->getPerimeter()."<BR>";
echo "Area is ".$obj1->getArea();

$obj1->length=30;
$obj1->width=10;
echo "<BR>Perimeter is ".$obj1->getPerimeter()."<BR>";
echo "Area is ".$obj1->getArea();

echo "<HR>Details of object 2<HR>";

$obj2=new Rectangle;
$obj2->length=3;
$obj2->width=5;
echo "<BR>Perimeter is ".$obj2->getPerimeter()."<BR>";
echo "Area is ".$obj2->getArea();


?>