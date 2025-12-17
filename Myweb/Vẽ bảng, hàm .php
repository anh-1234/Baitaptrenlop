<?php

	// Vẽ bảng bằng PHP 
	function DrawTable($row, $col)
	{
	echo "<table border=1 style='color:red'>";
		for ($r=1; $r<=$row; $r++){
		echo "<tr>";
		for ( $c=1; $c<=$col; $c++)
			echo "<th>Text heading </th>";
			echo "<th>Text heading </th>";
		echo "</tr>";
			echo "<td> any text here </td>";
		echo "</tr>";
		
	echo "</table>";
	}
	DrawTable(4,5);// Gọi hàm không có giá trị trả về
	echo "<br>";
	function Add2number ($x =1, $y =1)
	{
		return $x + $y;
	}
	$c = Add2number(3,4); // Gọi hàm có giá trị trả về
	echo $c;
	// array 
	$name =  array(" Hoai, Anh, Nhai");
	var_dump($name);
	echo "<br>";
	echo count($name)."<br>";// đếm số phần tử cửa mảng
	$name[1] = "Hieu";
	var_dump($name);
	echo "<br>";
	array_push($name, "Minh", "Tuan","Hoa");
	var_dump($name);
	echo count($name)."<br>";// đếm số phần tử trong mảng
	// Xóa phần tử trong mảng
	array_splice($name, 1, 1);
	var_dump($name);
	echo "<br>";
	sort($name); // sx tăng dần
	var_dump($name);
	echo "<br>";
	rsort($name);
	var_dump($name);
	echo "<br>";
	// hàm sort khác - mảng 2 chiều
	$cars = array(
	array("Xe may", 5+2, "1b");
	array("Honda", 5, "500m");
	array("Xa khach", 6, "900m");
	);
	// 2 vòng lặp
	for ( $i=0; $i<3; $i++){
		for ( $j=0; $j<3; $j++){
			echo $cars[$i][$j]. " | ";
		}
		echo "<br>";
	}
	// supper golbal variable : BIẾN TRUY CẤP BẤT KÌ TRONG CHƯƠNG TRÌNH MÀ KHÔNG CẦN GỌI
	/*
	$GLOBALS
	$_SERVER
	$_POST
	$_GET
	$_EVN
	$_COOKIE
	$_SESSION
	*/
	
	$x = 15;
	function printX(){
		global ($x);
		echo " Inside function " . $x . "<br>";
	}
	// Gọi hàm 
	print();
	
	// 
	function printServer(){
		global ($x);
		echo " Sever  " . $_SERVER['PHP_SELF'] . "<br>";
		echo " Severname  " . $_SERVER['SEVER_NAME'] . "<br>";
		echo " SeverHost  " . $_SERVER['HTTP_HOST'] . "<br>";
		echo " Sever Script " . $_SERVER['SCRIPT_NAME'] . "<br>";
	}
	// Gọi hàm 
	printServer();
			
?>
 

