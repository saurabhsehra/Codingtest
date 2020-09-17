<?php 

function getMaxLength($arr, $n) 
{ 
    
    $count = 0;  
    $result = 0;  
  
    for ($i = 0; $i < $n; $i++) 
    { 
    
        if ($arr[$i] == 0) 
            $count = 0; 

        else
        {
            $count++; 
            $result = max($result, $count); 
        } 
    } 
  
   echo "Output : " .$result ." [Max num of consecutive 1's is ]     ". $result; 
} 
  

$arr = array(0, 0, 1, 1, 0, 0,0,1,0,0,1,1,1,0);  
          
$n = sizeof($arr) / sizeof($arr[0]); 
echo getMaxLength($arr, $n) ; 
?> 
