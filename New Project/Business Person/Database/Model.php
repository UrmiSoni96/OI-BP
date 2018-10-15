<?php
    include 'Connection.php';
    $con1=new Connection();
    $con=$con1->mkConnection();
    
    class model
    {
        function insert($con,$stu,$table)
        {
            $k=array_keys($stu);
            $col=implode(",",$k);
            
            $v=array_values($stu);
            $val=implode("','",$v);
            
            $q="insert into $table($col) values('$val')";
            //echo $q;exit;
            return $con->query($q);
        }
        
        function insert_con($con,$stu,$table,$where)
        {
            $k=array_keys($stu);
            $col=implode(",",$k);
            
            $v=array_values($stu);
            $val=implode("','",$v);
            
            $q="insert into $table($col) values('$val') where 1=1";
            
            foreach($where as $k=>$v)
            {
                $q.=" and $k='$v'";
            }
            
            //echo $q;exit;
            $con->query($q);
        }
        
        function display($con,$table)
        {
            $q="select * from $table";
            $all=$con->query($q);
            while($row=$all->fetch_object())
            {
                $r[]=$row;
            }
            if(isset($r))
                return $r;
        }
        
        function sel_count($con,$col,$table,$where)
        {
            $q="select count($col) from $table where 1=1";
            foreach($where as $k=>$v)
            {
                $q.=" and $k='$v'";
            }
            //echo $q;exit;
            $cnt=$con->query($q);
            return $cnt;
        }
        function dis_join($con,$tbl1,$tbl2,$str)
        {
            $q="select * from `$tbl2` INNER JOIN `$tbl1` ON $str";
            $al=$con->query($q);
            
            while($row=$al->fetch_object())
            {
                $r[]=$row;
            }
            
            if(isset($r))
                return $r;
        }
        
        function dis_join_con($con,$tbl1,$tbl2,$str,$where)
        {
            $q="select * from `$tbl2` RIGHT JOIN `$tbl1` ON $str where 1=1";
            
            foreach($where as $k=>$v)
            {
                $q.=" and $k='$v'";
            }
            $al=$con->query($q);
            //echo $q;exit;
            while($row=$al->fetch_object())
            {
                $r[]=$row;
            }
            
            if(isset($r))
                return $r;
        }
        
        function dis_join_con1($con,$tbl1,$tbl2,$str,$where)
        {
            $q="select * from `$tbl2` INNER JOIN `$tbl1` ON $str where 1=1";
            
            foreach($where as $k=>$v)
            {
                $q.=" and $k='$v'";
            }
            $al=$con->query($q);
            //echo $q;exit;
            if($al->num_rows!=0)
            {
                while($row=$al->fetch_object())
                {
                    $r[]=$row;
                }
                if(isset($r))
                {
                    return $r;
                }
            }
            
        }
        
        function dis_idea($con,$tbl1,$tbl2,$str,$where)
        {
            $q="select * from `$tbl2` INNER JOIN `$tbl1` ON $str";
            
            foreach($where as $k=>$v)
            {
                $q.=" and $k='$v'";
            }
            $al=$con->query($q);
            //echo $q;exit;
            if($al->num_rows!=0)
            {
                while($row=$al->fetch_object())
                {
                    $r[]=$row;
                }
                if(isset($r))
                {
                    return $r;
                }
            }
            
        }
        
        
        function dis_mul($con,$table,$where)
        {
            $q="select * from $table where ";
            foreach($where as $k=>$v)
            {
                $q.=" $k='$v'";
            }
            
            $all1=$con->query($q);
            
            while($row=$all1->fetch_object())
            {
                $r[]=$row;
            }
            if(isset($r))
                return $r;
        }
        function delete1($con,$table,$where)
        {
            $q="delete from $table where 1=1";
            foreach($where as $k=>$v)
            {
                $q.=" and $k='$v'";
            }
            //echo $q; exit;
            return $con->query($q);
        }
        function edit($con,$table,$where)
        {
            $q="select * from $table where ";
            foreach($where as $k=>$v)
            {
                $q.=" $k='$v'";
            }
            $all=$con->query($q);
            
            if(isset($all))
                $row=$all->fetch_object();
            
            if(isset($row))
                return $row;
        }
        function updt($con,$data,$table,$where)
        {
            $q="update $table set ";
            foreach($data as $k=>$v)
            {
                $q.="$k='$v',";
            }
            $q=rtrim($q,",");
            $q.=" where ";
            foreach($where as $m=>$n)
            {
                $q.="$m='$n'";
            }
            
            
            $con->query($q);
            
        }
        
        function login($con,$table,$where)
        {
            $q="select * from $table where 1=1";
            foreach($where as $k=>$v)
            {
                $q.=" and $k='$v'";
            }
            $all=$con->query($q);
            
            return $all;
        }
        
        
        function sel_limit($con,$table)
        {
            $q="select * from $table limit 5";
            
            $all=$con->query($q);
            while($row=$all->fetch_object())
            {
                $r[]=$row;
            }
            return $r;
        }
    }
?>