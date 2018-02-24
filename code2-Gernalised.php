<?php
	$dataarray = ['1891'=>'46','1901'=>'66','1911'=>'81','1921'=>'93','1931'=>'101'];
	$wherefind=1895;
	$xvalues=array_keys($dataarray);
	$ini=$xvalues[0];
	$h=$xvalues[1]-$xvalues[0];
	$data = array_values($dataarray);
	$d="dy";
	$p = ($wherefind-$ini)/$h;
	
	$x=count($dataarray)-1;
	$k=1;
	$g=$data;
	while($x!=0){
		$i=0;
		for($j=1;$j<count($g);$j++){
			${$d.$k}[] = $g[$j]-$g[$i++];
		}
		$dyx[$d.$k]=${$d.$k};
		$g=${$d.$k++};
		$x--;
	}
		echo "Data : <br>";
		echo "&nbsp;&nbsp;&nbsp; x &nbsp;&nbsp;::&nbsp;&nbsp; y <br>";
	foreach($dataarray as $key=>$datas){
		echo $key." :: ".$datas."<br>";
	}
		echo "<hr>";
	var_dump($dyx);
	extract($dyx);
	echo "<hr>";
	foreach($dyx as $dx){
		var_dump($dx);
	}	
		
		
	$sum=[];
	for($i=0;$i<count($data);$i++){
		if($i==0){
			$sum[] = (p($p,0)*$data[0])/fact($i);
		}else{
			$sum[] = (p($p,$i)*${$d.$i}[0])/fact($i);
		}
	}
	echo "<hr>";
	echo "Answer : ".array_sum($sum)." (approx)";
	
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