<?php

        echo "For printing star *: ";
        for ($i=0; $i <6 ; $i++) 
        { 
        	for ($j=0; $j <$i ; $j++) 
        	{ 
        		echo " * ";
        	}
        	echo "<br>";
        }

        echo "<br>";

        
        echo "For printing reverse number:";
        echo "<br>";
        for ($i=6; $i >=1 ; $i--) 
        { 
        	for ($j=1; $j<=$i ; $j++) 
        	{ 
        		echo " $j ";
        	}
        	echo "<br>";
        }

        echo "<br>";

         echo "For printing alphabetic letter: ";
         $v = 65;
        for ($i=0; $i <6 ; $i++) 
        { 
        	for ($j=0; $j <$i ; $j++) 
        	{ 
        		echo  chr($v), " ";
        		$v++;
        	}
        	echo "<br>";
        }
        
     ?>