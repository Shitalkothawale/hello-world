<?php
	
	if(isset($_POST['submit']))
	{
		$x=$_POST['xdir'];
		$y=$_POST['ydir'];
		$d=$_POST['dir'];
		$s=$_POST['walk'];
		
		$s=strtoUpper($s);
		
		//echo $x." "  .$y." " .$d. " " .$s;
		echo "<br>";
		$s=str_split($s);
		//print_r($s);
		//echo "<br>";
		$sl=count($s);
		//echo $sl;
		//$i=0;
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



?>
<html>
<form action="" method="post">
<table>
	<tr>
		<td>Current X Position</td>
		<td><input type="number" name="xdir" required=""></td>
	</tr>
	<tr>
		<td>Current Y Position</td>
		<td><input type="number" name="ydir" required=""></td>
	</tr>
	<tr>
		<td>Current Direction</td>
		<td>
			<select name="dir" required="">
			<option value="north">North</option>
			<option value="south">South</option>
			<option value="west">West</option>
			<option value="east">East</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>Walk String</td>
		<td><input type="text" name="walk" required=""></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="submit" value="submit"></td>
	</tr>
</table>
</form>

</html>