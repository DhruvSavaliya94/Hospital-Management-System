<?php
class Debug
{
    var $msg;
    function __construct($txt)
    {
        $this->msg = $txt;
    }
    function show()
    {
        echo '<script type="text/JavaScript">  
          alert("' . $this->msg . '"); 
          </script>';
    }
}
