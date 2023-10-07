<?php

class Student
{

    public $name;
    public $age;
    public $exam;
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
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

class Logger
{
    public $filepath;
    public function __construct($filepath)
    {
        $this->filepath = $filepath;
    }

    public function log($data)
    {
        $file = fopen($this->filepath, "w");
        fwrite($file, $data);
        fclose($file);
    }

    public function close()
    {
        system("rm " . $this->filepath);
    }
}



?>