<?php
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

    public function join($exam)
    {
        $this->exam = $exam;
    }

    public function test()
    {
        $this->exam->test();
    }

    public function get_point()
    {
        if (isset($this->exam))
            return $this->exam->get_result();
        return "N/A";
    }
}

class Thesis
{
    public $paragraphs;
    public function __construct($paragraphs)
    {
        $this->paragraphs = $paragraphs;
    }

    public function write($text)
    {
        $this->paragraphs->text = $this->paragraphs->text . " " . $text;
    }

    public function __destruct()
    {
        $point = $this->paragraphs->get_point();
        echo "Finish Thesis with " . $point;
    }
}

$calc = new Calculator("phpinfo();");
$stu = new Student("dat",18,$calc);
$thesis = new Thesis($stu);

echo serialize($thesis);
?>