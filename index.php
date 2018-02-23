<?php
	$dataarray = ['1891'=>'46','1901'=>'66','1911'=>'81','1921'=>'93','1931'=>'101'];
	$wherefind=1895;
	$xvalues=array_keys($dataarray);
	$ini=$xvalues[0];
	$h=$xvalues[1]-$xvalues[0];
	$data = array_values($dataarray);
	$d="dy";
	$p = ($wherefind-$ini)/$h;
	$i=0;
	for($j=1;$j<count($data);$j++){
		$dy1[] = $data[$j]-$data[$i];
		$i++;
	}
	$i=0;
	for($j=1;$j<count($dy1);$j++){
		$dy2[] = $dy1[$j]-$dy1[$i];
		$i++;
	}
	$i=0;
	for($j=1;$j<count($dy2);$j++){
		$dy3[] = $dy2[$j]-$dy2[$i];
		$i++;
	}
	$i=0;
	for($j=1;$j<count($dy3);$j++){
		$dy4[] = $dy3[$j]-$dy3[$i];
		$i++;
	}
	var_dump($dy1);
	var_dump($dy2);
	var_dump($dy3);
	var_dump($dy4);
	$sum=[];
	for($i=0;$i<count($data);$i++){
		if($i==0){
			$sum[] = (p($p,0)*$data[0])/fact($i);
		}else{
			$sum[] = (p($p,$i)*${$d.$i}[0])/fact($i);
		}
	}
	
	echo array_sum($sum)." (approx)";
	
	function fact($x){
		if($x!=0){
			return $x*fact($x-1);
		}
		return 1;
	}
	
	function p($x,$y){ // $x is value of p and $y is iterations
		$p=1;
		for($i=0;$i<$y;$i++){
			$p *= $x-$i;
		}
		return $p;
	}
?>