<?php
class Employee
{
    public $ename;
    public $eid;
    public $edepartment;  
    function __construct($ename,$eid,$edepartment)
    {
        $this->ename=$ename;              /*Assigning values to class variables*/
        $this->eid=$eid;
        $this->edepartment=$edepartment;
    }
    private function set_ename($name)   /*Mutator function*/
    {
        $this->ename=$name;
    }
    function get_ename()        /*Accessor function*/
    {
        return $this->ename;
    }
    function set_eid($id)       /*Mutator function*/
    {
        $this->eid=$id;
    }
    function get_eid()           /*Accessor function*/
    {
        return $this->eid;
    }
    function set_edepartment($department)   /*Mutator function*/
    {
        $this->edepartment=$department;
    }
    function get_edepartment()              /*Accessor function*/
    {
        return $this->edepartment;
    }
}

$e1=new Employee("John",101,"Admin");
echo("Details of employee are <BR>");
echo("Name: ".$e1->get_ename()."<BR>");
echo("Id: ".$e1->get_eid()."<BR>");
echo("Department: ".$e1->get_edepartment()."<BR>");




/*$komal=new Employee();
echo "Testing object and functions<BR>";
echo "Assigning value to name<BR> ".$komal->set_ename("Komal Patel");
echo "Name of employee is ".$komal->get_ename();*/

?>