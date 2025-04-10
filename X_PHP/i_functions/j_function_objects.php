<?php
class Student
{
    public $name;
    public $address;

    function setName($name)
    {
        $this->name = $name;
    }
    function getName()
    {
        return $this->name;
    }
    function setAddress($address)
    {
        $this->address = $address;
    }
    function getAddress()
    {
        return $this->address;
    }
}
$stu1 = new Student(); // creating an object
$stu1->setName("Ram");
$stu1->setAddress("Kathmandu");
echo "Name = " . $stu1->getName();
echo "<br>";
echo "Address = " . $stu1->getAddress();
?>