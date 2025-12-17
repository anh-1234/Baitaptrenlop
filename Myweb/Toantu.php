<?php

//Biến toàn cục

function test(){
	$name = "Nguyen Van A"; // Biến cục bộ 
	echo "<h1 style='color:red'>Xin chào bạn $name</h1>";
}
test ();
echo "<h1> Gía trị biến name ngoài thân hàm: $name</h1>";

//Hằng số
//CÁCH 1
const CARS = "Toyota";
echo CARS;
echo "<br>";
//CÁCH 2
define ("OTO",["Nissan","Toyota","Mistsubishi"]);
echo OTO[2];
echo "<br>";
//Một số hằng có sẵn
echo _DIR_; //Hiển thị thư mục hiện hành
class otocon {
	function test (){
		return _CLASS_;
	}
}
$x = new otocon();
echo $x->test ();
//Toán tử
$x = 10;
$y = 2;
echo $x + $y;
echo "<br>";
echo $x - $y;
echo "<br>";
echo $x * $y;
echo "<br>";
echo $x / $y;
echo "<br>";
echo $x % $y;
echo "<br>";
echo $x ** $y;
echo "<br>";
//Phép gán
$x = 10;
$y = 2;
echo $x += 2;
echo "<br>";
echo $x -= 2;
echo "<br>";
echo $x *= 2;
echo "<br>";
echo $x / $y;
echo "<br>";
echo $x %= 2;
echo "<br>";
// Toán tử tăng / giảm
echo $x++;
echo "<br>";
echo ++$x;
echo "<br";
echo $x; //1 
echo "<br";
echo $x --;
echo "<br>";
echo $x; //1 
echo "<br";

?>


