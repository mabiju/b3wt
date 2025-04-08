<?php
function OuterFunction()
{
    echo "Hello World";
    function InnerFunction()
    {
        echo "hello Nepal";
    }
}

OuterFunction();
InnerFunction();
