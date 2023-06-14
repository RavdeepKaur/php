<?php
class Employee
{
    public $empId;
    public $ename;
    public $esalary;

    public function __construct($empId,$empName,$empSalary)   //constructor
    {
        $this->empId=$empId;
        $this->ename=$empName;
        $this->esalary=$empSalary;
    }

    //accessor functions
    public function getempId()
    {
        return $this->empId;
    }
    public function getename()
    {
        return $this->ename;
    }
    public function getesalary()
    {
        return $this->esalary;
    }
    //mutator function
    public function setempId($empId)
    {
        $this->empId=$empId;
    }
    public function setename($empName)
    {
        $this->ename=$empName;
    }
    public function setesalary($empSalary)
    {
        $this->esalary=$empSalary;
    }
    public static function header()
    {
        echo "<table border='1'>";
        echo "<tr><th>Emp Id</th>  <th>Name</th>  <th>Salary</th></tr>";
    }
    public static function footer()
    {
        echo "</table>";
    }
    public function __toString()
    {
        return "<tr><td>$this->empId</td>   <td>$this->ename</td>   <td>$this->esalary</td></tr>";
    }
}
$emp1=new Employee(101,"Abc","60000");
$emp2=new Employee(102,"Def","45000");
$emp3=new Employee(103,"Ghi","70000");
$emp4=new Employee(104,"Jkl","50000");
Employee::header();
echo $emp1;
echo $emp2;
echo $emp3;
echo $emp4;
Employee::footer();
?>