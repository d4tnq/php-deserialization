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

$calc=new Calculator("phpinfo();");

echo serialize($calc);

?>