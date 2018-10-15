<?php
    class Connection
    {
        function mkConnection()
        {
            $con=new mysqli("localhost","root","","oi&bp");
            return $con;
        }
    }
?>