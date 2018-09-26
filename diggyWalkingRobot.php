<?php
	if(isset($argc))
	{
		/*for($i=1;$i<$argc;$i++)
		{
			echo $argv[$i];
		}*/
		$x=$argv[1];
		$y=$argv[2];
		$d=$argv[3];
		$s=$argv[4];
		$d=strtoLower($d);
		$s=strtoUpper($s);
		//echo $x." "  .$y." " .$d. " " .$s;
		
		$s=str_split($s);
		//print_r($s);
		$sl=count($s);
		//echo $sl;
		for($i=0;$i<$sl;$i++)
		{
			if($s[$i]=="R")
			{
				
				if($d == "north")
				{	

					$d = "east";
					continue;
				}
				if($d == "south")
				{ 
				 
					$d = "west";
					continue;
				}
				if($d == "east")
				{
					
					$d="south";
					continue;
				}
				if($d == "west")
				{
					
					$d = "north";
					continue;
				}
			}
			
			if($s[$i]=="L")
			{
				if($d=="north")
				{
					$d="west";
					continue;
				}
				if($d=="south")
				{
					$d="east";
					continue;
				}
				if($d=="east")
				{
					$d="north";
					continue;
				}
				if($d=="west")
				{
					$d="south";
					continue;
				}
			}
			
			if($s[$i]=="W")
			{
				$u=$s[$i+1];
			
				if($d=="north")
				{
					$y=$y+$u;
					continue;
				}
				if($d=="south")
				{
					$y=$y-$u;
					continue;
				}
				if($d=="east")
				{
					$x=$x+$u;
					continue;
				}
				if($d=="west")
				{
					$x=$x-$u;
					continue;
				}
			}
			

		}
		
		echo $x." "  .$y." " .$d;
	} 
	else
	{
		echo " disabled";
	}
	
?>
