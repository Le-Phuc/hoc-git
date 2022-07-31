<?php

//bài 1 tính tổng s = 1+2+3+...+n
	$n = 10;
	$total = 0;
	for ($i=1; $i <= $n ; $i++) 
	{ 
		$total = $total + $i;
	}
	echo "Tổng là: " .$total;
	echo "<hr/>";
//bài 2 tính tổng s = 1 + 1*2 + 1*2*3 + ... + 1*2*3*...*n
	$n = 5;
	$total = 0;
	for ($i=1; $i <= $n ; $i++) 
	{ 	
		$multiply = 1;
		for ($j=1; $j <= $i ; $j++) 
		{ 
			$multiply = $multiply * $j;
		}
		$total = $total + $multiply;
	}
	echo "Tổng là: " .$total;
	echo "<hr/>";
//bài 3 tính tổng các số nghuyên lẻ từ 1->n
	$n = 6;
	$total = 0;
	for ($i=0; $i <= $n ; $i++) 
	{ 
			if ($i % 2 == 1) 
			{
				$total = $total + $i;
			}
	}
	echo "Tổng là: " .$total;
	echo "<hr/>";
//bài 4 tính tổng các số nghuyên chẵn từ 1->n
	$n = 5;
	$total = 0;
	for ($i=0; $i <= $n ; $i++) 
	{ 
			if ($i % 2 == 0) 
			{
				$total = $total + $i;
			}
	}
	echo "Tổng là: " .$total;
	echo "<hr/>";	

//bai8
	for ($i = 1; $i <= 5; $i++) {
        for ($j = $i; $j < 5; $j++) {
            echo "&nbsp&nbsp";
        }

        for ($j = 1; $j <= (2 * $i - 1); $j++) {
            echo "*";
        }

        echo "<br>";
    }
    echo "<hr/>";
 //bai 10
    $n = 90 ;
    $total = 0;
    if ($n <= 1) 
    {
    	$total = 15000;
    	echo "số tiền cần trả là: " .$total;
    }else
    {
    	if ($n > 1 && $n <= 5) 
    	{
    		$total = 15000 + 12000 * ($n-1);
    		echo "số tiền cần trả là: " .$total;
    	}else
    	{
    		if ($n >= 6 && $n <= 140) 
    		{
    			$total = 15000 + 12000*4 + 90000*($n-5);
    			echo "số tiền cần trả là: " .$total;
    		}else
    		{
    			$total = (15000 + 12000*4 + 90000*134) * 14/100;
    			echo "số tiền cần trả là:" .$total;
    		}
    	}
	}

?>