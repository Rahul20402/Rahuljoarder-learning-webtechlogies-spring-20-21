<?php
      
        $numbers = array('1','3','4','6','8','10');
        $arrayLength = count($numbers);
        $element = "4";
        for ($i=0; $i <$arrayLength ; $i++) 
        { 
        	echo "$numbers[$i]";
        	echo "<br>";
        	if ($numbers[$i]==$element)
        	{
        		echo "Value is found and the index of the value is:". $i . "<br>" . "". " And the value is: ". $numbers[$i] ;
        		echo "<br>";
        	}

        }
        
     ?>