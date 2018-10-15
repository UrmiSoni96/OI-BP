<?php

   class connection
   {
       public function connect()
       {
           $con = new mysqli("localhost","root","","oi&bp");
           return $con;
       }
   }

?>