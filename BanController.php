<?php 
    function calSteps($n)
    {
    	if (n==1) return 1 ; 
    	if (n==2) return 2; 
    	return calSteps(n:$n-1)+calSteps(n:$n-2);


    }
echo calSteps(n:10);

 ?>