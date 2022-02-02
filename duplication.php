<?php
$arr = array( 1 , 5 , 4 , 6 , 5 , 1  );
$k=0;
for ($x = 0; $x <= 5 ; $x++) {
	for ($y = $x + 1; $y <= 5 ; $y++) {
		//if ( $k==0) 
		//{
		if ( $arr [$x] == $arr [$y] ) 
		{
			//print_r  ( $arr [$x]) ;
			$ary[$k] = array ( $y )  ;
			$k++;
		}
	//}
	//else
		//break;

}

}
sort($ary);

$p = print_r ( array_values($ary[0] ); 

print_r  ( $arr [$p] ) ;


?>