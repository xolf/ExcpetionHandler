<?php

class ownException extends Exception
{

    public function __construct($message = "", $code = 0, Exception $previous = NULL)
    {

        echo '<pre><code><b>"'.$message.'"</b>
' . new Exception("", $code, $previous) . '</code></pre>';

        die();

    }

}
