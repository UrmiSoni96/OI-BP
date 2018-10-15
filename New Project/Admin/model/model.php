<?php

    $htdocs_path = $_SERVER['DOCUMENT_ROOT'];
    include("inc/connection.php");
    
    $connect = new connection();
    $con = $connect->connect();
    
    class mymodel
    {
              

        public function join_two($conn,$table1,$table2,$join)
	{
	   $sel="select * from $table1 join $table2 on $join"; 
		//echo $sel;
		$exe=$conn->query($sel);
		while($f = $exe->fetch_object())
                                    {
                                        $row[] = $f;
                                    }
                                    if(isset($row))
                                        return $row;
	}
	
        
        public function join_three($conn,$table1,$table2,$join,$table3,$join2)
	{
	    $sel="select * from $table1 join $table2 on $join join $table3 on $join2";  
		//echo $sel; exit;
            $exe=$conn->query($sel);
		while($f=$exe->fetch_object())
		{
			$row[]=$f;
		}
		return $row;
	}
        
        public function join_four($conn,$table1,$table2,$join,$table3,$join2,$table4,$join3)
        {
            $sel="select * from $table1 join $table2 on $join join $table3 on $join2 join $table4 on $join3"; 
	    //echo $sel; 
            $exe=$conn->query($sel);
		while($f=$exe->fetch_object())
		{
			$row[]=$f;
		}
		return $row;
        }
        
        //Login With Join

        public function login_select_where($conn,$table1,$table2,$join,$where)
        {
            $sel = "select * from $table1 join $table2 on $join where 1=1 ";
            
            foreach($where as $d=>$v)
            {
                $sel.= " and $d = '$v'";
            }
            //echo $sel; exit;
           $ex =  $conn->query($sel);
           $ff = $ex->fetch_object();
           return $ff;
        }
        
        
        public function select_where_join($conn,$table1,$table2,$join,$where)
        {
            $sel = "select * from $table1 join $table2 on $join where 1=1 ";
            
            foreach($where as $d=>$v)
            {
                $sel.= " and $d = '$v'";
            }
            //echo $sel; 
           $ex =  $conn->query($sel);
           while($ff = $ex->fetch_object())
           {
               $rr[]=$ff;
           }
           return $rr;
        }
       
        
         public function join_four_where($conn,$table1,$table2,$join,$table3,$join2,$table4,$join3,$where)
        {
            $sel="select * from $table1 join $table2 on $join join $table3 on $join2 join $table4 on $join3"; 
	     $sel.=" Where 1=1";
            foreach($where as $d=>$v)
            {
                $sel.= " and $d = '$v'";
            }
           // echo $sel; 
           $ex =  $conn->query($sel);
           $ff = $ex->fetch_object();
           
           return $ff;
        }
        //Search with between
        
        public function search_between($conn,$table1,$table2,$join,$colmn,$frm,$to)
        {
            $sr = "select * from $table1 join $table2 on $join where $colmn between '$frm' and '$to'";
           
             //echo $sr; exit;
             $ex = $conn->query($sr);
             while($fe = $ex->fetch_object())
             {
                 $rr[] = $fe;
             }
             return $rr;
        }

        function dis_join($con,$tbl1,$tbl2,$str)
        {
            $q="select * from `$tbl2` INNER JOIN `$tbl1` ON $str";
            $al=$con->query($q);
            //echo $q;exit;
            while($rows=$al->fetch_object())
            {
                $r[]=$rows;
            }
            
            return $r;
        }

        // For Select All Data
        public function select_all($conn,$tbl)
        {
                        $select = "Select * from $tbl"; 
			$ex = $conn->query($select);
			while($fetch = $ex->fetch_object())
			  {
				 $rows[] = $fetch;
			  }
			  return $rows;
        }
        
        function display($con,$table)
        {
            $q="select * from $table";
            $all=$con->query($q);
            while($row=$all->fetch_object())
            {
                $r[]=$row;
            }
            return $r;
        }
        
        // For Insert Data
       
		
        public function insert($conn,$tbl,$data)
        {
             $columns = array_keys($data);
			 $values = array_values($data);
			 
			 $cols = implode(",",$columns);
			 $vals = implode("','",$values);
			 
			 $insert = "insert into $tbl($cols) values('$vals')"; 
			 //echo $insert; exit;
                         $insert_ex = $conn->query($insert);
			 
			 return $insert_ex;
			             
        }
        
        // For Delete Data
        public function delete($conn,$table,$where)
        {
            $del = "delete from $table where 1=1 ";
            foreach($where as $kk=>$vv)
            {
                $del.= " and $kk = '$vv' ";
            }
             //echo $del; exit;
             $ex = $conn->query($del);
             return $ex;
        }
        
        
        // For Update Data
       public function update($con,$table,$data,$where)
	{
		$key=array_keys($data);
		$val=array_values($data);
		$sel="update $table set ";
		$i=0;
		foreach($data as $dw)
		{
			if(sizeof($data)==$i+1)
			{
			$sel.=" $key[$i]='$val[$i]'";			
			}
			else
			{
		     $sel.=" $key[$i]='$val[$i]',";

			}
			$i++;
		}
	        $sel.=" where 1=1 ";
		$wkey=array_keys($where);
		$wval=array_values($where);
		$j=0;
		foreach($where as $v)
		{
			$sel.=" and $wkey[$j]='$wval[$j]'";
			$j++;
		}
		//echo $sel; exit;
		$row=$con->query($sel);
		return $row;
	}
 
        // Join Three Tables
        
        // Count Records
        
        public  function count_records($conn,$table)
        {
            $sel = "select * from $table";
            //echo $sel;exit;
            $ex = $conn->query($sel);
            
            $nm = $ex->num_rows;
            return $nm;
            
        }

        //Count rows
    
        // For Join Tables
        public function select_join($conn,$tables,$where)
        {
            $table = implode(",",$tables);
            $sel = "select * from $table where 1=1 and ";
            
            $i = 0;
            foreach($where as $cols=>$values)
            {
                if(sizeof($where)==$i+1)
                {
                $sel.= "$cols = $values ";
                $i++;
                }
                else
                {
                 $sel.= "$cols = $values and ";
                 $i++;
                }
            }
//                 /echo $sel;exit;
                 $ex = $conn->query($sel);
                 while($fe = $ex->fetch_object())
                 {
                     $tl_emp[]=$fe;
                 }
                     return $tl_emp;
                 
        }
        
        
        
        
        // For Fetch a Row
        
        public function select_where($conn,$tbl,$data)
        {
            $sel_where = "select * from $tbl where 1=1 and ";
            
            $login_columns = array_keys($data);
            $login_values = array_values($data);
            $i = 0;
            
            foreach ($data as $d)
            {
                if(sizeof($data)==$i+1)
                {
                   $sel_where.="$login_columns[$i] = '$login_values[$i]' ";
                   $i++;
            }
                else
                {
                   $sel_where.="$login_columns[$i] = '$login_values[$i]' and ";
                   $i++;
                }
            }
             //echo $sel_where; 
             $sel = $conn->query($sel_where);
             return $sel;
        }
        
    
           // Search data
        
             function search($con, $table, $data)
             {
                 $ser = "select * from $table where 1 = 1 and ";
                 $i=0;
                   foreach($data as $k=>$v)
                   {
                       if(sizeof($data)==$i+1)
                       {
                          $ser.="$k like '%$v%' ";
                       }
                       else
                       {
                            $ser.="$k like '%$v%' or ";
                       }
                       $i++;
                   }
                    //echo $ser; exit;
                   $ex = $con->query($ser);
                   while($fe=$ex->fetch_object())
                   {
                       $tt[]=$fe;
                   }
                   return $tt;
             }
    }
    
    

?>