<?php
abstract class Person
{
    protected $name, $address;

    public function __construct($name, $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    abstract public function toString();
}

class Student extends Person
{
    private $program, $year, $fee;

    public function __construct($name, $address, $program, $year, $fee)
    {
        parent::__construct($name, $address);
        $this->program = $program;
        $this->year = $year;
        $this->fee = $fee;
    }

    public function toString()
    {
        return "Student[name={$this->name}, address={$this->address}, program={$this->program}, year={$this->year}, fee={$this->fee}]";
    }
}

class Staff extends Person
{
    private $school, $pay;

    public function __construct($name, $address, $school, $pay)
    {
        parent::__construct($name, $address);
        $this->school = $school;
        $this->pay = $pay;
    }

    public function toString()
    {
        return "Staff[name={$this->name}, address={$this->address}, school={$this->school}, pay={$this->pay}]";
    }
}

$student = new Student("Sanaa", "123 Main St", "CS", 2, 15000);
echo $student->toString() . "\n";

$staff = new Staff("aml ali", "456 Oak St", "High School", 50000);
echo $staff->toString() . "\n";
