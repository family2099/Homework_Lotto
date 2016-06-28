<?php
	header("content-type: text/html; charset=utf-8");
	//方法一
	function deletemethod()
	{
		$a=[];
		$random_keys=[];
		for($i=0;$i<=48;$i++)
		{
			$a[$i]=$i+1;
			
		}
		//var_dump($a);
		for($q=0;$q<6;$q++)
		{
			//array_pop($a);//陣列最後一個單元移除
			$random_keys[$q]=$a[array_rand($a,1)];
			//echo $random_keys[$q]."<br>";
			foreach($a as $key=>$value){
		    	if($value == $random_keys[$q]){
		        	unset($a[$key]);
		        	$a=array_values($a);
		    	 }
	    	}
			
		}
		//var_dump($a);
		echo "<h2>"."大樂透號碼(刪除的方法)"."</h2>";	
		foreach($random_keys as $key1 => $value1){
			if($key1!=5)
			{
		   		echo $value1.",";
			}
			else
			{
				echo $value1;
				
			}
	    }
	}
	deletemethod();
		//方法二
	function pushmethod()
	{	
		$b=[];
		for($i=0;$i<=48;$i++)
		{
			$b[$i]=$i+1;
			
		}
		for($q=0;$q<6;$q++)
		{
			
			$random_keys[$q]=$b[rand(0+$q,48)];
			
			echo "<br>";
			foreach($b as $key=>$value){
		    	if($value == $random_keys[$q]){
		    		unset($b[$key]);
		        	array_unshift($b, $random_keys[$q]);//在陣列開頭插入一個或多個元素或陣列
		        	$b=array_values($b);
		    	 }
	    	}
			//var_dump($b);
			//echo "<br>";
		}
		echo "<h2>"."大樂透號碼(重複的數字往前移的方法)"."</h2>";
		foreach($random_keys as $key1 => $value1){
			if($key1!=5)
			{
		   		echo $value1.",";
			}
			else
			{
				echo $value1;
				
			}
	    }
	}
	pushmethod();	
?>

